<footer>
    <div class="bg-light p-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-between gap-10">
        <div class="flex flex-col gap-2 lg:hidden xl:flex">
            <x-logo class="mb-4" />
            <x-text>Rua Exemplo, 123 - Cidade, São Paulo</x-text>
            <x-text>dev@carlosalexandre.com.br</x-text>
            <x-text>+55 11 98952-1055</x-text>
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
            <x-footer.item-list text="facebook.com/devc4rlos" />
            <x-footer.item-list text="instagram.com/devc4rlos" />
            <x-footer.item-list text="x.com/devc4rlos" />
        </x-footer.card-list>
    </div>
    <div class="bg-dark p-3 text-light">
        <x-text class="text-center" :textAlign="false">Rápido Frete © {{ Date('Y') }} | Todos os direitos reservados.</x-text>
    </div>
</footer>
