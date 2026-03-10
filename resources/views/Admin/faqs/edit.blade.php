@extends('Admin.incloud.master')

@section('title', 'Edit Page')

@section('header')
    Pages
@endsection
@section('header_link')
    <a href="{{ route('admin.faqs.index') }}">Pages</a>
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
            <form action="{{ route('admin.faqs.update', $faq['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Question</label>
                                <input name="question" class="form-control" placeholder="question" type="text"
                                    value="{{ old('question', $faq->question) }}">
                            </div>
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <!-- Content -->
                        <div class="col-lg-6">
                            <div class="form-group has-success mg-b-0">
                                <label for="">Content</label>
                                <textarea class="form-control" name="answer_question" placeholder="answer_question" required rows="3">{{ old('answer_question', $faq->answer_question) }}</textarea>
                            </div>
                            @error('answer_question')
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
