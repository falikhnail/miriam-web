@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="d-flex flex-column mx-[0.75rem] md:mx-[3rem] bg-white">
        <div class="container-sm container-md">
            <div class="my-5 d-flex justify-content-center">
                <img src="{{ asset('images/pelayanan/radiologi-rontgen-1.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
