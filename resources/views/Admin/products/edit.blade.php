@extends('Admin.incloud.master')

@section('title', 'Edit Page')

@section('header')
    Product
@endsection
@section('header_link')
    <a href="{{ route('admin.products.index') }}">Product</a>
@endsection
@section('content-header')
    Edit
@endsection

@section('style')

@endsection

@section('content')
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.products.update', $product['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <!-- Title -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" class="form-control" placeholder="name" type="text"
                                    value="{{ old('name', $product->name) }}">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_type">Product Type</label>
                                <select name="product_type" id="product_type" class="form-control" required>
                                    <option value="">اختر النوع</option>
                                    <option value="face" {{ $product->product_type == 'face' ? 'selected' : '' }}>Face</option>
                                    <option value="body" {{ $product->product_type == 'body' ? 'selected' : '' }}>Body</option>
                                </select>
                                @error('product_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input name="price" class="form-control" placeholder="price" type="text"
                                    value="{{ old('price', $product->price) }}">
                            </div>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">quantity</label>
                                <input name="quantity" class="form-control" placeholder="quantity" type="text"
                                    value="{{ old('quantity', $product->quantity) }}">
                            </div>
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Package size</label>
                                <input name="package_size" class="form-control" placeholder="package_size" type="text"
                                    value="{{ old('package_size', $product->package_size) }}">
                            </div>
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Link Text -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">اختر Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="col-lg-6">
                            <div class="form-group has-success mg-b-0">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" placeholder="content" required rows="3">{{ old('content', $product->content) }}</textarea>
                            </div>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                          <div class="col-lg-6">
                            <div class="form-group has-success mg-b-0">
                                <label for="">Main Components</label>
                                <textarea class="form-control" name="main_components" placeholder="main_components" required rows="3">{{ old('main_components', $product->main_components) }}</textarea>
                            </div>
                            @error('main_components')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                          <div class="col-lg-6">
                            <div class="form-group has-success mg-b-0">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" placeholder="description" required rows="3">{{ old('description', $product->description) }}</textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
                            <input type="file" class="dropify" name="image"
                                data-default-file="{{ $product->image ? asset('uploads/image/products/' . $product->image) : '' }}"
                                data-height="200">
                        </div>
                        <!-- Image -->


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
