@extends('user.master')
@section('title')
    Doctor Details
@endsection

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            <button data-dismiss="alert" type="button" class="close">&times;</button>
            {{ session()->get('message') }}
        </div>
    @endif

    <section class="doctor-details"
        style="background: url('{{ asset('assets/img/doctor-bg.jpg') }}') no-repeat center center; background-size: cover; color: #212529;">
        <div class="container  bg-opacity-75 p-4 rounded shadow">
            <h2 class="text-center mb-3" style="font-size: 25px; font-weight: 600; color: #7b8985;">Doctor Details</h2>

            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="{{ asset($doctor->image) }}" alt="Doctor Image" class="img-fluid rounded shadow"
                        style="max-height: 350px;">
                </div>
                <div class="col-md-8">
                    <h4 class="mb-2" style="font-weight: 600;">{{ $doctor->name }}</h4>
                    <h5 class="mb-1" style="font-size: 18px;"><strong>Speciality    : </strong>{{ $doctor->speciality }}</h5>
                    <h5 class="mb-1" style="font-size: 18px;"><strong>Schedule Day  :</strong> {{ $doctor->day }}</h5>
                    <h5 class="mb-1" style="font-size: 18px;"><strong>Time  :</strong> {{ $doctor->time }}</h5>
                    <h5 class="mb-1" style="font-size: 18px;"><strong>Consultant Fee    :</strong> {{ $doctor->fee }} Ks</h5>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4 class="mb-3" style="color: #030403;">About Doctor</h4>
                    <p style="color: #333; line-height: 1.8; font-size: 18px; font-family: 'Roboto', sans-serif;">
                        {{ $doctor->description }}
                    </p>
                </div>
            </div>
        </div>




        <div class="page-section">
            <div class="container">
                <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

                <form class="main-form" action="{{ route('appointment') }}" method="post">
                    @csrf
                    <div class="row mt-5 ">
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                            <input type="text" class="form-control" placeholder="Full name"
                                name="name"value="{{ old('name') }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                            <input type="text" name="email" class="form-control"
                                placeholder="Email address.."value="{{ old('email') }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
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
                            <span class="text-warning" id="dateWarning" style="display: none;">Please select a future
                                date.</span>
                        </div>


                        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                            <select name="doctor" id="doctorDropdown" class="custom-select">
                                <option value="">-- Select Doctors --</option>
                                @foreach ($doc as $doctors)
                                    <option value="{{ $doctors->id }}" doc_id="{{ $doctors->id }}"
                                        data-fee="{{ $doctors->fee }}">{{ $doctors->name }} -- Speciality --
                                        {{ $doctors->speciality }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <input type="text" name="fee" id="feeInput" class="form-control" placeholder="Fee.."
                                value="{{ old('fee') }}" readonly>
                            <input type="hidden" value="{{ old('doctor_id') }}" name="doctor_id" id="doctorIdInput"
                                readonly>
                            <span class="text-danger">
                                @error('fee')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <input type="text" name="phone" class="form-control" placeholder="Number.."
                                value="{{ old('phone') }}">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 wow zoomIn btn-home"
                        style="background-color: #00D9A5 ;">Submit Request</button>
                </form>
            </div>
        </div> <!-- .page-section -->

    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const doctorDropdown = document.getElementById("doctorDropdown");
            const feeInput = document.getElementById("feeInput");
            const doctorIdInput = document.getElementById("doctorIdInput");

            doctorDropdown.addEventListener("change", function() {
                const selectedOption = doctorDropdown.options[doctorDropdown.selectedIndex];
                const selectedFee = selectedOption.getAttribute("data-fee");
                const selectedDoctorId = selectedOption.value;

                feeInput.value = selectedFee || ""; // Set the fee input value
                doctorIdInput.value = selectedDoctorId; // Set the selected doctor's ID
            });
        });
    </script>
@endsection
