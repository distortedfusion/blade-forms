<?php

namespace DistortedFusion\BladeForms\Components;

class Toggle extends Checkbox
{
    public bool $disabled;

    public function __construct(
        ?string $name = null,
        string $label = '',
        $value = 1,
        bool $default = false,
        bool $showErrors = true,
        bool $disabled = false
    ) {
        parent::__construct(
            name: $name,
            label: $label,
            value: $value,
            default: $default,
            showErrors: $showErrors
        );

        $this->disabled = $disabled;
    }
}
