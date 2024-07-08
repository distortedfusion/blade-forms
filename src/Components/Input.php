<?php

namespace DistortedFusion\BladeForms\Components;

class Input extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public string $type;
    public $value;

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        string $type = 'text',
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
        $this->type = $type;
        $this->showErrors = $showErrors;

        if ($this->forNative()) {
            $this->value = old($name, $default);
        }
    }
}
