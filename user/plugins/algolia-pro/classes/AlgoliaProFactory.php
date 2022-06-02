<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

use Grav\Common\Config\Config;
use Grav\Common\Grav;

class AlgoliaProFactory
{
    public static function create(array $options = []): AlgoliaProControllerInterface
    {
        /** @var Config $config */
        $config = Grav::instance()['config'];

        $type = $config->get('plugins.algolia-pro.controller_class');
        if (is_string($type) && is_a($type, AlgoliaProControllerInterface::class, true)) {
            return new $type($options);
        }

        throw new \RuntimeException('Search class: ' . $type . ' does not exist');
    }

    public static function index(): array
    {
        $instance = self::create();
        return $instance->index([ 'flush' => false ]);
    }
}
