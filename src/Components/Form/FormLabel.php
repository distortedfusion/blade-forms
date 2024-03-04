<?php

namespace DistortedFusion\BladeForms\Components;

class FormLabel extends Component
{
    public string $label;

    /**
     * Create a new component instance.
     *
     * @param string $label
     *
     * @return void
     */
    public function __construct(string $label = '')
    {
        $this->label = $label;
    }
}
