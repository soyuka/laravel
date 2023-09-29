<?php

namespace ApiPlatform\Laravel;

use Psr\Container\ContainerInterface;

final class FilterLocator implements ContainerInterface
{
    private $filters = [];
    public function get(string $id)
    {
        return $this->filters[$id] ?? null;
    }

    public function has(string $id): bool
    {
        return isset($this->filters[$id]);
    }
}
