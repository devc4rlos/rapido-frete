@props([
    'class' => '',
])

<div @class([
    'flex gap-4 flex-col md:flex-row',
    $class,
])>
    {{ $slot }}
</div>
