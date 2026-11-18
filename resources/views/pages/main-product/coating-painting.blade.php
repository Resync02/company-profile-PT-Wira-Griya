@extends('layouts.app')
@section('title', 'Coating & Painting | PT Wira Griya')
@section('content')
    @include('components.header')
{{-- HERO SLIDER --}}
<section
    id="coating-hero-slider"
    class="group relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]"
    aria-roledescription="carousel"
    aria-label="Coating and Painting banners"
>
    {{-- SLIDE 1 --}}
    <div class="coating-slide absolute inset-0 opacity-100 transition-opacity duration-700"
         data-slide="0" aria-hidden="false">
        <a href="{{ url('/product/coating-painting/hand-guns') }}"
           class="absolute inset-0 block"
           aria-label="Explore Hand Guns">
            <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"><img src="{{ asset('assets/images/banner/banner-d.jpg') }}"
                 alt="Industrial coating and painting facility"
                 class="absolute inset-0 size-full object-cover object-center"></picture>
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/5"></div>
            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
                <div class="max-w-2xl">
                    <p class="text-xl font-bold tracking-wide text-navy">OUR PRODUCTS</p>
                    <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-dark md:text-5xl">
                        Coating &amp; Painting<br>
                        for a <span class="text-[#F5B940]">Better Finish.</span>
                    </h1>
                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                        Discover industrial painting and coating equipment designed to support your production needs.
                    </p>
                </div>
            </div>
        </a>
    </div>
    {{-- SLIDE 2 --}}
    <div class="coating-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"
         data-slide="1" aria-hidden="true">
        <a href="{{ url('/product/coating-painting/automatic-guns') }}"
           tabindex="-1" class="absolute inset-0 block"
           aria-label="Explore Automatic Guns">
            <img src="{{ asset('assets/images/home/paint.png') }}"
                 alt="Industrial paint application equipment"
                 class="absolute inset-0 size-full bg-white object-contain object-right">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/10"></div>
            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
                <div class="max-w-xl">
                    <p class="text-xl font-bold tracking-wide text-navy">AUTOMATIC GUNS</p>
                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">
                        Consistent<br><span class="text-[#F5B940]">Application.</span>
                    </h2>
                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                        Explore automated equipment for efficient and consistent coating applications.
                    </p>
                </div>
            </div>
        </a>
    </div>
    {{-- SLIDE 3 --}}
    <div class="coating-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"
         data-slide="2" aria-hidden="true">
        <a href="{{ url('/product/coating-painting/powder-coating') }}"
           tabindex="-1" class="absolute inset-0 block"
           aria-label="Explore Powder Coating">
            <img src="{{ asset('assets/images/thumbnail_product/paint.png') }}"
                 alt="Industrial painting and coating equipment"
                 class="absolute inset-0 size-full bg-white object-contain object-right">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/10"></div>
            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
                <div class="max-w-xl">
                    <p class="text-xl font-bold tracking-wide text-navy">POWDER COATING</p>
                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">
                        Durable Coating.<br><span class="text-[#F5B940]">Quality Results.</span>
                    </h2>
                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                        Discover equipment for reliable powder coating processes.
                    </p>
                </div>
            </div>
        </a>
    </div>
    {{-- SLIDE 4 --}}
    <div class="coating-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"
         data-slide="3" aria-hidden="true">
        <a href="{{ url('/product/coating-painting/paint-supply') }}"
           tabindex="-1" class="absolute inset-0 block"
           aria-label="Explore Paint Supply">
            <img src="{{ asset('assets/images/home/paint.png') }}"
                 alt="Paint supply equipment"
                 class="absolute inset-0 size-full bg-white object-contain object-right">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/10"></div>
            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
                <div class="max-w-xl">
                    <p class="text-xl font-bold tracking-wide text-navy">PAINT SUPPLY</p>
                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">
                        Reliable Supply<br><span class="text-[#F5B940]">for Every Project.</span>
                    </h2>
                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                        Explore equipment that supports paint preparation and delivery.
                    </p>
                </div>
            </div>
        </a>
    </div>
    {{-- SLIDE 5 --}}
    <div class="coating-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"
         data-slide="4" aria-hidden="true">
        <a href="{{ url('/product/coating-painting/robotic-painting') }}"
           tabindex="-1" class="absolute inset-0 block"
           aria-label="Explore Robotic Painting">
            <img src="{{ asset('assets/images/home/robot-paint.png') }}"
                 alt="Robotic painting equipment"
                 class="absolute inset-0 size-full bg-white object-contain object-right">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/10"></div>
            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
                <div class="max-w-xl">
                    <p class="text-xl font-bold tracking-wide text-navy">ROBOTIC PAINTING</p>
                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">
                        Precision Through<br><span class="text-[#F5B940]">Automation.</span>
                    </h2>
                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                        Explore robotic painting solutions for automated industrial applications.
                    </p>
                </div>
            </div>
        </a>
    </div>
{{-- PREVIOUS BUTTON --}}
<button
    type="button"
    id="coating-slide-prev"
    aria-label="Previous banner"
    class="pointer-events-auto absolute left-4 top-1/2 z-50 flex size-11 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-white/95 text-xl text-navy shadow-lg transition hover:bg-white md:left-6"
>
    &#10094;
</button>
{{-- NEXT BUTTON --}}
<button
    type="button"
    id="coating-slide-next"
    aria-label="Next banner"
    class="pointer-events-auto absolute right-4 top-1/2 z-50 flex size-11 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-white/95 text-xl text-navy shadow-lg transition hover:bg-white md:right-6"
>
    &#10095;
