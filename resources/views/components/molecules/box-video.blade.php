<x-molecules.box
    @class([
        'ml-auto' => !$reverse,
        $class
    ])
{{ $attributes }}>
    <x-slot:content>
        <video controls poster="{{ $poster }}" @class([
            'object-cover h-80 md:h-full object-center rounded-lg w-full z-10 video',
            $classVideo,
        ])>
            @foreach($files as $file)
                <source src="{{ $file['src'] }}" type="video/{{ $file['type'] }}" class=".video-{{ $file['type'] }}" />
            @endforeach
            Seu navegador não suporta vídeos.
        </video>
    </x-slot:content>
</x-molecules.box>

@pushonce('scripts')
    @vite('resources/js/components/box/video.js')
@endpushonce
