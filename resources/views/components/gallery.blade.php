<section class="p-4 bg-light">
    <div class="container my-10">
        <x-title-section class="mb-10 animate">
            Nossos serviços em ação
        </x-title-section>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @for($i = 1; $i < 10; $i++)
                <img src="{{ asset('assets/gallery/' . $i . '.png') }}" alt="" class="w-full h-96 object-cover object-top rounded-xl border border-default-100 animate">
            @endfor
        </div>
        <div class="mt-10 flex flex-col gap-5 items-center animate">
            <x-text class="text-center">Precisa de um serviço de mudança? Entre em contato e solicite um orçamento agora mesmo!</x-text>
            <x-button-main>Solicitar orçamento</x-button-main>
        </div>
    </div>
</section>
