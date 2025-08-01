@extends('user.master')
@section('title')
    About Us
@endsection

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session()->get('error') }}
    </div>
@endif

{{-- Hero Section --}}
<div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('assets')}}/img/bg_image_2.jpg);">
    <div class="hero-section py-5">
        <div class="container text-center wow zoomIn">
            <span class="subhead text-white fs-4 d-block mb-2">We Care About Your Health</span>
            <h1 class="display-4 text-white fw-bold">About Us</h1>
        </div>
    </div>
</div>

{{-- About Section --}}
<section class="page-section bg-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft">
                <img src="{{asset('assets')}}/img/hs.png" alt="Welcome Image" class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <h2 class="fw-bold mb-3">Our Hospital History</h2>
                <p class="text-muted mb-4 fs-5">Our hospital is a place where you can receive healthcare services with complete trust and confidence.</p>
                 <ul class="list-unstyled text-muted fs-5 mb-4">
                    <li><strong>Established Year:</strong> 1995</li>
                    <li><strong>Medical Superintendent:</strong> Dr. Aung Kyaw Moe</li>
                    <li><strong>Location:</strong> No. 123, Myothit Street, South Okkalapa, Yangon</li>
                </ul>
                <p class="text-muted mt-3">Take charge of your health — start your journey with us today.</p>
                {{-- <a href="{{route('about')}}" class="btn btn-primary mt-3 px-4 py-2 rounded-pill">Learn More</a> --}}
            </div>
        </div>
    </div>
</section>

{{-- Doctor Section --}}
{{-- Doctor Section --}}
<section class="page-section bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 wow fadeInUp">Meet Our Doctors</h2>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctor as $doctors)
            <div class="item">
                <div class="card-doctor bg-white shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="header position-relative">
                        <img src="{{ $doctors->image }}" alt="Doctor Image" class="img-fluid doctor-img w-100" style="height:300px; object-fit:cover;">
                    </div>
                    <div class="body text-center py-3 px-2">
                        <h5 class="mb-1 fw-semibold">
                            <a href="{{ route('doctor-details', ['id' => $doctors->id]) }}" class="text-decoration-none text-dark">
                                {{ $doctors->name }}
                            </a>
                        </h5>
                        <p class="text-muted mb-1">{{ $doctors->speciality }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Medical Camp Gallery Section --}}
<section class="page-section py-5 bg-white">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 wow fadeInUp">Our Medical Camp</h2>
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-gallery mb-3">
                            <div class="gallery-img big-img rounded-4 shadow-sm" style="background-image: url('{{ asset('assets/img/camp1.png') }}'); height: 300px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-gallery mb-3">
                            <div class="gallery-img small-img rounded-4 shadow-sm" style="background-image: url('{{ asset('assets/img/camp2.png') }}'); height: 140px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-gallery mb-3">
                            <div class="gallery-img small-img rounded-4 shadow-sm" style="background-image: url('{{ asset('assets/img/camp3.png') }}'); height: 140px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <div class="single-gallery mb-3">
                            <div class="gallery-img small-img rounded-4 shadow-sm" style="background-image: url('{{ asset('assets/img/camp4.png') }}'); height: 140px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-gallery mb-3">
                            <div class="gallery-img small-img rounded-4 shadow-sm" style="background-image: url('{{ asset('assets/img/camp6.png') }}'); height: 140px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-gallery mb-3">
                            <div class="gallery-img big-img rounded-4 shadow-sm" style="background-image: url('{{ asset('assets/img/camp5.png') }}'); height: 300px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function(){
        $('#doctorSlideshow').owlCarousel({
            items: 3,
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: true,
            nav: false,
            responsive:{
                0:{ items:1 },
                768:{ items:2 },
                992:{ items:3 }
            }
        });
    });
</script>

@endsection
