@error($name, $bag)
    <p {!! $attributes->class([
        'text-[rgb(var(--danger-500))] text-xs italic'
    ]) !!}>{{ $message }}</p>
@enderror
