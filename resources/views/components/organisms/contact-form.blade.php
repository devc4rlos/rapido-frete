<div
    @class([
        'max-w-2xl bg-white shadow-lg animate from-left w-full rounded-lg p-5 md:p-10',
        $class,
    ])
{{ $attributes }}>
    <x-atoms.text class="mb-5">Dúvidas sobre nossos serviços? Preencha o formulário abaixo e entraremos em contato o mais rápido possível!</x-atoms.text>

    <form class="w-full flex gap-5 flex-col" id="contactForm">
        <x-atoms.form-control>
            <x-slot:label>
                <x-atoms.form-label for="name">Nome</x-atoms.form-label>
            </x-slot:label>
            <x-slot:input>
                <x-atoms.form-input type="text" name="name" id="name" placeholder="Digite seu nome" required="" autocomplete="name"  />
            </x-slot:input>
        </x-atoms.form-control>
        <x-molecules.form-group>
            <x-atoms.form-control>
                <x-slot:label>
                    <x-atoms.form-label for="email">E-mail</x-atoms.form-label>
                </x-slot:label>
                <x-slot:input>
                    <x-atoms.form-input type="text" name="email" id="email" placeholder="Digite seu e-mail" required="" autocomplete="email" />
                </x-slot:input>
            </x-atoms.form-control>
            <x-atoms.form-control>
                <x-slot:label>
                    <x-atoms.form-label for="phone">Telefone</x-atoms.form-label>
                </x-slot:label>
                <x-slot:input>
                    <x-atoms.form-input type="text" name="phone" id="phone" placeholder="Digite seu telefone" required="" autocomplete="tel" />
                </x-slot:input>
            </x-atoms.form-control>
        </x-molecules.form-group>
        <x-atoms.form-control>
            <x-slot:label>
                <x-atoms.form-label for="reason">Motivo</x-atoms.form-label>
            </x-slot:label>
            <x-slot:input>
                <x-atoms.form-select id="reason" name="reason" required=""
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
        </x-atoms.form-control>
        <x-atoms.form-control>
            <x-slot:label>
                <x-atoms.form-label for="message">Mensagem</x-atoms.form-label>
            </x-slot:label>
            <x-slot:input>
                <x-atoms.form-textarea id="message" name="message" rows="6" required="" />
            </x-slot:input>
        </x-atoms.form-control>
        <div class="flex items-center gap-5">
            <x-atoms.button-main type="submit">
                Enviar mensagem
            </x-atoms.button-main>
            <x-atoms.text-small class="text-info-600 opacity-0 hidden lg:block" id="messageFeedback"></x-atoms.text-small>
        </div>
    </form>
</div>

@pushonce('scripts')
    @vite('resources/js/components/contact.js')
@endpushonce
