<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro\Api;

use Grav\Common\File\CompiledYamlFile;
use Grav\Plugin\AlgoliaPro\AlgoliaProFactory;
use Grav\Plugin\AlgoliaProPlugin;
use Grav\Plugin\Api\Controllers\AbstractApiController;
use Grav\Plugin\Api\Exceptions\ForbiddenException;
use Grav\Plugin\Api\Exceptions\ValidationException;
use Grav\Plugin\Api\Response\ApiResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Admin-Next API controller for Algolia Pro.
 *
 * Mirrors the admin-classic configure surface (plugin settings + index list +
 * Reindex / Reset actions) but emits JSON via the API plugin response envelope.
 * The single source of truth is config://plugins/algolia-pro.yaml — both the
 * old flex-objects UI and this controller read/write the same file.
 */
class AlgoliaProApiController extends AbstractApiController
{
    /**
     * Hierarchical permission gate.
     *
     * Super admins always pass. Non-super users need `api.access` plus one of
     * the algolia-pro permissions — admin > write > read for write-level ops,
     * any of the three for read-level ops.
     */
    private function requireAlgoliaPermission(ServerRequestInterface $request, string $level): void
    {
        $user = $this->getUser($request);

        if ($this->isSuperAdmin($user)) {
            return;
        }

        if (!$this->hasPermission($user, 'api.access')) {
            throw new ForbiddenException('API access is not enabled for this user.');
        }

        $required = match ($level) {
            'write' => [
                'api.algolia-pro',
                'api.algolia-pro.write',
                'api.algolia-pro.admin',
            ],
            default => [
                'api.algolia-pro',
                'api.algolia-pro.read',
                'api.algolia-pro.write',
                'api.algolia-pro.admin',
            ],
        };

        foreach ($required as $perm) {
            if ($this->hasPermission($user, $perm)) {
                return;
            }
        }

        throw new ForbiddenException("Missing required Algolia Pro '{$level}' permission");
    }

    /**
     * GET /algolia-pro/data — full form payload for the blueprint-mode page.
     *
     * Mirrors the field structure of admin/blueprints/algolia-pro.yaml so the
     * page form binds directly without an intermediate transformation step.
     */
    public function data(ServerRequestInterface $request): ResponseInterface
    {
        $this->requireAlgoliaPermission($request, 'read');

        $cfg = (array) $this->config->get('plugins.algolia-pro', []);
        $sync = (array) ($cfg['sync'] ?? []);
        $object = (array) ($cfg['object'] ?? []);

        return ApiResponse::create([
            'enabled'             => (bool) ($cfg['enabled'] ?? false),
            'production_mode'     => (bool) ($cfg['production_mode'] ?? false),
            'smart_indexing'      => (bool) ($cfg['smart_indexing'] ?? true),
            'admin_index_events'  => (bool) ($cfg['admin_index_events'] ?? true),
            'site_index_events'   => (bool) ($cfg['site_index_events'] ?? true),
            'application_id'      => (string) ($cfg['application_id'] ?? ''),
            'search_only_api_key' => (string) ($cfg['search_only_api_key'] ?? ''),
            'admin_api_key'       => (string) ($cfg['admin_api_key'] ?? ''),
            'base_index_name'     => (string) ($cfg['base_index_name'] ?? 'grav'),
            'user_agent'          => (string) ($cfg['user_agent'] ?? 'Grav Algolia Pro Plugin'),
            'controller_class'    => (string) ($cfg['controller_class'] ?? 'Grav\\Plugin\\AlgoliaPro\\AlgoliaProController'),
            'sync'                => [
                'cron_enable' => (bool) ($sync['cron_enable'] ?? false),
                'cron_at'     => (string) ($sync['cron_at'] ?? '0 03 * * *'),
            ],
            // Pre-populate any flex-injected cache fields. Saved values live
            // under `object.cache.*` (set by flex-objects's Caching tab).
            'object'              => [
                'cache' => (array) ($object['cache'] ?? []),
            ],
            'indexes'             => $this->normalizeIndexes((array) ($cfg['indexes'] ?? [])),
        ]);
    }

