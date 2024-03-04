<?php

namespace DistortedFusion\BladeForms\Components;

class Group extends FormComponent
{
    use Concerns\HandlesValidationErrors;

    public string $name;
    public string $label;
    public bool $inline = false;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $label
     * @param bool   $inline
     * @param bool   $showErrors
     *
     * @return void
     */
    public function __construct(string $name = '', string $label = '', bool $inline = false, bool $showErrors = true)
    {
        $this->name = $name;
        $this->label = $label;
        $this->inline = $inline;
        $this->showErrors = $name && $showErrors;
    }
}
