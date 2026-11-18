
@extends('layouts.app')

@section('title', 'Industrial Automation Forum | PT Wira Griya')

@section('content')
@include('components.header')

@php
    $event = [
        'title' => 'Industrial Automation Forum',
        'date' => '2026-12-10',
        'category' => 'Industry Forum',
        'location' => 'To be announced',
        'image' => 'assets/images/home/industrial-machinery.png',
        'description' => 'Industrial Automation Forum is proposed as a knowledge-sharing event for people involved in manufacturing and industrial operations. The discussion is intended to cover how automation technologies can support repeatable workflows, equipment integration, process monitoring, and operational planning. The final agenda, speakers, date, venue, and registration information have not yet been announced.',
        'time' => 'To be announced',
        'venue' => 'To be announced',
        'status' => 'Upcoming Event',
        'highlights' => [
            'Discuss how automation can support consistent and repeatable production workflows.',
            'Explore equipment integration and process-monitoring considerations.',
            'Review operational factors when evaluating automation opportunities.',
            'Exchange perspectives with professionals in manufacturing and industrial engineering.',
        ],
    ];
    $eventDate = !empty($event['date']) ? \Carbon\Carbon::parse($event['date']) : null;
    $isUpcoming = !$eventDate || $eventDate->greaterThanOrEqualTo(now()->startOfDay());
@endphp



{{-- HERO BANNER --}}
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
            class="block h-auto w-full"
            fetchpriority="high"
        >

    </picture>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/75 to-white/10"></div>

    {{-- HERO CONTENT --}}
    <div class="absolute inset-0 z-10 mx-auto flex w-full max-w-[1600px] items-center px-4 sm:px-6 md:px-10">

        <div class="max-w-xl">

            <p class="text-sm font-bold tracking-wide text-navy sm:text-base md:text-lg">
                PT Wira Griya
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-dark sm:text-3xl md:text-5xl">
                Upcoming Events
            </h1>

            <p class="mt-2 max-w-md text-[11px] leading-[1.4] text-dark/90 sm:text-xs md:text-sm">
                Stay connected with industrial exhibitions, forums, and events
                that bring together technology, innovation, and industry expertise.
            </p>

        </div>

    </div>

</section>

{{-- EVENT CONTENT --}}
<main class="mx-auto w-full max-w-7xl px-5 py-5 sm:px-8 sm:py-7 lg:px-10">

        {{-- BACK --}}
        <a
            href="{{ url('/events') }}"
            class="inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
        >
            <span aria-hidden="true" class="text-2xl">←</span>
            Back
        </a>

    {{-- EVENT HEADER --}}
    <header class="mt-3 border-b border-gray-200 pb-4">

        <div class="flex flex-wrap items-center gap-2 text-xs sm:text-sm">
            <span class="rounded bg-blue-50 px-3 py-1.5 font-medium text-primary">
                {{ $event['category'] }}
            </span>

            <span class="rounded px-3 py-1.5 font-semibold
                {{ $isUpcoming ? 'bg-green-50 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                {{ $isUpcoming ? 'Upcoming Event' : 'Past Event' }}
            </span>
        </div>

        <h2 class="mt-3 max-w-4xl text-xl font-bold leading-tight text-navy sm:text-3xl">
            {{ $event['title'] }}
        </h2>

        <div class="mt-3 flex flex-wrap items-center gap-x-5 gap-y-2 text-[10px] text-navy/75 sm:text-xs">

            {{-- DATE --}}
            <span class="inline-flex items-center gap-1.5">
                <svg viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6"
                    class="size-4" aria-hidden="true">
                    <rect x="3" y="5" width="18" height="16" rx="2"/>
                    <path d="M7 3v4M17 3v4M3 10h18"/>
                </svg>

                @if ($eventDate)
                    <time datetime="{{ $eventDate->format('Y-m-d') }}">
                        {{ $eventDate->format('F d, Y') }}
                    </time>
                @else
                    <span>To be announced</span>
                @endif
            </span>

            {{-- LOCATION --}}
            <span class="inline-flex items-center gap-1.5">
                <svg viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6"
                    class="size-4" aria-hidden="true">
                    <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                    <circle cx="12" cy="10" r="2.5"/>
                </svg>

                {{ $event['location'] }}
            </span>
        </div>
    </header>

    {{-- EVENT IMAGE --}}
    <figure class="mt-4">
        <img
            src="{{ asset($event['image']) }}"
            alt="{{ $event['title'] }}"
            class="max-h-[480px] w-full rounded-sm object-cover"
        >
        <figcaption class="mt-2 text-[9px] text-navy/60 sm:text-[10px]">
            {{ $event['title'] }} · PT Wira Griya
        </figcaption>
    </figure>

    {{-- EVENT INFORMATION --}}
    <div class="mt-5 grid grid-cols-1 gap-6 lg:grid-cols-[minmax(0,1fr)_280px]">

        {{-- MAIN DESCRIPTION --}}
        <article class="min-w-0 text-[11px] leading-relaxed text-navy/90 sm:text-sm">
            <h3 class="text-sm font-bold text-navy sm:text-lg">
                About This Event
            </h3>

            <p class="mt-2">
                {{ $event['description'] }}
            </p>

            <section class="mt-5">
                <h3 class="text-sm font-bold text-navy sm:text-lg">
                    Event Highlights
                </h3>

                <ul class="mt-2 list-disc space-y-2 pl-5">
                    @foreach ($event['highlights'] as $highlight)
                        <li>{{ $highlight }}</li>
                    @endforeach
                </ul>
            </section>

        </article>

        {{-- EVENT DETAILS SIDEBAR --}}
        <aside class="h-fit rounded border border-gray-200 bg-white p-4">
            <h3 class="border-b border-gray-200 pb-3 text-xs font-bold text-navy sm:text-sm">
                Event Details
            </h3>

            <dl class="mt-3 space-y-4 text-[10px] sm:text-xs">

                <div>
                    <dt class="text-navy/60">Date</dt>
                    <dd class="mt-1 font-semibold text-navy">
                        {{ $eventDate ? $eventDate->format('F d, Y') : 'To be announced' }}
                    </dd>
                </div>

                <div>
                    <dt class="text-navy/60">Time</dt>
                    <dd class="mt-1 font-semibold text-navy">
                        {{ $event['time'] }}
                    </dd>
                </div>

                <div>
                    <dt class="text-navy/60">Location</dt>
                    <dd class="mt-1 font-semibold text-navy">
                        {{ $event['venue'] }}
                    </dd>
                </div>

                <div>
                    <dt class="text-navy/60">Event Type</dt>
                    <dd class="mt-1 font-semibold text-navy">
                        {{ $event['category'] }}
                    </dd>
                </div>

                <div>
                    <dt class="text-navy/60">Status</dt>
                    <dd class="mt-1 font-semibold
                        {{ $isUpcoming ? 'text-green-700' : 'text-gray-600' }}">
                        {{ $isUpcoming ? 'Upcoming Event' : 'Past Event' }}
                    </dd>
                </div>

            </dl>

            @if ($isUpcoming)
                <a
                    href="{{ url('/contact-us') }}"
                    class="mt-5 flex w-full items-center justify-center rounded-md bg-primary px-4 py-3.5 text-center text-xs font-semibold text-white transition hover:bg-navy sm:py-4 sm:text-sm"
                >
                    Ask About This Event
                </a>
            @endif
        </aside>
    </div>

</main>

{{-- Direct email contact. A WhatsApp number is not configured in the supplied project. --}}
<a
    href="mailto:info@wira.co.id"
    aria-label="Email PT Wira Griya"
    class="fixed bottom-5 right-5 z-40 flex size-11 items-center justify-center rounded-full bg-[#183E6E] text-lg font-bold text-white shadow-lg transition hover:bg-[#1455D9]"
>
    <span aria-hidden="true">@</span>
</a>

@include('components.footer')

@endsection