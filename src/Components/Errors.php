<?php

namespace DistortedFusion\BladeForms\Components;

class Errors extends FormComponent
{
    public string $bag;

    public function __construct(string $name, string $bag = 'default')
    {
        parent::__construct(name: $name);

        $this->bag = $bag;
    }
}
