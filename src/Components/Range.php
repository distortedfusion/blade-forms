<?php

namespace DistortedFusion\BladeForms\Components;

class Range extends FormComponent
{
    use Concerns\HandlesValidationErrors;
    use Concerns\HandlesDefaultAndOldValue;

    public string $label;

    public $value;

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        $default = null,
        bool $showErrors = true,
        array|int|string $columnSpan = [],
        array|int $columnStart = []
    ) {
        parent::__construct(
            id: $id,
            name: $name,
            errorName: $errorName,
            columnSpan: $columnSpan,
            columnStart: $columnStart
        );

        $this->label = $label;
        $this->showErrors = $showErrors;

        if (! is_null($name)) {
            $this->setValue($name, $default);
        }
    }
}
