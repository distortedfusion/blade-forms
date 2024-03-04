<?php

namespace DistortedFusion\BladeForms\Components;

class FormRange extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    public string $name;
    public string $label;

    public $value;

    /**
     * Create a new component instance.
     *
     * @param string     $name
     * @param string     $label
     * @param mixed|null $bind
     * @param mixed|null $default
     * @param mixed|null $language
     * @param bool       $showErrors
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        $bind = null,
        $default = null,
        $language = null,
        bool $showErrors = true
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->showErrors = $showErrors;

        if ($language) {
            $this->name = "{$name}[{$language}]";
        }

        $this->setValue($name, $bind, $default, $language);
    }
}
