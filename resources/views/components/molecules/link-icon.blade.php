<a
    @class([
        'hover:text-brand-500 transition-colors flex items-center justify-center',
        $class,
    ])
    href="{{ $href }}"
    target="{{ $target }}"
    {{ $attributes }}>
    <x-molecules.text-icon>
        {{ $slot }}
        <x-slot:icon>
            {{ $icon }}
        </x-slot:icon>
    </x-molecules.text-icon>
</a>
