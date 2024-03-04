<?php

namespace DistortedFusion\BladeForms\Components;

class Input extends FormComponent
{
    use Concerns\HandlesValidationErrors;
    use Concerns\HandlesDefaultAndOldValue;

    public string $label;
    public string $type;

    public $value;

    public function __construct(
        ?string $name = null,
        string $label = '',
        string $type = 'text',
        $default = null,
        bool $showErrors = true
    ) {
        parent::__construct(name: $name);

        $this->label = $label;
        $this->type = $type;
        $this->showErrors = $showErrors;

        if (! is_null($name)) {
            $this->setValue($name, $default);
        }
    }
}
