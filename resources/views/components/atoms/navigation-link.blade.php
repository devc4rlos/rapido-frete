<li>
    <a
        @class([
            'text-base font-text-secondary font-medium group/link transition duration-200',
            'hover:text-brand-500' => $checkActive() === false,
            'text-brand-500' => $checkActive(),
            $class,
        ])
        href="{{ $href }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
