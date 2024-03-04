@error($name, $bag)
    <p {!! $attributes->class([
        'text-red-500 text-xs italic'
    ]) !!}>{{ $message }}</p>
@enderror
