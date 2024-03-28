<div>
    <label class="form-toggle inline-flex items-start">
        <input class="sr-only peer"
            id="{{ $getId() }}"
            type="checkbox"
            value="{{ $value }}"

            @if($isNotWired())
                name="{{ $getName() }}"
            @endif

            @if($checked)
                checked="checked"
            @endif

            @if($disabled)
                disabled
            @endif

            {{ $attributes->except(['checked', 'disabled', 'name', 'value', 'id']) }}
        />
        <div class="{{ implode(' ', [
            'flex-shrink-0 h-6 w-10 inline-block relative border-none bg-gray-300 shadow-inner absolute inset-0 ring-0 ring-brand-500 ring-opacity-0 rounded-full cursor-pointer',
            '[transition:color_.15s_ease-out,_box-shadow_.2s_ease-in-out]',
            'peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-offset-2 peer-focus:ring-brand-500',
            'peer-checked:bg-brand-600',
            'after:content-[\'\'] after:h-4 after:w-4 after:bg-white after:shadow after:rounded-full after:-mt-2 after:absolute after:top-1/2 after:left-1 after:transition-all',
            'peer-checked:after:translate-x-full',
            'peer-disabled:peer-checked:bg-brand-300 peer-disabled:cursor-not-allowed',
            'peer-disabled:after:bg-gray-100',
        ]) }}"></div>

        <div class="ml-4 cursor-pointer peer-disabled:cursor-not-allowed">
            <span class="text-sm leading-6 font-semibold">{{ $label }}</span>

            @if ($description ?? false)
                <x-form-help class="mt-0">{{ $description }}</x-form-help>
            @endif
        </div>
    </label>

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</div>
