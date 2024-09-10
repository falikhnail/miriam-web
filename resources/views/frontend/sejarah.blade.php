@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="card shadow rounded-lg d-flex flex-column mx-[0.75rem] md:mx-[3rem] my-5 bg-white">
        <div class="">
            <div class="container-sm container-md">
                    <h1 class="fw-bold fs-1 d-flex align-items-center justify-content-center mt-3 mb-5">Profile dan Sejarah RSIA Miriam</h1>
                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <img src="{{ asset('images/DSCF9349.jpg') }}" alt="RSIA Ibu dan Anak MIRIAM" class="logo-rsia-lg" style="width: 50%; height: auto;" >
                </div>    
                <div class="container-sm container-md my-5">
                    {{-- <h2 class="fw-bold fs-3">Visi</h2> --}}
                    <div class="px-2 px-md-3 mt-3">
                        <p class="" style="font-size: 20px; text-indent: 50px;">
                            Rumah Sakit Ibu dan Anak (RSIA) Miriam adalah salah satu karya sosial yang didirikan oleh Para Suster Penyelenggaraan 
                            Ilahi di bawah naungan Yayasan Sosial Eduard Michelis, yang berpusat di Semarang. Klinik ini awalnya didirikan pada 
                            tahun 1954 oleh masyarakat Tionghoa di Kudus dengan nama Tjunghoa-Tjunghwe (CHTH) dan terletak di Jalan A. Yani 58, Kudus. 
                            Awalnya, klinik ini berfungsi sebagai balai pengobatan dan rumah bersalin, yang didirikan untuk melayani masyarakat kecil, 
                            terutama buruh pabrik. 
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
                            Seiring perkembangan waktu, pada tahun 1969, klinik ini berganti nama menjadi Rumah Bersalin-Balai Pengobatan (RB/BP) Miriam. 
                            Pada 10 Maret 2015, klinik ini kembali berganti nama menjadi Klinik Pratama Miriam. 
                            Perubahan lebih lanjut terjadi ketika RSIA Miriam berkembang menjadi rumah sakit, menanggapi perubahan regulasi dan perkembangan zaman.
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
                            Dengan lebih dari 64 tahun pelayanan, RSIA Miriam terus melayani masyarakat di Kudus dengan sepenuh hati. Fokus 
                            pelayanan rumah sakit ini adalah golongan menengah ke bawah, terutama yang kecil, lemah, 
                            dan kurang mampu. Berbagai layanan kesehatan yang disediakan meliputi pijat bayi, rawat jalan dengan beberapa spesialisasi, 
                            rawat inap, serta layanan kesehatan lainnya.
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
                            Selain memberikan layanan kuratif dan rehabilitatif, RSIA Miriam juga mengedepankan pelayanan promotif dan preventif, 
                            untuk memastikan bahwa masyarakat menerima perawatan kesehatan yang holistik dan menyeluruh. Rumah sakit ini berkomitmen 
                            untuk memberikan pelayanan yang terbaik sesuai dengan peraturan yang berlaku, sambil tetap menjaga keseimbangan kepentingan masyarakat di sekitarnya.
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
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
