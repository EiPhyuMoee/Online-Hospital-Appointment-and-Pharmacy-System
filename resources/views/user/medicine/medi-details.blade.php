@extends('user.master')

@section('title', 'Medicine Details')

@section('content')

    {{-- Success Message --}}
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session()->get('message') }}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
        </div>
    @endif


    {{-- Error Message --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <section class="medicine-details my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow rounded">
                        <div class="row g-0">
                            {{-- Medicine Image --}}
                            <div class="col-md-5 text-center p-3">
                                <img src="{{ asset($data->image) }}" alt="Medicine Image" class="img-fluid rounded"
                                    style="max-height: 300px; object-fit: contain;">
                            </div>

                            {{-- Medicine Info --}}
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h2 class="fw-bold">{{ $data->name }}</h2>

                                    <h4 class="text fw-bold">
                                        Price - <small class="text-decoration-line-through text-muted">
                                            {{ number_format($data->price + 200, 2) }} MMK
                                        </small>
                                    </h4>

                                    <p><strong>Pcs:</strong> <span class="fs-4">{{ $data->pcs }}</span></p>
                                    <p><strong>Code:</strong> <span class="fs-4">{{ $data->code }}</span></p>

                                    @if ($data->quantity > 0)
                                        <form action="{{ route('add-medicice', $data->id) }}" method="POST"
                                            id="add-to-cart-form">
                                            @csrf
                                            <div class="d-flex align-items-center mb-3">
                                                <button type="button" class="btn btn-outline-secondary btn-sm me-2"
                                                    id="decrease">-</button>

                                                <input type="number" name="qty" id="qtyInput" value="1"
                                                    min="1" max="{{ $data->quantity }}"
                                                    class="form-control text-center w-25" />

                                                <input type="hidden" name="price_per_unit" value="{{ $data->price }}">

                                                <button type="button" class="btn btn-outline-secondary btn-sm ms-2"
                                                    id="increase">+</button>
                                            </div>

                                            <h5>Total: <span id="totalPrice"
                                                    class="fw-bold text-success">{{ number_format($data->price, 2) }}</span>
                                                MMK</h5>

                                            <button type="submit" class="btn btn-warning text-white fw-bold px-4 mt-3">
                                                <i class="bi bi-cart-plus me-1"></i> Add to Cart
                                            </button>
                                        </form>
                                    @else
                                        <button class="btn btn-secondary px-4 fw-bold" disabled>
                                            <i class="bi bi-cart-dash me-1"></i> Out of Stock
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="card-footer bg-white">
                            <h4 class="fw-bold mb-3">Description</h4>
                            <p class="fs-6 text-muted" style="line-height: 1.7;">
                                {{ $data->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const decreaseBtn = document.getElementById('decrease');
        const increaseBtn = document.getElementById('increase');
        const qtyInput = document.getElementById('qtyInput');
        const totalPrice = document.getElementById('totalPrice');

        const pricePerUnit = parseFloat({{ $data->price }});

        decreaseBtn.addEventListener('click', () => {
            let qty = parseInt(qtyInput.value);
            if (qty > 1) {
                qtyInput.value = qty - 1;
                totalPrice.textContent = ((qty - 1) * pricePerUnit).toFixed(2);
            }
        });

        increaseBtn.addEventListener('click', () => {
            let maxQty = parseInt(qtyInput.max);
            let qty = parseInt(qtyInput.value);
            if (qty < maxQty) {
                qtyInput.value = qty + 1;
                totalPrice.textContent = ((qty + 1) * pricePerUnit).toFixed(2);
            }
        });
    </script>

@endsection
