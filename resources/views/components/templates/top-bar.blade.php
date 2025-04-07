<x-organisms.container
    @class([
        'flex justify-center lg:justify-between',
        $class,
    ])
    :active-background="true"
    :active-spacing="false"
    {{ $attributes }}
>
    <x-organisms.top-bar-information />
    <x-organisms.top-bar-social-media />
</x-organisms.container>
