@extends('layouts.app')

@section('title', 'PT Wira Griya | Integrated Industrial Products & Solutions')
@section('description', 'Explore industrial equipment and integrated solutions from PT Wira Griya, including hoists and cranes, painting and coating systems, industrial machinery, solvent cleaning, and odor control.')

@section('content')
    @include('components.header')

    <main class="w-full overflow-x-clip">
        {{-- Desktop artwork and product hotspots are intentionally preserved. --}}
        <section class="relative hidden w-full overflow-hidden lg:block" aria-label="PT Wira Griya industrial product overview">
            <h1 class="sr-only">PT Wira Griya — Integrated Industrial Products</h1>
            <img
                src="{{ asset('assets/images/home/mainpage.webp') }}"
                alt="PT Wira Griya industrial solutions across manufacturing facilities"
                class="block h-auto w-full"
                fetchpriority="high"
                width="1673"
                height="940"
            >

            <a href="{{ url('/') }}" aria-label="Home" id="home-highlight"
               class="absolute left-[2.8%] top-0 z-[60] block w-[34%] cursor-pointer">
                <img src="{{ asset('assets/images/home/home.jpeg') }}" alt="PT Wira Griya home" class="block h-auto w-full object-contain">
            </a>

            <a href="{{ url('/product/coating-painting/robotic-painting') }}"
               aria-label="Explore robotic painting solutions"
               class="group absolute left-[24%] top-[35%] z-10 block w-[15%] cursor-pointer">
                <img src="{{ asset('assets/images/home/robot-paint.png') }}" alt="Industrial paint robot"
                     class="block h-auto w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 motion-reduce:transition-none">
            </a>

            <a href="{{ url('/product/hoist-crane/heavy-duty-hoist') }}"
               aria-label="Explore heavy duty hoists"
               class="group absolute left-[3%] top-[12%] z-10 block w-[12%] cursor-pointer">
                <img src="{{ asset('assets/images/home/crane.png') }}" alt="Heavy duty hoist"
                     class="block h-auto w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 motion-reduce:transition-none">
            </a>

            <a href="{{ url('/product/hoist-crane/electric-chain-hoist') }}"
               aria-label="Explore electric chain hoists"
               class="group absolute left-[49%] top-[21%] z-10 block w-[10%] cursor-pointer">
                <img src="{{ asset('assets/images/home/crane3.png') }}" alt="Electric chain hoist"
                     class="block h-auto w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 motion-reduce:transition-none">
            </a>

            <a href="{{ url('/product/industrial-machinery/powder-material-handling') }}"
               aria-label="Explore industrial machinery"
               class="group absolute left-[53%] top-[40%] z-10 block w-[39%] cursor-pointer">
                <img src="{{ asset('assets/images/home/industrial-machinery.png') }}" alt="Industrial machinery"
                     class="block h-auto w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 motion-reduce:transition-none">
            </a>

            <a href="{{ url('/product/coating-painting/powder-coating') }}"
               aria-label="Explore powder coating solutions"
               class="group absolute left-[19.5%] top-[51%] z-10 block w-[13%] cursor-pointer">
                <img src="{{ asset('assets/images/home/paint.png') }}" alt="Powder coating equipment"
                     class="block h-auto w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 motion-reduce:transition-none">
            </a>

            <a href="{{ url('/product/odor-control') }}"
               aria-label="Explore odor control solutions"
               class="group absolute left-[22%] top-[14%] z-10 block w-[30%] cursor-pointer">
                <img src="{{ asset('assets/images/home/odor.png') }}" alt="Odor control system"
                     class="block h-auto w-full object-contain transition-transform duration-500 ease-out group-hover:scale-110 motion-reduce:transition-none">
            </a>
        </section>

        {{-- Dedicated mobile hero; the approved desktop artwork remains unchanged. --}}
        <section class="home-mobile lg:hidden">
            <div class="relative isolate overflow-hidden bg-[#183E6E]">
                <img
                    src="{{ asset('assets/images/home/hero-mobile.jpg') }}"
                    alt="Manufacturing facility with industrial equipment"
                    class="home-mobile__hero-image"
                    fetchpriority="high"
                    width="750"
                    height="600"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#102E52]/95 via-[#102E52]/35 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 z-10 px-5 pb-7 pt-24 sm:px-7">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F5B940]">Integrated Industrial Products</p>
                    <h1 class="mt-2 max-w-[18ch] text-4xl font-bold leading-tight text-white sm:text-5xl">
                        Industrial Solutions for Your Business
                    </h1>
                    <p class="mt-3 max-w-md text-base leading-relaxed text-white/90">
                        Reliable equipment and integrated industrial solutions to support your production needs.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-3">
                        <a href="{{ url('/product') }}" class="inline-flex min-h-11 items-center justify-center gap-2 rounded-md bg-[#F5B940] px-5 py-3 text-base font-bold text-[#183E6E] shadow-sm transition duration-300 hover:-translate-y-0.5 hover:shadow-lg active:scale-[0.98]">
                            Explore Products <span aria-hidden="true">→</span>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="inline-flex min-h-11 items-center justify-center rounded-md border border-white/75 px-5 py-3 text-base font-semibold text-white transition hover:bg-white/10">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured product categories are available on both desktop and mobile. --}}
        <section class="mx-auto w-full max-w-[1600px] px-4 py-10 sm:px-6 sm:py-14 lg:px-10 lg:py-16" aria-labelledby="home-categories-title">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#1455D9]">Explore our solutions</p>
                    <h2 id="home-categories-title" class="mt-2 text-3xl font-bold tracking-tight text-[#183E6E] sm:text-4xl">Industrial Product Categories</h2>
                    <p class="mt-2 max-w-2xl text-base leading-relaxed text-[#52647A] sm:text-lg">Browse our main product areas and find equipment suited to your operation.</p>
                </div>
                <a href="{{ url('/product') }}" class="inline-flex min-h-10 shrink-0 items-center gap-2 text-base font-semibold text-[#1455D9] transition hover:text-[#183E6E]">
                    View all products <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-5">
                <a href="{{ url('/product/hoist-crane') }}" class="home-category-card group">
                    <span class="home-category-card__image"><img src="{{ asset('assets/images/thumbnail_product/crane.png') }}" alt="Hoist and crane equipment" loading="lazy" width="240" height="150"></span>
                    <span class="home-category-card__title">Hoist &amp; Crane</span>
                    <span class="home-category-card__link">Explore solutions <span aria-hidden="true">↗</span></span>
                </a>
                <a href="{{ url('/product/coating-painting') }}" class="home-category-card group">
                    <span class="home-category-card__image"><img src="{{ asset('assets/images/thumbnail_product/paint.png') }}" alt="Painting and coating equipment" loading="lazy" width="240" height="150"></span>
                    <span class="home-category-card__title">Painting &amp; Coating</span>
                    <span class="home-category-card__link">Explore solutions <span aria-hidden="true">↗</span></span>
                </a>
                <a href="{{ url('/product/industrial-machinery') }}" class="home-category-card group">
                    <span class="home-category-card__image"><img src="{{ asset('assets/images/thumbnail_product/machinery.png') }}" alt="Industrial machinery" loading="lazy" width="240" height="150"></span>
                    <span class="home-category-card__title">Industrial Machinery</span>
                    <span class="home-category-card__link">Explore solutions <span aria-hidden="true">↗</span></span>
                </a>
                <a href="{{ url('/product/solvent-cleaner') }}" class="home-category-card group">
                    <span class="home-category-card__image"><img src="{{ asset('assets/images/thumbnail_product/solvent.png') }}" alt="Solvent cleaner equipment" loading="lazy" width="240" height="150"></span>
                    <span class="home-category-card__title">Solvent Cleaner</span>
                    <span class="home-category-card__link">Explore solutions <span aria-hidden="true">↗</span></span>
                </a>
                <a href="{{ url('/product/odor-control') }}" class="home-category-card group col-span-2 sm:col-span-1">
                    <span class="home-category-card__image"><img src="{{ asset('assets/images/thumbnail_product/odor.png') }}" alt="Industrial odor control equipment" loading="lazy" width="240" height="150"></span>
                    <span class="home-category-card__title">Odor Control</span>
                    <span class="home-category-card__link">Explore solutions <span aria-hidden="true">↗</span></span>
                </a>
            </div>
        </section>

        {{-- Company introduction and clear conversion path. --}}
        <section class="border-y border-[#E5ECF3] bg-[#F5F8FC]">
            <div class="mx-auto grid w-full max-w-[1600px] items-center gap-8 px-4 py-10 sm:px-6 sm:py-14 md:grid-cols-2 lg:gap-14 lg:px-10 lg:py-16">
                <div class="overflow-hidden rounded-xl bg-white shadow-sm">
                    <img src="{{ asset('assets/images/about/about.png') }}" alt="PT Wira Griya industrial solutions and equipment" class="block aspect-[4/3] w-full object-cover" loading="lazy" width="800" height="600">
                </div>
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#1455D9]">About PT Wira Griya</p>
                    <h2 class="mt-2 text-3xl font-bold leading-tight tracking-tight text-[#183E6E] sm:text-4xl lg:text-5xl">An industrial partner focused on practical solutions</h2>
                    <p class="mt-4 text-base leading-7 text-[#52647A] sm:text-lg">
                        PT Wira Griya provides industrial machinery and engineering solutions, supported by long-term partnerships and a focus on customer requirements. Our product areas span lifting equipment, painting and coating, industrial machinery, solvent cleaning, and odor control.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ url('/about-us') }}" class="inline-flex min-h-11 items-center justify-center rounded-md bg-[#183E6E] px-5 py-3 text-base font-semibold text-white transition hover:bg-[#102E52]">Discover Wira Griya</a>
                        <a href="{{ url('/contact-us') }}" class="inline-flex min-h-11 items-center justify-center rounded-md border border-[#183E6E]/25 bg-white px-5 py-3 text-base font-semibold text-[#183E6E] transition hover:border-[#1455D9] hover:text-[#1455D9]">Talk to our team</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-[1600px] px-4 py-10 sm:px-6 sm:py-14 lg:px-10">
            <div class="relative overflow-hidden rounded-2xl bg-[#183E6E] px-6 py-8 text-white sm:px-9 sm:py-10 lg:flex lg:items-center lg:justify-between lg:gap-8">
                <div class="pointer-events-none absolute -right-16 -top-24 size-72 rounded-full border-[36px] border-white/5"></div>
                <div class="relative max-w-2xl">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#F5B940]">Start a conversation</p>
                    <h2 class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">Looking for the right equipment for your operation?</h2>
                    <p class="mt-3 text-base leading-relaxed text-white/80 sm:text-lg">Contact our team to discuss your requirements, product information, or project inquiry.</p>
                </div>
                <a href="{{ url('/contact-us') }}" class="relative mt-6 inline-flex min-h-11 shrink-0 items-center justify-center gap-2 rounded-md bg-[#F5B940] px-5 py-3 text-base font-bold text-[#183E6E] transition hover:-translate-y-0.5 hover:bg-[#FFD06B] lg:mt-0">
                    Contact Us <span aria-hidden="true">→</span>
                </a>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection