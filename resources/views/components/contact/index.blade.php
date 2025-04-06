<div class="flex flex-col lg:flex-row items-center lg:items-start justify-center gap-16">
    <div class="max-w-2xl bg-white shadow-lg animate from-left w-full rounded-lg p-5 md:p-10">
        <x-text class="mb-5">Dúvidas sobre nossos serviços? Preencha o formulário abaixo e entraremos em contato o mais rápido possível!</x-text>

        <form class="w-full flex gap-5 flex-col" id="contactForm">
            <x-form.control>
                <x-slot:label>
                    <x-form.label for="name">Nome</x-form.label>
                </x-slot:label>
                <x-slot:input>
                    <x-form.input type="text" name="name" id="name" placeholder="Digite seu nome" required="" />
                </x-slot:input>
            </x-form.control>
            <x-form.group>
                <x-form.control>
                    <x-slot:label>
                        <x-form.label for="email">E-mail</x-form.label>
                    </x-slot:label>
                    <x-slot:input>
                        <x-form.input type="text" name="email" id="email" placeholder="Digite seu e-mail" required="" />
                    </x-slot:input>
                </x-form.control>
                <x-form.control>
                    <x-slot:label>
                        <x-form.label for="phone">Telefone</x-form.label>
                    </x-slot:label>
                    <x-slot:input>
                        <x-form.input type="text" name="phone" id="phone" placeholder="Digite seu telefone" required="" />
                    </x-slot:input>
                </x-form.control>
            </x-form.group>
            <x-form.control>
                <x-slot:label>
                    <x-form.label for="reason">Motivo</x-form.label>
                </x-slot:label>
                <x-slot:input>
                    <x-form.select id="reason" name="reason" required=""
                                   :options="[
                                'request_quote' => 'Solicitação de orçamento',
                                'schedule_move' => 'Agendamento de mudança',
                                'service_info' => 'Informações sobre serviços',
                                'support_issue' => 'Suporte/Problemas com um serviço',
                                'business_partnership' => 'Parcerias e empresas',
                                'other' => 'Outros'
                            ]"
                    />
                </x-slot:input>
            </x-form.control>
            <x-form.control>
                <x-slot:label>
                    <x-form.label for="message">Mensagem</x-form.label>
                </x-slot:label>
                <x-slot:input>
                    <x-form.textarea id="message" name="message" rows="6" required="" />
                </x-slot:input>
            </x-form.control>
            <div class="flex items-center gap-5">
                <x-button-main type="submit">
                    Enviar mensagem
                </x-button-main>
                <p class="font-text text-sm leading-6 text-info-600 opacity-0 hidden lg:block" id="messageFeedback"></p>
            </div>
        </form>
    </div>
    <div class="flex flex-col items-center lg:items-start gap-8">
        <x-contact.link-info
            :text="$getPhoneWhatsapp"
            :href="$getUrlWhatsapp"
            target="_blank"
        >
            <x-slot:icon>
                <x-icons.whatsapp size="lg" />
            </x-slot:icon>
        </x-contact.link-info>
        <x-contact.link-info
            :text="$getTextEmail"
            :href="$getUrlEmail"
            target="_blank"
        >
            <x-slot:icon>
                <x-icons.mail size="lg" />
            </x-slot:icon>
        </x-contact.link-info>
        <x-contact.link-info
            :text="$getAddress()"
            href="https://www.google.com.br/maps/?hl=pt-PT"
            target="_blank"
        >
            <x-slot:icon>
                <x-icons.map-location-dot size="lg" />
            </x-slot:icon>
        </x-contact.link-info>
    </div>
</div>
