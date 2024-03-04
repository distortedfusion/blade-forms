@props(['icon'])
<x-dynamic-component :component="$icon" {{ $attributes->class([
    'text-gray-600 dark:text-gray-300',
    'w-4' => ! Str::contains($attributes->get('class'), ['w-']),
    'h-4' => ! Str::contains($attributes->get('class'), ['h-']),
]) }} />
