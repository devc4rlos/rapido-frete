<div
    @class([
        'card w-full group/timeline lg:w-2/4 relative ps-10 lg:px-14',
        'lg:ml-auto' => $reverse,
        'lg:mr-auto' => $reverse === false,
    ])
{{ $attributes }}>
    <x-molecules.home.timeline-step-information
        :id="$id"
        :title="$title"
        :text="$text"
        :reverse="$reverse"
    />
    <div
        @class([
            'bg-gray-300 transition-all group-[.active]/timeline:bg-brand-100 rounded-full z-10 w-10 h-10 flex justify-center items-center top-0 max-lg:-left-5 absolute icon-card',
            'lg:-left-5' => $id % 2 === 0,
            'lg:-right-5' => $id % 2 === 1,
        ])
    >
        {{ $icon }}
    </div>
</div>
