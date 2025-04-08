<x-organisms.container-with-title
    title="Como funciona o nosso processo de mudança"
    active-background
    id="listStep"
    :class="$class"
{{ $attributes }}>
    <x-organisms.timeline />
</x-organisms.container-with-title>

@push('scripts')
    @vite('resources/js/components/list-step/index.js')
@endpush
