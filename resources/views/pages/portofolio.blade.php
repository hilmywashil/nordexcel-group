@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
        <div class="container-custom">
            <div class="max-w-3xl">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                    Portofolio
                </p>

                <h1 class="text-4xl font-bold leading-tight tracking-[-0.035em] text-neutral-950 sm:text-5xl lg:text-6xl">
                    Project yang telah kami kerjakan.
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                    Beberapa project website dan sistem digital yang kami bangun untuk membantu kebutuhan bisnis dan organisasi.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-24">
        <div class="container-custom">
            <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Featured Project
                    </p>

                    <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                        Project pilihan kami.
                    </h2>
                </div>
            </div>

            @if ($featuredPortfolio)
                <article class="mt-12 grid overflow-hidden border border-[#CACACA] bg-white lg:grid-cols-[1.2fr_.8fr]">
                    <div class="overflow-hidden bg-neutral-100">
                        @if ($featuredPortfolio->thumbnail)
                            <img
                                src="{{ asset('storage/' . $featuredPortfolio->thumbnail) }}"
                                alt="{{ $featuredPortfolio->title }}"
                                width="1200"
                                height="800"
                                loading="lazy"
                                class="h-full min-h-[360px] w-full object-cover">
                        @else
                            <div class="flex min-h-[360px] h-full w-full items-center justify-center bg-[#F5F5F5] text-sm text-neutral-400">
                                {{ $featuredPortfolio->title }}
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col justify-center p-7 sm:p-10 lg:p-12">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-[#FC6B01]">
                            {{ $featuredPortfolio->category }}
                        </p>

                        <h2 class="mt-4 text-2xl font-bold leading-tight tracking-[-0.025em] text-neutral-950 sm:text-3xl">
                            {{ $featuredPortfolio->title }}
                        </h2>

                        <p class="mt-5 text-sm leading-7 text-neutral-600">
                            {{ $featuredPortfolio->description }}
                        </p>

                        @if ($featuredPortfolio->client || $featuredPortfolio->year)
                            <div class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-xs text-neutral-500">
                                @if ($featuredPortfolio->client)
                                    <span>
                                        <span class="font-semibold text-neutral-800">Client:</span>
                                        {{ $featuredPortfolio->client }}
                                    </span>
                                @endif

                                @if ($featuredPortfolio->year)
                                    <span>
                                        <span class="font-semibold text-neutral-800">Tahun:</span>
                                        {{ $featuredPortfolio->year }}
                                    </span>
                                @endif
                            </div>
                        @endif

                        @if ($featuredPortfolio->technologies)
                            <div class="mt-7 flex flex-wrap gap-2">
                                @foreach (array_filter(array_map('trim', explode(',', $featuredPortfolio->technologies))) as $technology)
                                    <span class="border border-[#CACACA] px-3 py-1.5 text-xs font-medium text-neutral-600">
                                        {{ $technology }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        @if ($featuredPortfolio->project_url)
                            <a
                                href="{{ $featuredPortfolio->project_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-8 inline-flex w-fit items-center gap-2 text-sm font-semibold text-neutral-950 transition hover:text-[#FC6B01]">
                                Lihat Project
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        @endif
                    </div>
                </article>
            @else
                <div class="mt-12 border border-[#CACACA] bg-white p-10 text-center">
                    <p class="text-sm text-neutral-500">
                        Belum ada project unggulan.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-white py-24">
        <div class="container-custom">
            <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Our Work
                    </p>

                    <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                        Project lainnya.
                    </h2>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-neutral-600">
                        Berbagai jenis project yang kami kerjakan sesuai kebutuhan dan tujuan masing-masing klien.
                    </p>
                </div>
            </div>

            @if ($portfolios->count())
                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($portfolios as $portfolio)
                        <article class="group overflow-hidden border border-[#CACACA] bg-white">
                            <div class="overflow-hidden bg-[#F5F5F5]">
                                @if ($portfolio->thumbnail)
                                    <img
                                        loading="lazy"
                                        src="{{ asset('storage/' . $portfolio->thumbnail) }}"
                                        alt="{{ $portfolio->title }}"
                                        width="900"
                                        height="650"
                                        class="h-64 w-full object-cover transition duration-500 group-hover:scale-105">
                                @else
                                    <div class="flex h-64 w-full items-center justify-center bg-[#F5F5F5] text-sm text-neutral-400">
                                        {{ $portfolio->title }}
                                    </div>
                                @endif
                            </div>

                            <div class="p-6">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-[#FC6B01]">
                                    {{ $portfolio->category }}
                                </p>

                                <h3 class="mt-3 text-xl font-bold text-neutral-950">
                                    {{ $portfolio->title }}
                                </h3>

                                <p class="mt-3 text-sm leading-6 text-neutral-600">
                                    {{ $portfolio->description }}
                                </p>

                                @if ($portfolio->client || $portfolio->year)
                                    <div class="mt-5 flex flex-wrap gap-x-5 gap-y-1 text-xs text-neutral-500">
                                        @if ($portfolio->client)
                                            <span>
                                                {{ $portfolio->client }}
                                            </span>
                                        @endif

                                        @if ($portfolio->year)
                                            <span>
                                                {{ $portfolio->year }}
                                            </span>
                                        @endif
                                    </div>
                                @endif

                                @if ($portfolio->technologies)
                                    <div class="mt-5 flex flex-wrap gap-2">
                                        @foreach (array_filter(array_map('trim', explode(',', $portfolio->technologies))) as $technology)
                                            <span class="border border-[#CACACA] px-2.5 py-1 text-xs text-neutral-500">
                                                {{ $technology }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif

                                @if ($portfolio->project_url)
                                    <a
                                        href="{{ $portfolio->project_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-neutral-950 transition hover:text-[#FC6B01]">
                                        Lihat Project
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="mt-12 border border-[#CACACA] bg-white p-10 text-center">
                    <p class="text-sm text-neutral-500">
                        Belum ada project lainnya.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-20">
        <div class="container-custom">
            <div class="grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Punya Project?
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                        Mari buat project berikutnya bersama kami.
                    </h2>

                    <p class="mt-4 max-w-2xl text-sm leading-7 text-neutral-600">
                        Ceritakan kebutuhan bisnis Anda dan kami akan membantu menentukan solusi digital yang sesuai.
                    </p>
                </div>

                <a
                    href="{{ route('kontak') }}"
                    class="inline-flex w-fit items-center gap-2 bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e55f00]">
                    Diskusikan Project
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection