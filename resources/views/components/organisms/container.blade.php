<section @class([
    'p-4',
    'bg-light' => $activeBackground,
]) {{ $attributes }}>
    <div @class([
        'container',
        'my-12' => $activeSpacing,
        $class,
    ])>
        {{ $slot }}
    </div>
</section>
