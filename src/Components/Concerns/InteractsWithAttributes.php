<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

use DistortedFusion\BladeForms\Components\FormComponent;

trait InteractsWithAttributes
{
    /**
     * Resolve an attribute from the component attribute bag.
     *
     * @param string $key
     *
     * @return string|null
     */
    public function getAttribute(string $key): ?string
    {
        if (! $this->hasAttribute($key)) {
            return null;
        }

        return $this->attributes->whereStartsWith($key)->first();
    }

    /**
     * Determine if the component attribute bag contains an attribute.
     *
     * @param string $key
     *
     * @return bool
     */
    public function hasAttribute(string $key): bool
    {
        return ! is_null($this->attributes) && ! empty(
            $this->attributes->whereStartsWith($key)->getAttributes()
        );
    }

    /**
     * Determine if the component is used in an alpine context.
     *
     * @return bool
     */
    public function forAlpine(): bool
    {
        return $this->hasAttribute(FormComponent::ALPINE_MODEL_ATTRIBUTE);
    }

    /**
     * Determine if the component is used in a livewire context.
     *
     * @return bool
     */
    public function forLivewire(): bool
    {
        return $this->hasAttribute(FormComponent::WIRE_MODEL_ATTRIBUTE);
    }

    /**
     * Determine if the component is not used in a livewire context.
     *
     * @return bool
     */
    public function forNative(): bool
    {
        return ! $this->forAlpine() && ! $this->forLivewire();
    }
}
