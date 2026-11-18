
<footer class="bg-[#1C416F] text-white">
    <div class="mx-auto w-full max-w-[1600px] px-4 py-7 sm:px-5 lg:px-6 lg:py-5">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-7 lg:grid-cols-[110px_1.25fr_1.25fr_0.85fr_1.15fr_220px] lg:gap-4">

{{-- Logo dengan akses tersembunyi Admin --}}
<div class="flex items-start">
    <a
        href="{{ route('home') }}"
        aria-label="PT Wira Griya Home"
        class="inline-block"
    >
        <img
            src="{{ asset('assets/images/wira.png') }}"
            alt="WIRA - PT Wira Griya"
            class="h-auto w-[100px] object-contain"
        >
    </a>
</div>

            {{-- Head Office --}}
            <div class="border-l border-white/25 pl-3 sm:pl-4">
                <h2 class="text-base font-medium uppercase tracking-wide">
                    Head Office
                </h2>
            <address class="mt-4 text-sm not-italic leading-[1.3] text-white/95">
                <a
                    href="https://maps.app.goo.gl/9AKY7c9H8zztTTST8"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="cursor-pointer transition-colors hover:text-gold hover:underline"
                >
                    Jl. Kyai Haji Zainul Arifin No.40,<br>
                    RT.1/RW.15, Tanah Sereal,<br>
                    Kec. Tambora, Kota Jakarta Barat,<br>
                    Daerah Khusus Ibukota Jakarta 11210
                </a>
            </address>
            </div>

            {{-- Site Office --}}
            <div class="border-l border-white/25 pl-3 sm:pl-4">
                <h2 class="text-base font-medium uppercase tracking-wide">
                    Site Office
                </h2>
                <address class="mt-4 text-sm not-italic leading-[1.3] text-white/95">
                    <a
                        href="https://maps.app.goo.gl/k5oeQNTAqHbTkgaa7"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="cursor-pointer transition-colors hover:text-gold hover:underline"
                    >
                        Jl. Cilincing No.km 1.5, RT.3/<br>
                        RW.8, Cakung Bar., Kec. Cakung,<br>
                        Kota Jakarta Timur, Daerah Khusus<br>
                        Ibukota Jakarta 13910
                    </a>
                </address>
            </div>

            {{-- Office Hours --}}
            <div class="border-l border-white/25 pl-3 sm:pl-4">
                <h2 class="text-base font-medium uppercase tracking-wide">
                    Office Hour
                </h2>

                <p class="mt-4 text-sm leading-[1.4] text-white/95">
                    Monday to Friday<br>
                    08:00 - 17:00
                </p>
            </div>

{{-- Social Media Links --}}
<div class="border-l border-white/25 pl-3 sm:pl-4">
    <h2 class="text-base font-medium uppercase tracking-wide">
        Follow Us
    </h2>

    <div class="mt-5 flex items-center gap-4">

        {{-- Instagram --}}
        <a href="https://www.instagram.com/USERNAME/"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="Instagram"
           class="text-white transition-all duration-300 hover:-translate-y-1 hover:text-[#E4405F]">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 class="h-6 w-6 fill-current"
                 aria-hidden="true">
                <path d="M7.8 2h8.4A5.8 5.8 0 0 1 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8A5.8 5.8 0 0 1 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2zm0 2A3.8 3.8 0 0 0 4 7.8v8.4A3.8 3.8 0 0 0 7.8 20h8.4a3.8 3.8 0 0 0 3.8-3.8V7.8A3.8 3.8 0 0 0 16.2 4H7.8zm4.2 3a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm5.5-3.5a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4z"/>
            </svg>
        </a>

        {{-- Facebook --}}
        <a href="https://www.facebook.com/USERNAME/"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="Facebook"
           class="text-white transition-all duration-300 hover:-translate-y-1 hover:text-[#1877F2]">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 class="h-6 w-6 fill-current"
                 aria-hidden="true">
                <path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.313 0 2.686.236 2.686.236v2.973h-1.513c-1.491 0-1.956.931-1.956 1.886v2.265h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/>
            </svg>
        </a>

        {{-- LinkedIn --}}
        <a href="https://www.linkedin.com/company/USERNAME/"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="LinkedIn"
           class="text-white transition-all duration-300 hover:-translate-y-1 hover:text-[#0A66C2]">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 class="h-6 w-6 fill-current"
                 aria-hidden="true">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.35V9h3.414v1.561h.049c.476-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.56V9h3.554v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
            </svg>
        </a>

        {{-- TikTok --}}
        <a href="https://www.tiktok.com/@USERNAME"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="TikTok"
           class="text-white transition-all duration-300 hover:-translate-y-1 hover:text-[#25F4EE]">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 24 24"
                 class="h-6 w-6 fill-current"
                 aria-hidden="true">
                <path d="M19.589 6.686a4.793 4.793 0 0 1-4.01-4.183V2h-3.73v14.522a3.024 3.024 0 1 1-3.023-3.024c.324 0 .641.053.937.15V9.843a6.744 6.744 0 1 0 5.816 6.68V9.145a8.47 8.47 0 0 0 4.01 1.008V6.686z"/>
            </svg>
        </a>

    </div>
</div>


{{-- Google Maps --}}
<div class="overflow-hidden border border-white/30">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5236.988367756815!2d106.81314530611752!3d-6.159050437169472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f772138b1831%3A0xf58ae811b6dbb9a9!2sPT.%20Wira%20Griya!5e1!3m2!1sid!2sid!4v1792138158811!5m2!1sid!2sid"
        title="Lokasi PT Wira Griya di Google Maps"
        class="block h-[190px] w-full sm:h-[220px] lg:h-[150px]"
        style="border: 0;"
        allowfullscreen
        loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>
</div>


        </div>

        <div class="mt-6 border-t border-white/15 pt-4 text-center text-xs text-white/65">
            &copy; {{ now()->year }} PT Wira Griya. All rights reserved.
        </div>
    </div>
</footer>