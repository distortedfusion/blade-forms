@if($label)
    <label {{ $attributes->class([
        'form-label block text-sm leading-6 font-semibold',
        'text-inherit' => ! Str::contains($attributes->get('class'), 'text-'),
        'cursor-pointer' => ! Str::contains($attributes->get('class'), 'cursor-'),
    ]) }}>
        <span>{!! $label !!}</span>

        @if($markRequired)
            <span class="text-[rgb(var(--gray-500))] text-sm">&#42;</span>
        @endif
    </label>
@endif
