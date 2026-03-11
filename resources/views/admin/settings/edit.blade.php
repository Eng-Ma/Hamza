@extends('Admin.incloud.master')

@section('title', 'Settings')

@section('header')
    Settings
@endsection
@section('header_link')
    <a href="">Settings</a>
@endsection
@section('content-header')
    Edit
@endsection


@section('content')

    <!--div-->
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.settings.update', $setting['id']) }}" method="POST" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Terms_and_Conditions</label>
                                <textarea class="form-control " name="Terms_and_Conditions" placeholder="Terms_and_Conditions" required="" rows="3" style="height: 88px;"
                                    value="">{{ old('Terms_and_Conditions', $setting->Terms_and_Conditions) }}</textarea>
                            </div>
                            @error('Terms_and_Conditions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       <div class="row ">
					<div class="col-lg-12 col-md-12 mb-4">
						<div class="card">
							<div class="card-body">

								<div class="row ">
									<div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
										<input type="file" class="dropify" name="logo_header"
											data-default-file="{{ $setting->logo_header ? asset('uploads/logo_header/settings/' . $setting->logo_header) : '' }}" data-height="200">
									</div>
                                    <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
										<input type="file" class="dropify" name="logo_footer"
											data-default-file="{{ $setting->logo_footer ? asset('uploads/logo_footer/settings/' . $setting->logo_footer) : '' }}" data-height="200">
									</div>
                                    <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
										<input type="file" class="dropify" name="about_image"
											data-default-file="{{ $setting->about_image ? asset('uploads/about_image/settings/' . $setting->about_image) : '' }}" data-height="200">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                    </div>
                    <div class="col-12 text-center mb-2 mt-5">
                        <button type="submit" class="btn btn-primary ">Update</button>
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
