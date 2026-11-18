
@extends('layouts.app')

@section('title', 'Contact Us | PT Wira Griya')
@section('description', 'Contact PT Wira Griya for industrial equipment information, engineering solutions, project consultations, and quotation requests.')

@section('content')
    @include('components.header')

{{-- CONTACT HERO: responsive banner and natural image ratio matching News page --}}
<section class="relative w-full overflow-hidden">
    <picture class="block w-full">
        {{-- MOBILE BANNER --}}
        <source
            media="(max-width: 767px)"
            srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"
        >

        {{-- DESKTOP BANNER --}}
        <img
            src="{{ asset('assets/images/banner/banner-d.jpg') }}"
            alt="Contact PT Wira Griya for industrial products and solutions"
            class="block h-auto w-full"
            fetchpriority="high"
        >
    </picture>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-white/5"></div>

    {{-- HERO CONTENT --}}
    <div class="absolute inset-0 z-10 mx-auto flex w-full max-w-[1600px] items-center px-4 sm:px-6 md:px-10">
        <div class="max-w-xl">
            <p class="text-xs font-bold tracking-wide text-navy sm:text-base md:text-lg">
                CONTACT PT WIRA GRIYA
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-dark sm:text-3xl md:text-5xl">
                Let’s discuss your
                <span class="block text-[#F5B940]">industrial requirements.</span>
            </h1>

            <p class="mt-2 max-w-md text-[11px] leading-[1.4] text-dark/90 sm:text-xs md:text-sm">
                For product information, project consultations, or quotation requests,
                contact our team. We’ll help direct your inquiry to the right person.
            </p>
        </div>
    </div>
</section>

    {{-- MAIN CONTENT --}}
    <main class="bg-white">
        <div class="mx-auto max-w-[1600px] px-5 pt-3 pb-8 md:px-8 md:pt-4 md:pb-10">

            <div class="grid grid-cols-1 gap-10 lg:grid-cols-[1.8fr_0.9fr] lg:gap-12">

                {{-- LEFT COLUMN: CONTACT INFORMATION --}}
                <section class="min-w-0">

                    {{-- GENERAL CONTACT --}}
                    <div>
                        <h2 class="text-xl font-bold text-navy">
                            GENERAL CONTACT
                        </h2>

                        <p class="mt-1 text-base leading-relaxed text-dark/80">
                            For general inquiries, you can also reach us through the following channels.
                        </p>

                        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">

                            {{-- Company Email --}}
                            <a
                                href="mailto:hanggar@wira.co.id"
                                class="flex min-h-[88px] items-center gap-4 rounded-md border border-gray-300 p-4 transition hover:border-primary hover:shadow-sm"
                            >
                                <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-gray-100 text-navy">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="26"
                                        height="26"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true"
                                    >
                                        <rect x="3" y="5" width="18" height="14" rx="1"/>
                                        <path d="m3 7 9 6 9-6"/>
                                    </svg>
                                </span>

                                <span class="min-w-0">
                                    <span class="block text-base font-bold text-navy">Company Email</span>
                                    <span class="mt-1 block break-words text-base text-primary">hanggar@wira.co.id</span>
                                </span>
                            </a>

