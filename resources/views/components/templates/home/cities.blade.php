@php($reverse = true)

<x-organisms.box-and-text
    title="Atendemos as principais regiões e bairros de SP"
    subtitle="Segurança e eficiência para sua mudança"
    :reverse="$reverse"
    :class="$class"
    {{ $attributes }}>
    <x-slot:box>
        <x-molecules.box-image
            :reverse="$reverse"
            :image="asset('assets/trucks.png')"
            classImage="object-top h-full"
            class="md:mr-auto"
        />
    </x-slot:box>
    <x-slot:content>
        <x-atoms.text>
            Nossa empresa de mudanças e fretes oferece serviços em várias regiões, garantindo agilidade, segurança e qualidade no transporte dos seus bens. Seja para mudanças residenciais, comerciais ou transporte de cargas, estamos prontos para atender você onde precisar.
        </x-atoms.text>
        <x-atoms.text>
            Atuamos em diversas cidades, sempre com uma equipe especializada e uma frota preparada para qualquer tipo de demanda. Confira a lista completa de localidades que atendemos clicando no botão abaixo.
        </x-atoms.text>
        <x-atoms.text>
            Encontre sua cidade na nossa lista completa!
        </x-atoms.text>
    </x-slot:content>
    <x-slot:footer>
        <x-atoms.link-main :href="route('regions')">Ver cidades atendidas</x-atoms.link-main>
        <x-atoms.text-small>Caso sua cidade não esteja na lista, entre em contato! Podemos avaliar a melhor solução para o seu transporte.</x-atoms.text-small>
    </x-slot:footer>
</x-organisms.box-and-text>
