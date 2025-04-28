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
                'form-radio',
                'text-[var(--primary)] border-[var(--border)]',
                'focus:ring-[color-mix(in_oklab,var(--primary)_25%,transparent)]',
            ]) }}/>
        <span class="ml-2 font-medium">{{ $label }}</span>
    </label>

    @if($description ?? false)
        {{ $description }}
    @endif

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
