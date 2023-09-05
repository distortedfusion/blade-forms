@props(['style'])
<x-btn type="submit" :style="$style ?? 'primary'" {{ $attributes->merge([
    'wire:loading.attr' => $isWired() ? 'disabled' : false,
]) }}>
    @if($isWired())
        <div class="hidden" wire:loading.block>
            <x-loading.pulser />
        </div>
    @endif
    <div @if($isWired())wire:loading.class="hidden"@endif>
        {!! trim($slot) ?: __('Submit') !!}
    </div>
</x-btn>
