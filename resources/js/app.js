document.addEventListener('DOMContentLoaded', () => {
    // =========================
    // SEARCH
    // =========================
    const searchInput = document.getElementById('search-input');
    const searchToggle = document.getElementById('search-toggle');
    const searchForm = document.getElementById('search-form');

    function openSearch() {
        if (!searchInput || !searchToggle) return;

        searchInput.classList.remove('w-0', 'px-0');
        searchInput.classList.add('w-32', 'px-3', 'sm:w-56');
        searchToggle.setAttribute('aria-expanded', 'true');
        searchToggle.setAttribute('aria-label', 'Close search');
        searchInput.focus();
    }

    function closeSearch() {
        if (!searchInput || !searchToggle) return;

        searchInput.value = '';
        searchInput.classList.add('w-0', 'px-0');
        searchInput.classList.remove('w-32', 'px-3', 'sm:w-56');
        searchToggle.setAttribute('aria-expanded', 'false');
        searchToggle.setAttribute('aria-label', 'Open search');
    }

    searchToggle?.addEventListener('click', () => {
        searchToggle.getAttribute('aria-expanded') === 'true'
            ? closeSearch()
            : openSearch();
    });

    searchForm?.addEventListener('submit', (event) => {
        if (!searchInput?.value.trim()) {
            event.preventDefault();
            searchInput?.focus();
        }
        // A non-empty query submits to the product catalogue using GET.
    });

    // Product category search: matches category names and their listed product types.
    const productCategoryGrid = document.querySelector('[data-product-category-grid]');
    if (productCategoryGrid) {
        const categoryCards = Array.from(productCategoryGrid.querySelectorAll('[data-product-category]'));
        const productSearchInput = document.getElementById('product-search-input');
        const productSearchFeedback = document.getElementById('product-search-feedback');
        const productSearchEmpty = document.getElementById('product-search-empty');
        const initialQuery = new URLSearchParams(window.location.search).get('q')?.trim() || '';

        if (productSearchInput && initialQuery) productSearchInput.value = initialQuery;
        if (searchInput && initialQuery) searchInput.value = initialQuery;

        const filterCategories = (rawQuery) => {
            const query = (rawQuery || '').trim().toLocaleLowerCase();
            let visibleCount = 0;

            categoryCards.forEach((card) => {
                const searchTerms = `${card.dataset.searchTerms || ''} ${card.textContent || ''}`.toLocaleLowerCase();
                const isMatch = !query || searchTerms.includes(query);
                card.hidden = !isMatch;
                if (isMatch) visibleCount += 1;
            });

            if (productSearchFeedback) {
                productSearchFeedback.textContent = query
                    ? `${visibleCount} ${visibleCount === 1 ? 'category' : 'categories'} found for “${rawQuery.trim()}”.`
                    : 'Browse the product categories below.';
            }

            productSearchEmpty?.classList.toggle('hidden', visibleCount !== 0);
        };

        filterCategories(initialQuery);
        productSearchInput?.addEventListener('input', () => filterCategories(productSearchInput.value));
        searchInput?.addEventListener('input', () => filterCategories(searchInput.value));
    }

    // =========================
    // SIDEBAR
    // =========================
    const sidebar = document.getElementById('site-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const sidebarOpen = document.getElementById('sidebar-open');
    const sidebarClose = document.getElementById('sidebar-close');

    function openSidebar() {
        if (!sidebar || !overlay) return;

        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('pointer-events-none', 'opacity-0');
        overlay.classList.add('pointer-events-auto', 'opacity-100');

        sidebar.removeAttribute('inert');
        sidebar.setAttribute('aria-hidden', 'false');
        sidebarOpen?.setAttribute('aria-expanded', 'true');
        document.body.classList.add('overflow-hidden');

        sidebarClose?.focus();
    }

    function closeSidebar({ restoreFocus = true } = {}) {
        if (!sidebar || !overlay) return;

        sidebar.classList.add('translate-x-full');
        overlay.classList.add('pointer-events-none', 'opacity-0');
        overlay.classList.remove('pointer-events-auto', 'opacity-100');

        sidebar.setAttribute('inert', '');
        sidebar.setAttribute('aria-hidden', 'true');
        sidebarOpen?.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('overflow-hidden');

        if (restoreFocus) sidebarOpen?.focus();
    }

    sidebarOpen?.addEventListener('click', openSidebar);
    sidebarClose?.addEventListener('click', () => closeSidebar());
    overlay?.addEventListener('click', () => closeSidebar());

    sidebar?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            closeSidebar({ restoreFocus: false });
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && sidebar && !sidebar.classList.contains('translate-x-full')) {
            closeSidebar();
        }
    });

    // =========================
    // CERTIFICATE LIGHTBOX
    // =========================
    let certificateLightbox = null;

    function createCertificateLightbox() {
        if (certificateLightbox) return certificateLightbox;

        certificateLightbox = document.createElement('div');
        certificateLightbox.id = 'certificate-lightbox';
        certificateLightbox.className =
            'fixed inset-0 z-[120] hidden items-center justify-center bg-black/80 p-4';
        certificateLightbox.setAttribute('aria-hidden', 'true');

        certificateLightbox.innerHTML = `
            <div class="relative flex max-h-[95vh] w-full max-w-4xl items-center justify-center">
                <button
                    type="button"
                    id="certificate-lightbox-close"
                    class="absolute -right-2 -top-2 z-10 flex size-10 cursor-pointer items-center justify-center rounded-full bg-white text-3xl text-dark shadow-lg transition hover:bg-gray-100 sm:-right-4 sm:-top-4"
                    aria-label="Close certificate preview"
                >&times;</button>

                <img
                    id="certificate-lightbox-image"
                    src=""
                    alt="Certificate preview"
                    class="max-h-[90vh] max-w-full rounded-md bg-white object-contain shadow-2xl"
                >
            </div>
        `;

        document.body.appendChild(certificateLightbox);

        certificateLightbox
            .querySelector('#certificate-lightbox-close')
            .addEventListener('click', closeCertificateLightbox);

        certificateLightbox.addEventListener('click', (event) => {
            if (event.target === certificateLightbox) {
                closeCertificateLightbox();
            }
        });

        return certificateLightbox;
    }

    function openCertificateLightbox(imagePath, imageAlt = 'Certificate preview') {
        const lightbox = createCertificateLightbox();
        const image = lightbox.querySelector('#certificate-lightbox-image');

        image.src = imagePath;
        image.alt = imageAlt;

        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        lightbox.setAttribute('aria-hidden', 'false');
    }

    function closeCertificateLightbox() {
        if (!certificateLightbox) return;

        certificateLightbox.classList.add('hidden');
        certificateLightbox.classList.remove('flex');
        certificateLightbox.setAttribute('aria-hidden', 'true');

        certificateLightbox
            .querySelector('#certificate-lightbox-image')
            .removeAttribute('src');
    }

    // =========================
    // ABOUT US MODALS
    // =========================
    const modal = document.getElementById('about-modal');
    const modalTitle = document.getElementById('about-modal-title');
    const modalBody = document.getElementById('about-modal-body');
    const modalClose = document.getElementById('about-modal-close');

    const modalContent = {
        history: {
            title: '50 Years Experience',
            template: 'history-modal-template',
        },

        customers: {
            title: 'Our Valued Customers',
            body: '',
        },

        partners: {
            title: 'Our Partners',
            body: '',
        },

        cities: {
            title: 'Cities Served',
            template: 'cities-modal-template',
        },

        testimonial: {
            title: 'Customer Testimonials',
            template: 'testimonial-modal-template',
        },

vision: {
    title: 'Vision & Mission',
    body: `
        <div class="relative flex h-[min(680px,calc(100vh-170px))] min-h-0 w-full flex-col overflow-hidden rounded-xl text-white">

            <!-- Unified Background -->
            <div
                class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('/assets/images/about/vnm/vnm.png');"
                aria-hidden="true"
            ></div>

            <!-- Unified Dark Overlay -->
            <div
                class="absolute inset-0 bg-[#071D35]/75"
                aria-hidden="true"
            ></div>


            <!-- =========================
                 VISION SECTION
            ========================== -->
            <section class="relative z-10 flex min-h-0 flex-[0_0_40%] flex-col items-center justify-center px-5 py-5 text-center sm:px-10 sm:py-6 lg:px-14">

                <div class="mx-auto flex w-full max-w-5xl flex-col items-center">

                    <!-- Vision Heading -->
                    <div class="mb-3 flex items-center justify-center gap-3">

                        <!-- Eye Icon -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="size-9 shrink-0 text-[#F4B544] sm:size-11"
                            aria-hidden="true"
                        >
                            <path d="M12 4.5C5.5 4.5 1.7 11 1 12c.7 1 4.5 7.5 11 7.5s10.3-6.5 11-7.5c-.7-1-4.5-7.5-11-7.5Zm0 12a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Zm0-2.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        </svg>

                        <h3 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                            Vision
                        </h3>

                    </div>

                    <!-- Vision Description -->
                    <p class="max-w-4xl text-base font-medium leading-relaxed text-white sm:text-lg lg:text-xl">
                        To become a leading industrial solutions provider in Indonesia, recognized for our commitment to quality, innovation, and sustainability.
                    </p>

                </div>

            </section>


            <!-- =========================
                 DIVIDER
            ========================== -->
            <div class="relative z-10 mx-auto w-[86%] shrink-0 border-t border-white/30"></div>


            <!-- =========================
                 MISSION SECTION
            ========================== -->
            <section class="relative z-10 flex min-h-0 flex-1 flex-col justify-center px-5 py-4 sm:px-10 sm:py-5 lg:px-14">

                <div class="mx-auto flex w-full max-w-5xl flex-col justify-center">

                    <!-- Mission Heading -->
                    <div class="mb-4 flex items-center justify-center gap-3 sm:mb-6">

                        <!-- Target Icon -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="size-9 shrink-0 text-[#F4B544] sm:size-11"
                            aria-hidden="true"
                        >
                            <circle cx="12" cy="12" r="9"/>
                            <circle cx="12" cy="12" r="5"/>
                            <circle cx="12" cy="12" r="1"/>
                            <path d="m13 11 7-7"/>
                            <path d="M16 4h4v4"/>
                        </svg>

                        <h3 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                            Mission
                        </h3>

                    </div>


                    <!-- Mission Cards -->
                    <div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 sm:gap-4">


                        <!-- Mission 01 -->
                        <article class="flex min-h-[76px] items-center gap-3 rounded-lg border border-white/25 bg-[#0C2947]/40 px-4 py-3 backdrop-blur-[2px] transition-colors duration-300 hover:bg-[#0C2947]/60 sm:gap-4 sm:px-5 sm:py-4">

                            <span class="shrink-0 text-4xl font-bold leading-none text-[#F4B544] sm:text-5xl">
                                01
                            </span>

                            <p class="text-sm font-medium leading-relaxed text-white sm:text-base lg:text-lg">
                                Deliver high-quality industrial products and services.
                            </p>

                        </article>


                        <!-- Mission 02 -->
                        <article class="flex min-h-[76px] items-center gap-3 rounded-lg border border-white/25 bg-[#0C2947]/40 px-4 py-3 backdrop-blur-[2px] transition-colors duration-300 hover:bg-[#0C2947]/60 sm:gap-4 sm:px-5 sm:py-4">

                            <span class="shrink-0 text-4xl font-bold leading-none text-[#F4B544] sm:text-5xl">
                                02
                            </span>

                            <p class="text-sm font-medium leading-relaxed text-white sm:text-base lg:text-lg">
                                Provide innovative and efficient solutions tailored to customer needs.
                            </p>

                        </article>


                        <!-- Mission 03 -->
                        <article class="flex min-h-[76px] items-center gap-3 rounded-lg border border-white/25 bg-[#0C2947]/40 px-4 py-3 backdrop-blur-[2px] transition-colors duration-300 hover:bg-[#0C2947]/60 sm:gap-4 sm:px-5 sm:py-4">

                            <span class="shrink-0 text-4xl font-bold leading-none text-[#F4B544] sm:text-5xl">
                                03
                            </span>

                            <p class="text-sm font-medium leading-relaxed text-white sm:text-base lg:text-lg">
                                Build long-term partnerships with customers, suppliers, and stakeholders.
                            </p>

                        </article>


                        <!-- Mission 04 -->
                        <article class="flex min-h-[76px] items-center gap-3 rounded-lg border border-white/25 bg-[#0C2947]/40 px-4 py-3 backdrop-blur-[2px] transition-colors duration-300 hover:bg-[#0C2947]/60 sm:gap-4 sm:px-5 sm:py-4">

                            <span class="shrink-0 text-4xl font-bold leading-none text-[#F4B544] sm:text-5xl">
                                04
                            </span>

                            <p class="text-sm font-medium leading-relaxed text-white sm:text-base lg:text-lg">
                                Contribute to a safer, more productive, and sustainable industry.
                            </p>

                        </article>


                    </div>

                </div>

            </section>

        </div>
    `,
},

        certifications: {
            title: 'Certifications & Legal Documents',
            body: `
                <div class="flex min-h-full items-center justify-center py-6 sm:py-8">
                    <div class="grid w-full max-w-6xl grid-cols-2 gap-x-6 gap-y-8 sm:grid-cols-4">

                    <!-- Certificate 1 -->
                    <article class="min-w-0 overflow-hidden rounded-lg bg-white text-center">
                        <button
                            type="button"
                            class="certificate-item group block w-full cursor-pointer overflow-hidden rounded-md bg-gray-50"
                            data-certificate-image="/assets/images/about/certifications/c1.jpeg"
                            data-certificate-alt="ISO 9001:2015 - Quality Management System"
                            aria-label="View ISO 9001:2015 certificate"
                        >
                            <img
                                src="/assets/images/about/certifications/c1.jpeg"
                                alt="ISO 9001:2015"
                                class="aspect-[3/4] w-full object-contain transition duration-300 group-hover:scale-[1.03]"
                                loading="lazy"
                            >
                        </button>
                        <div class="px-1 pt-3">
                            <h3 class="text-base font-bold text-navy">ISO 9001:2015</h3>
                            <p class="mt-1 text-sm leading-relaxed text-gray-600">Quality Management System</p>
                        </div>

                                            </article>

                    <!-- Certificate 2 -->
                    <article class="min-w-0 overflow-hidden rounded-lg bg-white text-center">
                        <button
                            type="button"
                            class="certificate-item group block w-full cursor-pointer overflow-hidden rounded-md bg-gray-50"
                            data-certificate-image="/assets/images/about/certifications/c2.jpeg"
                            data-certificate-alt="ISO 14001:2015 - Environmental Management"
                            aria-label="View ISO 14001:2015 certificate"
                        >
                            <img
                                src="/assets/images/about/certifications/c2.jpeg"
                                alt="ISO 14001:2015"
                                class="aspect-[3/4] w-full object-contain transition duration-300 group-hover:scale-[1.03]"
                                loading="lazy"
                            >
                        </button>
                        <div class="px-1 pt-3">
                            <h3 class="text-base font-bold text-navy">ISO 14001:2015</h3>
                            <p class="mt-1 text-sm leading-relaxed text-gray-600">Environmental Management</p>
                        </div>
                    </article>

                    <!-- Certificate 3 -->
                    <article class="min-w-0 overflow-hidden rounded-lg bg-white text-center">
                        <button
                            type="button"
                            class="certificate-item group block w-full cursor-pointer overflow-hidden rounded-md bg-gray-50"
                            data-certificate-image="/assets/images/about/certifications/c3.jpeg"
                            data-certificate-alt="ISO 45001:2018 - Occupational Health and Safety"
                            aria-label="View ISO 45001:2018 certificate"
                        >
                            <img
                                src="/assets/images/about/certifications/c3.jpeg"
                                alt="ISO 45001:2018"
                                class="aspect-[3/4] w-full object-contain transition duration-300 group-hover:scale-[1.03]"
                                loading="lazy"
                            >
                        </button>
                        <div class="px-1 pt-3">
                            <h3 class="text-base font-bold text-navy">ISO 45001:2018</h3>
                            <p class="mt-1 text-sm leading-relaxed text-gray-600">Occupational Health &amp; Safety</p>
                        </div>
                    </article>

                    <!-- Certificate 4: Temporary reuse of c3.jpeg -->
                    <article class="min-w-0 overflow-hidden rounded-lg bg-white text-center">
                        <button
                            type="button"
                            class="certificate-item group block w-full cursor-pointer overflow-hidden rounded-md bg-gray-50"
                            data-certificate-image="/assets/images/about/certifications/c3.jpeg"
                            data-certificate-alt="Temporary certificate 4 preview"
                            aria-label="View certificate 4"
                        >
                            <img
                                src="/assets/images/about/certifications/c3.jpeg"
                                alt="Temporary certificate 4 preview"
                                class="aspect-[3/4] w-full object-contain transition duration-300 group-hover:scale-[1.03]"
                                loading="lazy"
                            >
                        </button>
                        <div class="px-1 pt-3">
                            <h3 class="text-base font-bold text-navy">ISO 45001:2018</h3>
                            <p class="mt-1 text-sm leading-relaxed text-gray-600">Occupational Health &amp; Safety</p>
                        </div>
                    </article>

                    </div>
                </div>
            `,
        },

        focus: {
            title: 'Business Focus',
            template: 'focus-modal-template',
        },

    };


    // Mount a Blade template into the shared About modal. Every section keeps
    // the same modal shell; long content scrolls inside #about-modal-body.
    function mountAboutTemplate(templateId) {
        const template = document.getElementById(templateId);
        if (!template || !modalBody) {
            console.warn(`About modal template not found: ${templateId}`);
            modalBody?.replaceChildren();
            return false;
        }

        modalBody.replaceChildren(template.content.cloneNode(true));
        modalBody.scrollTop = 0;
        return true;
    }

    // Business Focus: hover reveals the associated brand slider on desktop;
    // click/tap pins the selected category for touch and keyboard users.
    function initBusinessFocus() {
        if (!modalBody) return;

        const cards = Array.from(modalBody.querySelectorAll('.bfc-hover-card'));
        if (!cards.length) return;

        const interactionStyles = document.createElement('style');
        interactionStyles.dataset.aboutFocusInteractions = 'true';
        interactionStyles.textContent = `
            .bfc-hover-card.is-active .bfc-hover-bubble {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: translate(0, -50%);
            }
            .bfc-hover-card.is-active .bfc-logo-track {
                animation: bfc-marquee 16s linear infinite;
            }
            .bfc-hover-card--right.is-active .bfc-hover-bubble {
                transform: translate(0, -50%);
            }
            @media (max-width: 640px) {
                .bfc-hover-card.is-active .bfc-hover-bubble,
                .bfc-hover-card--right.is-active .bfc-hover-bubble {
                    transform: translate(-50%, -50%);
                }
            }
            @media (prefers-reduced-motion: reduce) {
                .bfc-hover-card.is-active .bfc-logo-track {
                    animation: none;
                }
            }
        `;
        modalBody.prepend(interactionStyles);

        const setActiveCard = (activeCard) => {
            cards.forEach((card) => {
                const isActive = card === activeCard;
                card.classList.toggle('is-active', isActive);
                card.setAttribute('aria-expanded', String(isActive));
            });
        };

        cards.forEach((card) => {
            card.tabIndex = 0;
            card.setAttribute('role', 'button');
            card.setAttribute('aria-expanded', 'false');
            card.setAttribute('aria-label', `${card.querySelector('h3')?.textContent.trim() || 'Product category'} — view partner brands`);

            card.addEventListener('mouseenter', () => setActiveCard(card));
            card.addEventListener('mouseleave', () => {
                if (card.dataset.pinned !== 'true' && document.activeElement !== card) {
                    card.classList.remove('is-active');
                    card.setAttribute('aria-expanded', 'false');
                }
            });

            card.addEventListener('click', (event) => {
                // Ignore clicks on nested controls if links/buttons are added later.
                if (event.target.closest('a, button')) return;

                const shouldPin = card.dataset.pinned !== 'true';
                cards.forEach((item) => { item.dataset.pinned = 'false'; });
                card.dataset.pinned = String(shouldPin);
                setActiveCard(shouldPin ? card : null);
            });

            card.addEventListener('focus', () => setActiveCard(card));
            card.addEventListener('blur', () => {
                if (card.dataset.pinned !== 'true') {
                    card.classList.remove('is-active');
                    card.setAttribute('aria-expanded', 'false');
                }
            });
            card.addEventListener('keydown', (event) => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    card.click();
                }
            });
        });
    }


