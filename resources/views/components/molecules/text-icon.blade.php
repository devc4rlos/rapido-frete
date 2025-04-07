<div @class([
    'flex items-center gap-2',
    $class,
]) {{ $attributes }}>
    {{ $icon }}
    <x-atoms.text-small>{{ $slot }}</x-atoms.text-small>
</div>
