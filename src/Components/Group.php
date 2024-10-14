<?php

namespace DistortedFusion\BladeForms\Components;

class Group extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public bool $inline = false;

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        bool $inline = false,
        bool $showErrors = true,
        bool $markRequired = false,
        array|int|string $columnSpan = [],
        array|int $columnStart = [],
    ) {
        parent::__construct(
            id: $id,
            name: $name,
            errorName: $errorName,
            columnSpan: $columnSpan,
            columnStart: $columnStart
        );

        $this->label = $label;
        $this->inline = $inline;
        $this->showErrors = $name && $showErrors;
        $this->markRequired = $name && $markRequired;
    }
}
