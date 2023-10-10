<div class="space-y-2">
    <x-form-label :label="$label ?? $name" :for="$name" />

    <div class="flex rounded-md shadow-sm dark:shadow-none">
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
                'form-select block w-full flex-grow relative text-base sm:text-sm',
                'placeholder:text-gray-400 dark:placeholder:text-gray-600',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'ring-0 focus:border-brand-500 focus:ring-1 focus:ring-brand-500',
                'disabled:bg-gray-100 disabled:border-gray-300',
                'focus:disabled:ring-gray-300 focus:disabled:border-gray-300',
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
