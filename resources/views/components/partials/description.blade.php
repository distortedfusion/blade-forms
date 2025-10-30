@if($description ?? false)
    @if(is_string($description))
        <x-paragraph size="sm" style="muted">
            {{ $description }}
        </x-paragraph>
    @else
        {{ $description }}
    @endif
@endif
