@props([
    'class' => ''
])

<i
    @class([
        'fa-solid fa-triangle-exclamation',
        $size,
        $class,
    ])
{{ $attributes }}></i>
