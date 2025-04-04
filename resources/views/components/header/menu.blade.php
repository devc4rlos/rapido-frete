<ul @class([
    'flex gap-8',
    'flex-row items-center' => $isVertical === false,
    'flex-col' => $isVertical,
])>
    <x-header.nav-link href="{{ route('home') }}">
        Home
    </x-header.nav-link>
    <x-header.nav-link href="{{ route('about') }}">
        Sobre nós
    </x-header.nav-link>
    <x-header.nav-link href="{{ route('services.index') }}">
        Serviços
    </x-header.nav-link>
    <x-header.nav-link href="{{ route('fleet') }}">
        Frota
    </x-header.nav-link>
    <x-header.nav-link href="{{ route('regions') }}">
        Regiões
    </x-header.nav-link>
    <x-header.nav-link href="{{ route('contact') }}">
        Fale conosco
    </x-header.nav-link>
    <x-link-main
        :class="
            $isVertical ? 'w-full' : ''
        "
        href="https://api.whatsapp.com/send?phone=5511994411592"
    >
        Solicitar orçamento
    </x-link-main>
</ul>
