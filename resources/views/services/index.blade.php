@extends('layout.single', ['titleSection' => 'Nossos serviços'])

@section('title', 'Serviços da Rápido Frete')

@section('single')
    <div class="grid grid-cols-3 gap-5">
        <x-services.card-simple
            title="Mudanças Residenciais"
            text="Transporte seguro e eficiente para sua mudança."
            buttonText="Saiba mais"
            href="{{ route('services.residential-moving') }}"
        />
        <x-services.card-simple
            title="Mudanças Comerciais"
            text="Solução rápida e segura para empresas."
            buttonText="Confira o serviço"
            href="{{ route('services.commercial-moving') }}"
        />
        <x-services.card-simple
            title="Fretes Rápidos"
            text="Ideal para pequenos volumes com entrega ágil."
            buttonText="Solicite agora"
            href="{{ route('services.fast-freight') }}"
        />
        <x-services.card-simple
            title="Montagem e Desmontagem"
            text="Profissionais treinados para um serviço seguro."
            buttonText="Veja os detalhes"
            href="{{ route('services.furniture-assembly') }}"
        />
        <x-services.card-simple
            title="Embalagens Profissionais"
            text="Materiais de alta qualidade para proteger seus bens."
            buttonText="Conheça mais"
            href="{{ route('services.professional-packaging') }}"
        />
        <x-services.card-simple
            title="Mudanças Interestaduais"
            text="Transporte seguro para qualquer estado do Brasil."
            buttonText="Planeje sua mudança"
            href="{{ route('services.interstate-moving') }}"
        />
    </div>
@endsection
