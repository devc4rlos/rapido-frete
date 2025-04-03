<section class="p-4 bg-light">
    <div class="container my-10">
        <x-title-section class="mb-10 animate">
            FAQ (Perguntas Frequentes)
        </x-title-section>

       <div class="flex flex-col gap-5 max-w-5xl mx-auto">
            <x-question-response
                question="Como posso solicitar um orçamento para minha mudança?"
                response="Você pode solicitar um orçamento entrando em contato pelo nosso site, telefone ou WhatsApp. Basta informar os detalhes da sua mudança, como origem, destino e volume dos itens, e enviaremos um orçamento rápido para você!"
            />
           <x-question-response
               question="Quais são os tipos de serviços que a rápido frete oferece?"
               response="A Rápido Frete faz mudanças residenciais e comerciais, fretes rápidos para pequenos volumes, montagem e desmontagem de móveis, embalagens profissionais e mudanças para outros estados."
           />
           <x-question-response
               question="A rápido frete realiza mudanças para outros estados?"
               response="Sim! A Rápido Frete realiza mudanças para outros estados com segurança e eficiência, garantindo que seus bens cheguem ao destino com todo o cuidado."
           />
           <x-question-response
               question="Como posso pagar pelo serviço de mudança?"
               response="Aceitamos pagamentos via Pix, cartão de crédito, débito e transferência bancária. Consulte nossa equipe para opções de parcelamento e condições especiais!"
           />
           <x-question-response
               question="Os móveis são desmontados e montados pela equipe?"
               response="Sim! Nossa equipe é especializada em desmontagem e montagem de móveis, garantindo que tudo seja transportado com segurança e montado corretamente no destino."
           />
       </div>

        <div class="animate">
            <x-text class="text-center mt-10 max-w-5xl mx-auto md:px-10" :textAlign="false">
                <b>Ainda tem dúvidas?</b> Se você não encontrou a resposta que procurava ou quer mais informações, nossa equipe está pronta para ajudar! Não perca tempo e faça sua mudança com quem entende do assunto.
            </x-text>
            <x-link-main href="#" class="block mx-auto mt-6">Solicitar orçamento</x-link-main>
        </div>
    </div>
</section>
