@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="d-flex flex-column mx-[0.75rem] md:mx-[3rem] bg-white">
        <div class="container-sm container-md">
            <div class="container-sm container-md my-5">
                <center><h2 class="fw-bold fs-2">Informasi Lowongan Pekerjaan</h2></center></div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/karir/bidan-s1.jpeg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/karir/bidan-d3.jpeg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/karir/perawat.jpeg') }}" alt="">
            </div>
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/karir/marketing.jpeg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
