<?php

namespace DistortedFusion\BladeForms\Components;

class Input extends FormComponent
{
    use Concerns\HandlesValidationErrors;
    use Concerns\HandlesDefaultAndOldValue;

    public string $name;
    public string $label;
    public string $type;
    public bool $floating;

    public $value;

    /**
     * Create a new component instance.
     *
     * @param string     $name
     * @param string     $label
     * @param string     $type
     * @param mixed|null $bind
     * @param mixed|null $default
     * @param mixed|null $language
     * @param bool       $showErrors
     * @param bool       $floating
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $type = 'text',
        $bind = null,
        $default = null,
        $language = null,
        bool $showErrors = true,
        bool $floating = false
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->showErrors = $showErrors;
        $this->floating = $floating && $type !== 'hidden';

        if ($language) {
            $this->name = "{$name}[{$language}]";
        }

        $this->setValue($name, $bind, $default, $language);
    }
}
