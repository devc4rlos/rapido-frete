<div
    @class([
        'fixed bottom-0 right-0 p-5 flex items-center',
        $class,
    ])
{{ $attributes }}>
    <x-organisms.popup-whatsapp-text :href="$getLinkRequestQuote" id="textPopupWhatsapp" target="_blank" />
    <x-atoms.popup-whatsapp-icon :href="$getLinkRequestQuote" id="iconPopupWhatsapp" target="_blank" />
</div>

@pushonce('scripts')
    @vite('resources/js/components/popup-whatsapp.js')
@endpushonce
