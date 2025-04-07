<div @class([
    'flex flex-wrap justify-center gap-5',
    $class,
]) {{ $attributes }}>
    <x-molecules.link-icon href="{{ $getUrlWhatsapp }}">
        {{ $getTextWhatsapp }}
        <x-slot:icon>
            <x-icons.whatsapp />
        </x-slot:icon>
    </x-molecules.link-icon>
    <x-molecules.link-icon href="{{ $getUrlEmail }}">
        {{ $getTextEmail }}
        <x-slot:icon>
            <x-icons.mail />
        </x-slot:icon>
    </x-molecules.link-icon>
    <x-molecules.text-icon>
        Segunda a Sexta, 08:00 às 18:00
        <x-slot:icon>
            <x-icons.calendar-days />
        </x-slot:icon>
    </x-molecules.text-icon>
</div>
