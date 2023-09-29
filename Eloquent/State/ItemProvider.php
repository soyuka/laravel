<?php

namespace ApiPlatform\Laravel\Eloquent\State;

use Illuminate\Foundation\Application;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;

class ItemProvider implements ProviderInterface
{
    public function __construct(private readonly Application $application)
    {
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        return $this->application->make($operation->getClass())::find($uriVariables)->first();
    }
}
