<header>
    <nav class="flex container p-4 justify-between items-center">
        <x-logo href="{{ route('home') }}" />
        <div class="hidden lg:block">
            <x-header.menu />
        </div>
        <button class="lg:hidden cursor-pointer hover:text-brand-500" id="hamburger">
            <x-icons.bars size="2xl" />
        </button>
        <x-header.overlay />
    </nav>
</header>

@push('scripts')
    @vite('resources/js/components/header/index.js')
@endpush
