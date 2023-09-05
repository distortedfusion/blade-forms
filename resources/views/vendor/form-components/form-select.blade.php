<div>
    <x-form-label :label="$label ?? $name" :for="$name" />

    <div class="mt-2 flex rounded-md shadow-sm dark:shadow-none">
        <select
            id="{{ $name }}"
            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif

            @if($multiple)
                multiple
            @endif

            {{ $attributes->class([
                'form-select',
                'placeholder:text-muted dark:placeholder:text-gray-200',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'shadow-sm dark:shadow-none' => ! Str::contains($attributes->get('class'), 'shadow-'),
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

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
