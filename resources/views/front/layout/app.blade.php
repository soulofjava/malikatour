<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<head>
    @include('front.includes.meta')
    @stack('before-style')
    @include('front.includes.style')
    @stack('after-style')
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite([])
    @else
    @endif
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    @include('front.includes.header')
    @yield('content')
    @include('front.includes.footer')
    @stack('before-script')
    @include('front.includes.script')
    @stack('after-script')
</body>

</html>
