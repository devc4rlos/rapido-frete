@props([
    'href' => '#'
])

<a href="{{ $href }}" {{ $attributes }}>
    <img class="w-32" src="{{ asset('assets/logo.svg') }}" alt="Logo rápido frete" />
</a>
