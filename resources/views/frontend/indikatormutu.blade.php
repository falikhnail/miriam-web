@extends('frontend.layouts.app')

@section('title')
    Informasi Lowongan Pekerjaan - PDF
@endsection

@section('content')
    <div class="d-flex flex-column mx-[0.75rem] md:mx-[3rem] bg-white">
        <div class="container-sm container-md">
            <div class="container-sm container-md my-5">
                <center><h2 class="fw-bold fs-2">Indikator Mutu Nasional 2023</h2></center></div>

            <div class="my-5 d-flex justify-content-center">
                <iframe src="https://drive.google.com/file/d/14YXeO8AWNtGvYOmXCtS9P56KMr8LIz7v/preview" width="1000" height="720" allow="autoplay"></iframe>
            </div>
        </div>
    </div>
@endsection