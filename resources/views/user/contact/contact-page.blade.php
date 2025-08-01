@extends('user.master')
@section('title')
    Contact Us
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
    <div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('assets')}}/img/bg_image_2.png);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Contact</h1>

            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Get in Touch</h1>

            <form class="contact-form mt-5" action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-6 py-2 wow fadeInLeft">
                        <label for="fullName">Name</label>
                        <input type="text" name="name" id="fullName" value="{{old('name')}}" class="form-control" placeholder="Full name..">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInRight">
                        <label for="emailAddress">Email</label>
                        <input type="text" value="{{old('email')}}" name="email" id="emailAddress" class="form-control" placeholder="Email address..">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="subject">Subject</label>
                        <input type="text" value="{{old('subject')}}" name="subject" id="subject" class="form-control" placeholder="Enter subject..">
                        <span class="text-danger">
                            @error('subject')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="message">Message</label>
                        <textarea id="message" value="{{old('message')}}" name="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                        <span class="text-danger">
                            @error('message')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary wow zoomIn btn-home" style="background-color: #00D9A5 ;">Send Message</button>
            </form>
        </div>
    </div>

@endsection
