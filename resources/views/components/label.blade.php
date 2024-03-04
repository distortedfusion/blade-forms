@if($label)
    <label {{ $attributes->class([
        'form-label block text-sm leading-6 font-semibold cursor-pointer',
        'text-black dark:text-gray-200' => ! Str::contains($attributes->get('class'), 'text-'),
    ]) }}>
        {!! $label !!}
    </label>
@endif
