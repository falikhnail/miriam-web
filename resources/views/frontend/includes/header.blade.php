<div id="topbar" class="flex flex-col items-center">
    <div class="container flex flex-col md:flex-row items-center justify-center md:justify-between my-[10px] md:my-5">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">rsiamiriam@gmail.com</a>
            <i class="bi bi-phone"></i> +62 853-2947-3535
        </div>
        <div class="flex space-x-4 mt-[15px] md:mt-0">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/rsiamiriamkudus/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@rsiamiriam1195" class="youtube"><i class="bi bi-youtube"></i></i></a>
        </div>
    </div>
    <header id="header" class="sticky w-full">
        <div class="flex flex-row items-center justify-between  px-[10px] md:px-[5rem]">
            {{-- <h1 class="text-2xl font-bold text-center md:text-left">
                <a href="{{ route('frontend.index') }}">RSIA Ibu dan Anak MIRIAM</a>
            </h1> --}}
            <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia">
            <nav id="navbar" class="navbar order-last order-lg-0 mt-2 md:mt-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ route('frontend.index') }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="#">Profile RSIA MIRIAM</a>
                            </li>
                            <li><a href="#">Visi dan Misi</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Unit Kerja</a></li>
                            <li><a href="#">Struktur Organisasi</a></li>
                            <li><a href="#">Aspek Hukum dan Perundangan</a></li>
                            <li><a href="#">Jajaran Direksi RSIA Miriam Kudus</a></li>
                        </ul>
                    <li><a class="nav-link scrollto" href="#">Pelayanan</a></li>
                    <li><a class="nav-link scrollto" href="#">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="#">Cara Daftar Online</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li class="inline-block md:inline-block lg:hidden mt-2 ml-3 md:-ml-2">
                        <a href="{{ route('frontend.register_pasien') }}" class="appointment-btn text-white px-3 py-2">
                            <span class="text-center">Pendaftaran Online</span>
                        </a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="{{ route('frontend.register_pasien') }}" class="appointment-btn scrollto hidden md:hidden lg:inline-block">
                Pendaftaran Online
            </a>
        </div>
    </header>
</div>
