<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content={{ $title }}>
    <meta name="author" content="Cihils Syndicate Web Division">
    <meta name="description"
        content="Open source and free Bootstrap 5 UI Kit featuring 80 UI components, 5 example pages, and a Gulp and Sass workflow.">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    <link type="text/css" href="{{ asset('/assets/css/pixel.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    @include('components.navbar')
    <main class="pb-5">
        @yield('main')
        <!-- Hero -->


    </main>
    @include('components.footer')


    <script src="{{ asset('/assets/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/headroom.js/dist/headroom.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Vendor JS -->
    <script src="{{ asset('/assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/vivus/dist/vivus.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Pixel JS -->
    <script src="{{ asset('/assets/js/pixel.js') }}"></script>
    @stack('scripts')


</body>

</html>