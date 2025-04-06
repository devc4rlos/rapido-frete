<footer>
    <div class="bg-light p-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-between gap-10">
        <div class="flex flex-col gap-2 lg:hidden xl:flex">
            <x-logo class="mb-4" />
            <x-text>{{ $getAddress() }}</x-text>
            <x-text>{{ $getTextEmail() }}</x-text>
            <x-text>{{ $getTextPhone }}</x-text>
        </div>
        <x-footer.card-list title="Serviços">
            <x-footer.item-list text="Mudanças residenciais" :href="route('services.residential-moving')" />
            <x-footer.item-list text="Mudanças comerciais" :href="route('services.commercial-moving')" />
            <x-footer.item-list text="Fretes Rápidos" :href="route('services.fast-freight')" />
            <x-footer.item-list text="Montagem e desmontagem de móveis" :href="route('services.furniture-assembly')" />
            <x-footer.item-list text="Embalagens profissionais" :href="route('services.professional-packaging')" />
            <x-footer.item-list text="Mudanças interestaduais" :href="route('services.interstate-moving')" />
        </x-footer.card-list>
        <x-footer.card-list title="Páginas importantes">
            <x-footer.item-list text="Sobre nós" :href="route('about')" />
            <x-footer.item-list text="FAQ" :href="route('faq')" />
            <x-footer.item-list text="Contato" :href="route('contact')" />
            <x-footer.item-list text="Política de Privacidade" :href="route('privacy-policy')" />
            <x-footer.item-list text="Ver cidades atendidas" :href="route('regions')" />
        </x-footer.card-list>
        <x-footer.card-list title="Redes sociais">
            @foreach($getSocialMedia() as $itemSocialMedia)
                <x-footer.item-list :text="$itemSocialMedia['text']" :href="$itemSocialMedia['links']['url']" target="_blank" />
            @endforeach
        </x-footer.card-list>
    </div>
    <div class="bg-dark p-3 text-light">
        <x-text class="text-center" :textAlign="false">Rápido Frete © {{ $getYear() }} | Todos os direitos reservados.</x-text>
    </div>
</footer>
