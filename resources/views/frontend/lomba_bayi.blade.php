@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
<section id="gallery" class="gallery">
    <div class="container">

        <div class="section-title">
            <h2>Gallery</h2>
            <p></p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="assets/img/berjalan/01.JPG" class="galelry-lightbox">
                        <img src="assets/img/berjalan/01.JPG" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
