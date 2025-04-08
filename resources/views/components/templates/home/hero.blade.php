<section
    @class([
        'p-4 min-h-80 h-[80vh] max-h-[1000px] relative bg-right-top',
        $class,
    ])
{{ $attributes }}>
    <x-atoms.home.hero-background />
    <div class="container h-full">
        <x-molecules.home.hero-information />
    </div>
</section>
