<?php

namespace DistortedFusion\BladeForms\Components;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;

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

        $this->multiple = $multiple;
        $this->showErrors = $showErrors;

        $this->default($default);
    }

    public function isSelected($key): bool
    {
        if (! $this->forNative()) {
            return false;
        }

        $this->selectedKey = old($this->getName(), $this->default);

        if ($this->selectedKey instanceof Arrayable) {
            $this->selectedKey = $this->selectedKey->toArray();
        }

        return in_array($key, Arr::wrap($this->selectedKey));
    }
}
