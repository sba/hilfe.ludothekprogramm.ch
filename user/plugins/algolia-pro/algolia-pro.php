<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Data\Blueprint;
use Grav\Common\Data\Blueprints;
use Grav\Common\Data\Data;
use Grav\Common\Filesystem\Folder;
use Grav\Common\Grav;
use Grav\Common\Language\Language;
use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Page\Page;
use Grav\Common\Plugin;
use Grav\Common\Scheduler\Scheduler;
use Grav\Common\Twig\Twig;
use Grav\Common\Uri;
use Grav\Common\Utils;
use Grav\Console\ConsoleCommand;
use Grav\Events\FlexRegisterEvent;
use Grav\Events\PermissionsRegisterEvent;
use Grav\Framework\Acl\PermissionsReader;
use Grav\Plugin\Admin\AdminController;
use Grav\Plugin\AlgoliaPro\AlgoliaProController;
use Grav\Plugin\AlgoliaPro\AlgoliaProControllerInterface;
use Grav\Plugin\AlgoliaPro\AlgoliaProFactory;
use Grav\Plugin\Console\AlgoliaIndexerCommand;
use RocketTheme\Toolbox\Event\Event;
use RocketTheme\Toolbox\File\YamlFile;
use RocketTheme\Toolbox\ResourceLocator\UniformResourceLocator;
use Symfony\Component\Console\Input\InputOption;
use Twig\TwigFunction;

/**
 * Class AlgoliaProPlugin
 * @package Grav\Plugin
 */
class AlgoliaProPlugin extends Plugin
{
    /** @var int[] */
    public $features = [
        'blueprints' => 100,
    ];

