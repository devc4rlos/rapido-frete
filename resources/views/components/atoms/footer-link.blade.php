<li>
    <a
        @class([
            'font-text text-sm md:text-base leading-6 text-dark hover:text-brand-400',
            $class,
        ])
        href="{{ $href }}"
    {{ $attributes }}>
        {{ $text }}
    </a>
</li>
