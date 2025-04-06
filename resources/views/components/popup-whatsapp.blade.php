<div class="fixed bottom-0 right-0 p-5 flex items-center">
    <a href="{{ $getLink() }}" target="_blank" class="flex items-center popup-whatsapp" id="textPopupWhatsapp">
        <div class="flex items-center bg-white px-3 h-12 shadow-depth rounded-sm">
            <div class="flex gap-3" id="containerLoading">
                <div class="w-2 h-2 rounded-full bg-amber-600 circle-loading"></div>
                <div class="w-2 h-2 rounded-full bg-amber-600 circle-loading"></div>
                <div class="w-2 h-2 rounded-full bg-amber-600 circle-loading"></div>
            </div>
            <div class="hidden" id="questionPopup">
                <x-text class="text-center" :textAlign="false">Quer um orçamento sem compromisso?</x-text>
                <div class="w-6 h-6 flex border border-info-100 items-center justify-center bg-info-300 text-light rounded-full absolute -top-3 -left-3" id="closePopupWhatsapp">
                    <x-icons.close />
                </div>
            </div>
        </div>
        <div class="w-0 h-0 border-transparent border-l-white border-y-12 -left-0.5 relative border-l-12 pr-2"></div>
    </a>
    <a href="{{ $getLink() }}" target="_blank" id="iconPopupWhatsapp" class="popup-whatsapp">
        <x-icons.svg.whatsapp />
    </a>
</div>

@pushonce('scripts')
    @vite('resources/js/components/popup-whatsapp.js')
@endpushonce
