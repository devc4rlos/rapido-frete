<div
    @class([
        'w-full md:max-w-xl justify-center items-center md:items-start h-full flex gap-5 flex-col animate',
        $class,
    ])
{{ $attributes }}>
    <x-atoms.title-display class="md:text-left text-center text-light">
        Sua mudança sem estresse! Transporte rápido, seguro e sem complicações.
    </x-atoms.title-display>
    <x-atoms.text class="text-center md:text-left px-5 md:px-0 sm:block text-light">
        Mude sem preocupação! Oferecemos profissionais experientes, veículos preparados e um serviço acessível para uma mudança tranquila e pontual.
    </x-atoms.text>
    <x-atoms.link-main :href="$getLinkRequestQuote" target="_blank">
        Solicitar um orçamento agora
    </x-atoms.link-main>
</div>
