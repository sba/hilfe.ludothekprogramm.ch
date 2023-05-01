<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

use Algolia\AlgoliaSearch\SearchClient;
use Algolia\AlgoliaSearch\SearchIndex;
use Grav\Common\Config\Config;
use Grav\Common\Data\Data;
use Grav\Common\Filesystem\Folder;
use Grav\Common\Grav;
use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Plugin;
use Grav\Common\Utils;

class BaseSearch
{
    /** @var string */
    protected $name;
    /** @var Data */
    protected $plugin_configuration;
    /** @var Data */
    protected $index_configuration;
    /** @var SearchClient */
    protected $search_client;
    /** @var callable|null */
    protected $progress_callback;
    /** @var array */
    protected $valid_headers;
    /** @var boolean */
    protected $production_mode;
    /** @var string */
    protected $local_storage;

    /**
     * @param string $name
     * @param Data $index_config
     * @param callable|null $progress_callback
     */
    public function __construct(string $name, Data $index_config, callable $progress_callback = null)
    {
        /** @var Config $config */
        $config = Grav::instance()['config'];

        $this->name = $name;
        $this->plugin_configuration = new Data((array)$config->get('plugins.algolia-pro'));
        $this->index_configuration = $index_config;
        $this->progress_callback = $progress_callback;
        $this->search_client = SearchClient::create(
            $this->plugin_configuration['application_id'],
            $this->plugin_configuration['admin_api_key']
        );
        $this->valid_headers = (array) $this->index_configuration->get('content.valid_headers');
        $this->production_mode = (bool) $this->plugin_configuration->get('production_mode');
        $this->local_storage = Grav::instance()['locator']->findResource('user-data://algolia-pro', true, true);

        if (!file_exists($this->local_storage)) {
            mkdir($this->local_storage);
        }
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
     * @return callable|null
     */
    public function getProgressCallback(): ?callable
    {
        return $this->progress_callback;
    }

    /**
     * Get's the complete name of the index requested
     *
     * @param string|null $index
     * @return string
     */
    protected function getIndexName(?string $index = null): string
    {
        $index_name = $this->plugin_configuration->get('base_index_name');
        if (!$index_name || !is_string($index_name)) {
            $index_name = 'grav';
        }

        if (null !== $index) {
            $index_name = $index . '-' . $index_name;
        }

        return $index_name;
    }

    /**
     * @param string|null $index
     * @return SearchIndex
     */
    protected function getIndexer(?string $index): SearchIndex
    {
        $index_name = $this->getIndexName($index);
        $index_options = $this->index_configuration;

        $settings = [
            'searchableAttributes' => $index_options->get('searchable_fields'),
            'attributeForDistinct' => $index_options->get('distinct_field'),
            'distinct' => $index_options->get('search_params.distinct'),
            'attributesToSnippet' => $index_options->get('search_params.attributesToSnippet'),
            'snippetEllipsisText' => $index_options->get('search_params.snippetEllipsisText'),
        ];

        $search_index = $this->search_client->initIndex($index_name);
        if ($this->production_mode === true) {
            $search_index->setSettings($settings);
        }

        return $search_index;
    }

    /**
     * @param array $record
     * @param SearchIndex $index
     * @return array
     */
    protected function getObjectsByDistinct(array $record, SearchIndex $index): array
    {
        $objectIDs = [];

        $distinct_field = $this->index_configuration->distinct_field;
        $attribute = $record[$distinct_field] ?? null;

        $backup_settings = $delete_settings = $index->getSettings();
        $delete_settings['searchableAttributes'] = [$distinct_field];
        $index->setSettings($delete_settings);

        $results = $index->search($attribute, [
            'attributesToRetrieve' => ['objectID'],
            'distinct' => 0,
            'attributesToHighlight' => [],
        ]);

        $index->setSettings($backup_settings);

        if ($results['nbHits'] > 0) {
            foreach ($results['hits'] as $hit) {
                $objectIDs[] = $hit['objectID'];
            }
        }

        return $objectIDs;
    }

    /**
     * @param string $content
     * @return array
     */
    protected function splitHTMLContent(string $content): array
    {
        $sanitized_content = $this->sanitizeContent($content);
        if (empty($sanitized_content)) {
            return [];
        }

        $dom = new \DOMDocument();
        $internalErrors = libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($sanitized_content, 'HTML-ENTITIES', 'UTF-8'));
        libxml_use_internal_errors($internalErrors);
        $rootNodes = $dom->getElementsByTagName('body')->item(0);

        return $rootNodes ? $this->recurseNodes($rootNodes) : [];
    }

