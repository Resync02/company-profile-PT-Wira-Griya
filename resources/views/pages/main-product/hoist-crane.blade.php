@extends('layouts.app')

@section('title', 'Hoist & Crane | PT Wira Griya')
@section('description', 'Explore industrial hoist and crane solutions from PT Wira Griya.')

@section('content')
    @include('components.header')

    {{-- HERO BANNER --}}
    <section class="relative aspect-[5/4] overflow-hidden sm:aspect-[1351/400]">
        <picture class="absolute inset-0 block h-full w-full"><source media="(max-width: 767px)" srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"><img src="{{ asset('assets/images/thumbnail_product/crane.png') }}"
            alt="Industrial hoist and crane equipment"
            class="absolute inset-0 size-full object-cover object-center"
        ></picture>
        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/10"></div>

        <div class="relative z-10 mx-auto flex h-full max-w-[1600px] items-start px-6 pt-20 pb-8 sm:pt-24 md:px-10 md:pt-28 lg:pt-32">
            <div class="max-w-2xl">
                <p class="text-sm font-bold tracking-wide text-navy">OUR PRODUCTS</p>
                <h1 class="mt-2 text-4xl font-bold leading-tight tracking-tight text-dark md:text-5xl">
                    Hoist &amp; Crane<br>
                    <span class="text-[#F5B940]">Lifting Solutions.</span>
                </h1>
                <p class="mt-3 max-w-lg text-base leading-relaxed text-dark/90">
                    Explore reliable lifting equipment designed to support material handling
                    and demanding industrial operations.
                </p>
            </div>
        </div>
    </section>

    

    {{-- MAIN CONTENT --}}
    
    <main class="flex-1 bg-white">
        <section class="mx-auto max-w-[1600px] px-5 pt-3 pb-8 md:px-8 md:pt-4 md:pb-10">

                            {{-- BACK --}}
                    <a
                        href="{{ route('product.index') }}"
                        class="inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
                    >
                        <span aria-hidden="true" class="text-2xl">←</span>
                        Back
                    </a>
                    
            {{-- BACK + SEARCH / SORT --}}
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    <h2 class="mt-2 text-2xl font-bold text-navy md:text-3xl">
                        Hoist &amp; Crane
                    </h2>
                    <p class="mt-1 text-base leading-relaxed text-dark/80">
                    Browse our hoist categories to find lifting solutions suited to your application,
                    load requirements, and operating environment.
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

            {{-- HOIST CATEGORY CARDS --}}
            <div class="mt-7 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <a
                    href="{{ url('/product/hoist-crane/electric-chain-hoist') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[38%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img
                            src="{{ asset('assets/images/home/crane3.png') }}"
                            alt="Electric-Chain Hoist"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                            onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/crane.png')}}';"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Electric-Chain Hoist</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/hoist-crane/wire-rope-hoist') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[38%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img
                            src="{{ asset('assets/images/home/crane2.png') }}"
                            alt="Wire Rope Hoist"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                            onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/crane.png') }}';"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Wire Rope Hoist</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>

                <a
                    href="{{ url('/product/hoist-crane/heavy-duty-hoist') }}"
                    class="group flex min-h-[124px] items-center gap-4 rounded-md border-2 border-[#5575FF] bg-white p-3 transition hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-md"
                >
                    <div class="flex h-20 w-[38%] shrink-0 items-center justify-center overflow-hidden rounded bg-[#F5F9FF] p-1">
                        <img
                            src="{{ asset('assets/images/home/crane.png') }}"
                            alt="Heavy-Duty Hoist"
                            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
                            loading="lazy"
                            onerror="this.onerror=null; this.src='{{ asset('assets/images/thumbnail_product/crane.png') }}';"
                        >
                    </div>
                    <span class="min-w-0 flex-1 text-base font-bold leading-tight text-navy">Heavy-Duty Hoist</span>
                    <span class="shrink-0 text-2xl font-bold text-navy transition-transform group-hover:translate-x-1" aria-hidden="true">›</span>
                </a>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection