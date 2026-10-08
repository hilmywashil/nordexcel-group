@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
        <div class="container-custom">
            <div class="max-w-3xl">
                <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Layanan</span>
                <h1
                    class="mt-5 text-4xl font-bold leading-tight tracking-[-0.03em] text-neutral-950 sm:text-5xl lg:text-6xl">
                    Solusi website untuk kebutuhan bisnis Anda.
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                    Kami membantu bisnis membangun website yang profesional, fungsional, dan siap digunakan untuk mendukung
                    kebutuhan digital.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-20">
        <div class="container-custom">
            <div class="max-w-2xl">
                <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Yang Kami Kerjakan</span>
                <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] text-neutral-950 sm:text-4xl">
                    Layanan yang dibuat sesuai kebutuhan.
                </h2>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <article class="border border-[#CACACA] bg-white p-7">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-building"></i>
                    </div>
                    <h3 class="mt-7 text-xl font-bold text-neutral-950">Website Company Profile</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Website profesional untuk memperkenalkan bisnis, layanan, portofolio, dan informasi perusahaan
                        kepada calon pelanggan.
                    </p>
                </article>

                <article class="border border-[#CACACA] bg-white p-7">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-cart3"></i>
                    </div>
                    <h3 class="mt-7 text-xl font-bold text-neutral-950">Toko Online</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Platform toko online untuk menampilkan produk, mengelola katalog, dan membantu bisnis menjangkau
                        pelanggan secara digital.
                    </p>
                </article>

                <article class="border border-[#CACACA] bg-white p-7">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-window"></i>
                    </div>
                    <h3 class="mt-7 text-xl font-bold text-neutral-950">Landing Page</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Landing page yang fokus pada satu tujuan, seperti promosi produk, campaign, event, maupun kebutuhan
                        pemasaran.
                    </p>
                </article>

                <article class="border border-[#CACACA] bg-white p-7">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-grid-1x2"></i>
                    </div>
                    <h3 class="mt-7 text-xl font-bold text-neutral-950">Sistem Admin</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Sistem berbasis web untuk membantu bisnis mengelola data, pengguna, transaksi, laporan, dan
                        kebutuhan operasional.
                    </p>
                </article>

                <article class="border border-[#CACACA] bg-white p-7">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h3 class="mt-7 text-xl font-bold text-neutral-950">Web Application</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Aplikasi web yang dikembangkan berdasarkan alur kerja dan kebutuhan khusus dari setiap bisnis atau
                        organisasi.
                    </p>
                </article>

                <article class="border border-[#CACACA] bg-white p-7">
                    <div class="flex h-12 w-12 items-center justify-center bg-[#FC6B01] text-xl text-white">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h3 class="mt-7 text-xl font-bold text-neutral-950">Website Maintenance</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Pemeliharaan website, pembaruan konten, perbaikan masalah, serta pengembangan fitur sesuai
                        kebutuhan.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container-custom">
            <div class="grid gap-12 lg:grid-cols-[.8fr_1.2fr] lg:items-center">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Proses</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] text-neutral-950 sm:text-4xl">
                        Dari ide hingga website siap digunakan.
                    </h2>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="border border-[#CACACA] p-6">
                        <span class="text-sm font-bold text-[#FC6B01]">01</span>
                        <h3 class="mt-4 font-bold text-neutral-950">Diskusi</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-600">Memahami kebutuhan, tujuan, dan karakter bisnis
                            Anda.</p>
                    </div>
                    <div class="border border-[#CACACA] p-6">
                        <span class="text-sm font-bold text-[#FC6B01]">02</span>
                        <h3 class="mt-4 font-bold text-neutral-950">Perancangan</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-600">Menentukan struktur dan tampilan yang sesuai
                            dengan kebutuhan.</p>
                    </div>
                    <div class="border border-[#CACACA] p-6">
                        <span class="text-sm font-bold text-[#FC6B01]">03</span>
                        <h3 class="mt-4 font-bold text-neutral-950">Development</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-600">Membangun website dan fitur berdasarkan rancangan
                            yang telah disepakati.</p>
                    </div>
                    <div class="border border-[#CACACA] p-6">
                        <span class="text-sm font-bold text-[#FC6B01]">04</span>
                        <h3 class="mt-4 font-bold text-neutral-950">Launch</h3>
                        <p class="mt-2 text-sm leading-6 text-neutral-600">Melakukan pengecekan akhir sebelum website
                            digunakan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-neutral-950 py-20 text-white">
        <div class="container-custom">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Mulai Sekarang</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] sm:text-4xl">Punya kebutuhan website?</h2>
                    <p class="mt-4 leading-7 text-neutral-400">Ceritakan kebutuhan bisnis Anda dan mari diskusikan solusi
                        yang paling sesuai.</p>
                </div>
                <a href="{{ url('/kontak') }}"
                    class="inline-flex w-fit items-center bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e85f00]">
                    Konsultasi Sekarang
                </a>
            </div>
        </div>
    </section>
@endsection