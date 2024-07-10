# Components

## Available Components

### Input

```blade-component-code
<x-form-input name="description" label="Description" />
```

### Select

```blade-component-code
<x-form-select name="select" label="Select" default="foo" :options="[
    'foo' => 'Foo',
    'bar' => 'Bar',
]" />
```

### Textarea

```blade-component-code
<x-form-textarea name="message" label="Message" />
```

### Toggle

```blade-component-code
<x-form-toggle name="agree_with_terms" label="Agree with terms" />
```

```blade-component-code
<x-form-toggle name="agree_with_terms" label="Agree with terms">
    <x-slot:description>
        Toggle to agree with the terms
    </x-slot:description>
</x-form-toggle>
```

### Checkbox

```blade-component-code
<x-form-checkbox name="agree_with_terms" label="Agree with terms" />
```

### Radio

```blade-component-code
<x-form-radio name="one_of_many" label="Option - A" />
```

## Adding Icons

Optionally the `x-form-icon` component can be used on generic input components to add icons.

```blade-component-code
<div class="space-y-4">
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

## Prefix and Suffix

Generic inputs can be prefixed or suffixed with simple text elements for additional clarity.

```blade-component-code
<div class="space-y-4">
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
