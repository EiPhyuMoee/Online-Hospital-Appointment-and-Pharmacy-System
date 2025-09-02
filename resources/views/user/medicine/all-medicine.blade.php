@extends('user.master')
@section('title')
    All Medicines
@endsection

@section('content')
    <div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/medicine.jpg') }}');">
        <div class="hero-section py-5">
            <div class="container text-center wow zoomIn">
                <span class="subhead text-white fs-4 d-block mb-2">We Care About Your Health</span>
                <h1 class="display-4 text-white fw-bold">Buy Medicines</h1>
            </div>
        </div>
    </div>
    {{-- Medicine Listing --}}
    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {{-- <h2 style="color: #818886;font-weight: 500;font-size: 30px;" class="text-center mt-1 mb-2">Available Medicines</h2> --}}
                    <div class="row">
                        @foreach ($medicine as $med)
                            <div class="col-md-4 col-lg-4 py-3 wow zoomIn">
                                <div class="card-doctor shadow-sm border-0 rounded-4 overflow-hidden">
                                    <div class="header position-relative" style="height: 220px; overflow: hidden;">
                                        <img src="{{ $med->image }}" alt="Blog Image" class="img-fluid w-100 h-100"
                                            style="object-fit: cover;">
                                    </div>
                                    <div class="body p-3 text-center">
                                        <h5 class="fw-semibold mb-1">
                                            <a href="{{ route('blog-details', ['id' => $med->id]) }}"
                                                class="text-decoration-none text-dark">
                                                {{ $med->name }}
                                            </a>
                                        </h5>
                                        <p class="text-muted mb-3">Price: <strong>{{ $med->price }} MMK</strong></p>
                                        <form action="{{ route('add-medicice', $med->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            <input type="submit" class="btn btn-gradient rounded-pill px-5 py-2 fw-bold"
                                                value="Add to Cart">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
