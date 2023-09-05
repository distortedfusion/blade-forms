<div class="{{ $type === 'hidden' ? 'hidden' : null }}">
    <x-form-label :label="$label ?? $name" :for="$name" />

    <div class="mt-2 flex rounded-md shadow-sm dark:shadow-none">
        @if($prefix ?? false)
            <span {{ $prefix->attributes->class([
                'form-input inline-flex items-center w-auto rounded-l-md border-r-0',
                'text-black bg-white border-gray-300 shadow-sm',
                'dark:text-white dark:bg-gray-900 dark:border-gray-700 dark:shadow-none',
            ]) }}>
                {{ $prefix }}
            </span>
        @endif
        <input {{ $attributes->class([
                'form-input block w-full flex-grow relative',
                'placeholder:text-muted dark:placeholder:text-gray-200',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'rounded-l-md' => ($prefix ?? false) === false,
                'rounded-r-md' => ($suffix ?? false) === false,
            ]) }}
            id="{{ $name }}"
            @if($isWired())
            wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
            name="{{ $name }}"
            value="{{ $value }}"
            @endif
            type="{{ $type }}" />
        @if($suffix ?? false)
            <span {{ $suffix->attributes->class([
                'form-input inline-flex items-center w-auto rounded-r-md -ml-px',
                'text-black bg-white border-gray-300 shadow-sm',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800 dark:shadow-none',
            ]) }}>
                {{ $suffix }}
            </span>
        @endif
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
