@extends('layouts.app')

@section('title', $article->meta_title ?: $article->title)

@section('content')
<style>
    .article-content {
        max-width: 820px;
        margin-inline: auto;
        color: #404040;
        font-size: 1.0625rem;
        line-height: 1.9;
    }

    .article-content > *:first-child {
        margin-top: 0;
    }

    .article-content p {
        margin-top: 1.35rem;
        margin-bottom: 0;
    }

    .article-content h2 {
        margin-top: 3rem;
        margin-bottom: 1rem;
        color: #171717;
        font-size: 1.8rem;
        font-weight: 750;
        line-height: 1.3;
        letter-spacing: -0.025em;
    }

    .article-content h3 {
        margin-top: 2.5rem;
        margin-bottom: .9rem;
        color: #171717;
        font-size: 1.45rem;
        font-weight: 700;
        line-height: 1.4;
        letter-spacing: -0.02em;
    }

    .article-content h4 {
        margin-top: 2rem;
        margin-bottom: .75rem;
        color: #171717;
        font-size: 1.2rem;
        font-weight: 700;
        line-height: 1.5;
    }

    .article-content strong {
        color: #171717;
        font-weight: 700;
    }

    .article-content em {
        color: #525252;
    }

    .article-content a {
        color: #FC6B01;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-thickness: 1px;
        text-underline-offset: 3px;
        transition: color .2s ease;
    }

    .article-content a:hover {
        color: #e55f00;
    }

    .article-content ul,
    .article-content ol {
        margin-top: 1.35rem;
        margin-bottom: 1.35rem;
        padding-left: 1.5rem;
    }

    .article-content ul {
        list-style-type: disc;
    }

    .article-content ol {
        list-style-type: decimal;
    }

    .article-content li {
        margin-top: .55rem;
        padding-left: .3rem;
    }

    .article-content li::marker {
        color: #FC6B01;
    }

    .article-content blockquote {
        margin: 2.25rem 0;
        border-left: 3px solid #FC6B01;
        background: #F5F5F5;
        padding: 1.25rem 1.5rem;
        color: #525252;
        font-size: 1.05rem;
        font-style: italic;
        line-height: 1.8;
    }

    .article-content blockquote p {
        margin-top: 0;
    }

    .article-content img {
        display: block;
        width: 100%;
        height: auto;
        margin: 2.25rem auto;
    }

    .article-content figure {
        margin: 2.5rem 0;
    }

    .article-content figcaption {
        margin-top: .75rem;
        color: #737373;
        font-size: .875rem;
        line-height: 1.6;
        text-align: center;
    }

    .article-content hr {
        margin: 3rem 0;
        border: 0;
        border-top: 1px solid #CACACA;
    }

    .article-content code {
        border: 1px solid #E5E5E5;
        background: #F5F5F5;
        padding: .15rem .4rem;
        color: #171717;
        font-size: .9em;
        border-radius: .25rem;
    }

    .article-content pre {
        overflow-x: auto;
        margin: 2rem 0;
        border: 1px solid #CACACA;
        background: #171717;
        padding: 1.25rem 1.5rem;
        color: #F5F5F5;
        font-size: .9rem;
        line-height: 1.7;
    }

    .article-content pre code {
        border: 0;
        background: transparent;
        padding: 0;
        color: inherit;
        font-size: inherit;
    }

    .article-content table {
        width: 100%;
        margin: 2rem 0;
        border-collapse: collapse;
        font-size: .95rem;
    }

    .article-content th,
    .article-content td {
        border: 1px solid #CACACA;
        padding: .75rem 1rem;
        text-align: left;
    }

    .article-content th {
        background: #F5F5F5;
        color: #171717;
        font-weight: 700;
    }

    .article-content td {
        background: #FFFFFF;
    }

    @media (max-width: 640px) {
        .article-content {
            font-size: 1rem;
            line-height: 1.85;
        }

        .article-content h2 {
            margin-top: 2.5rem;
            font-size: 1.5rem;
        }

        .article-content h3 {
            margin-top: 2rem;
            font-size: 1.25rem;
        }

        .article-content h4 {
            font-size: 1.1rem;
        }

        .article-content blockquote {
            padding: 1rem 1.15rem;
            font-size: 1rem;
        }

        .article-content table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    }
</style>

<section class="border-b border-[#CACACA] bg-white pt-[136px] pb-16">
    <div class="container-custom">
        <div class="mx-auto max-w-4xl">
            @if ($article->category)
                <p class="text-sm font-semibold uppercase tracking-[0.15em] text-[#FC6B01]">
                    {{ $article->category->name }}
                </p>
            @endif

            <h1 class="mt-5 text-4xl font-bold leading-[1.12] tracking-[-0.035em] text-neutral-950 sm:text-5xl lg:text-6xl">
                {{ $article->title }}
            </h1>

            <div class="mt-7 flex flex-wrap items-center gap-x-3 gap-y-2 text-sm text-neutral-500">
                @if ($article->author)
                    <span class="font-medium text-neutral-700">
                        {{ $article->author }}
                    </span>
                @endif

                @if ($article->author && $article->published_at)
                    <span class="h-1 w-1 rounded-full bg-neutral-300"></span>
                @endif

                @if ($article->published_at)
                    <span>
                        {{ $article->published_at->translatedFormat('d F Y') }}
                    </span>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16 sm:py-20">
    <div class="container-custom">
        <article class="mx-auto max-w-5xl">
            @if ($article->thumbnail)
                <div class="overflow-hidden border border-[#CACACA] bg-[#F5F5F5]">
                    <img
                        src="{{ asset('storage/' . $article->thumbnail) }}"
                        alt="{{ $article->title }}"
                        width="1200"
                        height="700"
                        class="h-auto max-h-[620px] w-full object-cover">
                </div>
            @endif

            @if ($article->excerpt)
                <div class="mx-auto mt-12 max-w-3xl border-l-2 border-[#FC6B01] pl-5 text-lg font-medium leading-8 text-neutral-700 sm:text-xl">
                    {{ $article->excerpt }}
                </div>
            @endif

            <div class="article-content mt-12">
                {!! $article->content !!}
            </div>

            <div class="mx-auto mt-16 max-w-3xl border-t border-[#CACACA] pt-8">
                <a
                    href="{{ route('artikel') }}"
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

                <h2 class="mt-4 max-w-2xl text-3xl font-bold leading-tight sm:text-4xl">
                    Mari mulai project digital Anda.
                </h2>
            </div>

            <a
                href="{{ route('kontak') }}"
                class="inline-flex w-fit items-center gap-2 bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e55f00]">
                Konsultasi Sekarang
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
@endsection