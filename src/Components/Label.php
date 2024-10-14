<?php

namespace DistortedFusion\BladeForms\Components;

class Label extends FormComponent
{
    public string $label;
    public bool $markRequired;

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param bool   $markRequired
     *
     * @return void
     */
    public function __construct(string $label = '', bool $markRequired = false)
    {
        $this->label = $label;
        $this->markRequired = $markRequired;
    }
}
