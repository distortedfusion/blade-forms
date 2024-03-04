<?php

namespace DistortedFusion\BladeForms\Components;

class FormInputGroup extends Component
{
    use HandlesValidationErrors;

    public string $name;
    public string $label;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $label
     * @param bool   $showErrors
     *
     * @return void
     */
    public function __construct(string $name = '', string $label = '', bool $showErrors = true)
    {
        $this->name = $name;
        $this->label = $label;
        $this->showErrors = $name && $showErrors;
    }
}