    /** @var AlgoliaProControllerInterface */
    protected $algolia;

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            FlexRegisterEvent::class => [
                ['onRegisterFlex', 100]
            ],
            PermissionsRegisterEvent::class => [
                ['onRegisterPermissions', 100]
            ],
            'onPluginsInitialized'      => [
                ['onPluginsInitialized', 0]
            ],
            'onTwigInitialized'            => ['onTwigInitialized', 0],
            'onTwigTemplatePaths'          => ['onTwigTemplatePaths', 0],
            'onAlgoliaProCliConfiguration'  => ['onAlgoliaProCliConfiguration', 0],
            'onAlgoliaProCliServe'         => ['onAlgoliaProCliServe', 0],
            'onAlgoliaProIndexData'        => ['onAlgoliaProIndexData', 0],
            'onAlgoliaProRegisterSearch'   => ['onAlgoliaProRegisterSearch', 0],
            'onSchedulerInitialized'       => ['onSchedulerInitialized', 0],
        ];
    }

    /**
     * [onPluginsInitialized:100000] Composer autoload.
     *is
     * @return ClassLoader
     */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

        /**
     * @param FlexRegisterEvent $event
     * @return void
     */
    public function onRegisterFlex(FlexRegisterEvent $event): void
    {
        /** @var UniformResourceLocator $locator */
        $locator = $this->grav['locator'];

        $configFile = 'algolia-pro.yaml';
        $pluginsConfigPath = $locator->findResource("config://", true, false) . '/plugins';
        $configFilePath = "{$pluginsConfigPath}/{$configFile}";

        if (!file_exists($configFilePath)) {
            $file = YamlFile::instance($configFilePath);
            $file->save(['indexes' => $this->config()['indexes'] ?? null]);
            $file->free();
        }

        $flex = $event->flex;
        $flex->addDirectoryType('search', 'blueprints://flex/algolia-search.yaml');
    }

    /**
     * Initial stab at registering permissions (WIP)
     *
     * @param PermissionsRegisterEvent $event
     * @return void
     */
    public function onRegisterPermissions(PermissionsRegisterEvent $event): void
    {
        $permissions = $event->permissions;

        $actions = PermissionsReader::fromYaml("plugin://{$this->name}/permissions.yaml");

        $permissions->addActions($actions);
    }

    public function onAlgoliaProCliConfiguration(Event $e): void
    {
        /** @var ConsoleCommand $command */
        $command = $e['command'];

        if ($command instanceof AlgoliaIndexerCommand) {
            $command->addOption(
                'url',
                'u',
                InputOption::VALUE_REQUIRED,
                'Optional URL of JSON sitemap (CrawlPageSearch only)'
            );
            $command->addOption(
                'route',
                null,
                InputOption::VALUE_REQUIRED,
                'Optional route of a single specific page to index (GravPageSearch only)'
            );
        }

        $command->addOption(
            'indexes',
            'x',
            InputOption::VALUE_REQUIRED,
            'Optional comma-separated list of enabled index configurations to use'
        );
    }

    public function onAlgoliaProCliServe(Event $e): void
    {
        /** @var ConsoleCommand $command */
        $command = $e['command'];
        /** @var \stdClass $options */
        $options = $e['options'];

        if ($command instanceof AlgoliaIndexerCommand) {
            if ($url = $command->getInput()->getOption('url')) {
                $options->url = $url;
            }
            if ($route = $command->getInput()->getOption('route')) {
                $options->route = $route;
            }
        }

        $indexes = $command->getInput()->getOption('indexes');
        if (is_string($indexes)) {
            $indexes_list = array_map('trim', explode(',', $indexes));
            $options->indexes = $indexes_list;
        }

        if ($lang_code = $command->getInput()->getOption('lang')) {
            $options->lang = $lang_code;
        }
    }

    public function onAlgoliaProIndexData(Event $e): void
    {
        /** @var \stdClass $data */
        $data = $e['data'];
        $page = $e['object'];

        if ($page instanceof PageInterface) {
            /** @var Uri $uri */
            $uri = $this->grav['uri'];
            $base_url = $uri->rootUrl();
            $url = Utils::replaceFirstOccurrence($base_url, '', $page->url());

            // base properties
            $data->url = $data->url ?? $url;
            $data->title = $page->title();
            $data->summary = trim($page->summary(256, true));
            $data->access = $page->header()->access ?? null;

            // taxonomy
            $taxonomy = $page->taxonomy();
            if (!empty($taxonomy)) {
                $data->taxonomy = $taxonomy;
            }

            // language
            $lang = $page->language();
            if (!empty($lang)) {
                $data->language = $lang;
            }

            // breadcrumbs
            $breadcrumbs = [];
            while ($page && !$page->root()) {
                $breadcrumbs[] = ['name' => $page->menu(), 'url' => $page->url()];
                $page = $page->parent();
            }

            $data->breadcrumbs = array_reverse($breadcrumbs);
        }
    }

    /**
     * @param Event $e
     * @return void
     */
    public function onAlgoliaProRegisterSearch(Event $e): void
    {
        $searchTypes = [
            'algolia-grav-pages' => 'PLUGIN_ALGOLIA_PRO.GRAV_PAGES_SEARCH',
            'algolia-crawl-pages' => 'PLUGIN_ALGOLIA_PRO.CRAWL_PAGES_SEARCH'
        ];

        /** @var Data $register */
        $register = $e['register'];
        $register->merge($searchTypes);
    }

    /**
     * Handle the Reindex task from the admin
     *
     * @param Event $e
     * @throws \JsonException
     */
    public function onAdminTaskExecute(Event $e): void
    {
        $task = $e['method'] ?? null;

        if (in_array($task, ['taskReindexAlgolia', 'taskResetIndexAlgolia'])) {
            /** @var AdminController $controller */
            $controller = $e['controller'];
            header('Content-type: application/json');

            if (!$controller->authorizeTask('taskReindexAlgolia', ['admin.configuration', 'admin.super'])) {
                $json_response = [
                    'status'  => 'error',
                    'message' => '<i class="fa fa-warning"></i> Index not created',
                    'details' => 'Insufficient permissions to reindex Algolia Pro.'
                ];
                echo json_encode($json_response, JSON_INVALID_UTF8_SUBSTITUTE);
                exit;
            }

            // disable warnings
            error_reporting(1);
            // disable execution time
            set_time_limit(0);

            /** @var AlgoliaProController $algolia */
            $algolia = AlgoliaProFactory::create();
            $status = $algolia->index(['flush' => ($task === 'taskResetIndexAlgolia')]);

            $json_response = [
                'status'  => $status ? 'success' : 'error',
                'message' => 'Indexed just fine...'
            ];

            echo json_encode($json_response, JSON_INVALID_UTF8_SUBSTITUTE);
            exit;

        }
    }

    public function onTwigTemplatePaths(): void
    {
        /** @var Twig $twig */
        $twig = $this->grav['twig'];
        if ($this->isAdmin()) {
            $twig->twig_paths[] = __DIR__ . '/admin/templates';
        } else {
            $twig->twig_paths[] = __DIR__ . '/templates';
        }
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized(): void
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            if ($this->config->get('plugins.aloglia-pro.admin_index_events', true))
            {
                $this->enable([
                    'onFlexAfterSave'       => ['onObjectSave', 0],
                    'onFlexAfterDelete'     => ['onObjectDelete', 0],
                ]);
            }

            $this->enable([
                'onAdminMenu'               => ['onAdminMenu', 0],
                'onAdminTaskExecute'        => ['onAdminTaskExecute', 0],
                'onBlueprintCreated'        => ['onBlueprintCreated', 0],
            ]);

            $this->grav['assets']->addCss('plugin://algolia-pro/assets/admin/algolia-pro.css');
            $this->grav['assets']->addJs('plugin://algolia-pro/assets/admin/algolia-pro.js', ['group' => 'bottom', 'loading' => 'defer', 'priority' => -5]);
        } else {
            if ($this->config->get('plugins.aloglia-pro.site_index_events', true)) {
                $this->enable([
                    'onFlexAfterSave'       => ['onObjectSave', 0],
                    'onFlexAfterDelete'     => ['onObjectDelete', 0],
                ]);
            }

            $this->enable([
                'onPageInitialized' => ['onPageInitialized', 0],
            ]);
        }
        $this->algolia = AlgoliaProFactory::create();

    }

    public function onSchedulerInitialized(Event $event): void
    {
        $config = Grav::instance()['config'];
        $cronEnabled = $config->get('plugins.algolia-pro.sync.cron_enable', false);

        if ($cronEnabled) {
            $cronAt = $config->get('plugins.algolia-pro.sync.cron_at', '0 03 * * *');
            /** @var Scheduler $scheduler */
            $scheduler = $event['scheduler'];

            $job = $scheduler->addFunction('Grav\Plugin\AlgoliaPro\AlgoliaProFactory::index', [], 'AlgoliaPro');
            $job->at($cronAt);
        }
    }

    // Access plugin events in this class
    public function onTwigInitialized(): void
    {
        /** @var Twig $twig */
        $twig = $this->grav['twig'];
        $twig->twig()->addFunction(
            new TwigFunction('algolia_pro_settings', [$this, 'getPluginMergedSettings'], ['needs_context' => true])
        );
    }

    /**
     * Extend page blueprints with TOC options.
     *
     * @param Event $event
     */
    public function onBlueprintCreated(Event $event): void
    {
        static $inEvent = false;

        /** @var Blueprint $blueprint */
        $blueprint = $event['blueprint'];
        $form = $blueprint->form();

        $advanced_tab_exists = isset($form['fields']['tabs']['fields']['advanced']);

        if (!$inEvent && $advanced_tab_exists) {
            $inEvent = true;
            $blueprints = new Blueprints(__DIR__ . '/blueprints/');
            $extends = $blueprints->get('algolia-pro');
            $blueprint->extend($extends, true);
            $inEvent = false;
        }
    }

    /**
     * Add reindex button to the admin QuickTray
     */
    public function onAdminMenu(): void
    {
        $options = [
            'authorize' => 'taskReindexAlgolia',
            'hint' => 're-indexes the Algolia Pro index',
            'class' => 'algolia-reindex',
            'icon' => 'fa-clock-o'
        ];

        /** @var Twig $twig */
        $twig = $this->grav['twig'];
        $twig->plugins_quick_tray['Algolia Pro'] = $options;
    }

    /**
     * Perform an 'add' or 'update' for index data as needed
     *
     * @param Event $event
     * @return bool
     */
    public function onObjectSave(Event $event): bool
    {
        if (defined('CLI_DISABLE_ALGOLIAPRO')) {
            return true;
        }

        /** @var object|null $obj */
        $obj = $event['object'] ?: $event['page'];
        try {

           if ($obj instanceof PageInterface) {
               if ($obj->published() === false) {
                   $this->algolia->delete($obj);
                   return true;
               }
           }

           if ($obj && Utils::contains($obj->name, ".{$obj->lang}.")) {
               $this->algolia->update($obj);
           }
        } catch (\Exception $e) {
            Grav::instance()['log']->error("Algolia-Pro: {$e->getMessage()}");
        }


        return true;
    }

    public function onObjectDelete(Event $event): bool
    {
        if (defined('CLI_DISABLE_ALGOLIAPRO')) {
            return true;
        }

        /** @var object|null $obj */
        $obj = $event['object'] ?: $event['page'];
        try {
           if ($obj) {
            $this->algolia->delete($obj);
           }
        } catch (\Exception $e) {
            Grav::instance()['log']->error("Algolia-Pro: {$e->getMessage()}");
        }

        return true;
    }

    public function onPageInitialized(Event $event): void
    {
        /** @var Page $page */
        $page = $event['page'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? null;

        // Set some custom user agent stuff
        if ($user_agent === $this->config->get('plugins.algolia-pro.user_agent')) {
            /** @var Uri $uri */
            $uri = $this->grav['uri'];
            header('Grav-Base: ' . $uri->rootUrl(true));
            header('Grav-Page-Route: '. $page->route());

            /** @var Language $language */
            $language = $this->grav['language'];
            if ($language->enabled()) {
                $lang = $language->getActive() ?? $language->getDefault();
                header('Grav-Language: ' . $lang);
            }
        }
    }

    public static function getSearchTypes(): array
    {
        static $select;
        if (null === $select) {
             // Fire event to let others add search types
            $search_types = new Data();
            Grav::instance()->fireEvent('onAlgoliaProRegisterSearch', new Event(['register' => $search_types]));
            $select = $search_types->toArray();
        }

        return $select;
    }

    /**
     * @param int|string $index
     * @return array
     */
    public function getIndexConfiguration($index = null): array
    {
        $options = [];
        $language = $this->grav ['language'];
        if ($language->enabled()) {
            $options['lang'] = $language->getLanguage();
        }

        $controller = new AlgoliaProController();
        $configuration = $controller->configuration($options);

        return $index ? $configuration[$index] : $configuration;
    }

    /**
     * @param array $context
     * @param int|string $index
     * @param array $options
     * @return array
     */
    public function getPluginMergedSettings(array $context, $index, array $options = []): array
    {

        try {
            $indexConfiguration = $this->getIndexConfiguration($index);

            $indexSettings = [
                'index_key' => $indexConfiguration['name'] ?? null,
                'search' => $indexConfiguration['search_params'] ?? [],
                'interface' => $indexConfiguration['interface'] ?? [],
                'plugin' => $this->config->get('plugins.algolia-pro'),
            ];

            $page = $context['page'] ?? $this->grav['page'] ?? null;
            $headerSettings = [];
            if ($page instanceof PageInterface && $page->exists()) {
                $headerSettings = [
                    'search' => Plugin::inheritedConfigOption('algolia-pro', 'search_params', $page, []),
                    'interface' => Plugin::inheritedConfigOption('algolia-pro', 'interface', $page, []),
                ];
            }

            $merged_settings = array_replace_recursive(
                [],
                $indexSettings,
                $headerSettings,
                $options,
            );

            return $merged_settings;
        } catch (\Exception $e) {
            $this->grav['messages']->add($e->getMessage(), 'error');
        }

        return [];
    }
}
