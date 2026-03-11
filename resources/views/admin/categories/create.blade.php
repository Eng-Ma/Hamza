@extends('Admin.incloud.master')

@section('title', 'Categories')

@section('header')
    Categories
@endsection
@section('header_link')
    <a href="">Categories</a>
@endsection
@section('content-header')
    Add
@endsection


@section('content')

    <!--div-->
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.categories.store', ['locale' => 'en']) }}" method="POST" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" class="form-control form-control" placeholder="name" type="text"
                                    value="{{ $category->name }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Content</label>
                                <textarea class="form-control " name="content" placeholder="content" required="" rows="3" style="height: 88px;"
                                    value="{{ $category->content }}"></textarea>
                            </div>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
                            <input type="file" class="dropify" name="image"
                                data-default-file="{{ asset('adminassets/assets/img/photos/1.jpg') }}" data-height="200">
                        </div>

                    </div>
                    <div class="col-12 text-center mb-2 mt-5">
                        <button type="submit" class="btn btn-success ">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--/div-->

@endsection


@section('script')
    <script src="{{ asset('adminassets/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/fileuploads/js/file-upload.js') }}"></script>
@endsection
