<x-form-grid-column :attributes="$getColumnAttributeBag()">
    <label class="form-toggle inline-flex items-start space-x-2 {{ $after ? 'flex-row-reverse' : 'flex-row' }}">
        <input class="sr-only peer"
            id="{{ $getId() }}"
            type="checkbox"
            value="{{ $value }}"

            @if($forNative())
            name="{{ $getName() }}"
            @endif

            @if($isChecked())
            checked="checked"
            @endif

            {{ $attributes }} />
        <div class="{{ implode(' ', [
            'flex-shrink-0 h-6 w-10 inline-block relative border-none bg-[rgb(var(--gray-300))] shadow-inner absolute inset-0 ring-0 ring-[rgb(var(--primary-500))] ring-opacity-0 rounded-full cursor-pointer',
            '[transition:color_.15s_ease-out,_box-shadow_.2s_ease-in-out]',
            'peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-offset-2 peer-focus:ring-[rgb(var(--primary-500))]',
            'peer-checked:bg-[rgb(var(--primary-500))]',
            'after:content-[\'\'] after:h-4 after:w-4 after:bg-white after:shadow after:rounded-full after:-mt-2 after:absolute after:top-1/2 after:left-1 after:transition-all',
            'peer-checked:after:translate-x-full',
            'peer-disabled:peer-checked:bg-[rgb(var(--primary-300))] peer-disabled:cursor-not-allowed',
            'peer-disabled:after:bg-[rgb(var(--gray-100))]',
        ]) }}"></div>

        <div class="cursor-pointer peer-disabled:cursor-not-allowed space-y-0">
            <span class="text-sm leading-6 font-semibold">{{ $label }}</span>

            @if($description ?? false)
                {{ $description }}
            @endif
        </div>
    </label>

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
