<div
    @class([
        'animate flex flex-col gap-5',
        $class,
    ])
{{ $attributes }}>
    <h2 class="font-text font-bold text-lg leading-8">Perguntas Frequentes</h2>
    <div class="flex flex-col gap-5 max-w-5xl mx-auto">
        <x-molecules.question-response
            question="Vocês atendem mudanças para outras cidades além das listadas?"
            response="Sim! Se a sua cidade não está na lista, entre em contato para verificar a possibilidade de atendimento."
            theme="light"
        />
        <x-molecules.question-response
            question="Quanto tempo leva uma mudança para outro estado?"
            response="O tempo pode variar de acordo com a distância e logística. Nossa equipe entrará em contato para fornecer prazos detalhados."
            theme="light"
        />
    </div>
</div>
