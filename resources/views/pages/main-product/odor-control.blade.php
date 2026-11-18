@extends('layouts.app')
@section('title', 'Odor Control | PT Wira Griya')
@section('description', 'Odor-control solutions for industrial and commercial environments.')
@section('content')
    @include('components.header')
@php
    // Product descriptions below are introductory copy; confirm detailed specs with the manufacturer.
    $products = [
        [
            'brand' => 'DEOTECH',
            'model' => 'Diffuser P-5000',
            'type' => 'Odor Control Diffuser',
            'business' => 'Industrial & Commercial',
            'image' => 'assets/images/thumbnail_product/odor.png',
            'gallery' => [
                'assets/images/thumbnail_product/odor.png',
            ],
            'description' => 'An odor-control diffuser solution intended to help manage unwanted odors in suitable indoor or commercial environments. Contact our team to confirm coverage, installation requirements, and compatible applications.',
            'features' => [
                'Odor-control diffuser product',
                'Designed for odor-management applications',
                'Ask our team about coverage and installation requirements',
                'Product configuration should be confirmed with the manufacturer',
            ],
            'specs' => [
                'Brand' => 'Deotech',
                'Model' => 'Diffuser P-5000',
                'Product Type' => 'Odor Control Diffuser',
                'Application' => 'Odor Management',
                'Technical Specifications' => 'Please contact us for the official datasheet',
            ],
        ],
        [
            'brand' => 'IONAIR®',
            'model' => 'Air Purifier – Ionising Air Treatment',
            'type' => 'Air Purification & Ionising Treatment',
            'business' => 'Indoor Air Quality',
            'image' => 'assets/images/thumbnail_product/odor.png',
            'gallery' => [
                'assets/images/thumbnail_product/odor.png',
            ],
            'description' => 'An IONAIR® air-treatment product focused on air purification and ionising treatment. Contact our team for the official product information and to confirm suitability for your facility.',
            'features' => [
                'Air purification and ionising air-treatment solution',
                'Intended for indoor air-quality applications',
                'Confirm installation and operating requirements before selection',
                'Official performance details are available on request',
            ],
            'specs' => [
                'Brand' => 'IONAIR®',
                'Model' => 'Air Purifier – Ionising Air Treatment',
                'Product Type' => 'Air Treatment Equipment',
                'Application' => 'Indoor Air Quality',
                'Technical Specifications' => 'Please contact us for the official datasheet',
            ],
        ],
        [
            'brand' => 'TOUGHCAM',
            'model' => 'Deodorizing Device',
            'type' => 'Odor-Control Device',
            'business' => 'Industrial & Commercial',
            'image' => 'assets/images/thumbnail_product/odor.png',
            'gallery' => [
                'assets/images/thumbnail_product/odor.png',
            ],
            'description' => 'A deodorizing device for odor-control needs. Contact our team to obtain the official datasheet and determine whether the product fits your application and site requirements.',
            'features' => [
                'Deodorizing device for odor-control applications',
                'Application should be assessed against site conditions',
                'Ask our team about installation and maintenance requirements',
                'Official technical specifications available on request',
            ],
            'specs' => [
                'Brand' => 'Toughcam',
                'Model' => 'Deodorizing Device',
                'Product Type' => 'Deodorizing Device',
                'Application' => 'Odor Control',
                'Technical Specifications' => 'Please contact us for the official datasheet',
            ],
        ],
    ];
