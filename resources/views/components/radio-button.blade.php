<div>
    <div class="{{ implode(' ', [
        'w-full flex flex-col',
        'bg-brand-500/0 border border-black/20 ring-1 ring-brand-500/0 rounded-md',
        '[&:has(input:checked)]:bg-brand-500/10 [&:has(input:checked)]:border-brand-500 [&:has(input:checked)]:ring-brand-500',
        '[&:has(input:disabled)]:bg-gray-100 [&:has(input:disabled)]:border-gray-300',
        'transition-[background-color,_box-shadow,_border-color]',
    ])}}">
        <label class="w-full flex items-center px-4 py-2 cursor-pointer [&:has(input:disabled)]:cursor-not-allowed">
            <input {{ $attributes->class([
                    'form-radio',
                    'text-brand-500 border-gray-300',
                    'focus:ring-brand-500',
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
            <span class="ml-2 font-semibold">{{ $label }}</span>
        </label>

        {{ $slot }}
    </div>

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</div>