</button>
    {{-- INDICATORS --}}
    <div class="absolute bottom-4 left-1/2 z-30 flex -translate-x-1/2 items-center gap-2"
         aria-label="Choose banner">
        @foreach(range(0, 4) as $index)
            <button
                type="button"
                class="coating-slide-dot size-2.5 rounded-full transition-colors {{ $index === 0 ? 'bg-navy ring-2 ring-white' : 'bg-white/80 ring-1 ring-navy/30' }}"
                data-target-slide="{{ $index }}"
                aria-label="Show banner {{ $index + 1 }}"
                @if($index === 0) aria-current="true" @endif
            ></button>
        @endforeach
    </div>
</section>
    {{-- MAIN CONTENT --}}
    <main class="flex-1 bg-white">
        <section class="mx-auto max-w-[1600px] px-5 pt-3 pb-8 md:px-8 md:pt-4 md:pb-10">
            {{-- BACK + SEARCH / SORT --}}
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    {{-- BACK --}}
                    <a
                        href="{{ route('product.index') }}"
                        class="hidden md:inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
                    >
                        <span aria-hidden="true" class="text-2xl">←</span>
                        Back
                    </a>
                    <h2 class="mt-2 text-2xl font-bold text-navy md:text-3xl">
                        Our Product
                    </h2>
                    <p class="mt-1 text-base leading-relaxed text-dark/80">
                        A complete range of industrial machinery and equipment designed to support your business needs.
                    </p>
                </div>
                <div class="grid w-full grid-cols-1 gap-2 sm:grid-cols-2 md:w-auto md:min-w-[330px] md:grid-cols-1">
                    {{-- PRODUCT SEARCH --}}
                    <form
                        action="{{ route('product.index') }}"
                        method="GET"
                        role="search"
                        class="flex h-10 items-center overflow-hidden rounded-md border border-gray-300 bg-white"
                    >
                        <input
                            type="search"
                            name="q"
                            value="{{ request('q') }}"
                            placeholder="Search Products..."
                            aria-label="Search products"
                            class="min-w-0 flex-1 px-3 text-base outline-none placeholder:text-gray-400 focus:ring-1 focus:ring-primary"
                        >
                        <button
                            type="submit"
                            aria-label="Submit product search"
                            class="flex h-full w-10 shrink-0 cursor-pointer items-center justify-center text-navy transition hover:bg-gray-100"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
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
                    </form>
                    {{-- SORT --}}
                    <form
                        action="{{ route('product.index') }}"
                        method="GET"
                        class="flex items-center justify-end gap-2"
                    >
                        @if(request('q'))
                            <input type="hidden" name="q" value="{{ request('q') }}">
                        @endif
                        <label for="sort" class="shrink-0 text-base text-dark">
                            Sort by:
                        </label>
                        <select
                            id="sort"
                            name="sort"
                            onchange="this.form.submit()"
                            class="h-10 min-w-0 flex-1 cursor-pointer rounded-md border border-gray-300 bg-white px-3 text-base font-semibold text-primary outline-none focus:border-primary md:max-w-[170px]"
                        >
                            <option value="latest" @selected(request('sort') === 'latest')>
                                Latest First
                            </option>
                            <option value="az" @selected(request('sort') === 'az')>
                                A–Z
                            </option>
                            <option value="za" @selected(request('sort') === 'za')>
                                Z–A
                            </option>
                        </select>
                    </form>
                </div>
            </div>
            {{-- SUBCATEGORY CARDS --}}
            <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
                {{-- 1. HAND GUNS --}}
                <a
                    href="{{ url('/product/coating-painting/hand-guns') }}"
                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-18 w-[38%] shrink-0 items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/images/sub-product/coating-painting/hand-guns.png') }}"
                            alt="Hand guns"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">
                        Hand<br>Guns
                    </span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
                {{-- 2. AUTOMATIC GUNS --}}
                <a
                    href="{{ url('/product/coating-painting/automatic-guns') }}"
                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-18 w-[38%] shrink-0 items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/images/sub-product/coating-painting/automatic-guns.png') }}"
                            alt="Automatic guns"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">
                        Automatic<br>Guns
                    </span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
                {{-- 3. POWDER COATING --}}
                <a
                    href="{{ url('/product/coating-painting/powder-coating') }}"
                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-18 w-[38%] shrink-0 items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/images/sub-product/coating-painting/powder-coating.png') }}"
                            alt="Industrial painting and coating equipment"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">
                        Powder<br>Coating
                    </span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
                {{-- 4. PAINT SUPPLY --}}
                <a
                    href="{{ url('/product/coating-painting/paint-supply') }}"
                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-18 w-[38%] shrink-0 items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/images/sub-product/coating-painting/paint-supply.png') }}"
                            alt="Paint supply equipment"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">
                        Paint<br>Supply
                    </span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
                {{-- 5. MIXING & COLOR CHANGE --}}
                <a
                    href="{{ url('/product/coating-painting/mixing-color-change') }}"
                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-18 w-[38%] shrink-0 items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/images/sub-product/coating-painting/mixing-color.png') }}"
                            alt="Mixing and color change equipment"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">
                        Mixing &amp;<br>Color Change
                    </span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
                {{-- 6. ROBOTIC PAINTING --}}
                <a
                    href="{{ url('/product/coating-painting/robotic-painting') }}"
                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-18 w-[38%] shrink-0 items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('assets/images/sub-product/coating-painting/robotic-painting.png') }}"
                            alt="Robotic painting equipment"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">
                        Robotic<br>Painting
                    </span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
            </div>
        </section>
    </main>
    {{-- FOOTER --}}
    @include('components.footer')
@endsection
