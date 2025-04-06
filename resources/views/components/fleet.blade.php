@php($reverse = false)

<x-template.box-and-text
    title="Nossa frota"
    subtitle="Segurança e eficiência para sua mudança"
    :reverse="$reverse"
>
    <x-slot:box>
        <x-box.video
            poster="{{ asset('assets/banner-home.png') }}"
            :reverse="$reverse"
            :files="[
                [
                    'type' => 'webm',
                    'src' => asset('assets/fleet.webm'),
                ],
                [
                    'type' => 'ogg',
                    'src' => asset('assets/fleet.ogv'),
                ],

                [
                    'type' => 'mp4',
                    'src' => asset('assets/fleet.mp4'),
                ],
            ]"
        />
    </x-slot:box>
    <x-slot:content>
        <x-text>
            Contamos com uma frota moderna e equipada para garantir que sua mudança seja realizada com total segurança e eficiência. Nossos veículos são preparados para transportar desde pequenos volumes até grandes mudanças, sempre protegendo seus bens contra qualquer imprevisto.
        </x-text>
    </x-slot:content>
    <x-slot:footer>
        <x-link-main :href="route('fleet')">Ver galeria</x-link-main>
    </x-slot:footer>
</x-template.box-and-text>
