<footer>
    <div class="bg-light p-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-between gap-10">
        <div class="flex flex-col gap-2 lg:hidden xl:flex">
            <x-logo class="mb-4" />
            <x-text>{{ $getAddress() }}</x-text>
            <x-text>{{ $getTextEmail() }}</x-text>
            <x-text>{{ $getTextPhone }}</x-text>
        </div>
        <x-footer.card-list title="Serviços">
            <x-footer.item-list text="Mudanças residenciais" />
            <x-footer.item-list text="Mudanças comerciais" />
            <x-footer.item-list text="Fretes Rápidos" />
            <x-footer.item-list text="Montagem e desmontagem de móveis" />
            <x-footer.item-list text="Embalagens profissionais" />
            <x-footer.item-list text="Mudanças interestaduais" />
        </x-footer.card-list>
        <x-footer.card-list title="Páginas importantes">
            <x-footer.item-list text="Sobre nós" />
            <x-footer.item-list text="FAQ" />
            <x-footer.item-list text="Contato" />
            <x-footer.item-list text="Política de Privacidade" />
            <x-footer.item-list text="Ver cidades atendidas" />
        </x-footer.card-list>
        <x-footer.card-list title="Redes sociais">
            @foreach($getSocialMedia() as $itemSocialMedia)
                <x-footer.item-list :text="$itemSocialMedia['text'] ?? false" />
            @endforeach
        </x-footer.card-list>
    </div>
    <div class="bg-dark p-3 text-light">
        <x-text class="text-center" :textAlign="false">Rápido Frete © {{ $getYear() }} | Todos os direitos reservados.</x-text>
    </div>
</footer>