{{-- WhatsApp Contact --}}
<a
                        href="https://wa.me/6285161840017"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex min-h-[88px] items-center gap-4 rounded-md border border-gray-300 p-4 transition hover:border-primary hover:shadow-sm"
                    >
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-gray-100 text-[#25D366]">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="26"
                                height="26"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path d="M12.04 2a9.9 9.9 0 0 0-8.48 15.02L2 22l5.15-1.35A9.9 9.9 0 1 0 12.04 2Zm0 18.1a8.17 8.17 0 0 1-4.17-1.14l-.3-.18-3.06.8.82-2.98-.2-.31A8.15 8.15 0 1 1 12.04 20.1Zm4.48-6.1c-.24-.12-1.43-.7-1.65-.78-.22-.08-.38-.12-.54.12-.16.24-.62.78-.76.94-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.94-1.2-.72-.64-1.2-1.43-1.34-1.67-.14-.24-.02-.37.1-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.46-.39-.4-.54-.41h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.69 2.58 4.1 3.62.57.24 1.02.38 1.37.49.58.18 1.1.15 1.51.09.46-.07 1.43-.58 1.63-1.14.2-.56.2-1.04.14-1.14-.06-.1-.22-.16-.46-.28Z"/>
                            </svg>
                        </span>

                        <span class="min-w-0">
                            <span class="block text-base font-bold text-navy">WhatsApp</span>
                            <span class="mt-1 block text-sm text-primary">+62 851-6184-0017</span>
                        </span>
                    </a>
                        </div>
                    </div>

                    {{-- OUR LOCATIONS --}}
                    <div class="mt-7">
                        <h2 class="text-xl font-bold text-navy">
                            OUR LOCATIONS
                        </h2>

                        <p class="mt-1 text-base leading-relaxed text-dark/80">
                            Visit our office or workshop to discuss your needs directly with our team.
                        </p>

                        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">

                            {{-- Head Office --}}
                            <article class="overflow-hidden rounded-md border border-gray-300">
                                <div class="grid grid-cols-[40%_60%]">
                                    <div class="min-h-[130px] bg-gray-100">
                                        <img
                                            src="{{ asset('assets/images/contact/head-office.jpg') }}"
                                            alt="Head Office"
                                            class="size-full object-cover"
                                            loading="lazy"
                                        >
                                    </div>

                                    <div class="flex min-w-0 flex-col p-3">
                                        <h3 class="text-base font-bold text-navy">Head Office</h3>

                                        <p class="mt-2 text-sm leading-relaxed text-dark/80">
                                            Jl. Cilincing No. km 1.5, RT.3/RW.8,
                                            Cakung Barat, Kec. Cakung, Kota Jakarta Timur,
                                            Daerah Khusus Ibukota Jakarta 13910
                                        </p>

                                        <a
                                            href="https://maps.app.goo.gl/9AKY7c9H8zztTTST8"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="mt-auto pt-3 text-sm font-semibold text-primary hover:underline"
                                        >
                                            View on Google Maps →
                                        </a>
                                    </div>
                                </div>
                            </article>

                            {{-- Site Office --}}
                            <article class="overflow-hidden rounded-md border border-gray-300">
                                <div class="grid grid-cols-[40%_60%]">
                                    <div class="min-h-[130px] bg-gray-100">
                                        <img
                                            src="{{ asset('assets/images/contact/site-office.jpg') }}"
                                            alt="Site Office"
                                            class="size-full object-cover"
                                            loading="lazy"
                                        >
                                    </div>

                                    <div class="flex min-w-0 flex-col p-3">
                                        <h3 class="text-base font-bold text-navy">Site Office</h3>

                                        <p class="mt-2 text-sm leading-relaxed text-dark/80">
                                            Jl. Cilincing No. km 1.5, RT.3/RW.8,
                                            Cakung Barat, Kec. Cakung, Kota Jakarta Timur,
                                            Daerah Khusus Ibukota Jakarta 13910
                                        </p>

                                        <a
                                            href="https://maps.app.goo.gl/k5oeQNTAqHbTkgaa7"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="mt-auto pt-3 text-sm font-semibold text-primary hover:underline"
                                        >
                                            View on Google Maps →
                                        </a>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>

                    {{-- FREQUENTLY ASKED QUESTIONS --}}
                    
{{-- FREQUENTLY ASKED QUESTIONS --}}
<div class="mt-7">
    <h2 class="text-xl font-bold text-navy">
        FREQUENTLY ASKED QUESTIONS
    </h2>

    <p class="mt-1 text-base leading-relaxed text-dark/80">
        Find answers to common questions about our products, services, and support.
    </p>

    <div class="mt-4 space-y-2">

        {{-- GENERAL INFORMATION --}}
        <details class="group rounded-md border border-gray-300 bg-white">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-4 py-4 text-base font-semibold text-dark">
                General Information
                <span class="text-lg transition-transform group-open:rotate-90">›</span>
            </summary>

            <div class="border-t border-gray-200 px-4 py-4 text-base leading-relaxed text-dark/80">
                <p>
                    <strong class="text-navy">What does PT Wira Griya do?</strong>
                </p>
                <p class="mt-1">
                    PT Wira Griya provides industrial machinery, equipment,
                    and engineering solutions to support various industrial
                    applications.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">How can I contact your team?</strong>
                </p>
                <p class="mt-1">
                    You can contact our team through the company email or
                    phone number listed in the General Contact section.
                    You can also send an inquiry using the contact form
                    on this page.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">Where is your office located?</strong>
                </p>
                <p class="mt-1">
                    Please refer to the Our Locations section above for
                    our office information and Google Maps directions.
                </p>
            </div>
        </details>

        {{-- PRODUCT & SOLUTIONS --}}
        <details class="group rounded-md border border-gray-300 bg-white">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-4 py-4 text-base font-semibold text-dark">
                Product &amp; Solutions
                <span class="text-lg transition-transform group-open:rotate-90">›</span>
            </summary>

            <div class="border-t border-gray-200 px-4 py-4 text-base leading-relaxed text-dark/80">
                <p>
                    <strong class="text-navy">What types of products do you offer?</strong>
                </p>
                <p class="mt-1">
                    Our product categories include hoist and crane equipment,
                    painting and coating systems, industrial machinery,
                    solvent-related solutions, and odor control systems.
                    Product availability and specifications depend on the
                    particular product.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">How do I find a product that suits my needs?</strong>
                </p>
                <p class="mt-1">
                    Browse the Product page to explore categories and product
                    details. If you need further assistance, send us your
                    requirements through the contact form.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">Can I ask for technical information?</strong>
                </p>
                <p class="mt-1">
                    Yes. Include the product name, intended application,
                    and any relevant technical requirements in your inquiry
                    so our team can understand your needs.
                </p>
            </div>
        </details>

        {{-- QUOTATION & PURCHASING --}}
        <details class="group rounded-md border border-gray-300 bg-white">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-4 py-4 text-base font-semibold text-dark">
                Quotation &amp; Purchasing
                <span class="text-lg transition-transform group-open:rotate-90">›</span>
            </summary>

            <div class="border-t border-gray-200 px-4 py-4 text-base leading-relaxed text-dark/80">
                <p>
                    <strong class="text-navy">How can I request a quotation?</strong>
                </p>
                <p class="mt-1">
                    Complete the contact form with your name, company,
                    contact details, subject, and project requirements.
                    Our team can then review your inquiry and follow up.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">What information should I include?</strong>
                </p>
                <p class="mt-1">
                    Where possible, include the product or equipment you
                    are interested in, its intended application, required
                    specifications, quantity, and any relevant project
                    details.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">Can I discuss a custom requirement?</strong>
                </p>
                <p class="mt-1">
                    Yes. Describe your requirements in the message field.
                    Our team can review the information and determine the
                    appropriate next steps.
                </p>
            </div>
        </details>

        {{-- AFTER SALES & MAINTENANCE --}}
        <details class="group rounded-md border border-gray-300 bg-white">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-4 py-4 text-base font-semibold text-dark">
                After Sales &amp; Maintenance
                <span class="text-lg transition-transform group-open:rotate-90">›</span>
            </summary>

            <div class="border-t border-gray-200 px-4 py-4 text-base leading-relaxed text-dark/80">
                <p>
                    <strong class="text-navy">How can I request after-sales assistance?</strong>
                </p>
                <p class="mt-1">
                    Contact our team and describe the product or equipment
                    involved, the issue you are experiencing, and your
                    preferred contact details.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">Can I inquire about maintenance?</strong>
                </p>
                <p class="mt-1">
                    Yes. Send your maintenance inquiry through the contact
                    form, including the equipment details and the type of
                    assistance required.
                </p>

                <p class="mt-4">
                    <strong class="text-navy">What should I prepare before contacting support?</strong>
                </p>
                <p class="mt-1">
                    If available, prepare the product name, model or serial
                    number, a description of the issue, and relevant photos
                    or documents. This information can help our team
                    understand your inquiry.
                </p>
            </div>
        </details>

    </div>
</div>

                </section>

                {{-- RIGHT COLUMN: CONTACT FORM --}}
                <section class="min-w-0">
                    <h2 class="text-xl font-bold text-navy">
                        Send Us a Message
                    </h2>

                    <p class="mt-1 text-sm leading-relaxed text-dark/80">
                        Fill out the form below and our team will get back to you
                        as soon as possible.
                    </p>

                    @if (session('success'))
                        <div class="mb-4 rounded-md border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800" role="status">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="mb-4 rounded-md border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 rounded-md border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800" role="alert">
                            <p class="font-semibold">Please check the following fields:</p>
                            <ul class="mt-1 list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form
                        id="contact-inquiry-form"
                        action="{{ route('contact.submit') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="mt-4 space-y-4"
                    >
                        @csrf

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="full_name" class="mb-1.5 block text-sm font-semibold text-navy">
                                    Full Name *
                                </label>
                                <input
                                    id="full_name"
                                    name="full_name"
                                    value="{{ old('full_name') }}"
                                    type="text"
                                    required
                                    class="w-full rounded-md border border-gray-300 px-3 py-2.5 text-base outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"
                                >
                            </div>

                            <div>
                                <label for="company_name" class="mb-1.5 block text-sm font-semibold text-navy">
                                    Company Name *
                                </label>
                                <input
                                    id="company_name"
                                    name="company_name"
                                    value="{{ old('company_name') }}"
                                    type="text"
                                    required
                                    class="w-full rounded-md border border-gray-300 px-3 py-2.5 text-base outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"
                                >
                            </div>

                            <div>
                                <label for="email" class="mb-1.5 block text-sm font-semibold text-navy">
                                    Email *
                                </label>
                                <input
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    type="email"
                                    required
                                    class="w-full rounded-md border border-gray-300 px-3 py-2.5 text-base outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"
                                >
                            </div>

                            <div>
                                <label for="phone" class="mb-1.5 block text-sm font-semibold text-navy">
                                    Phone Number *
                                </label>
                                <input
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    type="tel"
                                    required
                                    class="w-full rounded-md border border-gray-300 px-3 py-2.5 text-base outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="mb-1.5 block text-sm font-semibold text-navy">
                                Subject
                            </label>
                            <input
                                id="subject"
                                name="subject"
                                type="text"
                                class="w-full rounded-md border border-gray-300 px-3 py-2.5 text-base outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"
                            >
                        </div>

                        {{-- OR DIVIDER --}}
                        <div class="flex items-center gap-4">
                            <span class="h-px flex-1 bg-navy"></span>
                            <span class="text-sm font-bold text-navy">OR</span>
                            <span class="h-px flex-1 bg-navy"></span>
                        </div>

                        {{-- BUSINESS CARD UPLOAD --}}
                        <div>
                            <label for="business_card" class="mb-2 block text-sm font-semibold text-navy">
                                Upload Business Card (Optional)
                            </label>

                            <label
                                for="business_card"
                                class="flex min-h-[70px] cursor-pointer flex-col items-center justify-center rounded-md border border-dashed border-gray-300 px-4 py-3 text-center transition hover:border-primary hover:bg-blue-50/50"
                            >
                                <span class="text-sm font-medium text-primary">
                                    ↑ Upload Business Card
                                </span>
                                <span class="mt-1 text-sm text-gray-500">
                                    JPG, PNG, and PDF, max size 4MB
                                </span>
                            </label>

                            <input
                                id="business_card"
                                name="business_card"
                                type="file"
                                accept=".jpg,.jpeg,.png,.pdf"
                                class="sr-only"
                            >
                        </div>

                        <div>
                            <label for="message" class="mb-1.5 block text-sm font-semibold text-navy">
                                Message *
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                required
                                class="w-full resize-y rounded-md border border-gray-300 px-3 py-2.5 text-base outline-none transition focus:border-primary focus:ring-1 focus:ring-primary"
                            >{{ old('message') }}</textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full cursor-pointer rounded-md bg-[#F5B940] px-4 py-3 text-base font-bold text-navy transition hover:bg-amber-400"
                        >
                            Send Message
                        </button>
                    </form>
                </section>

            </div>
        </div>
    </main>

    {{-- FOOTER --}}
    @include('components.footer')
@endsection