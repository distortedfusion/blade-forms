<x-form-grid-column :attributes="$getColumnAttributeBag()->merge([
    'hidden' => $type === 'hidden',
])->class([
    'flex flex-col gap-y-2'
])">
    <x-form-label :label="$label ?? $getName()" :for="$getId()" :mark-required="$markRequired" />

    <div class="flex items-stretch {{ Str::contains($attributes->get('class'), 'rounded-')
            ? 'rounded-'.Str::before(Str::after($attributes->get('class'), 'rounded-'), ' ')
            : 'rounded-md'
        }}"
        @if($attributes->has('wire:ignore'))
        wire:ignore
        @endif
        >
        @if($prefix ?? false)
            <span {{ $prefix->attributes->class([
                'form-input inline-flex items-center w-auto rounded-l-md border-r-0',
                'text-base leading-none sm:text-sm sm:leading-none text-inherit bg-white border-[rgb(var(--gray-300))]',
                'dark:bg-[rgb(var(--gray-900))] dark:border-[rgb(var(--gray-700))]',
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
            <input id="{{ $getId() }}"
                type="{{ $type }}"

                @if($forNative())
                name="{{ $getName() }}"
                value="{{ $value }}"
                @endif

                {{ $attributes->except(['wire:ignore'])->class([
                    'form-input block w-full',
                    'text-base sm:text-sm leading-6 sm:leading-6 py-2 h-[2.625rem]',
                    'placeholder:text-[rgb(var(--gray-400))] dark:placeholder:text-[rgb(var(--gray-600))]',
                    'text-inherit' => ! Str::contains($attributes->get('class'), 'text-'),
                    'bg-white dark:bg-[rgb(var(--gray-900))]' => ! Str::contains($attributes->get('class'), 'bg-'),
                    'border-[rgb(var(--gray-300))] dark:border-[rgb(var(--gray-700))]' => ! Str::contains($attributes->get('class'), 'border-'),
                    'ring-0 focus:border-[rgb(var(--primary-500))] dark:focus:border-[rgb(var(--primary-500))] focus:ring-2 focus:ring-[rgba(var(--primary-500),.25)]',
                    'disabled:bg-[rgb(var(--gray-100))] disabled:border-[rgb(var(--gray-300))] read-only:border-[rgb(var(--gray-300))]',
                    'focus:disabled:ring-[rgb(var(--gray-300))] focus:disabled:border-[rgb(var(--gray-300))] focus:read-only:ring-[rgb(var(--gray-300))] focus:read-only:border-[rgb(var(--gray-300))]',
                    'rounded-l-md' => ($prefix ?? false) === false && ! Str::contains($attributes->get('class'), 'rounded-'),
                    'rounded-r-md' => ($suffix ?? false) === false && ! Str::contains($attributes->get('class'), 'rounded-'),
                    'pl-8' => ($iconPrefix ?? false) !== false,
                    'pr-8' => ($iconSuffix ?? false) !== false,
                ]) }} />
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
                'text-base leading-none sm:text-sm sm:leading-none text-inherit bg-white border-[rgb(var(--gray-300))]',
                'dark:bg-[rgb(var(--gray-900))] dark:border-[rgb(var(--gray-700))]',
            ]) }}>
                {{ $suffix }}
            </span>
        @endif
    </div>

    @if($description ?? false)
        {{ $description }}
    @endif

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