@endphp
{{-- HERO BANNER --}}
<section class="relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]">
    <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"><img
        src="{{ asset('assets/images/banner/banner-d.jpg') }}"
        alt="Odor-control solutions"
        class="absolute inset-0 h-full w-full object-cover object-center"
    ></picture>
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/ to-white/5"></div>
    <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-28 pb-8 md:px-10 md:pt-32">
        <div class="max-w-xl">
            <p class="text-xl font-bold uppercase tracking-wide text-[#183E6E]">
                Our Products
            </p>
            <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-[#162841] md:text-5xl">
                Odor Control
                <br>
                    <span class="text-[#F5B940]">Air Treatment Solutions</span>
            </h1>
            <p class="mt-3 max-w-md text-base leading-relaxed text-[#162841]/90">
                Advanced air treatment solutions designed to control unwanted odors, improve air quality, and create a cleaner, more comfortable industrial environment.    
            </p>
        </div>
    </div>
</section>
{{-- PRODUCT CATALOG --}}
<section class="mx-auto w-full max-w-[1600px] px-5 pt-3 pb-8 md:px-8 md:pt-4 md:pb-10">
{{-- BACK BUTTON --}}
<a
    href="{{ route('product.index') }}"
    class="inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
\>
    <span aria-hidden="true" class="text-2xl">←</span>
    Back
</a>
    {{-- TITLE AND FILTERS --}}
    <div class="mt-2 flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
        <div class="max-w-2xl">
            <h2 class="text-2xl font-bold text-[#183E6E] md:text-3xl">
                Odor Control
            </h2>
            <p class="mt-1 text-base leading-relaxed text-[#183E6E]/90">
                Odor-control solutions help address unwanted odors and support more comfortable environments. Explore our available diffuser, air-treatment, and deodorizing products for industrial and commercial applications.
            </p>
        </div>
        <div class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 lg:w-auto lg:min-w-[330px] lg:grid-cols-1">
            {{-- PRODUCT SEARCH --}}
            <div
                role="search"
                class="flex h-10 items-center overflow-hidden rounded-md border border-gray-300 bg-white"
            >
                <label for="odor-search" class="sr-only">Search odor-control products</label>
                <input
                    id="odor-search"
                    type="search"
                    placeholder="Search Products..."
                    aria-label="Search odor-control products"
                    class="min-w-0 flex-1 px-3 text-base outline-none placeholder:text-gray-400 focus:ring-1 focus:ring-[#1455D9]"
                >
                <button
                    type="button"
                    id="odor-search-button"
                    aria-label="Search odor-control products"
                    class="flex h-full w-10 shrink-0 cursor-pointer items-center justify-center text-[#183E6E] transition hover:bg-gray-100"
                >
                    <svg
                        xmlns="http\://www\.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-4-4"/>
                    </svg>
                </button>
            </div>
            {{-- SORT AND FILTER --}}
            <div class="flex flex-wrap items-center justify-end gap-2">
                <label for="odor-sort" class="shrink-0 text-base text-[#183E6E]">
                    Sort by:
                </label>
                <select
                    id="odor-sort"
                    class="h-10 min-w-0 flex-1 cursor-pointer rounded-md border border-gray-300 bg-white px-3 text-base font-semibold text-primary outline-none focus:border-[#1455D9] sm:flex-none sm:max-w-[170px]"
                >
                    <option value="latest">Latest First</option>
                    <option value="az">A–Z</option>
                    <option value="za">Z–A</option>
                </select>
            </div>
        </div>
    </div>
    {{-- PRODUCT GRID --}}
    <div
        id="odor-product-grid"
        class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4"
    >
        @foreach ($products as $index => $product)
            <article
                class="odor-product-card group flex min-h-[150px] min-w-0 overflow-hidden rounded-md border border-[#536FFF] bg-white transition hover:border-[#1455D9] hover:shadow-md"
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
                        onerror="this.onerror=null;this.src='{{ asset('assets/images/thumbnail_product/odor.png') }}';"
                    >
                </div>
                <div class="flex min-w-0 flex-1 flex-col py-3 pr-2">
                    <p class="text-base font-bold {{ $product['brand'] === 'KAWASAKI' ? 'text-red-600' : 'text-[#536FFF]' }}">
                        {{ $product['brand'] }}
                    </p>
                    <h3 class="mt-1 text-base font-bold text-[#183E6E]">
                        {{ $product['model'] }}
                    </h3>
                    <p class="text-sm leading-snug text-[#183E6E]">
                        {{ $product['type'] }}
                    </p>
                    <button
                        type="button"
                        class="odor-view-details mt-auto inline-flex cursor-pointer items-center gap-1 pt-3 text-left text-sm font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
                        data-product-index="{{ $index }}"
                    >
                        View Details
                        <span aria-hidden="true">→</span>
                    </button>
                </div>
            </article>
        @endforeach
    </div>
    {{-- EMPTY STATE --}}
    <div
        id="odor-empty-state"
        class="hidden py-12 text-center text-sm text-gray-500"
    >
        Tidak ada produk yang ditemukan.
    </div>
    {{-- PAGINATION --}}
    <nav
        id="odor-pagination"
        aria-label="Product pagination"
        class="mt-8 flex flex-wrap items-center justify-center gap-1.5"
    ></nav>
</section>
{{-- PRODUCT DETAIL MODAL --}}
<div
    id="odor-product-modal"
    class="fixed inset-0 z-[100] hidden items-center justify-center overflow-y-auto bg-black/50 p-2 sm:p-5"
    aria-hidden="true"
\>
    <div
        role="dialog"
        aria-modal="true"
        aria-labelledby="odor-modal-title"
        class="relative my-auto w-full max-w-[1250px] rounded-2xl border-2 border-[#168FE5] bg-white p-5 shadow-xl sm:p-8 lg:p-10"
    >
        {{-- Close Button --}}
        <button
            type="button"
            id="odor-modal-close"
            aria-label="Close product details"
            class="absolute right-4 top-3 z-10 flex size-10 cursor-pointer items-center justify-center text-4xl font-light text-[#536FFF] transition hover:scale-110 sm:right-6 sm:top-4"
        >
            &times;
        </button>
        {{-- PRODUCT DETAIL CONTENT --}}
        <div class="grid grid-cols-1 gap-7 pt-5 lg:grid-cols-[360px_minmax(0,1fr)] lg:gap-10">
            {{-- LEFT: PRODUCT GALLERY --}}
            <div class="min-w-0">
                <div class="relative flex h-[280px] items-center justify-center overflow-hidden rounded-lg border border-gray-400 bg-white sm:h-[340px] lg:h-[340px]">
                    <img
                        id="odor-modal-image"
                        src=""
                        alt=""
                        class="h-full w-full object-contain p-3"
                    >
                    {{-- Manual gallery navigation --}}
                    <button
                        type="button"
                        id="odor-gallery-prev"
                        aria-label="Previous product image"
                        class="absolute left-3 top-1/2 flex size-10 -translate-y-1/2 items-center justify-center rounded-full border border-gray-200 bg-white/90 text-2xl font-semibold text-[#183E6E] shadow transition hover:bg-[#536FFF] hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                    >&#8249;</button>
                    <button
                        type="button"
                        id="odor-gallery-next"
                        aria-label="Next product image"
                        class="absolute right-3 top-1/2 flex size-10 -translate-y-1/2 items-center justify-center rounded-full border border-gray-200 bg-white/90 text-2xl font-semibold text-[#183E6E] shadow transition hover:bg-[#536FFF] hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                    >&#8250;</button>
                    <span id="odor-gallery-counter" class="absolute bottom-3 right-3 rounded-full bg-black/60 px-3 py-1 text-xs font-semibold text-white">1 / 1</span>
                </div>
                {{-- Thumbnail Gallery --}}
                <div
                    id="odor-modal-thumbnails"
                    class="mt-4 flex flex-wrap gap-2"
                ></div>
            </div>
            {{-- RIGHT: PRODUCT INFORMATION --}}
            <div class="min-w-0 lg:pt-4">
                {{-- Breadcrumb Chips --}}
                <div class="flex flex-wrap gap-2 pr-10">
                    <span class="rounded-lg bg-[#DCD9FF] px-2 py-1 text-sm font-bold leading-none text-[#536FFF]">
                        Odor Control
                    </span>
                    <span class="rounded-lg bg-[#DCD9FF] px-2 py-1 text-sm font-bold leading-none text-[#536FFF]">
                        Odor Control
                    </span>
                </div>
                <p
                    id="odor-modal-brand"
                    class="mt-5 text-xl font-bold text-red-600 sm:text-2xl"
                ></p>
                <h2
                    id="odor-modal-title"
                    class="mt-1 break-words text-4xl font-bold leading-tight text-[#183E6E] sm:text-5xl lg:text-6xl"
                ></h2>
                <p
                    id="odor-modal-type"
                    class="mt-1 text-lg font-bold text-[#183E6E] sm:text-xl"
                ></p>
                <p
                    id="odor-modal-description"
                    class="mt-4 text-base leading-relaxed text-[#183E6E]"
                ></p>
                {{-- Key Features --}}
                <h3 class="mt-4 text-xl font-bold text-[#183E6E]">
                    Key Features
                </h3>
                <ul
                    id="odor-modal-features"
                    class="mt-2 list-disc space-y-2 pl-5 text-base leading-relaxed text-[#183E6E]"
                ></ul>
            </div>
        </div>
        {{-- FULL-WIDTH SPECIFICATIONS --}}
        <div class="mt-6">
            <h3 class="mb-2 text-xl font-bold text-[#183E6E] sm:text-2xl">
                Key Specifications
            </h3>
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full min-w-[320px] border-collapse text-left text-base text-[#183E6E]">
                    <thead class="bg-[#183E6E] text-white">
                        <tr>
                            <th scope="col" class="w-1/3 border-r border-white/20 px-4 py-3 text-sm font-bold sm:text-base">Specification</th>
                            <th scope="col" class="px-4 py-3 text-sm font-bold sm:text-base">Details</th>
                        </tr>
                    </thead>
                    <tbody id="odor-modal-specs" class="divide-y divide-gray-200 bg-white"></tbody>
                </table>
            </div>
            <p class="mt-3 text-sm leading-relaxed text-gray-500">
                Product information shown is for demonstration purposes.
                Please confirm official specifications with the manufacturer.
            </p>
        </div>
    </div>
</div>
{{-- FOOTER --}}
@include('components.footer')
<script>
const initOdorControlPage = () => {
    const products = @json($products);
    const searchInput = document.getElementById('odor-search');
    const sortSelect = document.getElementById('odor-sort');
    const businessSelect = document.getElementById('odor-business');
    const productCards = Array.from(
        document.querySelectorAll('.odor-product-card')
    );
    const grid = document.getElementById('odor-product-grid');
    const emptyState = document.getElementById('odor-empty-state');
    const pagination = document.getElementById('odor-pagination');
    const modal = document.getElementById('odor-product-modal');
    const modalClose = document.getElementById('odor-modal-close');
    let currentPage = 1;
    const perPage = 8;
    function getFilteredProducts() {
        const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
        const business = businessSelect ? businessSelect.value : '';
        let filtered = products.filter((product) => {
            const searchable = [
                product.brand,
                product.model,
                product.type,
                product.description,
                product.business
            ].join(' ').toLowerCase();
            const matchesSearch = searchable.includes(query);
            const matchesBusiness =
                !business || product.business === business;
            return matchesSearch && matchesBusiness;
        });
        const sort = sortSelect ? sortSelect.value : 'latest';
        if (sort === 'az') {
            filtered.sort((a, b) =>
                `${a.brand} ${a.model}`.localeCompare(`${b.brand} ${b.model}`)
            );
        } else if (sort === 'za') {
            filtered.sort((a, b) =>
                `${b.brand} ${b.model}`.localeCompare(`${a.brand} ${a.model}`)
            );
        } else {
            filtered.sort((a, b) => products.indexOf(a) - products.indexOf(b));
        }
        return filtered;
    }
    function renderPagination(totalPages) {
        pagination.replaceChildren();
        if (totalPages <= 1) {
            pagination.classList.add('hidden');
            return;
        }
        pagination.classList.remove('hidden');
        function addPageButton(label, page, options = {}) {
            const button = document.createElement('button');
            button.type = 'button';
            button.textContent = label;
            button.disabled = options.disabled || false;
            button.className = [
                'flex h-9 min-w-9 items-center justify-center rounded border px-3 text-sm transition',
                options.active
                    ? 'border-[#536FFF] bg-[#536FFF] font-bold text-white'
                    : 'border-gray-200 bg-white text-[#536FFF] hover:border-[#536FFF]',
                button.disabled ? 'cursor-not-allowed opacity-40' : 'cursor-pointer'
            ].join(' ');
            button.addEventListener('click', () => {
                currentPage = page;
                renderProducts();
            });
            pagination.appendChild(button);
        }
        addPageButton('‹', Math.max(1, currentPage - 1), {
            disabled: currentPage === 1
        });
        for (let page = 1; page <= totalPages; page++) {
            addPageButton(String(page), page, {
                active: page === currentPage
            });
        }
        addPageButton('›', Math.min(totalPages, currentPage + 1), {
            disabled: currentPage === totalPages
        });
    }
    function renderProducts() {
        const filtered = getFilteredProducts();
        const totalPages = Math.ceil(filtered.length / perPage);
        if (totalPages === 0) {
            currentPage = 1;
        } else {
            currentPage = Math.min(currentPage, totalPages);
        }
        const start = (currentPage - 1) * perPage;
        const visibleIndexes = new Set(
            filtered.slice(start, start + perPage).map((product) =>
                products.indexOf(product)
            )
        );
        productCards.forEach((card) => {
            card.classList.toggle(
                'hidden',
                !visibleIndexes.has(Number(card.dataset.index))
            );
        });
        emptyState.classList.toggle('hidden', filtered.length !== 0);
        grid.classList.toggle('hidden', filtered.length === 0);
        renderPagination(totalPages);
    }
    if (searchInput) {
        searchInput.addEventListener('input', () => {
            currentPage = 1;
            renderProducts();
        });
    }
    const searchButton = document.getElementById('odor-search-button');
    if (searchButton) {
        searchButton.addEventListener('click', () => {
            currentPage = 1;
            renderProducts();
        });
    }
    if (sortSelect) {
        sortSelect.addEventListener('change', () => {
            currentPage = 1;
            renderProducts();
        });
    }
    if (businessSelect) {
        businessSelect.addEventListener('change', () => {
            currentPage = 1;
            renderProducts();
        });
    }
    function openProductModal(index) {
        const product = products[index];
        if (!product) return;
const modalBrand = document.getElementById('odor-modal-brand');

modalBrand.textContent = product.brand;
modalBrand.classList.remove('text-red-600', 'text-[#536FFF]');
modalBrand.classList.add(
    product.brand === 'KAWASAKI'
        ? 'text-red-600'
        : 'text-[#536FFF]'
);
        document.getElementById('odor-modal-title').textContent = product.model;
        document.getElementById('odor-modal-type').textContent = product.type;
        document.getElementById('odor-modal-description').textContent = product.description;
const image = document.getElementById('odor-modal-image');
const thumbnails = document.getElementById('odor-modal-thumbnails');
const previousButton = document.getElementById('odor-gallery-prev');
const nextButton = document.getElementById('odor-gallery-next');
const galleryCounter = document.getElementById('odor-gallery-counter');
const fallbackImage = '{{ asset('assets/images/thumbnail_product/odor.png') }}';
const getImageUrl = (path) => '{{ asset('') }}' + path;
// Gunakan maksimal 5 gambar yang didefinisikan pada product.gallery.
// Jika gallery kosong, gunakan gambar utama produk sebagai fallback.
const galleryImages = [
    ...new Set(
        (product.gallery?.length ? product.gallery : [product.image])
            .filter(Boolean)
    )
].slice(0, 5);
let activeGalleryIndex = 0;

const showGalleryImage = (index) => {
    if (!galleryImages.length) return;
    activeGalleryIndex = (index + galleryImages.length) % galleryImages.length;
    const src = galleryImages[activeGalleryIndex];

    image.onerror = () => {
        image.onerror = null;
        image.src = fallbackImage;
    };
    image.src = getImageUrl(src);
    image.alt = `${product.brand} ${product.model} image ${activeGalleryIndex + 1}`;
    galleryCounter.textContent = `${activeGalleryIndex + 1} / ${galleryImages.length}`;
    previousButton.disabled = galleryImages.length <= 1;
    nextButton.disabled = galleryImages.length <= 1;

    thumbnails.querySelectorAll('button').forEach((button, buttonIndex) => {
        button.classList.toggle('border-[#168FE5]', buttonIndex === activeGalleryIndex);
        button.classList.toggle('ring-1', buttonIndex === activeGalleryIndex);
        button.classList.toggle('ring-[#168FE5]', buttonIndex === activeGalleryIndex);
    });
};

// Build clickable thumbnails.
thumbnails.replaceChildren();
galleryImages.forEach((src, index) => {
    const button = document.createElement('button');
    button.type = 'button';
    button.setAttribute('aria-label', `Show product image ${index + 1}`);
    button.className =
        'flex h-14 w-14 shrink-0 items-center justify-center overflow-hidden rounded-lg border border-gray-300 bg-white p-1 transition hover:border-[#168FE5]';
    const thumbnail = document.createElement('img');
    thumbnail.src = getImageUrl(src);
    thumbnail.alt = `${product.model} thumbnail ${index + 1}`;
    thumbnail.className = 'h-full w-full object-contain';
    thumbnail.onerror = () => {
        button.classList.add('hidden');
    };
    button.appendChild(thumbnail);
    button.addEventListener('click', () => showGalleryImage(index));
    thumbnails.appendChild(button);
});

// Assign handlers on each modal open so navigation follows the selected product.
previousButton.onclick = () => showGalleryImage(activeGalleryIndex - 1);
nextButton.onclick = () => showGalleryImage(activeGalleryIndex + 1);
showGalleryImage(0);
        const features = document.getElementById('odor-modal-features');
        features.replaceChildren();
        product.features.forEach((feature) => {
            const item = document.createElement('li');
            item.textContent = feature;
            features.appendChild(item);
        });
        const specs = document.getElementById('odor-modal-specs');
        specs.replaceChildren();
        Object.entries(product.specs).forEach(([label, value]) => {
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
            specs.appendChild(row);
        });
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
        modalClose.focus();
    }
    function closeProductModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
    }
    // Event delegation: tombol detail tetap bekerja meskipun kartu difilter/dirender ulang.
    if (grid) {
        grid.addEventListener('click', (event) => {
            const target = event.target instanceof Element ? event.target : event.target.parentElement;
            const button = target?.closest('.odor-view-details');
            if (!button || !grid.contains(button)) return;
            event.preventDefault();
            event.stopPropagation();
            const index = Number(button.dataset.productIndex);
            openProductModal(index);
        });
    }
    if (modalClose) modalClose.addEventListener('click', closeProductModal);
    if (modal) {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) closeProductModal();
        });
    }
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeProductModal();
        }
    });
    renderProducts();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initOdorControlPage, { once: true });
} else {
    initOdorControlPage();
}
</script>
@endsection