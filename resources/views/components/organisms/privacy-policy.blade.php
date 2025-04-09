<div
    @class([
        'flex gap-6 flex-col',
        $class,
    ])
{{ $attributes }}>
    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>1. Introdução</x-atoms.privacy-policy-title>
        <x-atoms.text>A Rápido Frete tem o compromisso de proteger a privacidade dos seus clientes e usuários. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos seus dados pessoais ao acessar nosso site ou utilizar nossos serviços.</x-atoms.text>
        <x-atoms.text>Ao fornecer suas informações pessoais, você concorda com as práticas descritas nesta política. Recomendamos que leia atentamente este documento e, caso tenha dúvidas, entre em contato conosco.</x-atoms.text>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>2. Informações Coletadas</x-atoms.privacy-policy-title>
        <x-atoms.text>A Rápido Frete pode coletar diferentes tipos de informações para fornecer um serviço eficiente e personalizado.</x-atoms.text>
        <x-molecules.privacy-policy-list>
            <li><x-atoms.text><strong>Informações pessoais:</strong> Nome, telefone, e-mail e endereço para contato.</x-atoms.text></li>
            <li><x-atoms.text><strong>Dados de pagamento:</strong> Informações para processamento de pagamentos, como detalhes de cartão (não armazenamos dados sensíveis de pagamento).</x-atoms.text></li>
            <li><x-atoms.text><strong>Informações de navegação:</strong> Cookies, endereço IP, tipo de dispositivo e comportamento no site.</x-atoms.text></li>
        </x-molecules.privacy-policy-list>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>3. Uso das Informações</x-atoms.privacy-policy-title>
        <x-atoms.text>Os dados coletados são utilizados para:</x-atoms.text>
        <x-molecules.privacy-policy-list>
            <li><x-atoms.text>Processar pedidos e fornecer serviços de transporte e mudança.</x-atoms.text></li>
            <li><x-atoms.text>Enviar comunicações importantes, como confirmações, atualizações e suporte ao cliente.</x-atoms.text></li>
            <li><x-atoms.text>Melhorar a experiência do usuário no site e otimizar nossos serviços.</x-atoms.text></li>
            <li><x-atoms.text>Cumprir obrigações legais e regulatórias.</x-atoms.text></li>
        </x-molecules.privacy-policy-list>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>4. Compartilhamento de Informações</x-atoms.privacy-policy-title>
        <x-atoms.text>A Rápido Frete não vende nem compartilha seus dados com terceiros, exceto nos seguintes casos:</x-atoms.text>
        <x-molecules.privacy-policy-list>
            <li><x-atoms.text>Para processadores de pagamento e parceiros logísticos, quando necessário para a execução do serviço.</x-atoms.text></li>
            <li><x-atoms.text>Quando exigido por lei ou autoridade competente.</x-atoms.text></li>
        </x-molecules.privacy-policy-list>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>5. Armazenamento e Proteção de Dados</x-atoms.privacy-policy-title>
        <x-atoms.text>A segurança dos seus dados é uma prioridade para a Rápido Frete. Adotamos medidas técnicas e organizacionais para proteger suas informações contra acessos não autorizados, vazamentos, perdas ou alterações indevidas. Entre as práticas de segurança utilizadas, destacamos:</x-atoms.text>
        <x-molecules.privacy-policy-list>
            <li><x-atoms.text>Criptografia de dados sensíveis durante o armazenamento e transmissão de informações.</x-atoms.text></li>
            <li><x-atoms.text>Acesso restrito às informações, limitado apenas a colaboradores autorizados.</x-atoms.text></li>
            <li><x-atoms.text>Monitoramento e auditoria de sistemas para prevenir fraudes e ataques cibernéticos.</x-atoms.text></li>
        </x-molecules.privacy-policy-list>
        <x-atoms.text>Os dados são armazenados pelo tempo necessário para cumprir as finalidades descritas nesta política ou conforme exigido pela legislação aplicável.</x-atoms.text>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>6. Direitos do Usuário</x-atoms.privacy-policy-title>
        <x-atoms.text>Os usuários têm direito de:</x-atoms.text>
        <x-molecules.privacy-policy-list>
            <li><x-atoms.text>Acessar e revisar seus dados armazenados.</x-atoms.text></li>
            <li><x-atoms.text>Corrigir ou atualizar informações pessoais.</x-atoms.text></li>
            <li><x-atoms.text>Solicitar a exclusão dos seus dados, salvo quando houver necessidade legal de retenção.</x-atoms.text></li>
            <li><x-atoms.text>Revogar o consentimento para uso de informações a qualquer momento.</x-atoms.text></li>
        </x-molecules.privacy-policy-list>
        <x-atoms.text>Para exercer esses direitos, entre em contato pelo e-mail <strong>{{ $getTextEmail }}</strong>.</x-atoms.text>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>7. Uso de Cookies</x-atoms.privacy-policy-title>
        <x-atoms.text>Nosso site utiliza cookies para melhorar a experiência do usuário, permitindo navegação mais rápida e personalizada. Os cookies podem ser gerenciados nas configurações do navegador.</x-atoms.text>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>8. Alterações na Política de Privacidade</x-atoms.privacy-policy-title>
        <x-atoms.text>A Rápido Frete pode atualizar esta Política de Privacidade periodicamente para refletir mudanças nos serviços, na legislação aplicável ou em práticas de segurança.</x-atoms.text>
    </x-organisms.privacy-policy-group>

    <x-organisms.privacy-policy-group>
        <x-atoms.privacy-policy-title>9. Contato</x-atoms.privacy-policy-title>
        <x-atoms.text>Se tiver dúvidas ou quiser exercer seus direitos sobre seus dados, entre em contato conosco:</x-atoms.text>
        <x-molecules.privacy-policy-list>
            <li><x-atoms.text><strong>E-mail:</strong> {{ $getTextEmail }}</x-atoms.text></li>
            <li><x-atoms.text><strong>Endereço:</strong> {{ $getTextAddress }}</x-atoms.text></li>
            <li><x-atoms.text><strong>Telefone:</strong> {{ $getTextPhone }}</x-atoms.text></li>
        </x-molecules.privacy-policy-list>
    </x-organisms.privacy-policy-group>
</div>
