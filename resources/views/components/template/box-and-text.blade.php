@props([
    'class' => '',
    'title',
    'subtitle',
    'content',
    'footer',
    'reverse' => false,
    'isBackground' => false,
])

<x-container-with-title :title="$title" :class="$class" :isBackground="$isBackground">
    <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-10 pb-5">
        <div @class([
                'md:order-2' => $reverse
            ])>
            {{ $box }}
        </div>
        <div @class([
                'flex flex-col gap-5 md:max-w-lg w-full animate',
                'md:order-1 from-left ml-auto' => $reverse,
                'from-right' => !$reverse
            ])>
            <x-subtitle-section>
                {{ $subtitle }}
            </x-subtitle-section>

            {{ $content }}

            <div class="flex flex-col gap-5">
                {{ $footer }}
            </div>
        </div>
    </div>
</x-container-with-title>
