@extends('web.include.content')

@section('style')
    <link rel="stylesheet" href="{{ asset('webassets/assets/css/style_new.css') }}">
    <style>
        .model_footer {
            display: flex;
            justify-content: space-between;
            padding: 5px 0px;
        }

        .margin_new {
            margin-top: 180px;
        }

        .hero-content {
            font-size: 60px;
            max-width: 800px;
            width: 100%;
            margin: auto
        }

        .hero-title {
            margin: auto;
            font-size: 48px;
        }

        .hero-text {
            width: 60%;
            margin: auto;
            font-size: 18px;
        }

        /* Responsive Fix */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 32px;
                margin: auto
            }

            .hero-text {
                width: 80%;
                font-size: 16px;
                margin: auto
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 24px;
                margin: auto
            }

            .hero-text {
                width: 100%;
                font-size: 14px;
                margin: auto
            }
        }
    </style>
@endsection
@section('content')
    <div class="page">
        <div class="page-main">
            <div>
                <div class="carousel slide" data-bs-ride="carousel" id="carouselExample4">

                    {{-- Indicators --}}
                    <ol class="carousel-indicators">
                        @foreach ($category as $index => $info)
                            <li data-bs-target="#carouselExample4" data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }}">
                            </li>
                        @endforeach
                    </ol>

                    {{-- Carousel Inner (مرة واحدة فقط) --}}
                    <div class="carousel-inner bg-dark">
                        @foreach ($category as $index => $info)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                                <div class="position-relative" style="height: 500px;">

                                    <img src="{{ asset('uploads/image/categories/' . $info->image) }}"
                                        class="d-block w-100 h-100" style="object-fit: cover;">

                                    <!-- Overlay -->
                                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                                    <!-- Centered Content -->
                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100
                                d-flex justify-content-center align-items-center text-center text-white">
                                        <div>
                                            <h1 class="hero-content fw-bold p-2">{{ $info->name }}</h1>
                                            <h6 class="hero-text p-2">{{ $info->content }}</h6>
                                            <a href="{{ route('web.shop') }}" target="_blank" class="btn btn-primary">
                                                Show Products
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                    {{-- Controls --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>
            </div>



            <!--app-content open-->
            <div class="main-content mt-0 ms-0">
                <div class="side-app ">

                    <!-- ROW-2 OPEN -->
                    <div class="sptb section bg-white-2" id="Features" id="about">
                        <div class="row">
                            <h4 class="text-center fw-semibold landing-card-header"></h4>

                            <h2 class="fw-semibold text-center">Best Sellers</h2>

                            <div class="row mt-7">


                                @foreach ($products as $info)
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="card features main-features main-features-4 "
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

                                        <div class="product-info" style="font-weight: 300;">
                                            <h6 style="font-weight: 300;">{{ $info->name }}</h6>
                                            <span>${{ $info->price }}</span>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                    <!-- ROW-2 CLOSED -->

                    <!-- ROW-2 OPEN -->
                    <div class="section  feature-section" style="background: #f4f9ff; padding: 160px 0 0;">
                        <div class="row">
                            <div class="card  mb-0" style="background: transparent;">
                                <h2 class="text-center fw-semibold  landing-card-header" style="margin-bottom: 30px;font-size: 30px">Our
                                    Products</h2>
                                <span class="landing-title"></span>
                                <div class="row mt-7">

                                    @foreach ($products_face as $face)
                                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                                            <div class="card features main-features main-features-4 p-0 wow fadeInUp reveal revealleft active p-4"
                                                style="margin-bottom: 10px;  ; position: relative;padding: 0!important">

                                                <!-- Media -->
                                                <div class="bg-img mb-3 text-left bg-img-product"
                                                    style="position: relative; overflow: hidden;">

                                                    <!-- الصورة مع رابط -->
                                                    <a href="{{ route('web.shop') }}">
                                                        <img src="{{ asset('uploads/image/products/' . $face->image) }}"
                                                            alt="Feature Image" class="feature-img hover-zoom"
                                                            style="width: 100%; display: block;"
                                                            class="feature-img-product">
                                                    </a>

                                                    <div class="read-more2">
                                                        Face
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach ($products_body as $body)
                                        <div class="col-xl-6 col-lg-6 col-md-6 p-0">
                                            <div class="card features main-features main-features-4  wow fadeInUp reveal revealleft active p-4"
                                                style="margin-bottom: 10px;  ; position: relative; padding: 0 !important">

                                                <!-- Media -->
                                                <div class="bg-img mb-3 text-left bg-img-product"
                                                    style="position: relative; overflow: hidden; ;">

                                                    <!-- الصورة مع رابط -->
                                                    <a href="{{ route('web.shop') }}">
                                                        <img src="{{ asset('uploads/image/products/' . $body->image) }}"
                                                            alt="Feature Image" class="feature-img hover-zoom"
                                                            style="width: 100%; display: block;"
                                                            class="feature-img-product">
                                                    </a>

                                                    <div class="read-more2">
                                                        body
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-2 CLOSED -->

                    <!-- ROW-3 OPEN -->
                    <div class="section bg-landing working-section  bg-white-2" id="About" style="padding: 160px 0 0;">

                        <div class="row">
                            <h2 class="text-center fw-semibold landing-card-header mt-5" style="font-size: 30px;margin-bottom: 10px;">About</h2>
                            <div class="text-center">
                                <p class="fw-semibold mx-auto" style="max-width: 500px;">
                                    Hamza crafts natural skincare rooted in the earth, harnessing mineral-rich ingredients
                                    to promote healthy, radiant beauty.
                                </p>
                                <a href="{{ route('web.about') }}" target="_blank"
                                    class="btn ripple btn-min w-lg mb-3 me-2 btn-primary">
                                    Learn More <i class="fe fe-arrow-up me-2 rotate-45"></i>
                                </a>
                            </div>
                            @foreach ($abouts as $about)
                                <div class="landing-hero landing-hero-about" id="home"
                                    style="background-image: url('{{ asset('uploads/image/abouts/' . $about->image) }}');">
                                    <div class="hero-overlay"></div>

                                    <div class="container px-sm-0 hero-content">
                                        <div class="row ">
                                            <div class="about_image">


                                                <h2 class="fw-bold text-white">
                                                    {{ $about->text }}
                                                </h2>

                                                <h6 class="pb-3 text-white" style="width: 30%;">
                                                    {{ $about->content }}
                                                </h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- ROW-3 CLOSED -->


                    <!-- ROW-5 OPEN -->
                    <div class="section" style="padding: 160px 0 0;">
                        <div class="row">
                            <section class="sptb demo-screen-demo faqs" style="background: transparent;" id="faqs-2">
                                <div class="container">
                                    <div class="row align-items-center">

                                        <h2 class="text-center fw-semibold">Recent Articles</h2>
                                        <div class="col-lg-12">

                                            <div class="row mt-7">

                                                @foreach ($articles as $article)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="card features main-features main-features-4 wow fadeInUp reveal revealleft active p-4"
                                                            style="margin-bottom: 10px; overflow: hidden; ; position: relative;">

                                                            <!-- Media -->
                                                            <div class="bg-img mb-3 text-left image-wrapper">
                                                                <a href="{{ route('web.readMore', $article->id) }}">
                                                                    <img src="{{ asset('uploads/image/articles/' . $article->image) }}"
                                                                        alt="Feature Image"
                                                                        class="feature-img hover-zoom">

                                                                    <div class="read-more">
                                                                        Read more
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="articles_div">
                                                                <span
                                                                    style="font-weight: 300;">{{ $article->name }}</span>
                                                                <span
                                                                    style="font-weight: 300;">{{ $article->date }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- ROW-5 CLOSED -->


                    <!-- ROW-6 OPEN -->
                    <div class="bg-landing section  bg-white-2" style=" padding: 160px 0 0;">
                        <div class="row angeles">

                            <h2 class="text-center fw-semibold">Made in Los Angeles, Ca</h2>
                            <div class="pricing-tabs text-center p-0">

                                <div class="tab-content text-start">
                                    <div class="tab-pane pb-0 active show" id="annualyear">
                                        <div class="row d-flex align-items-center justify-content-center ">
                                            @foreach ($angeles as $info)
                                                <div class="col-12 col-sm-6 col-lg-6 col-xl-3 angeles_col ">
                                                    <div class="card angeles_card " style="background: transparent;">
                                                        <div class="card-header pb-0" style="background: transparent;">
                                                            <h5 class="card-title mb-0 pb-0">{{ $info->text }}</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            {{ $info->desc }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-6 CLOSED -->

                    <!-- ROW-7 OPEN -->
                    <div class="section pt-0" id="Contact" style="padding:0px;">
                        <div class="row">
                            @foreach ($contact as $info)
                                <div class="landing-hero landing-hero-about" id="home"
                                    style="background-image: url('{{ asset('uploads/image/contact/' . $info->image) }}');">
                                    <div class="hero-overlay"></div>

                                    <div class="container px-sm-0 hero-content">
                                        <div class="row ">
                                            <div class="about_content">


                                                <h2 class="fw-bold text-white">
                                                    {{ $info->questions }}
                                                </h2>

                                                <h6 class="pb-3 text-white">
                                                    {{ $info->description }}
                                                </h6>
                                                <a href="{{ route('web.contact') }}" target="_blank"
                                                    class="btn ripple btn-min w-lg mb-3 me-2 btn-primary">
                                                    contact <i class="fe fe-arrow-up me-2 rotate-45"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- ROW-7 CLOSED -->


                </div>
            </div>
            <!--app-content closed-->
        </div>
    </div>
@endsection


@section('script')
@endsection
