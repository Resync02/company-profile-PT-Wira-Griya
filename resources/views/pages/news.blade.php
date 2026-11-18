
@extends('layouts.app')

@section('title', 'News & Insight | PT Wira Griya')

@section('content')
    @include('components.header')
@php
    $articles = [
        [
            'id' => 1,
            'slug' => 'optimizing-product-quality',
            'category' => 'Product Insight',
            'date' => '2026-03-25',
            'title' => 'Optimizing Product Quality with Advanced Coating Machine Solutions',
            'excerpt' => 'In today’s competitive manufacturing industry, product appearance and surface durability play a vital role in determining product success.',
            'image' => 'assets/images/home/paint.png',
        ],
        [
            'id' => 3,
            'slug' => 'tips-for-choosing',
            'category' => 'Tips & Guides',
            'date' => '2026-03-18',
            'title' => 'Tips for Choosing the Right Overhead Crane for Your Industry',
            'excerpt' => 'Selecting the right overhead crane can improve operational efficiency, safety, and long-term productivity.',
            'image' => 'assets/images/home/crane.png',
        ],
                [
            'id' => 11,
            'slug' => 'preventive-maintenance-strategies',
            'category' => 'Tips & Guides',
            'date' => '2026-11-17',
            'title' => 'Preventive Maintenance Strategies for Industrial Equipment',
            'excerpt' => 'A structured preventive maintenance program helps industrial operators monitor equipment condition, reduce avoidable interruptions, and plan maintenance activities more effectively.',
            'image' => 'assets/images/home/industrial-machinery.png',
        ],
        [
            'id' => 12,
            'slug' => 'industrial-solvent-cleaning',
            'category' => 'Product Insight',
            'date' => '2026-11-12',
            'title' => 'Industrial Solvent Cleaning for Safer Production Processes',
            'excerpt' => 'Learn how to evaluate industrial solvent cleaning requirements, equipment compatibility, process flow, and safe chemical handling.',
            'image' => 'assets/images/thumbnail_product/solvent.png',
        ],
    ];

    $events = [
        [
            'id' => 3,
            'slug' => 'manufacturing-technology-exhibition',
            'title' => 'Manufacturing Technology Exhibition 2026',
            'date' => '2026-11-18',
            'category' => 'Upcoming Event',
            'location' => 'Jakarta, Indonesia',
            'description' => 'Discover manufacturing innovations and emerging technologies for more efficient production.',
            'image' => 'assets/images/home/industrial-machinery.png',
        ],
        [
            'id' => 4,
            'slug' => 'industrial-equipment-engineering',
            'title' => 'Industrial Equipment & Engineering Meetup',
            'date' => '2026-12-03',
            'category' => 'Upcoming Event',
            'location' => 'Jakarta, Indonesia',
            'description' => 'Meet engineering specialists and exchange ideas on equipment performance, maintenance, and safety.',
            'image' => 'assets/images/home/crane2.png',
        ],
                [
            'id' => 5,
            'slug' => 'industrial-automation-forum',
            'title' => 'Industrial Automation Forum',
            'category' => 'Forum',
            'date' => null,
            'time' => 'To be announced',
            'location' => 'To be announced',
            'image' => 'assets/images/home/industrial-machinery.png',
            'description' => 'Discuss automation technologies, equipment integration, and process monitoring for industrial operations.',
        ],
        [
            'id' => 6,
            'slug' => 'surface-coating-technology',
            'title' => 'Surface Coating Technology Workshop',
            'category' => 'Technical Workshop',
            'date' => null,
            'time' => 'To be announced',
            'location' => 'To be announced',
            'image' => 'assets/images/home/robot-paint.png',
            'description' => 'Explore industrial surface preparation, coating equipment, process consistency, and quality considerations.',
        ],
    ];
@endphp

