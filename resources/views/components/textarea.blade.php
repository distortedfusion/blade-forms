<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'flex flex-col gap-y-2'
])">
    <x-form-label :label="$label ?? $getName()" :for="$getId()" :mark-required="$markRequired" />

    <div class="flex rounded-md shadow-sm dark:shadow-none">
        <textarea id="{{ $getId() }}"
            @if($forNative())
                name="{{ $getName() }}"
            @endif
            {{ $attributes->class([
                'form-textarea block w-full flex-grow relative text-base sm:text-sm',
                'placeholder:text-[rgb(var(--gray-400))] dark:placeholder:text-[rgb(var(--gray-600))]',
                'text-inherit' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-[rgb(var(--gray-900))]' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-[rgb(var(--gray-300))] dark:border-[rgb(var(--gray-700))]' => ! Str::contains($attributes->get('class'), 'border-'),
                'ring-0 focus:border-[rgb(var(--primary-500))] dark:focus:border-[rgb(var(--primary-500))] focus:ring-2 focus:ring-[rgba(var(--primary-500),.25)]',
                'disabled:bg-[rgb(var(--gray-100))] disabled:border-[rgb(var(--gray-300))] read-only:border-[rgb(var(--gray-300))]',
                'focus:disabled:ring-[rgb(var(--gray-300))] focus:disabled:border-[rgb(var(--gray-300))] focus:read-only:ring-[rgb(var(--gray-300))] focus:read-only:border-[rgb(var(--gray-300))]',
                'rounded-l-md' => ($prefix ?? false) === false && ! Str::contains($attributes->get('class'), 'rounded-'),
                'rounded-r-md' => ($suffix ?? false) === false && ! Str::contains($attributes->get('class'), 'rounded-'),
            ]) }}>{{ $forNative() ? $value : null }}</textarea>
    </div>

    @if($description ?? false)
        {{ $description }}
    @endif

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
