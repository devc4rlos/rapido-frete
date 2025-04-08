@php($reverse = false)

<x-organisms.box-and-text
    title="Nossa frota"
    subtitle="Segurança e eficiência para sua mudança"
    :class="$class"
    :reverse="$reverse"
{{ $attributes }}>
    <x-slot:box>
        <x-molecules.box-video
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
        <x-atoms.text>
            Contamos com uma frota moderna e equipada para garantir que sua mudança seja realizada com total segurança e eficiência. Nossos veículos são preparados para transportar desde pequenos volumes até grandes mudanças, sempre protegendo seus bens contra qualquer imprevisto.
        </x-atoms.text>
    </x-slot:content>
    <x-slot:footer>
        <x-atoms.link-main :href="route('fleet')">Ver galeria</x-atoms.link-main>
    </x-slot:footer>
</x-organisms.box-and-text>
