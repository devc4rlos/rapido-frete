<div
    @class([
        $class,
    ])
{{ $attributes }}>
    <h5 class="font-title font-bold text-2xl leading-6">{{ $title }}</h5>
    <ul class="flex flex-col gap-2 mt-6">
        {{ $slot }}
    </ul>
</div>
