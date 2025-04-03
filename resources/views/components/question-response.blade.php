@props([
    'question' => '',
    'response' => '',
])

<div class="grid grid-cols-1 grid-rows-[auto_1fr] animate faq-question-response group/question">
    <button type="button" class="flex bg-white rounded-lg group-[.active]/question:rounded-b-none justify-between items-center cursor-pointer gap-5 p-5 faq-question">
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
    <div class="faq-response bg-white/90 h-0 rounded-b-lg overflow-hidden">
        <div class="border-t border-default-100/50">
            <x-text class="px-4 py-3">{{ $response }}</x-text>
        </div>
    </div>
</div>

@pushonce('body')
    @vite('resources/js/components/question-response.js')
@endpushonce
