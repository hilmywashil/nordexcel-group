@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="relative overflow-hidden pt-[76px]">
        <div class="container-custom">
            <div class="grid min-h-[680px] items-center gap-14 py-20 lg:grid-cols-[1.05fr_.95fr] lg:py-24">
                <div>
                    <p class="mb-5 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        NordExcel Group
                    </p>

                    <h1 class="max-w-3xl text-4xl font-extrabold leading-[1.08] tracking-[-0.035em] text-neutral-950 sm:text-5xl lg:text-[64px]">
                        Bangun Kehadiran Digital yang
                        <span class="text-[#FC6B01]">Lebih Profesional.</span>
                    </h1>

                    <p class="mt-7 max-w-xl text-base leading-7 text-neutral-600 sm:text-lg">
                        NordExcel Group membantu bisnis membangun website dan sistem digital yang profesional, fungsional, dan dirancang sesuai kebutuhan bisnis.
                    </p>

                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('kontak') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e55f00]">
                            Mulai Konsultasi
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="{{ route('layanan') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-md border border-[#CACACA] px-6 py-3.5 text-sm font-semibold text-neutral-800 transition hover:border-[#FC6B01] hover:text-[#FC6B01]">
                            Lihat Layanan
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="overflow-hidden rounded-lg border border-[#CACACA] bg-[#F5F5F5]">
                        <img src="{{ asset('assets/hero-bg.webp') }}"
                            alt="Layanan pembuatan website dan sistem digital NordExcel Group"
                            width="900"
                            height="600"
                            fetchpriority="high"
                            class="h-[420px] w-full object-cover sm:h-[500px]">
                    </div>

                    <div class="absolute -bottom-5 -left-4 hidden w-56 border border-[#CACACA] bg-white p-5 shadow-sm sm:block">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center bg-[#FC6B01] text-lg text-white">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <p class="font-heading text-sm font-bold">
                            Digital Development
                        </p>

                        <p class="mt-1 text-xs leading-5 text-neutral-500">
                            Website & sistem yang dibuat untuk kebutuhan nyata bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-24">
        <div class="container-custom">
            <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <div class="max-w-2xl">
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Layanan
                    </p>

                    <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                        Solusi digital untuk kebutuhan bisnis Anda.
                    </h2>

                    <p class="mt-5 leading-7 text-neutral-600">
                        Mulai dari website sederhana hingga sistem yang membutuhkan pengelolaan data dan proses bisnis.
                    </p>
                </div>

                <a href="{{ route('layanan') }}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-[#FC6B01]">
                    Lihat Semua Layanan
                    <i class="bi bi-arrow-up-right"></i>
                </a>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="service-item border border-[#CACACA] bg-white p-7">
                    <div class="mb-8 flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-building"></i>
                    </div>

                    <h3 class="text-xl font-bold">Website Company Profile</h3>

                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                        Website profesional untuk memperkenalkan perusahaan, layanan, portofolio, dan kredibilitas bisnis.
                    </p>
                </div>

                <div class="service-item border border-[#CACACA] bg-white p-7">
                    <div class="mb-8 flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-cart3"></i>
                    </div>

                    <h3 class="text-xl font-bold">Toko Online</h3>

                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                        Solusi e-commerce untuk membantu bisnis menjual produk secara online dengan pengalaman belanja yang jelas.
                    </p>
                </div>

                <div class="service-item border border-[#CACACA] bg-white p-7">
                    <div class="mb-8 flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-window"></i>
                    </div>

                    <h3 class="text-xl font-bold">Landing Page</h3>

                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                        Halaman yang dirancang untuk campaign, promosi produk, pengumpulan leads, maupun kebutuhan marketing.
                    </p>
                </div>

                <div class="service-item border border-[#CACACA] bg-white p-7">
                    <div class="mb-8 flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-speedometer2"></i>
                    </div>

                    <h3 class="text-xl font-bold">Sistem Admin</h3>

                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                        Dashboard dan sistem pengelolaan data yang disesuaikan dengan alur kerja serta kebutuhan internal.
                    </p>
                </div>

                <div class="service-item border border-[#CACACA] bg-white p-7">
                    <div class="mb-8 flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-kanban"></i>
                    </div>

                    <h3 class="text-xl font-bold">Web Application</h3>

                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                        Aplikasi berbasis web untuk membantu mengelola proses, data, dan kebutuhan operasional bisnis.
                    </p>
                </div>

                <div class="service-item border border-[#CACACA] bg-white p-7">
                    <div class="mb-8 flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-tools"></i>
                    </div>

                    <h3 class="text-xl font-bold">Website Maintenance</h3>

                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                        Bantuan pemeliharaan, perbaikan, update, dan pengembangan website yang sudah dimiliki.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="container-custom">
            <div class="grid gap-14 lg:grid-cols-[.85fr_1.15fr] lg:items-start">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Why Choose Us
                    </p>

                    <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                        Bukan sekadar membuat website.
                    </h2>

                    <p class="mt-5 leading-7 text-neutral-600">
                        Kami fokus membuat solusi yang relevan dengan kebutuhan bisnis, bukan sekadar tampilan yang terlihat bagus.
                    </p>
                </div>

                <div class="border-t border-[#CACACA]">
                    <div class="grid gap-6 border-b border-[#CACACA] py-7 sm:grid-cols-[70px_1fr]">
                        <span class="font-heading text-2xl font-bold text-[#FC6B01]">01</span>

                        <div>
                            <h3 class="text-lg font-bold">Dibuat Sesuai Kebutuhan</h3>

                            <p class="mt-2 text-sm leading-6 text-neutral-600">
                                Setiap bisnis memiliki kebutuhan berbeda. Kami menyesuaikan struktur dan fitur berdasarkan tujuan proyek.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-6 border-b border-[#CACACA] py-7 sm:grid-cols-[70px_1fr]">
                        <span class="font-heading text-2xl font-bold text-[#FC6B01]">02</span>

                        <div>
                            <h3 class="text-lg font-bold">Fokus pada Pengalaman Pengguna</h3>

                            <p class="mt-2 text-sm leading-6 text-neutral-600">
                                Navigasi yang jelas, informasi yang mudah dipahami, dan tampilan profesional menjadi bagian penting dari setiap project.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-6 border-b border-[#CACACA] py-7 sm:grid-cols-[70px_1fr]">
                        <span class="font-heading text-2xl font-bold text-[#FC6B01]">03</span>

                        <div>
                            <h3 class="text-lg font-bold">Komunikasi yang Transparan</h3>

                            <p class="mt-2 text-sm leading-6 text-neutral-600">
                                Kami menjaga komunikasi selama proses pengerjaan agar progres dan kebutuhan project tetap terarah.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-6 border-b border-[#CACACA] py-7 sm:grid-cols-[70px_1fr]">
                        <span class="font-heading text-2xl font-bold text-[#FC6B01]">04</span>

                        <div>
                            <h3 class="text-lg font-bold">Siap Dikembangkan</h3>

                            <p class="mt-2 text-sm leading-6 text-neutral-600">
                                Website dan sistem dirancang agar dapat dikembangkan mengikuti pertumbuhan kebutuhan bisnis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-24">
        <div class="container-custom">
            <div class="grid gap-12 lg:grid-cols-[1fr_1fr] lg:items-center">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Tentang NordExcel
                    </p>

                    <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                        Partner digital untuk membantu bisnis berkembang.
                    </h2>

                    <p class="mt-5 max-w-xl leading-7 text-neutral-600">
                        NordExcel Group membantu bisnis dan organisasi membangun website serta solusi digital yang disesuaikan dengan kebutuhan mereka.
                    </p>

                    <p class="mt-4 max-w-xl leading-7 text-neutral-600">
                        Kami percaya bahwa website bukan hanya tentang tampilan, tetapi juga tentang bagaimana sebuah bisnis menyampaikan informasi, membangun kepercayaan, dan berkembang secara digital.
                    </p>

                    <a href="{{ route('tentang') }}"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-[#FC6B01]">
                        Tentang Kami
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

                <div class="overflow-hidden border border-[#CACACA] bg-white">
                    <img src="{{ asset('assets/about-img.webp') }}"
                        alt="Tentang NordExcel Group"
                        width="1000"
                        height="750"
                        loading="lazy"
                        class="h-[360px] w-full object-cover sm:h-[440px]">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-24">
        <div class="container-custom">
            <div class="carousel"
                data-carousel
                data-autoplay="6000"
                aria-roledescription="carousel"
                aria-label="Testimonial client">

                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div>
                        <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                            Testimonial
                        </p>

                        <h2 class="text-3xl font-bold tracking-[-0.025em] sm:text-4xl">
                            Apa kata mereka?
                        </h2>

                        <p class="mt-4 max-w-md text-sm leading-6 text-neutral-600">
                            Beberapa pengalaman dari client yang telah mempercayakan kebutuhan digitalnya kepada kami.
                        </p>
                    </div>

                    <div class="flex items-center gap-5">
                        <a href="{{ route('testimonial') }}"
                            class="hidden items-center gap-2 text-sm font-semibold text-[#FC6B01] sm:inline-flex">
                            Lihat Semua
                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                        <div class="flex gap-2">
                            <button type="button"
                                class="carousel-btn"
                                data-prev
                                aria-label="Sebelumnya">
                                <i class="bi bi-arrow-left"></i>
                            </button>

                            <button type="button"
                                class="carousel-btn"
                                data-next
                                aria-label="Berikutnya">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="carousel-viewport mt-12">
                    <div class="carousel-track">
                        @forelse ($testimonials as $testimonial)
                            <div class="carousel-slide">
                                <article class="border border-[#CACACA] bg-white p-7">
                                    <div class="flex gap-1 text-[#FC6B01]">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="bi {{ $i <= $testimonial->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                                        @endfor
                                    </div>

                                    <p class="mt-7 text-sm leading-7 text-neutral-600">
                                        “{{ $testimonial->content }}”
                                    </p>

                                    <div class="mt-8 border-t border-[#CACACA] pt-5">
                                        <p class="text-sm font-bold">
                                            {{ $testimonial->name }}
                                        </p>

                                        @if ($testimonial->company || $testimonial->position)
                                            <p class="mt-1 text-xs text-neutral-500">
                                                {{ $testimonial->company }}

                                                @if ($testimonial->company && $testimonial->position)
                                                    /
                                                @endif

                                                {{ $testimonial->position }}
                                            </p>
                                        @endif
                                    </div>
                                </article>
                            </div>
                        @empty
                            <div class="carousel-slide">
                                <article class="border border-[#CACACA] bg-white p-7">
                                    <p class="text-sm text-neutral-500">
                                        Belum ada testimonial.
                                    </p>
                                </article>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="carousel-dots mt-8 justify-center" data-dots></div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="container-custom">
            <div class="carousel"
                data-carousel
                aria-roledescription="carousel"
                aria-label="Artikel terbaru">

                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div>
                        <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                            Artikel
                        </p>

                        <h2 class="text-3xl font-bold tracking-[-0.025em] sm:text-4xl">
                            Insight untuk bisnis digital.
                        </h2>
                    </div>

                    <div class="flex items-center gap-5">
                        <a href="{{ route('artikel') }}"
                            class="hidden items-center gap-2 text-sm font-semibold text-[#FC6B01] sm:inline-flex">
                            Lihat Semua Artikel
                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                        <div class="flex gap-2">
                            <button type="button"
                                class="carousel-btn"
                                data-prev
                                aria-label="Sebelumnya">
                                <i class="bi bi-arrow-left"></i>
                            </button>

                            <button type="button"
                                class="carousel-btn"
                                data-next
                                aria-label="Berikutnya">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="carousel-viewport mt-12">
                    <div class="carousel-track">
                        @forelse ($articles as $article)
                            <div class="carousel-slide">
                                <article class="article-item flex flex-col overflow-hidden border border-[#CACACA] bg-white">
                                    <div class="overflow-hidden">
                                        @if ($article->thumbnail)
                                            <img loading="lazy"
                                                width="800"
                                                height="500"
                                                src="{{ asset('storage/' . $article->thumbnail) }}"
                                                alt="{{ $article->title }}"
                                                class="h-56 w-full object-cover">
                                        @else
                                            <div class="flex h-56 w-full items-center justify-center bg-[#F5F5F5] text-sm text-neutral-400">
                                                NordExcel Group
                                            </div>
                                        @endif
                                    </div>

                                    <div class="flex flex-1 flex-col p-6">
                                        @if ($article->category)
                                            <p class="text-xs font-semibold uppercase tracking-wider text-[#FC6B01]">
                                                {{ $article->category->name }}
                                            </p>
                                        @endif

                                        <h3 class="mt-3 text-lg font-bold leading-7">
                                            {{ $article->title }}
                                        </h3>

                                        @if ($article->excerpt)
                                            <p class="mt-3 text-sm leading-6 text-neutral-600">
                                                {{ $article->excerpt }}
                                            </p>
                                        @endif

                                        <a href="{{ route('artikel.detail', $article->slug) }}"
                                            class="mt-auto inline-flex items-center gap-2 pt-5 text-sm font-semibold text-neutral-900">
                                            Baca Artikel
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @empty
                            <div class="carousel-slide">
                                <article class="border border-[#CACACA] bg-white p-7">
                                    <p class="text-sm text-neutral-500">
                                        Belum ada artikel.
                                    </p>
                                </article>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="carousel-dots mt-8 justify-center" data-dots></div>
            </div>
        </div>
    </section>

    <section class="border-y border-[#CACACA] py-20">
        <div class="container-custom text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                Our Clients
            </p>

            <h2 class="mt-3 text-3xl font-bold tracking-[-0.025em]">
                Dipercaya oleh berbagai bisnis.
            </h2>
        </div>

        <div class="marquee mt-12"
            data-marquee
            aria-label="Logo client kami">

            <div class="marquee-track">
                @forelse ($clients as $client)
                    <div class="marquee-item">
                        @if ($client->logo)
                            <img loading="lazy"
                                src="{{ asset('storage/' . $client->logo) }}"
                                alt="{{ $client->name }}"
                                width="150"
                                height="60">
                        @else
                            <span class="text-sm font-semibold text-neutral-500">
                                {{ $client->name }}
                            </span>
                        @endif
                    </div>
                @empty
                    <div class="marquee-item">
                        <span class="text-sm text-neutral-400">
                            Belum ada client.
                        </span>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="container-custom mt-10 text-center">
            <a href="{{ route('klien') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-[#FC6B01]">
                Lihat Semua Klien
                <i class="bi bi-arrow-up-right"></i>
            </a>
        </div>
    </section>

    <section class="bg-[#FC6B01] py-20">
        <div class="container-custom">
            <div class="flex flex-col justify-between gap-10 lg:flex-row lg:items-center">
                <div class="max-w-2xl">
                    <p class="mb-4 text-sm font-semibold uppercase tracking-[0.15em] text-white/75">
                        Let's Work Together
                    </p>

                    <h2 class="text-3xl font-bold leading-tight tracking-[-0.025em] text-white sm:text-4xl lg:text-5xl">
                        Punya ide atau kebutuhan digital untuk bisnis Anda?
                    </h2>
                </div>

                <a href="{{ route('kontak') }}"
                    class="inline-flex w-fit shrink-0 items-center gap-3 rounded-md bg-white px-7 py-4 text-sm font-bold text-[#FC6B01] transition hover:bg-neutral-100">
                    Diskusikan Project
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection