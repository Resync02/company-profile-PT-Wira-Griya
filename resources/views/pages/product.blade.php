

@extends('layouts.app')



@section('title', 'Products | PT Wira Griya')
@section('description', 'Browse PT Wira Griya product categories: hoists and cranes, painting and coating systems, industrial machinery, solvent cleaners, and odor control solutions.')



@section('content')

    @include('components.header')



{{-- PRODUCT HERO SLIDER --}}

<section

    id="product-hero-slider"

    class="group relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]"

    aria-roledescription="carousel"
>

    {{-- SLIDE 1: HOIST & CRANE --}}

    <div

        class="product-slide absolute inset-0 opacity-100 transition-opacity duration-700"

        data-slide="0"

        aria-hidden="false"

    >

        <a

            href="{{ url('/product/hoist-crane') }}"

            class="absolute inset-0 block"
        >

            <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/home/hero-mobile.webp') }}"><img

                src="{{ asset('assets/images/banner/banner-d.webp') }}"
http://127.0.0.1:8000/product/hoist-crane
                class="absolute inset-0 size-full object-cover object-center"

            ></picture>



            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/0 to-white/0"></div>



            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">

                <div class="max-w-2xl">

                    <p class="text-xl font-bold tracking-wide text-navy">OUR PRODUCTS</p>



                    <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-dark md:text-5xl">

                        Industrial Solutions<br>

                        for a <span class="text-[#F5B940]">Better Tomorrow.</span>

                    </h1>



                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">

                        High-quality machinery and equipment to support your

                        production process, improve efficiency, and meet the

                        evolving needs of your industry.

                    </p>

                </div>

            </div>

        </a>

    </div>



    {{-- SLIDE 2: PAINTING & COATING --}}

    <div

        class="product-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"

        data-slide="1"

        aria-hidden="true"

    >

        <a

            href="{{ url('/product/coating-painting') }}"

            tabindex="-1"

            class="absolute inset-0 block"

        >

            <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.webp') }}"><img

                src="{{ asset('assets/images/banner/banner-d.webp') }}"

                alt="Industrial painting and coating equipment"

                class="absolute inset-0 size-full object-cover object-center"

            ></picture>



            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/5"></div>



            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">

                <div class="max-w-xl">

                    <p class="text-base font-bold tracking-wide text-navy">PAINTING &amp; COATING</p>

                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">

                        Precision in<br>

                        <span class="text-[#F5B940]">Every Finish.</span>

                    </h2>

                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">

                        Discover equipment designed for consistent and efficient coating applications.

                    </p>

                </div>

            </div>

        </a>

    </div>



    {{-- SLIDE 3: INDUSTRIAL MACHINERY --}}

    <div

        class="product-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"

        data-slide="2"

        aria-hidden="true"

    >

        <a

            href="{{ url('/product/industrial-machinery') }}"

            tabindex="-1"

            class="absolute inset-0 block"

        >

            <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.webp') }}"><img

                src="{{ asset('assets/images/banner/banner-d.webp') }}"

                alt="Industrial machinery"

                class="absolute inset-0 size-full object-cover object-center"

            ></picture>



            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/5"></div>



            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">

                <div class="max-w-xl">

                    <p class="text-base font-bold tracking-wide text-navy">INDUSTRIAL MACHINERY</p>

                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">

                        Engineered for<br>

                        <span class="text-[#F5B940]">Productivity.</span>

                    </h2>

                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">

                        Explore machinery solutions for reliable industrial production.

                    </p>

                </div>

            </div>

        </a>

    </div>



    {{-- SLIDE 4: SOLVENT CLEANER --}}

    <div

        class="product-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"

        data-slide="3"

        aria-hidden="true"

    >

        <a

            href="{{ url('/product/solvent-cleaner') }}"

            tabindex="-1"

            class="absolute inset-0 block"

        >

            <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.webp') }}"><img

                src="{{ asset('assets/images/banner/banner-d.webp') }}"

                alt="Industrial solvent cleaning equipment"

                class="absolute inset-0 size-full object-cover object-center"

            ></picture>



            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/5"></div>



            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">

                <div class="max-w-xl">

                    <p class="text-base font-bold tracking-wide text-navy">SOLVENT CLEANER</p>

                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">

                        Smarter Solvent<br>

                        <span class="text-[#F5B940]">Solutions.</span>

                    </h2>

                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">

                        Discover solutions that support cleaner and more efficient industrial processes.

                    </p>

                </div>

            </div>

        </a>

    </div>



    {{-- SLIDE 5: ODOR CONTROL --}}

    <div

        class="product-slide pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-700"

        data-slide="4"

        aria-hidden="true"

    >

        <a

            href="{{ url('/product/odor-control') }}"

            tabindex="-1"

            class="absolute inset-0 block"

        >

            <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.webp') }}"><img

                src="{{ asset('assets/images/banner/banner-d.webp') }}"

                alt="Industrial odor control equipment"

                class="absolute inset-0 size-full object-cover object-center"

            ></picture>



            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/5"></div>



            <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">

                <div class="max-w-xl">

                    <p class="text-base font-bold tracking-wide text-navy">ODOR CONTROL</p>

                    <h2 class="mt-2 text-4xl font-bold leading-tight text-dark md:text-5xl">

                        Cleaner Air.<br>

                        <span class="text-[#F5B940]">Better Environment.</span>

                    </h2>

                    <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">

                        Explore industrial odor control solutions for cleaner working environments.

                    </p>

                </div>

            </div>

        </a>

    </div>



    {{-- PREVIOUS BUTTON --}}

    <button

        type="button"

        id="product-slide-prev"

        aria-label="Previous banner"

        class="absolute left-4 top-1/2 z-30 flex size-10 -translate-y-1/2 items-center justify-center rounded-full bg-white/90 text-xl text-navy shadow transition hover:bg-white md:left-6"

    >

        &#10094;

    </button>



    {{-- NEXT BUTTON --}}

    <button

        type="button"

        id="product-slide-next"

        aria-label="Next banner"

        class="absolute right-4 top-1/2 z-30 flex size-10 -translate-y-1/2 items-center justify-center rounded-full bg-white/90 text-xl text-navy shadow transition hover:bg-white md:right-6"

    >

        &#10095;

    </button>



    {{-- INDICATORS --}}

    <div

        class="absolute bottom-4 left-1/2 z-30 flex -translate-x-1/2 items-center gap-2"

        aria-label="Choose banner"

    >

        @foreach(range(0, 4) as $index)

            <button

                type="button"

                class="product-slide-dot size-2.5 rounded-full transition-colors {{ $index === 0 ? 'bg-navy ring-2 ring-white' : 'bg-white/80 ring-1 ring-navy/30' }}"

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
                        id="product-category-search"
                        action="{{ route('product.index') }}"
                        method="GET"
                        role="search"
                        class="flex h-10 items-center overflow-hidden rounded-md border border-gray-300 bg-white"
                    >

                        <input
                            id="product-search-input"
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


                </div>
            </div>

            {{-- CATEGORY CARDS --}}

            <p id="product-search-feedback" class="mt-5 text-sm text-dark/70" aria-live="polite"></p>
            <div id="product-category-grid" data-product-category-grid class="mt-3 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-5">



                {{-- 1. HOIST & CRANE --}}

                <a

                    href="{{ url('/product/hoist-crane') }}"
                    data-product-category
                    data-search-terms="hoist crane lifting electric chain hoist heavy duty hoist wire rope hoist"

                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"

                >

                    <div class="flex h-18 w-[44%] shrink-0 items-center justify-center overflow-hidden">

                        <img

                            src="{{ asset('assets/images/thumbnail_product/crane.webp') }}"

                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"

                            loading="lazy"

                        >

                    </div>  



                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy sm:text-lg">

                        Hoist<br>&amp; Crane

                    </span>



                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>

                </a>



                {{-- 2. PAINTING & COATING --}}

                <a

                    href="{{ url('/product/coating-painting') }}"
                    data-product-category
                    data-search-terms="painting coating robotic painting automatic guns hand guns powder coating paint supply mixing color change"

                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"

                >

                    <div class="flex h-18 w-[44%] shrink-0 items-center justify-center overflow-hidden">

                        <img

                            src="{{ asset('assets/images/thumbnail_product/paint.webp') }}"

                            alt="Painting and coating equipment"

                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"

                            loading="lazy"

                        >

                    </div>



                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy sm:text-lg">

                        Painting &amp;<br>Coating

                    </span>



                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>

                </a>



                {{-- 3. INDUSTRIAL MACHINERY --}}

                <a

                    href="{{ url('/product/industrial-machinery') }}"
                    data-product-category
                    data-search-terms="industrial machinery powder material handling tube filling sealing packaging solutions mixing process solid dosage liquid filling capping labeling end of line automation"

                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"

                >

                    <div class="flex h-18 w-[44%] shrink-0 items-center justify-center overflow-hidden">

                        <img

                            src="{{ asset('assets/images/thumbnail_product/machinery.webp') }}"

                            alt="Industrial machinery"

                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"

                            loading="lazy"

                        >

                    </div>



                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy sm:text-lg">

                        Industrial<br>Machinery

                    </span>



                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>

                </a>



                {{-- 4. SOLVENT CLEANER --}}

                <a

                    href="{{ url('/product/solvent-cleaner') }}"
                    data-product-category
                    data-search-terms="solvent cleaner solvent recovery cleaning"

                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"

                >

                    <div class="flex h-18 w-[44%] shrink-0 items-center justify-center overflow-hidden">

                        <img

                            src="{{ asset('assets/images/thumbnail_product/solvent.webp') }}"

                            alt="Solvent cleaner equipment"

                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"

                            loading="lazy"

                        >

                    </div>



                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy sm:text-lg">

                        Solvent<br>Cleaner

                    </span>



                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>

                </a>



                {{-- 5. ODOR CONTROL --}}

                <a

                    href="{{ url('/product/odor-control') }}"
                    data-product-category
                    data-search-terms="odor control air treatment odor removal"

                    class="group flex min-h-[104px] items-center gap-3 rounded-md border-2 border-[#5575FF] bg-white p-2 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"

                >

                    <div class="flex h-18 w-[44%] shrink-0 items-center justify-center overflow-hidden">

                        <img

                            src="{{ asset('assets/images/thumbnail_product/odor.webp') }}"

                            alt="Odor control equipment"

                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"

                            loading="lazy"

                        >

                    </div>



                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy sm:text-lg">

                        Odor<br>Control

                    </span>



                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>

                </a>



            </div>
            <div id="product-search-empty" class="mt-4 hidden rounded-lg border border-dashed border-[#CFD9E5] bg-[#F7F9FC] px-5 py-8 text-center" role="status">
                <p class="font-semibold text-[#183E6E]">No matching product category found</p>
                <p class="mt-1 text-sm text-[#64748B]">Try another keyword or browse all categories.</p>
                <a href="{{ route('product.index') }}" class="mt-3 inline-flex min-h-9 items-center rounded-md bg-[#183E6E] px-4 py-2 text-xs font-semibold text-white">Clear search</a>
            </div>



        </section>

    </main>



    {{-- FOOTER --}}

    @include('components.footer')

@endsection