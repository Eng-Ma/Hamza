@extends('web.include.content')
@section('style')
    <link rel="stylesheet" href="{{ asset('webassets/assets/css/style_new.css') }}">
@endsection
@section('content')
    <div class="col-xl-12">
        <!-- div -->
        <div class="card" id="tabs-style4">
            <div class="card-body">
                <div class="main-content-label mg-b-5" style=" padding-left: 30px; font-size: 25px;padding-top: 25px">
                    Shop
                </div>

                <div class="text-wrap">
                    <div class="example">
                        <div class="d-md-flex">
                            <div class="">
                                <div class="panel panel-primary tabs-style-4 ">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu ">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs me-3">
                                                <li><a href="#tab21" class="active" data-bs-toggle="tab">All</a></li>
                                                <li><a href="#tab22" data-bs-toggle="tab">Face</a></li>
                                                <li><a href="#tab23" data-bs-toggle="tab">Body</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs-style-4 w-100">
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">

                                        <!-- All Products -->
                                        <div class="tab-pane active" id="tab21">
                                            <div class="sptb section " id="Features">
                                                <div class="row mt-7">
                                                    @foreach ($products as $info)
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="card features main-features main-features-4"
                                                                style="margin-bottom: 10px; background: transparent;">

                                                                <div class="bg-img mb-2 text-left">

                                                                    <!-- صورة المنتج -->
                                                                    <a href="{{ route('web.product.show', $info->id) }}">
                                                                        <img src="{{ asset('uploads/image/products/' . $info->image) }}"
                                                                            alt="Product Image" class="feature-img">
                                                                    </a>

                                                                    <!-- زر Quick Add -->
                                                                    <button class="feature-btn" data-bs-toggle="modal"
                                                                        data-bs-target="#modaldemo8"
                                                                        data-id="{{ $info->id }}"
                                                                        data-name="{{ $info->name }}"
                                                                        data-price="{{ $info->price }}"
                                                                        data-description="{{ $info->description }}"
                                                                        data-image="{{ $info->image }}">
                                                                        <!-- فقط اسم الملف -->
                                                                        QUICK ADD <span>+</span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="product-info" style="font-weight: 300;">
                                                                <h6 style="font-weight: 300;">{{ $info->name }}</h6>
                                                                <span>${{ $info->price }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Face Products -->

                                        <div class="tab-pane" id="tab22">
                                            <div class="sptb section bg-white" id="Features">
                                                <div class="row mt-7">
                                                    @foreach ($products_face as $product)
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="card features main-features main-features-4 "
                                                                style="margin-bottom: 10px; background: transparent;">

                                                                <div class="bg-img mb-2 text-left">

                                                                    <!-- صورة المنتج -->
                                                                    <a
                                                                        href="{{ route('web.product.show', $product->id) }}">
                                                                        <img src="{{ asset('uploads/image/products/' . $product->image) }}"
                                                                            alt="Product Image" class="feature-img">
                                                                    </a>

                                                                    <!-- زر Quick Add -->
                                                                    <button class="feature-btn" data-bs-toggle="modal"
                                                                        data-bs-target="#modaldemo8"
                                                                        data-id="{{ $product->id }}"
                                                                        data-name="{{ $product->name }}"
                                                                        data-price="{{ $product->price }}"
                                                                        data-description="{{ $product->description }}"
                                                                        data-image="{{ $product->image }}">
                                                                        <!-- فقط اسم الملف -->
                                                                        QUICK ADD <span>+</span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="product-info" style="font-weight: 300;">
                                                                <h6 style="font-weight: 300;">{{ $product->name }}</h6>
                                                                <span>${{ $product->price }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Body Products -->
                                        <div class="tab-pane" id="tab23">
                                            <div class="sptb section bg-white" id="Features">
                                                <div class="row mt-7">
                                                    @foreach ($products_body as $product)
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="card features main-features main-features-4"
                                                                style="margin-bottom: 10px; background: transparent;">

                                                                <div class="bg-img mb-2 text-left">

                                                                    <!-- صورة المنتج -->
                                                                    <a
                                                                        href="{{ route('web.product.show', $product->id) }}">
                                                                        <img src="{{ asset('uploads/image/products/' . $product->image) }}"
                                                                            alt="Product Image" class="feature-img">
                                                                    </a>

                                                                    <!-- زر Quick Add -->
                                                                    <button class="feature-btn" data-bs-toggle="modal"
                                                                        data-bs-target="#modaldemo8"
                                                                        data-id="{{ $product->id }}"
                                                                        data-name="{{ $product->name }}"
                                                                        data-price="{{ $product->price }}"
                                                                        data-description="{{ $product->description }}"
                                                                        data-image="{{ $product->image }}">
                                                                        <!-- فقط اسم الملف -->
                                                                        QUICK ADD <span>+</span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="product-info" style="font-weight: 300;">
                                                                <h6 style="font-weight: 300;">{{ $product->name }}</h6>
                                                                <span>${{ $product->price }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- tab-content -->
                                </div> <!-- panel-body -->
                            </div> <!-- tabs-style-4 -->
                        </div> <!-- d-md-flex -->
                    </div> <!-- example -->
                </div> <!-- text-wrap -->

            </div>
            <!-- /div -->
        </div>
    </div>
@endsection
