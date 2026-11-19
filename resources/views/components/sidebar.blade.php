
{{-- Overlay --}}
<div
    id="sidebar-overlay"
    class="pointer-events-none fixed inset-0 z-[70] bg-black/50 opacity-0 transition-opacity duration-300"
    aria-hidden="true"
></div>

{{-- Sidebar --}}
<aside
    id="site-sidebar"
    class="fixed inset-y-0 right-0 z-[80] flex w-[min(88vw,380px)] translate-x-full flex-col bg-white shadow-2xl transition-transform duration-300 ease-in-out"
    role="dialog"
    aria-modal="true"
    aria-label="Navigation menu"
    aria-hidden="true"
    inert
>
    <div class="flex items-center justify-between border-b border-gray-200 px-6 py-5">
    <a
        href="{{ route('home') }}"
        aria-label="PT Wira Griya Home"
        class="inline-flex items-center rounded-sm transition focus:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2"
    >
        <img
            src="{{ asset('assets/images/wira.webp') }}"
            alt="Wira Griya"
            class="h-10 w-auto max-w-[180px] object-contain sm:h-12"
        >
    </a>

        <button
            id="sidebar-close"
            type="button"
            aria-label="Close navigation menu"
            class="flex size-12 items-center justify-center rounded-lg text-navy transition hover:bg-gray-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                class="size-7"
                aria-hidden="true"
            >
                <path d="m18 6-12 12M6 6l12 12"></path>
            </svg>
        </button>
    </div>



<nav class="flex-1 overflow-y-auto px-5 py-6" aria-label="Main navigation">
    <ul class="space-y-2">

        {{-- Home --}}
        <li>
            <a href="/"
               class="flex items-center gap-4 rounded-lg px-4 py-4 text-base text-dark transition hover:bg-light hover:text-primary active:scale-[0.99]">
                <svg class="size-7 shrink-0" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     aria-hidden="true">
                    <path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1z"/>
                </svg>
                <span class="text-lg font-bold">Home</span>
            </a>
        </li>

        {{-- Products --}}
        <li>
            <a href="/product"
               class="flex items-center gap-4 rounded-lg px-4 py-4 text-base text-dark transition hover:bg-light hover:text-primary active:scale-[0.99]">
                <svg class="size-7 shrink-0" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     aria-hidden="true">
                    <path d="M3 7h18l-2 13H5L3 7Z"/>
                    <path d="M8 7a4 4 0 0 1 8 0"/>
                </svg>
                <span class="text-lg font-bold">Products</span>
            </a>
        </li>

        {{-- About Us --}}
        <li>
            <a href="/about-us"
               class="flex items-center gap-4 rounded-lg px-4 py-4 text-base text-dark transition hover:bg-light hover:text-primary active:scale-[0.99]">
                <svg class="size-7 shrink-0" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     aria-hidden="true">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21v-2a8 8 0 0 1 16 0v2"/>
                </svg>
                <span class="text-lg font-bold">About Us</span>
            </a>
        </li>

        {{-- News & Events --}}
        <li>
            <a href="/news"
               class="flex items-center gap-4 rounded-lg px-4 py-4 text-base text-dark transition hover:bg-light hover:text-primary active:scale-[0.99]">
                <svg class="size-7 shrink-0" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     aria-hidden="true">
                    <rect x="3" y="4" width="18" height="17" rx="2"/>
                    <path d="M16 2v4M8 2v4M3 10h18M7 14h4M7 17h7"/>
                </svg>
                <span class="text-lg font-bold">News &amp; Events</span>
            </a>
        </li>

        {{-- Contact Us --}}
        <li>
            <a href="/contact-us"
               class="flex items-center gap-4 rounded-lg px-4 py-4 text-base text-dark transition hover:bg-light hover:text-primary active:scale-[0.99]">
                <svg class="size-7 shrink-0" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     aria-hidden="true">
                    <rect x="3" y="5" width="18" height="14" rx="2"/>
                    <path d="m3 7 9 6 9-6"/>
                </svg>
                <span class="text-lg font-bold">Contact Us</span>
            </a>
        </li>
    </ul>
</nav>
</aside>
