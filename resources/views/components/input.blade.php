<div class="space-y-2{{ $type === 'hidden' ? ' hidden' : null }}">
    <x-form-label :label="$label ?? $name" :for="$name" />

    <div class="flex items-stretch shadow-sm dark:shadow-none {{ Str::contains($attributes->get('class'), 'rounded-')
            ? 'rounded-'.Str::before(Str::after($attributes->get('class'), 'rounded-'), ' ')
            : 'rounded-md'
        }}">
        @if($prefix ?? false)
            <span {{ $prefix->attributes->class([
                'form-input inline-flex items-center w-auto rounded-l-md border-r-0',
                'text-base leading-none sm:text-sm sm:leading-none text-black bg-white border-gray-300',
                'dark:text-white dark:bg-gray-900 dark:border-gray-700',
            ]) }}>
                {{ $prefix }}
            </span>
        @endif
        <div class="w-full flex-grow relative">
            @if($iconPrefix ?? false)
                <span {{ $iconPrefix->attributes->class([
                    'absolute left-2 inset-y-0',
                    'flex items-center',
                ]) }}>
                    {{ $iconPrefix }}
                </span>
            @endif
            <input {{ $attributes->class([
                    'form-input block w-full h-full text-base sm:text-sm',
                    'placeholder:text-gray-400 dark:placeholder:text-gray-600',
                    'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                    'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                    'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                    'ring-0 focus:border-brand-500 focus:ring-1 focus:ring-brand-500',
                    'disabled:bg-gray-100 disabled:border-gray-300 read-only:bg-gray-100 read-only:border-gray-300',
                    'focus:disabled:ring-gray-300 focus:disabled:border-gray-300 focus:read-only:ring-gray-300 focus:read-only:border-gray-300',
                    'rounded-l-md' => ($prefix ?? false) === false && ! Str::contains($attributes->get('class'), 'rounded-'),
                    'rounded-r-md' => ($suffix ?? false) === false && ! Str::contains($attributes->get('class'), 'rounded-'),
                    'pl-8' => ($iconPrefix ?? false) !== false,
                    'pr-8' => ($iconSuffix ?? false) !== false,
                ]) }}
                id="{{ $name }}"
                @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
                @else
                name="{{ $name }}"
                value="{{ $value }}"
                @endif
                type="{{ $type }}" />
            @if($iconSuffix ?? false)
                <span {{ $iconSuffix->attributes->class([
                    'absolute right-2 inset-y-0',
                    'flex items-center',
                ]) }}>
                    {{ $iconSuffix }}
                </span>
            @endif
        </div>
        @if($suffix ?? false)
            <span {{ $suffix->attributes->class([
                'form-input inline-flex items-center w-auto rounded-r-md -ml-px',
                'text-base leading-none sm:text-sm sm:leading-none text-black bg-white border-gray-300',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800',
            ]) }}>
                {{ $suffix }}
            </span>
        @endif
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>