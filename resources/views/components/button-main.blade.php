@props(['type' => 'button', 'class' => ''])

<button
    type="{{ $type }}"
    @class([
        'bg-brand-400 cursor-pointer hover:bg-brand-500 w-fit transition duration-300 py-3 px-6 text-center text-light rounded-md font-text text-base text-nowrap',
        $class,
    ])
    {{ $attributes }}
>
    {{ $slot }}
</button>
