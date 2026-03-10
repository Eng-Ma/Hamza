@extends('web.include.content')
@section('style')
    <style>
        .contact-section {
            background: #f3f3f3;
        }

        .contact-container {
            display: flex;
            min-height: 80vh;
        }

        .contact-image {
            position: relative;
            width: 55%;
            display: flex;
            justify-content: center;
            /* يركّز أفقياً */
            align-items: center;
            /* يركّز عمودياً */
        }

        .contact-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contact-image h1 {
            position: absolute;
            /* يبقى فوق الصورة */
            font-size: 70px;
            color: #fff;
            font-weight: 500;
            margin: 0;
            text-align: center;
        }

        .contact-info {
            width: 45%;
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-block {
            margin-bottom: 60px;
        }

        .label {
            font-size: 12px;
            letter-spacing: 2px;
            color: #777;
            display: block;
            margin-bottom: 10px;
        }

        .contact-info h2 {
            font-size: 28px;
            font-weight: 500;
        }

        .social-icons a {
            margin-right: 15px;
            font-size: 20px;
            color: #000;
            transition: 0.3s;
        }

        .social-icons a:hover {
            opacity: 0.6;
        }
    </style>
@endsection
@section('content')
    <section class="contact-section">
        <div class="contact-container">

            <!-- Left Image -->
            <div class="contact-image bg-img-contact">
                <img src="{{ asset('uploads/image/contact/' . $contact->image) }}" alt="Contact Image" class="feature-img-contact">
                <h1>Contact</h1>
            </div>

            <!-- Right Content -->
            <div class="contact-info">

                <div class="info-block">
                    <span class="label">(ORDERS)</span>
                    <h2><a href="mailto:hamzaabusalah2022@gmail.com">hamzaabusalah2022@gmail.com</a>.</h2>
                </div>

                <div class="info-block">
                    <span class="label">(INFO)</span>
                    <h2><a href="mailto:hamzaabusalah2022@gmail.com">hamzaabusalah2022@gmail.com</a>.</h2>
                </div>

                <div class="info-block">
                    <span class="label">(FOLLOW US)</span>
                    <div class="social-icons">
                        <!-- YouTube -->
                        @if ($contact && $contact->youTube)
                            <a href="{{ $contact->youTube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        @endif

                        <!-- LinkedIn -->
                        @if ($contact && $contact->linkedin)
                            <a href="{{ $contact->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        @endif

                        <!-- Twitter -->
                        @if ($contact && $contact->twitter)
                            <a href="{{ $contact->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif

                        <!-- Instagram -->
                        @if ($contact && $contact->instagram)
                            <a href="{{ $contact->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
