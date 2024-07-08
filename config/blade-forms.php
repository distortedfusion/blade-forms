<?php

use DistortedFusion\BladeForms\Components;

return [
    'components' => [
        'form.actions' => Components\Actions::class,

        'form-grid' => 'blade-forms::components.grid.index',
        'form-grid-column' => 'blade-forms::components.grid.column',

        'form.section' => Components\Section::class,
        'form.section-title' => Components\SectionTitle::class,
        'form.sections' => 'blade-forms::components.section-group',

        // Form Elements...
        'form-button' => Components\Button::class,
        'form-help' => Components\Help::class,
        'form-icon' => 'blade-forms::components.icon',
        'form-pulser' => 'blade-forms::components.pulser',
        'form-select.description' => Components\SelectDescription::class,
        'form-toggle' => Components\Toggle::class,

        // Form components...
        'form' => Components\Form::class,
        'form-checkbox' => Components\Checkbox::class,
        'form-checkbox-button' => Components\CheckboxButton::class,
        'form-errors' => Components\Errors::class,
        'form-group' => Components\Group::class,
        'form-input' => Components\Input::class,
        'form-label' => Components\Label::class,
        'form-radio' => Components\Radio::class,
        'form-radio-button' => Components\RadioButton::class,
        'form-select' => Components\Select::class,
        'form-submit' => Components\Submit::class,
        'form-textarea' => Components\Textarea::class,
    ],
];
