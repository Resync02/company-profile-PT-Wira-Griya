@extends('layouts.app')
@section('title', 'Robotic Painting | PT Wira Griya')
@section('description', 'Robotic painting solutions for industrial coating and finishing.')
@section('content')
    @include('components.header')
@php
    $products = [
    [
        'brand' => 'YASKAWA',
        'model' => 'MPX3500',
        'type' => 'Robotic Painting System',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'A six-axis painting robot with a 2,700 mm working range, designed for automated coating of contoured workpieces and large painting applications.',
        'features' => [
            'Six-axis articulated robot for painting applications',
            '15 kg maximum payload',
            '2,700 mm maximum working range',
            '70 mm hollow wrist for spray equipment installation',
            'Floor, wall, and ceiling mounting options',
        ],
        'specs' => [
            'Brand' => 'Yaskawa',
            'Model' => 'MPX3500',
            'Robot Type' => 'Articulated Painting Robot',
            'Application' => 'Painting and Coating',
            'Controlled Axes' => '6',
            'Maximum Payload' => '15 kg',
            'Maximum Reach' => '2,700 mm',
            'Repeatability' => '±0.15 mm',
            'Approx. Robot Weight' => '590 kg',
            'Power Supply' => '3 kVA',
            'Wrist Configuration' => 'Hollow wrist, 70 mm',
            'Mounting Options' => 'Floor, Wall, Ceiling',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'YASKAWA',
        'model' => 'MPX2600',
        'type' => 'Robotic Painting System',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'A high-speed six-axis painting robot with a 2,000 mm working range and a hollow wrist designed to accommodate spray equipment.',
        'features' => [
            'Six-axis articulated robot for painting applications',
            '15 kg maximum payload',
            '2,000 mm maximum working range',
            '70 mm hollow wrist for spray equipment installation',
            'Floor, wall, and ceiling mounting options',
        ],
        'specs' => [
            'Brand' => 'Yaskawa',
            'Model' => 'MPX2600',
            'Robot Type' => 'Articulated Painting Robot',
            'Application' => 'Painting and Coating',
            'Controlled Axes' => '6',
            'Maximum Payload' => '15 kg',
            'Maximum Reach' => '2,000 mm',
            'Repeatability' => '±0.2 mm',
            'Approx. Robot Weight' => '485 kg',
            'Power Supply' => '3 kVA',
            'Wrist Configuration' => 'Hollow wrist, 70 mm',
            'Mounting Options' => 'Floor, Wall, Ceiling',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'YASKAWA',
        'model' => 'MPX1950',
        'type' => 'Robotic Painting System',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'A six-axis painting robot with a 1,450 mm working range and a 7 kg payload for automated painting of contoured workpieces.',
        'features' => [
            'Six-axis articulated robot for painting applications',
            '7 kg maximum payload',
            '1,450 mm maximum working range',
            'Repeatability of ±0.15 mm',
            'Designed for automated painting operations',
        ],
        'specs' => [
            'Brand' => 'Yaskawa',
            'Model' => 'MPX1950',
            'Robot Type' => 'Articulated Painting Robot',
            'Application' => 'Painting and Coating',
            'Controlled Axes' => '6',
            'Maximum Payload' => '7 kg',
            'Maximum Reach' => '1,450 mm',
            'Repeatability' => '±0.15 mm',
            'Approx. Robot Weight' => '265 kg',
            'Power Supply' => '2.5 kVA',
            'Controller' => 'DX200',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'YASKAWA',
        'model' => 'MPX1150',
        'type' => 'Robotic Painting System',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'A compact six-axis painting robot with a 727 mm working range, suitable for painting contoured parts and interior or exterior surfaces.',
        'features' => [
            'Compact six-axis articulated design',
            '5 kg maximum payload',
            '727 mm maximum working range',
            'Repeatability of ±0.02 mm',
            'IP65 wrist protection rating',
        ],
        'specs' => [
            'Brand' => 'Yaskawa',
            'Model' => 'MPX1150',
            'Robot Type' => 'Articulated Painting Robot',
            'Application' => 'Painting and Coating',
            'Controlled Axes' => '6',
            'Maximum Payload' => '5 kg',
            'Maximum Reach' => '727 mm',
            'Repeatability' => '±0.02 mm',
            'Approx. Robot Weight' => '57 kg',
            'Power Supply' => '1 kVA',
            'Wrist Protection' => 'IP65',
            'Controller' => 'DX200',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'KAWASAKI',
        'model' => 'KF121',
        'type' => 'Explosion-Proof Painting Robot',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'A compact explosion-proof painting robot from Kawasaki’s K series, designed for painting and handling small workpieces.',
        'features' => [
            'Six-axis articulated robot',
            '5 kg maximum payload',
            '1,240 mm maximum reach',
            'Repeatability of ±0.2 mm',
            'Designed for painting in explosion-proof environments',
        ],
        'specs' => [
            'Brand' => 'Kawasaki',
            'Model' => 'KF121',
            'Robot Series' => 'K Series',
            'Robot Type' => 'Explosion-Proof Painting Robot',
            'Application' => 'Painting',
            'Controlled Axes' => '6',
            'Maximum Payload' => '5 kg',
            'Maximum Reach' => '1,240 mm',
            'Repeatability' => '±0.2 mm',
            'Mounting Options' => 'Floor, Wall',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'KAWASAKI',
        'model' => 'KF192',
        'type' => 'Explosion-Proof Painting Robot',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/kf192.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'An explosion-proof six-axis painting robot with a 1,973 mm reach and a BBR wrist configuration for industrial painting applications.',
        'features' => [
            'Six-axis articulated painting robot',
            '12 kg wrist payload and 20 kg arm payload',
            '1,973 mm maximum reach',
            'Repeatability of ±0.5 mm',
            'BBR wrist configuration',
            'Designed for explosion-proof painting environments',
        ],
        'specs' => [
            'Brand' => 'Kawasaki',
            'Model' => 'KF192',
            'Robot Series' => 'K Series',
            'Robot Type' => 'Explosion-Proof Painting Robot',
            'Application' => 'Painting',
            'Controlled Axes' => '6',
            'Wrist Payload' => '12 kg',
            'Arm Payload' => '20 kg',
            'Maximum Reach' => '1,973 mm',
            'Repeatability' => '±0.5 mm',
            'Wrist Configuration' => 'BBR',
            'Mounting Options' => 'Floor, Wall',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'KAWASAKI',
        'model' => 'KF193',
        'type' => 'Explosion-Proof Painting Robot',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/kf193.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'An explosion-proof six-axis painting robot with a 1,973 mm reach and a 40 mm hollow wrist for routing painting hoses internally.',
        'features' => [
            'Six-axis articulated painting robot',
            '12 kg wrist payload and 20 kg arm payload',
            '1,973 mm maximum reach',
            'Repeatability of ±0.5 mm',
            '40 mm 3R hollow wrist for internal hose routing',
            'Designed for explosion-proof painting environments',
        ],
        'specs' => [
            'Brand' => 'Kawasaki',
            'Model' => 'KF193',
            'Robot Series' => 'K Series',
            'Robot Type' => 'Explosion-Proof Painting Robot',
            'Application' => 'Painting',
            'Controlled Axes' => '6',
            'Wrist Payload' => '12 kg',
            'Arm Payload' => '20 kg',
            'Maximum Reach' => '1,973 mm',
            'Repeatability' => '±0.5 mm',
            'Wrist Configuration' => '3R Hollow Wrist, 40 mm',
            'Business Type' => 'Automotive',
        ],
    ],
    [
        'brand' => 'KAWASAKI',
        'model' => 'KF194',
        'type' => 'Explosion-Proof Painting Robot',
        'business' => 'Automotive',
        'image' => 'assets/images/sub-product/coating-painting/robot-paint/kf194.png',
        'gallery' => [
            'assets/images/sub-product/coating-painting/robot-paint/mpx1150.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx1950.png',
            'assets/images/sub-product/coating-painting/robot-paint/MPX2600.png',
            'assets/images/sub-product/coating-painting/robot-paint/mpx3500.png',
            'assets/images/sub-product/coating-painting/robot-paint/kf121.png',
        ],
        'description' => 'An explosion-proof six-axis painting robot with a 1,978 mm reach and a 70 mm hollow wrist designed to accommodate larger painting hoses.',
        'features' => [
            'Six-axis articulated painting robot',
            '12 kg wrist payload and 20 kg arm payload',
            '1,978 mm maximum reach',
            'Repeatability of ±0.5 mm',
            '70 mm 3R hollow wrist for larger hose routing',
            'Designed for explosion-proof painting environments',
        ],
        'specs' => [
            'Brand' => 'Kawasaki',
            'Model' => 'KF194',
            'Robot Series' => 'K Series',
            'Robot Type' => 'Explosion-Proof Painting Robot',
            'Application' => 'Painting',
            'Controlled Axes' => '6',
            'Wrist Payload' => '12 kg',
            'Arm Payload' => '20 kg',
            'Maximum Reach' => '1,978 mm',
            'Repeatability' => '±0.5 mm',
            'Wrist Configuration' => '3R Hollow Wrist, 70 mm',
            'Business Type' => 'Automotive',
        ],
    ],
];
@endphp
{{-- HERO BANNER --}}
<section class="relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]">
    <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"><img
        src="{{ asset('assets/images/banner/banner-d.jpg') }}"
        alt="Industrial coating and painting solutions"
        class="absolute inset-0 h-full w-full object-cover object-center"
    ></picture>
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/5"></div>
    <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-28 pb-8 md:px-10 md:pt-32">
        <div class="max-w-xl">
            <p class="text-xl font-bold uppercase tracking-wide text-[#183E6E]">
                Our Products
            </p>
            <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-[#162841] md:text-5xl">
                Industrial Solutions
                <br>
                for a <span class="text-[#F5B940]">Better Tomorrow</span>
            </h1>
            <p class="mt-3 max-w-md text-base leading-relaxed text-[#162841]/90">
                High-quality machinery and equipment to support your
                production process, improve efficiency, and meet the
                evolving needs of your industry.
            </p>
        </div>
    </div>
</section>
{{-- PRODUCT CATALOG --}}
<section class="mx-auto w-full max-w-[1600px] px-5 pt-3 pb-8 md:px-8 md:pt-4 md:pb-10">
{{-- BACK BUTTON --}}
<a
    href="{{ route('product.coating-painting') }}"
    class="hidden md:inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
\>
    <span aria-hidden="true" class="text-2xl">←</span>
    Back
</a>
    {{-- TITLE AND FILTERS --}}
    <div class="mt-2 flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
        <div class="max-w-2xl">
            <h2 class="text-2xl font-bold text-[#183E6E] md:text-3xl">
                Robotic Painting
            </h2>
            <p class="mt-1 text-base leading-relaxed text-[#183E6E]/90">
                Robotic painting systems provide high-precision, consistent,
                and efficient coating solutions for various industrial
                applications. Designed to improve productivity and finish
                quality, our robotic painting solutions help meet the demands
                of modern manufacturing.
            </p>
        </div>
        <div class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 lg:w-auto lg:min-w-[330px] lg:grid-cols-1">
            {{-- PRODUCT SEARCH --}}
            <div
                role="search"
                class="flex h-10 items-center overflow-hidden rounded-md border border-gray-300 bg-white"
            >
                <label for="robotic-search" class="sr-only">Search products</label>
                <input
                    id="robotic-search"
                    type="search"
                    placeholder="Search Products..."
                    aria-label="Search products"
                    class="min-w-0 flex-1 px-3 text-base outline-none placeholder:text-gray-400 focus:ring-1 focus:ring-[#1455D9]"
                >
                <button
                    type="button"
                    id="robotic-search-button"
                    aria-label="Search products"
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
                <label for="robotic-sort" class="shrink-0 text-base text-[#183E6E]">
                    Sort by:
                </label>
                <select
                    id="robotic-sort"
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
        id="robotic-product-grid"
        class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4"
    >
        @foreach ($products as $index => $product)
            <article
                class="robotic-product-card group flex min-h-[150px] min-w-0 overflow-hidden rounded-md border border-[#536FFF] bg-white transition hover:border-[#1455D9] hover:shadow-md"
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
                        onerror="this.onerror=null;this.src='{{ asset('assets/images/home/robot-paint.png') }}';"
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
                        class="robotic-view-details mt-auto inline-flex cursor-pointer items-center gap-1 pt-3 text-left text-sm font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
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
        id="robotic-empty-state"
        class="hidden py-12 text-center text-sm text-gray-500"
    >
        Tidak ada produk yang ditemukan.
    </div>
    {{-- PAGINATION --}}
    <nav
        id="robotic-pagination"
        aria-label="Product pagination"
        class="mt-8 flex flex-wrap items-center justify-center gap-1.5"
    ></nav>
</section>
{{-- PRODUCT DETAIL MODAL --}}
<div
    id="robotic-product-modal"
    class="fixed inset-0 z-[100] hidden items-center justify-center overflow-y-auto bg-black/50 p-2 sm:p-5"
    aria-hidden="true"
\>
    <div
        role="dialog"
        aria-modal="true"
        aria-labelledby="robotic-modal-title"
        class="relative my-auto w-full max-w-[1250px] rounded-2xl border-2 border-[#168FE5] bg-white p-5 shadow-xl sm:p-8 lg:p-10"
    >
        {{-- Close Button --}}
        <button
            type="button"
            id="robotic-modal-close"
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
                        id="robotic-modal-image"
                        src=""
                        alt=""
                        class="h-full w-full object-contain p-3"
                    >
                    {{-- Manual gallery navigation --}}
                    <button
                        type="button"
                        id="robotic-gallery-prev"
                        aria-label="Previous product image"
                        class="absolute left-3 top-1/2 flex size-10 -translate-y-1/2 items-center justify-center rounded-full border border-gray-200 bg-white/90 text-2xl font-semibold text-[#183E6E] shadow transition hover:bg-[#536FFF] hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                    >&#8249;</button>
                    <button
                        type="button"
                        id="robotic-gallery-next"
                        aria-label="Next product image"
                        class="absolute right-3 top-1/2 flex size-10 -translate-y-1/2 items-center justify-center rounded-full border border-gray-200 bg-white/90 text-2xl font-semibold text-[#183E6E] shadow transition hover:bg-[#536FFF] hover:text-white disabled:cursor-not-allowed disabled:opacity-30"
                    >&#8250;</button>
                    <span id="robotic-gallery-counter" class="absolute bottom-3 right-3 rounded-full bg-black/60 px-3 py-1 text-xs font-semibold text-white">1 / 1</span>
                </div>
                {{-- Thumbnail Gallery --}}
                <div
                    id="robotic-modal-thumbnails"
                    class="mt-4 flex flex-wrap gap-2"
                ></div>
            </div>
            {{-- RIGHT: PRODUCT INFORMATION --}}
            <div class="min-w-0 lg:pt-4">
                {{-- Breadcrumb Chips --}}
                <div class="flex flex-wrap gap-2 pr-10">
                    <span class="rounded-lg bg-[#DCD9FF] px-2 py-1 text-sm font-bold leading-none text-[#536FFF]">
                        Coating &amp; Painting
                    </span>
                    <span class="rounded-lg bg-[#DCD9FF] px-2 py-1 text-sm font-bold leading-none text-[#536FFF]">
                        Robotic Painting
                    </span>
                </div>
                <p
                    id="robotic-modal-brand"
                    class="mt-5 text-xl font-bold text-red-600 sm:text-2xl"
                ></p>
                <h2
                    id="robotic-modal-title"
                    class="mt-1 break-words text-4xl font-bold leading-tight text-[#183E6E] sm:text-5xl lg:text-6xl"
                ></h2>
                <p
                    id="robotic-modal-type"
                    class="mt-1 text-lg font-bold text-[#183E6E] sm:text-xl"
                ></p>
                <p
                    id="robotic-modal-description"
                    class="mt-4 text-base leading-relaxed text-[#183E6E]"
                ></p>
                {{-- Key Features --}}
                <h3 class="mt-4 text-xl font-bold text-[#183E6E]">
                    Key Features
                </h3>
                <ul
                    id="robotic-modal-features"
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
                    <tbody id="robotic-modal-specs" class="divide-y divide-gray-200 bg-white"></tbody>
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
const initRoboticPaintingPage = () => {
    const products = @json($products);
    const searchInput = document.getElementById('robotic-search');
    const sortSelect = document.getElementById('robotic-sort');
    const businessSelect = document.getElementById('robotic-business');
    const productCards = Array.from(
        document.querySelectorAll('.robotic-product-card')
    );
    const grid = document.getElementById('robotic-product-grid');
    const emptyState = document.getElementById('robotic-empty-state');
    const pagination = document.getElementById('robotic-pagination');
    const modal = document.getElementById('robotic-product-modal');
    const modalClose = document.getElementById('robotic-modal-close');
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
    const searchButton = document.getElementById('robotic-search-button');
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
const modalBrand = document.getElementById('robotic-modal-brand');

modalBrand.textContent = product.brand;
modalBrand.classList.remove('text-red-600', 'text-[#536FFF]');
modalBrand.classList.add(
    product.brand === 'KAWASAKI'
        ? 'text-red-600'
        : 'text-[#536FFF]'
);        document.getElementById('robotic-modal-title').textContent = product.model;
        document.getElementById('robotic-modal-type').textContent = product.type;
        document.getElementById('robotic-modal-description').textContent = product.description;
const image = document.getElementById('robotic-modal-image');
const thumbnails = document.getElementById('robotic-modal-thumbnails');
const previousButton = document.getElementById('robotic-gallery-prev');
const nextButton = document.getElementById('robotic-gallery-next');
const galleryCounter = document.getElementById('robotic-gallery-counter');
const fallbackImage = '{{ asset('assets/images/home/robot-paint.png') }}';
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
        const features = document.getElementById('robotic-modal-features');
        features.replaceChildren();
        product.features.forEach((feature) => {
            const item = document.createElement('li');
            item.textContent = feature;
            features.appendChild(item);
        });
        const specs = document.getElementById('robotic-modal-specs');
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
            const button = event.target.closest('.robotic-view-details');
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
    document.addEventListener('DOMContentLoaded', initRoboticPaintingPage, { once: true });
} else {
    initRoboticPaintingPage();
}
</script>
@endsection