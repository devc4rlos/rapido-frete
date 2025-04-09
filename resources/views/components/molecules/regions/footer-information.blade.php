<div
    @class([
        'animate flex flex-col gap-5',
        $class,
    ])
{{ $attributes }}>
    <x-atoms.text>Se sua cidade não estiver listada, entre em contato para verificar a possibilidade de atendimento. A Rápido Frete está sempre expandindo suas operações para melhor atender seus clientes.</x-atoms.text>
    <x-atoms.link-main :href="$getLinkRequestQuote" target="_blank">Solicitar orçamento</x-atoms.link-main>
</div>
