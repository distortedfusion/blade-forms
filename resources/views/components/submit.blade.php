@props(['style'])
<x-btn type="submit" :style="$style ?? 'primary'" {{ $attributes->merge([
    'wire:loading.attr' => $forLivewire() ? 'disabled' : false,
]) }}>
    @if($forLivewire())
        <div class="hidden" wire:loading.block>
            <x-form-pulser />
        </div>
    @endif
    <div @if($forLivewire())wire:loading.class="hidden"@endif>
        {!! trim($slot) ?: __('Submit') !!}
    </div>
</x-btn>
