<x-organisms.box-and-text
    title="Quem é a rápido frete"
    subtitle="Levamos sua mudança a sério!"
    active-background
    :class="$class"
{{ $attributes }}>
    <x-slot:box>
        <x-molecules.box-image :image="asset('assets/about.png')" classImage="object-top" class="md:ml-auto" />
    </x-slot:box>
    <x-slot:content>
        <x-atoms.text>
            Mudar de casa ou transportar algo importante pode ser estressante, mas com a Rápido Frete, você tem a certeza de um serviço seguro, rápido e sem complicações. Nossa missão é garantir que cada mudança seja realizada com o máximo de cuidado, pontualidade e eficiência, sempre colocando o cliente em primeiro lugar.
        </x-atoms.text>

        <x-molecules.home.about-feature-list />
    </x-slot:content>
    <x-slot:footer>
        <x-atoms.link :href="route('about')">
            Conheça mais sobre a rápido frete
        </x-atoms.link>
        <x-atoms.link-main :href="$getLinkRequestQuote" target="_blank">Solicitar um orçamento</x-atoms.link-main>
    </x-slot:footer>
</x-organisms.box-and-text>
