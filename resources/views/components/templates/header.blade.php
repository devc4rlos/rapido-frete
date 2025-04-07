<header @class([
    'p-4',
    $class,
]) {{ $attributes }}>
    <x-organisms.navigation-header />
</header>

@push('scripts')
    @vite('resources/js/components/header/index.js')
@endpush
