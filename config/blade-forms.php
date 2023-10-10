<?php

use DistortedFusion\BladeForms\Components;

return [
    'components' => [
        // Form...
        'form.actions' => Components\Form\Actions::class,
        'form.section' => Components\Form\Section::class,
        'form.sections' => 'blade-forms::components.form.section-group',

        // Form components...
        'form-button' => Components\Form\Button::class,
        'form-help' => Components\Form\Help::class,
        'form-select.description' => Components\Form\SelectDescription::class,
        'form-toggle' => Components\Form\Toggle::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel Form Components
    |--------------------------------------------------------------------------
    |
    | This package provides markup for the protonemedia/laravel-form-components
    | package. These views are loaded during boot by overriding their respective
    | default config value.
    |
    | This behavior can be disabled by removing entries from the array below.
    |
    | More information: https://github.com/protonemedia/laravel-form-components
    |
    */

    'form-components' => [
        'form' => [
            'view' => 'blade-forms::vendor.form-components.form',
        ],
        'form-checkbox' => [
            'view' => 'blade-forms::vendor.form-components.form-checkbox',
        ],
        'form-errors' => [
            'view' => 'blade-forms::vendor.form-components.form-errors',
        ],
        'form-group' => [
            'view' => 'blade-forms::vendor.form-components.form-group',
        ],
        'form-input' => [
            'view' => 'blade-forms::vendor.form-components.form-input',
        ],
        'form-label' => [
            'view' => 'blade-forms::vendor.form-components.form-label',
        ],
        'form-radio' => [
            'view' => 'blade-forms::vendor.form-components.form-radio',
        ],
        'form-select' => [
            'view' => 'blade-forms::vendor.form-components.form-select',
        ],
        'form-submit' => [
            'view' => 'blade-forms::vendor.form-components.form-submit',
        ],
        'form-textarea' => [
            'view' => 'blade-forms::vendor.form-components.form-textarea',
        ],
    ],
];
