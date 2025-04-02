@php($reverse = true)

<x-template.box-and-text
    title="Atendemos as principais regiões e bairros de SP"
    subtitle="Segurança e eficiência para sua mudança"
    :reverse="$reverse"
>
    <x-slot:box>
        <x-box.image :reverse="$reverse" :image="asset('assets/trucks.png')" classImage="object-top h-full" class="md:mr-auto" />
    </x-slot:box>
    <x-slot:content>
        <x-text>
            Nossa empresa de mudanças e fretes oferece serviços em várias regiões, garantindo agilidade, segurança e qualidade no transporte dos seus bens. Seja para mudanças residenciais, comerciais ou transporte de cargas, estamos prontos para atender você onde precisar.
        </x-text>
        <x-text>
            Atuamos em diversas cidades, sempre com uma equipe especializada e uma frota preparada para qualquer tipo de demanda. Confira a lista completa de localidades que atendemos clicando no botão abaixo.
        </x-text>
        <x-text>
            Encontre sua cidade na nossa lista completa!
        </x-text>
    </x-slot:content>
    <x-slot:footer>
        <x-button-main>Ver cidades atendidas</x-button-main>

        <p class="text-sm">Caso sua cidade não esteja na lista, entre em contato! Podemos avaliar a melhor solução para o seu transporte.</p>
    </x-slot:footer>
</x-template.box-and-text>
