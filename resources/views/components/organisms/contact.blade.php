<div
    @class([
        'flex flex-col lg:flex-row items-center lg:items-start justify-center gap-16',
        $class,
    ])
{{ $attributes }}>
    <x-organisms.contact-form />
    <x-molecules.contact-information />
</div>
