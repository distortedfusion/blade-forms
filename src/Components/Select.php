<?php

namespace DistortedFusion\BladeForms\Components;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Select extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public $options;
    public $selectedKey;
    public bool $multiple;
    public string $placeholder;

    public function __construct(
        ?string $name = null,
        string $label = '',
        $options = [],
        $default = null,
        bool $multiple = false,
        bool $showErrors = true,
        string $placeholder = ''
    ) {
        parent::__construct(name: $name);

        $this->label = $label;
        $this->options = $options;
        $this->placeholder = $placeholder;

        if ($this->isNotWired()) {
            $inputName = static::convertBracketsToDots(Str::before($name, '[]'));

            $this->selectedKey = old($inputName, $default);

            if ($this->selectedKey instanceof Arrayable) {
                $this->selectedKey = $this->selectedKey->toArray();
            }
        }

        $this->multiple = $multiple;
        $this->showErrors = $showErrors;
    }

    public function isSelected($key): bool
    {
        if ($this->isWired()) {
            return false;
        }

        return in_array($key, Arr::wrap($this->selectedKey));
    }

    public function nothingSelected(): bool
    {
        if ($this->isWired()) {
            return false;
        }

        return is_array($this->selectedKey) ? empty($this->selectedKey) : is_null($this->selectedKey);
    }
}
