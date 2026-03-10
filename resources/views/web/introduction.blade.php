@extends('web.include.content')

@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #111;
        }

        .article-container {
            display: flex;
            gap: 60px;
            max-width: 1400px;
            margin: auto;
        }

        /* Left */
        .article-sidebar {
            flex: 1;
        }

        .article-sidebar h2 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .article-meta {
            font-size: 13px;
            color: #777;
        }

        /* Right */
        .article-content {
            flex: 2;
            max-width: 800px;
        }

        .article-image {
            width: 100%;
            height: auto;
            margin-bottom: 40px;
        }

        .article-content h3 {
            margin: 30px 0 15px;
            font-size: 20px;
        }

        .article-content p {
            line-height: 1.7;
            margin-bottom: 20px;
            color: #444;
        }

        .article-content ul {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .article-content li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .article-container {
                flex-direction: column;
                padding: 40px 20px;
            }

            .article-sidebar {
                margin-bottom: 30px;
            }
        }

        .article-sidebar {
            position: sticky;
            top: 20px;
            max-height: 80vh;
            /* لا يزيد عن 80% من ارتفاع الشاشة */
            overflow-y: auto;
            /* إضافة scroll داخلي إذا المحتوى طويل */
        }

       @media (max-width: 992px) {
    .article-sidebar {
        position: static !important; /* تأكد من إلغاء sticky */
        top: auto !important;
        max-height: none !important;
        overflow: visible !important;
    }
}
    </style>
@endsection

@section('content')
    <section class="article-container">

        <!-- Left Side -->
        <div class="article-sidebar" style="position: sticky; top: 20px;">
            <h2>Skincare Simplified: Expert Tips</h2>
            <p class="article-meta">{{ $article->date }}</p>
        </div>

        <!-- Right Side -->
        <div class="article-content">

            <img src="{{ $article->image ? asset('uploads/image/articles/' . $article->image) : asset('webassets/assets/img/product-placeholder.png') }}"
                alt="Article Image" class="article-image">

            <h3>Introduction</h3>
            <p>
                {{ $article->description }}
            </p>

            <h3>{{ $article->headers }}</h3>
            <p>
                {{ $article->content }}
            </p>

            <div>
                <a href="{{ route('web.articles') }}" target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary">
                    View All <i class="fe fe-arrow-up me-2 rotate-45"></i>
                </a>
            </div>



    </section>
@endsection
