<div id="topbar" class="flex flex-col items-center">
    <div class="container-sm flex flex-col md:flex-row items-center justify-center md:justify-between my-[10px] md:my-5">
        <div class="contact-info d-flex flex-column flex-md-row align-items-center">
            <a href="mailto:contact@example.com">
                <i class="bi bi-envelope"></i> miriam@rsiamiriam.com
            </a>
            <a href="#" class="mt-3 mt-md-0">
                <i class="bi bi-phone"></i> +62 853-2947-3535
            </a>
        </div>
        <div class="flex space-x-4 mt-[15px] md:mt-0">

            <a href="https://api.whatsapp.com/send/?phone=6285329473535" class="whatsapp"><i
                    class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/rsiamiriamkudus/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@rsiamiriam1195" class="youtube"><i class="bi bi-youtube"></i></i></a>
            <a href="https://www.facebook.com/rsiamiriamkudus/" class="facebook"><i class="bi bi-facebook"></i></a>
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
                    <?php
                    $profile = ['visi_misi','struktur_organisasi'];
                    $pelayanan = ['pelayanan','igd'];
                    $informasi = ['ketersediaantempattidur'
                                ,'hak_kewajiban','indikatormutu'];
                    
                    $jadwal = ['dr_yudi','dr_ferry','dr_tezza','dr_umi','drg_vera','drg_cindy'];           
                    $karir = ['bidan','perawat','marketing','adminpendaftaran','ttk','analiskesehatan',
                                'tata_boga'];
                    $instalasiRadiologi = ['usg', 'rotgen'];
                    $instalasiLaboratorium = ['lab'];
                    $instalasiGizi = ['gizi'];
                    $polibkia = ['pijat_bayi','cukur_bayi','tindik_bayi'];
                    $imunisasi = ['imun_dasar','imun_tambahan','imun_tambahan1'];
                    $vaksinasi = ['vaksin_dewasa'];
                    $edukasi = [''];

                    $current = explode('.', Route::current()->getName())[1];

                    $isActive = function ($path) use ($current) {
                        if (is_string($path)) {
                            return 'nav-link ' . (strpos($path, $current) !== false ? 'active' : '');
                        }

                        if (is_array($path)) {
                            return 'nav-link ' . (in_array($current, $path) !== false ? 'active' : '');
                        }

                        return '';
                    };

                    ?>
                    <li><a class="scrollto {{ $isActive('index') }}" href="/">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="{{ $isActive($profile) }}">
                            <span>Profile</span> <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#">Profile RSIA MIRIAM</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.visi_misi') }}" 
                                class="{{ $isActive('visi_misi') }}">Visi dan Misi</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Unit Kerja</a></li>
                            <li><a href="{{ route('frontend.struktur_organisasi') }}" 
                                class="{{ $isActive('struktur_organisasi') }}">Sturktur Organisasi</a></li>
                        </ul>
                    <li class="dropdown">
                        <a href="#" class="{{ $isActive($pelayanan) }}">
                            <span>Pelayanan</span> <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#">Maklumat Pelayanan</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.pelayanan') }}"
                                    class="{{ $isActive('pelayanan') }}">Pelayanan Rsia Miriam</a>
                            </li>
                            <li><a href="{{ route('frontend.igd') }}"
                                    class="{{ $isActive('igd') }}">Instalasi Gawat Darurat</a></li>
                            <li class="dropdown">
                                <a href="" class="{{ $isActive($instalasiRadiologi) }}">
                                    <span>Instalasi Radiologi</span> <i class="bi bi-chevron-right"></i>
                                    </a>
                                <ul>
                                    <li><a href="{{ route('frontend.usg') }}"
                                    class="{{ $isActive('usg') }}">Radiologi USG</a></li>
                                    <li><a href="{{ route('frontend.rotgen') }}"
                                        class="{{ $isActive('rotgen') }}">Radiologi Rontgen</a></li>
                                </ul>
                            <li><a href="{{ route('frontend.lab') }}"
                                    class="{{ $isActive('lab') }}">Instalasi Laboratorium</a></li>                                    
                            <li><a href="{{ route('frontend.gizi') }}"
                                    class="{{ $isActive('gizi') }}">Instalasi Gizi</a></li>
                            <li class="dropdown">
                                <a href="" class="{{ $isActive($polibkia) }}">
                                    <span>Poli BKIA</span> <i class="bi bi-chevron-right"></i>
                                    </a>
                                <ul>
                                    <li><a href="{{ route('frontend.pijat_bayi') }}"
                                        class="{{ $isActive('pijat_bayi') }}">Pijat Bayi</a></li>
                                    <li><a href="{{ route('frontend.cukur_bayi') }}"
                                        class="{{ $isActive('cukur_bayi') }}">Cukur Bayi</a></li>
                                    <li><a href="{{ route('frontend.tindik_bayi') }}"
                                        class="{{ $isActive('tindik_bayi') }}">Tindik Bayi</a></li>
                                </ul>   
                            <li class="dropdown">
                                <a href="" class="{{ $isActive($imunisasi) }}">
                                    <span>Imunisasi</span> <i class="bi bi-chevron-right"></i>
                                    </a>
                                <ul>
                                    <li><a href="{{ route('frontend.imun_dasar') }}"
                                        class="{{ $isActive('imun_dasar') }}">Imunisasi Dasar</a></li>
                                    <li><a href="{{ route('frontend.imun_tambahan') }}"
                                        class="{{ $isActive('imun_tambahan') }}">Imunisasi Tambahan</a></li>
                                    <li><a href="{{ route('frontend.imun_tambahan1') }}"
                                        class="{{ $isActive('imun_tambahan1') }}">Imunisasi MR</a></li>
                                </ul>                             
                            <li><a href="{{ route('frontend.vaksin_dewasa') }}"
                                class="{{ $isActive('vaksin_dewasa') }}">Vaksinasi Dewasa</a></li>                           
                        </ul>

                    <li class="dropdown">
                        <a href="#" class="{{ $isActive($informasi) }}">
                            <span>Informasi</span> <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            {{-- <li>
                                <a href="{{ route('frontend.jadwal_dokter') }}"
                                    class="{{ $isActive('jadwal_dokter') }}">
                                    Jadwal Dokter
                                </a>
                            </li> --}}

                                <li class="dropdown">
                                    {{-- <a href="{{ route('frontend.jadwal_dokter') }}" --}}
                                    <a  class="{{ $isActive('jadwal') }}"> <span>Jadwal Dokter</span> 
                                        <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li class="dropdown">
                                            {{-- <a href="{{ route('frontend.dokteryudi') }}" --}}
                                            <a class="{{ $isActive('dr_yudi') }}"> <span>Dokter Spesialis Kandungan & Kebidanan</span> 
                                                <i class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('frontend.dr_yudi') }}"
                                                            class="{{ $isActive('dr_yudi') }}"> dr. Yudi Indarto, Sp.OG</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('frontend.dr_ferry') }}"
                                                            class="{{ $isActive('dr_ferry') }}"> dr. Ferry Santoso, Sp.OG, M.Biomed</a>
                                                    </li>
                                                </ul>      
                                        </li>
                                        <li class="dropdown">
                                            {{-- <a href="{{ route('frontend.dr_tezza') }}" --}}
                                            <a class="{{ $isActive('dr_tezza') }}"> <span>Dokter Spesialis Anak</span> 
                                                <i class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('frontend.dr_tezza') }}"
                                                            class="{{ $isActive('dr_tezza') }}"> Dr. Tezza Dinayanti, Sp.A</a>
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class="dropdown">
                                            {{-- <a href="{{ route('frontend.dr_tezza') }}" --}}
                                            <a class="{{ $isActive('dr_umi') }}"> <span>Dokter Umum</span> 
                                                <i class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('frontend.dr_umi') }}"
                                                            class="{{ $isActive('dr_umi') }}">dr. Sri Uminingsih</a>
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class="dropdown">
                                            {{-- <a href="{{ route('frontend.dr_tezza') }}" --}}
                                            <a class="{{ $isActive('dr_michel') }}"> <span>Dokter Radiologi</span> 
                                                <i class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('frontend.dr_michel') }}"
                                                            class="{{ $isActive('dr_michel') }}">dr. Michael A. Leuwol, Sp.Rad</a>
                                                    </li>
                                                </ul>
                                        </li>
                                        <li class="dropdown">
                                            {{-- <a href="{{ route('frontend.dr_tezza') }}" --}}
                                            <a class="{{ $isActive('drg_vera') }}"> <span>Dokter Gigi</span> 
                                                <i class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('frontend.drg_vera') }}"
                                                            class="{{ $isActive('drg_vera') }}">drg. Vera Sentosa</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('frontend.drg_cindy') }}"
                                                            class="{{ $isActive('drg_cindy') }}">drg. Cindy Natalia A.</a>
                                                    </li>
                                                </ul>
                                        </li>                  
                                        </li>
                                    </ul>
                                </li>

                            <li>
                                <a href="{{ route('frontend.indikatormutu') }}"
                                    class="{{ $isActive('indikatormutu') }}">
                                    Indikator Mutu 2023
                                </a>
                            </li>

                            <li><a href="#">Tata Tertib Pasien, Pengujung, dan Penunggu</a></li>

                            <li>
                                <a href="{{ route('frontend.ketersediaantempattidur') }}"
                                    class="{{ $isActive('ketersediaantempattidur') }}">
                                    Ketersedian Tempat Tidur
                                </a>
                            </li>

                            <li><a href="#">Alur Pelayanan</a></li>
                            <li>
                                <a href="{{ route('frontend.hak_kewajiban') }}"
                                    class="{{ $isActive('hak_kewajiban') }}">
                                    Hak & Kewajiban Pasien
                                </a>
                            </li>
                            <li><a href="#">Prosedur Pengurusan Pasien Pulang</a></li>

                            <li class="dropdown">
                                <a href="" class="{{ $isActive($karir) }}">
                                    <span>Karir</span> <i class="bi bi-chevron-right"></i>
                                    </a>
                                <ul>
                                    <li><a href="{{ route('frontend.bidan') }}"
                                        class="{{ $isActive('bidan') }}">Bidan</a></li>
                                    <li><a href="{{ route('frontend.perawat') }}"
                                        class="{{ $isActive('perawat') }}">Perawat</a></li>
                                    <li><a href="{{ route('frontend.marketing') }}"
                                        class="{{ $isActive('marketing') }}">Marketing</a></li>
                                    <li><a href="{{ route('frontend.adminpendaftaran') }}"
                                        class="{{ $isActive('adminpendaftaran') }}">Admin Pendaftaran</a></li>
                                    <li><a href="{{ route('frontend.ttk') }}"
                                        class="{{ $isActive('ttk') }}">Tenaga Teknis Kefarmasian</a></li>
                                    <li><a href="{{ route('frontend.analiskesehatan') }}"
                                        class="{{ $isActive('analiskesehatan') }}">Analis Kesehatan</a></li>
                                    <li><a href="{{ route('frontend.tata_boga') }}"
                                        class="{{ $isActive('tata_boga') }}">Tata Boga</a></li>    
                                </ul>
                            <li><a href="#">Mitra Kami</a></li>
                        </ul>
                        <li class="dropdown">
                        <a href="#" class="{{ $isActive($edukasi) }}">
                            <span>Artikel</span> <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Informasi Kesehatan</span><i
                                    class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                                <li class="dropdown"><a href="#"><span>Leaflet & Poster</span><i
                                    class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            <!-- <li><a href="#">Edukasi 3</a></li>
                            <li><a href="#">Edukasi 4</a></li> -->
                        </ul>

                    {{-- <li><a class="nav-link scrollto" href="#">Cara Daftar Online</a></li> --}}

                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li class="inline-block md:inline-block lg:hidden mt-2 ml-3 md:-ml-2">
                        <a href="{{ route('frontend.register_pasien') }}" class="appointment-btn text-white px-3 py-2">
                            <span class="text-center">Pendaftaran Online</span>
                        </a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="{{ route('frontend.register_pasien') }}"
                class="appointment-btn scrollto hidden md:hidden lg:inline-block">
                Pendaftaran Online
            </a>
        </div>
    </header>
</div>
