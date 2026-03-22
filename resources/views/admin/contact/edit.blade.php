@extends('admin.incloud.master')

@section('title', 'Edit Articles')

@section('header')
    Contact
@endsection
@section('header_link')
    <a href="{{ route('admin.contacts.index') }}">Contact</a>
@endsection
@section('content-header')
    Edit
@endsection



@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.contacts.update', $contact['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Questions</label>
                                <input name="questions" class="form-control" placeholder="Text_header" type="questions"
                                    value="{{ old('questions', $contact->questions) }}">
                            </div>
                            @error('questions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Order_link</label>
                                <input name="order_link" class="form-control" placeholder="Text_header" type="order_link"
                                    value="{{ old('order_link', $contact->order_link) }}">
                            </div>
                            @error('order_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Info_link</label>
                                <input name="info_link" class="form-control" placeholder="Text_header" type="info_link"
                                    value="{{ old('info_link', $contact->info_link) }}">
                            </div>
                            @error('info_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Linkedin</label>
                                <input name="linkedin" class="form-control" placeholder="linkedin" type="linkedin"
                                    value="{{ old('linkedin', $contact->linkedin) }}">
                            </div>
                            @error('linkedin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input name="twitter" class="form-control" placeholder="twitter" type="twitter"
                                    value="{{ old('twitter', $contact->twitter) }}">
                            </div>
                            @error('twitter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">YouTube</label>
                                <input name="youTube" class="form-control" placeholder="youTube" type="youTube"
                                    value="{{ old('youTube', $contact->youTube) }}">
                            </div>
                            @error('youTube')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Instagram</label>
                                <input name="instagram" class="form-control" placeholder="Instagram" type="instagram"
                                    value="{{ old('instagram', $contact->instagram) }}">
                            </div>
                            @error('instagram')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Link Text -->
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">description</label>
                                <textarea class="form-control " name="description" placeholder="description" required=""
                                    rows="3" style="height: 88px;">{{ old('description', $contact->description) }}</textarea>
                            </div>
                            @error('description')
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
                                                    data-default-file="{{ $contact->image ? asset('uploads/image/contact/' . $contact->image) : '' }}"
                                                    data-height="200">
                                            </div>

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
