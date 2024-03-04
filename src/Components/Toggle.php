<?php

namespace DistortedFusion\BladeForms\Components;

class Toggle extends Checkbox
{
    public bool $disabled;

    public function __construct(
        string $name,
        string $label = '',
        $value = 1,
        $bind = null,
        bool $default = false,
        bool $showErrors = true,
        bool $disabled = false
    ) {
        parent::__construct($name, $label, $value, $bind, $default, $showErrors);

        $this->disabled = $disabled;
    }
}
