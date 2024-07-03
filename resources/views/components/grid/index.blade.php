@props(['attributes'])

@php
$default = $attributes->get('default');
$sm = $attributes->get('sm');
$md = $attributes->get('md');
$lg = $attributes->get('lg');
$xl = $attributes->get('xl');
$twoXl = $attributes->get('twoXl');
@endphp

<div {{ $attributes->except([
    'default', 'sm', 'md', 'lg', 'xl', 'twoXl',
])->class([
    'grid',
    'grid-cols-[--cols-default]' => $default,
    'sm:grid-cols-[--cols-sm]' => $sm,
    'md:grid-cols-[--cols-md]' => $md,
    'lg:grid-cols-[--cols-lg]' => $lg,
    'xl:grid-cols-[--cols-xl]' => $xl,
    '2xl:grid-cols-[--cols-2xl]' => $twoXl,
])->style([
    "--cols-default: repeat({$default}, minmax(0, 1fr))" => $default,
    "--cols-sm: repeat({$sm}, minmax(0, 1fr))" => $sm,
    "--cols-md: repeat({$md}, minmax(0, 1fr))" => $md,
    "--cols-lg: repeat({$lg}, minmax(0, 1fr))" => $lg,
    "--cols-xl: repeat({$xl}, minmax(0, 1fr))" => $xl,
    "--cols-2xl: repeat({$twoXl}, minmax(0, 1fr))" => $twoXl,
]) }}>
    {{ $slot }}
</div>
