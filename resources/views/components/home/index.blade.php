<section class="p-4 min-h-80 h-[calc(100vh_-_20vh)] max-h-[1000px] relative bg-right-top">
    <div class="absolute top-0 -z-1 left-0 w-full h-full">
        <img src="{{ asset('assets/banner-home.png') }}" alt="" class="hidden md:block w-full h-full object-cover bg-right">
        <img src="{{ asset('assets/banner-home-sm.png') }}" alt="" class="md:hidden w-full h-full object-cover bg-right">
    </div>
    <div class="container h-full">
        <div class="w-full md:max-w-xl justify-center items-center md:items-start h-full flex gap-5 flex-col animate">
            <x-text-display class="md:text-left text-center" />
            <x-text class="text-center md:text-left px-5 md:px-0 sm:block text-light" :textAlign="false">
                Mude sem preocupação! Oferecemos profissionais experientes, veículos preparados e um serviço acessível para uma mudança tranquila e pontual.
            </x-text>
            <x-link-main class="w-fit" href="https://api.whatsapp.com/send?phone=5511994411592">Solicitar um orçamento agora</x-link-main>
        </div>
    </div>
</section>
