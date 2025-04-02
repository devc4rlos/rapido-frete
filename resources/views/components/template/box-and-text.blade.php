@props([
    'class' => '',
    'title',
    'subtitle',
    'content',
    'footer',
    'reverse' => false,
])

<section class="p-4 {{ $class }}">
    <div class="container my-10">
        <x-title-section class="mb-10 animate">
            {{ $title }}
        </x-title-section>
        <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-10 pb-5">
            <div @class([
                'md:order-2' => $reverse
            ])>
                {{ $box }}
            </div>
            <div @class([
                'flex flex-col gap-5 md:max-w-lg w-full animate',
                'md:order-1 from-left ml-auto' => $reverse,
                'from-right' => !$reverse
            ])>
                <x-subtitle-section>
                    {{ $subtitle }}
                </x-subtitle-section>

                {{ $content }}

                <div class="flex flex-col gap-5">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</section>
