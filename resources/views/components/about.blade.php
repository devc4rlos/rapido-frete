<x-template.box-and-text
    title="Quem é a rápido frete"
    subtitle="Levamos sua mudança a sério!"
    class="bg-light"
>
    <x-slot:box>
        <x-box.image :image="asset('assets/about.png')" classImage="object-top" class="md:ml-auto" />
    </x-slot:box>
    <x-slot:content>
        <x-text>
            Mudar de casa ou transportar algo importante pode ser estressante, mas com a Rápido Frete, você tem a certeza de um serviço seguro, rápido e sem complicações. Nossa missão é garantir que cada mudança seja realizada com o máximo de cuidado, pontualidade e eficiência, sempre colocando o cliente em primeiro lugar.
        </x-text>

        <div class="flex flex-col gap-5">
            <x-about.feature title="Profissionais especializados" text="Equipe treinada para garantir um transporte seguro e eficiente.">
                <x-slot:icon>
                    <x-icons.truck-fast class="text-success-500" />
                </x-slot:icon>
            </x-about.feature>
            <x-about.feature title="Soluções personalizadas" text="Atendimento sob medida para mudanças residenciais, comerciais e fretes rápidos.">
                <x-slot:icon>
                    <x-icons.bolt class="text-success-500" />
                </x-slot:icon>
            </x-about.feature>
            <x-about.feature title="Compromisso com o prazo" text="Garantimos pontualidade e comunicação transparente durante todo o processo.">
                <x-slot:icon>
                    <x-icons.calendar-days class="text-success-500" />
                </x-slot:icon>
            </x-about.feature>
        </div>
    </x-slot:content>
    <x-slot:footer>
        <a href="#" class="font-text text-sm md:text-base text-brand-400 hover:text-brand-500">Conheça mais sobre a rápido frete</a>
        <x-button-main>
            Solicitar um orçamento
        </x-button-main>
    </x-slot:footer>
</x-template.box-and-text>
