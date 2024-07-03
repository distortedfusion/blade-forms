<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'space-y-2'
])">
    <x-form-label :label="$label" class="cursor-default" />

    <div class="{{ $inline ?? false ? 'flex flex-wrap space-x-6' : null }}{{ $label ?? false && $input ?? false ? ' ' : null }}{{ $label ?? false ? 'mt-2' : null }}">
        {!! $slot !!}
    </div>

    @if($showErrors && $hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
