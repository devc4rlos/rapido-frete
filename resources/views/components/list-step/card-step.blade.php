@props([
    'id' => '',
    'reverse' => false,
    'title' => '',
    'text' => '',
    'icon' => '',
])

<div
    @class([
        'card w-full group/timeline lg:w-2/4 relative ps-10 lg:px-14',
        'lg:ml-auto' => $reverse,
        'lg:mr-auto' => $reverse === false,
    ])
>
    <div @class([
        'animate',
        'from-right' => $reverse,
        'from-left' => !$reverse
    ])>
        <h5 class="font-title text-xl leading-8 lg:text-2xl font-bold text-left mb-2">
            {{ $id }}. {{ $title }}
        </h5>
        <x-text class="lg:pl-8">
            {{ $text }}
        </x-text>
    </div>
    <div
        class="bg-gray-300 transition-all group-[.active]/timeline:bg-brand-100 rounded-full z-10 w-10 h-10 flex justify-center items-center top-0 max-lg:-left-5 {{ $id % 2 === 0 ? 'lg:-left-5' : 'lg:-right-5' }} absolute icon-card">
        {{ $icon }}
    </div>
</div>
