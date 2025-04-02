@props([
    'class' => '',
    'image',
    'classImage' => '',
    'reverse' => false,
])

<x-box.template :class="$class" :reverse="$reverse">
    <x-slot:content>
        <img src="{{ $image }}" alt=""
            @class([
                'object-cover object-center rounded-lg w-full z-10',
                $classImage,
            ])/>
    </x-slot:content>
</x-box.template>
