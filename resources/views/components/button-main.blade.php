@props(['href' => '#', 'class' => ''])

<a
    @class([
        'bg-brand-400 hover:bg-brand-500 transition duration-300 py-3 px-6 text-center text-light rounded-md font-text text-base text-nowrap',
        $class,
    ])
    target="_blank" href="{{ $href }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>
