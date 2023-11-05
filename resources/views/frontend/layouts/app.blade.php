<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />

    <link rel="apple-touch-icon" href="{{ asset('assets/img/asli/LOGO-removebg-preview.png') }}">
    <link rel="icon" href="{{ asset('assets/img/asli/LOGO-removebg-preview.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title') | {{ config('app.name') }}</title>

    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RSIA Ibu dan Anak MIRIAM">
    <meta name="keyword" content="RSIA">

    @include('frontend.includes.meta')

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="icon" type="image/ico" href="{{ asset('img/favicon.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.4.min.js') }}"></script>

    <!-- Vendor Assets -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Styles Assets -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @vite('resources/css/common.css')
    @vite(['resources/js/app.js'])

    @livewireStyles

    @stack('after-styles')
</head>

<body>
    <div class="flex flex-col justify-between h-screen">
        @include('frontend.includes.header')

        <main>
            @yield('content')
        </main>


        @include('frontend.includes.footer')

        <!-- Scripts -->
        @livewireScripts
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            //console.log('height', $('#appbar').height())

            /* $(window).resize(function() {
                var screensize = $(window).width();
                console.log('widht', screensize)
            }); */
        });
    </script>

    @stack('after-scripts')
</body>

</html>
