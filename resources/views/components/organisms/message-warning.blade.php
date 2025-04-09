<section
    @class([
        'top-2/4 fixed z-40 flex flex-col items-start group/message active',
        $class,
    ])
    id="containerMessageWarning"
{{ $attributes }}>
    <div class="bg-info-400 h-14 px-5 flex items-center justify-between gap-x-3 message-warning cursor-pointer relative">
        <x-icons.triangle-exclamation size="lg" class="text-warning-100" />
        <x-atoms.text class="text-light text-nowrap hidden group-[.active]/message:block">Site fictício</x-atoms.text>

        <div class="w-6 h-6 hidden border border-info-100 items-center justify-center bg-info-300 text-light rounded-full absolute -top-3 -right-3 group-[.active]/message:flex">
            <x-icons.close />
        </div>
    </div>
    <div class="overflow-hidden w-full shadow-depth" id="messageWarningContent">
        <x-atoms.text class="overflow-hidden shadow-lg bg-light w-full sm:max-w-md lg:max-w-2xl p-5">
            Este é um site fictício, desenvolvido exclusivamente para fins de demostração no portfólio de <a href="https://carlosalexandre.com.br/" target="_blank" class="text-blue-700">Carlos Alexandre</a>. Os serviços exibidos são apenas demonstrativos e não estão disponíveis para contratação.
        </x-atoms.text>
    </div>
</section>

@pushonce('scripts')
    @vite('resources/js/components/message-warning.js')
@endpushonce
