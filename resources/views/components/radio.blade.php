<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'flex flex-col gap-y-2'
])">
    <label class="inline-flex items-center cursor-pointer [&:has(input:disabled)]:cursor-not-allowed">
        <input id="{{ $getId() }}"
            type="radio"
            value="{{ $value }}"

            @if($forNative())
            name="{{ $getName() }}"
            @endif

            @if($isChecked())
            checked="checked"
            @endif

            {{ $attributes->class([
                'size-4 appearance-none rounded-full relative focus:ring-0 focus:ring-offset-0',
                'text-[var(--primary)] bg-[var(--input)] border border-[var(--border)]',
                'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--primary)]',
                'before:absolute before:inset-1 before:rounded-full before:bg-[var(--background)] checked:border-[var(--primary)] checked:bg-[var(--primary)] [&:not(:checked)]:before:hidden',
                'disabled:opacity-50'
            ]) }}/>

        <span class="ml-2 font-medium">{{ $label }}</span>
    </label>

    @include('blade-forms::components.partials.description')

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
