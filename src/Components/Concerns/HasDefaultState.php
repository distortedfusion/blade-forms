<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

trait HasDefaultState
{
    protected $default;

    public function default($default): static
    {
        $this->default = $default;

        return $this;
    }
}
