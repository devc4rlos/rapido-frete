<div
    @class([
        'timeline relative flex flex-col gap-20 max-w-7xl mx-auto p-5',
        $class,
    ])
{{ $attributes }}>
    <x-molecules.home.timeline-step
        id="1"
        title="Solicitação de orçamento"
        text="O primeiro passo é entrar em contato conosco. Preencha o formulário online ou ligue para nossa equipe para obter um orçamento personalizado de acordo com suas necessidades."
    >
        <x-slot:icon>
            <x-icons.money size="lg" />
        </x-slot:icon>
    </x-molecules.home.timeline-step>
    <x-molecules.home.timeline-step
        id="2"
        reverse
        title="Planejamento e agendamento"
        text="Após a aprovação do orçamento, nossa equipe entra em contato para definir a data e os detalhes logísticos da mudança, garantindo que tudo esteja perfeitamente planejado."
    >
        <x-slot:icon>
            <x-icons.calendar-days size="lg" />
        </x-slot:icon>
    </x-molecules.home.timeline-step>
    <x-molecules.home.timeline-step
        id="3"
        title="Preparação e embalagem"
        text="Em nosso serviço, oferecemos embalagem cuidadosa para proteger seus itens durante o transporte. Nossos profissionais fazem a preparação antes do grande dia."
    >
        <x-slot:icon>
            <x-icons.box size="lg" />
        </x-slot:icon>
    </x-molecules.home.timeline-step>
    <x-molecules.home.timeline-step
        id="4"
        reverse
        title="Transporte seguro"
        text="No dia da mudança, nossa equipe realiza o transporte com eficiência e segurança, assegurando que seus bens cheguem no destino em perfeito estado."
    >
        <x-slot:icon>
            <x-icons.truck-fast size="lg" />
        </x-slot:icon>
    </x-molecules.home.timeline-step>
    <x-molecules.home.timeline-step
        id="5"
        title="Desembalagem e organização"
        text="Chegando ao novo endereço, ajudamos com o processo de desembalagem e organização, para que você possa se instalar rapidamente e sem estresse."
    >
        <x-slot:icon>
            <x-icons.box-open size="lg" />
        </x-slot:icon>
    </x-molecules.home.timeline-step>
    <x-molecules.home.timeline-step
        id="6"
        reverse
        title="Acompanhamento pós-mudança"
        text="Após a mudança, nossa equipe entra em contato para garantir que tudo tenha ocorrido conforme o esperado e para resolver qualquer pendência."
    >
        <x-slot:icon>
            <x-icons.clipboard-check size="lg" />
        </x-slot:icon>
    </x-molecules.home.timeline-step>
    <x-atoms.home.list-step-bar />
</div>