    /**
     * @param \DOMNode $element
     * @param int $id
     * @param array $storage
     * @param array $header
     * @return array
     */
    protected function recurseNodes(\DOMNode $element, int $id = 0, array $storage = [], array $header = []): array
    {
        $default_header = ['tag' => null, 'id' => null, 'header' => null];
        $header = array_merge($default_header, $header);

        if (!isset($storage[$id]) && isset($header['id'])) {
            $storage[$id] = $header;
        }

        foreach ($element->childNodes as $dom_child) {

            switch ($dom_child->nodeType) {

                case XML_TEXT_NODE:
                    $value = trim($dom_child->nodeValue);
                    $header_value = $header['header'] ?? '';
                    if ($value !== '' && $value !== $header_value) {
                        if (!isset($storage[$id]['content'])) {
                            $storage[$id]['content'] = $value . " ";
                        } else {
                            $storage[$id]['content'] .= $value . " ";
                        }
                    }
                    break;

                case XML_ELEMENT_NODE:
                    $id_attr = $dom_child->getAttribute('id');
                    $tag = $dom_child->tagName;
                    $text = $dom_child->nodeValue;
                    if (in_array($tag, $this->valid_headers, true) && !empty($text)) {
                        $id++;
                        $header = ['tag' => $tag, 'header' => $text];
                        if (isset($id_attr)) {
                            $header['id'] = $id_attr;
                        }
                    }
                    $storage = $this->recurseNodes($dom_child, $id, $storage, $header);
                    break;
            }
        }
        return $storage;
    }

    /**
     * @param string $content
     * @return string
     */
    protected function sanitizeContent(string $content): string
    {
        $content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);

        return preg_replace('/\n/', '', $content);
    }

    protected function processPage(PageInterface $page): bool
    {
        $header = $page->header();

        // Do page checks
        $header_key = 'algolia-pro';

        // If header is set, do this..
        if (isset($header->{$header_key}['process'])) {
            $process_page = (bool)$header->{$header_key}['process'];
        } else {
            // Else try fallback with process_children
            $process_children = Plugin::inheritedConfigOption($header_key, 'process_children', $page, true);

            $process_page = true;
            if (!$process_children && empty($header->{$header_key}['process_children'])) {
                $process_page = false;
            }
        }

        return $process_page;
    }

    /**
     * @param string $text
     * @param int $count
     * @return string
     */
    protected function getFirstWords(string $text, int $count): string
    {
        $words = [];
        if ($text !== '') {
            $words = explode(" ", $text);
            $words = array_slice($words, 0, $count);
        }
        return implode(" ", $words);
    }

    /**
     * @param string $content
     * @return array
     */
    protected function splitContentIntoChunks(string $content): array
    {
        $chunks = [];
        $content_limit = $this->index_configuration->get('content.split_length', 1000);
        $start_offset = 0;
        $more_to_go = true;

        if (mb_strlen($content, 'UTF-8') > $content_limit) {
            while ($more_to_go) {
                $content_chunk = mb_substr($content, $start_offset, $content_limit, 'UTF-8');
                if (mb_strlen($content_chunk, 'UTF-8') < $content_limit) {
                    $chunks[] = $content_chunk;
                    $more_to_go = false;
                } else {
                    $chunk_size = $this->mb_strrpos_array($content_chunk, ["\n",' '], 'UTF-8');
                    $chunks[] = mb_substr($content, $start_offset, $chunk_size, 'UTF-8');
                    $start_offset += $chunk_size + 1;
                }
            }
        } else {
            $chunks[] = $content;
        }

        return $chunks;
    }

    /**
     * @param string $content
     * @param array $needles
     * @param string $encoding
     * @return int
     */
    protected function mb_strrpos_array(string $content, array $needles, string $encoding = 'UTF-8'): int
    {
        $index = 0;
        foreach ($needles as $needle) {
            $pos = mb_strrpos($content, $needle, 0, $encoding);
            $index = $pos > $index ? $pos : $index;
        }

        return $index === 0 ? mb_strlen($content, $encoding) : $index;
    }

    /**
     * @return void
     */
    protected function clearRecordStorage(): void
    {
        Folder::delete($this->local_storage);
        mkdir($this->local_storage);
    }

    /**
     * @param array $records
     * @return array
     */
    protected function recordsNeedUpdating(array $records): array
    {
        if ($this->plugin_configuration['smart_indexing']) {
            foreach ($records as $key => $record) {
                $id = md5($record['objectID']) ?? null;
                $encoded = json_encode($record, JSON_INVALID_UTF8_SUBSTITUTE);
                $md5 = md5($encoded);

                $stored_md5 = file_get_contents($this->getRecordFilename($id)) ?: null;
                $needs_updating = $stored_md5 !== $md5;
                if ($needs_updating) {
                    file_put_contents($this->getRecordFilename($id), $md5);
                } else {
                    unset($records[$key]);
                }
            }
        }

        return json_decode(json_encode($records, JSON_INVALID_UTF8_SUBSTITUTE), true);
    }

    /**
     * @param $id
     * @return string
     */
    private function getRecordFilename($id): string
    {
        return $this->local_storage . '/' . $id;
    }

    private function safe_json_encode($value, $options = 0, $depth = 512) {
        $encoded = json_encode($value, $options, $depth);
        if ($encoded === false && $value && json_last_error() == JSON_ERROR_UTF8) {
            $encoded = json_encode($this->utf8ize($value), $options, $depth);
        }
        return $encoded;
    }

     private function utf8ize($mixed) {
        if (is_array($mixed)) {
            foreach ($mixed as $key => $value) {
                $mixed[$key] = $this->utf8ize($value);
            }
        } elseif (is_string($mixed)) {
            return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
        }
        return $mixed;
     }

}
