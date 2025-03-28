@props([
    'class' => ''
])

<h5 @class([
    'font-title font-medium text-xl inline-block',
    $class,
])>
    {{ $slot }}
    <div class="bg-success-500 rounded w-1/5 h-1"></div>
</h5>
