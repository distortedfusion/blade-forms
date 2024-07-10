# Components

## Input

```blade-component-code
<div class="space-y-4">
    <x-form-input name="input" label="Basic Input" />

    <x-form-input name="input" label="Input with Description">
        <x-slot:description>
            <x-form-help>The Evil Rabbit Jumped over the Fence.</x-form-help>
        </x-slot:description>
    </x-form-input>
</div>
```

### Adding Icons

Optionally the `x-form-icon` component can be used to add icons.

```blade-component-code
<div class="grid grid-cols-2 space-x-4">
    <x-form-input name="search" label="Search">
        <x-slot:icon-prefix>
            <x-form-icon icon="fal-magnifying-glass" />
        </x-slot:icon-prefix>
    </x-form-input>

    <x-form-input name="filter" label="Filter">
        <x-slot:icon-suffix>
            <x-form-icon icon="fal-filter" />
        </x-slot:icon-suffix>
    </x-form-input>
</div>
```

### Prefix and Suffix

Inputs can be prefixed or suffixed with simple text elements for additional clarity.

```blade-component-code
<div class="grid grid-cols-2 space-x-4">
    <x-form-input name="quantity" label="Quantity" type="number">
        <x-slot:prefix>
            Quantity
        </x-slot:prefix>
    </x-form-input>
    <x-form-input name="email" label="Email">
        <x-slot:suffix>
            @example.com
        </x-slot:suffix>
    </x-form-input>
</div>
```

## Select

```blade-component-code
<div class="space-y-4">
    <x-form-select name="select" label="Basic Select" default="foo" :options="[
        'foo' => 'Foo',
        'bar' => 'Bar',
    ]" />

    <x-form-select name="select" label="Select with Description" default="foo" :options="[
        'foo' => 'Foo',
        'bar' => 'Bar',
    ]">
        <x-slot:description>
            <x-form-help>The Evil Rabbit Jumped over the Fence.</x-form-help>
        </x-slot:description>
    </x-form-select>
</div>
```

### Options with Descriptions

Optionally the `x-form-select-description` component can be used to add disabled options in between other options. These disabled options are intended to be used as separators or to add additional information.

```blade-component-code
<x-form-select name="select" label="Option Descriptions" default="last_week">
    <option value="last_week">Last Week</option>
    <x-form-select-description>{{ \Carbon\Carbon::now()->subWeek()->format('Y-m-d').' - '.\Carbon\Carbon::now()->format('Y-m-d') }}</x-form-select-description>
    <option value="last_week">Last Month</option>
    <x-form-select-description>{{ \Carbon\Carbon::now()->subMonth()->format('Y-m-d').' - '.\Carbon\Carbon::now()->format('Y-m-d') }}</x-form-select-description>
    <option value="last_week">Last Year</option>
    <x-form-select-description>{{ \Carbon\Carbon::now()->subYear()->format('Y-m-d').' - '.\Carbon\Carbon::now()->format('Y-m-d') }}</x-form-select-description>
</x-form-select>
```

## Textarea

```blade-component-code
<div class="space-y-4">
    <x-form-textarea name="textarea" label="Basic Textarea" />

    <x-form-textarea name="textarea" label="Textarea with Description">
        <x-slot:description>
            <x-form-help>The Evil Rabbit Jumped over the Fence.</x-form-help>
        </x-slot:description>
    </x-form-textarea>
</div>
```

## Checkbox

The default state of the checkbox component can be configured with the `default` boolean attribute.

The `checked` attribute is managed by Blade Forms and takes the `default` attribute into account when handling [old data](/docs/distortedfusion/blade-forms/usage#validation-and-old-input). When using [Alpine.js or Livewire](/docs/distortedfusion/blade-forms/usage#alpinejs-and-livewire-requests) the checked state would be handled by Alpine.js or Livewire directly.

```blade-component-code
<div class="space-y-4">
    <x-form-checkbox name="checkbox" label="Basic Checkbox" default />

    <x-form-checkbox name="checkbox" label="Checkbox with Description">
        <x-slot:description>
            <x-form-help>The Evil Rabbit Jumped over the Fence.</x-form-help>
        </x-slot:description>
    </x-form-checkbox>
</div>
```

## Radio

Similar to the checkbox component the default state of radios can be configured with the `default` boolean attribute.

```blade-component-code
<div class="space-y-4">
    <x-form-radio name="radio" value="option-a" label="Basic Checkbox" default />

    <x-form-radio name="radio" value="option-b" label="Checkbox with Description">
        <x-slot:description>
            <x-form-help>The Evil Rabbit Jumped over the Fence.</x-form-help>
        </x-slot:description>
    </x-form-radio>
</div>
```

## Toggle

Toggles are functionally the same as the [checkbox](#checkbox) component with added styling.

```blade-component-code
<div class="space-y-4">
    <x-form-toggle name="toggle" label="Basic Toggle" default />

    <x-form-toggle name="toggle" label="Toggle with Description">
        <x-slot:description>
            <x-form-help>The Evil Rabbit Jumped over the Fence.</x-form-help>
        </x-slot:description>
    </x-form-toggle>
</div>
```
