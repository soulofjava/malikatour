    <!-- Footer Start -->
    <footer class="footer relative text-gray-400 dark:text-gray-400"
        style="background: url('assets/images/photography/footer.jpg') top left;">
        <div
            class="absolute inset-0 bg-gradient-to-r to-transparent via-white dark:via-slate-900 from-white dark:from-slate-900">
        </div>
        <div class="container relative">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="py-[60px] px-0">
                        <div class="grid grid-cols-1">
                            <div>
                                <a href="mailto:{{ $data->email }}"
                                    class="relative inline-block font-semibold tracking-wide align-middle text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-2xl text-slate-900 dark:text-white dark:hover:text-white hover:text-indigo-600 after:bg-indigo-600 dark:after:bg-white duration-500 ease-in-out">{{ $data->email }}</a>
                            </div>
                            <p class="mt-6 max-w-2xl">{{ $data->alamat }}</p>
                            <ul class="list-none mt-6">
                                <li class="inline"><a href="{{ $data->instagram }}" target="_blank"
                                        class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                            class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline">
                                    <a href="{{ $data->tiktok }}" target="_blank"
                                        class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center text-gray-400 hover:text-white border border-gray-100 dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                        title="tiktok">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                            <path
                                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                        </svg>
                                    </a>
                                </li>


                            </ul><!--end icon-->
                        </div><!--end grid-->
                    </div><!--end col-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="py-[30px] px-0 border-t border-slate-800">
            <div class="container relative text-center">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="md:text-start text-center">
                        <p class="mb-0">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> <i class="mdi mdi-heart text-red-600"></i>
                            by <a href="https://soulofjava.github.io/myportofolio/" target="_blank"
                                class="text-reset">Isa Maulana Tantra</a>.
                        </p>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Start Cookie Popup -->
    {{-- <div
        class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
        <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it,
            you accept our <a href="https://shreethemes.in" target="_blank"
                class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a></p>
        <div class="cookie-popup-actions text-end">
            <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 end-2"><i
                    class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
        </div>
    </div> --}}
    <!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
    <!-- End Cookie Popup -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-indigo-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- Switcher -->
    <div class="fixed top-[30%] -right-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->
    {{-- <div class="fixed top-[40%] -right-3 z-50">
        <a href="" id="switchRtl">
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold rtl:block ltr:hidden">LTR</span>
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold ltr:block rtl:hidden">RTL</span>
        </a>
    </div> --}}
    <!-- LTR & RTL Mode Code -->
