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
                <img src="{{ asset('images/tempattidur/informasi-kamar-update4.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
