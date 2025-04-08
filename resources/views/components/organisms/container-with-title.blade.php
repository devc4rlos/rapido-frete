<x-organisms.container
    :class="$class"
    :active-background="$activeBackground"
{{ $attributes }}>
    <x-atoms.title-section class="mb-10 animate">
        {{ $title }}
    </x-atoms.title-section>
    {{ $slot }}
</x-organisms.container>
