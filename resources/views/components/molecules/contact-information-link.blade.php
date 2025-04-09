<a
    @class([
        'flex gap-2 group/link-info items-center cursor-pointer animate from-right',
        $class,
    ])
    href="{{ $href }}"
{{ $attributes }}>
    <div class="w-10 h-10 border border-info-100 group-hover/link-info:border-info-100 group-hover/link-info:bg-light/80 transition-all rounded-full flex justify-center items-center">
        {{ $icon }}
    </div>
    <p class="group-hover/link-info:text-brand-400 flex-1 text-bold transition-all leading-7">{{ $text }}</p>
</a>
