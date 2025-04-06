<x-container class="flex justify-center lg:justify-between" isBackground :isSpacing="false">
    <div class="flex flex-wrap justify-center gap-5">
        <x-header.top-bar.link-icon href="{{ $getUrlWhatsapp() }}">
            {{ $getPhoneWhatsapp() }}
            <x-slot:icon>
                <x-icons.whatsapp />
            </x-slot:icon>
        </x-header.top-bar.link-icon>
        <x-header.top-bar.link-icon href="{{ $getUrlEmail }}">
            {{ $getTextEmail }}
            <x-slot:icon>
                <x-icons.mail />
            </x-slot:icon>
        </x-header.top-bar.link-icon>
        <x-header.top-bar.text-icon>
            Segunda a Sexta, 08:00 às 18:00
            <x-slot:icon>
                <x-icons.calendar-days />
            </x-slot:icon>
        </x-header.top-bar.text-icon>
    </div>
    <div class="hidden lg:flex gap-3">
        @foreach($getSocialMedia() as $nameSocialMedia => $itemSocialMedia)
            <x-header.top-bar.link-icon href="{{ $itemSocialMedia['links']['url'] }}">
                <x-slot:icon>
                    <x-dynamic-component component="icons.{{ $nameSocialMedia }}" />
                </x-slot:icon>
            </x-header.top-bar.link-icon>
        @endforeach
    </div>
</x-container>
