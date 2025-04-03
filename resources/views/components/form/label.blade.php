@props([
    'class' => '',
    'textAlign' => true,
])

<label @class([
    'font-text text-sm md:text-base leading-6 font-medium',
    'text-left' => $textAlign,
    $class
]) {{ $attributes }}>
    {{ $slot }}
</label>
