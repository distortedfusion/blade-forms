<div {{ $attributes->class([
    'flex flex-col gap-y-8 divide-y divide-[rgb(var(--gray-200))] dark:divide-[rgb(var(--gray-700))]',
    '[&>*]:pb-8 [&>*:last-child]:pb-0',
]) }}>
    {{ $slot }}
</div>
