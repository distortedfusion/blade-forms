<div {{ $attributes->class([
        'flex flex-col flex-col-reverse sm:flex-row items-center sm:space-x-4',
    ]) }}>
    <div class="flex-1 w-full mt-2 sm:mt-0">
        @if($cancelButton ?? false)
            {{ $cancelButton }}
        @else
            <x-btn style="default" class="w-full" :href="$cancelUrl()">
                {{ $cancelTitle ?: __('Cancel') }}
            </x-btn>
        @endif
    </div>
    <div class="flex-1 w-full">
        @if($submitButton ?? false)
            {{ $submitButton }}
        @else
            <x-form-submit class="w-full" :style="$style">
                {{ $submitTitle }}
            </x-form-submit>
        @endif
    </div>
</div>
