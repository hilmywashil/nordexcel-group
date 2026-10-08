<footer class="bg-neutral-950 text-white">
    <div class="container-custom py-16">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_.6fr_.6fr_.8fr]">
            <div>
                <a href="{{ route('home') }}" aria-label="NordExcel Group">
                    <img src="{{ asset('assets/logo.png') }}" alt="NordExcel Group" width="160" height="48"
                        loading="lazy" class="h-12 w-auto object-contain">
                </a>
                <p class="mt-6 max-w-sm text-sm leading-7 text-neutral-400">
                    Digital solutions partner untuk membantu bisnis membangun kehadiran dan sistem digital yang
                    profesional.
                </p>
                <div class="mt-7 flex gap-3">
                    <a href="#" aria-label="Instagram" rel="noopener"
                        class="flex h-10 w-10 items-center justify-center border border-neutral-700 text-neutral-300 transition hover:border-[#FC6B01] hover:text-[#FC6B01]">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" aria-label="LinkedIn" rel="noopener"
                        class="flex h-10 w-10 items-center justify-center border border-neutral-700 text-neutral-300 transition hover:border-[#FC6B01] hover:text-[#FC6B01]">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    @if ($contact?->whatsapp)
                        @php
                            $whatsapp = preg_replace('/[^0-9]/', '', $contact->whatsapp);
                        @endphp
                        <a href="https://wa.me/{{ $whatsapp }}" aria-label="WhatsApp" target="_blank"
                            rel="noopener noreferrer"
                            class="flex h-10 w-10 items-center justify-center border border-neutral-700 text-neutral-300 transition hover:border-[#FC6B01] hover:text-[#FC6B01]">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    @endif
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold">Navigation</h3>
                <ul class="mt-5 space-y-3 text-sm text-neutral-400">
                    <li><a href="{{ route('home') }}" class="transition hover:text-white">Home</a></li>
                    <li><a href="{{ route('layanan') }}" class="transition hover:text-white">Layanan</a></li>
                    <li><a href="{{ route('tentang') }}" class="transition hover:text-white">Tentang</a></li>
                    <li><a href="{{ route('portofolio') }}" class="transition hover:text-white">Portofolio</a></li>
                    <li><a href="{{ route('klien') }}" class="transition hover:text-white">Klien</a></li>
                    <li><a href="{{ route('kontak') }}" class="transition hover:text-white">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold">Explore</h3>
                <ul class="mt-5 space-y-3 text-sm text-neutral-400">
                    <li><a href="{{ route('artikel') }}" class="transition hover:text-white">Artikel</a></li>
                    <li><a href="{{ route('testimonial') }}" class="transition hover:text-white">Testimonial</a></li>
                    <li><a href="{{ route('portofolio') }}" class="transition hover:text-white">Portofolio</a></li>
                    <li><a href="{{ route('layanan') }}" class="transition hover:text-white">Layanan</a></li>
                    <li><a href="{{ route('kontak') }}" class="transition hover:text-white">Konsultasi</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold">Contact</h3>
                <ul class="mt-5 space-y-4 text-sm text-neutral-400">
                    @if ($contact?->email)
                        <li class="flex gap-3">
                            <i class="bi bi-envelope mt-0.5 text-[#FC6B01]"></i>
                            <a href="mailto:{{ $contact->email }}" class="transition hover:text-white">
                                {{ $contact->email }}
                            </a>
                        </li>
                    @endif

                    @if ($contact?->whatsapp)
                        <li class="flex gap-3">
                            <i class="bi bi-whatsapp mt-0.5 text-[#FC6B01]"></i>
                            <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener noreferrer"
                                class="transition hover:text-white">
                                {{ $contact->whatsapp }}
                            </a>
                        </li>
                    @endif

                    @if ($contact?->location)
                        <li class="flex gap-3">
                            <i class="bi bi-geo-alt mt-0.5 text-[#FC6B01]"></i>
                            <span>{{ $contact->location }}</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <div
            class="mt-14 flex flex-col justify-between gap-4 border-t border-neutral-800 pt-6 text-xs text-neutral-500 sm:flex-row">
            <p>&copy; 2026 NordExcel Group. All rights reserved.</p>
            <p>Built for businesses that want to move forward.</p>
        </div>
    </div>
</footer>