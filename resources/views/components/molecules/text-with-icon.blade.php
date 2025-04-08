<div @class([
    'flex items-center gap-2',
    $class,
]) {{ $attributes }}>
    {{ $icon }}
    <x-atoms.text>{{ $slot }}</x-atoms.text>
</div>
