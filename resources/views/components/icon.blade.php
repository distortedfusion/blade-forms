@props(['icon'])
<x-dynamic-component :component="$icon" {{ $attributes->class([
    'text-[rgb(var(--gray-600))] dark:text-gray-[rgb(var(--gray-300))]',
    'w-4' => ! Str::contains($attributes->get('class'), ['w-']),
    'h-4' => ! Str::contains($attributes->get('class'), ['h-']),
]) }} />
