<x-molecules.box
    :class="$class"
    :reverse="$reverse"
{{ $attributes }}>
    <x-slot:content>
        <img src="{{ $image }}" alt=""
            @class([
                'object-cover object-center rounded-lg w-full z-10',
                $classImage,
            ])/>
    </x-slot:content>
</x-molecules.box>
