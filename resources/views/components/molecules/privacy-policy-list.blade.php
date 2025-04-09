<ul
    @class([
        'list-disc flex flex-col gap-3 ms-10',
        $class,
    ])
{{ $attributes }}>
    {{ $slot }}
</ul>
