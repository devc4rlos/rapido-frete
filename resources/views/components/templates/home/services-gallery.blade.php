<x-organisms.container-with-title
    title="Nossos serviços em ação"
    active-background
{{ $attributes }}>
    <x-molecules.gallery
        :images="array_map(fn($i) => asset('assets/gallery/'. $i .'.png'), range(1, 9))"
    />
    <div class="mt-10 flex flex-col gap-5 items-center animate">
        <x-atoms.text class="text-center">Precisa de um serviço de mudança? Entre em contato e solicite um orçamento agora mesmo!</x-atoms.text>
        <x-link-main :href="$getLinkRequestQuote" target="_blank">Solicitar orçamento</x-link-main>
    </div>
</x-organisms.container-with-title>
