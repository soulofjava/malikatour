@extends('front.layout.app')
@section('content')
    <!-- Start Home -->
    <section style="background-image: url('/FullSizeRender.jpg'); background-size: cover;"
        class="relative md:py-56 py-44 bg-cover jarallax" data-jarallax data-speed="0.5" id="aboutme">
        <div
            class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
        </div>

        <div class="absolute text-center p-6 bottom-0 start-0 end-0">
            <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Portfolio</h3>
        </div>
    </section><!--end section-->
    <!-- End Home -->
    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            {{-- <div class="grid grid-cols-1 items-center gap-[30px]">
                <div class="filters-group-wrap text-center">
                    <div class="filters-group">
                        <ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500 active"
                                data-group="all">All</li>
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500"
                                data-group="branding">Branding</li>
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500"
                                data-group="designing">Designing</li>
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500"
                                data-group="photography">Photography</li>
                            <li class="inline-block text-lg font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500"
                                data-group="development">Development</li>
                        </ul>
                    </div>
                </div>
            </div><!--grid--> --}}

            {{-- <div id="grid" class="md:flex justify-center mx-auto mt-4">
                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
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
                </div>
            </div> --}}
            <!--end grid-->
            <div id="grid" class="md:flex justify-center mx-auto mt-4">
                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('IMG_8808.jpg') }}" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('IMG_8808.jpg') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('2B471F7A-305D-4702-BB41-D256D965587D.JPEG') }}" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('2B471F7A-305D-4702-BB41-D256D965587D.JPEG') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('B9AC36F2-4F6A-4F6E-A669-7F2758CA2BB6.jpg') }}" class=""
                            alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('B9AC36F2-4F6A-4F6E-A669-7F2758CA2BB6.jpg') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('DSC_0112.JPEG') }}" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('DSC_0112.JPEG') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('0A11E4B1-38A1-491A-B6AB-94F592BA3974.JPEG') }}" class=""
                            alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('0A11E4B1-38A1-491A-B6AB-94F592BA3974.JPEG') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('Jeep Dieng.PNG') }}" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('Jeep Dieng.PNG') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["development"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('SiKunir.jpg') }}" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('SiKunir.jpg') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["development"]'>
                    <div class="group relative block overflow-hidden rounded-md duration-500">
                        <img src="{{ asset('IMG_8809.jpg') }}" class="" alt="work-image">
                        <div
                            class="absolute top-1/2 -translate-y-1/2 start-0 end-0 text-center opacity-0 group-hover:opacity-100 duration-500">
                            <a href="{{ asset('IMG_8809.jpg') }}"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>
            </div>

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
