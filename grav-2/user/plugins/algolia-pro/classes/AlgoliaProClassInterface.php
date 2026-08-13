<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro;

interface AlgoliaProClassInterface
{
    public function searchObjects(string $query, array $options = []): array;

    public function indexObjects(array $options = []): array;

    public function clearObjects(array $options = []): array;

    public function updateObject(object $object, array $options = []): array;

    public function deleteObject(object $object, array $options = []): array;

    public function modifyObject(object $object, array $options = [], bool $update = true): array;

    public function setProgressCallback(callable $callback): void;

    public function getProgressCallback(): ?callable;
}