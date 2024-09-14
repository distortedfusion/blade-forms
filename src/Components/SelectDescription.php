<?php

namespace DistortedFusion\BladeForms\Components;

use Illuminate\View\Component;

class SelectDescription extends Component
{
    public ?string $entity;
    public bool $after;

    /**
     * Create a new component instance.
     *
     * @param string $entity
     * @param bool   $after
     */
    public function __construct(
        ?string $entity = null,
        bool $after = false,
    ) {
        $this->entity = $entity;
        $this->after = $after;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        return view('blade-forms::components.select-description');
    }
}
