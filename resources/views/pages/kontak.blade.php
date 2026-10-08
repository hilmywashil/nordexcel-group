@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    @php
        $whatsapp = preg_replace('/[^0-9]/', '', $contact?->whatsapp ?? '');
    @endphp

    <section class="border-b border-[#CACACA] bg-white pt-[136px] pb-20">
        <div class="container-custom">
            <div class="max-w-3xl">
                <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Kontak</span>
                <h1
                    class="mt-5 text-4xl font-bold leading-tight tracking-[-0.03em] text-neutral-950 sm:text-5xl lg:text-6xl">
                    Mari bicarakan kebutuhan website Anda.
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-neutral-600 sm:text-lg">
                    Ceritakan project yang ingin Anda bangun. Kami akan membantu memahami kebutuhan dan menentukan langkah
                    berikutnya.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F5F5] py-20">
        <div class="container-custom">
            <div class="grid gap-12 lg:grid-cols-[.75fr_1.25fr]">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Let's Talk</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-[-0.03em] text-neutral-950 sm:text-4xl">
                        Mulai dengan sebuah percakapan.
                    </h2>
                    <p class="mt-5 text-sm leading-7 text-neutral-600">
                        Tidak perlu langsung memiliki brief yang lengkap. Sampaikan saja kebutuhan atau ide Anda.
                    </p>

                    <div class="mt-10 space-y-5">
                        @if ($contact?->email)
                            <a href="mailto:{{ $contact->email }}"
                                class="flex items-start gap-4 border border-[#CACACA] bg-white p-5 transition hover:border-[#FC6B01]">
                                <span
                                    class="flex h-11 w-11 shrink-0 items-center justify-center bg-[#FC6B01] text-lg text-white">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <span>
                                    <span class="block text-sm font-semibold text-neutral-500">Email</span>
                                    <span class="mt-1 block font-semibold text-neutral-950">{{ $contact->email }}</span>
                                </span>
                            </a>
                        @endif

                        @if ($contact?->whatsapp)
                            <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener noreferrer"
                                class="flex items-start gap-4 border border-[#CACACA] bg-white p-5 transition hover:border-[#FC6B01]">
                                <span
                                    class="flex h-11 w-11 shrink-0 items-center justify-center bg-[#FC6B01] text-lg text-white">
                                    <i class="bi bi-whatsapp"></i>
                                </span>
                                <span>
                                    <span class="block text-sm font-semibold text-neutral-500">WhatsApp</span>
                                    <span class="mt-1 block font-semibold text-neutral-950">{{ $contact->whatsapp }}</span>
                                </span>
                            </a>
                        @endif

                        @if ($contact?->location)
                            <div class="flex items-start gap-4 border border-[#CACACA] bg-white p-5">
                                <span
                                    class="flex h-11 w-11 shrink-0 items-center justify-center bg-[#FC6B01] text-lg text-white">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                <span>
                                    <span class="block text-sm font-semibold text-neutral-500">Lokasi</span>
                                    <span class="mt-1 block font-semibold text-neutral-950">{{ $contact->location }}</span>
                                </span>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="border border-[#CACACA] bg-white p-7 sm:p-9">
                    @if (session('success'))
                        <div class="mb-6 border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            <p class="font-semibold">Mohon periksa kembali data Anda.</p>
                            <ul class="mt-2 list-disc space-y-1 pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('kontak.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="mb-2 block text-sm font-semibold text-neutral-950">Nama</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Nama Anda"
                                    required
                                    class="w-full border border-[#CACACA] bg-white px-4 py-3 text-sm text-neutral-950 outline-none transition placeholder:text-neutral-400 focus:border-[#FC6B01]">
                            </div>

                            <div>
                                <label for="email" class="mb-2 block text-sm font-semibold text-neutral-950">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="email@anda.com" required
                                    class="w-full border border-[#CACACA] bg-white px-4 py-3 text-sm text-neutral-950 outline-none transition placeholder:text-neutral-400 focus:border-[#FC6B01]">
                            </div>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="company"
                                    class="mb-2 block text-sm font-semibold text-neutral-950">Perusahaan</label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}"
                                    placeholder="Nama perusahaan atau bisnis"
                                    class="w-full border border-[#CACACA] bg-white px-4 py-3 text-sm text-neutral-950 outline-none transition placeholder:text-neutral-400 focus:border-[#FC6B01]">
                            </div>

                            <div>
                                <label for="phone" class="mb-2 block text-sm font-semibold text-neutral-950">No. Telepon /
                                    WhatsApp</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    placeholder="08xxxxxxxxxx"
                                    class="w-full border border-[#CACACA] bg-white px-4 py-3 text-sm text-neutral-950 outline-none transition placeholder:text-neutral-400 focus:border-[#FC6B01]">
                            </div>
                        </div>

                        <div>
                            <label for="service" class="mb-2 block text-sm font-semibold text-neutral-950">Kebutuhan</label>
                            <select id="service" name="service"
                                class="w-full border border-[#CACACA] bg-white px-4 py-3 text-sm text-neutral-950 outline-none transition focus:border-[#FC6B01]">
                                <option value="">Pilih layanan</option>
                                <option value="Website Company Profile" @selected(old('service') === 'Website Company Profile')>Website Company Profile</option>
                                <option value="Toko Online" @selected(old('service') === 'Toko Online')>Toko Online</option>
                                <option value="Landing Page" @selected(old('service') === 'Landing Page')>Landing Page
                                </option>
                                <option value="Sistem Admin" @selected(old('service') === 'Sistem Admin')>Sistem Admin
                                </option>
                                <option value="Web Application" @selected(old('service') === 'Web Application')>Web
                                    Application</option>
                                <option value="Website Maintenance" @selected(old('service') === 'Website Maintenance')>
                                    Website Maintenance</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="mb-2 block text-sm font-semibold text-neutral-950">Ceritakan Project
                                Anda</label>
                            <textarea id="message" name="message" rows="6"
                                placeholder="Ceritakan kebutuhan, fitur, atau gambaran project Anda..." required
                                class="w-full resize-none border border-[#CACACA] bg-white px-4 py-3 text-sm text-neutral-950 outline-none transition placeholder:text-neutral-400 focus:border-[#FC6B01]">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#FC6B01] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#e85f00]">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container-custom">
            <div class="border border-[#CACACA] bg-[#F5F5F5] p-8 sm:p-10">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <span class="text-sm font-semibold uppercase tracking-[0.16em] text-[#FC6B01]">Butuh Jawaban
                            Cepat?</span>
                        <h2 class="mt-3 text-2xl font-bold text-neutral-950">
                            Hubungi kami langsung melalui WhatsApp.
                        </h2>
                    </div>

                    @if ($contact?->whatsapp)
                        <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex w-fit bg-neutral-950 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-neutral-800">
                            Chat WhatsApp
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection