<?php

namespace DistortedFusion\BladeForms\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use RuntimeException;

abstract class FormComponent extends Component
{
    public ?string $id = null;
    public ?string $name = null;
    public ?string $errorName = null;

    public function __construct(?string $name = null, ?string $errorName = null)
    {
        $this->name = $name;
        $this->errorName = $errorName;
    }

    /**
     * Get the view / view contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|Closure|string
     */
    public function render()
    {
        $alias = Str::kebab(class_basename($this));

        return "blade-forms::components.{$alias}";
    }

    /**
     * Generates an ID, once, for this component.
     *
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $this->id = $this->idByName();
        }

        return $this->id;
    }

    /**
     * Generates an ID by the name attribute.
     *
     * @return string
     */
    private function idByName(): string
    {
        return $this->getName().'-'.Str::random(4);
    }

    public function getName(): string
    {
        if ($this->isNotWired() && ! is_null($this->name)) {
            return $this->name;
        }

        if ($this->isWired() && $this->hasWireModelIdentifier()) {
            return $this->getWireModelIdentifier();
        }

        throw new RuntimeException('No valid `name` or `wire:model` attribute set.');
    }

    public function getErrorName(): string
    {
        if (! is_null($this->errorName)) {
            return $this->errorName;
        }

        return $this->getName();
    }

    private function hasWireModelIdentifier(): bool
    {
        return ! is_null($this->getWireModelIdentifier());
    }

    private function getWireModelIdentifier(): ?string
    {
        if (is_null($this->attributes) || empty($this->attributes->whereStartsWith('wire:model')->getAttributes())) {
            return null;
        }

        return $this->attributes->whereStartsWith('wire:model')->first();
    }

    /**
     * Returns a boolean wether the form is wired to a Livewire component.
     *
     * @return bool
     */
    public function isWired(): bool
    {
        return $this->hasWireModelIdentifier();
    }

    /**
     * The inversion of 'isWired()'.
     *
     * @return bool
     */
    public function isNotWired(): bool
    {
        return ! $this->isWired();
    }

    /**
     * Converts a bracket-notation to a dotted-notation.
     *
     * @param string $name
     *
     * @return string
     */
    protected static function convertBracketsToDots($name): string
    {
        return str_replace(['[', ']'], ['.', ''], $name);
    }
}
