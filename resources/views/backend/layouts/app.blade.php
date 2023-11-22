<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />

    <link rel="apple-touch-icon" href="{{ asset('assets/img/asli/LOGO-removebg-preview.png') }}">
    <link rel="icon" href="{{ asset('assets/img/asli/LOGO-removebg-preview.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title') | {{ config('app.name') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RSIA Ibu dan Anak MIRIAM">
    <meta name="keyword" content="RSIA">

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tw-elements@1.0.0/dist/css/tw-elements.min.css" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/custom-tailwind.css'])

    @livewireStyles

    @stack('after-styles')
</head>

<body>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white">
        @include('backend.includes.main_header')
        @include('backend.includes.main_sidebar')
        <div class="flex !pl-[77px] mt-20" id="slim-content">
            @yield('content')
        </div>

        @include('includes.flash-message')

        <div class="absolute top-10 left-10 right-10 px-5">
            @include('flash::message')
        </div>

        <!-- Scripts -->
        @livewireScripts
    </div>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        $(document).ready(function() {
            $('meta[name="viewport"]').prop('content', 'width=1440');

            document
                .getElementById("slim-toggler")
                .addEventListener("click", () => {
                    const instance = te.Sidenav.getInstance(
                        document.getElementById("sidenav-4")
                    );
                    instance.toggleSlim();
                });
        })
    </script>


    @stack('after-scripts')
</body>

</html>
