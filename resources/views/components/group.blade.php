<div {{ $attributes->merge(['class' => 'mt-4']) }}>
    <x-form-label :label="$label" />

    <div class="{{ $inline ?? false ? 'flex flex-wrap space-x-6' : null }}{{ $label ?? false && $input ?? false ? ' ' : null }}{{ $label ?? false ? 'mt-2' : null }}">
        {!! $slot !!}
    </div>

    @if($hasErrorAndShow($getName()))
        <x-form-errors :name="$getName()" />
    @endif
</div>
