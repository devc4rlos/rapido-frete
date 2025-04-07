<div @class([
    'absolute shadow-highlight translate-x-full top-0 right-0 z-50 w-sm max-w-[90%] bg-white h-screen p-5',
    $class,
]) {{ $attributes }}>
    <x-atoms.button-close-overlay />
    <x-header.menu is-vertical />
</div>
