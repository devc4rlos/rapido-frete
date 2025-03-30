@props([
    'title' => '',
    'description' => '',
    'image' => '',
    'reverse' => false,
    'href' => '',
    'class' => '',
])

<div @class([
    'grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 max-w-5xl mx-auto p-5',
    $class,
])>
    <div @class([
        'box w-full max-w-lg h-full max-h-[400px] bg-gray-100 px-5 py-10 border border-gray-200 rounded-2xl',
        'md:order-2' => $reverse,
    ])>
        <img src="{{ $image }}" alt="" class="w-full h-full object-contain">
    </div>
    <div class="max-w-lg flex flex-col gap-5 justify-center">
        <h3 class="font-semibold font-title text-2xl md:text-3xl leading-[150%]">{{ $title }}</h3>
        <p class="font-title md:text-xl leading-[150%]">{{ $description }}</p>
        <x-button-main :href="$href" class="w-full md:w-fit">Ver detalhes</x-button-main>
    </div>
</div>
