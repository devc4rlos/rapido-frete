<a
    @class([
        'font-text text-brand-400 hover:text-brand-500',
        $class,
    ])
    href="{{ $href }}"
{{ $attributes }}>
    {{ $slot }}
</a>
