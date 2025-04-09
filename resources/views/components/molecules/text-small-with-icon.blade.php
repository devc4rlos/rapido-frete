<div @class([
    'flex items-center gap-2',
    $class,
]) {{ $attributes }}>
    {{ $icon }}
    @if (!empty(trim($slot)))
        <x-atoms.text-small>{{ $slot }}</x-atoms.text-small>
    @endif
</div>
