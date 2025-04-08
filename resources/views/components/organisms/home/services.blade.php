<div
    @class([
        'flex flex-col gap-10 md:gap-20',
        $class,
    ])
{{ $attributes }}>
    <x-organisms.home.services-feature
        :image="asset('assets/services/1.png')"
        title="Mudanças residencial rápida e segura"
        description="Transporte seguro e eficiente para sua mudança. Equipe especializada para um serviço sem preocupações."
        :href="route('services.residential-moving')"
        class="animate from-right"
    />
    <x-organisms.home.services-feature
        :image="asset('assets/services/2.png')"
        title="Mudanças Comerciais"
        description="Transporte ágil e seguro para sua empresa, minimizando o tempo de inatividade."
        :href="route('services.commercial-moving')"
        reverse
        class="animate from-left"
    />
    <x-organisms.home.services-feature
        :image="asset('assets/services/3.png')"
        title="Fretes Rápidos"
        description="Soluções ideais para pequenos volumes com entrega rápida e segura."
        :href="route('services.fast-freight')"
        class="animate from-right"
    />
    <x-organisms.home.services-feature
        :image="asset('assets/services/4.png')"
        title="Montagem e Desmontagem de Móveis"
        description="Equipe especializada para desmontar e montar seus móveis com total cuidado."
        :href="route('services.furniture-assembly')"
        reverse
        class="animate from-left"
    />
    <x-organisms.home.services-feature
        :image="asset('assets/services/5.png')"
        title="Embalagens Profissionais"
        description="Proteção extra para seus bens com materiais de alta qualidade."
        :href="route('services.professional-packaging')"
        class="animate from-right"
    />
    <x-organisms.home.services-feature
        :image="asset('assets/services/6.png')"
        title="Mudanças Interestaduais"
        description="Serviço completo para mudanças entre estados com segurança e eficiência."
        :href="route('services.interstate-moving')"
        reverse
        class="animate from-left"
    />
</div>
