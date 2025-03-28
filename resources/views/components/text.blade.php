@props([
    'class' => ''
])

<p @class([
    'font-text text-sm md:text-base leading-6',
    $class
])>
    {{ $slot }}
</p>
