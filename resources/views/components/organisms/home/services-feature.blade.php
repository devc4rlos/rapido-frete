<div
    @class([
        'grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 max-w-5xl mx-auto p-5',
        $class,
    ])
{{ $attributes }}>
    <div @class([
        'box w-full max-w-lg h-full max-h-[400px] bg-gray-100 px-5 py-10 border border-gray-200 rounded-2xl',
        'md:order-2' => $reverse,
    ])>
        <img src="{{ $image }}" alt="" class="w-full h-full object-contain">
    </div>
    <x-molecules.home.services-feature-information
        :title="$title"
        :description="$description"
        :href="$href"
    />
</div>
