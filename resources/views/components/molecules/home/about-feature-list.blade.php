<div
    @class([
        'flex flex-col gap-5',
        $class,
    ])
{{ $attributes }}>
    <x-molecules.home.about-feature title="Profissionais especializados" text="Equipe treinada para garantir um transporte seguro e eficiente.">
        <x-slot:icon>
            <x-icons.truck-fast class="text-brand-500" />
        </x-slot:icon>
    </x-molecules.home.about-feature>
    <x-molecules.home.about-feature title="Soluções personalizadas" text="Atendimento sob medida para mudanças residenciais, comerciais e fretes rápidos.">
        <x-slot:icon>
            <x-icons.bolt class="text-brand-500" />
        </x-slot:icon>
    </x-molecules.home.about-feature>
    <x-molecules.home.about-feature title="Compromisso com o prazo" text="Garantimos pontualidade e comunicação transparente durante todo o processo.">
        <x-slot:icon>
            <x-icons.calendar-days class="text-brand-500" />
        </x-slot:icon>
    </x-molecules.home.about-feature>
</div>
