<div
    @class([
        'flex gap-3',
        $class,
    ])
{{ $attributes }}>
    @for($i = 0; $i < 3; $i++)
        <div class="w-2 h-2 rounded-full bg-amber-600 circle-loading"></div>
    @endfor
</div>
