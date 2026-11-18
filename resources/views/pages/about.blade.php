
@extends('layouts.app')

@section('title', 'About Us | PT Wira Griya')
@section('description', 'Learn about PT Wira Griya, our industrial engineering background, company milestones, customers, partners, and product capabilities.')

@section('content')
    @include('components.header')


{{-- HERO SECTION --}}
<section class="relative w-full overflow-hidden">

    {{-- RESPONSIVE BANNER IMAGE --}}
    <picture class="block w-full">

        {{-- MOBILE --}}
        <source
            media="(max-width: 767px)"
            srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"
        >

        {{-- DESKTOP --}}
        <img
            src="{{ asset('assets/images/banner/banner-d.jpg') }}"
            alt="PT Wira Griya office building"
            class="block h-auto w-full"
            fetchpriority="high"
        >

    </picture>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/75 to-white/5"></div>


    {{-- HERO CONTENT --}}
    <div class="absolute inset-0 z-10 mx-auto flex w-full max-w-[1600px] items-center px-4 sm:px-6 md:px-10">

        <div class="max-w-xl">

            <p class="text-sm font-bold tracking-wide text-[#1455D9] sm:text-base md:text-lg">
                ABOUT US
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-[#183E6E] sm:text-3xl md:text-5xl">
                PT WIRA GRIYA
            </h1>

            <h2 class="mt-1 text-sm font-semibold text-dark sm:text-lg md:text-2xl">
                Reliable Partner for a Better Tomorrow
            </h2>

            <p class="mt-2 max-w-md text-[11px] leading-[1.4] text-dark/90 sm:text-xs md:text-sm">
                We provide industrial machinery and engineering solutions
                to support a wide range of industries, delivering reliable
                products, professional services, and innovative solutions
                for a more sustainable future.
            </p>

        </div>

    </div>

</section>

    {{-- OUR STORY --}}
    <section class="bg-[#EEEEEE]">
        <div class="mx-auto max-w-[1600px] px-5 py-8 md:px-8">

<div class="mt-6 grid grid-cols-1 items-start gap-6 md:grid-cols-[0.85fr_1.15fr]">
                {{-- Story Image --}}
                <div class="overflow-hidden">
                    <img
                        src="{{ asset('assets/images/about/about.png') }}"
                        alt="Industrial machinery and production facility"
                        class="h-full max-h-[390px] min-h-[240px] w-full object-cover"
                        loading="lazy"
                    >
                </div>

                {{-- Story Content --}}
                <div>
                    <p class="text-lg font-bold text-navy">
                        Our Story
                    </p>

                    <h2 class="text-3xl font-bold leading-[1.08] tracking-tight text-dark md:text-4xl">
                        Building Sustainable<br class="hidden lg:block">
                        Industries Together
                    </h2>

                    <p class="mt-3 text-sm leading-[1.4] text-dark/90">
                        Since our establishment, PT Wira Griya has been committed
                        to providing high-quality machinery and engineering
                        solutions. We continue to grow through strong partnerships,
                        a focus on customer satisfaction, and a dedication to innovation.
                    </p>

                    {{-- COMPANY STATISTICS --}}
                    <div class="mt-6 grid grid-cols-2 gap-2 sm:grid-cols-4 sm:gap-3">

                        {{-- Years Experience --}}
                        <button
                            type="button"
                            data-about-modal="history"
                            class="group flex cursor-pointer flex-col items-center justify-center rounded-lg px-2 py-2 text-center transition duration-300 hover:bg-white/80 hover:text-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:border-r sm:border-gray-300"
                        >
                            <span class="text-3xl font-bold text-navy">50+</span>
                            <span class="mt-1 text-sm text-dark/80">Years Experience</span>
                        </button>

                        {{-- Customer Satisfied --}}
                        <button
                            type="button"
                            data-about-modal="customers"
                            class="group flex cursor-pointer flex-col items-center justify-center rounded-lg px-2 py-2 text-center transition duration-300 hover:bg-white/80 hover:opacity-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:border-r sm:border-gray-300"
                        >
                            <span class="text-3xl font-bold text-navy">500+</span>
                            <span class="mt-1 text-sm text-dark/80">Customer Satisfied</span>
                        </button>

                        {{-- Our Partners --}}
                        <button
                            type="button"
                            data-about-modal="partners"
                            class="group flex cursor-pointer flex-col items-center justify-center rounded-lg px-2 py-2 text-center transition duration-300 hover:bg-white/80 hover:opacity-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:border-r sm:border-gray-300"
                        >
                            <span class="text-3xl font-bold text-navy">100+</span>
                            <span class="mt-1 text-sm text-dark/80">Our Partners</span>
                        </button>

                        {{-- Cities Served --}}
                        <button
                            type="button"
                            data-about-modal="cities"
                            class="group flex cursor-pointer flex-col items-center justify-center rounded-lg px-2 py-2 text-center transition duration-300 hover:bg-white/80 hover:opacity-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3]"
                        >
                            <span class="text-3xl font-bold text-navy">121+</span>
                            <span class="mt-1 text-sm text-dark/80">Cities Served</span>
                        </button>

                    </div>


                    {{-- COMPANY INFORMATION BUTTONS --}}
                    <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-4">

                        {{-- Visi & Misi --}}
                        <button
                            type="button"
                            data-about-modal="vision"
                            class="group flex min-h-[112px] cursor-pointer flex-col items-center justify-center gap-2 rounded-xl border border-transparent px-3 py-4 text-center text-sm font-semibold text-primary transition duration-300 hover:-translate-y-1 hover:border-[#D7E3F0] hover:bg-white hover:text-navy hover:shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:min-h-[124px] sm:text-base"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="9"/><path d="m15.5 8.5-2.3 4.7-4.7 2.3 2.3-4.7 4.7-2.3Z"/>
                            </svg>
                            <span>Vision &amp; Mission</span>
                        </button>

                        {{-- Business Focus --}}
                        <button
                            type="button"
                            data-about-modal="focus"
                            class="group flex min-h-[112px] cursor-pointer flex-col items-center justify-center gap-2 rounded-xl border border-transparent px-3 py-4 text-center text-sm font-semibold text-primary transition duration-300 hover:-translate-y-1 hover:border-[#D7E3F0] hover:bg-white hover:text-navy hover:shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:min-h-[124px] sm:text-base"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 21V7l9-4v18M12 10h9v11M6 10h2M6 14h2M6 18h2M15 14h2M15 18h2"/>
                            </svg>
                            <span>Business Focus</span>
                        </button>

                        {{-- Certifications --}}
                        <button
                            type="button"
                            data-about-modal="certifications"
                            class="group flex min-h-[112px] cursor-pointer flex-col items-center justify-center gap-2 rounded-xl border border-transparent px-3 py-4 text-center text-sm font-semibold text-primary transition duration-300 hover:-translate-y-1 hover:border-[#D7E3F0] hover:bg-white hover:text-navy hover:shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:min-h-[124px] sm:text-base"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="8" r="5"/><path d="m8.5 12-1 9 4.5-2.5 4.5 2.5-1-9"/>
                            </svg>
                            <span>Certifications</span>
                        </button>


                        {{-- Testimonials --}}
                        <button
                            type="button"
                            data-about-modal="testimonial"
                            class="group flex min-h-[112px] cursor-pointer flex-col items-center justify-center gap-2 rounded-xl border border-transparent px-3 py-4 text-center text-sm font-semibold text-primary transition duration-300 hover:-translate-y-1 hover:border-[#D7E3F0] hover:bg-white hover:text-navy hover:shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2D5FA3] sm:min-h-[124px] sm:text-base"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 21c3-1 5-3 5-7V5H2v7h4"/>
                                <path d="M14 21c3-1 5-3 5-7V5h-6v7h4"/>
                            </svg>
                            <span>Testimonial</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- CUSTOMER LOGOS SLIDER TEMPLATE --}}
<template
    id="customers-modal-template"
    data-client-logo-base="{{ asset('assets/images/logo/client') }}"
>
    <div class="relative">
        <div class="relative px-8 sm:px-10">
            {{-- Previous --}}
            <button
                type="button"
                data-customers-prev
                aria-label="Previous customer logos"
                class="absolute left-0 top-1/2 z-10 flex size-8 -translate-y-1/2 items-center justify-center rounded-full border border-gray-300 bg-gray-100 text-2xl text-gray-500 shadow transition hover:bg-white"
            >
                &lsaquo;
            </button>

            {{-- Slider viewport --}}
            <div
                data-customers-viewport
                class="overflow-hidden"
            >
                <div
                    data-customers-track
                    class="flex items-center transition-transform duration-500 ease-in-out"
                ></div>
            </div>

            {{-- Next --}}
            <button
                type="button"
                data-customers-next
                aria-label="Next customer logos"
                class="absolute right-0 top-1/2 z-10 flex size-8 -translate-y-1/2 items-center justify-center rounded-full border border-gray-300 bg-gray-100 text-2xl text-gray-500 shadow transition hover:bg-white"
            >
                &rsaquo;
            </button>
        </div>

        {{-- Slider dots --}}
        <div
            data-customers-dots
            class="mt-5 flex justify-center gap-2"
            aria-label="Customer logo slider pages"
        ></div>
    </div>
