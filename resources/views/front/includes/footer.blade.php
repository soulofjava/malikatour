  <!-- Footer Start -->
  <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
      <div class="container relative">
          <div class="grid grid-cols-12">
              <div class="col-span-12">
                  <div class="py-[60px] px-0">
                      <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                          <div class="lg:col-span-4 md:col-span-12">
                              <a href="#" class="text-[22px] focus:outline-none">
                                  <img src="assets/images/logo-light.png" alt="">
                              </a>
                              @php
                                  $setting = \App\Models\SiteSetting::first();
                              @endphp
                              <p class="mt-6 text-gray-300">
                                  Hubungi kami melalui media sosial atau email untuk informasi lebih lanjut mengenai
                                  layanan dan destinasi wisata yang kami tawarkan.
                              </p>

                              <ul class="list-none mt-6">
                                  @if ($setting->email)
                                      <li class="inline">
                                          <a href="mailto:{{ $setting->email }}"
                                              class="size-8 inline-flex items-center justify-center border border-gray-800 rounded-md hover:bg-indigo-600 hover:border-indigo-600 text-base text-center duration-500">
                                              <i class="uil uil-envelope" title="Email"></i>
                                          </a>
                                      </li>
                                  @endif

                                  @if ($setting->instagram)
                                      <li class="inline">
                                          <a href="{{ $setting->instagram }}" target="_blank"
                                              class="size-8 inline-flex items-center justify-center border border-gray-800 rounded-md hover:bg-indigo-600 hover:border-indigo-600 text-base text-center duration-500">
                                              <i class="uil uil-instagram" title="Instagram"></i>
                                          </a>
                                      </li>
                                  @endif

                                  @if ($setting->facebook)
                                      <li class="inline">
                                          <a href="{{ $setting->facebook }}" target="_blank"
                                              class="size-8 inline-flex items-center justify-center border border-gray-800 rounded-md hover:bg-indigo-600 hover:border-indigo-600 text-base text-center duration-500">
                                              <i class="uil uil-facebook-f" title="Facebook"></i>
                                          </a>
                                      </li>
                                  @endif

                                  @if ($setting->youtube)
                                      <li class="inline">
                                          <a href="{{ $setting->youtube }}" target="_blank"
                                              class="size-8 inline-flex items-center justify-center border border-gray-800 rounded-md hover:bg-indigo-600 hover:border-indigo-600 text-base text-center duration-500">
                                              <i class="uil uil-youtube" title="YouTube"></i>
                                          </a>
                                      </li>
                                  @endif

                                  @if ($setting->kontak)
                                      <li class="inline">
                                          <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->kontak) }}"
                                              target="_blank"
                                              class="size-8 inline-flex items-center justify-center border border-gray-800 rounded-md hover:bg-indigo-600 hover:border-indigo-600 text-base text-center duration-500">
                                              <i class="uil uil-whatsapp" title="WhatsApp"></i>
                                          </a>
                                      </li>
                                  @endif
                              </ul><!-- end icon -->
                          </div><!--end col-->

                          <div class="lg:col-span-2 md:col-span-4">
                              {{-- <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                              <ul class="list-none footer-list mt-6">
                                  <li><a href="page-aboutus.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> About us</a></li>
                                  <li class="mt-[10px]"><a href="page-services.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Services</a></li>
                                  <li class="mt-[10px]"><a href="page-team.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Team</a></li>
                                  <li class="mt-[10px]"><a href="page-pricing.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Pricing</a></li>
                                  <li class="mt-[10px]"><a href="portfolio-creative-four.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Project</a></li>
                                  <li class="mt-[10px]"><a href="blog.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Blog</a></li>
                                  <li class="mt-[10px]"><a href="auth-login.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Login</a></li>
                              </ul> --}}
                          </div><!--end col-->

                          <div class="lg:col-span-3 md:col-span-4">
                              {{-- <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                              <ul class="list-none footer-list mt-6">
                                  <li><a href="page-terms.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                  <li class="mt-[10px]"><a href="page-privacy.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                                  <li class="mt-[10px]"><a href="documentation.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Documentation</a></li>
                                  <li class="mt-[10px]"><a href="changelog.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Changelog</a></li>
                                  <li class="mt-[10px]"><a href="widget.html"
                                          class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                              class="uil uil-angle-right-b"></i> Widget</a></li>
                              </ul> --}}
                          </div><!--end col-->

                          <div class="lg:col-span-3 md:col-span-4">
                              {{-- <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                              <p class="mt-6">Sign up and receive the latest tips via email.</p>
                              <form>
                                  <div class="grid grid-cols-1">
                                      <div class="my-3">
                                          <label class="form-label">Write your email <span
                                                  class="text-red-600">*</span></label>
                                          <div class="form-icon relative mt-2">
                                              <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                              <input type="email"
                                                  class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200"
                                                  placeholder="Email" name="email" required="">
                                          </div>
                                      </div>

                                      <button type="submit" id="submitsubscribe" name="send"
                                          class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                  </div>
                              </form> --}}
                          </div><!--end col-->
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
                          </script>
                          {{-- Techwind. Design with <i class="mdi mdi-heart text-red-600"></i> by --}}
                          <a href="https://soulofjava.github.io/myportofolio/" target="_blank" class="text-reset">TIM
                              BAYANGAN</a>.
                      </p>
                  </div>

                  <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                      {{-- <li class="inline"><a href=""><img src="assets/images/payments/american-ex.png"
                                  class="max-h-6 inline" title="American Express" alt=""></a></li>
                      <li class="inline"><a href=""><img src="assets/images/payments/discover.png"
                                  class="max-h-6 inline" title="Discover" alt=""></a></li>
                      <li class="inline"><a href=""><img src="assets/images/payments/master-card.png"
                                  class="max-h-6 inline" title="Master Card" alt=""></a></li>
                      <li class="inline"><a href=""><img src="assets/images/payments/paypal.png"
                                  class="max-h-6 inline" title="Paypal" alt=""></a></li>
                      <li class="inline"><a href=""><img src="assets/images/payments/visa.png"
                                  class="max-h-6 inline" title="Visa" alt=""></a></li> --}}
                  </ul>
              </div><!--end grid-->
          </div><!--end container-->
      </div>
  </footer><!--end footer-->
  <!-- Footer End -->

  <!-- Start Cookie Popup -->
  {{-- <div
      class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
      <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it, you
          accept our <a href="https://shreethemes.in" target="_blank"
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
  {{-- <div class="fixed top-[30%] -right-2 z-50">
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
  </div> --}}
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
