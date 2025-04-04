@props(['href' => '#', 'class' => '', 'target' => '_blank'])

<a
    @class([
        'bg-brand-400 hover:bg-brand-500 w-fit transition duration-300 py-3 px-6 text-center text-light rounded-md font-text text-base text-nowrap',
        $class,
    ])
    target="{{ $target }}" href="{{ $href }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>
