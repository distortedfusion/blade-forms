<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

trait InteractsWithLivewireProperties
{
    /**
     * Resolve the components' `wire:model` attribute.
     *
     * @return string|null
     */
    public function getWireModelAttribute(): ?string
    {
        if (! $this->hasWireModelAttribute()) {
            return null;
        }

        return $this->attributes->whereStartsWith('wire:model')->first();
    }

    /**
     * Determine if the component has a `wire:model` attribute.
     *
     * @return bool
     */
    public function hasWireModelAttribute(): bool
    {
        return ! is_null($this->attributes) && ! empty(
            $this->attributes->whereStartsWith('wire:model')->getAttributes()
        );
    }

    /**
     * Determine if the component is used in a livewire context.
     *
     * @return bool
     */
    public function isWired(): bool
    {
        return $this->hasWireModelAttribute();
    }

    /**
     * Determine if the component is not used in a livewire context.
     *
     * @return bool
     */
    public function isNotWired(): bool
    {
        return ! $this->isWired();
    }
}