</template>



{{-- PARTNER LOGOS SLIDER TEMPLATE --}}
<template
    id="partners-modal-template"
    data-partner-logo-base="{{ asset('assets/images/logo/partner') }}"
>
    <div class="relative">

<div class="flex items-center gap-3">
    <button
        type="button"
        data-partners-prev
        aria-label="Previous partner logos"
        class="flex size-9 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-2xl text-navy shadow-sm hover:bg-gray-100"
    >&lsaquo;</button>

    <div
        data-partners-viewport
        class="min-w-0 flex-1 overflow-hidden"
    >
        <div
            data-partners-track
            class="flex w-full items-stretch transition-transform duration-500 ease-in-out"
        ></div>
    </div>

    <button
        type="button"
        data-partners-next
        aria-label="Next partner logos"
        class="flex size-9 shrink-0 items-center justify-center rounded-full border border-gray-300 bg-white text-2xl text-navy shadow-sm hover:bg-gray-100"
    >&rsaquo;</button>
</div>

        <div
            data-partners-dots
            class="mt-5 flex justify-center gap-2"
            aria-label="Partner logo slider pages"
        ></div>
    </div>
</template>

{{-- IMAGE MODAL: COMPANY HISTORY --}}
<template id="history-modal-template">
    <div class="flex h-full min-h-0 w-full items-center justify-center">
        <img
            src="{{ asset('assets/images/about/history/history.png') }}"
            alt="PT Wira Griya 50 years of company experience"
            width="1670"
            height="942"
            class="block h-auto max-h-full w-full max-w-full rounded-lg object-contain"
            loading="lazy"
        >
    </div>
</template>

