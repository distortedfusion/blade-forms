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

### Assets

Some components require additional styling or scripting, the source files can be published using the following command:

```bash
php artisan vendor:publish --tag=blade-forms-assets
```

After publishing the assets can be added to your `app.css` and `app.js`:

```
// app.css
@import "./vendor/distortedfusion/blade-forms/forms.css";
@import "./vendor/distortedfusion/blade-forms/toggle.css";
```

```
// app.js
require('./vendor/distortedfusion/blade-forms/file.js');
```

#### Keeping assets up-to-date

Optionally, the assets can be updated automatically by adding the following command to your `composer.json`:

```
// composer.json
"post-update-cmd": [
    "@php artisan vendor:publish --tag=blade-forms-assets --ansi --force",
    ...
],
```

### Purging

For correct purging the blade-forms resources need to be included in the TailwindCSS content config:

```
// tailwind.config.js
content: [
    './vendor/distortedfusion/blade-forms/resources/**/*.blade.php',
    './vendor/distortedfusion/blade-forms/src/**/*.php',
    ...
],
```
