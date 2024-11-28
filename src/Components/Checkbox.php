<?php

namespace DistortedFusion\BladeForms\Components;

class Checkbox extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public $value;
    public bool $after;

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        $value = 1,
        bool $default = false,
        bool $showErrors = true,
        bool $markRequired = false,
        array|int|string $columnSpan = [],
        array|int $columnStart = [],
        bool $after = false,
    ) {
        parent::__construct(
            id: $id,
            name: $name,
            errorName: $errorName,
            columnSpan: $columnSpan,
            columnStart: $columnStart
        );

        $this->label = $label;
        $this->value = $value;
        $this->showErrors = $showErrors;
        $this->markRequired = $markRequired;
        $this->after = $after;

        $this->default($default);
    }

    public function isChecked(): bool
    {
        if (! $this->forNative()) {
            return false;
        }

        if (! is_null($old = old($this->getName()))) {
            return $old == $this->value;
        }

        if (! session()->hasOldInput()) {
            return $this->default;
        }

        return false;
    }
}
