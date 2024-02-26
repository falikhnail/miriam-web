@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="d-flex flex-column mx-[0.75rem] md:mx-[3rem] bg-white">
        <div class="container-sm container-md">
            {{-- <div class="mt-3 mb-5">
                <h1 class="fw-bold fs-1">Pelayanan RSIA</h1>
            </div> --}}
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/pelayanan-1.jpg') }}" alt="">
            </div>
            {{-- <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/pelayanan-2.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/pelayanan-3.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/pelayanan-4.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/radiologi-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/usg-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/radiologi-rontgen-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/konsultasi-gizi-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/poli-bkia-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/pijat-bayi-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/cukur-bayi-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/tindik-bayi.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/imunisasi-1.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/imunisasi-2.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/imunisasi-3.jpg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/vaksinasi-1.jpg') }}" alt="">
            </div> --}}
        </div>
    </div>
@endsection
