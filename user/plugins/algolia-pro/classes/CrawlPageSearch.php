<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

use Grav\Common\Config\Config;
use Grav\Common\Grav;
use Grav\Common\Language\Language;
use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Page\Pages;
use Grav\Common\Utils;
use Grav\Common\HTTP\Client;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class CrawlPageSearch extends GravPageSearch
{
    /** @var string[] */
    protected static $whitelist = [
        '#text',
        'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
        'blockquote', 'q', 'p',
        'pre', 'code',
        'ul', 'ol', 'li',
        'b', 'em', 'i', 'u', 'strike', 'sup', 'sub'
    ];

    /** @var int */
    protected $total_steps = 0;

    /**
     * @param array $options
     * @return array|string[]
     */
    public function indexObjects(array $options = []): array
    {
        $grav = Grav::instance();

        $sitemap_url = $options['url'] ?? null;

        /** @var Pages $pages */
        $pages = $grav['pages'];

        /** @var Language $language */
        $language = $grav['language'];
        $languages = isset($options['lang']) ? [$options['lang']] : $language->getLanguages();
        $default_lang = $language->getDefault();

        // Flush index if required
        if ($options['flush'] ?? false) {
            $this->clearObjects($options);
            $this->clearRecordStorage();
        }

        try {
            $data = $this->getSiteMapEntries($sitemap_url, $languages);
        } catch (\Exception $e) {
            if ($callback = $this->getProgressCallback()) {
                $callback(0, $e->getMessage());
            }
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
                'url' => $sitemap_url
            ];
        }

        $status = [];
        $count = 0;

        if (!empty($data)) {
            // Loop over any and all responses asynchronously
            foreach ($data as $lang => $responses) {

                $lang = (string) $lang;
                if ($language->enabled() && $lang !== $default_lang) {
                    $language->init();
                    $language->setActive($lang);
                    $pages->reset();
                }

                $batch = $this->indexPageResponses($lang, $responses);
                $status = array_merge($status, $batch);
            }

            return $status;
        }

        return [
            'status' => 'error',
            'message' => 'No valid entries found from sitemap',
        ];
    }

    /**
     * @param object $object
     * @param array $options
     * @param bool $update
     * @return array|string[]
     * @throws TransportExceptionInterface
     */
    public function modifyObject(object $object, array $options = [], bool $update = true): array
    {
        $status = [];

        if ($this->production_mode === false) {
            return ['status' => 'success', 'message' => 'test mode'];
        }

        if ($object instanceof PageInterface) {
            $url = $object->url(false);
            $client = $this->getHttpClient();
            $response = $client->request('GET', $url);

            $records = [];
            $this->addRecordFromResponse($object, $response, $url, $records, $status);
            $status = $this->updateRecord($records, $object, $update);
        }

        return $status;
    }

    /**
     * @param string|null $sitemap_url
     * @param array $languages
     * @return array
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    protected function getSiteMapEntries(string $sitemap_url = null, array $languages = []): array
    {
        if (null === $sitemap_url) {
            /** @var Config $config */
            $config = Grav::instance()['config'];
            $sitemap_route = $config->get('plugins.sitemap.route');
            $sitemap_url = Utils::url($sitemap_route . '.json', true);
            \assert(is_string($sitemap_url));
        }

        $url_response = $this->getSiteMap($sitemap_url);
        $data = [];

        // If url exists
        if ($url_response) {
            $headers = $url_response->getHeaders();
            $client = $this->getHttpClient();

            // if a sitemap, load that, and get the list of loc URLs
            if (Utils::contains($headers['content-type'][0], 'application/json')) {
                $sitemap = $url_response->toArray();

                foreach ($sitemap as $lang => $entries) {
                    if ($languages && !in_array((string)$lang, $languages, true)) {
                        continue;
                    }

                    foreach ($entries as $route => $entry) {
                       $this->total_steps++;
                       $url = $entry['location'];
                       $data[$lang][$route] = $client->request('GET', $url);
                   }
               }
           } else {
               // how to determine lang here?
               $data['en'][] = $url_response;
           }
        } else {
            throw new \RuntimeException("Sitemap URL does not exist: {$sitemap_url}");
        }

        return $data;
    }

    /**
     * @param string $filter_path
     * @param array $data
     * @return array
     */
    protected function filterPageData(string $filter_path, array $data): array
    {
        $filtered_data = [];
        foreach ($data as $lang => $responses) {
            foreach ($responses as $path => $response) {
                if (Utils::endsWith($path, $filter_path)) {
                    $filtered_data[$lang] = [$path => $response];
                }
            }
        }
        return $filtered_data;
    }

    /**
     * Process and index Page based on response + Grav page
     * @param string $lang
     * @param array $responses
     * @return array
     */
    protected function indexPageResponses(string $lang, array $responses): array
    {
        $grav = Grav::instance();

        /** @var Pages $pages */
        $pages = $grav['pages'];

        $index = $this->getIndexer($lang);
        $status = [];
        $records = [];
        $steps = count($responses);

        if ($callback = $this->getProgressCallback()) {
            $callback($steps, 'Index Config: <yellow>' . $this->name . '</yellow> | Algolia Index: <yellow>' . $index->getIndexName() . '</yellow>');
        }

        foreach ($responses as $response) {
            $headers = $response->getHeaders();
            $info = $response->getInfo();
            $url = $info['url'] ?? 'unknown';
            $route = $headers['grav-page-route'][0] ?? '';
            $base = $headers['grav-base'][0] ?? '';
            $page = $pages->find($route);

            if ($base) {
                $url = str_replace($base, '', $url);
            }

            if ($page instanceof PageInterface) {
                $this->addRecordFromResponse($page, $response, $url,$records, $status);
            } else {
                $status[] = [
                    'status' => 'error',
                    'msg' => 'Page Not Found: ' . $route,
                    'url' => $url
                ];
                if ($callback = $this->getProgressCallback()) {
                    $callback(-1);
                }
            }
        }



        if ($this->production_mode !== false && !empty($records)) {
            $index->partialUpdateObjects($records, [
                'createIfNotExists' => true
            ]);
        }

        return $status;
    }

    /**
     * @param PageInterface $page
     * @param ResponseInterface $response
     * @param string $url
     * @param array $records
     * @param array $status
     * @return void
     */
    protected function addRecordFromResponse(PageInterface $page, ResponseInterface $response, string $url, array &$records, array &$status): void
    {
        $code = $response->getStatusCode();
        $body_selectors = (array)$this->index_configuration->get('body_selectors');

        // Do page checks
        if (!$this->processPage($page)) {
            $status[] = [
                'status' => 'info',
                'msg' => 'Page manually skipped',
                'url' => $url
            ];
            if ($callback = $this->getProgressCallback()) {
                $callback(-1);
            }
            return;
        }

        // Do Content parsing
        if (200 === $code) {
            $content = $response->getContent(false);
            if (empty($content)) {
                $status[] = [
                    'status' => 'Error',
                    'msg' => 'No content found for this page',
                    'url' => $url
                ];
                if ($callback = $this->getProgressCallback()) {
                    $callback(-1);
                }
                return;
            }

            try {
                $crawler = new Crawler($content);
                $content = static::getBodyContent($crawler, $body_selectors);
                $page_records = $this->getPageData($content, $page, $url);

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

                if ($callback = $this->getProgressCallback()) {
                    $callback();
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
        } else {
            $status[] = [
                'status' => 'error',
                'msg' => 'Page Unreachable: ' . $code,
                'url' => $url
            ];
            if ($callback = $this->getProgressCallback()) {
                $callback(-1);
            }
        }
    }

    /**
     * @param Crawler $crawler
     * @param array $selectors
     * @return string
     * @throws \Exception
     */
    public static function getBodyContent(Crawler $crawler, array $selectors): string
    {
        $body = '';
        foreach ($selectors as $body_selector) {
            $body_elements = $crawler->filter($body_selector);
            if ($body_elements->count() > 0) {
                $elements = $body_elements->each(function (Crawler $node) {
                    return $node->html();
                });
                $body = $body . " " . implode("", $elements);
            }
        }

        if (empty(trim($body))) {
            throw new \RuntimeException('Crawlwer was not able to find any content with provided selector: ' . json_encode($selectors, JSON_INVALID_UTF8_SUBSTITUTE));
        }

        $converted_body = mb_convert_encoding(static::cleanHtml($body), 'HTML-ENTITIES', 'UTF-8');

        if (empty(trim($converted_body))) {
            throw new \RuntimeException('Crawlwer was not able to find any content with provided selector: ' . json_encode($selectors, JSON_INVALID_UTF8_SUBSTITUTE));
        }

        return $converted_body;
    }

    /**
     * @param string $url
     * @return ResponseInterface|null
     * @throws TransportExceptionInterface
     */
    protected function getSiteMap(string $url): ?ResponseInterface
    {
        $client = $this->getHttpClient();
        $url_response = $client->request('GET', $url);

        if ($url_response->getStatusCode() === 200) {
            return $url_response;
        }

        return null;
    }

    /**
     * @return HttpClientInterface
     */
    protected function getHttpClient(): HttpClientInterface
    {
        static $client;

        if (null === $client) {
            /** @var Config $config */
            $config = Grav::instance()['config'];
            $options = [
                'headers' => ['User-Agent' => $config->get('plugins.algolia-pro.user_agent')],
                'verify_peer' => false,
                'verify_host' => false,
            ];

            $client = Client::getClient($options, 10);
        }

       return $client;
    }

    /**
     * @param string $html
     * @param array|null $whitelist
     * @return string
     */
    public static function cleanHtml(string $html, array $whitelist = null): string
    {
        if (libxml_use_internal_errors(true)) {
            libxml_clear_errors();
        }

        $whitelist = $whitelist ?? static::$whitelist;

        $document = new \DOMDocument();
        $document->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        static::cleanDomHtml($document->documentElement, $whitelist);

        $html = $document->saveHTML();

        return preg_replace('~<(?:!DOCTYPE|/?(?:html|body))[^>]*>\s*~i', '', $html);
    }

    /**
     * @param \DOMNode|null $html
     * @param array $whitelist
     * @return void
     */
    protected static function cleanDomHtml(?\DOMNode $html, array $whitelist): void
    {
        if (null === $html) {
            return;
        }

        if ($html->hasChildNodes()) {
            foreach (range($html->childNodes->length - 1, 0) as $i) {
                static::cleanDomHtml($html->childNodes->item($i), $whitelist);
            }
        }

        if (!in_array($html->nodeName, $whitelist, true)) {
            $fragment = $html->ownerDocument->createDocumentFragment();
            while ($html->childNodes->length > 0) {
                $fragment->appendChild($html->childNodes->item(0));
            }

            $html->parentNode->replaceChild($fragment, $html);

            return;
        }

        if ($html instanceof \DOMElement) {
            while ($html->hasAttributes()) {
                $attr = $html->attributes->item(0);
                if ($attr) {
                    $html->removeAttributeNode($attr);
                }
            }
        }
    }
    protected function getIndexName(string $index = null): string
    {
        if (is_null($index)) {
            $index = 'en';
        }
        return  parent::getIndexName($index);
    }
}
