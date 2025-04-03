@props([
    'type' => '',
    'class' => '',
    'options' => [],
])

<select @class([
    'border p-3 rounded-lg w-full border-default-200 active:border-brand-400/50 outline-0',
    $class
]) {{ $attributes }}>
    @foreach($options as $key => $option)
        <option value="{{ $key }}">{{ $option }}</option>
    @endforeach
</select>

