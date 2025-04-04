@props([
    'state' => '',
    'cities' => []
])

<div>
    <h4 class="font-text font-bold leading-8 mb-5">{{ $state }}</h4>
    <ul class="flex flex-col gap-3">
        @foreach($cities as $city)
            <li class="animate">
                <x-text-large>{{ $city }}</x-text-large>
            </li>
        @endforeach
    </ul>
</div>
