<div
    @class([
        $class,
    ])
{{ $attributes }}>
    <div class="flex gap-2 mb-1 items-center">
        {{ $icon }}
        <x-atoms.text>{{ $title }}</x-atoms.text>
    </div>
    <x-atoms.text class="text-default-600">{{ $text }}</x-atoms.text>
</div>
