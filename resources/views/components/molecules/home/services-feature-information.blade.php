<div
    @class([
        'max-w-lg flex flex-col gap-5 justify-center',
        $class,
    ])
{{ $attributes }}>
    <x-atoms.subtitle>{{ $title }}</x-atoms.subtitle>
    <x-atoms.text>{{ $description }}</x-atoms.text>
    <x-atoms.link-main :href="$href" class="w-full md:w-fit">Ver detalhes</x-atoms.link-main>
</div>
