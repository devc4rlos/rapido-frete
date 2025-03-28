@props([
    'image' => '',
    'class' => '',
    'classImage' => '',
])

<div @class([
    'flex justify-center md:justify-end relative pr-5',
    $class,
])>
    <div
        @class([
            'w-[calc(100%_-_20px)] absolute h-full top-5 left-5 rounded-lg z-0',
            'bg-brand-100/40',
        ])>
    </div>
    <img src="{{ $image }}" alt=""
        @class([
            'object-cover object-center rounded-lg w-full z-10',
            $classImage,
        ])/>
</div>
