<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

trait HandlesDefaultAndOldValue
{
    private function setValue(string $name, $default = null)
    {
        if ($this->forLivewire()) {
            return;
        }

        $inputName = static::convertBracketsToDots($name);

        return $this->value = old($inputName, $default);
    }
}
