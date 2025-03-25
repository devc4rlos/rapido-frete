@props([
    'href' => '#',
    'target' => '_blank'
])

<a href="{{ $href }}" class="hover:text-brand-500 transition-colors" target="{{ $target }}">
    <x-header.top-bar.text-icon>
        {{ $slot }}
        <x-slot:icon>
            {{ $icon }}
        </x-slot:icon>
    </x-header.top-bar.text-icon>
</a>
