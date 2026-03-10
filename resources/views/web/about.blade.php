@extends('web.include.content')

@section('style')
    <link rel="stylesheet" href="{{ asset('webassets/assets/css/style_new.css') }}">
    <style>
        .card_header_icon {
            text-align: center;
            display: flex;
            justify-content: center;
            background: transparent;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')
    @if ($firstAbout)
        <div class="landing-hero" id="home"
            style="background-image: url('{{ asset('uploads/image/abouts/' . $firstAbout->image) }}');">
            <div class="hero-overlay"></div>

            <div class="container px-sm-0 hero-content">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">


                        <h1 class="fw-bold text-white">
                            {{ $firstAbout->text }}
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
        <div class="container px-sm-0">
            <div class="row">
                @if ($secondAbout)
                    @php
                        // النص الطويل من العنصر الأول
                        $content = $secondAbout->content ?? '';

                        // تقسيم النص على الفقرات (\n) لتجنب استهلاك كبير للذاكرة
                        $paragraphs = preg_split("/\r\n|\n|\r/", $content, -1, PREG_SPLIT_NO_EMPTY);

                        // دمج الفقرات لتوزيع النص على عمودين تقريبًا متساويين
                        $half = ceil(count($paragraphs) / 2);
                        $firstParts = implode("\n\n", array_slice($paragraphs, 0, $half));
                        $secondParts = implode("\n\n", array_slice($paragraphs, $half));
                    @endphp


                    <div class="col-xl-6 col-lg-6 my-auto">
                        <img class="img-fluid w-100" style="height: 600px; object-fit: cover;"
                            src="{{ asset('uploads/image/abouts/' . $secondAbout->image) }}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 animation-zidex pos-relative d-flex align-items-center">

                        <div class="w-100">

                            <h1 class="fw-bold mb-4 text-start" style="font-size: 22px">
                                {{ $secondAbout->text }}
                            </h1>

                            <div class="row g-0">

                                <div class="col-lg-6 col-sm-12 col-md-12 pe-lg-3">
                                    <h6 class="pb-3 mb-0">
                                        {!! nl2br(e($firstParts)) !!}
                                    </h6>
                                </div>

                                <div class="col-lg-6 col-sm-12 col-md-12 ps-lg-3">
                                    <h6 class="pb-3 mb-0">
                                        {!! nl2br(e($secondParts)) !!}
                                    </h6>
                                </div>

                            </div>

                        </div>

                    </div>
                @endif
            </div>
        </div>
    </div>

    @if ($threeAbout)
        <div class="landing-hero landing-hero-about" id="home"
            style="background-image: url('{{ asset('uploads/image/abouts/' . $threeAbout->image) }}');">
            <div class="hero-overlay"></div>

            <div class="container px-sm-0 hero-content">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <h2 class="text-white">{{ $threeAbout->text }}</h2>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <h6 class=" text-white">
                            {{ $threeAbout->content }}
                        </h6>
                    </div>

                </div>
            </div>
        </div>
    @endif

    <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
        <div class="container px-sm-0">
            <div class="row">

                @if ($fourAbout)
                    <div class="col-xl-6 col-lg-6 animation-zidex pos-relative d-flex align-items-center">

                        <div class="w-100 pe-0">
                            <h1 class="fw-bold mb-3 text-start">
                                {{ $fourAbout->text }}
                            </h1>

                            <p class="mb-0">
                                {{ $fourAbout->content }}
                            </p>
                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-6 my-auto">
                        <img class="img-fluid w-100" style="height: 600px; object-fit: cover;"
                            src="{{ asset('uploads/image/abouts/' . $fourAbout->image) }}" alt="">
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="bg-landing section  bg-white" style="padding-bottom: 0px">
        <div class="row angeles">

            <h2 class="text-center fw-semibold">Made With Care</h2>
            <div class="pricing-tabs text-center">

                <div class="tab-content text-start">
                    <div class="tab-pane pb-0 active show" id="annualyear">
                        <div class="container">
                            <div class="row d-flex align-items-center justify-content-center "
                                style="background: transparent;">
                                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 angeles_col2 ">
                                    <div class="card angeles_card " style="background: transparent;">
                                        <div class="card-header pb-0 card_header_icon">
                                            <li class="icons-list-item" style="border: 0"><i class="bi-asterisk"
                                                    data-bs-toggle="tooltip" title="bi-asterisk"></i></li>
                                        </div>
                                        <div class="card-body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 angeles_col2">
                                    <div class="card angeles_card " style="background: transparent;">
                                        <div class="card-header pb-0 card_header_icon">

                                            <li class="icons-list-item" style="border: 0"><i class="bi-asterisk"
                                                    data-bs-toggle="tooltip" title="bi-asterisk"></i></li>
                                        </div>
                                        <div class="card-body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 angeles_col2">
                                    <div class="card angeles_card " style="background: transparent;">
                                        <div class="card-header pb-0 card_header_icon">
                                            <li class="icons-list-item" style="border: 0"><i class="bi-asterisk"
                                                    data-bs-toggle="tooltip" title="bi-asterisk"></i></li>
                                        </div>
                                        <div class="card-body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 angeles_col2">
                                    <div class="card angeles_card " style="background: transparent;">
                                        <div class="card-header pb-0 card_header_icon">
                                            <li class="icons-list-item" style="border: 0"><i class="bi-asterisk"
                                                    data-bs-toggle="tooltip" title="bi-asterisk"></i></li>
                                        </div>
                                        <div class="card-body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 angeles_col2">
                                    <div class="card angeles_card " style="background: transparent;">
                                        <div class="card-header pb-0 card_header_icon">
                                            <li class="icons-list-item" style="border: 0"><i class="bi-asterisk"
                                                    data-bs-toggle="tooltip" title="bi-asterisk"></i></li>
                                        </div>
                                        <div class="card-body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-xl-4 angeles_col2">
                                    <div class="card angeles_card " style="background: transparent;">
                                        <div class="card-header pb-0 card_header_icon">
                                            <li class="icons-list-item" style="border: 0"><i class="bi-asterisk"
                                                    data-bs-toggle="tooltip" title="bi-asterisk"></i></li>
                                        </div>
                                        <div class="card-body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section p-0" id="sectionfaq">
        <div class="row">
            @foreach ($contact as $info)
                <div class="landing-hero" id="home"
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
@endsection

@section('script')
    <script>
        import {
            createIcons,
            asterisk
        } from 'lucide';

        createIcons({
            icons: {
                asterisk
            }
        });
    </script>
@endsection
