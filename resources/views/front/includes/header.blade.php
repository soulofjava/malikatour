 <!-- Loader Start -->
 <!-- <div id="preloader">
                <div id="status">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div> -->
 <!-- Loader End -->

 <!-- Start Navbar -->
 <nav id="topnav" class="defaultscroll is-sticky">
     <div class="container relative">
         <!-- Logo container-->
         <a class="logo" href="{{ url('/') }}">
             <span class="inline-block dark:hidden">
                 <img src="{{ asset('Logo-removebg-preview.png') }}" class="l-dark" height="50" width="50"
                     alt="">
                 <img src="{{ asset('Logo-removebg-preview.png') }}" class="l-light" height="50" width="50" alt="">
             </span>
             <img src="{{ asset('Logo-removebg-preview.png') }}" height="50" width="50"
                 class="hidden dark:inline-block" alt="">
         </a>

         <!-- End Logo container-->
         <div class="menu-extras">
             <div class="menu-item">
                 <!-- Mobile menu toggle-->
                 <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                     <div class="lines">
                         <span></span>
                         <span></span>
                         <span></span>
                     </div>
                 </a>
                 <!-- End mobile menu toggle-->
             </div>
         </div>

         <!--Login button Start-->
         {{-- <ul class="buy-button list-none mb-0">
             <li class="inline mb-0">
                 <a href=""
                     class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i
                         data-feather="settings" class="size-4"></i></a>
             </li>

             <li class="inline ps-1 mb-0">
                 <a href="https://1.envato.market/techwind"
                     target="_blank"class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i
                         data-feather="shopping-cart" class="size-4"></i></a>
             </li>
         </ul> --}}
         <!--Login button End-->

         <div id="navigation">
             <!-- Navigation Menu-->
             <ul class="navigation-menu nav-light justify-end">
                 <li><a href="{{ url('/') }}" class="sub-menu-item">Beranda</a></li>
                 <li><a href="{{ url('tentangkami') }}" class="sub-menu-item">Tentang Kami</a></li>
                 <li><a href="{{ url('portofolio') }}" class="sub-menu-item">Portfolio</a></li>
                 <li><a href="{{ url('kontakkami') }}" class="sub-menu-item">Alamat Kami</a></li>
                 <li><a href="{{ url('layanan') }}" class="sub-menu-item">Layanan</a></li>
             </ul><!--end navigation menu-->
         </div><!--end navigation-->
     </div><!--end container-->
 </nav><!--end header-->
 <!-- End Navbar -->
