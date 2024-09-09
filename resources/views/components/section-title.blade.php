<x-heading :heading-level="$headingLevel" size="flex" {{ $attributes->class([
    'font-sans-heading font-bold text-base',
]) }}>{{ $slot }}</x-heading>
