<div
    @class([
        'grid grid-cols-1 lg:grid-cols-2 max-w-7xl mx-auto gap-8 lg:gap-16',
        $class,
    ])
{{ $attributes }}>
    <x-molecules.home.comments-message
        class="animate from-left"
        name="Maria S."
        location="São Paulo/SP"
        evaluation="5"
        text="Serviço excelente! A equipe foi muito cuidadosa com meus móveis e a mudança aconteceu dentro do prazo combinado. Recomendo para quem busca segurança e profissionalismo!"
    />
    <x-molecules.home.comments-message
        class="animate from-right"
        name="Carlos M."
        location="Campinas/SP"
        evaluation="5"
        text="Precisava transportar equipamentos do meu escritório e fiquei impressionado com a organização e agilidade da equipe. Tudo chegou intacto e dentro do tempo previsto. Muito obrigado!"
    />
    <x-molecules.home.comments-message
        class="animate from-left"
        name="Juliana R."
        location="São Bernardo do Campo/SP"
        evaluation="5"
        text="Ótimo atendimento! Fiz um frete pequeno e mesmo assim fui tratada com muita atenção. O preço foi justo e o transporte foi super rápido. Com certeza usarei o serviço novamente."
    />
    <x-molecules.home.comments-message
        class="animate from-right"
        name="André L."
        location="Ribeirão Preto/SP"
        evaluation="4"
        text="Minha mudança foi para outro estado e estava preocupado com o transporte, mas a empresa me deu total suporte. Desde o primeiro contato até a entrega final, tudo foi impecável!"
    />
</div>
