@props([
    'class' => '',
    'title',
    'isBackground' => false,
])

<x-container :class="$class" :isBackground="$isBackground" {{ $attributes }}>
    <x-title-section class="mb-10 animate">
        {{ $title }}
    </x-title-section>
    {{ $slot }}
</x-container>
