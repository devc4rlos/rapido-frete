<x-organisms.container-with-title
    :class="$class"
    title="FAQ (Perguntas Frequentes)"
    active-background
{{ $attributes }}>
    <x-organisms.home.faq-list />

    <div class="animate">
        <x-atoms.text class="text-center mt-10 max-w-5xl mx-auto md:px-10" :textAlign="false">
            <b>Ainda tem dúvidas?</b> Se você não encontrou a resposta que procurava ou quer mais informações, nossa equipe está pronta para ajudar! Não perca tempo e faça sua mudança com quem entende do assunto.
        </x-atoms.text>
        <x-atoms.link-main :href="$getLinkRequestQuote" target="_blank" class="block mx-auto mt-6">Solicitar orçamento</x-atoms.link-main>
    </div>
</x-organisms.container-with-title>
