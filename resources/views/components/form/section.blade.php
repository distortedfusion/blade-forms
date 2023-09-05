<section {{ $attributes->class([
    'form-section pt-8 space-y-4',
]) }}>
    @if ($title)
        <div class="flex items-center justify-between">
            <div class="flex-grow">
                <h3 class="text-lg leading-6 font-medium">{{ $title }}</h3>
                @if ($description)
                    <p class="mt-1 text-muted text-sm">{{ $description }}</p>
                @endif
            </div>

            @if ($action ?? false)
                <div {{ $action->attributes->class(['flex-shrink-0 ml-2 space-x-2']) }}>{{ $action }}</div>
            @endif
        </div>
    @endif

    <div class="grid grid-cols-1 gap-y-2 gap-x-4 sm:grid-cols-6">
        {{ $slot }}
    </div>
</section>