    /**
     * PATCH /algolia-pro/data — persist plugin settings + indexes.
     *
     * Writes to config://plugins/algolia-pro.yaml. The body shape matches the
     * data() response 1:1 — admin-next sends back exactly what the form has.
     */
    public function save(ServerRequestInterface $request): ResponseInterface
    {
        $this->requireAlgoliaPermission($request, 'write');

        $body = $this->getRequestBody($request);

        $existing = (array) $this->config->get('plugins.algolia-pro', []);

        // Preserve any keys the form does not manage (vue_env / dev_host /
        // dev_port and any plugin-extension keys we did not surface in v1).
        $merged = $existing;

        $simpleKeys = [
            'enabled',
            'production_mode',
            'smart_indexing',
            'admin_index_events',
            'site_index_events',
            'application_id',
            'search_only_api_key',
            'admin_api_key',
            'base_index_name',
            'user_agent',
            'controller_class',
        ];
        foreach ($simpleKeys as $key) {
            if (array_key_exists($key, $body)) {
                $merged[$key] = $body[$key];
            }
        }

        if (isset($body['sync']) && is_array($body['sync'])) {
            $merged['sync'] = array_merge((array) ($merged['sync'] ?? []), $body['sync']);
        }

        if (isset($body['indexes'])) {
            $merged['indexes'] = $this->indexesFromForm($body['indexes']);
        }

        // Pass through any other top-level keys the form sent (e.g. the
        // `object.cache.*` fields flex-objects injects via the shared
        // configure tab on plugin pages owned by a Flex-using plugin).
        $known = array_merge($simpleKeys, ['sync', 'indexes']);
        foreach ($body as $key => $value) {
            if (in_array($key, $known, true)) {
                continue;
            }
            if (is_array($value) && is_array($merged[$key] ?? null)) {
                $merged[$key] = array_replace_recursive($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        $this->writePluginConfig($merged);

        return ApiResponse::create([
            'message' => 'Algolia Pro settings saved.',
        ]);
    }

    /**
     * POST /algolia-pro/reindex — run a full reindex pass.
     */
    public function reindex(ServerRequestInterface $request): ResponseInterface
    {
        $this->requireAlgoliaPermission($request, 'write');

        // Long operation — match admin-classic's posture.
        @set_time_limit(0);

        try {
            $controller = AlgoliaProFactory::create();
            $results = $controller->index(['flush' => false]);
        } catch (\Throwable $e) {
            throw new ValidationException('Reindex failed: ' . $e->getMessage());
        }

        return ApiResponse::create([
            'message' => 'Reindex complete.',
            'results' => $results,
        ]);
    }

    /**
     * POST /algolia-pro/reset — flush + reindex every enabled index.
     */
    public function reset(ServerRequestInterface $request): ResponseInterface
    {
        $this->requireAlgoliaPermission($request, 'write');

        @set_time_limit(0);

        try {
            $controller = AlgoliaProFactory::create();
            $results = $controller->index(['flush' => true]);
        } catch (\Throwable $e) {
            throw new ValidationException('Reset failed: ' . $e->getMessage());
        }

        return ApiResponse::create([
            'message' => 'Indexes reset and rebuilt.',
            'results' => $results,
        ]);
    }

    /**
     * GET /algolia-pro/search-types — list of registered search types.
     *
     * Used by the indexes editor to populate the type dropdown. Mirrors the
     * classic blueprint's `data-options@: '\Grav\Plugin\AlgoliaProPlugin::getSearchTypes'`.
     */
    public function searchTypes(ServerRequestInterface $request): ResponseInterface
    {
        $this->requireAlgoliaPermission($request, 'read');

        $types = AlgoliaProPlugin::getSearchTypes();

        $options = [];
        foreach ($types as $key => $label) {
            $options[] = [
                'value' => (string) $key,
                'label' => $this->translate((string) $label),
            ];
        }

        return ApiResponse::create($options);
    }

    /**
     * Translate a key, or return the key unchanged if no language file matches.
     */
    private function translate(string $key): string
    {
        $language = $this->grav['language'] ?? null;
        if ($language && method_exists($language, 'translate')) {
            $translated = $language->translate($key);
            return is_string($translated) ? $translated : $key;
        }
        return $key;
    }

    /**
     * Convert the indexes config array (keyed by name) into the list shape
     * the form expects: ordered list of objects each carrying its `name`.
     */
    private function normalizeIndexes(array $indexes): array
    {
        $list = [];
        foreach ($indexes as $name => $config) {
            if (!is_array($config)) {
                continue;
            }
            $list[] = array_merge(['name' => (string) $name], $config);
        }
        return $list;
    }

    /**
     * Inverse of normalizeIndexes — accepts either the list shape (preferred)
     * or the original keyed-map shape (defensive). Returns the keyed map that
     * gets written back to YAML.
     */
    private function indexesFromForm($indexes): array
    {
        $result = [];

        if (!is_array($indexes)) {
            return $result;
        }

        // Keyed map shape — pass through, sanitizing keys.
        if ($this->isAssoc($indexes)) {
            foreach ($indexes as $name => $config) {
                if (!is_array($config)) {
                    continue;
                }
                $name = $this->sanitizeIndexName((string) $name);
                if ($name === '') {
                    continue;
                }
                unset($config['name']);
                $result[$name] = $config;
            }
            return $result;
        }

        // List shape from the field component.
        foreach ($indexes as $entry) {
            if (!is_array($entry)) {
                continue;
            }
            $name = $this->sanitizeIndexName((string) ($entry['name'] ?? ''));
            if ($name === '') {
                continue;
            }
            unset($entry['name']);
            $result[$name] = $entry;
        }
        return $result;
    }

    private function sanitizeIndexName(string $name): string
    {
        $name = trim($name);
        // Algolia index keys we control are lowercase identifiers; strip
        // anything that would break a YAML key or an Algolia index name.
        $name = preg_replace('/[^a-z0-9_\-]/i', '', $name) ?? '';
        return strtolower($name);
    }

    private function isAssoc(array $arr): bool
    {
        if ($arr === []) {
            return false;
        }
        return array_keys($arr) !== range(0, count($arr) - 1);
    }

    /**
     * Persist the plugin config back to config://plugins/algolia-pro.yaml.
     *
     * Uses CompiledYamlFile so the on-disk cache stays in sync. After save we
     * reset the in-memory config so subsequent reads in this same request see
     * the new values (matters for the response that follows save()).
     */
    private function writePluginConfig(array $data): void
    {
        $locator = $this->grav['locator'];
        $pluginsDir = $locator->findResource('config://plugins', true, true);
        if (!$pluginsDir) {
            throw new ValidationException('Could not resolve config://plugins directory.');
        }

        if (!is_dir($pluginsDir)) {
            @mkdir($pluginsDir, 0775, true);
        }

        $file = CompiledYamlFile::instance($pluginsDir . '/algolia-pro.yaml');
        $file->save($data);
        $file->free();

        $this->config->set('plugins.algolia-pro', $data);

        // Invalidate Grav's compiled config cache so subsequent requests
        // reload the plugin config from disk (otherwise they keep returning
        // the stale snapshot baked into cache/compiled/config/master-*.php).
        $cache = $this->grav['cache'] ?? null;
        if ($cache && method_exists($cache, 'clearCache')) {
            $cache->clearCache('standard');
        }
    }
}
