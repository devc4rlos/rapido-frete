<nav
    @class([
        'flex container justify-between items-center',
        $class,
    ])
    {{ $attributes }}
>
    <x-atoms.logo href="{{ route('home') }}" />
    <x-molecules.menu class="max-lg:hidden" />
    <x-atoms.button-hamburger id="hamburger" />
    <x-organisms.overlay-mobile-menu id="overlay" />
</nav>
