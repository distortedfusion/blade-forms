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

    <x-form-grid :attributes="$getGridAttributeBag()->class([
        'gap-x-4 gap-y-2',

        'items-start' => $alignItems === 'start',
        'items-end' => $alignItems === 'end',
        'items-end-safe' => $alignItems === 'end-safe',
        'items-center' => $alignItems === 'center',
        'items-center-safe' => $alignItems === 'center-safe',
        'items-baseline' => $alignItems === 'baseline',
        'items-baseline-last' => $alignItems === 'baseline-last',
        'items-stretch' => $alignItems === 'stretch',
    ])">
        {{ $slot }}
    </x-form-grid>
</section>
