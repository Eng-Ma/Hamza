@extends('Admin.incloud.master')

@section('title', 'Edit Articles')

@section('header')
    Abouts
@endsection
@section('header_link')
    <a href="{{ route('admin.abouts.index') }}">Abouts</a>
@endsection
@section('content-header')
    Edit
@endsection



@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.abouts.update', $about['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Text</label>
                                <input name="text" class="form-control" placeholder="Text_header" type="text"
                                    value="{{ old('text', $about->text) }}">
                            </div>
                            @error('text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Link Text -->
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">content</label>
                                <textarea class="form-control " name="content" placeholder="content" required="" rows="3"
                                    style="height: 88px;">{{ old('content', $about->content) }}</textarea>
                            </div>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <!-- Image -->
                        <div class="row ">
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="">
                                    <div class="card-body">

                                        <div class="row ">
                                            <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
                                                <input type="file" class="dropify" name="image"
                                                    data-default-file="{{ $about->image ? asset('uploads/image/abouts/' . $about->image) : '' }}"
                                                    data-height="200">
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

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
