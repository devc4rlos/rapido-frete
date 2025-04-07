<a
    @class([
        'bg-brand-400 hover:bg-brand-500 transition duration-300 py-3 px-6 text-center text-light rounded-md font-text text-base text-nowrap',
        'w-fit' => $activeWidth,
        $class,
    ])
    href="{{ $href }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>
