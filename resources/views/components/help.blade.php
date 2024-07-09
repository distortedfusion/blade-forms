<p {{ $attributes->class([
    'text-[rgb(var(--gray-500))] text-sm',
    'mt-2' => ! Str::contains($attributes->get('class'), ['m-', 'my-', 'mt-'])
]) }}>{{ $slot }}</p>
