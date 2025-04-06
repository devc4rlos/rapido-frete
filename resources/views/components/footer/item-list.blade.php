@props([
    'text' => '',
    'href' => '',
])

<li>
    <a href="{{ $href }}" {{ $attributes }} class="font-text text-sm md:text-base leading-6 text-dark hover:text-brand-400">{{ $text }}</a>
</li>
