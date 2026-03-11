@extends('Admin.incloud.master')

@section('title', 'Contact')

@section('header')
    Contact
@endsection
@section('header_link')
    <a href="">Contact</a>
@endsection
@section('content-header')
    Add
@endsection
@section('style')


@endsection

@section('content')

    <!--div-->
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.contacts.store', ['locale' => 'en']) }}" method="POST" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Questions</label>
                                <input name="questions" class="form-control form-control" placeholder="questions"
                                    type="questions" value="{{ $contact->questions }}">
                            </div>
                            @error('questions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Order_link</label>
                                <input name="order_link" class="form-control form-control" placeholder="order_link"
                                    type="order_link" value="{{ $contact->order_link }}">
                            </div>
                            @error('order_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Info_link</label>
                                <input name="info_link" class="form-control form-control" placeholder="info_link"
                                    type="info_link" value="{{ $contact->info_link }}">
                            </div>
                            @error('info_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Linkedin</label>
                                <input name="linkedin" class="form-control form-control" placeholder="linkedin"
                                    type="linkedin" value="{{ $contact->linkedin }}">
                            </div>
                            @error('linkedin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input name="twitter" class="form-control form-control" placeholder="twitter"
                                    type="twitter" value="{{ $contact->twitter }}">
                            </div>
                            @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">YouTube</label>
                                <input name="youTube" class="form-control form-control" placeholder="youTube"
                                    type="youTube" value="{{ $contact->youTube }}">
                            </div>
                            @error('youTube')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Instagram</label>
                                <input name="instagram" class="form-control form-control" placeholder="instagram"
                                    type="instagram" value="{{ $contact->instagram }}">
                            </div>
                            @error('instagram')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">description</label>
                                <textarea class="form-control " name="description" placeholder="description" required=""
                                    rows="3" style="height: 88px;" value="{{ $contact->description }}"></textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                         <div class="row ">
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="">
                                    <div class="card-body">

                                        <div class="row ">
                                            <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
                                                <input type="file" class="dropify" name="image"
                                                    data-default-file="{{ asset('adminassets/assets/img/photos/1.jpg') }}"
                                                    data-height="200">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
