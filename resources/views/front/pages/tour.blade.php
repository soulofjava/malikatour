@extends('front.layout.app')

@push('after-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
@endpush
@push('after-script')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                pagination: true,
                arrows: true,
            }).mount();
        });
    </script>
@endpush
@section('content')
    <section class="relative md:pb-24 md:pt-40 pb-16 pt-36">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 space-y-8">

                        {{-- Slider gambar --}}
                        @php
                            $images = is_array($tour->image) ? $tour->image : [];
                        @endphp

                        @if (count($images))
                            <div class="splide w-full h-[300px] rounded-md overflow-hidden">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($images ?? [] as $img)
                                            <li class="splide__slide">
                                                <img src="{{ asset('storage/' . $img) }}"
                                                    alt="Gambar {{ $loop->iteration }}"
                                                    class="w-full h-[300px] object-cover rounded-md">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        {{-- Judul dan info utama --}}
                        <div class="text-center space-y-4">
                            <span class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">
                                Tour Wisata
                            </span>
                            <h3 class="text-[26px] font-semibold">{{ $tour->title }}</h3>

                            <ul
                                class="flex flex-wrap justify-center gap-6 text-sm text-slate-700 dark:text-slate-300 font-medium">
                                <li>
                                    <span class="block text-slate-400">Lokasi</span>
                                    <span>{{ $tour->location }}</span>
                                </li>
                                <li>
                                    <span class="block text-slate-400">Harga</span>
                                    <span>Rp {{ number_format($tour->price, 0, ',', '.') }}</span>
                                </li>
                                <li>
                                    <span class="block text-slate-400">Durasi</span>
                                    <span>{{ $tour->duration_days }} Hari</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="prose max-w-none text-justify dark:text-slate-200">
                            {!! $tour->keterangan !!}
                        </div>

                        {{-- Tombol WhatsApp --}}
                        @php
                            $site = \App\Models\SiteSetting::first();
                            $nomorAsli = $site?->whatsapp ? preg_replace('/[^0-9]/', '', $site->whatsapp) : null;
                            $nomorWa =
                                $nomorAsli && str_starts_with($nomorAsli, '0')
                                    ? '62' . substr($nomorAsli, 1)
                                    : $nomorAsli;
                            $pesan = urlencode(
                                "Halo, saya tertarik dengan paket tour *{$tour->title}*. Bisa kirim informasi lebih lanjut?",
                            );
                        @endphp

                        @if ($nomorWa)
                            <div class="text-center">
                                <a href="https://api.whatsapp.com/send?phone={{ $nomorWa }}&text={{ $pesan }}"
                                    target="_blank"
                                    class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-dark dark:text-white px-6 py-3 rounded-md text-base font-semibold shadow-lg transition-all duration-300 transform hover:scale-105">
                                    <i class="uil uil-whatsapp text-xl"></i>
                                    Berminat? Hubungi Kami via WhatsApp
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div class="sticky top-20">
                        @php
                            $recentTours = \App\Models\Tour::latest()->take(3)->get();
                        @endphp

                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Paket Lainnya
                        </h5>

                        @foreach ($recentTours as $item)
                            <div class="flex items-center mt-6">
                                @php
                                    $img = is_array($item->image) ? $item->image[0] ?? null : $item->image;
                                @endphp

                                <img src="{{ $img ? asset('storage/' . $img) : asset('Logo-removebg-preview.png') }}"
                                    alt="{{ $item->title }}" style="width:97px; height:64px;"
                                    class="rounded-md object-cover shadow dark:shadow-gray-800 flex-shrink-0" />


                                <div class="ms-3">
                                    <a href="{{ route('tour.detail', $item->id) }}"
                                        class="font-semibold hover:text-indigo-600">
                                        {{ $item->title }}
                                    </a>
                                    <p class="text-sm text-slate-400">
                                        Mulai dari Rp {{ number_format($tour->price, 0, ',', '.') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
