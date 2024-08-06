@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="card shadow rounded-lg d-flex flex-column mx-[0.75rem] md:mx-[3rem] my-5 bg-white">
        <div class="">
            <div class="container-sm container-md">
                    <h1 class="fw-bold fs-1 d-flex align-items-center justify-content-center mt-3 mb-5">Sejarah RSIA Miriam</h1>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/DSCF9349.JPG') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg" style="width: 50%; height: auto;" >
                </div>    
                <div class="container-sm container-md my-5">
                    {{-- <h2 class="fw-bold fs-3">Visi</h2> --}}
                    <div class="px-2 px-md-3 mt-3">
                        <p class="" style="font-size: 20px; text-indent: 50px;">
                            Rumah Sakit Ibu dan Anak Miriam merupakan salah satu karya sosial Para Suster Penyelenggaraan
                            Ilahi di bawah naungan Yayasan Sosial Eduard Michelis yang berpusat di Semarang. Klinik ini merupakan 
                            pelimpahan dari masyarakat Tionghoa di Kudus yang didirikan tahun 1954 dengan nama Tjunghoa-Tjunghwe (CHTH)
                            di jalan A. Yani 58, Kudus. Tujuan Klinik yang semula Balai Pengobatan dan Rumah Bersalin ini didirikan untuk  melayani orang-orang kecil dan miskin,
                            khususnya para buruh pabrik. 
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/Picture1.png') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg" style="width: 50%; height: auto;" >
                </div>    
                <div class="container-sm container-md my-5">
                    {{-- <h2 class="fw-bold fs-3">Visi</h2> --}}
                    <div class="px-2 px-md-3 mt-3">
                        <p class="" style="font-size: 20px;">
                            Pada tahun 1969 Balai Pengobatan dan Rumah Bersalin CHTH tersebut berubah nama menjadi Rumah Bersalin - 
                            Balai Pengobatan (RB/BP) Miriam, dan kemudian pada 10 Maret 2015, RB/BP Miriam Berubah nama menjadi Klinik Pratama Miriam. Seiring 
                            perkembangan jaman dan perubahan peraturan pemerintah Balai Pengobatan dan Bersalin Miriam ini berubah nama Menjadi Rumah Sakit Ibu dan Anak Miriam
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/Picture4.jpg') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg" style="width: 50%; height: auto;" >
                </div>    
                <div class="container-sm container-md my-5">
                    {{-- <h2 class="fw-bold fs-3">Visi</h2> --}}
                    <div class="px-2 px-md-3 mt-3">
                        <p class="" style="font-size: 20px; text-indent: 50px;">
                            Telah lebih dari 64 tahun Rumah Sakit Ibu dan Anak Miriam melayani masyarakat di Kudus dengan sepenuh hati, dengan pelayanan yang ramah dan memuaskan 
                            masyarakat Kudus. Sebagian besar orang-orang yang dilayani adalah dari golongan menengah ke bawah : yang kecil, lemah dan miskin. 
                            Untuk menanggapi kebutuhan masyarakat yang terus berkembang, Rumah Sakit Ibu dan Anak Miriam mengembangkan layanan pijat bayi, rawat jalan dengan beberapa 
                            polis spesialis, rawat inap dan Pelayanan Kesehatan lainnya.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/Picture9.jpg') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg" style="width: 50%; height: auto;" >
                </div>    
                <div class="container-sm container-md my-5">
                    {{-- <h2 class="fw-bold fs-3">Visi</h2> --}}
                    <div class="px-2 px-md-3 mt-3">
                        <p class="" style="font-size: 20px; text-indent: 50px;">
                            Dalam kegiatan pelayanan kesehatan selaian memberikan pelayanan kuratif dan rehabilitatif kami tidak melupakan juga memberikan pelayanan promotif dan preventif di 
                            bidang kesehatan, memastikan masyarakat medapatkan pelayanan yang menyeluruh.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/Picture8.jpg') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg" style="width: 50%; height: auto;" >
                </div>    
                <div class="container-sm container-md my-5">
                    {{-- <h2 class="fw-bold fs-3">Visi</h2> --}}
                    <div class="px-2 px-md-3 mt-3">
                        <p class="" style="font-size: 20px; text-indent: 50px;">
                            Mengingat kegiatan pelayanan kesehatan meningkat, maka kami mempunyai kewajiban untuk melaksanakan pelayanan sebaik-baiknya sesuai peraturan yang berlaku dengan tidak 
                            meninggalkan norma dan keseimbangan kepentingan masyarakat sekitar lokasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
