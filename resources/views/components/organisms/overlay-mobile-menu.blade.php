<div @class([
    'hidden fixed top-0 left-0 w-screen h-screen z-50',
    $class,
]) {{ $attributes }}>
    <x-organisms.mobile-menu id="menuMobile" />
    <div class="fixed w-screen h-screen z-40 backdrop-blur-[1px] bg-info-200/20 opacity-0 close-overlay" id="backgroundOverlay"></div>
</div>
