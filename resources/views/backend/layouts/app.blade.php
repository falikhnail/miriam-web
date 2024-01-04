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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
    <div class="loading-content">
        <div class="flex items-center justify-center min-h-screen w-full">
            <i class="fa-solid fa-spinner fa-spin fa-2xl" style="color: #1662e3;"></i>
        </div>
    </div>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white" id="main">
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
        const sidebarElement = document.getElementById("admin-sidebar");
        let sidebar = te.Sidenav.getOrCreateInstance(
            sidebarElement
        );

        $(document).ready(async function() {
            $('meta[name="viewport"]').prop('content', 'width=1440');

            await initialSidebar()

            $("#full-loading").hide()
            $(".loading-content").hide()

            sidebarElement.addEventListener("expanded.te.sidenav", (event) => {
                //console.log('event expanded sidenav', event);
                $('.side-nav-dropdown').show()
                $('.dropdown-item').show()
            })

            sidebarElement.addEventListener("collapse.te.sidenav", (event) => {
                //console.log('event collapse sidenav', event);
                $('.side-nav-dropdown').hide()
                $('.dropdown-item').hide()
            })
        })

        $(window).on('load', function() {
            //$('.loading-content').show();
        });

        $(window).on('beforeunload', function() {
            $('.loading-content').slideDown();
        });

        $(function() {
            $('.loading-content').slideUp();
        })

        $("#admin-sidebar-toggler").click(() => {
            sidebar.toggleSlim();

            const isCollapsed = sidebar._slimCollapsed;
            sessionStorage.setItem('admin_sidebar_slim', isCollapsed);
            togglePadSectionFooter(isCollapsed)
        })

        window.addEventListener('swal', function(e) {
            var res = {};
            if (Array.isArray(e.detail)) {
                res = e.detail[0];
            } else {
                res = e.detail;
            }

            //console.log('swal', res)
            Swal.fire(res);
        });

        async function initialSidebar() {
            let isSidebarCollapsed = sessionStorage.getItem('admin_sidebar_slim');
            if (isSidebarCollapsed == 'false') {
                sidebar.toggleSlim()
                togglePadSectionFooter(isSidebarCollapsed == 'false')
                //$('.side-nav-dropdown').show()
                //$('.dropdown-item').show()
            } else {
                $('.side-nav-dropdown').hide()
                $('.dropdown-item').hide()
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

        function showDeleteConfirm(callback) {
            Swal.fire({
                title: "Hapus Data?",
                text: `Hapus Data ini?`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus",
                showLoaderOnConfirm: true,
                /* preConfirm: () => {
                    return new Promise(function(resolve, reject) {
                        // here should be AJAX request
                        setTimeout(function() {
                            resolve();
                        }, 5000);
                    });
                } */
            }).then((result) => {
                if (result.isConfirmed) {
                    callback()
                }
            });
        }

        function showLoading() {
            $(".loading-content").slideDown()
        }

        function hideLoading() {
            $(".loading-content").slideUp()
        }

        function showError(message = 'Terjadi kesalahan') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: message
            });
        }

        function makeUniqueId(length = 10) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const charactersLength = characters.length;
            let counter = 0;
            while (counter < length) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                counter += 1;
            }

            return result;
        }
    </script>


    @stack('after-scripts')
</body>

</html>
