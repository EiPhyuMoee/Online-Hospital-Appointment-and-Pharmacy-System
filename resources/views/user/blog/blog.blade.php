@extends('user.master')
@section('title')
    Blog
@endsection

@section('content')
   <div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('assets')}}/img/bg_image_2.jpg);">
    <div class="hero-section py-5">
        <div class="container text-center wow zoomIn">
            <span class="subhead text-white fs-4 d-block mb-2">We Care About Your Health</span>
            <h1 class="display-4 text-white fw-bold">Latest News</h1>
        </div>
    </div>
</div>

    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 style="color: #818886;font-weight: 500;font-size: 30px;" class="text-center mt-1 mb-2">Blog Details</h2>

                    <div class="row">


                        @foreach($blog as $blogs)
    <div class="col-md-4 col-lg-4 py-3 wow zoomIn">
        <div class="card-doctor shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="header position-relative" style="height: 220px; overflow: hidden;">
                <img src="{{ $blogs->image }}"
                     alt="Blog Image"
                     class="img-fluid w-100 h-100"
                     style="object-fit: cover;">
            </div>
            <div class="body p-3 text-center">
                <h5 class="fw-semibold mb-1">
                    <a href="{{ route('blog-details', ['id' => $blogs->id]) }}"
                       class="text-decoration-none text-dark">
                       {{ $blogs->title }}
                    </a>
                </h5>
            <span class="text-muted small">{{ \Carbon\Carbon::parse($blogs->date)->format('d-m-Y') }}</span>

            </div>
        </div>
    </div>
@endforeach


                    </div>

                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

@endsection
