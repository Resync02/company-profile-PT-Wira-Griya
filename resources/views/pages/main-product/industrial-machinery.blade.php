@extends('layouts.app')

@section('title', 'Industrial Machinery | PT Wira Griya')
@section('description', 'Explore industrial machinery and automation solutions from PT Wira Griya.')

@section('content')
    @include('components.header')

    {{-- HERO BANNER --}}
    <section class="relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]">
        <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"><img src="{{ asset('assets/images/thumbnail_product/machinery.png') }}"
            alt="Industrial machinery and production equipment"
            class="absolute inset-0 size-full object-cover object-center"
        ></picture>
        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/10"></div>

        <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
            <div class="max-w-2xl">
                <p class="text-sm font-bold tracking-wide text-navy">OUR PRODUCTS</p>
                <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-dark md:text-5xl">
                    Industrial Machinery<br>
                    <span class="text-[#F5B940]">Production Solutions.</span>
                </h1>
                <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                    Discover machinery for material handling, processing, filling, packaging,
                    and end-of-line automation to support efficient production.
                </p>
            </div>
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
                        href="{{ url('/product') }}"
                        class="hidden md:inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
                    >
                        <span aria-hidden="true" class="text-2xl">←</span>
                        Back
                    </a>
                    <h2 class="mt-2 text-2xl font-bold text-navy md:text-3xl">
                        Industrial Machinery
                    </h2>
                    <p class="mt-1 text-base leading-relaxed text-dark/80">
                    Browse our machinery categories and find equipment designed to support your
                    production process, improve operational efficiency, and meet your application needs.
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
                            <option value="business_type" @selected(request('sort', 'business_type') === 'business_type')>
                                Business Type
                            </option>
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

            {{-- INDUSTRIAL MACHINERY CATEGORY CARDS --}}
            <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-5">
                <a
                    href="{{ url('/product/industrial-machinery/powder-material-handling') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Powder & Material Handling" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Powder &amp; Material Handling</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/industrial-machinery/tube-filling-sealing') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Tube Filling & Sealing" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Tube Filling &amp; Sealing</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/industrial-machinery/packaging-solutions') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Packaging Solutions" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Packaging Solutions</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/industrial-machinery/mixing-process-system') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Mixing & Process System" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Mixing &amp; Process System</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/industrial-machinery/solid-dosage-system') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Solid Dosage System" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Solid Dosage System</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/industrial-machinery/liquid-filling-capping') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Liquid Filling & Capping" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Liquid Filling &amp; Capping</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/industrial-machinery/labeling-end-of-line-automation') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[34%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Liquid Filling & Capping" class="h-full w-full object-contain transition duration-300 group-hover:scale-105" loading="lazy" onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/machinery.png') }}';">
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Labelling &amp; End-of-Line Automation</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection
