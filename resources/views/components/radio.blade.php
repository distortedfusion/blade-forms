<div>
    <label class="inline-flex items-center">
        <input {{ $attributes->class([
                'form-radio',
                'text-brand-500 border-gray-300',
            ]) }}
            type="radio"

            @if($isNotWired())
                name="{{ $getName() }}"
            @endif

            value="{{ $value }}"

            @if($checked)
                checked="checked"
            @endif
        />

        <span class="ml-2">{{ $label }}</span>
    </label>

    @if($hasErrorAndShow($getName()))
        <x-form-errors :name="$getName()" />
    @endif
</div>
