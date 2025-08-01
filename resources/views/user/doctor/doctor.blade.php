@extends('user.master')
@section('title')
    All Doctors
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
            <h1 class="display-4 text-white fw-bold">Our Doctor</h1>
        </div>
    </div>
</div>

    <div class="page-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="row">

                        @foreach($doctor as $doctors)
                        <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="{{$doctors->image}}" alt="" width="300px">
                                </div>
                                <div class="body">
                                    <h5><a href="{{route('doctor-details',['id'=>$doctors->id])}}">{{$doctors->name}}</a></h5>
                                    <span class="text-sm text-grey">{{$doctors->speciality}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

            <form class="main-form" action="{{route('appointment')}}" method="post">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control" placeholder="Full name" name="name"value="{{old('name')}}">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="Email address.."value="{{old('email')}}">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" class="form-control" name="date" id="appointmentDate">
                        <span class="text-danger">
                         @error('date')
                            {{ $message }}
                            @enderror
                        </span>
                        <span class="text-warning" id="dateWarning" style="display: none;">Please select a future date.</span>
                    </div>


                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor" id="doctorDropdown" class="custom-select">
                            <option value="">-- Select Doctors --</option>
                            @foreach($doctor as $doctors)
                                <option value="{{ $doctors->id }}" doc_id="{{ $doctors->id }}" data-fee="{{ $doctors->fee }}">{{ $doctors->name }} -- Speciality -- {{ $doctors->speciality }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="fee" id="feeInput" class="form-control" placeholder="Fee.." value="{{ old('fee') }}" readonly>
                        <input type="hidden" value="{{old('doctor_id')}}" name="doctor_id" id="doctorIdInput" readonly>
                        <span class="text-danger">
                        @error('fee')
                            {{ $message }}
                            @enderror
                     </span>
                    </div>


                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="phone" class="form-control" placeholder="Number.." value="{{old('phone')}}">
                        <span class="text-danger">
                            @error('phone')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn btn-home" style="background-color: #00D9A5 ;">Submit Request</button>
            </form>
        </div>
    </div> <!-- .page-section -->




    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const doctorDropdown = document.getElementById("doctorDropdown");
            const feeInput = document.getElementById("feeInput");
            const doctorIdInput = document.getElementById("doctorIdInput");

            doctorDropdown.addEventListener("change", function () {
                const selectedOption = doctorDropdown.options[doctorDropdown.selectedIndex];
                const selectedFee = selectedOption.getAttribute("data-fee");
                const selectedDoctorId = selectedOption.value;

                feeInput.value = selectedFee || ""; // Set the fee input value
                doctorIdInput.value = selectedDoctorId; // Set the selected doctor's ID
            });
        });
    </script>
    @endsection
