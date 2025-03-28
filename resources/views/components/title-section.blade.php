@props([
    'class' => ''
])

<h2 @class([
    'font-title text-2xl font-bold text-center',
    $class,
])>{{ $slot }}</h2>
