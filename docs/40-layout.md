# Layout

Blade Form's grid system allows you to create responsive, multi-column layouts.

## Form Sections

Form sections are used as grid containers. By wrapping multiple `<x-form-section` components in a `<x-form-sections` component you can visually differentiate between sections.

```blade-component-code
<x-form-sections>
    <x-form-section>
        <x-form-input name="name" label="Name" />
    </x-form-section>
    <x-form-section>
        <x-form-input type="email" name="email" label="Email" />
    </x-form-section>
</x-form-sections>
```

## Section Titles and Descriptions

By supplying a `title` and `description` attribute you can add additional information to a section.

```blade-component-code
<x-form-sections>
    <x-form-section title="Personal Details" description="The Evil Rabbit Jumped over the Fence.">
        <x-form-input name="name" label="Name" />
    </x-form-section>
</x-form-sections>
```

## Columns

By setting the `grid-columns` attribute on the `<x-form-section` component you can define the number of grid columns.

```blade-component-code
<x-form-sections>
    <x-form-section grid-columns="2">
        <x-form-input name="first_name" label="First Name" />
        <x-form-input name="last_name" label="Last Name" />
    </x-form-section>
</x-form-sections>
```

## Column Spans

By setting the `column-span` attribute on any form component you can modify the column span of the component.

```blade-component-code
<x-form-sections>
    <x-form-section grid-columns="4">
        <x-form-input name="name" label="Name" :column-span="3" />
        <x-form-input type="email" name="email" label="Email" column-span="full" />
    </x-form-section>
</x-form-sections>
```

## Column Start

By setting the `column-start` attribute on any form component you can modify the column start of the component.

```blade-component-code
<x-form-sections>
    <x-form-section grid-columns="4">
        <x-form-input name="name" label="Name" :column-span="2" :column-start="3" />
    </x-form-section>
</x-form-sections>
```

## Breakpoints

By default when supplying an integer or string value to either the `grid-columns`, `column-span` or `column-start` attributes only the `sm` breakpoint is affected. Breakpoints are based on the default [Tailwind CSS breakpoints](https://tailwindcss.com/docs/responsive-design).

Instead you can also supply an array, with all required breakpoints, to either the `grid-columns`, `column-span` or `column-start` for more granular control.

```html
<x-form-section :grid-columns="[
    'default' => 1,
    'sm' => 2,
    'md' => 4,
    'lg' => 6,
    'xl' => 8,
    '2xl' => 10,
]">
    ...
</x-form-section>
```
