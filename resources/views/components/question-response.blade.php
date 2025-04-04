@props([
    'question' => '',
    'response' => '',
    'theme' => 'white',
])

@php
    $isThemeWhite = $theme === 'white';
    $isThemeLight = $theme === 'light';
@endphp

<div class="grid grid-cols-1 grid-rows-[auto_1fr] animate faq-question-response group/question">
    <button type="button" @class([
        'flex rounded-lg group-[.active]/question:rounded-b-none justify-between items-center cursor-pointer gap-5 p-5 faq-question',
        'bg-white' => $isThemeWhite,
        'bg-light' => $isThemeLight,
    ])>
        <x-text>{{ $question }}</x-text>
        <div class="faq-question-icon">
            <div class="hidden icon-close">
                <x-icons.minus size="lg" />
            </div>
            <div class="icon-open">
                <x-icons.plus size="lg" />
            </div>
        </div>
    </button>
    <div @class([
        'faq-response h-0 rounded-b-lg overflow-hidden',
        'bg-white/90' => $isThemeWhite,
        'bg-light/90' => $isThemeLight,
    ])>
        <div class="border-t border-default-100/50">
            <x-text class="px-4 py-3">{{ $response }}</x-text>
        </div>
    </div>
</div>

@pushonce('scripts')
    @vite('resources/js/components/question-response.js')
@endpushonce
