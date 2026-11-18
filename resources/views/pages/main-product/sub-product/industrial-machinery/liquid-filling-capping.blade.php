@extends('layouts.app')
@section('title', 'Liquid Filling & Capping | PT Wira Griya')
@section('description', 'Liquid Filling & Capping products and equipment from PT Wira Griya partner brands.')
@section('content')
    @include('components.header')

@php
    $products = [
        [
            'brand' => 'PARTNER SELECTION',
            'model' => 'Liquid Filling & Capping Line',
            'type' => 'Project-Based Filling System',
            'business' => 'Food, Beverage, Chemical & Personal Care',
            'image' => 'assets/images/home/industrial-machinery.png',
            'gallery' => [
            'assets/images/home/industrial-machinery.png'
        ],
            'description' => 'A project-based liquid filling and capping configuration. The final manufacturer and machine model must be confirmed against the partner catalogue and the product’s filling requirements.',
            'features' => [
            'Filling system selection based on liquid viscosity and foaming behaviour',
            'Container and closure format to be confirmed',
            'Line speed, filling accuracy and capping method to be specified for the project'
        ],
            'specs' => [
            'Brand / Manufacturer' => 'To be confirmed from the approved partner portfolio',
            'Model' => 'Project-based configuration',
            'Product Type' => 'Liquid filling and capping line',
            'Required Information' => 'Liquid characteristics, fill volume, container type, cap type and target output',
            'Technical Datasheet' => 'Not available in the supplied partner material; confirm before publication.'
        ]
        ],
    ];
@endphp

