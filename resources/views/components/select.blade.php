<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'space-y-2'
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
                'placeholder:text-[rgb(var(--gray-400))] dark:placeholder:text-[rgb(var(--gray-600))]',
                'text-inherit' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-[rgb(var(--gray-900))]' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-[rgb(var(--gray-300))] dark:border-[rgb(var(--gray-700))]' => ! Str::contains($attributes->get('class'), 'border-'),
                'ring-0 focus:border-[rgb(var(--primary-500))] dark:focus:border-[rgb(var(--primary-500))] focus:ring-2 focus:ring-[rgba(var(--primary-500),.25)]',
                'disabled:bg-[rgb(var(--gray-100))] disabled:border-[rgb(var(--gray-300))]',
                'focus:disabled:ring-[rgb(var(--gray-300))] focus:disabled:border-[rgb(var(--gray-300))]',
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
