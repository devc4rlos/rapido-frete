@props([
    'class' => '',
    'textAlign' => true,
])

<p @class([
    'font-text text-sm md:text-base leading-8',
    'text-left' => $textAlign,
    $class
])>
    {{ $slot }}
</p>
