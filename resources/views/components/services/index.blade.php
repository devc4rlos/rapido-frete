<section class="py-4">
    <div class="container my-10">
        <x-title-section class="mb-10 animate">
            Nossos serviços
        </x-title-section>
        <div class="flex flex-col gap-10 md:gap-20">
            <x-services.service
                :image="asset('assets/services/1.png')"
                title="Mudanças residencial rápida e segura"
                description="Transporte seguro e eficiente para sua mudança. Equipe especializada para um serviço sem preocupações."
                href="#"
                class="animate from-right"
            >
                <x-slot:button>
                    <x-button-main href="#">Saiba mais</x-button-main>
                </x-slot:button>
            </x-services.service>
            <x-services.service
                :image="asset('assets/services/2.png')"
                title="Mudanças Comerciais"
                description="Transporte ágil e seguro para sua empresa, minimizando o tempo de inatividade."
                href="#"
                reverse
                class="animate from-left"
            />
            <x-services.service
                :image="asset('assets/services/3.png')"
                title="Fretes Rápidos"
                description="Soluções ideais para pequenos volumes com entrega rápida e segura."
                href="#"
                class="animate from-right"
            />
            <x-services.service
                :image="asset('assets/services/4.png')"
                title="Montagem e Desmontagem de Móveis"
                description="Equipe especializada para desmontar e montar seus móveis com total cuidado."
                href="#"
                reverse
                class="animate from-left"
            />
            <x-services.service
                :image="asset('assets/services/5.png')"
                title="Embalagens Profissionais"
                description="Proteção extra para seus bens com materiais de alta qualidade."
                href="#"
                class="animate from-right"
            />
            <x-services.service
                :image="asset('assets/services/6.png')"
                title="Mudanças Interestaduais"
                description="Serviço completo para mudanças entre estados com segurança e eficiência."
                href="#"
                reverse
                class="animate from-left"
            />
        </div>
    </div>
</section>
