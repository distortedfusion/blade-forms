<div class="space-y-2">
    <x-form-label :label="$label ?? $name" :for="$name" />

    <div class="flex rounded-md shadow-sm dark:shadow-none">
        <textarea
            id="{{ $name }}"
            @if($isWired())
                wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
                name="{{ $name }}"
            @endif
            {{ $attributes->class([
                'form-textarea block w-full flex-grow relative',
                'placeholder:text-muted dark:placeholder:text-gray-200',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'rounded-l-md' => ($prefix ?? false) === false,
                'rounded-r-md' => ($suffix ?? false) === false,
            ]) }}>@unless($isWired()){!! $value !!}@endunless</textarea>
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
