<div
    @class([
        'flex flex-col items-center lg:items-start gap-8',
        $class,
    ])
{{ $attributes }}>
    <x-molecules.contact-information-link
        :text="$getPhoneWhatsapp"
        :href="$getUrlWhatsapp"
        target="_blank"
    >
        <x-slot:icon>
            <x-icons.whatsapp size="lg" />
        </x-slot:icon>
    </x-molecules.contact-information-link>
    <x-molecules.contact-information-link
        :text="$getTextEmail"
        :href="$getUrlEmail"
        target="_blank"
    >
        <x-slot:icon>
            <x-icons.mail size="lg" />
        </x-slot:icon>
    </x-molecules.contact-information-link>
    <x-molecules.contact-information-link
        :text="$getAddress()"
        href="https://www.google.com.br/maps/?hl=pt-PT"
        target="_blank"
    >
        <x-slot:icon>
            <x-icons.map-location-dot size="lg" />
        </x-slot:icon>
    </x-molecules.contact-information-link>
</div>