{{-- HERO BANNER --}}
<section class="relative w-full overflow-hidden">

    {{-- RESPONSIVE BANNER --}}
    <picture class="block w-full">

        {{-- MOBILE --}}
        <source
            media="(max-width: 767px)"
            srcset="{{ asset('assets/images/banner/banner-m.jpg') }}"
        >

        {{-- DESKTOP --}}
        <img
            src="{{ asset('assets/images/banner/banner-d.jpg') }}"
            alt="PT Wira Griya industrial solutions"
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
                NEWS &amp; INSIGHT
            </p>

            <h1 class="mt-1 text-2xl font-bold tracking-tight text-dark sm:text-3xl md:text-5xl">
                Latest News
                <span class="block text-[#F5B940]">and Insight</span>
            </h1>

            <p class="mt-2 max-w-md text-[11px] leading-[1.4] text-dark/90 sm:text-xs md:text-sm">
                Stay updated with our latest news, industry insight, product innovations,
                and company activities. Discover how PT Wira Griya continues to build
                stronger industries for a better tomorrow.
            </p>

        </div>

    </div>

</section>

{{-- NEWS CONTENT --}}
<section class="mx-auto max-w-[1600px] px-5 py-8 md:px-8">
    {{-- HEADING + CONTROLS --}}
    <div class="grid grid-cols-1 gap-5 md:grid-cols-[minmax(0,1fr)_minmax(280px,360px)] md:items-end">
        {{-- BACK BUTTON + TITLE --}}
        <div>

            <div class="mt-3">
                <h2 class="text-xl font-bold text-dark sm:text-2xl">
                    Explore Our Latest News
                </h2>
                <p class="mt-1 text-sm leading-relaxed text-dark/70 sm:text-base">
                    Insight, innovations, and stories from Wira Griya and the industrial world.
                </p>
            </div>
        </div>

        {{-- SEARCH + SORT/FILTER --}}
        <div class="flex flex-col gap-3">
            <label class="flex w-full items-center gap-4 rounded border border-gray-200 bg-white px-3 py-2">
                <input
                    id="news-search"
                    type="search"
                    placeholder="Search Articles..."
                    class="w-full min-w-0 bg-transparent text-sm outline-none placeholder:text-gray-400 sm:text-base"
                    aria-label="Search articles"
                >
                <span class="text-sm text-navy" aria-hidden="true">&#9906;</span>
            </label>

            <div class="flex flex-wrap items-center justify-end gap-3 text-sm">
                <label class="flex items-center gap-2">
                    <span class="whitespace-nowrap text-dark/70">Sort by:</span>
                    <select
                        id="news-sort"
                        class="min-w-0 rounded border border-gray-200 bg-white px-3 py-2 text-sm text-dark outline-none focus:border-primary"
                    >
                        <option value="latest">Latest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="az">A–Z</option>
                        <option value="za">Z–A</option>
                    </select>
                </label>

                <select
                    id="news-month"
                    aria-label="Filter by month"
                    class="min-w-0 rounded border border-gray-200 bg-white px-3 py-2 text-sm text-dark outline-none focus:border-primary"
                >
                    <option value="all">All Months</option>
                    <option value="2026-03">March 2026</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mt-6 border-b border-gray-200 pb-3">
        <div id="news-featured-categories" class="flex flex-wrap gap-6"></div>
    </div>

    {{-- FEATURED ARTICLES --}}
    <div id="featured-section" class="mt-5">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            @foreach (array_slice($articles, 0, 2) as $article)
                <article class="flex min-w-0 gap-3 overflow-hidden rounded-md border border-gray-100 bg-white p-3 shadow-sm sm:gap-4">
                    <img
                        src="{{ asset($article['image']) }}"
                        alt="{{ $article['title'] }}"
                        class="h-32 w-2/5 shrink-0 rounded-sm object-cover sm:h-36"
                        loading="lazy"
                    >
                    <div class="flex min-w-0 flex-1 flex-col py-1">
                        <div class="flex flex-wrap items-center gap-2 text-xs text-primary">
                            <span class="rounded bg-blue-50 px-1.5 py-0.5">{{ $article['category'] }}</span>
                            <time datetime="{{ $article['date'] }}">
                                {{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}
                            </time>
                        </div>
                        <h3 class="mt-2 line-clamp-3 text-sm font-bold leading-snug text-dark sm:text-base">
                            {{ $article['title'] }}
                        </h3>
                        <p class="mt-1 line-clamp-2 text-sm leading-relaxed text-dark/70">
                            {{ $article['excerpt'] }}
                        </p>
                        <a
                            href="{{ route('news.show', ['slug' => $article['slug']]) }}"
                            class="mt-auto pt-3 text-sm font-semibold text-primary hover:underline"
                        >
                            Read More &rarr;
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

</section>

{{-- UPCOMING EVENTS --}}
<section id="events-section" class="bg-[#F0F0F0]">
    <div class="mx-auto max-w-[1600px] px-5 py-8 md:px-8">
        <div class="flex items-end justify-between gap-4">
            <div>
                <p class="text-sm font-bold uppercase tracking-wide text-navy">Upcoming Events</p>
                <h2 class="mt-1 text-xl font-bold text-dark sm:text-2xl">Events & Activities</h2>
                <p class="mt-1 max-w-xl text-sm leading-relaxed text-dark/70 sm:text-base">
                    Join our upcoming events to explore innovations, meet our experts,
                    and discover new opportunities in the industrial world.
                </p>
            </div>
            <a href="{{ url('/events') }}" class="shrink-0 text-sm font-semibold text-primary hover:underline sm:text-xs">
                More Detail &rarr;
            </a>
        </div>

        <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($events as $event)
                <article class="flex min-w-0 gap-3 rounded-lg border border-gray-200 bg-white p-2 shadow-sm">
                    <img
                        src="{{ asset($event['image']) }}"
                        alt="{{ $event['title'] }}"
                        class="h-20 w-24 shrink-0 rounded object-cover sm:h-24 sm:w-28"
                        loading="lazy"
                    >
                    <div class="flex min-w-0 flex-1 flex-col py-1">
                        <span class="w-fit rounded bg-blue-50 px-1.5 py-0.5 text-xs font-medium text-primary">
                            {{ $event['category'] }}
                        </span>
                        <h3 class="mt-1 line-clamp-2 text-sm font-bold text-dark sm:text-base">
                            {{ $event['title'] }}
                        </h3>
                        <p class="mt-1 text-sm text-dark/60">
                            {{ \Carbon\Carbon::parse($event['date'])->format('M d, Y') }}
                            <span class="mx-1">·</span>
                            {{ $event['location'] }}
                        </p>
                        <p class="mt-1 line-clamp-2 text-sm leading-relaxed text-dark/70">
                            {{ $event['description'] }}
                        </p>
                        <a
                            href="{{ route('events.show', ['slug' => $event['slug']]) }}"
                            class="mt-auto pt-1 text-sm font-semibold text-primary hover:underline"
                        >
                            View Event &rarr;
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ALL ARTICLES --}}
<section class="mx-auto max-w-[1600px] px-5 py-8 md:px-8">
    <div class="mb-4 flex items-center justify-between gap-3">
        <h2 class="text-xl font-bold text-dark sm:text-2xl">Latest Articles</h2>
    </div>

    {{-- FILTERS --}}
