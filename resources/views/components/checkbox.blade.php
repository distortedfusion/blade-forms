<div class="flex flex-col">
    <label class="flex items-center cursor-pointer [&:has(input:disabled)]:cursor-not-allowed">
        <input {{ $attributes->class([
                'form-checkbox',
                'text-brand-500 border-gray-300',
            ]) }}
            type="checkbox"
            value="{{ $value }}"

            @if($isNotWired())
                name="{{ $getName() }}"
            @endif

            @if($checked)
                checked="checked"
            @endif
        />

        <span class="ml-2">{{ $label }}</span>
    </label>

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</div>
