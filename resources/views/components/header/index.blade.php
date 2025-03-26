<header>
    <nav class="flex container p-4 justify-between items-center">
        <x-logo />
        <div class="hidden lg:block">
            <x-header.menu />
        </div>
        <button class="lg:hidden cursor-pointer hover:text-brand-500" id="hamburger">
            <x-icons.bars size="2xl" />
        </button>
        <div class="hidden fixed top-0 left-0 w-screen h-screen" id="overlay">
            <div class="absolute shadow-highlight translate-x-full top-0 right-0 z-50 w-sm max-w-[90%] bg-info-100 h-screen p-5" id="menuMobile">
                <button class="close-overlay ml-auto block cursor-pointer hover:text-brand-500">
                    <x-icons.close size="3xl" />
                </button>
                <x-header.menu is-vertical />
            </div>
            <div class="fixed w-screen h-screen z-40 backdrop-blur-[1px] bg-info-200/20 opacity-0 close-overlay" id="backgroundOverlay"></div>
        </div>
    </nav>
</header>

@push('body')
    @vite('resources/js/components/header/index.js')
@endpush
