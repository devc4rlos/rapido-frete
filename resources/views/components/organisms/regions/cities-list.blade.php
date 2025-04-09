<div
    @class([
        $class,
    ])
{{ $attributes }}>
    <h4 class="font-text font-bold leading-8 mb-5 animate">{{ $state }}</h4>
    <ul class="flex flex-col gap-3">
        @foreach($cities as $city)
            <li class="animate">
                <x-atoms.text>{{ $city }}</x-atoms.text>
            </li>
        @endforeach
    </ul>
</div>
