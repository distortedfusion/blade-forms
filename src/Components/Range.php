<?php

namespace DistortedFusion\BladeForms\Components;

class Range extends FormComponent
{
    use Concerns\HandlesValidationErrors;
    use Concerns\HandlesDefaultAndOldValue;

    public string $label;

    public $value;

    public function __construct(
        ?string $name = null,
        string $label = '',
        $default = null,
        bool $showErrors = true
    ) {
        parent::__construct(name: $name);

        $this->label = $label;
        $this->showErrors = $showErrors;

        if (! is_null($name)) {
            $this->setValue($name, $default);
        }
    }
}
