<div class="space-y-2">
    <x-form-label :label="$label ?? $getName()" :for="$getId()" />

    <div class="flex rounded-md shadow-sm dark:shadow-none">
        <textarea
            id="{{ $getId() }}"
            @if($isNotWired())
                name="{{ $getName() }}"
            @endif
            {{ $attributes->class([
                'form-textarea block w-full flex-grow relative text-base sm:text-sm',
                'placeholder:text-gray-400 dark:placeholder:text-gray-600',
                'text-black dark:text-white' => ! Str::contains($attributes->get('class'), 'text-'),
                'bg-white dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
                'border-gray-300 dark:border-gray-700' => ! Str::contains($attributes->get('class'), 'border-'),
                'ring-0 focus:border-brand-500 focus:ring-1 focus:ring-brand-500',
                'disabled:bg-gray-100 disabled:border-gray-300 read-only:bg-gray-100 read-only:border-gray-300',
                'focus:disabled:ring-gray-300 focus:disabled:border-gray-300 focus:read-only:ring-gray-300 focus:read-only:border-gray-300',
                'rounded-l-md' => ($prefix ?? false) === false,
                'rounded-r-md' => ($suffix ?? false) === false,
            ]) }}></textarea>
    </div>

    @if($hasErrorAndShow($getName()))
        <x-form-errors :name="$getName()" />
    @endif
</div>
