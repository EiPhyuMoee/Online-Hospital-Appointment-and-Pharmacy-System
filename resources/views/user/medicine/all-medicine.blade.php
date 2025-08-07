@extends('user.master')
@section('title')
    All Medicines
@endsection

@section('content')
    <div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/medicines bg.png') }}');">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Buy Medicines</h1>
            </div>
        </div>
    </div>

    {{-- Medicine Listing --}}
    <section class="medicine-section py-5"
        style="background-image: url('{{ asset('images/medicine-bg.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="text-black fw-bold" style="font-size: 25px; font-weight: 600; color: #7b8985;">Available
                        Medicines</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($medicine as $med)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-lg border-0 rounded-4">
                            <h5><a href="{{ route('medi-details', ['id' => $med->id]) }}">{{ $med->name }}</a></h5>
                            <img src="{{ asset($med->image) }}" class="card-img-top rounded-top-4" alt="{{ $med->name }}"
                                style="height: 250px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold">{{ $med->name }}</h5>
                                <p class="text-muted mb-2">Price: <strong>{{ $med->price }} MMK</strong></p>
                                <form action="{{ route('add-medicice', $med->id) }}" method="POST" id="add-to-cart-form">
                                    @csrf
                                    <input type="submit" class="btn btn-primary rounded-pill px-4" value="Add to Cart"
                                        style="background-color: #00D9A5; border: none;">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
