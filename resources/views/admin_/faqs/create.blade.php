@extends('Admin.incloud.master')

@section('title', 'Faqs')

@section('header')
    Faqs
@endsection
@section('header_link')
    <a href="">Faqs</a>
@endsection
@section('content-header')
    Add
@endsection
@section('style')
    <style>
        .dropify-wrapper {
            ;
            position: static;
        }
    </style>

@endsection

@section('content')

    <!--div-->
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.faqs.store', ['locale' => 'en']) }}" method="POST" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Question</label>
                                <input name="question" class="form-control form-control" placeholder="question" type="text"
                                    value="{{ $faq->question }}">
                            </div>
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Answer_question</label>
                                <textarea class="form-control " name="answer_question" placeholder="answer_question" required=""
                                    rows="3" style="height: 88px;" value="{{ $faq->answer_question }}"></textarea>
                            </div>
                            @error('answer_question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
