@extends('admin.master')
@section('title')
    Add Doctor
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button data-dismiss="alert" type="button" class="close">&times;</button>
                            {{session()->get('message')}}
                        </div>
                     @endif
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Doctor</h3></div>
                    <div class="card-body">
                        <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" type="text" maxlength="20" placeholder="Enter Doctor Name" value="{{old('name')}}" />
                                        <label for="doctorname">Doctor Name</label>
                                        <span class="text-danger">
                                         @error('name')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="phone" type="text"  minlength="9" maxlength="11" pattern="[0-9]{9,11}" inputmode="numeric" placeholder="Phone No"value="{{old('phone')}}" />
                                        <label for="phone">Phone No. </label>
                                        <span class="text-danger">
                                         @error('phone')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                        <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input
                                    class="form-control"
                                    id="inputSpeciality"
                                    name="speciality"
                                    type="text"
                                    list="specialityOptions"
                                    maxlength="50"
                                    placeholder="Speciality"
                                    value="{{ old('speciality') }}"
                                />
                                <label for="inputSpeciality">Speciality</label>
                            </div>
                        </div>
                    </div>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="email" type="email" placeholder="Email" value="{{old('email')}}" />
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="time" type="text" maxlength="50" placeholder="Time" value="{{old('time')}}" />
                                        <label for="time">Schedule Time</label>
                                        <span class="text-danger">
                                         @error('time')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" name="day" type="text" maxlength="50" placeholder="Days" value="{{old('day')}}" />
                                        <label for="scheduledays">Schedule Days</label>
                                        <span class="text-danger">
                                         @error('day')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <!-- Use the 'description' value from the old input if validation fails -->
                                        <textarea class="form-control" id="inputDescription" name="description" maxlength="50" placeholder="Doctor Description" style="height: 200px;">{{ old('description') }}</textarea>
                                        <label for="inputDescription">Doctor's Description</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" value="{{old('fee')}}" name="fee" type="number" maxlength="" placeholder="Doctor Fee" />
                                        <label for="fee">Consultant Fee</label>
                                        <span class="text-danger">
                                         @error('fee')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input type="file" value="{{old('image')}}" class="form-control" name="image">
                                <span class="text-danger">
                                         @error('image')
                                    {{$message}}
                                    @enderror
                                        </span>
                            </div>

                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Add Doctor">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
