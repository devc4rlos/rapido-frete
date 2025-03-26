@props([
    'href' => '#'
])

<li>
    <a href="{{ $href }}" class="text-base font-text-secondary font-medium group/link hover:text-brand-500 transition duration-200">
        {{ $slot }}
    </a>
</li>
