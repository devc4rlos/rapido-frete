@props(['href' => '#'])

<a target="_blank" href="{{ $href }}" class="bg-brand-400 hover:bg-brand-500 transition duration-300 p-4 text-light rounded-md p- text-normal text-nowrap">
    {{ $slot }}
</a>
