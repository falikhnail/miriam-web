@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            {{-- <h1>Selamat datang di</h1>
            <h1> <span class="text-pink">RSIA</span> </h1>
            <h1> <span style="color: #006de9;">Miriam</span> </h1>
            <h2> <span class="text-white">To Love, To Care, To Share</span> </h2>
            <a href="#about" class="btn-get-started scrollto">Mulai</a> --}}
        </div>
    </section><!-- End Hero -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Kenapa Memilih RSIA MIRIAM ?</h3>
                        <p>
                            Karena RSIA Miriam merupakan salah satu RSIA yang terbaik di kota Kudus dengan spesialisasi
                            perawatan ibu dan anak seperti persalinan, perawatan bayi dan anak, konsultasi kehamilan dan
                            didukung oleh dokter-dokter spesialis obgyn dan pediatrik yang kompeten dan berpengalaman.
                            Juga dilengkapi dengan fasilitas dan peralatan medis yang canggih dan modern serta
                            tenaga medis yang handal.
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Pelajari lebih lanjut<i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-6 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Instalasi Gawat Darurat</h4>
                                    <!-- <p>..............</p> -->
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-6 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Instalasi Radiologi</h4>
                                    <!-- <p>................</p> -->
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-6 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Instalasi Laboratorium</h4>
                                    <!-- <p>...................</p> -->
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div> --}}
            </div>

        </div>
    </section><!-- End Why Us Section -->

<!-- Include Bootstrap CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<!-- ======= Pelayanan Unggulan ======= -->
<section id="unggulan" class="unggulan">
    <div class="container">
        <div class="section-title text-center">
            <h2>Pelayanan Unggulan</h2>
            <p></p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center g-10">
            <div class="col-lg-3 col-md-4 d-flex justify-content-center">
                <div class="gallery-item position-relative">
                    {{-- <a href="assets/img/meternity.png" class="galelry-lightbox"> --}}
                        <img src="assets/img/meternity.png" alt="" class="img-fluid" style="width: 300px; height: auto;">
                        <h1 class="text-center position-absolute w-100" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold; font-size: 42px; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">MATERNITY</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-flex justify-content-center">
                <div class="gallery-item position-relative">
                    {{-- <a href="assets/img/Pediatri.png" class="galelry-lightbox"> --}}
                        <img src="assets/img/Pediatri.png" alt="" class="img-fluid" style="width: 300px; height: auto;">
                        <h1 class="text-center position-absolute w-100" style="top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold; font-size: 42px; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">PEDIATRI</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pelayanan unggulan -->

