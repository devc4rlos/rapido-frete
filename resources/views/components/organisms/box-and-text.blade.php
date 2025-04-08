<x-organisms.container-with-title
    :title="$title"
    :class="$class"
    :active-background="$activeBackground"
{{ $attributes }}>
    <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-10 pb-5">
        <div
            @class([
                'md:order-2' => $reverse
            ])>
            {{ $box }}
        </div>
        <div @class([
                'flex flex-col gap-5 md:max-w-lg w-full animate gap-8 md:gap-5 md:pb-10 lg:pb-20',
                'md:order-1 from-left ml-auto' => $reverse,
                'from-right' => !$reverse
            ])>
            <x-atoms.subtitle-section>
                {{ $subtitle }}
            </x-atoms.subtitle-section>

            {{ $content }}

            <div class="flex flex-col gap-5">
                {{ $footer }}
            </div>
        </div>
    </div>
</x-organisms.container-with-title>
