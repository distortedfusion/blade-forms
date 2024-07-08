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

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $errorName = null,
        string $label = '',
        $options = [],
        $default = null,
        bool $multiple = false,
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
        $this->options = $options;

        if ($this->forNative()) {
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
        if ($this->forLivewire()) {
            return false;
        }

        return in_array($key, Arr::wrap($this->selectedKey));
    }

    public function nothingSelected(): bool
    {
        if ($this->forLivewire()) {
            return false;
        }

        return is_array($this->selectedKey) ? empty($this->selectedKey) : is_null($this->selectedKey);
    }
}
