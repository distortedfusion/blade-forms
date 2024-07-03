<?php

namespace DistortedFusion\BladeForms\Components;

use Closure;
use DistortedFusion\BladeForms\Components\Concerns\InteractsWithAlpineProperties;
use DistortedFusion\BladeForms\Components\Concerns\InteractsWithLivewireProperties;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use RuntimeException;

abstract class FormComponent extends Component
{
    use InteractsWithAlpineProperties;
    use InteractsWithLivewireProperties;

    public ?string $id = null;
    public ?string $name = null;
    public ?string $errorName = null;

    public function __construct(?string $id = null, ?string $name = null, ?string $errorName = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->errorName = $errorName;
    }

    /**
     * Get the view / view contents that represent the component.
     *
     * @return View|Htmlable|Closure|string
     */
    public function render()
    {
        $alias = Str::kebab(class_basename($this));

        return "blade-forms::components.{$alias}";
    }

    /**
     * Get the `id` attribute, generates an ID based on the `name` when none
     * is provided.
     *
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $this->id = $this->generateIdUsingNameAttribute();
        }

        return $this->id;
    }

    /**
     * Generates an ID using the name attribute.
     *
     * @return string
     */
    private function generateIdUsingNameAttribute(): string
    {
        return $this->getName().'-'.Str::random(4);
    }

    /**
     * Get the `name` attribute.
     *
     * @return string
     */
    public function getName(): string
    {
        if ($this->hasWireModelAttribute()) {
            return $this->getWireModelAttribute();
        }

        if (! is_null($this->name)) {
            return $this->name;
        }

        throw new RuntimeException('No valid `name`, `wire:model` or `x-model` attribute set.');
    }

    /**
     * Get the identifier used for error messages, falls back to the `name` attribute.
     *
     * @return string
     */
    public function getErrorName(): string
    {
        if (! is_null($this->errorName)) {
            return $this->errorName;
        }

        return $this->getName();
    }
}
