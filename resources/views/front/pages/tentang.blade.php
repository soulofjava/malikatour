@extends('front.layout.app')
@section('content')
    <!-- Start Home -->
    <section class="relative md:py-56 py-44 bg-[url('../../assets/images/photography/photographer.jpg')] bg-cover jarallax"
        data-jarallax data-speed="0.5" id="aboutme">
        <div
            class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
        </div>

        <div class="absolute text-center p-6 bottom-0 start-0 end-0">
            {{-- <h5 class="text-slate-900 dark:text-white/70 font-semibold text-lg">Saya Andalas Tour Organizer</h5> --}}
            <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-bold">Tentang Kami</h3>

        </div>
    </section><!--end section-->
    <!-- End Home -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="rounded-md shadow-sm dark:shadow-gray-800 overflow-hidden">
                    <div class="md:flex items-center">
                        <div class="relative md:shrink-0">
                            <img src="Logo-removebg-preview.png"
                                class="h-full w-full object-cover lg:w-[500px] md:w-80 lg:h-full md:h-96" alt="">
                        </div>

                        <div class="p-8">
                            <div class="flex">
                                <div class="w-1/2">
                                    <h2 class="text-3xl mb-2 font-bold"><span class="counter-value"
                                            data-target="9">1</span>+</h2>
                                    <h6 class="text-slate-400 mb-0">Tahun Pengalaman</h6>
                                </div>
                                <div class="w-1/2">
                                    <h2 class="text-3xl mb-2 font-bold"><span class="counter-value"
                                            data-target="1542">40</span>+</h2>
                                    <h6 class="text-slate-400 mb-0">Wisatawan Puas</h6>
                                </div>
                            </div>

                            <p class="text-slate-400 dark:text-white mt-6">
                                Andalas Tour Organizer telah melayani perjalanan wisata di Wonosobo selama bertahun-tahun.
                                Kami berkomitmen memberikan pengalaman wisata yang berkesan dengan layanan profesional dan
                                personal.
                                Dengan pemahaman mendalam tentang destinasi lokal, kami membantu Anda menjelajahi keindahan
                                alam dan budaya secara optimal.
                            </p>

                            <a href="https://wa.me/6282122922673?text=Halo%20Andalas%20Tour%20Organizer%2C%20saya%20mendapatkan%20nomor%20ini%20dari%20website%20Anda.%20Saya%20ingin%20bertanya%20lebih%20lanjut."
                                target="_blank" rel="noopener noreferrer"
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out mt-6">
                                Hubungi Kami <i class="uil uil-arrow-right"></i>
                            </a>


                        </div>
                    </div><!--end flex-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        {{-- <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Brands</h3>

                <p class="text-slate-400 max-w-2xl mx-auto">As a Freelance Designer & Developer, I am here to make you stand
                    out in the digital world and my passion for design and your vision will ensure a great end result.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 justify-center gap-[30px]">
                <div class="mx-auto">
                    <img src="assets/images/client/amazon-prime-video-logo.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/angular-3.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/huawei-2.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/bosch.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/coinbase.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/husd-3.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/intercom-1.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>
                <div class="mx-auto">
                    <img src="assets/images/client/linkedin-logo-2013-1.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/yamaha-2-1.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/logo-donington-park.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/microsoft-office-2013.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/netflix-3.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/python-3.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/redbull-1.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/zoom-communications-logo.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/suntech-power-logo.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>

                <div class="mx-auto">
                    <img src="assets/images/client/v-power-1.svg"
                        class="size-[110px] grayscale hover:grayscale-0 duration-500 ease-in-out" alt="">
                </div>
            </div><!--end grid-->
        </div> --}}
        <!--end container-->
        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Punya Pertanyaan?
                    Hubungi Kami!</h3>

                <p class="text-slate-400 max-w-2xl mx-auto">
                    Kami siap membantu menjawab semua pertanyaan Anda seputar paket wisata dan layanan kami.
                    Dengan pengalaman dan dedikasi, kami akan memastikan perjalanan Anda menjadi pengalaman terbaik.
                </p>

                <div class="mt-8">
                    <a href="https://wa.me/6282122922673?text=Halo%20Andalas%20Tour%20Organizer%2C%20saya%20mendapatkan%20nomor%20ini%20dari%20website%20Anda.%20Saya%20ingin%20bertanya%20lebih%20lanjut."
                        target="_blank" rel="noopener noreferrer"
                        class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">
                        <i class="uil uil-phone"></i> Hubungi Kami via WhatsApp
                    </a>
                </div>

            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
