@extends('admin.master')
@section('title')
    Add Medicines
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button data-dismiss="alert" type="button" class="close">&times;</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Add Medicine</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pharmachy.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="name" type="text"
                                            placeholder="Medicine Name" value="{{ old('name') }}" maxlength="50"
                                            pattern="[A-Za-z\s-]+" title="English letters only" />
                                        <label for="doctorname">Medicine Name</label>
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCode" name="code" type="text"
                                            placeholder="Code" maxlength="20" pattern="[A-Za-z\s-]+"
                                            title="English letters only" value="{{ old('code') }}" />
                                        <label for="phone">Code</label>
                                        <span class="text-danger">
                                            @error('code')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPrice" name="price" type="number"
                                            placeholder="Price" max="9999999999" value="{{ old('price') }}"
                                            min="0" />
                                        <label for="price">Price </label>
                                        <span class="text-danger">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputQuantity" name="pcs" type="text"
                                            placeholder="Pcs" maxlength="150" value="{{ old('pcs') }}" />
                                        <label for="pcs">Pcs</label>
                                        <span class="text-danger">
                                            @error('pcs')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputQuantity" name="quantity" type="number"
                                            placeholder="Quantity" max="10" value="{{ old('quantity') }}" />
                                        <label for="quantity">Quantity</label>
                                        <span class="text-danger">
                                            @error('quantity')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDescription" value="{{ old('description') }}"
                                            name="description" type="text" placeholder="Tagline" maxlength="200" />
                                        <label for="description">Description</label>
                                        <span class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input type="file" class="form-control" name="image">
                                <span class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>


                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" value="{{ old('date') }}"
                                            name="date" type="date" placeholder="Tagline" required />
                                        <label for="date">Exp Date</label>
                                        <span class="text-danger">
                                            @error('date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <input type="submit" class="btn btn-outline-success text-center" value="Add Medicine">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
