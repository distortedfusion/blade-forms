<div {{ $attributes->class([
    'flex flex-col gap-y-4 divide-y divide-[rgb(var(--gray-200))] dark:divide-[rgb(var(--gray-700))]',
    '[&>*]:pt-4 [&>*:first-child]:pt-0',
]) }}>
    {{ $slot }}
</div>
