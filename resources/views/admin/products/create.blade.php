@extends('admin.incloud.master')

@section('title', 'Product')

@section('header')
    Product
@endsection
@section('header_link')
    <a href="">Product</a>
@endsection
@section('content-header')
    Add
@endsection


@section('content')

    <!--div-->
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <form action="{{ route('admin.products.store', ['locale' => 'en']) }}" method="POST" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" class="form-control form-control" placeholder="name" type="name"
                                    value="{{ $product->name }}">
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
                                    <option value="face"
                                        {{ isset($product) && $product->product_type == 'face' ? 'selected' : '' }}>Face
                                    </option>
                                    <option value="body"
                                        {{ isset($product) && $product->product_type == 'body' ? 'selected' : '' }}>Body
                                    </option>
                                </select>
                                @error('product_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input name="price" class="form-control form-control" placeholder="price" type="number"
                                    value="{{ $product->price }}">
                            </div>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input name="quantity" class="form-control form-control" placeholder="quantity"
                                    type="number" value="{{ $product->quantity }}">
                            </div>
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Package size</label>
                                <input name="package_size" class="form-control form-control" placeholder="package_size"
                                    type="number" value="{{ $product->package_size }}">
                            </div>
                            @error('package_size')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">اختر Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Content</label>
                                <textarea class="form-control " name="content" placeholder="content" required="" rows="3" style="height: 88px;"
                                    value="{{ $product->content }}"></textarea>
                            </div>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Main Components</label>
                                <textarea class="form-control " name="main_components" placeholder="main_components" required="" rows="3" style="height: 88px;"
                                    value="{{ $product->main_components }}"></textarea>
                            </div>
                            @error('main_components')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <div class="form-group has-success mg-b-0">
                                <label for="">Description</label>
                                <textarea class="form-control " name="description" placeholder="description" required="" rows="3" style="height: 88px;"
                                    value="{{ $product->description }}"></textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-sm-12 col-md-4 mg-t-10 mg-md-t-0">
                            <input type="file" class="dropify" name="image"
                                data-default-file="{{ asset('adminassets/assets/img/photos/1.jpg') }}" data-height="200">
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
