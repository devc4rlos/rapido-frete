<div
    @class([
        'animate',
        'from-right' => $reverse,
        'from-left' => !$reverse,
        $class,
    ])
{{ $attributes }}>
    <h5 class="font-title text-xl leading-8 lg:text-2xl font-bold text-left mb-2">
        {{ $id }}. {{ $title }}
    </h5>
    <x-atoms.text class="lg:pl-8">
        {{ $text }}
    </x-atoms.text>
</div>
