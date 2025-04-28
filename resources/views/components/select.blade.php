<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'flex flex-col gap-y-2'
])">
    <x-form-label :label="$label ?? $getName()" :for="$getId()" :mark-required="$markRequired" />

    <div class="flex items-center rounded-md">
        <select id="{{ $getId() }}"

            @if($forNative())
            name="{{ $getName() }}"
            @endif

            @if($multiple)
            multiple
            @endif

            {{ $attributes->class([
                'form-select block w-full flex-grow relative',
                'text-base sm:text-sm leading-6 sm:leading-6 py-2 h-[2.625rem]',
                'placeholder:text-[var(--muted-foreground)]',
                'text-inherit' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-transparent border-[var(--border)]',
                'ring-0 focus:border-[var(--primary)] focus:ring-2 focus:ring-[color-mix(in_oklab,var(--primary)_25%,transparent)]',
                'disabled:opacity-50',
                'rounded-l-md' => ($prefix ?? false) === false,
                'rounded-r-md' => ($suffix ?? false) === false,
            ]) }}>
            @forelse($options as $key => $option)
                <option value="{{ $key }}" @if($isSelected($key)) selected="selected" @endif>
                    {{ $option }}
                </option>
            @empty
                {!! $slot !!}
            @endforelse
        </select>
    </div>

    @if($description ?? false)
        {{ $description }}
    @endif

    @if($hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
