<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'space-y-2'
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
                'text-[rgb(var(--primary-500))] border-[rgb(var(--gray-300))]',
                'focus:ring-[rgba(var(--primary-500),.25)]',
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
