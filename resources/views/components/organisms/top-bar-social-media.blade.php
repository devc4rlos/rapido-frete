<div
    @class([
        'hidden lg:flex gap-5',
        $class,
    ])
    {{ $attributes }}>
    @foreach($getSocialMedia as $nameSocialMedia => $itemSocialMedia)
        <x-molecules.link-icon href="{{ $itemSocialMedia['links']['url'] }}" target="_blank">
            <x-slot:icon>
                <x-dynamic-component component="icons.{{ $nameSocialMedia }}" />
            </x-slot:icon>
        </x-molecules.link-icon>
    @endforeach
</div>
