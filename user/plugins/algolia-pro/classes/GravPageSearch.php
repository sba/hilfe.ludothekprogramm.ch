<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

use Algolia\AlgoliaSearch\Exceptions\MissingObjectId;
use Grav\Common\Grav;
use Grav\Common\Language\Language;
use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Page\Pages;
use Grav\Common\Yaml;
use RocketTheme\Toolbox\Event\Event;

class GravPageSearch extends BaseSearch implements AlgoliaProClassInterface
{
    /**
     * @param array $options
     * @return array
     */
    public function indexConfiguration(array $options = []): array
    {
        $grav = Grav::instance();
        $conf = $this->index_configuration;
        $name = null;

        /** @var Language $language */
        $language = $grav['language'];
        if ($language->enabled()) {
            if (isset($options['lang'])) {
                $lang = $options['lang'];
                unset($options['lang']);
            }
            $name = $lang ?? $language->getLanguage();
        }

        $index = $this->getIndexer($name);
        $conf->set('name', $index->getIndexName());

        return $conf->toArray();
    }

    /**
     * @param string $query
     * @param array $options
     * @return array
     */
    public function searchObjects(string $query, array $options = []): array
    {
        $grav = Grav::instance();
        $name = null;

        /** @var Language $language */
        $language = $grav['language'];
        if ($language->enabled()) {
            if (isset($options['lang'])) {
                $lang = $options['lang'];
                unset($options['lang']);
            }
            $name = $lang ?? $language->getDefault();
        }

        unset($options['indexes']);

        $index = $this->getIndexer($name);

        $index->setSettings($this->index_configuration->get('search_params'));

        return $index->search($query, $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public function indexObjects(array $options = []): array
    {
        $grav = Grav::instance();
        $status = [];

        unset($options['indexes']);

        /** @var Pages $pages */
        $pages = $grav['pages'];

        /** @var Language $language */
        $language = $grav['language'];
        $languages = isset($options['lang']) ? [$options['lang']] : $language->getLanguages();
        $default_lang = $language->getDefault();
        $hasReset = method_exists($pages, 'reset');


        // Flush index + record states if required
        if ($options['flush'] ?? false) {
            if ($language->enabled()) {
                foreach ($languages as $lang) {
                    $options['lang'] = $lang;
                    $this->clearObjects($options);
                }
            } else {
                $this->clearObjects($options);
            }
            $this->clearRecordStorage();

        }

        if ($language->enabled()) {
            if (count($languages) > 1 && in_array($default_lang, $languages)) {
                unset($languages[array_search($default_lang, $languages, true)]);
                array_unshift($languages, $default_lang);
            }

            foreach ($languages as $lang) {
                $options['lang'] = $lang;

                $language->init();
                $language->setActive($lang);
                if ($hasReset) {
                    $pages->reset();
                }

                $status = array_merge($status, $this->indexPages($options));
            }
        } else {
            $status = $this->indexPages($options);
        }

        return $status;
    }

    /**
     * @param array $options
     * @return array
     */
    public function clearObjects(array $options = []): array
    {
        if ($this->production_mode) {
            $name = $options['lang'] ?? $this->name;
            $index = $this->getIndexer($name);
            $index->clearObjects();
        }
        return [];
    }

    /**
     * @param object $object
     * @param array $options
     * @return array|string[]
     */
    public function updateObject(object $object, array $options = []): array
    {
        return $this->modifyObject($object, $options, true);
    }

    /**
     * @param object $object
     * @param array $options
     * @return array|string[]
     */
    public function deleteObject(object $object, array $options = []): array
    {
        return $this->modifyObject($object, $options, false);
    }

    /**
     * @param object $object
     * @param array $options
     * @param bool $update
     * @return array|string[]
     */
    public function modifyObject(object $object, array $options = [], bool $update = true): array
    {
        if ($this->production_mode === false) {
            return ['status' => 'success', 'message' => 'test mode'];
        }

        $status = [];

        if ($object instanceof PageInterface) {
            $records = $this->getPageData($object->content(), $object);
            $status = $this->updateRecord($records, $object, $update);
        }

        return $status;
    }

    /**
     * @param array $records
     * @param PageInterface $object
     * @param bool $update
     * @return array|string[]
     */
    protected function updateRecord(array $records, PageInterface $object, bool $update): array
    {

        if (isset($records[0])) {
            $grav = Grav::instance();

            /** @var Language $language */
            $language = $grav['language'];
            $lang = null;

            if ($language->enabled()) {
                $lang = $object->language() ?? $language->getLanguage();
            }

            $index = $this->getIndexer($lang);
            $objectIDs = $this->getObjectsByDistinct($records[0], $index);

            if ($this->production_mode) {
               if (!empty($objectIDs)) {
                    $index->deleteObjects($objectIDs);
               }

               if ($update) {
                   try {
                       $index->saveObjects($records);
                   } catch (MissingObjectId $e) {
                       return ['status' => 'error', 'message' => $e->getMessage()];
                   }
               }
            }

            $status = ['status' => 'success'];

        } else {
            $status = ['status' => 'error', 'message' => 'no record found'];
        }
        return $status;
    }

    /**
     * @param array $options
     * @return array
     */
    protected function indexPages(array $options = []): array
    {
        $grav = Grav::instance();

        /** @var Pages $pages */
        $pages = $grav['pages'];
        $pages->enablePages();

        // Get custom filters
        $filter = $this->index_configuration->get('filters');
        $records = [];
        $status = [];

        $lang = $options['lang'] ?? null;
        $route = $options['route'] ?? null;
        $index = $this->getIndexer($lang);
        $collection = [];

        if ($route) {
            $page = $pages->find($route);
            if ($page && $page->exists() && $page->routable() && $page->published()) {
                $collection[] = $page;
            }
        } elseif (is_array($filter) && array_key_exists('items', $filter)) {
            if (is_string($filter['items'])) {
                $filter['items'] = Yaml::parse($filter['items']);
            }

            $collection = $pages->getCollection($filter)->published()->routable();
        } else {
            $collection = $pages->all()->published()->routable();
        }

        $steps = count($collection);

        if ($callback = $this->getProgressCallback()) {
            $callback($steps, 'Index Config: <yellow>' . $this->name . '</yellow> | Algolia Index: <yellow>' . $index->getIndexName() . '</yellow>');
        }

        foreach ($collection as $page) {
            $url = $page->url();

            // update progress callback
            if ($callback = $this->getProgressCallback()) {
                $callback();
            }

            if (!$this->processPage($page)) {
                $status[] = [
                    'status' => 'info',
                    'msg' => 'Page manually skipped',
                    'url' => $url
                ];
                if ($callback = $this->getProgressCallback()) {
                    $callback(-1);
                }
                continue;
            }

            if ($page->redirect()) {
                $status[] = [
                    'status' => 'info',
                    'msg' => 'Page is a redirect',
                    'url' => $url
                ];
                if ($callback = $this->getProgressCallback()) {
                    $callback(-1);
                }
                continue;
            }

            try {
                $skip_event = Grav::instance()->fireEvent('onAlgoliaProPageSkip',
                    new Event(['name' => $this->name, 'config' => $this->index_configuration, 'object' => $page]));
                if (isset($skip_event['status'])) {
                    $status[] = $skip_event['status'];
                    if ($callback = $this->getProgressCallback()) {
                        $callback(-1);
                    }
                    continue;
                }

                $content = trim($page->content());
                $skip_empty_content = $this->index_configuration->get('content.skip_empty', true);
                if ($skip_empty_content && empty($content)) {
                    $status[] = [
                        'status' => 'info',
                        'msg' => 'Page has no content, skipping',
                        'url' => $url
                    ];
                    if ($callback = $this->getProgressCallback()) {
                        $callback(-1);
                    }
                    continue;
                }

                $page_records = $this->getPageData($content, $page);
                $updatable_records = $this->recordsNeedUpdating($page_records);
                $records = array_merge($records, $updatable_records);
                if (count($records) > 0) {
                    $status[] = [
                        'status' => 'success',
                        'msg' => 'Page indexed',
                        'url' => $url
                    ];
                } else {
                    $status[] = [
                        'status' => 'info',
                        'msg' => 'Cache entry found, no records need updating',
                        'url' => $url
                    ];
                }


            } catch (\Exception $e) {
                $status[] = [
                    'status' => 'error',
                    'msg' => $e->getMessage(),
                    'url' => $url
                ];
                if ($callback = $this->getProgressCallback()) {
                    $callback(-1);
                }
            }
        }

        if ($this->production_mode && !empty($records)) {
            $index->partialUpdateObjects($records, [
                'createIfNotExists' => true
            ]);
        }

        return $status;
    }

    /**
     * @param string $content
     * @param PageInterface $page
     * @param string|null $url
     * @return array
     */
    protected function getPageData(string $content, PageInterface $page, string $url = null): array
    {
        $event_data = new \stdClass();
        $event_data->content = $content;

        if ($url) {
            $event_data->url = $url;
        }

        // Fire Event to add things to be indexed
        Grav::instance()->fireEvent('onAlgoliaProIndexData', new Event(
            ['name' => $this->name, 'config' => $this->index_configuration, 'object' => $page, 'data' => $event_data]
        ));

        $content = $event_data->content;
        unset($event_data->content);
        $page_data = (array) $event_data;

        // content processing
        $blocks = $this->splitHTMLContent($content);
        $page_chunks = [];
        $counter = 1;
        $base_url = $page_data['url'] === '/' ? '<homepage>' : trim($page_data['url'], '/');
        $base_id = md5($base_url);

        foreach ($blocks as $block) {
            $block_data = [];
            $block_content = $block['content'] ?? '';

            if (isset($block['tag'], $block['header'])) {
                $block_data['objectType'] = 'header';
                $block_data['headers'][$block['tag']][] = $block['header'];
                $block_data['subtitle'] = $block['header'];
                $block_data['summary'] = $this->getFirstWords($block_content, 50);

                if (!empty($block['id'])) {
                    $block_data['url'] = $page_data['url'] . '#' . $block['id'];
                }
            }

            $block_chunks = $this->splitContentIntoChunks($block_content);
            foreach ($block_chunks as $chunk) {
                $block_data['objectID'] = $base_id . '_' . $counter++;
                $block_data['baseURL'] = $base_url;
                $block_data['content'] = $chunk;
                $page_chunks[] = array_merge($page_data, $block_data);
            }
        }

        return $page_chunks;
    }

    /**
     * @param string|null $index
     * @return string
     */
    protected function getIndexName(string $index = null): string
    {
        $index_name = $this->plugin_configuration->get('base_index_name');
        if (!is_string($index_name)) {
            $index_name = 'grav';
        }

        if (null !== $index) {
            $index_name = trim($this->name . '-' . $index . '-' . $index_name, '-');
        }

        return $index_name;
    }


}
