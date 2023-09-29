<?php

namespace ApiPlatform\Laravel\Eloquent;

use ApiPlatform\State\OptionsInterface;

class Options implements OptionsInterface {
    public function __construct(public string $model) {}
}

