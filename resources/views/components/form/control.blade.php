@props([
    'label' => '',
    'input' => '',
    'class' => '',
])

<div @class([
    'flex flex-col gap-2 w-full',
    $class,
])>
    {{ $label }}
    {{ $input }}
</div>
