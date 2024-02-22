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
                <div class="container-sm container-md my-5 text-center">
                    <h2 class="fw-bold fs-3 mx-auto">HAK PASIEN</h2>
                    <div class="px-2 px-md-3 mt-3">
                        <p class="">
                            Menjadi RSIA pilihan utama dengan pelayanan yang berkualitas dan penuh kasih di Kudus dan
                            sekitarnya
                        </p>
                    </div>
                </div>
                <div class="container-sm container-md my-5">
                    <h2 class="fw-bold fs-3">Misi</h2>
                    <div class="px-2 px-md-3 mt-3">
                        <p class="">
                            Memberikan pelayanan kesehatan bagi masyarakat dengan penuh kasih dan bersahabat khususnya ibu
                            dan
                            anak
                        </p>
                    </div>
                </div>
                <div class="container-sm container-md my-5">
                    <h2 class="fw-bold fs-3">Motto</h2>
                    <div class="px-2 px-md-3 mt-3">
                        <p class="">
                            <span class="text-pink">To Love</span>,
                            <span class="text-primary">To Care</span>,
                            <span class="text-pink">To Share</span>
                        </p>
                    </div>
                </div>
                <div class="container-sm container-md my-5">
                    <h2 class="fw-bold fs-3">Nilai YSEM</h2>
                    <div class="px-2 px-md-3 mt-3">
                        <ol class="ol-numbered">
                            <li class="ol-item">
                                Beriman pada penyelenggaraan Ilahi
                            </li>
                            <li class="ol-item">
                                Murah hati
                            </li>
                            <li class="ol-item">
                                Siap Sedia
                            </li>
                            <li class="ol-item">
                                Memanusiakan Manusia
                            </li>
                            <li class="ol-item">
                                Terbuka pada siapapun
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
