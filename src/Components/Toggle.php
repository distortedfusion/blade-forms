<?php

namespace DistortedFusion\BladeForms\Components;

class Toggle extends Checkbox
{
    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        $value = 1,
        bool $default = false,
        bool $showErrors = true,
        array|int|string $columnSpan = [],
        array|int $columnStart = []
    ) {
        parent::__construct(
            id: $id,
            name: $name,
            errorName: $errorName,
            label: $label,
            value: $value,
            default: $default,
            showErrors: $showErrors,
            columnSpan: $columnSpan,
            columnStart: $columnStart
        );
    }
}
