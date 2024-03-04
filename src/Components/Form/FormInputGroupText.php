<?php

namespace DistortedFusion\BladeForms\Components;

class FormInputGroupText extends Component
{
    public string $text;

    /**
     * Create a new component instance.
     *
     * @param string $text
     *
     * @return void
     */
    public function __construct(string $text = '')
    {
        $this->text = $text;
    }
}
