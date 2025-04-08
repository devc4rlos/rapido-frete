<div
    @class([
        'absolute top-0 -z-1 left-0 w-full h-full bg-[#04152feb]',
        $class,
    ])
{{ $attributes }}>
    <img src="{{ asset('assets/banner-home.png') }}" alt="" class="hidden md:block w-full h-full object-cover bg-right">
    <img src="{{ asset('assets/banner-home-sm.png') }}" alt="" class="md:hidden w-full h-full object-cover bg-right">
</div>
