<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

use Algolia\AlgoliaSearch\Exceptions\MissingObjectId;
use Grav\Common\Grav;
use Grav\Framework\Flex\Interfaces\FlexCollectionInterface;
use Grav\Framework\Flex\Interfaces\FlexObjectInterface;
use RuntimeException;

abstract class FlexSearch extends BaseSearch implements AlgoliaProClassInterface
{
    /**
     * @param string $query
     * @param array $options
     * @return array
     */
    public function searchObjects(string $query, array $options = []): array
    {
        $index_name = $this->getIndexer($this->getIndexName());
        $this->search_client->setSettings($index_name, $this->index_configuration->get('search_params'));

        $search_params = array_merge(['query' => $query], $options);
        return $this->search_client->searchSingleIndex($index_name, $search_params);
    }

    /**
     * @param array $options
     * @return array
     */
    public function indexObjects(array $options = []): array
    {
        if (isset($options['flush'])) {
            $this->clearObjects($options);
        }

        $collection = $this->getFilteredCollection();

        $steps = count($collection);
        $index_name = $this->getIndexer($this->getIndexName());
        $records = [];
        $status = [];

        if ($callback = $this->getProgressCallback()) {
            $callback($steps, $index_name . ' Index');
        }

        foreach ($collection as $object) {
            try {
                $content_records = $this->getRecord($object);
                if (count($content_records) > 0) {
                    $records = array_merge($records, $content_records);
                    $status[] = [
                        'status' => 'success',
                        'msg' => strtoupper($object->getFlexType()) . ' indexed',
                        'url' => $this->getUrl($object),
                    ];
                    if ($callback = $this->getProgressCallback()) {
                        $callback();
                    }
                } else {
                    throw new RuntimeException("No records found");
                }
            } catch (\Exception $e) {
                $status[] = [
                    'status' => 'error',
                    'msg' => $object->id . ": " . $e->getMessage(),
                    'url' => $this->getUrl($object),
                ];
                if ($callback = $this->getProgressCallback()) {
                    $callback(-1);
                }
                continue;
            }
        }

        if ($this->plugin_configuration->get('production_mode') !== false && !empty($records)) {
            $this->search_client->partialUpdateObjects($index_name, $records, true);
        }

        return $status;
    }

    /**
     * @param array $options
     * @return array
     */
    public function clearObjects(array $options = []): array
    {
        $index_name = $this->getIndexer($this->getIndexName());
        $this->search_client->clearObjects($index_name);

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
        if (Grav::instance()['config']->get('plugins.algolia-pro.production_mode') === false) {
            return ['status' => 'success', 'message' => 'Test Mode'];
        }

        $status = [];
        if ($object instanceof FlexObjectInterface && $this->checkObject($object)) {
            $records = $this->getRecord($object);
            $status = $this->updateRecord($records, $object, $update);
        }

        return $status;
    }

    /**
     * @param array $records
     * @param FlexObjectInterface $object
     * @param bool $update
     * @return array|string[]
     */
    protected function updateRecord(array $records, FlexObjectInterface $object, bool $update): array
    {
        if (isset($records[0])) {
            $index_name = $this->getIndexer($this->getIndexName());
            $objectIDs = $this->getObjectsByDistinct($records[0], $index_name);
            if (!empty($objectIDs)) {
                $this->search_client->deleteObjects($index_name, $objectIDs);
            }

            if ($update) {
                try {
                    $this->search_client->saveObjects($index_name, $records);
                } catch (MissingObjectId $e) {
                    return ['status' => 'error', 'message' => $e->getMessage()];
                }
            }
            $status = ['status' => 'success'];

        } else {
            $status = ['status' => 'error', 'message' => 'no record found'];
        }

        return $status;
    }

    /**
     * @param string|null $index
     * @return string
     */
    protected function getIndexName(?string $index = null): string
    {
        $index_name = $this->plugin_configuration->get('base_index_name');
        if (!is_string($index_name)) {
            $index_name = 'grav';
        }

        return "{$this->name}-{$index_name}";
    }

    /**
     * Check if object is supported by this search class.
     *
     * @param FlexObjectInterface $object
     * @return bool
     */
    abstract protected function checkObject(FlexObjectInterface $object): bool;

    /**
     * Override to return your collection. Make sure you filter away inaccessible objects.
     *
     * @return FlexCollectionInterface
     */
    abstract protected function getFilteredCollection(): FlexCollectionInterface;

    /**
     * Get record data.
     *
     * @param FlexObjectInterface $object
     * @return array
     */
    abstract protected function getRecord(FlexObjectInterface $object): array;

    /**
     * Get URL for the object.
     *
     * @param FlexObjectInterface $object
     * @return string|null
     */
    abstract protected function getUrl(FlexObjectInterface $object): ?string;
}