{{-- BUSINESS FOCUS CONTENT: BUSINESS TYPE --}}
<template id="focus-modal-template">

    <style>
        .bfc-focus-content {
            display: flex;
            min-height: 100%;
            flex-direction: column;
            justify-content: center;
            gap: 24px;
        }

        /* =========================================
           PRODUCT CARD
        ========================================= */
        .bfc-hover-card {
            position: relative;
            height: 420px;
            overflow: visible;
            cursor: pointer;
        }

        .bfc-hover-card:hover,
        .bfc-hover-card:focus-within {
            z-index: 50;
        }

        /* =========================================
           HORIZONTAL HOVER BUBBLE
        ========================================= */
        .bfc-hover-bubble {
            position: absolute;
            top: 50%;
            right: calc(100% + 12px);
            width: 320px;
            min-height: 140px;
            padding: 18px;
            border: 1px solid #D1D5DB;
            border-radius: 12px;
            background: #FFFFFF;
            box-shadow: 0 8px 24px rgba(30, 70, 117, 0.16);

            opacity: 0;
            visibility: hidden;
            pointer-events: none;

            transform: translate(8px, -50%);
            transition:
                opacity 200ms ease,
                visibility 200ms ease,
                transform 200ms ease;

            z-index: 60;
        }

        /* Bubble arrow pointing right */
        .bfc-hover-bubble::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 100%;
            transform: translateY(-50%);
            border: 9px solid transparent;
            border-left-color: #FFFFFF;
        }

        /* Show bubble on hover */
        .bfc-hover-card:hover .bfc-hover-bubble,
        .bfc-hover-card:focus-within .bfc-hover-bubble {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translate(0, -50%);
        }

        /* =========================================
           FIRST CARD: BUBBLE OPENS TO THE RIGHT
        ========================================= */
        .bfc-hover-card--right .bfc-hover-bubble {
            right: auto;
            left: calc(100% + 12px);
            transform: translate(-8px, -50%);
        }

        .bfc-hover-card--right .bfc-hover-bubble::after {
            left: auto;
            right: 100%;
            border-left-color: transparent;
            border-right-color: #FFFFFF;
        }

        .bfc-hover-card--right:hover .bfc-hover-bubble,
        .bfc-hover-card--right:focus-within .bfc-hover-bubble {
            transform: translate(0, -50%);
        }

        /* =========================================
           LOGO SLIDER
        ========================================= */
        .bfc-logo-window {
            width: 100%;
            overflow: hidden;
            margin-top: 14px;
        }

        .bfc-logo-track {
            display: flex;
            width: max-content;
            animation: none;
        }

        .bfc-logo-set {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            gap: 26px;
            padding-right: 26px;
        }

        .bfc-logo-image {
            display: block;
            flex-shrink: 0;
            width: 110px;
            height: 54px;
            object-fit: contain;
        }

        /* Start animation only when the card is hovered */
        .bfc-hover-card:hover .bfc-logo-track,
        .bfc-hover-card:focus-within .bfc-logo-track {
            animation: bfc-marquee 16s linear infinite;
        }

        @keyframes bfc-marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* Pause while pointer is directly over the logo area */
        .bfc-logo-window:hover .bfc-logo-track {
            animation-play-state: paused;
        }

        /* =========================================
           SINGLE LOGO DISPLAY
        ========================================= */
        .bfc-single-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: 12px;
        }

        .bfc-single-logo img {
            width: 145px;
            height: 62px;
            object-fit: contain;
        }

        /* =========================================
           RESPONSIVE
        ========================================= */
        @media (max-width: 640px) {
            .bfc-hover-bubble,
            .bfc-hover-card--right .bfc-hover-bubble {
                top: 50%;
                left: 50%;
                right: auto;
                width: min(320px, calc(100vw - 40px));
                transform: translate(-50%, -50%);
            }

            .bfc-hover-card:hover .bfc-hover-bubble,
            .bfc-hover-card:focus-within .bfc-hover-bubble {
                transform: translate(-50%, -50%);
            }

            .bfc-hover-bubble::after {
                display: none;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .bfc-hover-bubble {
                transition: none;
            }

            .bfc-hover-card:hover .bfc-logo-track,
            .bfc-hover-card:focus-within .bfc-logo-track {
                animation: none;
            }
        }
    </style>


    <div class="bfc-focus-content">



        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-5">


            {{-- =====================================
                 1. HOIST & LIFTING
            ====================================== --}}
            <div class="bfc-hover-card bfc-hover-card--right">

                {{-- PRODUCT CARD --}}
                <div class="flex h-full flex-col">

                    <div class="h-64 overflow-hidden bg-white">
                        <img
                            src="{{ asset('assets/images/thumbnail_product/crane.png') }}"
                            alt="Hoist and crane equipment"
                            class="h-full w-full object-contain p-2"
                            loading="lazy"
                        >
                    </div>

                    <div class="flex flex-1 flex-col justify-center border-t border-gray-300 px-2 py-3 text-center">

                        <h3 class="text-base font-bold text-navy sm:text-lg">
                            Hoist &amp; Crane
                        </h3>

                        <p class="mt-1 text-sm leading-snug text-dark/80">
                            Custom industrial machines for production needs
                        </p>
                    </div>
                </div>


                {{-- HOVER BUBBLE: PARTNER LOGOS --}}
                <div class="bfc-hover-bubble">

                    <h3 class="text-center text-base font-bold text-navy">
                        Our Hoist &amp; Crane Partners
                    </h3>

                    <div class="bfc-logo-window">

                        <div class="bfc-logo-track">

                            {{-- LOGO SET 1 --}}
                            <div class="bfc-logo-set">

                                <img
                                    src="{{ asset('assets/images/about/partners/gh.png') }}"
                                    alt="GH Cranes"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/cmak.png') }}"
                                    alt="CMAK"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/wh.png') }}"
                                    alt="World Hoist"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/nh.png') }}"
                                    alt="Nippon Hoist"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                            </div>

                            {{-- LOGO SET 2: DUPLICATE --}}
                            <div class="bfc-logo-set" aria-hidden="true">

                                <img
                                    src="{{ asset('assets/images/about/partners/gh.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/cmak.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/wh.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/nh.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                            </div>

                        </div>
                    </div>
                </div>

            </div>



            {{-- =====================================
                 2. COATING & PAINTING
            ====================================== --}}
            <div class="bfc-hover-card">

                {{-- PRODUCT CARD --}}
                <div class="flex h-full flex-col">

                    <div class="h-64 overflow-hidden bg-white">
                        <img
                            src="{{ asset('assets/images/thumbnail_product/paint.png') }}"
                            alt="Coating and painting equipment"
                            class="h-full w-full object-contain p-2"
                            loading="lazy"
                        >
                    </div>

                    <div class="flex flex-1 flex-col justify-center border-t border-gray-300 px-2 py-3 text-center">

                        <h3 class="text-base font-bold text-navy sm:text-lg">
                            Coating &amp; Painting
                        </h3>

                        <p class="mt-1 text-sm leading-snug text-dark/80">
                            Coating and painting solutions for durable and high-quality finishes
                        </p>
                    </div>
                </div>


                {{-- HOVER BUBBLE: PARTNER LOGOS --}}
                <div class="bfc-hover-bubble">

                    <h3 class="text-center text-base font-bold text-navy">
                        Our Coating Partners
                    </h3>

                    <div class="bfc-logo-window">

                        <div class="bfc-logo-track">

                            {{-- LOGO SET 1 --}}
                            <div class="bfc-logo-set">

                                <img
                                    src="{{ asset('assets/images/about/partners/asahi.png') }}"
                                    alt="ASAHI SUNAC"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/bfcoating.png') }}"
                                    alt="BF Coating"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/vr.png') }}"
                                    alt="VR Coatings"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                            </div>

                            {{-- LOGO SET 2: DUPLICATE --}}
                            <div class="bfc-logo-set" aria-hidden="true">

                                <img
                                    src="{{ asset('assets/images/about/partners/asahi.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/bfcoating.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/vr.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                            </div>

                        </div>
                    </div>
                </div>

            </div>



            {{-- =====================================
                 3. MACHINERY
            ====================================== --}}
            <div class="bfc-hover-card">

                {{-- PRODUCT CARD --}}
                <div class="flex h-full flex-col">

                    <div class="h-64 overflow-hidden bg-white">
                        <img
                            src="{{ asset('assets/images/thumbnail_product/machinery.png') }}"
                            alt="Industrial machinery"
                            class="h-full w-full object-contain p-2"
                            loading="lazy"
                        >
                    </div>

                    <div class="flex flex-1 flex-col justify-center border-t border-gray-300 px-2 py-3 text-center">

                        <h3 class="text-base font-bold text-navy sm:text-lg">
                            Industrial Machinery
                        </h3>

                        <p class="mt-1 text-sm leading-snug text-dark/80">
                            Lifting and material handling solutions for various industries.
                        </p>
                    </div>
                </div>


                {{-- HOVER BUBBLE: PARTNER LOGOS --}}
                <div class="bfc-hover-bubble">

                    <h3 class="text-center text-base font-bold text-navy">
                        Our Industrial Machinery Partners
                    </h3>

                    <div class="bfc-logo-window">

                        <div class="bfc-logo-track">

                            {{-- LOGO SET 1 --}}
                            <div class="bfc-logo-set">

                                <img
                                    src="{{ asset('assets/images/about/partners/eversun.png') }}"
                                    alt="Eversun Machinery"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/yaskawa.png') }}"
                                    alt="Yaskawa"
                                    class="bfc-logo-image"
                                    loading="lazy"
                                >

                            </div>

                            {{-- LOGO SET 2: DUPLICATE --}}
                            <div class="bfc-logo-set" aria-hidden="true">

                                <img
                                    src="{{ asset('assets/images/about/partners/eversun.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                                <img
                                    src="{{ asset('assets/images/about/partners/yaskawa.png') }}"
                                    alt=""
                                    class="bfc-logo-image"
                                >

                            </div>

                        </div>
                    </div>
                </div>

            </div>



            {{-- =====================================
                 4. SOLVENT RECOVERY
            ====================================== --}}
            <div class="bfc-hover-card">

                {{-- PRODUCT CARD --}}
                <div class="flex h-full flex-col">

                    <div class="h-64 overflow-hidden bg-white">
                        <img
                            src="{{ asset('assets/images/thumbnail_product/solvent.png') }}"
                            alt="Industrial solvent cleaner equipment"
                            class="h-full w-full object-contain p-2"
                            loading="lazy"
                        >
                    </div>

                    <div class="flex flex-1 flex-col justify-center border-t border-gray-300 px-2 py-3 text-center">

                        <h3 class="text-base font-bold text-navy sm:text-lg">
                            Solvent Cleaner
                        </h3>

                        <p class="mt-1 text-sm leading-snug text-dark/80">
                            Air treatment solutions for a cleaner and safer environment
                        </p>
                    </div>
                </div>


                {{-- HOVER BUBBLE: WIRA GRIYA --}}
                <div class="bfc-hover-bubble text-center">

                    <h3 class="text-base font-bold text-navy">
                        Solvent Cleaner Solutions
                    </h3>

                    <div class="bfc-single-logo">

                        <img
                            src="{{ asset('assets/images/wira.png') }}"
                            alt="Wira Griya"
                            loading="lazy"
                        >

                    </div>

                    <p class="mt-2 text-sm leading-relaxed text-dark/70">
                        Industrial solvent recovery solutions from PT Wira Griya.
                    </p>

                </div>

            </div>



            {{-- =====================================
                 5. ODOR CONTROL
            ====================================== --}}
            <div class="bfc-hover-card">

                {{-- PRODUCT CARD --}}
                <div class="flex h-full flex-col">

                    <div class="h-64 overflow-hidden bg-white">
                        <img
                            src="{{ asset('assets/images/thumbnail_product/odor.png') }}"
                            alt="Industrial odor control equipment"
                            class="h-full w-full object-contain p-2"
                            loading="lazy"
                        >
                    </div>

                    <div class="flex flex-1 flex-col justify-center border-t border-gray-300 px-2 py-3 text-center">

                        <h3 class="text-base font-bold text-navy sm:text-lg">
                            Odor Control
                        </h3>

                        <p class="mt-1 text-sm leading-snug text-dark/80">
                            Air treatment solutions for a cleaner and safer environment
                        </p>    
                    </div>
                </div>


                {{-- HOVER BUBBLE: WIRA GRIYA --}}
                <div class="bfc-hover-bubble text-center">

                    <h3 class="text-base font-bold text-navy">
                        Odor Control Solutions
                    </h3>

                    <div class="bfc-single-logo">

                        <img
                            src="{{ asset('assets/images/wira.png') }}"
                            alt="Wira Griya"
                            loading="lazy"
                        >

                    </div>

                    <p class="mt-2 text-sm leading-relaxed text-dark/70">
                        Industrial odor control solutions from PT Wira Griya.
                    </p>

                </div>

            </div>


        </div>
    </div>

</template>

{{-- CITIES SERVED CONTENT --}}
<template id="cities-modal-template">
    <div class="flex h-full min-h-0 w-full items-center justify-center">
        <img
            src="{{ asset('assets/images/about/cities/serve.png') }}"
            alt="PT Wira Griya business network across Indonesia and cities served"
            width="1670"
            height="942"
            class="block h-auto max-h-full w-full max-w-full rounded-lg object-contain"
            loading="lazy"
        >
    </div>
</template>


{{-- TESTIMONIAL CONTENT --}}
<template id="testimonial-modal-template">
    <style>
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .testimonial-flip-scene {
            perspective: 1400px;
            min-width: 0;
        }

        .testimonial-flip-card {
            position: relative;
            height: 260px;
            cursor: pointer;
            outline: none;
        }

        .testimonial-flip-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 700ms cubic-bezier(.2,.7,.2,1);
        }

        .testimonial-flip-card:hover .testimonial-flip-inner,
        .testimonial-flip-card:focus-visible .testimonial-flip-inner,
        .testimonial-flip-card.is-flipped .testimonial-flip-inner {
            transform: rotateY(180deg);
        }

        .testimonial-flip-face {
            position: absolute;
            inset: 0;
            overflow: hidden;
            border-radius: 12px;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }

        .testimonial-flip-front {
            display: grid;
            grid-template-columns: minmax(0, .85fr) minmax(0, 1.15fr);
            border: 1px solid #DCE5EF;
            background: #FFFFFF;
            box-shadow: 0 8px 24px rgba(24,62,110,.08);
        }

        .testimonial-flip-back {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            transform: rotateY(180deg);
            background: linear-gradient(135deg, #183E6E, #102E52);
            color: white;
            text-align: center;
        }

        .testimonial-photo-wrap {
            min-width: 0;
            overflow: hidden;
            background: #DCE8F4;
        }

        .testimonial-photo-wrap img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .testimonial-front-info {
            display: flex;
            min-width: 0;
            flex-direction: column;
            justify-content: space-between;
            padding: 18px;
        }

        .testimonial-company-logo {
            display: flex;
            min-height: 70px;
            align-items: center;
            justify-content: flex-start;
        }

        .testimonial-company-logo img {
            display: block;
            width: min(100%, 190px);
            height: 58px;
            object-fit: contain;
            object-position: left center;
        }

        /* Testimonial gallery with side navigation */
        .testimonial-gallery {
            position: relative;
            width: 100%;
            padding: 0 48px;
        }

        .testimonial-side-nav {
            position: absolute;
            top: 50%;
            z-index: 20;
            display: flex;
            width: 36px;
            height: 36px;
            align-items: center;
            justify-content: center;
            transform: translateY(-50%);
            border: 1px solid #D1D5DB;
            border-radius: 9999px;
            background: #FFFFFF;
            color: #183E6E;
            font-size: 24px;
            line-height: 1;
            box-shadow: 0 1px 3px rgba(0,0,0,.12);
            transition: background .2s ease, color .2s ease;
        }

        .testimonial-side-nav:hover {
            background: #F3F4F6;
        }

        .testimonial-side-nav:focus-visible {
            outline: 2px solid #2D5FA3;
            outline-offset: 3px;
        }

        .testimonial-side-nav--prev {
            left: 0;
        }

        .testimonial-side-nav--next {
            right: 0;
        }

        .testimonial-pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 22px;
        }

        @media (max-width: 767px) {
            .testimonial-gallery {
                padding: 0 38px;
            }

            .testimonial-side-nav {
                width: 30px;
                height: 30px;
                font-size: 20px;
            }

            .testimonial-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .testimonial-flip-card {
                height: 235px;
            }

            .testimonial-front-info {
                padding: 14px;
            }

            .testimonial-company-logo {
                min-height: 58px;
            }

            .testimonial-company-logo img {
                height: 48px;
            }
        }

        @media (max-width: 380px) {
            .testimonial-flip-card {
                height: 210px;
            }

            .testimonial-flip-front {
                grid-template-columns: minmax(0, .78fr) minmax(0, 1.22fr);
            }

            .testimonial-front-info {
                padding: 10px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .testimonial-flip-inner {
                transition: none;
            }
        }
    </style>

    @php
        $testimonials = [
            [
                'name' => 'Customer 01',
                'position' => 'Procurement Manager',
                'company' => 'Company 01',
                'photo' => 'customer-1.jpg',
                'logo' => 'customer-company-1.png',
                'quote' => 'Sudah lebih dari 5 tahun kami bekerja sama dan sampai sekarang masih berhubungan dengan baik.',
            ],
            [
                'name' => 'Customer 02',
                'position' => 'Engineering Manager',
                'company' => 'Company 02',
                'photo' => 'customer-2.jpg',
                'logo' => 'customer-company-2.png',
                'quote' => 'Tim PT Wira Griya memberikan dukungan yang baik dan membantu kami menemukan solusi sesuai kebutuhan operasional.',
            ],
            [
                'name' => 'Customer 03',
                'position' => 'Purchasing Manager',
                'company' => 'Company 03',
                'photo' => 'customer-3.jpg',
                'logo' => 'customer-company-3.png',
                'quote' => 'Komunikasi berjalan dengan baik dan kebutuhan teknis kami ditangani secara profesional.',
            ],
            [
                'name' => 'Customer 04',
                'position' => 'Plant Manager',
                'company' => 'Company 04',
                'photo' => 'customer-4.jpg',
                'logo' => 'customer-company-4.png',
                'quote' => 'Kami menghargai kerja sama yang terjalin dan dukungan yang diberikan selama proses pengadaan.',
            ],
            [
                'name' => 'Customer 05',
                'position' => 'Operations Manager',
                'company' => 'Company 05',
                'photo' => 'customer-5.jpg',
                'logo' => 'customer-company-5.png',
                'quote' => 'PT Wira Griya menjadi salah satu rekan kerja yang dapat diajak berdiskusi mengenai kebutuhan industri kami.',
            ],
            [
                'name' => 'Customer 06',
                'position' => 'Technical Manager',
                'company' => 'Company 06',
                'photo' => 'customer-6.jpg',
                'logo' => 'customer-company-6.png',
                'quote' => 'Kami mendapatkan respons dan informasi teknis yang membantu dalam menentukan solusi peralatan.',
            ],
            [
                'name' => 'Customer 07',
                'position' => 'Project Manager',
                'company' => 'Company 07',
                'photo' => 'customer-7.jpg',
                'logo' => 'customer-company-7.png',
                'quote' => 'Kerja sama berlangsung dengan baik, mulai dari pembahasan kebutuhan hingga koordinasi proyek.',
            ],
            [
                'name' => 'Customer 08',
                'position' => 'General Manager',
                'company' => 'Company 08',
                'photo' => 'customer-8.jpg',
                'logo' => 'customer-company-8.png',
                'quote' => 'Kami berharap hubungan kerja sama ini dapat terus berkembang dan memberikan manfaat bagi kedua perusahaan.',
            ],
        ];
    @endphp

    <div class="w-full">

        {{-- TESTIMONIAL GALLERY WITH SIDE NAVIGATION --}}
        <div class="testimonial-gallery">
            <button
                type="button"
                data-testimonial-prev
                aria-label="Previous testimonial page"
                class="testimonial-side-nav testimonial-side-nav--prev"
            >
                &lsaquo;
            </button>

            {{-- TESTIMONIAL GRID --}}
            <div
            data-testimonial-grid
            class="testimonial-grid"
            aria-live="polite"
        >
            @foreach ($testimonials as $index => $testimonial)
                <div class="testimonial-flip-scene">
                    <article
                        data-testimonial-flip
                        data-testimonial-index="{{ $index }}"
                        class="testimonial-flip-card"
                    >
                        <div class="testimonial-flip-inner">

                            {{-- FRONT --}}
                            <div class="testimonial-flip-face testimonial-flip-front">

                                {{-- CUSTOMER PHOTO --}}
                                <div class="testimonial-photo-wrap">
                                    <img
                                        src="{{ asset('assets/images/testimonials/' . $testimonial['photo']) }}"
                                        alt="{{ $testimonial['name'] }}"
                                        data-testimonial-photo
                                        loading="lazy"
                                    >
                                </div>

                                {{-- CUSTOMER INFORMATION --}}
                                <div class="testimonial-front-info">

                                    {{-- COMPANY LOGO --}}
                                    <div class="testimonial-company-logo">
                                        <img
                                            src="{{ asset('assets/images/testimonials/' . $testimonial['logo']) }}"
                                            alt="{{ $testimonial['company'] }}"
                                            data-testimonial-logo
                                            loading="lazy"
                                        >
                                    </div>

                                    <div>
                                        <p class="text-[10px] font-bold uppercase tracking-[.12em] text-[#2D5FA3]">
                                            Customer Representative
                                        </p>

                                        <h3 class="mt-2 text-base font-bold leading-tight text-[#183E6E] sm:text-lg">
                                            {{ $testimonial['name'] }}
                                        </h3>

                                        <p class="mt-1 text-xs leading-relaxed text-gray-600">
                                            {{ $testimonial['position'] }}
                                        </p>

                                        <p class="mt-1 text-xs font-medium text-gray-500">
                                            {{ $testimonial['company'] }}
                                        </p>

                                        <p class="mt-3 text-[10px] font-semibold text-[#2D5FA3]">
                                            Hover / Click to flip ↗
                                        </p>
                                    </div>

                                </div>
                            </div>

                            {{-- BACK --}}
                            <div class="testimonial-flip-face testimonial-flip-back">
                                <div class="max-w-lg">

                                    <span class="text-4xl font-bold leading-none text-[#F5B940]">
                                        “
                                    </span>

                                    <blockquote class="mt-2 text-sm font-semibold leading-relaxed sm:text-base">
                                        {{ $testimonial['quote'] }}
                                    </blockquote>

                                    <p class="mt-5 text-[10px] font-bold uppercase tracking-[.16em] text-white/65">
                                        {{ $testimonial['company'] }} · Sample Quote
                                    </p>

                                </div>
                            </div>

                        </div>
                    </article>
                </div>
            @endforeach
            </div>

            <button
                type="button"
                data-testimonial-next
                aria-label="Next testimonial page"
                class="testimonial-side-nav testimonial-side-nav--next"
            >
                &rsaquo;
            </button>
        </div>

        {{-- PAGE DOTS: CENTERED BELOW THE GRID --}}
        <div
            data-testimonial-dots
            class="testimonial-pagination"
            aria-label="Testimonial pagination"
        ></div>

    </div>
</template>


    {{-- ABOUT US MODAL --}}
    <div
        id="about-modal"
        class="fixed inset-0 z-[100] hidden items-center justify-center overflow-y-auto bg-black/50 p-3 sm:p-5"
        aria-hidden="true"
    >
        <section
            role="dialog"
            aria-modal="true"
            aria-labelledby="about-modal-title"
            class="relative flex h-[88vh] max-h-[820px] min-h-0 w-[94vw] max-w-[1600px] flex-col overflow-hidden rounded-xl bg-white p-4 shadow-2xl sm:p-5 md:p-6 lg:p-7"
        >
            <div class="mb-4 flex shrink-0 items-start justify-between gap-4 border-b border-gray-200 pb-3 sm:mb-5 sm:pb-4">
                <h2
                    id="about-modal-title"
                    class="text-2xl font-bold text-navy"
                >
                    About Us
                </h2>

                <button
                    id="about-modal-close"
                    type="button"
                    aria-label="Close popup"
                    class="flex size-9 shrink-0 cursor-pointer items-center justify-center rounded-md text-2xl text-dark transition hover:bg-gray-100"
                >
                    &times;
                </button>
            </div>

            <div
                id="about-modal-body"
                class="min-h-0 flex-1 overflow-x-hidden overflow-y-auto text-sm leading-relaxed text-dark"
            ></div>
        </section>
    </div>

    {{-- ABOUT US MODAL CONTROLS --}}


    {{-- Shared footer --}}
    @include('components.footer')
@endsection