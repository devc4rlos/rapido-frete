<section class="p-4 h-[600px] relative bg-right-top">
    <div class="absolute top-0 -z-1 left-0 w-full h-full">
        <img src="{{ asset('assets/banner-home.png') }}" alt="" class="hidden md:block w-full h-full object-cover bg-right">
        <img src="{{ asset('assets/banner-home-sm.png') }}" alt="" class="md:hidden w-full h-full object-cover bg-right">
    </div>
    <div class="container h-full">
        <div class="w-full md:max-w-xl justify-center items-center md:items-start h-full flex gap-5 flex-col">
            <x-text-display class="md:text-start text-center" />
            <p class="font-text text-center md:text-start text-sm md:text-base px-5 md:px-0 sm:block leading-6 text-light">Mude sem preocupação! Oferecemos profissionais experientes, veículos preparados e um serviço acessível para uma mudança tranquila e pontual.</p>
            <x-button-main class="w-fit" href="https://api.whatsapp.com/send?phone=5511994411592">Solicitar um orçamento agora</x-button-main>
        </div>
    </div>
</section>
