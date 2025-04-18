@extends('layout.single', ['titleSection' => 'Sobre a Rápido Frete'])

@section('title', 'Rápido Frete | Sobre Nós – Sua Mudança em Boas Mãos')
@section('description', 'Conheça a história da Rápido Frete, uma empresa especializada em mudanças e fretes com agilidade, segurança e cuidado. Descubra como tornamos seu transporte mais simples e confiável.')

@section('single')
    <img src="{{ asset('assets/about.png') }}" alt="" class="w-full max-h-60 object-cover object-top rounded-lg animate">
    <x-atoms.text class="animate">A Rápido Frete nasceu com um propósito claro: oferecer serviços de transporte e mudança com qualidade, segurança e agilidade. Desde o início, nosso compromisso foi garantir que cada cliente tivesse uma experiência tranquila e sem preocupações ao mudar de endereço, seja para uma nova casa, um novo escritório ou qualquer outro destino.</x-atoms.text>
    <x-atoms.text class="animate">Com anos de experiência no setor, já realizamos inúmeras mudanças residenciais e comerciais, sempre prezando pelo cuidado com os bens transportados e pela pontualidade na entrega. Sabemos que mudar de endereço pode ser um momento de grande expectativa, mas também de desafios. Por isso, investimos em uma equipe treinada e em processos eficientes para tornar tudo mais simples e seguro para nossos clientes.</x-atoms.text>
    <x-atoms.text class="animate">Além de mudanças locais, expandimos nossos serviços para atender mudanças interestaduais, oferecendo soluções completas para quem precisa transportar seus pertences para outras regiões com total tranquilidade. Também disponibilizamos fretes rápidos para pequenos volumes, montagem e desmontagem de móveis, além de embalagens profissionais que garantem ainda mais proteção para os itens transportados.</x-atoms.text>
    <x-atoms.text class="animate">Nosso objetivo é continuar crescendo e inovando, sempre buscando novas formas de oferecer um serviço ainda mais eficiente e acessível. Trabalhamos com transparência, compromisso e respeito, pois sabemos que, mais do que transportar objetos, estamos ajudando nossos clientes a começarem um novo ciclo em suas vidas.</x-atoms.text>
    <x-atoms.text class="animate">Se você precisa de um serviço de mudança ou frete confiável, conte com a Rápido Frete. Estamos prontos para levar seus pertences com segurança para onde for necessário!</x-atoms.text>
@endsection
