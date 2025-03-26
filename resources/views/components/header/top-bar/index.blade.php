<div class="bg-light p-4">
    <div class="container flex justify-center lg:justify-between">
        <div class="flex flex-wrap justify-center gap-5">
            <x-header.top-bar.link-icon href="https://api.whatsapp.com/send?phone=5511994411592">
                +55 11 99441-1592
                <x-slot:icon>
                    <x-icons.whatsapp />
                </x-slot:icon>
            </x-header.top-bar.link-icon>
            <x-header.top-bar.link-icon href="mail:dev@carlosalexandre.com.br">
                dev@carlosalexandre.com.br
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
            <x-header.top-bar.link-icon href="https://www.facebook.com/">
                <x-slot:icon>
                    <x-icons.facebook />
                </x-slot:icon>
            </x-header.top-bar.link-icon>
            <x-header.top-bar.link-icon href="https://api.whatsapp.com/send?phone=5511994411592">
                <x-slot:icon>
                    <x-icons.whatsapp />
                </x-slot:icon>
            </x-header.top-bar.link-icon>
            <x-header.top-bar.link-icon href="https://www.instagram.com/">
                <x-slot:icon>
                    <x-icons.instagram />
                </x-slot:icon>
            </x-header.top-bar.link-icon>
            <x-header.top-bar.link-icon href="https://x.com/">
                <x-slot:icon>
                    <x-icons.twitter />
                </x-slot:icon>
            </x-header.top-bar.link-icon>
            <x-header.top-bar.link-icon href="https://web.telegram.org/">
                <x-slot:icon>
                    <x-icons.telegram/>
                </x-slot:icon>
            </x-header.top-bar.link-icon>
        </div>
    </div>
</div>
