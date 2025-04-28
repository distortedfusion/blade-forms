<div {{ $attributes->class([
    'flex flex-col gap-y-4 divide-y divide-[var(--border)]',
    '[&>*]:pt-4 [&>*:first-child]:pt-0',
]) }}>
    {{ $slot }}
</div>
