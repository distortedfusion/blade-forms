<x-form.section>
    <div class="col-span-3">
        @if ($cancelButton ?? false)
            {{ $cancelButton }}
        @elseif($isWired() && method_exists($this, 'redirectWithPrevious') && $redirectPrevious)
            {{-- In a livewire context with the `\DistortedFusion\LivewireSupport\RedirectsWithPrevious` trait use the `redirectWithPrevious` method instead, this resolves an issue where form updates change the previous URL. --}}
            <x-btn style="default" class="w-full"
                wire:click="redirectWithPrevious('{{ $cancel }}')">
                {{ $cancelTitle ?: __('Cancel') }}
            </x-btn>
        @else
            {{-- In standard HTML forms use the session based previous URL. --}}
            <x-btn style="default" class="w-full" :href="$cancelUrl()">
                {{ $cancelTitle ?: __('Cancel') }}
            </x-btn>
        @endif
    </div>
    <div class="col-span-3">
        @if ($submitButton ?? false)
            {{ $submitButton }}
        @else
            <x-form-submit class="w-full" :style="$style">
                {{ $submitTitle }}
            </x-form-submit>
        @endif
    </div>
</x-form.section>
