<?php

namespace DistortedFusion\BladeForms\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Checkbox extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public $value;
    public bool $checked = false;

    public function __construct(
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        $value = 1,
        bool $default = false,
        bool $showErrors = true
    ) {
        parent::__construct(name: $name, errorName: $errorName);

        $this->label = $label;
        $this->value = $value;
        $this->showErrors = $showErrors;

        $inputName = static::convertBracketsToDots(Str::before($name, '[]'));

        if ($oldData = old($inputName)) {
            $this->checked = in_array($value, Arr::wrap($oldData));
        }

        if (! session()->hasOldInput() && $this->isNotWired()) {
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
