<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    <x-btn type="submit" :style="$style" {{ $attributes }}>
        {{ $slot }}
    </x-btn>
</form>
