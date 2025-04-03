@props([
    'class' => '',
    'isBackground' => false,
    'isSpacing' => true,
])

<section @class([
    'p-4',
    'bg-light' => $isBackground,
]) {{ $attributes }}>
    <div @class([
        'container',
        'my-12' => $isSpacing,
        $class,
    ])>
        {{ $slot }}
    </div>
</section>
