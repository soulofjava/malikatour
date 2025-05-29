@extends('front.layout.app')
@section('content')
    <!-- Start Home -->
    <section class="relative flex md:h-screen py-44 items-center bg-cover bg-center self-center">
        <div class="absolute inset-0 h-full w-full jarallax" data-jarallax data-speed="0.8"
            style="background: url('assets/images/photography/first.jpg') bottom;"></div>
        <div class="absolute inset-0 h-full w-full md:block hidden jarallax" data-jarallax data-speed="0.5"
            style="background: url('ANDALAS (2).png') center;"></div>
        <div class="absolute inset-0 h-full w-full block md:hidden jarallax" data-jarallax data-speed="0.5"
            style="background: url('assets/images/photography/hero-text-sm.png') center;"></div>
        <div class="absolute inset-0 h-full w-full jarallax" data-jarallax data-speed="1.1"
            style="background: url('assets/images/photography/last.png') bottom;"></div>
        <div class="absolute inset-0 bg-gradient-to-t to-transparent via-transparent from-slate-900 hidden dark:block">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t to-transparent via-transparent from-white dark:hidden block">
        </div>
    </section>
    <!--end section-->
    <!-- End Home -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Selamat Datang</h3>

                <p class="text-slate-400 max-w-2xl mx-auto">
                    Andalas Tour Organizer siap membantu mewujudkan perjalanan liburan Anda yang berkesan di Wonosobo.
                    Dengan pengalaman dan dedikasi kami, kami pastikan paket wisata yang kami tawarkan sesuai dengan
                    keinginan dan kebutuhan Anda.
                </p>

            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="relative overflow-hidden h-fit">
                    <img src="{{ asset('SiKunir.jpg') }}" class="rounded-md" alt="">
                    <div
                        class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
                    </div>

                    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
                        <a href="{{ url('tentangkami') }}" class="font-semibold text-lg">Tentang Kami<i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                </div>
                <!--end content-->

                <div class="relative overflow-hidden h-fit lg:mt-16">
                    <img src="{{ asset('0A11E4B1-38A1-491A-B6AB-94F592BA3974.JPEG') }}" class="rounded-md" alt="">
                    <div
                        class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
                    </div>

                    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
                        <a href="{{ url('portofolio') }}" class="font-semibold text-lg">Portfolio <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                </div>
                <!--end content-->

                <div class="relative overflow-hidden h-fit">
                    <img src="{{ asset('Taman langit.jpg') }}" class="rounded-md" alt="">
                    <div
                        class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
                    </div>

                    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
                        <a href="{{ url('kontakkami') }}" class="font-semibold text-lg">Alamat Kami <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                </div>
                <!--end content-->

                <div class="relative overflow-hidden h-fit lg:mt-16">
                    <img src="{{ asset('quality_restoration_20250529004757214.JPG') }}" class="rounded-md" alt="">
                    <div
                        class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
                    </div>

                    <div class="absolute text-center p-6 bottom-0 start-0 end-0">
                        <a href="{{ url('layanan') }}" class="font-semibold text-lg">Layanan <i class="uil uil-arrow-up-right"></i></a>
                    </div>
                </div>
                <!--end content-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <!-- Start -->
    <section class="relative md:py-56 py-44 jarallax"
        style="background-image: url('/IMG_5635_Original.jpg'); background-size: cover;" data-jarallax
        data-speed="0.5" id="aboutme">

        <div
            class="absolute inset-0 h-full w-full bg-gradient-to-t to-transparent via-white/80 dark:via-slate-900/80 from-white dark:from-slate-900">
        </div>

        <div class="absolute text-center p-6 bottom-0 start-0 end-0">
            <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">"Tak Kenal Maka Tak Sayang"</h3>
        </div>
    </section>
    <!--end section-->

    <section class="relative pt-8 md:pb-24 py-16">
        <div class="container relative">
            <div class="flex justify-center">
                <div class="lg:max-w-768 w-full text-center">
                    <p>Perkenankan kami memperkenalkan diri. Kami adalah Andalas Tour Organizer (NIB. 0804250038312),
                        penyedia jasa pelayanan pariwisata yang beralamat di Menjer RT004 / RW002, Kecamatan Garung,
                        Kabupaten Wonosobo. Kami bergerak di bidang penyelenggaraan paket wisata berkualitas yang siap
                        menghadirkan pengalaman perjalanan tak terlupakan bagi Anda.</p>

                    <p class="text-slate-400 mt-6">Andalas Tour Organizer merupakan biro pariwisata terkemuka di Kabupaten
                        Wonosobo, khususnya untuk wilayah Dieng dan sekitarnya. Kami menyediakan berbagai paket wisata yang
                        dapat disesuaikan berdasarkan jumlah dan jenis obyek wisata yang Anda pilih, dengan harga kompetitif
                        dan transparan.</p>

                    <p class="text-slate-400 mt-6">Sebagai agen wisata profesional, kami didukung oleh tim berpengalaman dan
                        armada transportasi yang andal, siap melayani kebutuhan perjalanan Anda dengan nyaman dan aman. Kami
                        bangga menjadi partner terpercaya dalam menjelajahi keindahan alam dan budaya Wonosobo.</p>

                    <p class="text-slate-400 mt-6">Website kami dirancang modern dan responsif, memudahkan Anda dalam
                        mencari informasi paket wisata, melakukan pemesanan, dan mendapatkan update terbaru tentang
                        destinasi menarik di Wonosobo dan Dieng. Dengan Andalas Tour Organizer, Anda tak hanya berwisata,
                        tapi juga merasakan pengalaman penuh makna.</p>

                    <p class="text-slate-400 mt-6">Merupakan kehormatan bagi kami untuk dipercaya menjadi bagian dari
                        perjalanan wisata Anda. Demikian proposal penawaran paket wisata dari kami. Atas perhatian dan
                        kepercayaan Anda, kami ucapkan terima kasih sebesar-besarnya.</p>

                    <div class="mt-6 text-center">
                        <a href="{{ url('tentangkami') }}"
                            class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">
                            Baca Selengkapnya
                            <i class="uil uil-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--end flex-->
        </div>
        <!--end container-->

        {{-- <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Paket Wisata & Layanan
                    Kami</h3>

                <p class="text-slate-400 max-w-2xl mx-auto">
                    Kami menyediakan berbagai paket wisata menarik di Wonosobo yang dirancang khusus untuk memenuhi
                    kebutuhan liburan Anda.
                    Tim profesional kami siap membantu Anda merencanakan perjalanan yang nyaman, seru, dan penuh kenangan
                    indah.
                </p>

            </div>
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
            <!--end grid-->

            <div class="grid grid-cols-1 mt-8">
                <div class="text-center">
                    <a href="photography-portfolio.html"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-slate-400 dark:text-white/70 dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">
                        Lihat Lebih Banyak
                        <i class="uil uil-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div> --}}
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
@endsection
