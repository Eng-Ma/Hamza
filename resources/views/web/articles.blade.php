@extends('web.include.content')
@section('style')
    <link rel="stylesheet" href="{{ asset('webassets/assets/css/style_new.css') }}">
@endsection
@section('content')
    <!-- ROW-5 OPEN -->
    <div class="section">
        <div class="row">
            <section class="sptb demo-screen-demo faqs" style="background: transparent;" id="faqs-2">
                <div class="container">
                    <div class="row align-items-center">

                        <h2 class="text-center fw-semibold">The Latest</h2>
                        <div class="col-lg-12">

                            <div class="row mt-7">

                                @foreach ($articles as  $article )
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="card features main-features main-features-4 wow fadeInUp reveal revealleft active"
                                        style="margin-bottom: 10px; overflow: hidden; ; position: relative;">

                                        <!-- Media -->
                                        <div class="bg-img mb-3 text-left image-wrapper">
                                            <a href="{{ route('web.readMore', $article->id) }}">
                                                <img src="{{ asset('uploads/image/articles/' . $article->image) }}"
                                                    alt="Feature Image" class="feature-img hover-zoom">

                                                <div class="read-more">
                                                    Read more
                                                </div>
                                            </a>
                                        </div>
                                        <div class="articles_div">
                                            <span> {{$article->name}} </span>
                                            <span>{{$article->date}}</span>
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
@endsection
