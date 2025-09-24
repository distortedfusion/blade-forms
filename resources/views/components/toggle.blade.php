<x-form-grid-column :attributes="$getColumnAttributeBag()">
    <label class="form-toggle inline-flex items-start gap-x-2 w-full {{ $after ? 'flex-row-reverse justify-between' : 'flex-row' }}">
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
            'flex-shrink-0 h-6 w-10 inline-block relative border-none absolute inset-0 bg-[var(--border)] rounded-full cursor-pointer',
            '[transition:color_.15s_ease-out]',
            'peer-focus:outline-none',
            'peer-checked:bg-[var(--primary)]',
            'after:content-[\'\'] after:h-4 after:w-4 after:bg-white after:shadow after:rounded-full after:-mt-2 after:absolute after:top-1/2 after:left-1 after:transition-all',
            'peer-checked:after:translate-x-full',
            'peer-disabled:opacity-50 peer-disabled:cursor-not-allowed',
        ]) }}"></div>

        <div class="cursor-pointer peer-disabled:cursor-not-allowed flex flex-col gap-y-0">
            <span class="text-sm leading-6 font-medium">{{ $label }}</span>

            @if($description ?? false)
                <div class="text-xs text-[var(--muted-foreground)]">
                    {{ $description }}
                </div>
            @endif
        </div>
    </label>

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
