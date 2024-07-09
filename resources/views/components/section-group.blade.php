<div {{ $attributes->class([
    '-mt-8 space-y-8 divide-y divide-[rgb(var(--gray-200))] dark:divide-[rgb(var(--gray-700))]',
    '[&>*]:pt-8',
]) }}>
    {{ $slot }}
</div>
