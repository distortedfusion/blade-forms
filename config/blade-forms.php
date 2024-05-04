<?php

use DistortedFusion\BladeForms\Components;

return [
    // DEPRECATED
    'use_eloquent_date_casting' => false,
    'default_wire' => false,
    // END-DEPRECATED

    'components' => [
        // Form...
        'form.actions' => Components\Actions::class,
        'form.section' => Components\Section::class,
        'form.section-title' => Components\SectionTitle::class,
        'form.sections' => 'blade-forms::components.section-group',

        // Form components...
        'form-icon' => 'blade-forms::components.icon',
        'form-button' => Components\Button::class,
        'form-help' => Components\Help::class,
        'form-select.description' => Components\SelectDescription::class,
        'form-toggle' => Components\Toggle::class,

        // Ported form componensts...
        'form' => Components\Form::class,
        'form-checkbox' => Components\Checkbox::class,
        'form-checkbox-button' => Components\CheckboxButton::class,
        'form-errors' => Components\Errors::class,
        'form-group' => Components\Group::class,
        'form-input' => Components\Input::class,
        'form-label' => Components\Label::class,
        'form-radio' => Components\Radio::class,
        'form-radio-button' => Components\RadioButton::class,
        'form-range' => Components\Range::class,
        'form-select' => Components\Select::class,
        'form-submit' => Components\Submit::class,
        'form-textarea' => Components\Textarea::class,
    ],
];
