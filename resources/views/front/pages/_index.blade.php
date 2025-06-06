@extends('front.layout.app')
@section('content')
    <!-- Start Hero -->
    <section class="relative table w-full py-36 lg:py-64">
        <div class="absolute inset-0" id="overlay"></div>
        <div
            class="absolute inset-0 ltr:md:bg-gradient-to-l rtl:md:bg-gradient-to-r md:from-transparent md:via-indigo-600/80 md:to-indigo-800">
        </div>
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="md:text-start text-center mt-10">
                    <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">
                        Buat Liburan Anda <br> Tak Terlupakan
                    </h1>

                    <p class="text-white/70 text-xl max-w-xl">
                        Temukan homestay nyaman dan paket wisata terbaik untuk menjelajahi destinasi impian Anda. Mudah,
                        terjangkau, dan penuh pengalaman berkesan.
                    </p>

                    {{-- <a href="">
                        <i
                            class="mdi mdi-arrow-down text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 size-12 mx-auto shadow-md dark:shadow-gray-800 mt-6"></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    {{-- <section class="relative">
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative -mt-28">
                    <div class="p-6 bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800">
                        <div class="section-title">
                            <h4 class="text-2xl font-semibold mb-3">Search your trip</h4>
                            <p class="text-slate-400 mx-auto para-desc">We make it a priority to offer flexible services to
                                accomodate your needs</p>
                        </div>

                        <form class="mt-4" action="#">
                            <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-4">
                                <div>
                                    <label class="font-semibold">Check in :</label>
                                    <input name="date" type="text"
                                        class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 start"
                                        placeholder="Select date :">
                                </div>

                                <div>
                                    <label class="font-semibold">Check out :</label>
                                    <input name="date1" type="text"
                                        class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 end"
                                        placeholder="Select date :">
                                </div>

                                <div>
                                    <label class="font-semibold">Adults :</label>
                                    <input type="number" min="0" autocomplete="off" id="adult"
                                        class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                        required="" placeholder="Adults :">
                                </div>

                                <div>
                                    <label class="font-semibold">Childrens :</label>
                                    <input type="number" min="0" autocomplete="off" id="childrens"
                                        class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                        required="" placeholder="Childrens :">
                                </div>

                                <div class="lg:mt-7">
                                    <input type="submit" id="submit" name="send"
                                        class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full"
                                        value="Search Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="relative overflow-hidden">
        {{-- <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="relative">
                        <img src="assets/images/hotel/ab1.jpg" class="rounded-full lg:w-[400px] w-[280px]" alt="">
                        <div class="absolute -end-5 -bottom-16">
                            <img src="assets/images/hotel/ab2.jpg"
                                class="rounded-full lg:w-[280px] w-[200px] border-8 border-white dark:border-slate-900"
                                alt="">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6 mt-8 md:mt-0">
                    <div class="lg:ms-5">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Get inspiration
                            for future trips weekly</h3>

                        <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you
                            need to generate awareness, drive traffic, connect. Dummy text is text that is used in the
                            publishing industry or by web designers to occupy the space which will later be filled with
                            'real' content.</p>

                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital
                                Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our
                                Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create
                                your own skin to match your brand</li>
                        </ul>

                        <div class="mt-6">
                            <a href="contact-one.html"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i
                                    class="uil uil-envelope"></i> Contact us</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div> --}}

        {{-- <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                <div class="mx-auto py-4">
                    <img src="assets/images/client/amazon.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/google.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/lenovo.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/paypal.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/shopify.svg" class="h-6" alt="">
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/spotify.svg" class="h-6" alt="">
                </div>
            </div><!--end grid-->
        </div> --}}
        <!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                    Wisata Populer
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">
                    Temukan berbagai destinasi wisata terbaik yang direkomendasikan untuk liburan Anda. Jelajahi, nikmati,
                    dan ciptakan pengalaman tak terlupakan bersama kami.
                </p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-[30px] mt-8">
                {{-- <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                    <img src="assets/images/hotel/1.jpg" alt="">
                    <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>
                    <div class="absolute top-0 start-0 p-4 pb-0">
                        <span
                            class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Recommend</span>
                    </div>

                    <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                        <a href="" class="text-white/80 hover:text-white text-xl font-semibold">Paradise Beach,
                            Island</a>

                        <div class="flex justify-between mt-1">
                            <span class="text-gray-100"><i class="uil uil-dollar-sign text-[18px]"></i> 549</span>
                            <span class="text-gray-100"><i class="uil uil-plane-fly text-[18px]"></i> 10 Days</span>
                        </div>
                    </div>
                </div> --}}
                <!--end content-->
                @foreach (App\Models\Tour::latest()->take(12)->get() as $data)
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 w-[258px] h-[258px]">
                        <img src="{{ Str::startsWith($data->image, 'http') ? $data->image : asset('storage/' . $data->image) }}"
                            alt="{{ $data->title }}" class="w-full h-full object-cover" />

                        <span class="absolute inset-0 bg-slate-900/20 duration-500"></span>

                        @if ($data->is_recommended)
                            <div class="absolute top-0 start-0 p-4 pb-0">
                                <span class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">
                                    Direkomendasikan
                                </span>
                            </div>
                        @endif

                        <div class="absolute bottom-0 start-0 end-0 p-4 pt-0">
                            <a href="{{ route('tour.detail', $data->id) }}"
                                class="text-white/80 hover:text-white text-xl font-semibold">
                                {{ $data->title }}
                            </a>

                            <div class="flex justify-between mt-1">
                                <span class="text-gray-100">
                                    Rp {{ number_format($data->price, 0, ',', '.') }}
                                </span>
                                <span class="text-gray-100">
                                    <i class="uil uil-plane-fly text-[18px]"></i>
                                    {{ $data->duration_days }} Hari
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!--end grid-->
        </div><!--end container-->

        {{-- <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6 order-1 md:order-2">
                    <img src="assets/images/hotel/ab3.jpg" class="rounded-full" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6 order-2 md:order-1">
                    <div class="lg:me-5">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Resort
                            Surprises</h3>

                        <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you
                            need to generate awareness, drive traffic, connect. Dummy text is text that is used in the
                            publishing industry or by web designers to occupy the space which will later be filled with
                            'real' content.</p>

                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                                Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our
                                Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create
                                your own skin to match your brand</li>
                        </ul>

                        <div class="mt-6">
                            <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white lightbox"><i
                                    data-feather="video" class="size-4"></i></a><span
                                class="font-semibold ms-2 align-middle">Watch Now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What our customer <br>
                    say about us</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need
                    to generate awareness, drive traffic, connect.</p>
            </div>

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item">
                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" It seems that only fragments of the original text remain in the
                                    Lorem Ipsum texts used today. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/01.jpg" class="size-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is
                                    said to have originated in the 16th century. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/02.jpg" class="size-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain
                                    letters appear more frequently than others. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/03.jpg" class="size-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual
                                    filler for German texts. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/04.jpg" class="size-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are
                                    usually used when a text is required. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/05.jpg" class="size-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide text-center">
                        <div class="cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                                <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a
                                    text composed by Cicero. "</p>
                                <ul class="list-none mb-0 text-amber-400 mt-3">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="text-center mt-5">
                                <img src="assets/images/client/06.jpg" class="size-14 rounded-full shadow-md mx-auto"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-slate-400 text-sm">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container relative md:mt-24 mt-16 pb-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                    Rekomendasi Homestay Terbaik
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">
                    Temukan berbagai pilihan homestay yang nyaman, strategis, dan ramah di kantong untuk melengkapi
                    pengalaman liburan Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
                {{-- <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                    <img src="assets/images/hotel/b1.jpg" alt="">

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Design your
                            apps in your own way</a>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit
                        </p>

                        <div class="mt-4">
                            <a href="blog-detail.html"
                                class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div> --}}
                @foreach (App\Models\Homestay::latest()->take(9)->get() as $data2)
                    @php
                        $gambar = is_array($data2->gambar) ? $data2->gambar : json_decode($data2->gambar, true);
                        $gambarPertama = $gambar[0] ?? null;
                    @endphp

                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        @if ($gambarPertama)
                            <img src="{{ Str::startsWith($gambarPertama, 'http') ? $gambarPertama : asset('storage/' . $gambarPertama) }}"
                                alt="{{ $data2->nama }}" class="w-[353px] h-[243px] object-cover rounded-t-md">
                        @else
                            <img src="{{ asset('assets/images/no-image.jpg') }}" alt="No image"
                                class="w-[353px] h-[243px] object-cover rounded-t-md">
                        @endif

                        <div class="content p-6">
                            <h5 class="text-lg font-medium text-black dark:text-white">
                                {{ $data2->nama }}
                            </h5>
                            <p class="text-slate-400 mt-3">
                                {{ \Illuminate\Support\Str::limit($data2->deskripsi, 100) }}
                            </p>

                            <div class="mt-4">
                                <span class="text-indigo-600 font-semibold">
                                    Rp {{ number_format($data2->harga_sewa, 0, ',', '.') }} / malam
                                </span>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('homestay.detail', $data2->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 transition-all duration-300">
                                    Selengkapnya
                                    <i class="uil uil-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
