# Getting Started

Blade Forms is a collection of reusable Blade form components implementing [Tailwind CSS](https://tailwindcss.com/). With support for [Alpine.js](https://alpinejs.dev), [Livewire](https://livewire.laravel.com/) and native [Laravel Requests](https://laravel.com/docs/requests).

```blade-component-code
<x-form-sections>
    <x-form-section :title="__('Example Form')" grid-columns="4">
        <x-slot:description>
            The Evil Rabbit Jumped over the Fence.
        </x-slot:description>

        <x-form-input name="input" label="Input" :column-span="3">
            <x-slot:description>
                <x-form-help>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, velit.</x-form-help>
            </x-slot:description>
        </x-form-input>

        <x-form-input type="number" name="number" label="Number" :column-span="2" default="0" />

        <x-form-select name="select" label="Select" :column-span="2" default="foo" :options="[
            'foo' => 'Foo',
            'bar' => 'Bar',
        ]" />

        <x-form-textarea name="message" label="Message" column-span="full" default="Dear diary, today was a good day..." />

        <x-form-group label="Newsletter" :column-span="2">
            <x-form-checkbox name="subscribe_to_newsletter_a" label="Subscribe to newsletter - A" default />
            <x-form-checkbox name="subscribe_to_newsletter_b" label="Subscribe to newsletter - B" default />
        </x-form-group>

        <x-form-group name="newsletter_frequency" label="Newsletter frequency" inline :column-span="2">
            <x-form-radio name="newsletter_frequency" value="daily" label="Daily" default />
            <x-form-radio name="newsletter_frequency" value="weekly" label="Weekly" />
        </x-form-group>

        <x-form-toggle name="agree_terms" label="Agree with terms" :column-span="3" default />
    </x-form-section>
</x-form-sections>
```

## Installation

Require the Blade Forms package using Composer:

```bash
composer require distortedfusion/blade-forms
```

### Installing Tailwind CSS

Blade Forms requires the [Tailwind Forms](https://github.com/tailwindlabs/tailwindcss-forms) plugin. Run the following command to [install Tailwind CSS](https://tailwindcss.com/docs/installation) with the Tailwind Forms plugin:

```bash
npm install tailwindcss @tailwindcss/forms --save-dev
```

Once installed you can import the `tailwind.config.preset.js` in your existing `tailwind.config.js` file, this will configure the Tailwind Forms plugin. Lastly include the Blade Forms resources in your existing `tailwind.config.js` content section:

```js
import bladeForms from './vendor/distortedfusion/blade-forms/tailwind.config.preset'

export default {
    presets: [bladeForms],
    content: [
        './vendor/distortedfusion/blade-forms/resources/**/*.blade.php',
        ...
    ]
    ...
}
```

### Installing Blade Colors

Colors are managed trough [Blade Colors](/docs/distortedfusion/blade-colors/getting-started). Blade Colors offers [Tailwind CSS](https://tailwindcss.com/) compatible, CSS variable based, color palettes. You will find full documentation on the dedicated [documentation](/docs/distortedfusion/blade-colors/getting-started) page.

Blade Colors is automatically installed with Blade Forms. After installation the `@bladeColor` directive needs be added to your layouts `<head>` section:

```html
<html>
<head>
    <title>DDFSN</title>

    @bladeColor
</head>
    <body>
    </body>
</html>
```

#### Customizing Theme Colors

Blade Forms implements the default `primary` and `gray` color definitions offered by [Blade Colors](/docs/distortedfusion/blade-colors/getting-started). You can customize this to your liking, for a detailed explanation please refer to the dedicated [documentation](/docs/distortedfusion/blade-colors/usage#customizing-colors-using-palettes) page.

## Publishing Configuration

You can publish the package configuration using the following command:

```bash
php artisan vendor:publish --tag=blade-forms-config
```

Publishing the package configuration allows you to disable or add components.

## Publishing Views

You can publish the package views using the following command:

```bash
php artisan vendor:publish --tag=blade-forms-views
```

After publishing you can modify the views from your application's `/resources/views/vendor/blade-forms` directory.

## Version Compatibility

| Laravel | PHP            | Package |
| ------- | -------------- | ------- |
| 9.x     | ^8.0           | >= 2.0  |
| 10.x    | ^8.1           | >= 2.0  |
| 11.x    | ^8.2           | >= 2.0  |

*Only the currently supported PHP versions are listed. Please [refer to previous releases of this package](https://github.com/distortedfusion/blade-forms/tags) for support for older PHP or Laravel versions.*