<!-- ======= Infomarsi ======= -->
<section id="unggulan" class="unggulan">
    <div class="container">
        <div class="section-title text-center">
            <h2>Informasi</h2>
            <p></p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center g-10">
            <div class="col-lg-3 col-md-4 d-flex justify-content-center">
                <div class="gallery-item position-relative">
                    {{-- <a href="assets/img/meternity.png" class="galelry-lightbox"> --}}
                        <img src="assets/img/info/dr.destar.jpg" alt="" class="img-fluid" style="width: 300px; height: auto;">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-flex justify-content-center">
                <div class="gallery-item position-relative">
                    {{-- <a href="assets/img/meternity.png" class="galelry-lightbox"> --}}
                        <img src="assets/img/info/dr.albert.jpg" alt="" class="img-fluid" style="width: 300px; height: auto;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Informasi -->

    <section id="departments" class="departments">
        <div class="container">

            <div class="section-title">
                <h2>Instalasi</h2>
                <!-- <p>...........</p> -->
            </div>

            <div class="row gy-4">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Meternity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Pediatri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Laboratorium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">IGD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Radiologi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-6">BKIA</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Meternity</h3>
                                    <p class="fst-italic"></p>
                                    <p>Melayani pemeriksaan ibu hamil dan janin, USG untuk ibu hamil,
                                        konsultasi gizi ibu hamil, konsultasi pra dan pasca melahirkan,
                                        perawatan pasca operasi sesar. Dilayani oleh dr. Ferry Santoso, Sp.OG, M.Biomed &
                                        dr. Yudi Indarto, Sp.OG
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/meternity.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Pediatri</h3>
                                    <p class="fst-italic">
                                    </p>
                                    <p>Melayani pemeriksaan kesehatan fisik serta perkembangan
                                        tumbuh kembang anak mulai dari usia anak 0–18 tahun, dilayani oleh Dokter Spesialis
                                        Anak : dr. Tezza Dinayanti, Sp.A</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/Pediatri.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Laboratorium</h3>
                                    <p class="fst-italic"></p>
                                    <p>Melayani pemeriksaan kesehatan dengan menggunakan sampel darah, urine,
                                        atau jaringan tubuh oleh ahli medis untuk melihat apakah hasil pemeriksaan berada
                                        dalam kisaran normal. </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/Laboratorium.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>IGD</h3>
                                    <p class="fst-italic"></p>
                                    <p>IGD (Instalasi Gawat Darurat) menyediakan penanganan awal pasien, sesuai dengan
                                        tingkat kegawatannya.
                                        IGD juga melayani pemeriksaan kesehatan untuk umum (tidak hanya ibu hamil dan
                                        anak-anak).
                                        Di IGD dilayani oleh Dokter Umum dr. Sri Uminingsih</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/IGD.JPG" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Radiologi</h3>
                                    <p class="fst-italic"></p>
                                    <p>Melayani pemeriksaaan bagian dalam tubuh manusia dengan menggunakan teknologi
                                        pencitraan,
                                        baik gelombang elektromagnetik maupun gelombang mekanik.
                                        Untuk Pelayanan Radiologi dilayani oleh dr. Michael A. Leuwol, Sp.Rad</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/rad.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-6">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>BKIA</h3>
                                    <p class="fst-italic">
                                    </p>
                                    <p>Melayani Konsultasi KB untuk ibu, Cukur Bayi Usia 1-3 bulan,
                                        Pijat Untuk Bayi usia 1-12 bulan, dan Tindik untuk Bayi dan Dewasa.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/bkia.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">

            <div class="section-title">
                <h2>Dokter</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                                                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                                                    fugiat sit
                                                    in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row">

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/dr.ummi.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>dr. Sri Uminingsih</h4>
                            <span>Dokter Umum</span>
                            <p>"Melayani kegawatdaruratan, konsultasi, rawat luka, nebulizer, dan sebagainya di IGD RSIA Miriamn 24 jam."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/dr.tezza.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>dr. Tezza Dinayanti, Sp.A</h4>
                            <span>Dokter Spesialis Anak</span>
                            <p>"Melayani imunisasi/vaksinasi dasar dan tambahan (sesuai dengan jadwal dari IDAI) , melayani test mantoux, dan lain sebagainya."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/dr.yudii.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>dr. Yudi Indarto, Sp.OG</h4>
                            <span>Dokter Spesialis Kebidanan dan Kandungan</span>
                            <p>"Melayani ANC kehamilan, USG 2 dimensi, USG 4 dimensi, USG transvaginal, konsultasi kesehatan reproduksi dan program hamil."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/dr.fery.jpg" class="img-fluid" alt="" width="100%" height="auto">
                        </div>
                        <div class="member-info">
                            <h4>dr. Ferry S. , Sp.OG, M. Biomed</h4>
                            <span>Dokter Spesialis Kebidanan dan Kandungan</span>
                            <p>"Melayani ANC kehamilan, USG 2 dimensi, USG 4 dimensi, USG transvaginal, konsultasi kesehatan reproduksi dan program hamil."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/drg.vera.jpg" class="img-fluid" alt="" width="100%" height="auto">
                        </div>
                        <div class="member-info">
                            <h4>drg. Vera Sentosa</h4>
                            <span>Dokter Gigi</span>
                            <p>"Melayani konsultasi kesehatan gigi dan mulut anak dan dewasa, tindakan cabut gigi, tambal gigi, pembersihan karang gigi, veneer, dan lain sebagainya."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/drg.cindy.jpg" class="img-fluid" alt="" width="100%" height="auto">
                        </div>
                        <div class="member-info">
                            <h4>drg. Cindy Natalia A.</h4>
                            <span>Dokter Gigi</span>
                            <p>"Melayani konsultasi kesehatan gigi dan mulut anak dan dewasa, tindakan cabut gigi, tambal gigi, pembersihan karang gigi, veneer, dan lain sebagainya."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mt-4 mt-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/dr.destar.jpg" class="img-fluid" alt="" width="100%" height="auto">
                        </div>
                        <div class="member-info">
                            <h4>dr. Destar Aditya Yusuf Sp. THT-BKL</h4>
                            <span>Dokter Spesialis THT</span>
                            <p>"Melayani konsultasi penyakit yang berkaitan dengan telinga, hidung dan tenggorokan. Irigasi telinga, pemeriksaan THT dan lagi sebagainya."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-3">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/cowo3.png" class="img-fluid" alt="" width="100%" height="auto">
                        </div>
                        <div class="member-info">
                            <h4>dr. Michael A. Leuwol, Sp.Rad</h4>
                            <span>Dokter Spesialis Radiology</span>
                            <p>"Melayani USG abdomen, mammae, massa, dll sesuai dengan surat pengantar USG dari dokter yang merekomendasikan."</p>
                            <!-- <div class="social">
                                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Pertanyaan Yang Sering Diajukan</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                                                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                                                        fugiat sit
                                                        in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" href="#faq-list-1"
                            aria-expanded="false" aria-controls="faq-list-1">
                            Di Miriam ada layanan apa saja yg tersedia untuk ibu hamil dan melahirkan ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-1" class="!visible hidden" data-te-collapse-item>
                            <p> Kami menyediakan layanan antenatal yang komprehensif, termasuk konsultasi
                                prenatal,
                                pemantauan kehamilan, dan penanganan masalah kesehatan ibu hamil.
                                Program ini juga mencakup kelas persiapan persalinan dan dukungan nutrisi khusus untuk ibu
                                hamil.
                                Rumah Sakit kami memiliki fasilitas persalinan yang modern dan menyediakan perawatan pasca
                                persalinan yang
                                lengkap untuk memastikan kenyamanan dan pemulihan yang optimal bagi ibu setelah melahirkan.
                            </p>
                            {{-- <p> untuk saat ini RSIA Miriam sudah terakreditasi dengan bintang 5 dan sudah tersedia
                                pelayanan
                                yang menggunakan.
                                BPJS.
                            </p> --}}
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-2" href="#faq-list-2">
                            Fasilitas yang tersedia di RSIA Miriam apa ya ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-2" class="!visible hidden" data-te-collapse-item>
                            <p>Rumah Sakit kami memiliki fasilitas persalinan yang modern dan menyediakan
                                perawatan pasca persalinan yang
                                lengkap untuk memastikan kenyamanan dan pemulihan yang optimal bagi ibu setelah melahirkan
                                dan
                                kami menawarkan berbagai layanan pediatrik mulai dari perawatan bayi baru lahir, termasuk
                                konsultasi rutin,
                                vaksinasi, perawatan penyakit umum, serta penanganan kondisi khusus anak, USG, Fasilitas
                                operasi Caesar yang
                                modern, Radiologi, dokter Gigi dan Rawat Inap
                            </p>
                            <p>Pelayanan Di RSIA Miriam Tidak Hanya Untuk Ibu dan Anak, Sekarang Di RSIA Miriam Juga
                                Terdapat Pelayanan Umum.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-3" href="#faq-list-3">
                            Bagaimana cara akses informasi mengenai vaksin dan jadwalnya ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-3" class="!visible hidden" data-te-collapse-item>
                            <p> mengakses informasi tentang program imunisasi kami melalui situs web dan sosial media kami
                                atau dengan berkonsultasi dengan staf kami untuk jadwal lengkap dan jenis vaksin yang
                                disediakan.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-4" href="#faq-list-4">
                            Bagaimana prosedur pendaftaran jadwal untuk konsultasi ke dokter anak ?
                            <i class="bx bx-chevron-down icon-show"></i>
                            <i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-4" class="!visible hidden" data-te-collapse-item>
                            <p>Pendaftaran poli anak dengan dr Tezza Dinayanti, Sp.A dilayani langsung ketika pasien datang sesuai jadwal praktik
                                Pendaftaran poli anak dilayani mulai satu jam sebelum jam praktik sampai jam praktik selesai
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i>
                        <a data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" aria-expanded="false"
                            aria-controls="faq-list-5" href="#faq-list-5">Bagaimana cara atur kunjungan ke fasilitas RSIA
                            Miriam sebelum melahirkan
                            atau perawatan anak ?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                        </a>
                        <div id="faq-list-5" class="!visible hidden">
                            <p>
                                Anda dapat mengatur fasilitas sebelumnya dengan menghubungi kami melalui nomor
                                layanan pelanggan kami atau mengisi formulir permintaan di situs web kami
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-te-collapse-init data-te-ripple-init
                            data-te-ripple-color="light" aria-expanded="false" aria-controls="faq-list-6"
                            href="#faq-list-6">Apakah tersedia layanan IGD 24 jam ?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-6" class="!visible hidden">
                            <p>
                                Ya, kami memiliki layanan 24jam yang tersedia untuk menangani kondisi darurat medis
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h2>Testimonial</h2>
                <p></p>
            </div>
        </div>
        <div class="container">
            
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/icon-female-6.png" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Ashaki Triasa/Rossa Firdaus</h3>
                                {{-- <h4>Karyawan Swasta</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Setelah 2thn baru kesini lagi, Alhamdullilah pelayanan semakin bagus dan rapi. Jadi satset, kalo kritik dari saya belum ada, soalnya dari tahun kemarin semakin bagus
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/beauty.png" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Ika Pratiwi</h3>
                                {{-- <h4>PNS</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Tempat menunggu yang nyaman dan pelayanan yang ramah
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/woman.png" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Wahyu Rinda Septiana</h3>
                                {{-- <h4>Store Owner</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Alhamdullilah tidak ada kritik apa pun, ramah dan bagus, dokter obgyn nya hamble dan kelas sekali saat menjelaskan ke pasien
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/gir" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Asti</h3>
                                {{-- <h4>Freelancer</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fasilitas dan infrastruktur sudah semakin meningkat, pelayanan secara online mempermudah pasien untuk mendaftar
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Devi Aprilia S.</h3>
                                {{-- <h4>Pengusaha</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Tidak ada, selama berobat dari th 2021 saat hamil dan sekarang berobat/imunisasi untuk anak semuanya sedah baik, pelayanan para perawata dan dokter jg sudah baik
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Wulan</h3>
                                {{-- <h4>Pengusaha</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Untuk kunjungan pertama semua pelayanan bagus dari satpam yang ramah, pendaftaran cepat, nurse ramah
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Megalia</h3>
                                {{-- <h4>Pengusaha</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Dapat ditingkatkan kembli pelayanannya yang sudah bagus, ketepatan waktu dalam kehadiran dokter dan pelayanan dapat ditingkatkan lagi
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt=""> --}}
                                <h3>drg. Tribuana Putri</h3>
                                {{-- <h4>Pengusaha</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Sejauh ini baik dan memuaskan
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Iwan Ashari</h3>
                                {{-- <h4>Pengusaha</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    tetapkan pelayanan yang bagus
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt=""> --}}
                                <h3>Tia Rahmawati</h3>
                                {{-- <h4>Pengusaha</h4> --}}
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    pelayanan sudah bagus, tampat bersih dan nyaman
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-title">
                <h2>Gallery</h2>
                <p></p>
            </div>
        </div>
        <div class="container">
            <div class="gallery-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00606.jpg" class="gallery-lightbox">
                                    <img src="assets/img/gallery/DSC00606.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00838.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00838.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00774.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00774.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC09842.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC09842.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00606.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00606.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC09916.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC09916.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC09924.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC09924.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00614.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00614.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00628.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00628.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00654.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00654.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00664.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00664.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00674.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00674.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00761.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00761.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00882.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00882.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                    <!-- Ulangi blok ini untuk setiap gambar -->
                    <div class="swiper-slide">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <a href="assets/img/gallery/DSC00749.jpg" class="galelry-lightbox">
                                    <img src="assets/img/gallery/DSC00749.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blok ini akan berulang untuk gambar lainnya -->
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p></p>
            </div>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6466202866686!2d110.83782431145596!3d-6.812765993156417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c5ed3de92911%3A0xfc8abbaa3daa3309!2sRSIA%20Miriam%20Kudus!5e0!3m2!1sid!2sid!4v1697766067229!5m2!1sid!2sid"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Jl. Ahmad Yani 58 Kudus Jawa Tengah 59317</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>miriam@rsiamiriam.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telfon:</h4>
                            <p>+62 853-2947-3535</p>
                        </div>

                    </div>

                </div>

                {{-- Kritik Dan Saran --}}
                {{-- <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nama" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                    </form>

                </div> --}}

            </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
