@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
        <div class="container-custom">
            <div class="max-w-3xl">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                    Artikel
                </p>

                <h1 class="text-4xl font-bold leading-tight tracking-[-0.035em] text-neutral-950 sm:text-5xl lg:text-6xl">
                    Insight untuk bisnis digital.
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                    Informasi dan insight seputar website, teknologi, digital development, dan pengembangan bisnis.
                </p>
            </div>
        </div>
    </section>

    @if ($featuredArticle)
        <section class="bg-[#F5F5F5] py-24">
            <div class="container-custom">
                <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
                    <div>
                        <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                            Terbaru
                        </p>

                        <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                            Artikel terbaru
                        </h2>
                    </div>
                </div>

                <article class="mt-12 grid overflow-hidden border border-[#CACACA] bg-white lg:grid-cols-2">
                    <div class="overflow-hidden bg-[#F5F5F5]">
                        @if ($featuredArticle->thumbnail)
                            <img src="{{ asset('storage/' . $featuredArticle->thumbnail) }}" alt="{{ $featuredArticle->title }}"
                                width="1000" height="700" fetchpriority="high" class="h-full min-h-[320px] w-full object-cover">
                        @else
                            <div
                                class="flex min-h-[320px] h-full w-full items-center justify-center bg-[#F5F5F5] text-sm text-neutral-400">
                                NordExcel Group
                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col justify-center p-7 sm:p-10 lg:p-12">
                        @if ($featuredArticle->category)
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-[#FC6B01]">
                                {{ $featuredArticle->category->name }}
                            </p>
                        @endif

                        <h2 class="mt-4 text-2xl font-bold leading-tight tracking-[-0.025em] text-neutral-950 sm:text-3xl">
                            {{ $featuredArticle->title }}
                        </h2>

                        @if ($featuredArticle->excerpt)
                            <p class="mt-5 text-sm leading-7 text-neutral-600">
                                {{ $featuredArticle->excerpt }}
                            </p>
                        @endif

                        <div class="mt-7 flex flex-wrap items-center gap-3 text-xs text-neutral-500">
                            @if ($featuredArticle->author)
                                <span>{{ $featuredArticle->author }}</span>
                            @endif

                            @if ($featuredArticle->author && $featuredArticle->published_at)
                                <span class="h-1 w-1 rounded-full bg-neutral-300"></span>
                            @endif

                            @if ($featuredArticle->published_at)
                                <span>{{ $featuredArticle->published_at->translatedFormat('d F Y') }}</span>
                            @endif
                        </div>

                        <a href="{{ route('artikel.detail', $featuredArticle->slug) }}"
                            class="mt-8 inline-flex w-fit items-center gap-2 text-sm font-semibold text-neutral-950 transition hover:text-[#FC6B01]">
                            Baca Artikel
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>
        </section>
    @endif

    <section class="bg-white py-24">
        <div class="container-custom">
            <div>
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                    Artikel Lainnya
                </p>

                <h2 class="text-3xl font-bold tracking-[-0.025em] text-neutral-950 sm:text-4xl">
                    Jelajahi insight lainnya.
                </h2>
            </div>

            @if ($articles->count())
                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($articles as $article)
                        <article class="article-item flex h-full flex-col overflow-hidden border border-[#CACACA] bg-white">
                            <div class="overflow-hidden bg-[#F5F5F5]">
                                @if ($article->thumbnail)
                                    <img loading="lazy" width="800" height="500" src="{{ asset('storage/' . $article->thumbnail) }}"
                                        alt="{{ $article->title }}"
                                        class="h-56 w-full object-cover transition duration-500 hover:scale-105">
                                @else
                                    <div class="flex h-56 w-full items-center justify-center bg-[#F5F5F5] text-sm text-neutral-400">
                                        NordExcel Group
                                    </div>
                                @endif
                            </div>

                            <div class="flex flex-1 flex-col p-6">
                                @if ($article->category)
                                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-[#FC6B01]">
                                        {{ $article->category->name }}
                                    </p>
                                @endif

                                <h3 class="mt-3 text-lg font-bold leading-7 text-neutral-950">
                                    {{ $article->title }}
                                </h3>

                                @if ($article->excerpt)
                                    <p class="mt-3 text-sm leading-6 text-neutral-600">
                                        {{ $article->excerpt }}
                                    </p>
                                @endif

                                <div class="mt-5 text-xs text-neutral-500">
                                    {{ $article->published_at?->translatedFormat('d F Y') }}
                                </div>

                                <a href="{{ route('artikel.detail', $article->slug) }}"
                                    class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-neutral-950 transition hover:text-[#FC6B01]">
                                    Baca Artikel
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                @if ($articles->hasPages())
                    <div class="mt-12">
                        {{ $articles->links() }}
                    </div>
                @endif
            @else
                <div class="mt-12 border border-[#CACACA] bg-[#F5F5F5] p-10 text-center">
                    <p class="text-sm text-neutral-500">
                        Belum ada artikel lainnya.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-neutral-950 py-20 text-white">
        <div class="container-custom">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-2xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Butuh Website?
                    </p>

                    <h2 class="mt-4 text-3xl font-bold tracking-[-0.025em] sm:text-4xl">
                        Mari mulai project digital Anda.
                    </h2>

                    <p class="mt-4 leading-7 text-neutral-400">
                        Ceritakan kebutuhan bisnis Anda dan mari diskusikan solusi yang paling sesuai.
                    </p>
                </div>

                <a href="{{ route('kontak') }}"
                    class="inline-flex w-fit items-center gap-2 bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e55f00]">
                    Konsultasi Sekarang
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection