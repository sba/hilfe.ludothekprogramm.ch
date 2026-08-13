<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

interface AlgoliaProControllerInterface
{
    public function search(string $query, array $options = []): array;

    public function index(array $options = []): array;

    public function update(object $object, array $options = []): array;

    public function delete(object $object, array $options = []): array;

    public function clear(array $options = []): array;

    public function configuration(array $options = []): array;

    public function setProgressCallback(callable $callback): void;

}