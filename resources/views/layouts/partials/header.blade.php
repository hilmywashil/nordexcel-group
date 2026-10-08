<header class="fixed top-0 left-0 z-50 w-full border-b border-[#CACACA]/70 bg-white/95 backdrop-blur-md">
    <div class="container-custom">
        <div class="flex h-[76px] items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center" aria-label="NordExcel Group">
                <img src="{{ asset('assets/logo.png') }}" alt="NordExcel Group" width="160" height="48"
                    class="h-12 w-auto object-contain">
            </a>
            <nav class="hidden items-center gap-8 lg:flex" aria-label="Menu utama">
                <a href="{{ route('home') }}" class="nav-link text-sm font-medium text-neutral-700">Home</a>
                <a href="{{ route('layanan') }}" class="nav-link text-sm font-medium text-neutral-700">Layanan</a>
                <a href="{{ route('tentang') }}" class="nav-link text-sm font-medium text-neutral-700">Tentang</a>
                <a href="{{ route('portofolio') }}" class="nav-link text-sm font-medium text-neutral-700">Portofolio</a>
                <a href="{{ route('klien') }}" class="nav-link text-sm font-medium text-neutral-700">Klien</a>
                <a href="{{ route('kontak') }}" class="nav-link text-sm font-medium text-neutral-700">Kontak</a>
            </nav>
            <a href="{{ route('kontak') }}"
                class="hidden rounded-md bg-[#FC6B01] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#e55f00] lg:inline-flex">
                Konsultasi
            </a>
            <button id="mobile-menu-button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-md border border-[#CACACA] text-xl text-neutral-800 lg:hidden"
                aria-label="Menu" aria-expanded="false" aria-controls="mobile-menu">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden border-t border-[#CACACA] py-4 lg:hidden">
            <nav class="flex flex-col" aria-label="Menu mobile">
                <a href="{{ route('home') }}"
                    class="border-b border-[#CACACA]/60 py-3 text-sm font-medium text-neutral-700">Home</a>
                <a href="{{ route('layanan') }}"
                    class="border-b border-[#CACACA]/60 py-3 text-sm font-medium text-neutral-700">Layanan</a>
                <a href="{{ route('tentang') }}"
                    class="border-b border-[#CACACA]/60 py-3 text-sm font-medium text-neutral-700">Tentang</a>
                <a href="{{ route('portofolio') }}"
                    class="border-b border-[#CACACA]/60 py-3 text-sm font-medium text-neutral-700">Portofolio</a>
                <a href="{{ route('klien') }}"
                    class="border-b border-[#CACACA]/60 py-3 text-sm font-medium text-neutral-700">Klien</a>
                <a href="{{ route('kontak') }}"
                    class="border-b border-[#CACACA]/60 py-3 text-sm font-medium text-neutral-700">Kontak</a>
                <a href="{{ route('kontak') }}"
                    class="mt-4 inline-flex w-fit rounded-md bg-[#FC6B01] px-5 py-3 text-sm font-semibold text-white">
                    Konsultasi
                </a>
            </nav>
        </div>
    </div>
</header>