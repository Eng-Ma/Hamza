@extends('admin.incloud.master')

@section('title', 'ResetPassword')

@section('header')
    ResetPassword
@endsection
@section('header_link')
    <a href="">ResetPassword</a>
@endsection
@section('content-header')
    Add
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{ route('admin.reset.password.post') }}" method="post">
                    @csrf
                    <div class="">
                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>{{ __('Old Password') }} : <span class="tx-danger">*</span></label>
                                <input class="form-control mg-b-20" data-parsley-class-handler="#lnWrapper"
                                    name="old_password" type="password" value="{{ old('old_password') }}">
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>{{ __('New Password') }} : <span class="tx-danger">*</span></label>
                                <input class="form-control mg-b-20" data-parsley-class-handler="#lnWrapper"
                                    name="new_password" type="password" value="{{ old('new_password') }}">
                                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label> {{ __('Password Confirmation') }} : <span class="tx-danger">*</span></label>
                                <input class="form-control mg-b-20" data-parsley-class-handler="#lnWrapper"
                                    name="confirm_password" type="password" value="{{ old('confirm_password') }}">
                                    @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>

                        <div class="mg-t-30">
                            <button class="btn btn-main-primary pd-x-20" type="submit">{{ __('Edit') }}</button>
                            <a class="btn btn-secondary" data-effect="effect-scale"
                                style="font-weight: bold; color: beige;" href="{{ route('admin.dashboard.index') }}">{{ __('Cancel') }}</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