<div class="mt-6 flex flex-col gap-4 border-b border-gray-200 pb-3 lg:flex-row lg:items-center lg:justify-between">
    <div id="news-categories" class="flex flex-wrap gap-6">

        <button
            type="button"
            data-category="All Articles"
            class="news-category border-b-2 border-primary pb-3 text-base font-semibold text-primary transition"
        >
            All Articles
        </button>

        <button
            type="button"
            data-category="Product Insight"
            class="news-category border-b-2 border-transparent pb-3 text-base font-semibold text-gray-500 transition hover:text-primary"
        >
            Product Insight
        </button>

        <button
            type="button"
            data-category="Industry News"
            class="news-category border-b-2 border-transparent pb-3 text-base font-semibold text-gray-500 transition hover:text-primary"
        >
            Industry News
        </button>

        <button
            type="button"
            data-category="Tips &amp; Guides"
            class="news-category border-b-2 border-transparent pb-3 text-base font-semibold text-gray-500 transition hover:text-primary"
        >
            Tips &amp; Guides
        </button>

        <button
            type="button"
            data-category="Company Activities"
            class="news-category border-b-2 border-transparent pb-3 text-base font-semibold text-gray-500 transition hover:text-primary"
        >
            Company Activities
        </button>

        <a
            href="{{ url('/events') }}"
            class="inline-flex items-center border-b-2 border-transparent pb-3 text-base font-semibold text-gray-500 transition hover:text-primary"
        >
            Upcoming Events
        </a>

    </div>
    </div>

    <div id="news-grid" class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-4">
        @foreach ($articles as $article)
            <article
                class="news-card flex min-w-0 flex-col overflow-hidden rounded-md border border-gray-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-md"
                data-category="{{ $article['category'] }}"
                data-date="{{ $article['date'] }}"
                data-title="{{ strtolower($article['title']) }}"
                data-excerpt="{{ strtolower($article['excerpt']) }}"
            >
                <img
                    src="{{ asset($article['image']) }}"
                    alt="{{ $article['title'] }}"
                    class="aspect-[4/3] w-full object-cover"
                    loading="lazy"
                >
                <div class="flex flex-1 flex-col p-2.5 sm:p-3">
                    <div class="flex flex-wrap items-center gap-1.5 text-xs text-primary">
                        <span class="rounded bg-blue-50 px-1.5 py-0.5">{{ $article['category'] }}</span>
                        <time datetime="{{ $article['date'] }}">{{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}</time>
                    </div>
                    <h3 class="mt-2 line-clamp-3 text-sm font-bold leading-snug text-dark sm:text-base">
                        {{ $article['title'] }}
                    </h3>
                    <p class="mt-1 line-clamp-3 text-sm leading-relaxed text-dark/70">
                        {{ $article['excerpt'] }}
                    </p>
                        <a
                            href="{{ route('news.show', ['slug' => $article['slug']]) }}"
                            class="mt-auto pt-3 text-sm font-semibold text-primary hover:underline"
                        >
                            Read More &rarr;
                        </a>
                </div>
            </article>
        @endforeach
    </div>

    <p id="news-empty" class="hidden py-12 text-center text-sm text-dark/60">
        No articles found. Try another keyword or filter.
    </p>

    {{-- PAGINATION --}}
    <nav id="news-pagination" aria-label="News pagination" class="mt-7 flex items-center justify-center gap-1.5">
        <button type="button" data-page="prev" class="rounded border border-gray-200 px-3 py-2 text-sm text-dark hover:bg-gray-50" aria-label="Previous page">
            &lsaquo;
        </button>
        <div id="news-page-buttons" class="flex items-center gap-1.5"></div>
        <button type="button" data-page="next" class="rounded border border-gray-200 px-3 py-2 text-sm text-dark hover:bg-gray-50" aria-label="Next page">
            &rsaquo;
        </button>
    </nav>
</section>

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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('news-search');
    const sortSelect = document.getElementById('news-sort');
    const monthSelect = document.getElementById('news-month');
    const categoryButtons = [...document.querySelectorAll('.news-category')];
    const cards = [...document.querySelectorAll('.news-card')];
    const grid = document.getElementById('news-grid');
    const emptyState = document.getElementById('news-empty');
    const pagination = document.getElementById('news-pagination');
    const pageButtons = document.getElementById('news-page-buttons');
    const resetButton = document.getElementById('news-reset');

    if (!searchInput || !grid || !cards.length) return;

    let activeCategory = 'All Articles';
    let currentPage = 1;
    const perPage = 8;

    function getFilteredCards() {
        const keyword = searchInput.value.trim().toLowerCase();
        const month = monthSelect.value;

        return cards.filter(card => {
            const matchesCategory =
                activeCategory === 'All Articles' ||
                card.dataset.category === activeCategory;

            const matchesKeyword =
                card.dataset.title.includes(keyword) ||
                card.dataset.excerpt.includes(keyword);

            const matchesMonth =
                month === 'all' || card.dataset.date.startsWith(month);

            return matchesCategory && matchesKeyword && matchesMonth;
        }).sort((a, b) => {
            const dateA = a.dataset.date;
            const dateB = b.dataset.date;

            if (sortSelect.value === 'oldest') return dateA.localeCompare(dateB);
            if (sortSelect.value === 'az') return a.dataset.title.localeCompare(b.dataset.title);
            if (sortSelect.value === 'za') return b.dataset.title.localeCompare(a.dataset.title);

            return dateB.localeCompare(dateA);
        });
    }


        function render() {
            const filteredCards = getFilteredCards();
            const totalPages = Math.max(
                1,
                Math.ceil(filteredCards.length / perPage)
            );

            currentPage = Math.min(currentPage, totalPages);

            const start = (currentPage - 1) * perPage;
            const end = start + perPage;
            const visibleCards = filteredCards.slice(start, end);

            // Sembunyikan seluruh artikel terlebih dahulu.
            cards.forEach(card => {
                card.classList.add('hidden');
            });

            // Tampilkan hanya artikel pada halaman aktif.
            visibleCards.forEach(card => {
                card.classList.remove('hidden');
            });

            emptyState.classList.toggle('hidden', filteredCards.length > 0);
            pagination.classList.toggle('hidden', filteredCards.length <= perPage);

            pageButtons.replaceChildren();

            for (let page = 1; page <= totalPages; page++) {
                const button = document.createElement('button');
                button.type = 'button';
                button.textContent = page;

                button.className = page === currentPage
                    ? 'rounded bg-primary px-3 py-2 text-sm font-semibold text-white'
                    : 'rounded border border-gray-200 px-3 py-2 text-sm text-dark hover:bg-gray-50';

                button.setAttribute('aria-label', `Page ${page}`);
                button.setAttribute(
                    'aria-current',
                    page === currentPage ? 'page' : 'false'
                );

                button.addEventListener('click', () => {
                    currentPage = page;
                    render();
                });

                pageButtons.appendChild(button);
            }

        }


categoryButtons.forEach(button => {
    button.addEventListener('click', () => {
        activeCategory = button.dataset.category;
        currentPage = 1;

        categoryButtons.forEach(item => {
            item.classList.remove(
                'border-primary',
                'text-primary'
            );
            item.classList.add(
                'border-transparent',
                'text-gray-500'
            );
        });

        button.classList.remove(
            'border-transparent',
            'text-gray-500'
        );
        button.classList.add(
            'border-primary',
            'text-primary'
        );

        render();
    });
});

    searchInput.addEventListener('input', () => {
        currentPage = 1;
        render();
    });

    sortSelect.addEventListener('change', () => {
        currentPage = 1;
        render();
    });

    monthSelect.addEventListener('change', () => {
        currentPage = 1;
        render();
    });

    pagination.querySelector('[data-page="prev"]').addEventListener('click', () => {
        currentPage = Math.max(1, currentPage - 1);
        render();
    });

    pagination.querySelector('[data-page="next"]').addEventListener('click', () => {
        currentPage = Math.min(
            Math.max(1, Math.ceil(getFilteredCards().length / perPage)),
            currentPage + 1
        );
        render();
    });

    resetButton?.addEventListener('click', () => {
        searchInput.value = '';
        sortSelect.value = 'latest';
        monthSelect.value = 'all';
        activeCategory = 'All Articles';
        currentPage = 1;

        categoryButtons[0]?.click();
        render();
    });

    render();
});
</script>
@endpush