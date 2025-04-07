<div
    @class([
        'hidden lg:flex gap-3',
        $class,
    ])
    {{ $attributes }}>
    @foreach($getSocialMedia() as $nameSocialMedia => $itemSocialMedia)
        <x-molecules.link-icon>
            <x-slot:icon href="{{ $itemSocialMedia['links']['url'] }}">
                <x-dynamic-component component="icons.{{ $nameSocialMedia }}" />
            </x-slot:icon>
        </x-molecules.link-icon>
    @endforeach
</div>
