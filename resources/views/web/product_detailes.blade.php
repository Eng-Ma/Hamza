@extends('web.include.content')
@section('style')
    <link rel="stylesheet" href="{{ asset('webassets/assets/css/style_new.css') }}">
    <style>
        .rotate-45 {
            transform: rotate(45deg);
        }

        .product-description {
            width: 500px;
        }

        .add_shop {
            width: 220px;
        }

        @media (max-width: 600px) {
            .product-description {
                width: 100%;
            }

            .add_shop {
                width: 100%;
            }

            .add_to_carts {
                width: 100%;
            }
        }
    </style>
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body h-100">
                    <div class="row row-sm ">
                        <div class=" col-xl-6 col-lg-12 col-md-12">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img
                                        src="{{ asset('uploads/image/products/' . $product->image) }}" alt="image"></div>
                            </div>

                        </div>
                        <div class="details col-xl-6 col-lg-12 col-md-12 mt-4 mt-xl-0">
                            <div class="card-body" style="padding-top: 50px">
                                <h1 class="product-title mb-1">{{ $product->name }}</h>
                                    <p class="text-muted tx-13 mt-4 mb-4">{{ $product->package_size }} ML</p>
                                    <h6 class="price">Description</h6>
                                    <p class="product-description">{{ $product->content }}
                                    </p>


                                    <div class="action">



                                            <button data-bs-toggle="modal"
                                                    data-bs-target="#modaldemo8" data-id="{{ $product->id }}"
                                                    data-name="{{ $product->name }}" data-price="{{ $product->price }}"
                                                    data-description="{{ $product->description }}"
                                                    data-image="{{ $product->image }} " class="add-to-cart btn btn-dark add_to_carts">Add To Cart
                                                <i class="fe fe-arrow-up me-2 rotate-45"></i> {{ $product->price }} $
                                                USD</button>


                                        <a href="{{ route('checkout.place') }}"
                                            class="add-to-cart btn btn-primary my-1 me-1 add_shop">Shop <i
                                                class="payment payment-applepay-dark" data-bs-toggle="tooltip"
                                                data-bs-container=".payment-applepay-dark"
                                                title="payment payment-applepay-dark"></i></a>

                                    </div>
                            </div>
                            <div class="card overflow-hidden">

                                <div class="card-body">
                                    <div class="panel-group1" id="accordion11">

                                        <div class="panel panel-default  mb-4" style="border-bottom: 1px solid">
                                            <div class="panel-heading1  ">
                                                <h4 class="panel-title1">
                                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                                        data-bs-parent="#accordion11" href="#collapseFour1"
                                                        aria-expanded="false"
                                                        style="color: black !important">{{ $product->main_components }}</a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour1" class="panel-collapse collapse"
                                                style="border-top: 1px solid" role="tabpanel" aria-expanded="false">
                                                <div class="panel-body ">
                                                    <p>{{ $product->description }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="sptb section " id="Features" style="padding: 160px 0 0;">
                        <div class="row">
                            <h3 class="text-center">You Might Like</h3>

                            <div class="row mt-3">
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
                                                    data-bs-target="#modaldemo8" data-id="{{ $info->id }}"
                                                    data-name="{{ $info->name }}" data-price="{{ $info->price }}"
                                                    data-description="{{ $info->description }}"
                                                    data-image="{{ $info->image }}"> <!-- فقط اسم الملف -->
                                                    QUICK ADD <span>+</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="product-info" style="font-weight: 400">
                                            <h6 style="font-weight: 400">{{ $info->name }}</h6>
                                            <span>${{ $info->price }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection
