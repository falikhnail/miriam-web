@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="d-flex flex-column mx-[0.75rem] md:mx-[3rem] bg-white">
        <div class="container-sm container-md">
            {{-- <div class="container-sm container-md my-5">
                <center><h1 class="fw-bold fs-2">Jadawal dr. Yudi Indarto, Sp.OG</h1></center>
            </div> --}}
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/jadwal-dokter/drg-yudi-update1.jpeg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
