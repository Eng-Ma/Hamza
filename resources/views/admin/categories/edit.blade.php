@extends('admin.incloud.master')

@section('title', 'Edit Page')

@section('header')
    Categories
@endsection
@section('header_link')
    <a href="{{ route('admin.categories.index') }}">Categories</a>
@endsection
@section('content-header')
    Edit
@endsection


@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.categories.update', $category['id']) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input name="name" class="form-control" placeholder="name" type="text"
                                    value="{{ old('name', $category->name) }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Content -->
                        <div class="col-lg-6">
                            <div class="form-group has-success mg-b-0">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" placeholder="content" required rows="3">{{ old('content', $category->content) }}</textarea>
                            </div>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
                            <input type="file" class="dropify" name="image"
                                data-default-file="{{ $category->image ? asset('uploads/image/categories/' . $category->image) : '' }}"
                                data-height="200">
                        </div>
                        <!-- Image -->


                    </div>

                    <div class="col-12 text-center mb-2 mt-5">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('adminassets/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endsection
