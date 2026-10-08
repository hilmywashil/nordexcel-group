@extends('layouts.app')

@section('title', $article->meta_title ?: $article->title)

@section('content')
    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-16">
        <div class="container-custom">
            <div class="mx-auto max-w-4xl">
                @if ($article->category)
                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        {{ $article->category->name }}
                    </p>
                @endif

                <h1
                    class="mt-5 text-4xl font-bold leading-tight tracking-[-0.035em] text-neutral-950 sm:text-5xl lg:text-6xl">
                    {{ $article->title }}
                </h1>

                <div class="mt-7 flex flex-wrap items-center gap-3 text-sm text-neutral-500">
                    @if ($article->author)
                        <span>{{ $article->author }}</span>
                    @endif

                    @if ($article->author && $article->published_at)
                        <span class="h-1 w-1 rounded-full bg-neutral-300"></span>
                    @endif

                    @if ($article->published_at)
                        <span>{{ $article->published_at->translatedFormat('d F Y') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="container-custom">
            <article class="mx-auto max-w-4xl">
                @if ($article->thumbnail)
                    <div class="overflow-hidden border border-[#CACACA] bg-[#F5F5F5]">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" width="1200"
                            height="700" class="h-auto max-h-[600px] w-full object-cover">
                    </div>
                @endif

                <div class="article-content mt-12">
                    {!! $article->content !!}
                </div>

                <div class="mt-14 border-t border-[#CACACA] pt-8">
                    <a href="{{ route('artikel') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-neutral-950 transition hover:text-[#FC6B01]">
                        <i class="bi bi-arrow-left"></i>
                        Kembali ke Artikel
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="bg-neutral-950 py-20 text-white">
        <div class="container-custom">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                        Butuh Website?
                    </p>

                    <h2 class="mt-4 text-3xl font-bold sm:text-4xl">
                        Mari mulai project digital Anda.
                    </h2>
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