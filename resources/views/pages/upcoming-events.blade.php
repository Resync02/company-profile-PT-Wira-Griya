
@extends('layouts.app')

@section('title', 'Upcoming Events | PT Wira Griya')
@section('description', 'Discover upcoming exhibitions, industrial forums, and events from PT Wira Griya.')

@section('content')
@include('components.header')

@php
    $events = [
        [
            'id' => 3,
            'slug' => 'manufacturing-technology-exhibition',
            'title' => 'Manufacturing Technology Exhibition 2026',
            'category' => 'Exhibition',
            'date' => '2026-11-18',
            'time' => '10:00 - 17:00 WIB',
            'location' => 'Jakarta, Indonesia',
            'image' => 'assets/images/home/industrial-machinery.webp',
            'excerpt' => 'Discover manufacturing technologies and solutions for industrial production.',
        ],
        [
            'id' => 4,
            'slug' => 'industrial-equipment-engineering',
            'title' => 'Industrial Equipment & Engineering Meetup',
            'category' => 'Forum',
            'date' => '2026-12-03',
            'time' => '09:00 - 16:00 WIB',
            'location' => 'Jakarta, Indonesia',
            'image' => 'assets/images/home/crane2.webp',
            'excerpt' => 'Meet engineering specialists and exchange ideas on equipment performance, maintenance, and safety.',
        ],
                [
            'id' => 5,
            'slug' => 'industrial-automation-forum',
            'title' => 'Industrial Automation Forum',
            'category' => 'Forum',
            'date' => '2026-12-10',
            'time' => 'To be announced',
            'location' => 'To be announced',
            'image' => 'assets/images/home/industrial-machinery.webp',
            'excerpt' => 'Discuss automation technologies, equipment integration, and process monitoring for industrial operations.',
        ],
        [
            'id' => 6,
            'slug' => 'surface-coating-technology',
            'title' => 'Surface Coating Technology Workshop',
            'category' => 'Technical Workshop',
            'date' => '2026-12-17',
            'time' => 'To be announced',
            'location' => 'To be announced',
            'image' => 'assets/images/home/robot-paint.webp',
            'excerpt' => 'Explore industrial surface preparation, coating equipment, process consistency, and quality considerations.',
        ],
    ];
@endphp



{{-- HERO BANNER --}}
<section class="relative w-full overflow-hidden">

    {{-- RESPONSIVE BANNER IMAGE --}}
    <picture class="block w-full">

        {{-- MOBILE --}}
        <source
            media="(max-width: 767px)"
            srcset="{{ asset('assets/images/banner/banner-m.webp') }}"
        >

        {{-- DESKTOP --}}
        <img
            src="{{ asset('assets/images/banner/banner-d.webp') }}"
            alt="PT Wira Griya industrial solutions"
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

{{-- MAIN CONTENT --}}
<section class="mx-auto max-w-[1600px] px-5 py-8 md:px-8">
                    {{-- BACK --}}
                    <a
                        href="{{ route('news') }}"
                        class="hidden md:inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
                    >
                        <span aria-hidden="true" class="text-2xl">←</span>
                        Back
                    </a>

    {{-- PAGE HEADING --}}
    <br>
    <div class="mb-8">
        <h2 class="mt-2 text-2xl font-bold text-[#162841] sm:text-3xl">
            Explore Our Events
        </h2>

        <p class="mt-3 max-w-2xl text-sm leading-7 text-gray-500 sm:text-base">
            Find event information, schedules, and locations to help you plan
            your next industrial visit.
        </p>
    </div>


{{-- SEARCH & FILTERS --}}
<div class="mt-5 flex flex-col gap-4 border-b border-gray-200 pb-3 lg:flex-row lg:items-center lg:justify-between">

    <div class="flex flex-wrap gap-6" id="event-status-filters">
        <button
            type="button"
            data-status="all"
            class="event-status border-b-2 border-[#1455D9] pb-3 text-sm font-semibold text-[#1455D9] transition"
        >
            All Events
        </button>

        <button
            type="button"
            data-status="upcoming"
            class="event-status border-b-2 border-transparent pb-3 text-sm font-semibold text-gray-500 transition hover:text-[#1455D9]"
        >
            Upcoming Events
        </button>

        <button
            type="button"
            data-status="past"
            class="event-status border-b-2 border-transparent pb-3 text-sm font-semibold text-gray-500 transition hover:text-[#1455D9]"
        >
            Past Events
        </button>
    </div>

    <div class="flex flex-col gap-3 sm:flex-row">
        <div class="relative">
            <input
                id="event-search"
                type="search"
                placeholder="Search events..."
                class="w-full rounded-lg border border-gray-200 py-3 pl-4 pr-10 text-sm outline-none transition focus:border-[#1455D9] sm:w-64"
            >

            <svg
                class="absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
            >
                <circle cx="11" cy="11" r="7"></circle>
                <path d="m16 16 4 4"></path>
            </svg>
        </div>

        <select
            id="event-sort"
            class="rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm outline-none focus:border-[#1455D9]"
        >
            <option value="soonest">Date: Soonest First</option>
            <option value="latest">Date: Latest First</option>
            <option value="az">Name: A–Z</option>
            <option value="za">Name: Z–A</option>
        </select>
    </div>
</div>

    {{-- EVENT GRID --}}
    <div id="events-grid" class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

        @foreach ($events as $event)
            @php
                $eventTimestamp = strtotime($event['date']);
                $isUpcoming = $eventTimestamp >= strtotime(date('Y-m-d'));
            @endphp

            <article
                class="event-card group overflow-hidden rounded-xl border border-gray-100 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                data-title="{{ strtolower($event['title']) }}"
                data-date="{{ $event['date'] }}"
                data-status="{{ $isUpcoming ? 'upcoming' : 'past' }}"
                data-location="{{ strtolower($event['location']) }}"
            >
                <a
                    href="{{ route('events.show', ['slug' => $event['slug']]) }}"
                    class="block overflow-hidden"
                    aria-label="View {{ $event['title'] }}"
                >
                    <div class="relative aspect-[16/10] overflow-hidden bg-[#F5F9FF]">
                        <img
                            src="{{ asset($event['image']) }}"
                            alt="{{ $event['title'] }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            loading="lazy"
                        >

                        <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1.5 text-xs font-semibold text-[#183E6E]">
                            {{ $event['category'] }}
                        </span>
                    </div>
                </a>

                <div class="p-5 sm:p-6">
                    <div class="mb-3 flex items-center gap-2 text-xs font-medium text-gray-500">
                        <svg class="h-4 w-4 text-[#1455D9]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                            <path d="M16 3v4M8 3v4M3 10h18"></path>
                        </svg>

                        <time datetime="{{ $event['date'] }}">
                            {{ \Carbon\Carbon::parse($event['date'])->format('d F Y') }}
                        </time>

                        @if (!$isUpcoming)
                            <span class="rounded bg-gray-100 px-2 py-1 text-gray-500">
                                Past Event
                            </span>
                        @endif
                    </div>

                    <h3 class="text-lg font-bold leading-snug text-[#162841] transition group-hover:text-[#1455D9]">
                        <a href="{{ route('events.show', ['slug' => $event['slug']]) }}">
                            {{ $event['title'] }}
                        </a>
                    </h3>

                    <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-500">
                        {{ $event['excerpt'] }}
                    </p>

                    <div class="mt-4 flex items-start gap-2 text-sm text-gray-500">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#1455D9]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="2.5"></circle>
                        </svg>

                        <span>{{ $event['location'] }}</span>
                    </div>

                    <a
                        href="{{ route('events.show', ['slug' => $event['slug']]) }}"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#1455D9] transition hover:gap-3"
                    >
                        View Event Details
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </article>
        @endforeach

    </div>

    {{-- EMPTY STATE --}}
    <div id="events-empty" class="hidden py-16 text-center">
        <h3 class="text-lg font-semibold text-[#162841]">
            No events found
        </h3>

        <p class="mt-2 text-sm text-gray-500">
            Try another keyword or select a different event status.
        </p>

        <button
            id="events-reset"
            type="button"
            class="mt-5 rounded-lg bg-[#1455D9] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#183E6E]"
        >
            Reset Filters
        </button>
    </div>

</section>

@include('components.footer')

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('event-search');
    const sortSelect = document.getElementById('event-sort');
    const statusButtons = [...document.querySelectorAll('.event-status')];
    const cards = [...document.querySelectorAll('.event-card')];
    const grid = document.getElementById('events-grid');
    const emptyState = document.getElementById('events-empty');
    const resetButton = document.getElementById('events-reset');

    if (!searchInput || !sortSelect || !grid || !cards.length) return;

    let activeStatus = 'all';

    function renderEvents() {
        const keyword = searchInput.value.trim().toLowerCase();

        const filtered = cards.filter(card => {
            const matchesStatus =
                activeStatus === 'all' ||
                card.dataset.status === activeStatus;

            const matchesKeyword =
                card.dataset.title.includes(keyword) ||
                card.dataset.location.includes(keyword);

            return matchesStatus && matchesKeyword;
        });

        filtered.sort((a, b) => {
            const titleA = a.dataset.title;
            const titleB = b.dataset.title;
            const dateA = a.dataset.date;
            const dateB = b.dataset.date;

            switch (sortSelect.value) {
                case 'latest':
                    return dateB.localeCompare(dateA);
                case 'az':
                    return titleA.localeCompare(titleB);
                case 'za':
                    return titleB.localeCompare(titleA);
                default:
                    return dateA.localeCompare(dateB);
            }
        });

        cards.forEach(card => card.classList.add('hidden'));
        filtered.forEach(card => {
            card.classList.remove('hidden');
            grid.appendChild(card);
        });

        emptyState.classList.toggle('hidden', filtered.length > 0);
    }

    statusButtons.forEach(button => {
        button.addEventListener('click', () => {
            activeStatus = button.dataset.status;

            statusButtons.forEach(item => {
                item.classList.remove('border-[#1455D9]', 'text-[#1455D9]');
                item.classList.add('border-transparent', 'text-gray-500');
            });

            button.classList.remove('border-transparent', 'text-gray-500');
            button.classList.add('border-[#1455D9]', 'text-[#1455D9]');

            renderEvents();
        });
    });

    searchInput.addEventListener('input', renderEvents);
    sortSelect.addEventListener('change', renderEvents);

    resetButton?.addEventListener('click', () => {
        searchInput.value = '';
        sortSelect.value = 'soonest';
        activeStatus = 'all';

        statusButtons.forEach(item => {
            const active = item.dataset.status === 'all';

            item.classList.toggle('border-[#1455D9]', active);
            item.classList.toggle('text-[#1455D9]', active);
            item.classList.toggle('border-transparent', !active);
            item.classList.toggle('text-gray-500', !active);
        });

        renderEvents();
    });

    renderEvents();
});
</script>
@endpush
@endsection