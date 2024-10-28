@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="card shadow rounded-lg d-flex flex-column mx-[0.75rem] md:mx-[3rem] my-5 bg-white">
        <div class="container-sm container-md">
            {{-- <div class="mt-3 mb-5">
                <h1 class="fw-bold fs-1">Pelayanan RSIA</h1>
            </div> --}}
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/jadwal-dokter/dr.tezzaupdate.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