// =========================
// TESTIMONIAL FLIP CARD + PAGINATION
// 8 TESTIMONIALS / 4 PER PAGE
// =========================
function initTestimonialFlipCards() {
        if (!modalBody) return;

        const grid = modalBody.querySelector('[data-testimonial-grid]');
        const cards = Array.from(
            modalBody.querySelectorAll('[data-testimonial-flip]')
        );
        const previousButton = modalBody.querySelector('[data-testimonial-prev]');
        const nextButton = modalBody.querySelector('[data-testimonial-next]');
        const dotsContainer = modalBody.querySelector('[data-testimonial-dots]');

        if (!grid || !cards.length || !dotsContainer) return;

        const perPage = 4;
        const totalPages = Math.ceil(cards.length / perPage);
        let currentPage = 0;

        // Flip card: click/tap and keyboard interaction.
        cards.forEach((card, index) => {
            card.tabIndex = 0;
            card.setAttribute('role', 'button');
            card.setAttribute('aria-pressed', 'false');

            const customerName =
                card.querySelector('h3')?.textContent.trim() ||
                `Customer ${index + 1}`;

            card.setAttribute(
                'aria-label',
                                `${customerName}. Hover or click to read testimonial.`
            );

            const toggleFlip = () => {
                const isFlipped = card.classList.toggle('is-flipped');
                card.setAttribute('aria-pressed', String(isFlipped));
            };

            card.addEventListener('click', (event) => {
                if (event.target.closest('a, button')) return;
                toggleFlip();
            });

            card.addEventListener('keydown', (event) => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    toggleFlip();
                }
            });

            card.addEventListener('blur', () => {
                card.classList.remove('is-flipped');
                card.setAttribute('aria-pressed', 'false');
            });
        });

        // Show a neutral fallback if a customer photo or company logo is missing.
        modalBody.querySelectorAll(
            '[data-testimonial-photo], [data-testimonial-logo]'
        ).forEach((image) => {
            image.addEventListener('error', () => {
                const isPhoto = image.hasAttribute('data-testimonial-photo');
                const fallback = document.createElement('div');

                fallback.className = isPhoto
                    ? 'flex h-full min-h-0 w-full items-center justify-center bg-[#DCE8F4] px-3 text-center text-xs font-semibold text-[#183E6E]'
                    : 'flex h-14 w-full max-w-[190px] items-center justify-center rounded bg-[#F3F6FA] px-2 text-center text-xs font-semibold text-[#183E6E]';
                fallback.textContent = isPhoto ? 'Customer Photo' : 'Company Logo';
                image.replaceWith(fallback);
            }, { once: true });
        });

        // Build page dots.
        dotsContainer.replaceChildren();

        for (let index = 0; index < totalPages; index += 1) {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'size-2.5 cursor-pointer rounded-full transition';
            dot.setAttribute('aria-label', `Go to testimonial page ${index + 1}`);
            dot.addEventListener('click', () => showPage(index));
            dotsContainer.appendChild(dot);
        }

        // Render the selected page. Navigation wraps around like the Customer slider.
        function showPage(pageIndex) {
            currentPage = (pageIndex + totalPages) % totalPages;

            const firstCard = currentPage * perPage;
            const lastCard = firstCard + perPage;

            cards.forEach((card, index) => {
                const isVisible = index >= firstCard && index < lastCard;
                const scene = card.closest('.testimonial-flip-scene');

                if (scene) scene.hidden = !isVisible;

                if (!isVisible) {
                    card.classList.remove('is-flipped');
                    card.setAttribute('aria-pressed', 'false');
                }
            });

            Array.from(dotsContainer.children).forEach((dot, index) => {
                const active = index === currentPage;
                dot.classList.toggle('bg-navy', active);
                dot.classList.toggle('bg-gray-300', !active);
                dot.setAttribute('aria-current', String(active));
            });

            modalBody.scrollTop = 0;
        }

        // Side navigation: arrows remain at the left and right of the grid.
        previousButton?.addEventListener('click', () => {
            showPage(currentPage - 1);
        });

        nextButton?.addEventListener('click', () => {
            showPage(currentPage + 1);
        });

        showPage(0);
    }

    // =========================
    // CUSTOMER LOGO SLIDER
    // =========================
    let customersAutoplayTimer = null;
    let customersSliderCleanup = null;

    function stopCustomersSlider() {
        if (customersAutoplayTimer !== null) {
            window.clearInterval(customersAutoplayTimer);
            customersAutoplayTimer = null;
        }

        customersSliderCleanup?.();
        customersSliderCleanup = null;
    }

    function initCustomersSlider() {
        stopCustomersSlider();

        const template = document.getElementById('customers-modal-template');

        if (!template || !modalBody) return;

        // Clone the existing Blade template into the shared modal.
        modalBody.replaceChildren(template.content.cloneNode(true));

        const basePath = '/assets/images/about/customer';
        const track = modalBody.querySelector('[data-customers-track]');
        const viewport = modalBody.querySelector('[data-customers-viewport]');
        const previousButton = modalBody.querySelector('[data-customers-prev]');
        const nextButton = modalBody.querySelector('[data-customers-next]');
        const dotsContainer = modalBody.querySelector('[data-customers-dots]');

        if (!basePath || !track || !viewport || !dotsContainer) return;

        // Replace these filenames with the exact files in public/assets/images/logo/client.
        const customerLogos = [
            { name: 'Schneider Electric', file: 'schneider.png' },
            { name: 'KAI', file: 'KAI.png' },
            { name: 'PLN', file: 'PLN.png' },
            { name: 'Pindad', file: 'Pindad.png' },
            { name: 'Wika', file: 'Wika.png' },
            { name: 'Kohler', file: 'Kohler.png' },
            { name: 'INOAC', file: 'INOAC.png' },
            { name: 'Wilo', file: 'wilo.png' },
            { name: 'TOTO', file: 'toto.png' },
            { name: 'YKK', file: 'ykk.png' },
            { name: 'Hitachi', file: 'Hitachi.png' },
            { name: 'Chuhatsu', file: 'Chuhatsu.png' },
            { name: 'Daihatsu', file: 'Daihatsu.png' },
            { name: 'Honda', file: 'Honda.png' },
            { name: 'Isuzu', file: 'Isuzu.png' },
            { name: 'AIM', file: 'AIM.png' },
            { name: 'CMWI', file: 'CMWI.png' },
            { name: 'Dharma', file: 'dharma.png' },
            { name: 'IKPT', file: 'IKPT.png' },
            { name: 'Ikuyo', file: 'ikuyo.png' },
            { name: 'Indofood', file: 'Indofood.png' },
            { name: 'Kansai', file: 'kansai.png' },
        ];

        let currentPage = 0;
        let logosPerPage = getLogosPerPage();
        let resizeTimer = null;

        function getLogosPerPage() {
            if (window.innerWidth >= 1024) return 16;
            if (window.innerWidth >= 640) return 8;
            return 4;
        }

        function renderSlider() {
            logosPerPage = getLogosPerPage();

            const totalPages = Math.ceil(customerLogos.length / logosPerPage);

            currentPage = Math.min(currentPage, Math.max(0, totalPages - 1));

            track.replaceChildren();
            dotsContainer.replaceChildren();

            for (let pageIndex = 0; pageIndex < totalPages; pageIndex++) {
                const page = document.createElement('div');

                page.className =
                    'grid min-w-full shrink-0 grid-cols-2 items-center gap-3 px-2 sm:grid-cols-4 sm:gap-4 lg:grid-cols-4';
                const start = pageIndex * logosPerPage;
                const pageLogos = customerLogos.slice(
                    start,
                    start + logosPerPage
                );

                pageLogos.forEach((logo) => {
                    const logoCard = document.createElement('div');

                logoCard.className =
                    'flex h-28 min-w-0 items-center justify-center overflow-hidden rounded-lg border border-gray-100 bg-white p-4 sm:h-32';

                    const image = document.createElement('img');


                        image.src = `${basePath}/${encodeURIComponent(logo.file)}`;
                        image.alt = logo.name;
                        image.loading = 'eager';
                        image.decoding = 'async';
                        image.className =
                            'block h-16 w-full max-w-[180px] object-contain sm:h-20';

                        image.addEventListener('error', () => {
                            console.error('Logo gagal dimuat:', {
                                name: logo.name,
                                file: logo.file,
                                url: image.src,
                            });

                            image.remove();

                            const fallback = document.createElement('span');
                            fallback.className =
                                'break-words text-center text-xs font-medium text-gray-500';
                            fallback.textContent = logo.name;

                            logoCard.appendChild(fallback);
                        }, { once: true });

                        logoCard.appendChild(image);
                        page.appendChild(logoCard);

                });

                track.appendChild(page);

                const dot = document.createElement('button');

                dot.type = 'button';
                dot.className =
                    'size-2.5 cursor-pointer rounded-full transition';

                dot.setAttribute('aria-label', `Go to customer logos page ${pageIndex + 1}`);

                dot.addEventListener('click', () => {
                    showPage(pageIndex);
                    restartAutoplay();
                });

                dotsContainer.appendChild(dot);
            }

            showPage(currentPage);

            const showNavigation = totalPages > 1;

            previousButton?.classList.toggle('hidden', !showNavigation);
            nextButton?.classList.toggle('hidden', !showNavigation);
            dotsContainer.classList.toggle('hidden', !showNavigation);
        }

        function showPage(index) {
            const pages = Array.from(track.children);
            if (!pages.length) return;

            currentPage = (index + pages.length) % pages.length;

            track.style.transform = `translateX(-${currentPage * 100}%)`;

            Array.from(dotsContainer.children).forEach((dot, i) => {
                const active = i === currentPage;

                dot.classList.toggle('bg-navy', active);
                dot.classList.toggle('bg-gray-300', !active);
                dot.setAttribute('aria-current', String(active));
            });
        }

        function startAutoplay() {
            if (customersAutoplayTimer !== null) {
                window.clearInterval(customersAutoplayTimer);
            }

            if (track.children.length > 1) {
                customersAutoplayTimer = window.setInterval(() => {
                    if (!document.hidden) {
                        showPage(currentPage + 1);
                    }
                }, 3500);
            }
        }

        function restartAutoplay() {
            startAutoplay();
        }

        previousButton?.addEventListener('click', () => {
            showPage(currentPage - 1);
            restartAutoplay();
        });

        nextButton?.addEventListener('click', () => {
            showPage(currentPage + 1);
            restartAutoplay();
        });

        viewport.addEventListener('mouseenter', () => {
            if (customersAutoplayTimer !== null) {
                window.clearInterval(customersAutoplayTimer);
                                customersAutoplayTimer = null;
            }
        });

        viewport.addEventListener('mouseleave', startAutoplay);

        const handleVisibility = () => {
            if (document.hidden) {
                if (customersAutoplayTimer !== null) {
                    window.clearInterval(customersAutoplayTimer);
                    customersAutoplayTimer = null;
                }
            } else {
                startAutoplay();
            }
        };

        const handleResize = () => {
            window.clearTimeout(resizeTimer);

            resizeTimer = window.setTimeout(() => {
                const newCount = getLogosPerPage();

                if (newCount !== logosPerPage) {
                    renderSlider();
                    startAutoplay();
                }
            }, 150);
        };

        document.addEventListener('visibilitychange', handleVisibility);
        window.addEventListener('resize', handleResize);

        customersSliderCleanup = () => {
            window.clearTimeout(resizeTimer);
            document.removeEventListener('visibilitychange', handleVisibility);
            window.removeEventListener('resize', handleResize);
        };

        renderSlider();
        startAutoplay();
    }


    // =========================
    // PARTNER LOGO SLIDER
    // =========================
    let partnersAutoplayTimer = null;
    let partnersSliderCleanup = null;

    function stopPartnersSlider() {
        if (partnersAutoplayTimer !== null) {
            window.clearInterval(partnersAutoplayTimer);
            partnersAutoplayTimer = null;
        }

        partnersSliderCleanup?.();
        partnersSliderCleanup = null;
    }

    function initPartnersSlider() {
        stopPartnersSlider();

        const template = document.getElementById('partners-modal-template');
        if (!template || !modalBody) return;

        modalBody.replaceChildren(template.content.cloneNode(true));

        const basePath = '/assets/images/about/partners';
        const track = modalBody.querySelector('[data-partners-track]');
        const viewport = modalBody.querySelector('[data-partners-viewport]');
        const previousButton = modalBody.querySelector('[data-partners-prev]');
        const nextButton = modalBody.querySelector('[data-partners-next]');
        const dotsContainer = modalBody.querySelector('[data-partners-dots]');

        if (!basePath || !track || !viewport || !dotsContainer) return;

        const partnerLogos = [
            { name: 'Asahi Sunac', file: 'asahi.png' },
            { name: 'BF Coating', file: 'bfcoating.png' },
            { name: 'CMAK', file: 'cmak.png' },
            { name: 'Eversun Machinery', file: 'eversun.png' },
            { name: 'GH Cranes & Components', file: 'gh.png' },
            { name: 'NH Hoist', file: 'nh.png' },
            { name: 'VR', file: 'vr.png' },
            { name: 'Worldhoists', file: 'wh.png' },
            { name: 'Xiaolun', file: 'xiaolun.png' },
            { name: 'Yaskawa', file: 'yaskawa.png' },
        ];

        let currentPage = 0;
        let logosPerPage = getLogosPerPage();
        let resizeTimer = null;

        function getLogosPerPage() {
            if (window.innerWidth >= 1024) return 16;
            if (window.innerWidth >= 640) return 8;
            return 4;
        }

        function showPage(index) {
            const pages = Array.from(track.children);
            if (!pages.length) return;

            currentPage = (index + pages.length) % pages.length;
            track.style.transform = `translateX(-${currentPage * 100}%)`;

            Array.from(dotsContainer.children).forEach((dot, i) => {
                const active = i === currentPage;
                dot.classList.toggle('bg-navy', active);
                dot.classList.toggle('bg-gray-300', !active);
                dot.setAttribute('aria-current', String(active));
            });
        }

        function startAutoplay() {
            if (partnersAutoplayTimer !== null) {
                window.clearInterval(partnersAutoplayTimer);
            }

            if (track.children.length > 1) {
                partnersAutoplayTimer = window.setInterval(() => {
                    if (!document.hidden) showPage(currentPage + 1);
                }, 3500);
            }
        }

        function renderSlider() {
            logosPerPage = getLogosPerPage();
            const totalPages = Math.ceil(partnerLogos.length / logosPerPage);

            currentPage = Math.min(currentPage, Math.max(0, totalPages - 1));

            track.replaceChildren();
            dotsContainer.replaceChildren();

            for (let pageIndex = 0; pageIndex < totalPages; pageIndex++) {
                const page = document.createElement('div');
                page.className =
                    'grid min-w-full shrink-0 grid-cols-2 items-center gap-3 px-2 sm:grid-cols-4 sm:gap-4 lg:grid-cols-4';

                const start = pageIndex * logosPerPage;
                const logos = partnerLogos.slice(start, start + logosPerPage);

                logos.forEach((logo) => {
                    const card = document.createElement('div');
                card.className =
                    'flex h-28 min-w-0 items-center justify-center overflow-hidden rounded-lg border border-gray-100 bg-white p-4 sm:h-32';
                                    const image = document.createElement('img');
                    image.src = `${basePath}/${encodeURIComponent(logo.file)}`;
                    image.alt = logo.name;
                    image.loading = 'eager';
                    image.decoding = 'async';
                    image.className =
                        'block h-16 w-full max-w-[180px] object-contain sm:h-20';

                    image.addEventListener('error', () => {
                        console.error('Partner logo gagal dimuat:', {
                            name: logo.name,
                            file: logo.file,
                            url: image.src,
                        });

                        image.remove();

                        const fallback = document.createElement('span');
                        fallback.className =
                            'break-words text-center text-xs font-medium text-gray-500';
                        fallback.textContent = logo.name;
                        card.appendChild(fallback);
                    }, { once: true });

                    card.appendChild(image);
                    page.appendChild(card);
                });

                track.appendChild(page);

                const dot = document.createElement('button');
                dot.type = 'button';
                dot.className = 'size-2.5 cursor-pointer rounded-full transition';
                dot.setAttribute(
                    'aria-label',
                    `Go to partner logos page ${pageIndex + 1}`
                );

                dot.addEventListener('click', () => {
                    showPage(pageIndex);
                    startAutoplay();
                });

                dotsContainer.appendChild(dot);
            }

            const hasMultiplePages = totalPages > 1;

            previousButton?.classList.toggle('invisible', !hasMultiplePages);
            nextButton?.classList.toggle('invisible', !hasMultiplePages);

            if (previousButton) {
                previousButton.disabled = !hasMultiplePages;
            }

            if (nextButton) {
                nextButton.disabled = !hasMultiplePages;
            }

            dotsContainer.classList.toggle('hidden', !hasMultiplePages);

            showPage(currentPage);
        }

        previousButton?.addEventListener('click', () => {
            showPage(currentPage - 1);
            startAutoplay();
        });

        nextButton?.addEventListener('click', () => {
            showPage(currentPage + 1);
            startAutoplay();
        });

        viewport.addEventListener('mouseenter', () => {
            if (partnersAutoplayTimer !== null) {
                window.clearInterval(partnersAutoplayTimer);
                partnersAutoplayTimer = null;
            }
        });

        viewport.addEventListener('mouseleave', startAutoplay);

        const handleVisibility = () => {
            if (document.hidden) {
                if (partnersAutoplayTimer !== null) {
                    window.clearInterval(partnersAutoplayTimer);
                    partnersAutoplayTimer = null;
                }
            } else {
                startAutoplay();
            }
        };

        const handleResize = () => {
            window.clearTimeout(resizeTimer);

            resizeTimer = window.setTimeout(() => {
                const newCount = getLogosPerPage();

                if (newCount !== logosPerPage) {
                    renderSlider();
                    startAutoplay();
                }
            }, 150);
        };

        document.addEventListener('visibilitychange', handleVisibility);
        window.addEventListener('resize', handleResize);

        partnersSliderCleanup = () => {
            window.clearTimeout(resizeTimer);
            document.removeEventListener('visibilitychange', handleVisibility);
            window.removeEventListener('resize', handleResize);
        };

        renderSlider();
        startAutoplay();
    }

        // =========================
    // OPEN / CLOSE ABOUT MODAL
    // =========================
    let lastModalTrigger = null;


    function openAboutModal(key, trigger) {
        if (!modal || !modalTitle || !modalBody) return;

        const content = modalContent[key];
        if (!content) return;

        stopCustomersSlider();
        stopPartnersSlider();

        lastModalTrigger = trigger;

        modalTitle.textContent = content.title;
        modalTitle.classList.toggle('hidden', !content.title);

        if (key === 'customers') {
            initCustomersSlider();
        } else if (key === 'partners') {
            initPartnersSlider();
        } else if (content.template) {
            if (mountAboutTemplate(content.template)) {
                if (key === 'focus') initBusinessFocus();
                if (key === 'testimonial') initTestimonialFlipCards();
            }
        } else {
            modalBody.innerHTML = content.body || '';
            modalBody.scrollTop = 0;
                    }

        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');

        modalClose?.focus();
    }

    function closeAboutModal() {
        if (!modal) return;

        stopCustomersSlider();
        stopPartnersSlider();
        modalBody?.replaceChildren();
        if (modalBody) modalBody.scrollTop = 0;

        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');

        lastModalTrigger?.focus();
    }


    document.querySelectorAll('[data-about-modal]').forEach((button) => {
        button.addEventListener('click', () => {
            openAboutModal(button.dataset.aboutModal, button);
        });
    });

    // Certificate buttons are added dynamically inside modalBody.
    modalBody?.addEventListener('click', (event) => {
        const certificateButton = event.target.closest('.certificate-item');

        if (!certificateButton) return;

        const imagePath = certificateButton.dataset.certificateImage;
        const imageAlt =
            certificateButton.dataset.certificateAlt || 'Certificate preview';

        if (imagePath) {
            openCertificateLightbox(imagePath, imageAlt);
        }
    });

    modalClose?.addEventListener('click', closeAboutModal);

    modal?.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeAboutModal();
        }
    });


    // =========================
    // ESCAPE KEY
    // =========================
    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') return;

        if (
            certificateLightbox &&
            !certificateLightbox.classList.contains('hidden')
        ) {
            closeCertificateLightbox();
            return;
        }

        if (modal && !modal.classList.contains('hidden')) {
            closeAboutModal();
            return;
        }

        if (sidebar?.getAttribute('aria-hidden') === 'false') {
            closeSidebar();
            return;
        }

        closeSearch();
    });



    // =========================
    // REUSABLE HERO SLIDERS
    // Product & Coating Painting
    // =========================
    function initHeroSlider({
        rootId,
        slideSelector,
        dotSelector,
        previousButtonId,
        nextButtonId,
        interval = 5000
    }) {
        const root = document.getElementById(rootId);

        if (!root) return;

        const slides = Array.from(
            root.querySelectorAll(slideSelector)
        );

        const dots = Array.from(
            root.querySelectorAll(dotSelector)
        );

        const previousButton = document.getElementById(
            previousButtonId
        );

        const nextButton = document.getElementById(
            nextButtonId
        );

        if (slides.length === 0) return;

        let currentSlide = 0;
        let autoplayTimer = null;

        function showSlide(index) {
            currentSlide =
                (index + slides.length) % slides.length;

            slides.forEach((slide, slideIndex) => {
                const isActive = slideIndex === currentSlide;

                slide.classList.toggle('opacity-100', isActive);
                slide.classList.toggle('opacity-0', !isActive);
                slide.classList.toggle(
                    'pointer-events-none',
                    !isActive
                );

                slide.setAttribute(
                    'aria-hidden',
                    String(!isActive)
                );

                const link = slide.matches('a')
                    ? slide
                    : slide.querySelector('a');

                if (link) {
                    if (isActive) {
                        link.removeAttribute('tabindex');
                    } else {
                        link.setAttribute('tabindex', '-1');
                    }
                }
            });

            // Update indicator dots
            dots.forEach((dot, dotIndex) => {
                const isActive = dotIndex === currentSlide;

                dot.classList.toggle('bg-navy', isActive);
                dot.classList.toggle('ring-2', isActive);
                dot.classList.toggle('ring-white', isActive);
                dot.classList.toggle('bg-white/80', !isActive);
                dot.classList.toggle('ring-1', !isActive);
                dot.classList.toggle('ring-navy/30', !isActive);

                dot.setAttribute(
                    'aria-current',
                    isActive ? 'true' : 'false'
                );
            });
        }

        function stopAutoplay() {
            if (autoplayTimer !== null) {
                window.clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        function startAutoplay() {
            stopAutoplay();

            if (slides.length > 1) {
                autoplayTimer = window.setInterval(() => {
                    if (!document.hidden) {
                        showSlide(currentSlide + 1);
                    }
                }, interval);
            }
        }

        // Previous button
        previousButton?.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            showSlide(currentSlide - 1);
            startAutoplay();
        });

        // Next button
        nextButton?.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            showSlide(currentSlide + 1);
            startAutoplay();
        });

        // Indicator dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', (event) => {
                event.preventDefault();
                event.stopPropagation();

                showSlide(index);
                startAutoplay();
            });
        });

        // Pause autoplay on hover
        root.addEventListener('mouseenter', stopAutoplay);
        root.addEventListener('mouseleave', startAutoplay);

        // Pause autoplay during keyboard interaction
        root.addEventListener('focusin', stopAutoplay);

        root.addEventListener('focusout', (event) => {
            if (!root.contains(event.relatedTarget)) {
                startAutoplay();
            }
        });

        // Pause autoplay when the tab is hidden
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });

        // Initialize
        showSlide(0);
        startAutoplay();
    }


    // =========================
    // PRODUCT PAGE SLIDER
    // =========================
    initHeroSlider({
        rootId: 'product-hero-slider',
        slideSelector: '.product-slide',
        dotSelector: '.product-slide-dot',
        previousButtonId: 'product-slide-prev',
        nextButtonId: 'product-slide-next',
        interval: 5000
    });



    // =========================
    // COATING & PAINTING SLIDER
    // =========================
    initHeroSlider({
        rootId: 'coating-hero-slider',
        slideSelector: '.coating-slide',
        dotSelector: '.coating-slide-dot',
        previousButtonId: 'coating-slide-prev',
        nextButtonId: 'coating-slide-next',
        interval: 5000
    });

});