@extends('user.master')
@section('title')
    Blog Details
@endsection

@section('content')

<section class="blog-details py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                {{-- <h2 class="text-success mb-3" style="font-weight: 500; font-size: 30px;">Blog Details</h2> --}}
                <h4 class="text-primary mb-4" style="font-weight: 600; font-size: 25px;">{{ $blog->title }}</h4>
                <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-fluid rounded shadow mb-4" style="max-height: 500px; object-fit: cover;">
                <p class="text-dark" style="line-height: 1.8; font-size: 20px; font-family: 'Roboto', sans-serif;">
                    {{ $blog->description }}
                </p>
            </div>
        </div>

        <div class="row">
            @foreach($relatedBlogs as $blogs)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset($blogs->image) }}" class="card-img-top" alt="Related Blog Image" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary mb-2">
                            <a href="{{ route('blog-details', ['id' => $blogs->id]) }}" class="text-decoration-none text-primary">
                                {{ \Illuminate\Support\Str::limit($blogs->title, 60) }}
                            </a>
                        </h5>
                        <small class="text-muted mt-auto">
                            <i class="mai-time mr-1"></i> {{ \Carbon\Carbon::parse($blogs->date)->diffForHumans() }}
                        </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

