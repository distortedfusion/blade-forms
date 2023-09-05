@if($label)
    <label {{ $attributes->class([
        'form-label w-full truncate text-sm font-semibold cursor-pointer',
        'text-gray-600 dark:text-gray-200' => ! Str::contains($attributes->get('class'), 'text-'),
    ]) }}>
        {!! $label !!}
    </label>
@endif
