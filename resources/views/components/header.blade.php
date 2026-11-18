<header class="site-header absolute inset-x-0 top-0 z-40 flex items-start justify-between gap-3 px-4 py-3 sm:px-5 md:px-10 md:py-5">

    <div class="ml-auto flex items-start justify-end gap-2.5 sm:gap-3">
        <div id="search-container" class="flex items-center overflow-hidden rounded-md bg-white/95 shadow-sm transition-all duration-300">
            <form id="search-form" action="{{ route('product.index') }}" method="GET" class="flex items-center" role="search">
                <input
                    id="search-input"
                    type="search"
                    name="q"
                    value="{{ request()->routeIs('product.index') ? request('q') : '' }}"
                    placeholder="Search products..."
                    aria-label="Search product categories"
                    autocomplete="off"
                    required
                    class="w-0 min-w-0 bg-transparent px-0 py-3 text-sm text-dark outline-none transition-all duration-300 placeholder:text-gray-400 focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-[#1455D9]"
                >
                <button id="search-toggle" type="button" aria-label="Open search" aria-expanded="false"
                        class="flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-md bg-white/95 text-navy shadow-sm transition duration-200 hover:bg-gray-100 active:scale-95 sm:size-11">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-5" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-4-4"></path></svg>
                </button>
            </form>
        </div>
        <button id="sidebar-open" type="button" aria-label="Open navigation menu" aria-controls="site-sidebar" aria-expanded="false"
                class="flex size-10 cursor-pointer items-center justify-center rounded-md bg-white/95 text-navy shadow-sm transition duration-200 hover:bg-gray-100 active:scale-95 sm:size-11">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"></path></svg>
        </button>
    </div>
</header>