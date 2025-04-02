@props([
    'name' => '',
    'location' => '',
    'evaluation' => '',
    'text' => '',
    'class' => '',
])

<div @class([
    'bg-light/20 shadow p-5 flex rounded-lg gap-5',
    $class,
])>
    <div class="hidden sm:block">
        <x-icons.quote-left size="xl" class="text-danger-600" />
    </div>
    <div>
         <x-text>
             <span class="sm:hidden mr-2">
                <x-icons.quote-left size="xl" class="text-danger-600" />
            </span>
             {{ $text }}
         </x-text>

        <div class="bg-default-600/20 w-full h-0.5 rounded-lg my-5"></div>

        <div class="flex justify-between items-center gap-3 max-w-full">
            <x-text class="flex-1">{{ $name }} - {{ $location }}</x-text>
            <div>
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $evaluation)
                        <x-icons.star size="md" class="text-warning-400" />
                    @else
                        <x-icons.star-regular size="md" />
                    @endif
                @endfor
            </div>
        </div>
    </div>
</div>
