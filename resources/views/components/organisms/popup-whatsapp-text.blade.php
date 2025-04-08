<a
    @class([
        'flex items-center popup-whatsapp',
        $class,
    ])
    href="{{ $href }}"
{{ $attributes }}>
    <div class="flex items-center bg-white px-3 h-12 shadow-depth rounded-sm">
        <x-molecules.popup-whatsapp-loading-text id="containerLoading" />
        <x-molecules.popup-whatsapp-message class="hidden" id="questionPopup" />
    </div>
    <div class="w-0 h-0 border-transparent border-l-white border-y-12 -left-0.5 relative border-l-12 pr-2"></div>
</a>
