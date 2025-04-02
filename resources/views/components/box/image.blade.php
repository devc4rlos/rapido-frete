@props([
    'class' => '',
    'image',
    'classImage' => '',
])

<x-box.template :class="$class">
    <x-slot:content>
        <img src="{{ $image }}" alt=""
            @class([
                'object-cover object-center rounded-lg w-full z-10',
                $classImage,
            ])/>
    </x-slot:content>
</x-box.template>
