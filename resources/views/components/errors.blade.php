@error($name, $bag)
    <p {!! $attributes->class([
        'text-[rgb(var(--danger))] text-xs italic'
    ]) !!}>{{ $message }}</p>
@enderror
