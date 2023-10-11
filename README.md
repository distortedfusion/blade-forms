# Blade Forms

Blade Forms is a proxy for the [Laravel Form Components](https://github.com/protonemedia/laravel-form-components) package.

This package offers custom markup for the Laravel From Components and additional components.

## Requirements

The form components use the [@tailwindcss/forms](https://github.com/tailwindlabs/tailwindcss-forms) baseline styling using the class strategy:

```
// tailwind.config.js
plugins: [
    require('@tailwindcss/forms')({ strategy: 'class' }),
    ...
],
```

## Installation

Once you have created a new Laravel application, you may install Blade Forms using Composer:

```sh
composer require distortedfusion/blade-forms
```

### Purging

For correct purging the blade-forms resources need to be included in the TailwindCSS content config:

```
// tailwind.config.js
content: [
    './vendor/distortedfusion/blade-forms/resources/**/*.blade.php',
    ...
],
```
