@if($label)
    <label {{ $attributes->class([
        'form-label block text-sm leading-6 font-semibold',
        'text-inherit' => ! Str::contains($attributes->get('class'), 'text-'),
        'cursor-pointer' => ! Str::contains($attributes->get('class'), 'cursor-'),
    ]) }}>
        {!! $label !!}
    </label>
@endif
