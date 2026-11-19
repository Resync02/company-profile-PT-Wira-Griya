@extends('layouts.app')

@section('title', 'Optimizing Product Quality with Advanced Coating Machine Solutions | PT Wira Griya')

@section('content')
@include('components.header')

@php
    $article = [
        'category' => 'Product Insight',
        'date' => '2026-03-25',
        'title' => 'Optimizing Product Quality with Advanced Coating Machine Solutions',
        'author' => 'Admin Wira',
        'image' => 'assets/images/news/optimizing-product-quality/news1.webp',
        'excerpt' => 'Learn how advanced coating machine solutions can help manufacturers improve finish consistency, manage material usage, and support efficient production.',
        'description' => 'Product quality is influenced not only by the materials used, but also by how consistently a coating is applied. In industrial production, a well-selected coating machine can help manufacturers achieve repeatable finishes, control material usage, and maintain a stable workflow. The right solution depends on the product, coating material, production volume, and operating environment.',
        'sections' => [
            [
                'heading' => 'The Role of Coating Machines in Manufacturing',
                'paragraph' => 'A coating machine applies a controlled layer of paint, powder, or another finishing material to a product surface. Depending on the application, the system may involve spray equipment, a coating booth, material delivery components, conveyors, and curing or drying equipment. Coordinating these elements helps create a more consistent finishing process.',
                'images' => [
                    'assets/images/news/optimizing-product-quality/gambar1.webp',
                    'assets/images/news/optimizing-product-quality/gambar2.webp',
                ],
            ],
            [
                'heading' => 'How Advanced Solutions Improve Product Quality',
                'paragraph' => 'Modern coating systems can provide better control over application settings such as spray pattern, material flow, equipment movement, and line speed. When these parameters are properly selected and maintained, manufacturers can reduce variations between products and achieve a more uniform surface finish.',
                'bullets' => [
                    'Consistent Application|Controlled settings help maintain a more even coating across production batches.',
                    'Repeatable Results|Standardized process parameters make it easier to reproduce an approved finish.',
                    'Material Management|Appropriate equipment and settings can help limit overspray and unnecessary material consumption.',
                    'Production Flow|Equipment integration can support a smoother workflow between preparation, coating, and finishing stages.',
                ],
            ],
            [
                'heading' => 'Factors to Consider When Selecting a Coating Machine',
                'paragraph' => 'Before selecting equipment, manufacturers should review the type of coating material, product dimensions and geometry, required finish, production capacity, and available facility space. The operating environment, ventilation requirements, maintenance access, and compatibility with existing production equipment should also be considered.',
            ],
            [
                'heading' => 'Finding the Right Coating Solution for Your Operation',
                'paragraph' => 'There is no single coating machine configuration that suits every production line. A suitable solution should be matched to the product and process requirements, with attention to reliability, operator requirements, maintenance, and opportunities for future production changes. PT Wira Griya supports industrial customers in exploring coating and painting equipment solutions based on their operational needs.',
            ],
        ],
        'tags' => [
            'Coating Machine',
            'Product Quality',
            'Industrial Solutions',
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

{{-- ARTICLE --}}
<main class="mx-auto w-full max-w-screen-2xl px-6 py-5 sm:px-10 sm:py-7 lg:px-12">

                        <a
                            href="{{ route('news') }}"
                            class="hidden md:inline-flex items-center gap-3 rounded-md px-2 py-2 text-xl font-semibold text-[#536FFF] transition hover:text-[#183E6E]"
                        >
                            <span aria-hidden="true" class="text-2xl">←</span>
                            Back
                        </a>

    {{-- ARTICLE HEADER --}}
    <header class="mt-3 border-b border-gray-200 pb-3">
        <h2 class="max-w-4xl text-lg font-bold leading-tight text-navy sm:text-2xl">
            {{ $article['title'] }}
        </h2>

        <div class="mt-2 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-navy/70 sm:text-base">


<span class="inline-flex items-center gap-2 text-sm sm:text-base">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="1.8" class="size-4 sm:size-5" aria-hidden="true">
        <rect x="3" y="5" width="18" height="16" rx="2"/>
        <path d="M7 3v4M17 3v4M3 10h18"/>
    </svg>
    <time datetime="{{ $article['date'] }}">
        {{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}
    </time>
</span>

<span class="inline-flex items-center gap-2 text-sm sm:text-base">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="1.8" class="size-4 sm:size-5" aria-hidden="true">
        <circle cx="12" cy="8" r="4"/>
        <path d="M4 21a8 8 0 0 1 16 0"/>
    </svg>
    {{ $article['author'] }}
</span>

<span class="rounded bg-blue-50 px-3 py-1.5 text-sm font-medium text-primary sm:text-base">
    {{ $article['category'] }}
</span>

        </div>
    </header>

    {{-- FEATURED IMAGE --}}
    <figure class="mt-4">
        <img
            src="{{ asset($article['image']) }}"
            alt="{{ $article['title'] }}"
            class="max-h-[480px] w-full rounded-sm object-cover"
        >
    </figure>

    {{-- ARTICLE BODY --}}
    <article class="mt-4 max-w-none text-base leading-relaxed text-navy/90 sm:text-lg">

        <p>{{ $article['description'] }}</p>

        @foreach ($article['sections'] as $section)
            <section class="mt-4">
                <h3 class="mb-1 text-sm font-bold text-navy sm:text-base">
                    {{ $section['heading'] }}
                </h3>

                <p>{{ $section['paragraph'] }}</p>

                @if (!empty($section['images']))
                    <div class="mt-3 grid grid-cols-2 gap-3">
                        @foreach ($section['images'] as $image)
                            <img
                                src="{{ asset($image) }}"
                                alt="{{ $section['heading'] }}"
                                class="aspect-[4/3] w-full rounded-sm object-cover"
                                loading="lazy"
                            >
                        @endforeach
                    </div>
                @endif

                @if (!empty($section['bullets']))
                    <ul class="mt-2 list-disc space-y-1 pl-4">
                        @foreach ($section['bullets'] as $bullet)
                            @php
                                [$heading, $description] = array_pad(
                                    explode('|', $bullet, 2),
                                    2,
                                    ''
                                );
                            @endphp

                            <li>
                                <strong class="text-navy">{{ $heading }}</strong>
                                @if ($description !== '')
                                    <span class="block">{{ $description }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </section>
        @endforeach

        <p class="mt-4">
            Looking for the right industrial solution for your business?
            Contact our team today to get a consultation and explore solutions
            tailored to your production needs.
        </p>

        <a
            href="{{ url('/contact-us') }}"
            class="mt-3 inline-flex items-center rounded bg-primary px-4 py-2 text-sm font-semibold text-white transition hover:bg-navy sm:text-base"
        >
            Contact Us
        </a>
    </article>

{{-- TAGS --}}
<div class="mt-5 flex flex-wrap items-center gap-2 border-b border-gray-200 pb-4 text-sm">
    <span class="font-semibold text-navy">Tags:</span>
    @foreach ($article['tags'] as $tag)
        <span class="rounded bg-blue-50 px-3 py-1.5 text-sm font-medium text-primary sm:text-base">
            {{ $tag }}
        </span>
    @endforeach
</div>

    {{-- SHARE ARTICLE --}}
    <section class="mt-4 border-b border-gray-200 pb-4">
        <h3 class="text-sm font-bold text-navy sm:text-base">
            Share this article:
        </h3>

        <div class="mt-2 flex items-center gap-2">
            <a
                href="https://wa.me/?text={{ urlencode($article['title'] . ' ' . url()->current()) }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Share on WhatsApp"
                class="flex size-7 items-center justify-center rounded bg-[#25D366] text-sm font-bold text-white"
            >W</a>

            <a
                href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Share on Facebook"
                class="flex size-7 items-center justify-center rounded bg-[#1877F2] text-sm font-bold text-white"
            >f</a>

            <a
                href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Share on LinkedIn"
                class="flex size-7 items-center justify-center rounded bg-[#0A66C2] text-sm font-bold text-white"
            >in</a>

            <button
                type="button"
                id="copy-article-link"
                aria-label="Copy article link"
                class="flex size-7 items-center justify-center rounded border border-gray-300 text-navy hover:bg-gray-50"
            >
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.7" class="size-4" aria-hidden="true">
                    <rect x="8" y="8" width="12" height="12" rx="2"/>
                    <path d="M16 8V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3"/>
                </svg>
            </button>

            <span id="copy-link-status" class="text-sm text-green-700" role="status"></span>
        </div>
    </section>

    {{-- COMMENTS --}}
    <section class="mt-5" id="comments">
        <h3 class="text-sm font-bold text-navy sm:text-base">
            Comments (<span id="comment-count">2</span>)
        </h3>

        <form id="comment-form" class="mt-3">
            @csrf

            <label for="comment-name" class="sr-only">Your name</label>
            <input
                id="comment-name"
                type="text"
                maxlength="80"
                required
                placeholder="Your name..."
                class="mb-2 w-full rounded border border-gray-300 px-3 py-2 text-sm outline-none focus:border-primary sm:text-base"
            >

            <label for="comment-message" class="sr-only">Write your comment</label>
            <textarea
                id="comment-message"
                rows="3"
                maxlength="1000"
                required
                placeholder="Write your comment..."
                class="w-full resize-y rounded border border-gray-300 px-3 py-2 text-sm outline-none focus:border-primary sm:text-base"
            ></textarea>

            <div class="mt-2 flex items-center justify-between gap-3">
                <p class="text-sm text-navy/60">
                    Comments are displayed after submission in this demo.
                </p>

                <button
                    type="submit"
                    class="shrink-0 rounded bg-primary px-4 py-2 text-sm font-semibold text-white hover:bg-navy sm:text-base"
                >
                    Post Comment
                </button>
            </div>
        </form>

        <div id="comment-list" class="mt-4 space-y-5"></div>

        <p id="comment-empty" class="mt-4 text-sm text-navy/60">
            No comments yet. Be the first to comment.
        </p>
    </section>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const copyButton = document.getElementById('copy-article-link');
    const copyStatus = document.getElementById('copy-link-status');

    copyButton?.addEventListener('click', async () => {
        try {
            await navigator.clipboard.writeText(window.location.href);
            copyStatus.textContent = 'Link copied!';
        } catch {
            copyStatus.textContent = 'Copy unavailable in this browser.';
        }
    });

    const form = document.getElementById('comment-form');
    const nameInput = document.getElementById('comment-name');
    const messageInput = document.getElementById('comment-message');
    const commentList = document.getElementById('comment-list');
    const commentCount = document.getElementById('comment-count');
    const emptyState = document.getElementById('comment-empty');

    let nextCommentId = 3;
    let comments = [
        {
            id: 1,
            name: 'Andi Pratama',
            message: 'Informasi yang menarik. Penjelasan mengenai konsistensi proses coating sangat membantu.',
            replies: []
        },
        {
            id: 2,
            name: 'Siti Rahma',
            message: 'Apakah solusi coating ini bisa disesuaikan dengan kebutuhan lini produksi yang berbeda?',
            replies: []
        }
    ];

    function createTextElement(tag, className, text) {
        const element = document.createElement(tag);
        element.className = className;
        element.textContent = text;
        return element;
    }

    function renderComments() {
        commentList.replaceChildren();
        commentCount.textContent = comments.length + comments.reduce((total, comment) => total + comment.replies.length, 0);
        emptyState.classList.toggle('hidden', comments.length > 0);

        comments.forEach(comment => {
            const item = document.createElement('article');
            item.className = 'flex gap-3';

            const avatar = createTextElement('div', 'flex size-9 shrink-0 items-center justify-center rounded-full bg-gray-100 text-sm font-semibold text-navy', comment.name.charAt(0).toUpperCase());
            avatar.setAttribute('aria-hidden', 'true');

            const body = document.createElement('div');
            body.className = 'min-w-0 flex-1';

            const author = createTextElement('p', 'text-base font-bold text-navy', comment.name);
            const message = createTextElement('p', 'mt-1 whitespace-pre-wrap break-words text-base leading-relaxed text-navy/80', comment.message);
            const replyButton = createTextElement('button', 'mt-2 text-sm font-semibold text-primary transition hover:text-navy', 'Reply');
            replyButton.type = 'button';
            replyButton.addEventListener('click', () => {
                const existing = body.querySelector('[data-reply-form]');
                if (existing) {
                    existing.remove();
                    return;
                }
                const replyForm = document.createElement('form');
                replyForm.dataset.replyForm = 'true';
                replyForm.className = 'mt-3 space-y-2 rounded-md border border-gray-200 bg-gray-50 p-3';
                const replyName = document.createElement('input');
                replyName.type = 'text';
                replyName.maxLength = 80;
                replyName.required = true;
                replyName.placeholder = 'Your name...';
                replyName.className = 'w-full rounded border border-gray-300 bg-white px-3 py-2 text-sm outline-none focus:border-primary';
                const replyMessage = document.createElement('textarea');
                replyMessage.rows = 2;
                replyMessage.maxLength = 1000;
                replyMessage.required = true;
                replyMessage.placeholder = 'Write your reply...';
                replyMessage.className = 'w-full resize-y rounded border border-gray-300 bg-white px-3 py-2 text-sm outline-none focus:border-primary';
                const replyActions = document.createElement('div');
                replyActions.className = 'flex justify-end gap-2';
                const cancelButton = createTextElement('button', 'rounded border border-gray-300 px-3 py-1.5 text-sm font-medium text-navy hover:bg-white', 'Cancel');
                cancelButton.type = 'button';
                cancelButton.addEventListener('click', () => replyForm.remove());
                const submitButton = createTextElement('button', 'rounded bg-primary px-3 py-1.5 text-sm font-semibold text-white hover:bg-navy', 'Post Reply');
                submitButton.type = 'submit';
                replyActions.append(cancelButton, submitButton);
                replyForm.append(replyName, replyMessage, replyActions);
                replyForm.addEventListener('submit', event => {
                    event.preventDefault();
                    const name = replyName.value.trim();
                    const text = replyMessage.value.trim();
                    if (!name || !text) return;
                    comment.replies.push({ id: nextCommentId++, name, message: text });
                    renderComments();
                });
                body.appendChild(replyForm);
                replyName.focus();
            });

            body.append(author, message, replyButton);

            if (comment.replies.length) {
                const replies = document.createElement('div');
                replies.className = 'mt-4 space-y-4 border-l-2 border-gray-200 pl-4';
                comment.replies.forEach(reply => {
                    const replyItem = document.createElement('div');
                    replyItem.className = 'flex gap-3';
                    const replyAvatar = createTextElement('div', 'flex size-8 shrink-0 items-center justify-center rounded-full bg-blue-50 text-sm font-semibold text-primary', reply.name.charAt(0).toUpperCase());
                    replyAvatar.setAttribute('aria-hidden', 'true');
                    const replyBody = document.createElement('div');
                    replyBody.className = 'min-w-0 flex-1';
                    replyBody.append(
                        createTextElement('p', 'text-sm font-bold text-navy', reply.name),
                        createTextElement('p', 'mt-1 whitespace-pre-wrap break-words text-sm leading-relaxed text-navy/80', reply.message)
                    );
                    replyItem.append(replyAvatar, replyBody);
                    replies.appendChild(replyItem);
                });
                body.appendChild(replies);
            }

            item.append(avatar, body);
            commentList.appendChild(item);
        });
    }

    form?.addEventListener('submit', event => {
        event.preventDefault();
        const name = nameInput.value.trim();
        const message = messageInput.value.trim();
        if (!name || !message) return;
        comments.unshift({ id: nextCommentId++, name, message, replies: [] });
        renderComments();
        form.reset();
    });

    renderComments();
});
</script>
@endpush