<x-form-grid-column :attributes="$getColumnAttributeBag()->class([
    'flex flex-col gap-y-2'
])">
    <x-form-label :label="$label" class="cursor-default" :mark-required="$markRequired" />

    <div class="flex {{ $inline ?? false ? 'flex-wrap gap-x-6' : 'flex flex-col gap-y-2' }}{{ $label ?? false && $input ?? false ? ' ' : null }}{{ $label ?? false ? 'mt-2' : null }}">
        {!! $slot !!}
    </div>

    @if($showErrors && $hasErrorAndShow($getErrorName()))
        <x-form-errors :name="$getErrorName()" />
    @endif
</x-form-grid-column>
