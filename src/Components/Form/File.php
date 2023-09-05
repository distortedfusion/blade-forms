<?php

namespace DistortedFusion\BladeForms\Components\Form;

use ProtoneMedia\LaravelFormComponents\Components\Component;
use ProtoneMedia\LaravelFormComponents\Components\HandlesValidationErrors;

class File extends Component
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
    public function __construct(
        string $name,
        string $label = '',
        bool $showErrors = true
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->showErrors = $showErrors;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        return view('blade-forms::components.form.file');
    }
}
