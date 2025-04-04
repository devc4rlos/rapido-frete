@extends('layout.single', ['titleSection' => 'Perguntas frequentes'])

@section('title', 'Perguntas frequentes')

@section('single')
    <x-question-response
        question="Quais são os tipos de serviços que a Rápido Frete oferece?"
        response="A Rápido Frete oferece mudanças residenciais, comerciais, transporte de pequenos volumes, montagem e desmontagem de móveis, embalagens profissionais e mudanças interestaduais."
        theme="light"
    />

    <x-question-response
        question="A empresa realiza mudanças para outros estados?"
        response="Sim! Realizamos mudanças interestaduais com planejamento e segurança, garantindo que seus bens cheguem ao destino com toda a proteção necessária."
        theme="light"
    />

    <x-question-response
        question="Como posso solicitar um orçamento para minha mudança?"
        response="Você pode solicitar um orçamento entrando em contato pelo nosso site, telefone ou WhatsApp. Basta informar os detalhes da sua mudança, como origem, destino e volume dos itens, e enviaremos um orçamento rápido para você!"
        theme="light"
    />

    <x-question-response
        question="Quais são as formas de pagamento aceitas?"
        response="Aceitamos pagamentos via cartão de crédito, débito, PIX e transferência bancária. Para empresas, também oferecemos a opção de pagamento via boleto."
        theme="light"
    />

    <x-question-response
        question="Com quanto tempo de antecedência devo agendar minha mudança?"
        response="Recomendamos agendar sua mudança com pelo menos 5 a 7 dias de antecedência para garantir disponibilidade na data desejada, especialmente em períodos de alta demanda."
        theme="light"
    />

    <x-question-response
        question="A Rápido Frete oferece serviço de embalagem para os móveis?"
        response="Sim! Temos embalagens profissionais para proteger seus móveis e objetos durante o transporte, garantindo que cheguem ao destino em perfeito estado."
        theme="light"
    />

    <x-question-response
        question="Os motoristas e ajudantes da Rápido Frete são experientes?"
        response="Sim! Nossa equipe é composta por profissionais treinados e experientes, garantindo um serviço de alta qualidade e segurança no transporte dos seus bens."
        theme="light"
    />

    <x-question-response
        question="A empresa oferece seguro para os itens transportados?"
        response="Sim, oferecemos a opção de seguro para garantir mais tranquilidade durante a mudança. Consulte nossas condições e valores para incluir essa proteção no seu transporte."
        theme="light"
    />

    <x-question-response
        question="É possível acompanhar minha mudança em tempo real?"
        response="Sim! Oferecemos rastreamento para que você possa acompanhar sua mudança e saber o status do transporte em tempo real."
        theme="light"
    />

    <x-question-response
        question="O que devo fazer se precisar alterar a data da minha mudança?"
        response="Caso precise alterar a data da sua mudança, entre em contato conosco o quanto antes. Faremos o possível para ajustar o agendamento de acordo com sua necessidade."
        theme="light"
    />
@endsection
