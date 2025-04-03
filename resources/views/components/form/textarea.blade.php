@props([
    'class' => '',
])

<textarea @class([
    'border p-3 rounded-lg w-full border-default-200 focus:outline-brand-400/50',
    $class
]) {{ $attributes }}>{{ $slot }}</textarea>
