<?php

use DistortedFusion\BladeForms\Components;

return [
    // DEPRECATED
    'use_eloquent_date_casting' => false,
    'default_wire' => false,
    // END-DEPRECATED

    'components' => [
        // Form...
        'form.actions' => Components\Form\Actions::class,
        'form.section' => Components\Form\Section::class,
        'form.section-title' => Components\Form\SectionTitle::class,
        'form.sections' => 'blade-forms::components.form.section-group',

        // Form components...
        'form-button' => Components\Form\Button::class,
        'form-help' => Components\Form\Help::class,
        'form-select.description' => Components\Form\SelectDescription::class,
        'form-toggle' => Components\Form\Toggle::class,

        // Ported form componensts...
        'form' => Components\Form::class,
        'form-checkbox' => Components\FormCheckbox::class,
        'form-errors' => Components\FormErrors::class,
        'form-group' => Components\FormGroup::class,
        'form-input' => Components\FormInput::class,
        'form-input-group' => Components\FormInputGroup::class,
        'form-input-group-text' => Components\FormInputGroupText::class,
        'form-label' => Components\FormLabel::class,
        'form-radio' => Components\FormRadio::class,
        'form-range' => Components\FormRange::class,
        'form-select' => Components\FormSelect::class,
        'form-submit' => Components\FormSubmit::class,
        'form-textarea' => Components\FormTextarea::class,
    ],
];
