# Getting Started

The form components extend upon the [https://github.com/protonemedia/laravel-form-components](protonemedia/laravel-form-components) package. We provide some custom markup which can be controlled with the `blade-forms.form-components` config.

Additionally we ship some extra components, one of which is the `form-toggle`. The toggle component does require some extra styling, refer to 'Components/Toggle' for more details.

## Usage

**Important:** Include the `forms.css` in your `app.css`.

```css
/* Typically the app.css is located in ./resources/css/ */
@import "./../../vendor/distortedfusion/blade-forms/resources/css/forms.css";
```

## Components

### Toggle

```blade
<x-form-toggle name="toggle.enabled" :label="__('On/Off')">
    <x-slot name="description">
        {{ __('Toggle description') }}
    </x-slot>
</x-form-toggle>
```

**Important:** Include the `toggle.css` in your `app.css`.

```css
/* Typically the app.css is located in ./resources/css/ */
@import "./../../vendor/distortedfusion/blade-forms/resources/css/toggle.css";
```
