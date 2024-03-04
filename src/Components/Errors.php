<?php

namespace DistortedFusion\BladeForms\Components;

use Illuminate\Support\Str;

class Errors extends FormComponent
{
    public string $bag;

    public function __construct(string $name, string $bag = 'default')
    {
        parent::__construct(name: static::convertBracketsToDots(Str::before($name, '[]')));

        $this->bag = $bag;
    }
}
