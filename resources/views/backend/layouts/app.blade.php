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
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>


    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/custom-tailwind.css'])

    @livewireStyles

    @stack('after-styles')
</head>

<body>
    <div id="full-loading" class="bg-gradient-to-b from-slate-100 to-white">
        <div class="flex items-center justify-center min-h-screen w-full">
            <i class="fa-solid fa-spinner fa-spin fa-2xl" style="color: #1662e3;"></i>
        </div>
    </div>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white">
        @include('backend.includes.main_header')

        @include('backend.includes.main_sidebar')

        <div class="flex flex-col !pl-[77px] mt-20 min-h-screen bg-slate-100" id="content">
            <div class="flex-1 m-10">
                @yield('content')
            </div>
            <div class="left-0 right-0 bottom-0">
                <div id="footer-div" class="flex items-center justify-center py-10 pl-[77px]">
                    © 2023 Rsia Miriam
                </div>
            </div>
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
        const sidebar = te.Sidenav.getOrCreateInstance(
            document.getElementById("admin-sidebar")
        );

        $(document).ready(function() {
            $('meta[name="viewport"]').prop('content', 'width=1440');
            initialSidebar()

            $("#full-loading").fadeOut(2500, function() {
                $("#content").fadeIn(1000);
            });
        })

        $("#admin-sidebar-toggler").click(() => {
            sidebar.toggleSlim();

            const isCollapsed = sidebar._slimCollapsed;
            sessionStorage.setItem('admin_sidebar_slim', isCollapsed);
            togglePadSectionFooter(isCollapsed)

        })

        function initialSidebar() {
            let isSidebarCollapsed = sessionStorage.getItem('admin_sidebar_slim');
            if (isSidebarCollapsed == 'false') {
                sidebar.toggleSlim();
                togglePadSectionFooter(isSidebarCollapsed == 'false')
            }
        }

        function togglePadSectionFooter(isCollapsed) {
            if (isCollapsed) {
                $("#footer-div").removeClass('pl-[77px]')
            } else {
                $("#footer-div").addClass('pl-[77px]')
            }
        }

        function showLoading() {
            Swal.fire({
                title: 'Loading',
                onBeforeOpen() {
                    Swal.showLoading()
                },
                onAfterClose() {
                    Swal.hideLoading()
                },
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                showConfirmButton: false,
            })
        }
    </script>


    @stack('after-scripts')
</body>

</html>
