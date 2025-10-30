@if($description ?? false)
    @if(is_string($description))
        <x-form-help>{{ $description }}</x-form-help>
    @else
        {{ $description }}
    @endif
@endif
