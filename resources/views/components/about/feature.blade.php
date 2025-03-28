@props([
    'title' => '',
    'text' => '',
])

<div>
    <div class="flex gap-2 mb-1 items-center">
        {{ $icon }}
        <x-text>{{ $title }}</x-text>
    </div>
    <p class="font-text text-sm md:text-base text-default-500 leading-5">{{ $text }}</p>
</div>
