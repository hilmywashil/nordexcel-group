@extends('layouts.app')

@section('title', 'Klien')

@section('content')
    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
        <div class="container-custom">
            <div class="max-w-3xl">
                <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Our Clients</span>
                <h1
                    class="mt-5 text-4xl font-bold leading-tight tracking-[-0.03em] text-neutral-950 sm:text-5xl lg:text-6xl">
                    Dipercaya untuk membangun kebutuhan digital.
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                    Kami bekerja bersama berbagai bisnis dan organisasi untuk membangun website dan solusi digital yang
                    sesuai dengan kebutuhan mereka.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-20">
        <div class="container-custom">
            @if ($clients->count())
                <div class="grid grid-cols-2 border-l border-t border-[#CACACA] sm:grid-cols-3 lg:grid-cols-4">
                    @foreach ($clients as $client)
                        <div class="flex h-32 items-center justify-center border-b border-r border-[#CACACA] bg-white p-8">
                            @if ($client->logo)
                                <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" width="220" height="80"
                                    loading="lazy" class="max-h-12 w-auto object-contain">
                            @else
                                <span class="text-center text-sm font-semibold text-neutral-500">
                                    {{ $client->name }}
                                </span>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="border border-[#CACACA] bg-white p-12 text-center">
                    <p class="text-sm text-neutral-500">
                        Belum ada client yang ditampilkan.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container-custom">
            <div class="grid gap-8 lg:grid-cols-3">
                <div>
                    <span class="text-4xl font-bold text-[#FC6B01]">01</span>
                    <h3 class="mt-5 text-xl font-bold text-neutral-950">Memahami kebutuhan</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Setiap bisnis memiliki kebutuhan yang berbeda.
                    </p>
                </div>

                <div>
                    <span class="text-4xl font-bold text-[#FC6B01]">02</span>
                    <h3 class="mt-5 text-xl font-bold text-neutral-950">Solusi yang relevan</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Kami menyesuaikan solusi dengan tujuan dan kebutuhan project.
                    </p>
                </div>

                <div>
                    <span class="text-4xl font-bold text-[#FC6B01]">03</span>
                    <h3 class="mt-5 text-xl font-bold text-neutral-950">Hubungan jangka panjang</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">
                        Website dapat terus dirawat dan dikembangkan setelah project selesai.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-neutral-950 py-20 text-white">
        <div class="container-custom">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">
                        Partner Berikutnya
                    </span>

                    <h2 class="mt-4 text-3xl font-bold sm:text-4xl">
                        Mungkin bisnis Anda berikutnya.
                    </h2>
                </div>

                <a href="{{ route('kontak') }}"
                    class="inline-flex w-fit bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e85f00]">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection