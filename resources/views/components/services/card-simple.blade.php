@props([
    'title' => '',
    'text' => '',
    'href' => '#',
    'buttonText' => '',
 ])

<div class="border p-5 border-light rounded-lg flex flex-col gap-5">
    <h3 class="font-title text-xl font-semibold">{{ $title }}</h3>
    <x-text>{{ $text }}</x-text>
    <x-link-main :href="$href" target="_self">{{ $buttonText }}</x-link-main>
</div>
