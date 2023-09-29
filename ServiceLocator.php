<?php

namespace ApiPlatform\Laravel;

use Psr\Container\ContainerInterface;

// TODO: template T ServiceLocator<ProviderInterface>
final class ServiceLocator implements ContainerInterface
{
    private array $services = [];

    /**
     * @param array<mixed> $services
     */
    public function __construct(array $services = []) {
        foreach ($services as $key => $service) {
            $this->services[is_string($key) ? $key : get_class($service)] = $service;
        }
    }

    public function get(string $id)
    {
        return $this->services[$id] ?? null;
    }

    public function has(string $id): bool
    {
        return isset($this->services[$id]);
    }
}
