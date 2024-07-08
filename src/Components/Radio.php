<?php

namespace DistortedFusion\BladeForms\Components;

class Radio extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public $value;
    public bool $checked = false;

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        $value = 1,
        bool $default = false,
        bool $showErrors = false,
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
        $this->value = $value;
        $this->showErrors = $showErrors;

        $inputName = static::convertBracketsToDots($name);

        if (old($inputName) !== null) {
            $this->checked = old($inputName) == $value;
        }

        if (! session()->hasOldInput() && $this->forNative()) {
            $this->checked = $default;
        }
    }

    /**
     * Generates an ID by the name and value attributes.
     *
     * @return string
     */
    protected function generateIdByName(): string
    {
        return 'auto_id_'.$this->name.'_'.$this->value;
    }
}
