<nav
    @class([
        'bg-light p-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-between gap-10',
        $class
    ])
{{ $attributes }}>
    <div class="flex flex-col gap-2 lg:hidden xl:flex">
        <x-atoms.logo class="mb-4" />
        <x-atoms.text>{{ $getAddress }}</x-atoms.text>
        <x-atoms.text>{{ $getTextEmail }}</x-atoms.text>
        <x-atoms.text>{{ $getTextPhone }}</x-atoms.text>
    </div>
    <x-molecules.footer-card-list title="Serviços">
        <x-atoms.footer-link text="Mudanças residenciais" :href="route('services.residential-moving')" />
        <x-atoms.footer-link text="Mudanças comerciais" :href="route('services.commercial-moving')" />
        <x-atoms.footer-link text="Fretes Rápidos" :href="route('services.fast-freight')" />
        <x-atoms.footer-link text="Montagem e desmontagem de móveis" :href="route('services.furniture-assembly')" />
        <x-atoms.footer-link text="Embalagens profissionais" :href="route('services.professional-packaging')" />
        <x-atoms.footer-link text="Mudanças interestaduais" :href="route('services.interstate-moving')" />
    </x-molecules.footer-card-list>
    <x-molecules.footer-card-list title="Páginas importantes">
        <x-atoms.footer-link text="Sobre nós" :href="route('about')" />
        <x-atoms.footer-link text="FAQ" :href="route('faq')" />
        <x-atoms.footer-link text="Contato" :href="route('contact')" />
        <x-atoms.footer-link text="Política de Privacidade" :href="route('privacy-policy')" />
        <x-atoms.footer-link text="Ver cidades atendidas" :href="route('regions')" />
    </x-molecules.footer-card-list>
    <x-molecules.footer-card-list title="Redes sociais">
        @foreach($getSocialMedia as $itemSocialMedia)
            <x-atoms.footer-link :text="$itemSocialMedia['text']" :href="$itemSocialMedia['links']['url']" target="_blank" />
        @endforeach
    </x-molecules.footer-card-list>
</nav>
