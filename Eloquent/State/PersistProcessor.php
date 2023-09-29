<?php

namespace ApiPlatform\Laravel\Eloquent\State;

use Illuminate\Foundation\Application;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Put;
use ApiPlatform\State\ProcessorInterface;

class PersistProcessor implements ProcessorInterface
{
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        $data->saveOrFail();
        $data->refresh();
        return $data;
    }
}
