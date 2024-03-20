@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="card shadow rounded-lg d-flex flex-column mx-[0.75rem] md:mx-[3rem] my-5 bg-white">
        <div class="">
            <div class="container-sm container-md">
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/rsia.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg">
                </div>
                {{-- <h1 class="fw-bold fs-1">Visi & Misi RSIA</h1> --}}
                <div class="container-sm container-md my-5">
                    <center><h2 class="fw-bold fs-2">HAK PASIEN</h2></center>
                    <div class="px-2 px-md-3 mt-7">
                        <ol class="ol-numbered">
                            <li class="ol-item">
                                Memperoleh informasi mengenai tata tertib & peraturan yang berlaku di RS
                            </li>
                            <li class="ol-item">
                                Memperoleh informasi tentang hak dan kewajiban
                            </li>
                            <li class="ol-item">
                                Memperoleh layanan yang manusiawi, adil, jujur, dan tanpa diskriminasi
                            </li>
                            <li class="ol-item">
                                Memperoleh layanan kesehatan yang bermutu sesuai dengan standar profesi dan standar prosedur operasional
                            </li>
                            <li class="ol-item">
                                Memperoleh layanan yang efektif & efisien sehingga pasien terhindar dari kerugian fisik & materi
                            </li>
                            <li class="ol-item">
                                Mengajukan pengaduan atas kualitas pelayanan yang didapatkannya
                            </li>
                            <li class="ol-item">
                                Memilih dokter dan kelas perawatan sesuai dengan keinginannya dan peraturan yang berlaku di RS
                            </li>
                            <li class="ol-item">
                                Meminta konsultasi tentang penyakit yang diderita pasien ke dokter lain yang mempunyai SIP baik di dalam maupun di luar RS
                            </li>
                            <li class="ol-item">
                                Mendapatkan privasi & kerahasiaan penyakit yang diderita termasuk data-data medisnya
                            </li>
                            <li class="ol-item">
                                Memberikan persetujuan atau menolak atas tindakan yang akan dilakukan oleh tenaga kesehatan terhadap penyakit yang dideritanya
                            </li>
                            <li class="ol-item">
                                Mendapatkan informasi yang meliputi diagnosis & tata cara tindakan medis, tujuan tindakan medis, alternatif tindakan, risiko & komplikasi yang mungkin terjadi, & prognosis terhadap findakan yang dilakukan serta biaya perkiraan pengobatan
                            </li>
                            <li class="ol-item">
                                Didampingi keluarganya dalam keadaan kritis
                            </li>
                            <li class="ol-item">
                                Menjalankan ibadah sesuai agama atau kepercayaan yang dianutnya selama itu tidak menggangu pasien lainnya.
                            </li>
                            <li class="ol-item">
                                Memperoleh keamanan & keselamatan diringa selama dalam perawatan di RS Mengajukan usul, saran, perbaikan alas perlakuan RS terhadap dirinya.
                            </li>
                            <li class="ol-item">
                                Menolak pelayanan bimbingan rohani yang tidak sesuai dengan agama & kepercayaan yang dianutnya
                            </li>
                            <li class="ol-item">
                                Menggungat dan/atau menuntut RS apabila RS diduga memberikan pelayanan yang tidak sesuai standar baik secara perdata ataupun pidana
                            </li>
                            <li class="ol-item">
                                Mengeluhkan pelayanan RS yang tidak sesuai dengan standar pelayanan melalui media cetak dan elektronik sesuai dengan ketentuan peraturan perundang- undangan. (Menurut UU No. 44 Tahun 2009 tentang Rumah Sakit pasal 32)
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="container-sm container-md my-5">
                    <center><h2 class="fw-bold fs-2">KEWAJIBAN PASIEN</h2></center>
                    <div class="px-2 px-md-3 mt-7">
                        <ol class="ol-numbered">
                            <li class="ol-item">
                                Mematuhi peraturan yang berlaku di RS
                            </li>
                            <li class="ol-item">
                                Menggunakan fasilitas RS secara bertanggung jawab
                            </li>
                            <li class="ol-item">
                                Menghormati hak-hak pasien lain, pengunjung & hak Tenaga Kesehatan serta petugas lainnya yang bekerja di RS
                            </li>
                            <li class="ol-item">
                                Memberikan informasi yang jujur, lengkap & akurat sesuai kemampuan & pengetahuannya tentang masalah kesehatannya
                            </li>
                            <li class="ol-item">
                                Memberikan informasi mengenai kemampuan finansial dan jaminan kesehatan lainnya
                            </li>
                            <li class="ol-item">
                                Mematuhi rencana terapi yang direkomendasikan oleh Tenaga Kesehatan di RS & disetujui oleh pasien yang bersangkutan setelah mendapatkan penjelasan sesuai ketentuan peraturan perundangan
                            </li>
                            <li class="ol-item">
                                Menerima segala konsekuensi atas keputusan pribadinya untuk menolak rencana terapi yang direkomendasikan oleh Tenaga Kesehatan dan/atau tidak mematuhi petunjuk yang diberikan oleh Tenaga 
                                Kesehatan dalam rangka penyembuhan penyakit atau masalah kesehatannya dan
                            </li>
                            <li class="ol-item">
                                Memberikan imbalan jasa atas pelayanan yang diterima. (Menurut Permenkes nomor 69 tahun 
                                2014 tentang Kewajiban Rumah Sakit dan Kewajiban Pasien
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
