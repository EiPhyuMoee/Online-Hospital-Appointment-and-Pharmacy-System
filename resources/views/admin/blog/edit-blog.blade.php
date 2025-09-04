@extends('admin.master')
@section('title')
    Edit Blog
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Edit Blog</h3>
                    </div>

                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" action="{{ route('blog.update', $blogs->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <label class="form-label">Category</label>
                                    <select name="category" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category', $blogs->category->id ?? '') == $category->id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{--                                    <input type="text" class="form-control" name="category" value="{{$blogs->category_name}}" class="form-control"> --}}
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $blogs->title }}"
                                        maxlength="50" class="form-control">
                                </div>

                                <div class="col-12 text-center">
                                    <img src="{{ asset($blogs->image) }}" width="120px" height="150px" class="img-fluid"
                                        alt="Edit Image">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" maxlength="50"
                                        value="{{ $blogs->description }}" class="form-control">
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Blog Type</label>
                                    <select name="blog_type" class="form-control">
                                        <option value="">Select Blog Type</option>
                                        <option value="latest"
                                            {{ old('blog_type', $blogs->blog_type) == 'latest' ? 'selected' : '' }}>Latest
                                        </option>
                                        <option value="trending"
                                            {{ old('blog_type', $blogs->blog_type) == 'trending' ? 'selected' : '' }}>
                                            Trending</option>
                                        <option value="popular"
                                            {{ old('blog_type', $blogs->blog_type) == 'popular' ? 'selected' : '' }}>Popular
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" value="{{ $blogs->date }}" name="date"
                                        class="form-control">
                                </div>


                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary"
                                            style="background-color: #00D9A5">Save Info</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
