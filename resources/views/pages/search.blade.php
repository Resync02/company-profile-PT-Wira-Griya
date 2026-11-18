@extends('layouts.app')

@section('title', 'Search Results | PT Wira Griya')
@section('description', 'Search products, industrial solutions, company information, news, and upcoming events from PT Wira Griya.')

@section('content')
    @include('components.header')

    <section class="bg-[#F5F9FF] px-5 pb-8 pt-24 sm:px-8 sm:pb-10 sm:pt-28 lg:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-primary sm:text-sm">PT Wira Griya</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-navy sm:text-4xl">Search the Website</h1>

            @if ($query !== '')
                <p class="mt-2 text-sm text-dark/70 sm:text-base" aria-live="polite">
                    {{ $totalResults }} {{ $totalResults === 1 ? 'result' : 'results' }} found for
                    <span class="font-semibold text-navy">“{{ $query }}”</span>
                </p>
            @else
                <p class="mt-2 max-w-2xl text-sm leading-relaxed text-dark/70 sm:text-base">
                    Find information across our products, industrial solutions, company profile, news, and upcoming events.
                </p>
            @endif

            <form action="{{ route('search') }}" method="GET" role="search" class="mt-6 flex max-w-2xl items-center gap-2 rounded-lg border border-[#D6E0EC] bg-white p-1.5 shadow-sm">
                <label for="search-page-input" class="sr-only">Search all website content</label>
                <input
                    id="search-page-input"
                    type="search"
                    name="q"
                    value="{{ $query }}"
                    placeholder="Search products, news, events, or company information..."
                    autocomplete="off"
                    required
                    class="min-w-0 flex-1 bg-transparent px-3 py-2.5 text-sm text-dark outline-none placeholder:text-gray-400 sm:text-base"
                >
                <button type="submit" class="inline-flex shrink-0 items-center gap-2 rounded-md bg-navy px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#102D50] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-4" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-4-4"></path></svg>
                    <span>Search</span>
                </button>
            </form>
        </div>
    </section>

    <main class="mx-auto min-h-[34vh] max-w-7xl px-5 py-8 sm:px-8 sm:py-10 lg:px-10">
        @if ($query === '')
            <section class="rounded-xl border border-dashed border-[#CBD7E5] bg-white px-5 py-10 text-center sm:px-8">
                <div class="mx-auto flex size-12 items-center justify-center rounded-full bg-[#F0F5FB] text-navy">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="size-6" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-4-4"></path></svg>
                </div>
                <h2 class="mt-4 text-lg font-bold text-navy">What are you looking for?</h2>
                <p class="mx-auto mt-2 max-w-xl text-sm leading-relaxed text-dark/65">
                    Try keywords such as <span class="font-semibold text-dark">hoist crane</span>,
                    <span class="font-semibold text-dark">coating</span>,
                    <span class="font-semibold text-dark">industrial machinery</span>,
                    <span class="font-semibold text-dark">maintenance</span>, or <span class="font-semibold text-dark">events</span>.
                </p>
            </section>
        @elseif ($totalResults > 0)
            <div class="space-y-10">
                @foreach ($groupedResults as $category => $items)
                    <section aria-labelledby="search-group-{{ \Illuminate\Support\Str::slug($category) }}">
                        <div class="mb-4 flex items-center justify-between gap-3 border-b border-gray-200 pb-3">
                            <h2 id="search-group-{{ \Illuminate\Support\Str::slug($category) }}" class="text-lg font-bold text-navy sm:text-xl">{{ $category }}</h2>
                            <span class="rounded-full bg-[#EEF3FA] px-3 py-1 text-xs font-semibold text-navy">{{ count($items) }} {{ count($items) === 1 ? 'result' : 'results' }}</span>
                        </div>

                        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                            @foreach ($items as $item)
                                <a href="{{ $item['url'] }}" class="group flex h-full flex-col rounded-lg border border-[#E1E7EF] bg-white p-4 transition duration-200 hover:-translate-y-0.5 hover:border-[#B8C9DE] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:p-5">
                                    <div class="flex items-start justify-between gap-3">
                                        <h3 class="text-base font-bold leading-snug text-navy transition group-hover:text-primary sm:text-lg">{{ $item['title'] }}</h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="mt-0.5 size-5 shrink-0 text-[#7B8DA3] transition group-hover:translate-x-1 group-hover:text-primary" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
                                    </div>
                                    @if (!empty($item['snippet']))
                                        <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-dark/70">{{ $item['snippet'] }}</p>
                                    @endif
                                    <span class="mt-4 inline-flex items-center gap-1 text-xs font-semibold uppercase tracking-wide text-primary">
                                        View page
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endforeach
            </div>
        @else
            <section class="rounded-xl border border-dashed border-[#CBD7E5] bg-white px-5 py-10 text-center sm:px-8">
                <div class="mx-auto flex size-12 items-center justify-center rounded-full bg-[#F0F5FB] text-navy">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" class="size-6" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-4-4"></path></svg>
                </div>
                <h2 class="mt-4 text-lg font-bold text-navy">No matching results</h2>
                <p class="mx-auto mt-2 max-w-xl text-sm leading-relaxed text-dark/65">
                    We couldn't find content matching “{{ $query }}”. Try a shorter keyword, a related product name, or another term.
                </p>
                <div class="mt-5 flex flex-wrap justify-center gap-2">
                    <a href="{{ route('product.index') }}" class="rounded-md border border-[#D6E0EC] px-4 py-2 text-sm font-semibold text-navy transition hover:bg-[#F5F9FF]">Browse Products</a>
                    <a href="{{ route('news') }}" class="rounded-md border border-[#D6E0EC] px-4 py-2 text-sm font-semibold text-navy transition hover:bg-[#F5F9FF]">Read News</a>
                    <a href="{{ route('events.index') }}" class="rounded-md border border-[#D6E0EC] px-4 py-2 text-sm font-semibold text-navy transition hover:bg-[#F5F9FF]">View Events</a>
                </div>
            </section>
        @endif
    </main>

    @include('components.footer')
@endsection
