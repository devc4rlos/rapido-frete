@props([
    'class' => '',
    'textAlign' => true,
])

<p @class([
    'font-text text-sm md:text-base leading-6',
    'text-left' => $textAlign,
    $class
]) {{ $attributes }}>
    {{ $slot }}
</p>