<section class="relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]">
    <picture class="absolute inset-0 block h-full w-full">
        <source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.jpg') }}">
        <img
            src="{{ asset('assets/images/banner/banner-d.jpg') }}"
            alt="Liquid filling and capping production line"
            class="absolute inset-0 h-full w-full object-cover object-center"
            fetchpriority="high"
        >
    </picture>
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/5"></div>
    <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-28 pb-8 md:px-10 md:pt-32">
        <div class="max-w-xl">
            <p class="text-xl font-bold uppercase tracking-wide text-[#183E6E]">Our Products</p>
            <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-[#162841] md:text-5xl">
                Industrial Solutions<br>
                for a <span class="text-[#F5B940]">Better Tomorrow</span>
            </h1>
            <p class="mt-3 max-w-md text-base leading-relaxed text-[#162841]/90">
                High-quality machinery and equipment to support your production process, improve efficiency, and meet the evolving needs of your industry.
            </p>
        </div>
    </div>
</section>

<section data-product-page data-fallback-image="{{ asset('assets/images/home/industrial-machinery.png') }}" data-asset-root="{{ asset('') }}" class="mx-auto w-full max-w-[1600px] px-5 pt-3 pb-8 md:px-8 md:pt-4 md:pb-10" data-products="{{ base64_encode(json_encode($products, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT)) }}">
    <a
        href="{{ url('/product/industrial-machinery') }}"
        class="hidden md:inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
    >
        <span aria-hidden="true" class="text-2xl">←</span>
        Back
    </a>

    <div class="mt-2 flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
        <div class="max-w-2xl">
            <h2 class="text-2xl font-bold text-[#183E6E] md:text-3xl">Liquid Filling & Capping</h2>
            <p class="mt-1 text-base leading-relaxed text-[#183E6E]/90">Liquid filling and capping lines depend on liquid properties, container shape, fill volume and closure type. The partner assets supplied for this project do not identify a confirmed dedicated liquid filling-and-capping model, so the product entry is marked for partner confirmation rather than assigned an unverified manufacturer.</p>
        </div>
        <div class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 lg:w-auto lg:min-w-[330px] lg:grid-cols-1">
            <div role="search" class="flex h-10 items-center overflow-hidden rounded-md border border-gray-300 bg-white">
                <label for="liquid-filling-capping-search" class="sr-only">Search products</label>
                <input
                    id="liquid-filling-capping-search"
                    type="search"
                    placeholder="Search Products..."
                    aria-label="Search products"
                    class="min-w-0 flex-1 px-3 text-base outline-none placeholder:text-gray-400 focus:ring-1 focus:ring-[#1455D9]"
                >
                <button
                    type="button"
                    id="liquid-filling-capping-search-button"
                    aria-label="Search products"
                    class="flex h-full w-10 shrink-0 cursor-pointer items-center justify-center text-[#183E6E] transition hover:bg-gray-100"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-wrap items-center justify-end gap-2">
                <label for="liquid-filling-capping-sort" class="shrink-0 text-base text-[#183E6E]">Sort by:</label>
                <select id="liquid-filling-capping-sort" class="h-10 min-w-0 flex-1 cursor-pointer rounded-md border border-gray-300 bg-white px-3 text-base font-semibold text-primary outline-none focus:border-[#1455D9] sm:flex-none sm:max-w-[170px]">
                    <option value="latest">Latest First</option>
                    <option value="az">A–Z</option>
                    <option value="za">Z–A</option>
                </select>
            </div>
        </div>
    </div>

    <div id="liquid-filling-capping-product-grid" class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($products as $index => $product)
            <article
                class="liquid-filling-capping-product-card group flex min-h-[150px] min-w-0 overflow-hidden rounded-md border border-[#536FFF] bg-white transition hover:border-[#1455D9] hover:shadow-md"
                data-brand="{{ $product['brand'] }}"
                data-model="{{ $product['model'] }}"
                data-business="{{ $product['business'] }}"
                data-index="{{ $index }}"
            >
                <div class="flex w-[42%] shrink-0 items-center justify-center p-3">
                    <img
                        src="{{ asset($product['image']) }}"
                        alt="{{ $product['brand'] }} {{ $product['model'] }}"
                        class="h-32 w-full object-contain transition duration-300 group-hover:scale-105"
                        loading="lazy"
                        data-fallback-src="{{ asset('assets/images/home/industrial-machinery.png') }}" onerror="this.onerror=null;this.src=this.dataset.fallbackSrc;"
                    >
                </div>
                <div class="flex min-w-0 flex-1 flex-col py-3 pr-2">
                    <p class="text-sm font-bold text-[#536FFF]">{{ $product['brand'] }}</p>
                    <h3 class="mt-1 break-words text-base font-bold text-[#183E6E]">{{ $product['model'] }}</h3>
                    <p class="text-sm leading-snug text-[#183E6E]">{{ $product['type'] }}</p>
                    <button type="button" class="liquid-filling-capping-view-details mt-auto inline-flex cursor-pointer items-center gap-1 pt-3 text-left text-sm font-semibold text-[#536FFF] transition hover:text-[#183E6E]" data-product-index="{{ $index }}">
                        View Details <span aria-hidden="true">→</span>
                    </button>
                </div>
            </article>
        @endforeach
    </div>

    <div id="liquid-filling-capping-empty-state" class="hidden py-12 text-center text-sm text-gray-500">
        No products found. Try another keyword.
    </div>
    <nav id="liquid-filling-capping-pagination" aria-label="Product pagination" class="mt-8 flex flex-wrap items-center justify-center gap-1.5"></nav>
</section>

<div id="liquid-filling-capping-product-modal" class="fixed inset-0 z-[100] hidden items-center justify-center overflow-y-auto bg-black/50 p-2 sm:p-5" aria-hidden="true">
    <div role="dialog" aria-modal="true" aria-labelledby="liquid-filling-capping-modal-title" class="relative my-auto w-full max-w-[1250px] rounded-2xl border-2 border-[#168FE5] bg-white p-5 shadow-xl sm:p-8 lg:p-10">
        <button type="button" id="liquid-filling-capping-modal-close" aria-label="Close product details" class="absolute right-4 top-3 z-10 flex size-10 cursor-pointer items-center justify-center text-4xl font-light text-[#536FFF] transition hover:scale-110 sm:right-6 sm:top-4">&times;</button>
        <div class="grid grid-cols-1 gap-7 pt-5 lg:grid-cols-[360px_minmax(0,1fr)] lg:gap-10">
            <div class="min-w-0">
                <div class="relative flex h-[280px] items-center justify-center overflow-hidden rounded-lg border border-gray-400 bg-white sm:h-[340px] lg:h-[340px]">
                    <img id="liquid-filling-capping-modal-image" src="" alt="" class="h-full w-full object-contain p-3">
                    <button type="button" id="liquid-filling-capping-gallery-prev" aria-label="Previous product image" class="absolute left-3 top-1/2 flex size-10 -translate-y-1/2 items-center justify-center rounded-full border border-gray-200 bg-white/90 text-2xl font-semibold text-[#183E6E] shadow transition hover:bg-[#536FFF] hover:text-white disabled:cursor-not-allowed disabled:opacity-30">&#8249;</button>
                    <button type="button" id="liquid-filling-capping-gallery-next" aria-label="Next product image" class="absolute right-3 top-1/2 flex size-10 -translate-y-1/2 items-center justify-center rounded-full border border-gray-200 bg-white/90 text-2xl font-semibold text-[#183E6E] shadow transition hover:bg-[#536FFF] hover:text-white disabled:cursor-not-allowed disabled:opacity-30">&#8250;</button>
                    <span id="liquid-filling-capping-gallery-counter" class="absolute bottom-3 right-3 rounded-full bg-black/60 px-3 py-1 text-xs font-semibold text-white">1 / 1</span>
                </div>
                <div id="liquid-filling-capping-modal-thumbnails" class="mt-4 flex flex-wrap gap-2"></div>
            </div>
            <div class="min-w-0 lg:pt-4">
                <div class="flex flex-wrap gap-2 pr-10">
                    <span class="rounded-lg bg-[#DCD9FF] px-2 py-1 text-sm font-bold leading-none text-[#536FFF]">Industrial Machinery</span>
                    <span class="rounded-lg bg-[#DCD9FF] px-2 py-1 text-sm font-bold leading-none text-[#536FFF]">Liquid Filling & Capping</span>
                </div>
                <p id="liquid-filling-capping-modal-brand" class="mt-5 text-xl font-bold text-[#536FFF] sm:text-2xl"></p>
                <h2 id="liquid-filling-capping-modal-title" class="mt-1 break-words text-4xl font-bold leading-tight text-[#183E6E] sm:text-5xl lg:text-6xl"></h2>
                <p id="liquid-filling-capping-modal-type" class="mt-1 text-lg font-bold text-[#183E6E] sm:text-xl"></p>
                <p id="liquid-filling-capping-modal-description" class="mt-4 text-base leading-relaxed text-[#183E6E]"></p>
                <h3 class="mt-4 text-xl font-bold text-[#183E6E]">Key Features</h3>
                <ul id="liquid-filling-capping-modal-features" class="mt-2 list-disc space-y-2 pl-5 text-base leading-relaxed text-[#183E6E]"></ul>
            </div>
        </div>
        <div class="mt-6">
            <h3 class="mb-2 text-xl font-bold text-[#183E6E] sm:text-2xl">Key Specifications</h3>
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full min-w-[320px] border-collapse text-left text-base text-[#183E6E]">
                    <thead class="bg-[#183E6E] text-white"><tr>
                        <th scope="col" class="w-1/3 border-r border-white/20 px-4 py-3 text-sm font-bold sm:text-base">Specification</th>
                        <th scope="col" class="px-4 py-3 text-sm font-bold sm:text-base">Details</th>
                    </tr></thead>
                    <tbody id="liquid-filling-capping-modal-specs" class="divide-y divide-gray-200 bg-white"></tbody>
                </table>
            </div>
            <p class="mt-3 text-sm leading-relaxed text-gray-500">Product information is based on the partner product range. Confirm the final configuration and latest technical specifications with PT Wira Griya before ordering.</p>
        </div>
    </div>
</div>

@include('components.footer')

@push('scripts')
<script>
(() => {
    const init = () => {
        const pageRoot = document.querySelector("[data-product-page]");
        let products = [];

        try {
            const encodedProducts = pageRoot?.dataset.products || '';
            const binaryJson = encodedProducts ? atob(encodedProducts) : '';
            const utf8Json = binaryJson
                ? new TextDecoder().decode(Uint8Array.from(binaryJson, character => character.charCodeAt(0)))
                : '[]';
            products = JSON.parse(utf8Json);
        } catch (error) {
            console.error('Unable to read product data.', error);
            return;
        }
        const searchInput = document.getElementById('liquid-filling-capping-search');
        const sortSelect = document.getElementById('liquid-filling-capping-sort');
        const cards = Array.from(document.querySelectorAll('.liquid-filling-capping-product-card'));
        const grid = document.getElementById('liquid-filling-capping-product-grid');
        const emptyState = document.getElementById('liquid-filling-capping-empty-state');
        const pagination = document.getElementById('liquid-filling-capping-pagination');
        const modal = document.getElementById('liquid-filling-capping-product-modal');
        const modalClose = document.getElementById('liquid-filling-capping-modal-close');
        const modalImage = document.getElementById('liquid-filling-capping-modal-image');
        const thumbnails = document.getElementById('liquid-filling-capping-modal-thumbnails');
        const previousButton = document.getElementById('liquid-filling-capping-gallery-prev');
        const nextButton = document.getElementById('liquid-filling-capping-gallery-next');
        const galleryCounter = document.getElementById('liquid-filling-capping-gallery-counter');
        const fallbackImage = pageRoot?.dataset.fallbackImage || "";
        const assetRoot = pageRoot?.dataset.assetRoot || "";
        const perPage = 8;
        let currentPage = 1;
        let activeGallery = [];
        let activeGalleryIndex = 0;

        if (!searchInput || !sortSelect || !grid || !modal || !modalClose) return;

        const getFilteredProducts = () => {
            const query = searchInput.value.trim().toLowerCase();
            const filtered = products.filter((product) => {
                const haystack = [product.brand, product.model, product.type, product.description, product.business, ...(product.features || [])].join(' ').toLowerCase();
                return haystack.includes(query);
            });
            if (sortSelect.value === 'az') filtered.sort((a,b) => `${a.brand} ${a.model}`.localeCompare(`${b.brand} ${b.model}`));
            else if (sortSelect.value === 'za') filtered.sort((a,b) => `${b.brand} ${b.model}`.localeCompare(`${a.brand} ${a.model}`));
            else filtered.sort((a,b) => products.indexOf(a) - products.indexOf(b));
            return filtered;
        };

        const renderPagination = (totalPages) => {
            pagination.replaceChildren();
            pagination.classList.toggle('hidden', totalPages <= 1);
            if (totalPages <= 1) return;
            const addButton = (label, page, options = {}) => {
                const button = document.createElement('button');
                button.type = 'button';
                button.textContent = label;
                button.disabled = Boolean(options.disabled);
                button.className = [
                    'flex h-9 min-w-9 items-center justify-center rounded border px-3 text-sm transition',
                    options.active ? 'border-[#536FFF] bg-[#536FFF] font-bold text-white' : 'border-gray-200 bg-white text-[#536FFF] hover:border-[#536FFF]',
                    button.disabled ? 'cursor-not-allowed opacity-40' : 'cursor-pointer'
                ].join(' ');
                button.addEventListener('click', () => { currentPage = page; renderProducts(); });
                pagination.appendChild(button);
            };
            addButton('‹', Math.max(1, currentPage - 1), { disabled: currentPage === 1 });
            for (let page = 1; page <= totalPages; page++) addButton(String(page), page, { active: page === currentPage });
            addButton('›', Math.min(totalPages, currentPage + 1), { disabled: currentPage === totalPages });
        };

        const renderProducts = () => {
            const filtered = getFilteredProducts();
            const totalPages = Math.ceil(filtered.length / perPage);
            currentPage = totalPages === 0 ? 1 : Math.min(currentPage, totalPages);
            const start = (currentPage - 1) * perPage;
            const visible = new Set(filtered.slice(start, start + perPage).map(product => products.indexOf(product)));
            cards.forEach(card => card.classList.toggle('hidden', !visible.has(Number(card.dataset.index))));
            emptyState.classList.toggle('hidden', filtered.length !== 0);
            grid.classList.toggle('hidden', filtered.length === 0);
            renderPagination(totalPages);
        };

        const showGalleryImage = (index) => {
            if (!activeGallery.length) return;
            activeGalleryIndex = (index + activeGallery.length) % activeGallery.length;
            const path = activeGallery[activeGalleryIndex];
            modalImage.onerror = () => { modalImage.onerror = null; modalImage.src = fallbackImage; };
            modalImage.src = assetRoot + path;
            modalImage.alt = 'Product image ' + (activeGalleryIndex + 1);
            galleryCounter.textContent = `${activeGalleryIndex + 1} / ${activeGallery.length}`;
            previousButton.disabled = activeGallery.length <= 1;
            nextButton.disabled = activeGallery.length <= 1;
            thumbnails.querySelectorAll('button').forEach((button, index) => {
                button.classList.toggle('border-[#168FE5]', index === activeGalleryIndex);
                button.classList.toggle('ring-1', index === activeGalleryIndex);
                button.classList.toggle('ring-[#168FE5]', index === activeGalleryIndex);
            });
        };

        const openProductModal = (index) => {
            const product = products[index];
            if (!product) return;
            document.getElementById('liquid-filling-capping-modal-brand').textContent = product.brand;
            document.getElementById('liquid-filling-capping-modal-title').textContent = product.model;
            document.getElementById('liquid-filling-capping-modal-type').textContent = product.type;
            document.getElementById('liquid-filling-capping-modal-description').textContent = product.description;

            const featureList = document.getElementById('liquid-filling-capping-modal-features');
            featureList.replaceChildren();
            (product.features || []).forEach(feature => {
                const item = document.createElement('li');
                item.textContent = feature;
                featureList.appendChild(item);
            });

            const specsBody = document.getElementById('liquid-filling-capping-modal-specs');
            specsBody.replaceChildren();
            Object.entries(product.specs || {}).forEach(([label, value]) => {
                if (!value) return;
                const row = document.createElement('tr');
                row.className = 'transition-colors odd:bg-white even:bg-[#F5F9FF] hover:bg-blue-50';
                const heading = document.createElement('th');
                heading.scope = 'row';
                heading.className = 'w-1/3 border-r border-gray-200 px-4 py-3 align-top text-sm font-semibold text-[#183E6E] sm:text-base';
                heading.textContent = label;
                const cell = document.createElement('td');
                cell.className = 'px-4 py-3 align-top text-sm leading-relaxed text-gray-800 sm:text-base';
                cell.textContent = value;
                row.append(heading, cell);
                specsBody.appendChild(row);
            });

            activeGallery = [...new Set((product.gallery?.length ? product.gallery : [product.image]).filter(Boolean))].slice(0, 5);
            activeGalleryIndex = 0;
            thumbnails.replaceChildren();
            activeGallery.forEach((path, imageIndex) => {
                const button = document.createElement('button');
                button.type = 'button';
                button.setAttribute('aria-label', `Show product image ${imageIndex + 1}`);
                button.className = 'flex h-14 w-14 shrink-0 items-center justify-center overflow-hidden rounded-lg border border-gray-300 bg-white p-1 transition hover:border-[#168FE5]';
                const image = document.createElement('img');
                image.src = assetRoot + path;
                image.alt = product.model + ' image ' + (imageIndex + 1);
                image.className = 'h-full w-full object-contain';
                image.onerror = () => button.classList.add('hidden');
                button.appendChild(image);
                button.addEventListener('click', () => showGalleryImage(imageIndex));
                thumbnails.appendChild(button);
            });
            previousButton.onclick = () => showGalleryImage(activeGalleryIndex - 1);
            nextButton.onclick = () => showGalleryImage(activeGalleryIndex + 1);
            showGalleryImage(0);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('overflow-hidden');
            modalClose.focus();
        };

        const closeProductModal = () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('overflow-hidden');
        };

        searchInput.addEventListener('input', () => { currentPage = 1; renderProducts(); });
        document.getElementById('liquid-filling-capping-search-button')?.addEventListener('click', () => { currentPage = 1; renderProducts(); });
        sortSelect.addEventListener('change', () => { currentPage = 1; renderProducts(); });
        grid.addEventListener('click', (event) => {
            const target = event.target instanceof Element ? event.target : event.target.parentElement;
            const button = target?.closest('.liquid-filling-capping-view-details');
            if (!button || !grid.contains(button)) return;
            event.preventDefault();
            openProductModal(Number(button.dataset.productIndex));
        });
        modalClose.addEventListener('click', closeProductModal);
        modal.addEventListener('click', (event) => { if (event.target === modal) closeProductModal(); });
        document.addEventListener('keydown', (event) => { if (event.key === 'Escape' && !modal.classList.contains('hidden')) closeProductModal(); });
        renderProducts();
    };

    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init, { once: true });
    else init();
})();
</script>
@endpush
@endsection
