<section {{ $attributes->class(['flex flex-col gap-y-4']) }}>
    @if($title)
        <div class="flex items-center justify-between gap-x-2">
            <div class="flex-grow">
                <x-form-section-title>{{ $title }}</x-form-section-title>
                @if($description)
                    <p class="text-[var(--muted-foreground)] text-sm">{{ $description }}</p>
                @endif
            </div>

            @if($action ?? false)
                <div {{ $action->attributes->class(['flex-shrink-0 flex items-center gap-x-2']) }}>{{ $action }}</div>
            @endif
        </div>
    @endif

    <x-form-grid :attributes="$getGridAttributeBag()->class(['gap-x-4 gap-y-2'])">
        {{ $slot }}
    </x-form-grid>
</section>
