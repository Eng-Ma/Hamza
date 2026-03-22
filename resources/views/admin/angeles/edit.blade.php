@extends('admin.incloud.master')

@section('title', 'Edit Articles')

@section('header')
    Angeles
@endsection
@section('header_link')
    <a href="{{ route('admin.abouts.index') }}">Angeles</a>
@endsection
@section('content-header')
    Edit
@endsection

@section('style')
    <style>
        .dropify-wrapper {
            position: static;
        }
    </style>
@endsection

@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.angeles.update', $angele['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">text</label>
                                <input name="text" class="form-control" placeholder="text" type="text"
                                    value="{{ old('text', $angele->text) }}">
                            </div>
                            @error('text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Link Text -->
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">desc</label>
                                <textarea class="form-control" name="desc" placeholder="desc" required rows="3">{{ old('desc', $angele->desc) }}</textarea>
                            </div>
                            @error('desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
