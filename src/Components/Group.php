<?php

namespace DistortedFusion\BladeForms\Components;

class Group extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $label;
    public bool $inline = false;

    public function __construct(?string $name = null, string $label = '', bool $inline = false, bool $showErrors = true)
    {
        parent::__construct(name: $name ?: '');

        $this->label = $label;
        $this->inline = $inline;
        $this->showErrors = $name && $showErrors;
    }
}
