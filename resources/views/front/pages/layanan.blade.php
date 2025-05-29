@extends('front.layout.app')
@section('content')
    <!-- Start Home -->
    <section style="background-image: url('/FullSizeRender.jpg'); background-size: cover;"
        class="relative md:py-56 py-44 bg-cover jarallax" data-jarallax data-speed="0.5" id="aboutme">
        <div
            class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
        </div>

        <div class="absolute text-center p-6 bottom-0 start-0 end-0">
            <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Layanan</h3>
        </div>
    </section><!--end section-->
    <!-- End Home -->
    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 items-center gap-8">
                <div class="filters-group-wrap text-center">
                    <div class="filters-group">
                        <ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b-2 border-transparent text-slate-400 hover:text-indigo-600 hover:border-indigo-600 duration-300 active"
                                data-group="all">
                                Semua
                            </li>
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b-2 border-transparent text-slate-400 hover:text-indigo-600 hover:border-indigo-600 duration-300"
                                data-group="homestay">
                                Homestay
                            </li>
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b-2 border-transparent text-slate-400 hover:text-indigo-600 hover:border-indigo-600 duration-300"
                                data-group="paket-wisata">
                                Paket Wisata
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--grid-->

            <div id="grid" class="md:flex justify-center mx-auto mt-4">
                @foreach ($items as $item)
                    @php
                        $group = null;
                        if (isset($item->image)) {
                            $group = 'paket-wisata';
                        } elseif (isset($item->gambar)) {
                            $group = 'homestay';
                        }
                    @endphp
                    <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["{{ $group }}"]'>
                        @php
                            // Tentukan URL detail berdasarkan grup item
                            if (isset($item->image)) {
                                $group = 'paket-wisata';
                                $detailUrl = url('tour/' . $item->id);
                                $imgUrl = $item->image;
                            } elseif (isset($item->gambar)) {
                                $group = 'homestay';
                                $detailUrl = url('homestay/' . $item->id);
                                $imgs = $item->gambar;
                                if (is_string($imgs)) {
                                    $imgs = json_decode($imgs, true);
                                }
                                $imgUrl = is_array($imgs) && count($imgs) > 0 ? $imgs[0] : null;
                            } else {
                                $group = 'unknown';
                                $detailUrl = '#';
                                $imgUrl = null;
                            }
                        @endphp

                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            @if ($imgUrl)
                                <img src="{{ asset('storage/' . $imgUrl) }}"
                                    alt="{{ $item->title ?? ($item->nama ?? 'Image') }}" class="w-full" />
                            @else
                                <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image"
                                    class="w-full" />
                            @endif

                            <div class="mt-2 text-center font-semibold text-gray-800 dark:text-gray-200">
                                {{ $item->title ?? ($item->nama ?? 'No Title') }}
                            </div>

                            <div
                                class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                                <a href="{{ $detailUrl }}"
                                    class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">
                                    <i class="uil uil-eye"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
                {{-- <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p1.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p1.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p2.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p2.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p3.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p3.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p4.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p4.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p5.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p5.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p6.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p6.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p7.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p7.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p8.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p8.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p9.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p9.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p10.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p10.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["development"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p11.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p11.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["development"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p12.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p12.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p13.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p13.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p14.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p14.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p15.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p15.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p16.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p16.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p17.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p17.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="assets/images/photography/p18.jpg" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="assets/images/photography/p18.jpg"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!--end grid-->

            {{-- <div class="grid grid-cols-1 mt-8">
                <div class="text-center">
                    <a href="photography-portfolio.html"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">See
                        More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div> --}}
        </div><!--end container-->
    </section><!--end section-->
@endsection
