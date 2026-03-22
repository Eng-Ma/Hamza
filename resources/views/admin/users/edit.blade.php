@extends('admin.incloud.master')

@section('title', 'Products')

@section('header')
    Users
@endsection
@section('header_link')
    <a href="">Users</a>
@endsection
@section('content-header')
    Edit
@endsection
@section('style')

@endsection

@section('content')

    <!--div-->
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.users.update', $user['id']) }}" method="POST" class="row g-3">
                @csrf
                <div class="card-body">
                    <div class="row">
                        {{-- اسم المنتج --}}
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">name</label>
                            <input name="name" id="name" type="text" class="form-control" id="validationCustom01"
                                value="{{ $user->name }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">email</label>
                            <input name="email" id="email" type="email" class="form-control" id="validationCustom01"
                                value="{{ $user->email }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">password</label>
                            <input name="password" id="password" type="password" class="form-control" id="validationCustom01"
                                value="{{ $user->password }}">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror


                        {{-- زر الإرسال --}}

                    </div>
                    <div class="col-12 text-center mb-2 mt-5">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!--/div-->

@endsection
