@extends('front.layout.app')
@push('after-script')
    <script src="//unpkg.com/alpinejs" defer></script>
@endpush
@section('content')
    <!-- Start Section-->
    <section class="relative md:pb-24 md:pt-40 pb-16 pt-36">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    @php
                        $gambar = is_array($homestay->gambar)
                            ? $homestay->gambar
                            : json_decode($homestay->gambar, true);
                    @endphp

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800" x-data="{ current: 1, total: {{ count($gambar) }} }">

                        {{-- Carousel Gambar --}}
                        <div class="relative w-full h-[300px] rounded-md overflow-hidden">
                            @foreach ($gambar as $index => $img)
                                <div x-show="current === {{ $index + 1 }}"
                                    class="w-full h-full absolute inset-0 transition-all duration-500">
                                    <img src="{{ Str::startsWith($img, 'http') ? $img : asset('storage/' . $img) }}"
                                        alt="Foto Homestay" class="w-full h-full object-cover rounded-md">
                                </div>
                            @endforeach

                            {{-- Tombol navigasi --}}
                            <button @click="current = current === 1 ? total : current - 1"
                                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-black/40 text-white p-2 rounded-r-md">
                                ‹
                            </button>
                            <button @click="current = current === total ? 1 : current + 1"
                                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-black/40 text-white p-2 rounded-l-md">
                                ›
                            </button>
                        </div>

                        {{-- Indikator --}}
                        <div class="flex justify-center space-x-1 mt-4">
                            @foreach ($gambar as $index => $img)
                                <button @click="current = {{ $index + 1 }}" class="w-3 h-3 rounded-full"
                                    :class="current === {{ $index + 1 }} ? 'bg-indigo-600' : 'bg-gray-300'"></button>
                            @endforeach
                        </div>

                        {{-- Konten lainnya --}}
                        <div class="text-center mt-12">
                            <span
                                class="bg-indigo-600 inline-block text-white text-xs font-semibold px-2.5 py-0.5 rounded-full h-5">Homestay</span>
                            <h3 class="my-3 text-[26px] font-semibold">{{ $homestay->nama }}</h3>

                            <ul class="list-none mt-6">
                                <li class="inline-block font-semibold text-slate-400 mx-4">
                                    <span class="text-slate-900 dark:text-white block">Harga :</span>
                                    <span class="block">Rp {{ number_format($homestay->harga_sewa, 0, ',', '.') }} /
                                        malam</span>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-6">
                            <p class="text-slate-400">
                                {{ $homestay->deskripsi }}
                            </p>
                            @php
                                $lat = $homestay->latitude;
                                $lng = $homestay->longitude;
                            @endphp

                            @if ($lat && $lng)
                                <div class="mt-3 text-center">
                                    <a href="https://www.google.com/maps?q={{ $lat }},{{ $lng }}"
                                        target="_blank"
                                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md text-sm font-semibold shadow transition-all">
                                        📍 Lihat Lokasi di Google Maps
                                    </a>
                                </div>
                            @endif

                            @php
                                $site = \App\Models\SiteSetting::first();
                                $nomorAsli =
                                    $site && $site->kontak ? preg_replace('/[^0-9]/', '', $site->kontak) : null;

                                // Ubah 08xxx menjadi 628xxx
                                $nomorWa =
                                    $nomorAsli && str_starts_with($nomorAsli, '0')
                                        ? '62' . substr($nomorAsli, 1)
                                        : $nomorAsli;

                                $pesan = urlencode(
                                    "Halo, saya tertarik dengan *{$homestay->nama}*. Bisa kirim informasi lebih lanjut?",
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

                    {{-- <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Comments:</h5>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/01.jpg" class="size-11 rounded-full shadow"
                                        alt="">

                                    <div class="ms-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected humour "
                                </p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/02.jpg" class="size-11 rounded-full shadow"
                                        alt="">

                                    <div class="ms-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected humour "
                                </p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/03.jpg" class="size-11 rounded-full shadow"
                                        alt="">

                                    <div class="ms-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected humour "
                                </p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="assets/images/client/04.jpg" class="size-11 rounded-full shadow"
                                        alt="">

                                    <div class="ms-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 duration-500">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href="" class="text-slate-400 hover:text-indigo-600 duration-500 ms-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected humour "
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                        <form class="mt-8">
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="name" id="name" type="text"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input name="email" id="email" type="email"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                            <textarea name="comments" id="comments"
                                                class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send
                                Message</button>
                        </form>
                    </div> --}}
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div class="sticky top-20">
                        {{-- <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
                            Author</h5>
                        <div class="text-center mt-8">
                            <img src="assets/images/client/05.jpg" class="size-24 mx-auto rounded-full shadow mb-4"
                                alt="">

                            <a href="" class="text-lg font-semibold hover:text-indigo-600 duration-500">Cristina
                                Romsey</a>
                            <p class="text-slate-400">Content Writer</p>
                        </div> --}}

                        @php
                            $recentHomestays = \App\Models\Homestay::latest()->take(3)->get();
                        @endphp

                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Homestay Terbaru
                        </h5>

                        @foreach ($recentHomestays as $homestay)
                            @php
                                $gambar = is_array($homestay->gambar)
                                    ? $homestay->gambar
                                    : json_decode($homestay->gambar, true);
                                $gambarPertama = $gambar[0] ?? 'assets/images/no-image.jpg';
                            @endphp

                            <div class="flex items-center mt-6">
                                <img src="{{ asset(is_string($gambarPertama) && str_starts_with($gambarPertama, 'http') ? $gambarPertama : 'storage/' . $gambarPertama) }}"
                                    class="w-[97px] h-[64px] rounded-md object-cover shadow dark:shadow-gray-800"
                                    alt="{{ $homestay->nama }}">

                                <div class="ms-3">
                                    <a href="{{ route('homestay.detail', $homestay->id) }}"
                                        class="font-semibold hover:text-indigo-600">
                                        {{ $homestay->nama }}
                                    </a>
                                    <p class="text-sm text-slate-400">
                                        {{ $homestay->created_at->translatedFormat('d F Y') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach


                        {{-- <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Social sites</h5>
                        <ul class="list-none text-center mt-8">
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="facebook" class="size-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="instagram" class="size-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="twitter" class="size-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="linkedin" class="size-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="github" class="size-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="youtube" class="size-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="gitlab" class="size-4"></i></a></li>
                        </ul> --}}

                        {{-- <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Tagscloud</h5>
                        <ul class="list-none text-center mt-8">
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Business</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Finance</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Marketing</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Fashion</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Bride</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Lifestyle</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Travel</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Beauty</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Video</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 duration-500">Audio</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->

        {{-- <div class="container relative md:mt-24 mt-16">
            <div class="md:flex justify-center">
                <div class="lg:w-2/3 text-center">
                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold mb-6">Subscribe our
                        weekly subscription</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Add some text to explain benefits of subscripton on your
                        services. We'll send you the best of our blog just once a weekly.</p>

                    <div class="mt-8">
                        <div class="text-center subcribe-form">
                            <form class="relative mx-auto max-w-xl">
                                <input type="email" id="subemail" name="name"
                                    class="py-4 pe-40 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-gray-100 dark:border-gray-700"
                                    placeholder="Enter your email id..">
                                <button type="submit"
                                    class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subcribe
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section><!--end section-->
    <!-- End -->
@endsection
