@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
        <div class="container-custom">
            <div class="grid gap-12 lg:grid-cols-[1.1fr_.9fr] lg:items-end">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Tentang NordExcel</span>
                    <h1
                        class="mt-5 text-4xl font-bold leading-tight tracking-[-0.03em] text-neutral-950 sm:text-5xl lg:text-6xl">
                        Partner digital untuk membantu bisnis berkembang.
                    </h1>
                </div>
                <p class="max-w-xl text-base leading-8 text-neutral-600 sm:text-lg">
                    NordExcel Group hadir untuk membantu bisnis dan organisasi membangun solusi digital yang sesuai dengan
                    kebutuhan mereka.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-20">
        <div class="container-custom">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="aspect-[4/3] overflow-hidden bg-neutral-200">
                    <img src="{{ asset('assets/about-img.webp') }}" alt="NordExcel Group"
                        class="h-full w-full object-cover">
                </div>
                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Siapa Kami</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] text-neutral-950 sm:text-4xl">
                        Membangun digital presence yang punya tujuan.
                    </h2>
                    <div class="mt-6 space-y-4 text-sm leading-7 text-neutral-600">
                        <p>Website bukan hanya tentang tampilan. Website harus mampu menyampaikan informasi dengan jelas,
                            membangun kepercayaan, dan membantu bisnis mencapai tujuannya.</p>
                        <p>Karena itu, setiap project kami mulai dari memahami kebutuhan terlebih dahulu sebelum masuk ke
                            tahap perancangan dan development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container-custom">
            <div class="max-w-2xl">
                <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Prinsip Kami</span>
                <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] text-neutral-950 sm:text-4xl">
                    Cara kami mengerjakan setiap project.
                </h2>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-3">
                <div class="border border-[#CACACA] p-7">
                    <span class="text-3xl font-bold text-[#FC6B01]">01</span>
                    <h3 class="mt-6 text-xl font-bold text-neutral-950">Memahami</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">Kami memahami kebutuhan dan tujuan sebelum menentukan
                        solusi.</p>
                </div>
                <div class="border border-[#CACACA] p-7">
                    <span class="text-3xl font-bold text-[#FC6B01]">02</span>
                    <h3 class="mt-6 text-xl font-bold text-neutral-950">Membangun</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">Kami membangun solusi yang fokus pada fungsi,
                        struktur, dan pengalaman pengguna.</p>
                </div>
                <div class="border border-[#CACACA] p-7">
                    <span class="text-3xl font-bold text-[#FC6B01]">03</span>
                    <h3 class="mt-6 text-xl font-bold text-neutral-950">Berkembang</h3>
                    <p class="mt-3 text-sm leading-7 text-neutral-600">Website dapat terus dikembangkan mengikuti kebutuhan
                        bisnis yang berubah.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-neutral-950 py-20 text-white">
        <div class="container-custom">
            <div class="max-w-3xl">
                <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Let's Work Together</span>
                <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] sm:text-4xl">Mari bangun sesuatu yang berguna untuk
                    bisnis Anda.</h2>
                <a href="{{ url('/kontak') }}"
                    class="mt-8 inline-flex bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e85f00]">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection