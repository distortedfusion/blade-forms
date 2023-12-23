<x-heading :heading-level="$headingLevel" {{ $attributes->class([
    'font-sans-heading font-bold text-base',
]) }}>{{ $slot }}</x-heading>
