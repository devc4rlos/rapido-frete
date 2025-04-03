<ul @class([
    'flex gap-8',
    'flex-row items-center' => $isVertical === false,
    'flex-col' => $isVertical,
])>
    <x-header.nav-link>
        Home
    </x-header.nav-link>
    <x-header.nav-link>
        Sobre nós
    </x-header.nav-link>
    <x-header.nav-link>
        Serviços
    </x-header.nav-link>
    <x-header.nav-link>
        Frota
    </x-header.nav-link>
    <x-header.nav-link>
        Regiões
    </x-header.nav-link>
    <x-header.nav-link>
        Fale conosco
    </x-header.nav-link>
    <x-link-main
        :class="$isVertical ? 'w-full' : ''"
        href="https://api.whatsapp.com/send?phone=5511994411592"
    >
        Solicitar orçamento
    </x-link-main>
</ul>
