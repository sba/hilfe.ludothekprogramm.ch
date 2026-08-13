<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

use Grav\Common\Cache;
use Grav\Common\Config\Config;
use Grav\Common\Data\Data;
use Grav\Common\Debugger;
use Grav\Common\Grav;
use Grav\Plugin\AlgoliaPro\Exceptions\NoConfigurationFoundException;

class AlgoliaProController implements AlgoliaProControllerInterface
{
    /** @var Data[] */
    protected $index_configurations;
    /** @var callable|null */
    protected $progress_callback;

    /**
     * AlgoliaProController constructor.
     */
    public function __construct()
    {
        /** @var Config $config */
        $config = Grav::instance()['config'];
        $indexes = (array)$config->get('plugins.algolia-pro.indexes');

        $this->index_configurations = [];
        foreach ($indexes as $name => $indexConfig) {
            if (is_array($indexConfig)) {
                $this->index_configurations[$name] = new Data($indexConfig);
            }
        }
    }

    /**
     * @param string $query
     * @param array $options
     * @return array
     */
    public function search(string $query, array $options = []): array
    {
        return $this->execute('searchObjects', [$query, $options]);
    }

    /**
     * @param array $options
     * @return array
     */
    public function index(array $options = []): array
    {
        return $this->execute('indexObjects', [$options]);
    }

    /**
     * @param object $object
     * @param array $options
     * @return array
     */
    public function update(object $object, array $options = []): array
    {
        return $this->execute('updateObject', [$object, $options]);
    }

    /**
     * @param object $object
     * @param array $options
     * @return array
     */
    public function delete(object $object, array $options = []): array
    {
        return $this->execute('deleteObject', [$object, $options]);
    }

    /**
     * @param array $options
     * @return array
     */
    public function clear(array $options = []): array
    {
        return $this->execute('clearObjects', [$options]);
    }

    /**
     * @param array $options
     * @return array
     */
    public function configuration(array $options = []): array
    {
        /** @var Cache $cache */
        $cache = Grav::instance()['cache'];
        $cache_key = $cache->getKey() . '.algolia-pro.' . md5(json_encode($options));

        $cached_settings = $cache->fetch($cache_key);

        if ($cached_settings) {
            return $cached_settings;
        }
        $cached_settings = $this->execute('indexConfiguration', [$options]);

        $cache->save($cache_key, $cached_settings);

        return $cached_settings;
    }

    /**
     * @param callable $callback
     * @return void
     */
    public function setProgressCallback(callable $callback): void
    {
        $this->progress_callback = $callback;
    }

    /**
     * @param string $method
     * @param array $args
     * @return array
     * @throws NoConfigurationFoundException
     */
    protected function execute(string $method, array $args = []): array
    {
        $this->disableGravDebugger();
        $results = [];
        $options = end($args);
        $enabled_indexes = $this->getIndexConfig($options);

        if (empty($enabled_indexes)) {
            throw new NoConfigurationFoundException();
        }

        foreach ($enabled_indexes as $name => $iconf) {
            $search_class = $iconf->search_class;

            if (\method_exists($search_class, $method)) {
                $searchObject = new $search_class($name, $iconf, $this->progress_callback);
                $results[$name] = $searchObject->$method(...$args);
            }
        }

        return $results;
    }

    /**
     * Disable the Grav debugger during this call
     * @return void
     */
    protected function disableGravDebugger(): void
    {
        /** @var Debugger $debugger */
        $debugger = Grav::instance()['debugger'];

        $debugger->enabled(false);
    }

    /**
     * Get an array of index configurations
     *
     * @param array $options
     * @return array
     */
    protected function getIndexConfig(array $options): array
    {
        // try to filter the array of index configurations by indexes option
        $targets = $options['indexes'] ?? [];
        $indexes_config = [];

        // if no indexes found, just get the first enabled one
        if (empty($targets)) {
            foreach ($this->index_configurations as $name => $iconf) {
                if ($iconf->enabled) {
                    $indexes_config[$name] = $iconf;
                }
            }
        } else {
            $indexes_config = array_intersect_key($this->index_configurations, array_flip($targets));
        }

        return $indexes_config;
    }
}