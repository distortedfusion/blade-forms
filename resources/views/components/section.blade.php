<section {{ $attributes->class([
    'pt-8 space-y-4',
]) }}>
    @if($title)
        <div class="flex items-center justify-between">
            <div class="flex-grow">
                <x-form.section-title>{{ $title }}</x-form.section-title>
                @if($description)
                    <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $description }}</p>
                @endif
            </div>

            @if ($action ?? false)
                <div {{ $action->attributes->class(['flex-shrink-0 ml-2 space-x-2']) }}>{{ $action }}</div>
            @endif
        </div>
    @endif

    <div class="grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
        {{ $slot }}
    </div>
</section>