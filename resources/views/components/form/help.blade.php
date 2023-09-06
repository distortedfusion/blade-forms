<p {{ $attributes->class([
    'text-muted text-sm',
    'mt-2' => ! Str::contains($attributes->get('class'), ['m-', 'my-', 'mt-'])
]) }}>{{ $slot }}</p>
