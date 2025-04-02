@props([
    'class' => '',
    'reverse' => false,
])

<div @class([
    'flex justify-center md:justify-end relative pr-5 md:max-w-lg h-80 md:h-auto animate',
    'from-left' => !$reverse,
    'from-right' => $reverse,
    $class,
])>
    <div
        @class([
            'w-[calc(100%_-_20px)] absolute h-full top-5 left-5 rounded-lg z-0',
            'bg-brand-100/40',
        ])>
    </div>
    {{ $content }}
</div>
