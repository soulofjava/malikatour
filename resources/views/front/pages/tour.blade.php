@extends('front.layout.app')

@push('after-script')
    <script src="//unpkg.com/alpinejs" defer></script>
@endpush

@section('content')
    <section class="relative md:pb-24 md:pt-40 pb-16 pt-36">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">
                        <div class="w-full h-[300px] overflow-hidden rounded-md">
                            <img src="{{ Str::startsWith($tour->image, 'http') ? $tour->image : asset('storage/' . $tour->image) }}"
                                alt="{{ $tour->title }}" class="w-full h-full object-cover rounded-md">
                        </div>

                        <div class="text-center mt-12">
                            <span
                                class="bg-indigo-600 inline-block text-white text-xs font-semibold px-2.5 py-0.5 rounded-full h-5">Tour
                                Wisata</span>
                            <h3 class="my-3 text-[26px] font-semibold">{{ $tour->title }}</h3>

                            <ul class="list-none mt-6">
                                <li class="inline-block font-semibold text-slate-400 mx-4">
                                    <span class="text-slate-900 dark:text-white block">Lokasi :</span>
                                    <span class="block">{{ $tour->location }}</span>
                                </li>
                                <li class="inline-block font-semibold text-slate-400 mx-4">
                                    <span class="text-slate-900 dark:text-white block">Harga :</span>
                                    <span class="block">Rp {{ number_format($tour->price, 0, ',', '.') }}</span>
                                </li>
                                <li class="inline-block font-semibold text-slate-400 mx-4">
                                    <span class="text-slate-900 dark:text-white block">Durasi :</span>
                                    <span class="block">{{ $tour->duration_days }} Hari</span>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-4 text-center">
                            <p>{{ $tour->keterangan }}</p>
                        </div>

                        @php
                            $site = \App\Models\SiteSetting::first();
                            $nomorAsli = $site && $site->kontak ? preg_replace('/[^0-9]/', '', $site->kontak) : null;

                            // Ubah 08xxx menjadi 628xxx
                            $nomorWa =
                                $nomorAsli && str_starts_with($nomorAsli, '0')
                                    ? '62' . substr($nomorAsli, 1)
                                    : $nomorAsli;

                            $pesan = urlencode(
                                "Halo, saya tertarik dengan paket tour *{$tour->title}*. Bisa kirim informasi lebih lanjut?",
                            );
                        @endphp

                        @if ($nomorWa)
                            <div class="mt-4 text-center">
                                <a href="https://api.whatsapp.com/send?phone={{ $nomorWa }}&text={{ $pesan }}"
                                    target="_blank"
                                    class="inline-block bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-md text-sm font-semibold shadow transition-all">
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
                            Tour Terbaru
                        </h5>

                        @foreach ($recentTours as $item)
                            <div class="flex items-center mt-6">
                                <img src="{{ Str::startsWith($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}"
                                    class="w-[97px] h-[64px] rounded-md object-cover shadow dark:shadow-gray-800"
                                    alt="{{ $item->title }}">

                                <div class="ms-3">
                                    <a href="{{ route('tour.detail', $item->id) }}"
                                        class="font-semibold hover:text-indigo-600">
                                        {{ $item->title }}
                                    </a>
                                    <p class="text-sm text-slate-400">
                                        {{ $item->created_at->translatedFormat('d F Y') }}
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
