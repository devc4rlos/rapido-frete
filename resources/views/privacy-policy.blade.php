@extends('layout.single', ['titleSection' => 'Política de privacidade'])

@section('title', 'Política de privacidade')

@section('single')
    <x-privacy-policy.card>
        <x-privacy-policy.title>1. Introdução</x-privacy-policy.title>
        <x-text-large>A Rápido Frete tem o compromisso de proteger a privacidade dos seus clientes e usuários. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos seus dados pessoais ao acessar nosso site ou utilizar nossos serviços.</x-text-large>
        <x-text-large>Ao fornecer suas informações pessoais, você concorda com as práticas descritas nesta política. Recomendamos que leia atentamente este documento e, caso tenha dúvidas, entre em contato conosco.</x-text-large>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>2. Informações Coletadas</x-privacy-policy.title>
        <x-text-large>A Rápido Frete pode coletar diferentes tipos de informações para fornecer um serviço eficiente e personalizado.</x-text-large>
        <x-privacy-policy.list-items>
            <li><x-text-large><strong>Informações pessoais:</strong> Nome, telefone, e-mail e endereço para contato.</x-text-large></li>
            <li><x-text-large><strong>Dados de pagamento:</strong> Informações para processamento de pagamentos, como detalhes de cartão (não armazenamos dados sensíveis de pagamento).</x-text-large></li>
            <li><x-text-large><strong>Informações de navegação:</strong> Cookies, endereço IP, tipo de dispositivo e comportamento no site.</x-text-large></li>
        </x-privacy-policy.list-items>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>3. Uso das Informações</x-privacy-policy.title>
        <x-text-large>Os dados coletados são utilizados para:</x-text-large>
        <x-privacy-policy.list-items>
            <li><x-text-large>Processar pedidos e fornecer serviços de transporte e mudança.</x-text-large></li>
            <li><x-text-large>Enviar comunicações importantes, como confirmações, atualizações e suporte ao cliente.</x-text-large></li>
            <li><x-text-large>Melhorar a experiência do usuário no site e otimizar nossos serviços.</x-text-large></li>
            <li><x-text-large>Cumprir obrigações legais e regulatórias.</x-text-large></li>
        </x-privacy-policy.list-items>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>4. Compartilhamento de Informações</x-privacy-policy.title>
        <x-text-large>A Rápido Frete não vende nem compartilha seus dados com terceiros, exceto nos seguintes casos:</x-text-large>
        <x-privacy-policy.list-items>
            <li><x-text-large>Para processadores de pagamento e parceiros logísticos, quando necessário para a execução do serviço.</x-text-large></li>
            <li><x-text-large>Quando exigido por lei ou autoridade competente.</x-text-large></li>
        </x-privacy-policy.list-items>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>5. Armazenamento e Proteção de Dados</x-privacy-policy.title>
        <x-text-large>A segurança dos seus dados é uma prioridade para a Rápido Frete. Adotamos medidas técnicas e organizacionais para proteger suas informações contra acessos não autorizados, vazamentos, perdas ou alterações indevidas. Entre as práticas de segurança utilizadas, destacamos:</x-text-large>
        <x-privacy-policy.list-items>
            <li><x-text-large>Criptografia de dados sensíveis durante o armazenamento e transmissão de informações.</x-text-large></li>
            <li><x-text-large>Acesso restrito às informações, limitado apenas a colaboradores autorizados.</x-text-large></li>
            <li><x-text-large>Monitoramento e auditoria de sistemas para prevenir fraudes e ataques cibernéticos.</x-text-large></li>
        </x-privacy-policy.list-items>
        <x-text-large>Os dados são armazenados pelo tempo necessário para cumprir as finalidades descritas nesta política ou conforme exigido pela legislação aplicável.</x-text-large>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>6. Direitos do Usuário</x-privacy-policy.title>
        <x-text-large>Os usuários têm direito de:</x-text-large>
        <x-privacy-policy.list-items>
            <li><x-text-large>Acessar e revisar seus dados armazenados.</x-text-large></li>
            <li><x-text-large>Corrigir ou atualizar informações pessoais.</x-text-large></li>
            <li><x-text-large>Solicitar a exclusão dos seus dados, salvo quando houver necessidade legal de retenção.</x-text-large></li>
            <li><x-text-large>Revogar o consentimento para uso de informações a qualquer momento.</x-text-large></li>
        </x-privacy-policy.list-items>
        <x-text-large>Para exercer esses direitos, entre em contato pelo e-mail <strong>seuemail@rapidofrete.com.br</strong>.</x-text-large>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>7. Uso de Cookies</x-privacy-policy.title>
        <x-text-large>Nosso site utiliza cookies para melhorar a experiência do usuário, permitindo navegação mais rápida e personalizada. Os cookies podem ser gerenciados nas configurações do navegador.</x-text-large>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>8. Alterações na Política de Privacidade</x-privacy-policy.title>
        <x-text-large>A Rápido Frete pode atualizar esta Política de Privacidade periodicamente para refletir mudanças nos serviços, na legislação aplicável ou em práticas de segurança.</x-text-large>
    </x-privacy-policy.card>

    <x-privacy-policy.card>
        <x-privacy-policy.title>9. Contato</x-privacy-policy.title>
        <x-text-large>Se tiver dúvidas ou quiser exercer seus direitos sobre seus dados, entre em contato conosco:</x-text-large>
        <x-privacy-policy.list-items>
            <li><x-text-large><strong>E-mail:</strong> seuemail@rapidofrete.com.br</x-text-large></li>
            <li><x-text-large><strong>Endereço:</strong> Rua Exemplo, 123 - São Paulo, SP</x-text-large></li>
            <li><x-text-large><strong>Telefone:</strong> (XX) XXXX-XXXX</x-text-large></li>
        </x-privacy-policy.list-items>
    </x-privacy-policy.card>

@endsection
