<ul @class([
    'flex gap-8',
    'flex-row items-center' => $vertical === false,
    'flex-col' => $vertical,
    $class,
]) {{ $attributes }}>
    <x-atoms.navigation-link href="{{ route('home') }}">
        Home
    </x-atoms.navigation-link>
    <x-atoms.navigation-link href="{{ route('about') }}">
        Sobre nós
    </x-atoms.navigation-link>
    <x-atoms.navigation-link href="{{ route('services.index') }}">
        Serviços
    </x-atoms.navigation-link>
    <x-atoms.navigation-link href="{{ route('fleet') }}">
        Frota
    </x-atoms.navigation-link>
    <x-atoms.navigation-link href="{{ route('regions') }}">
        Regiões
    </x-atoms.navigation-link>
    <x-atoms.navigation-link href="{{ route('contact') }}">
        Fale conosco
    </x-atoms.navigation-link>
    <x-atoms.link-main
        :class="$vertical ? 'w-full' : ''"
        :active-width="!$vertical"
        :href="$getLinkRequestQuote"
        target="_blank"
    >
        Solicitar orçamento
    </x-atoms.link-main>
</ul>
