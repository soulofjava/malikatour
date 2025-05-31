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
            <div id="grid" class="flex flex-wrap justify-center mx-auto mt-4 gap-2">
                @foreach ($portofolio as $item)
                    @foreach ($item->gambar ?? [] as $img)
                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                            <div class="group relative block overflow-hidden rounded-md duration-500">
                                <img src="{{ asset('storage/' . $img) }}" alt="foto portofolio" class="w-full h-auto">
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 duration-500 bg-black/40">
                                    <a href="{{ asset('storage/' . $img) }}"
                                        class="size-10 flex items-center justify-center rounded-full bg-indigo-600 hover:bg-indigo-700 text-white lightbox">
                                        <i class="uil uil-camera text-lg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
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
