@extends('layouts.app')

@section('title', 'Testimonial')

@section('content')
<section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
    <div class="container-custom">
        <div class="max-w-3xl">
            <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">
                Testimonial
            </span>

            <h1 class="mt-5 text-4xl font-bold leading-tight tracking-[-0.03em] text-neutral-950 sm:text-5xl lg:text-6xl">
                Cerita dari mereka yang bekerja bersama kami.
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                Kepercayaan klien menjadi bagian penting dari setiap project yang kami kerjakan.
            </p>
        </div>
    </div>
</section>

<section class="bg-[#F5F5F5] py-20">
    <div class="container-custom">
        @if ($testimonials->count())
            <div class="grid gap-5 md:grid-cols-2">
                @foreach ($testimonials as $testimonial)
                    <article class="border border-[#CACACA] bg-white p-8 md:p-10">
                        <div class="flex gap-1 text-[#FC6B01]" aria-label="Rating {{ $testimonial->rating }} dari 5">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="bi {{ $i <= $testimonial->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                            @endfor
                        </div>

                        <p class="mt-7 text-lg font-medium leading-8 text-neutral-800">
                            “{{ $testimonial->content }}”
                        </p>

                        <div class="mt-8 flex items-center gap-4 border-t border-[#CACACA] pt-6">
                            @if ($testimonial->photo)
                                <img
                                    src="{{ asset('storage/' . $testimonial->photo) }}"
                                    alt="{{ $testimonial->name }}"
                                    width="52"
                                    height="52"
                                    loading="lazy"
                                    class="h-13 w-13 rounded-full object-cover">
                            @else
                                <div class="flex h-13 w-13 shrink-0 items-center justify-center rounded-full bg-[#F5F5F5] text-lg font-bold text-[#FC6B01]">
                                    {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                                </div>
                            @endif

                            <div>
                                <p class="font-bold text-neutral-950">
                                    {{ $testimonial->name }}
                                </p>

                                @if ($testimonial->company || $testimonial->position)
                                    <p class="mt-1 text-sm text-neutral-500">
                                        {{ $testimonial->company }}

                                        @if ($testimonial->company && $testimonial->position)
                                            /
                                        @endif

                                        {{ $testimonial->position }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="border border-[#CACACA] bg-white p-12 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center bg-[#F5F5F5] text-xl text-neutral-400">
                    <i class="bi bi-chat-quote"></i>
                </div>

                <h2 class="mt-5 text-lg font-bold text-neutral-950">
                    Belum ada testimonial
                </h2>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-neutral-500">
                    Testimonial dari client yang telah dipublikasikan akan ditampilkan di halaman ini.
                </p>
            </div>
        @endif
    </div>
</section>

<section class="bg-white py-20">
    <div class="container-custom text-center">
        <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">
            Project Anda Berikutnya
        </span>

        <h2 class="mx-auto mt-4 max-w-2xl text-3xl font-bold tracking-[-0.03em] text-neutral-950 sm:text-4xl">
            Siap membuat project bersama kami?
        </h2>

        <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-neutral-600">
            Ceritakan kebutuhan website atau sistem digital Anda dan mari diskusikan solusi yang sesuai.
        </p>

        <a
            href="{{ route('kontak') }}"
            class="mt-8 inline-flex items-center gap-2 bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e85f00]">
            Mulai Diskusi
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>
@endsection