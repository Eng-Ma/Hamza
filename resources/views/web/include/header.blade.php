<!-- Main Header-->
<div class="main-header side-header">
    <div class="main-container container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
            <div class="hor-logo">
                <a class="main-logo" href="{{ route('web.index') }}">
                    <img src="{{ asset('webassets/assets/img/brand/Luma.jpg') }}"
                        class="header-brand-img desktop-logo" alt="logo">


                </a>
            </div>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="{{ route('web.index') }}"><img src=" {{ asset('webassets/assets/img/brand/Luma.jpg') }}"
                        class="mobile-logo" alt="logo"></a>
                <a href="{{ route('web.index') }}"><img src=" {{ asset('webassets/assets/img/brand/Luma.jpg') }}"
                        class="mobile-logo-dark" alt="logo"></a>
            </div>
        </div>
        <div class="main-header-right">
            <a href="#" class="position-relative pe-2 modal-effect" data-bs-effect="effect-scale"
                data-bs-toggle="modal" data-bs-target="#modaldemo9">
                <i class="fa fa-shopping-cart fa-2x cart_bl"></i>
                @php $cartCount = count(session()->get('cart', [])); @endphp
                @if ($cartCount > 0)
                    <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                        {{ $cartCount }}
                    </span>
                @endif
            </a>
            <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
            </button><!-- Navresponsive closed -->

            <div class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ms-auto">
                        <!-- SEARCH -->
                        <div class="header-nav-right p-3">
                            <a href="{{ route('register') }}" class="btn ripple btn-min w-sm btn-outline-primary me-2"
                                target="_blank">New User
                            </a>
                            <a href="{{ route('login') }}" class="btn ripple btn-min w-sm btn-primary me-2"
                                target="_blank">Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Header-->

<div class="landing-top-header overflow-hidden">
    <div class="top sticky">
        <!--APP-SIDEBAR-->
        <div class="landing-app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="landing-app-sidebar bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="main-sidemenu navbar px-0">
                        <a class="main-logo" href="{{ route('web.index') }}">
                            <img src="{{asset('webassets/assets/img/brand/Luma.jpg')}}" class="header-brand-img desktop-logo"
                                alt="logo">

                        </a>
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>



                        <ul class="side-menu" style="padding-right: 50px;">

                            <li class="slide">
                                <a class="custom-link active" href="{{ route('web.shop') }}"><span
                                        class="side-menu__label">Shop</span></a>
                            </li>
                            <li class="slide">
                                <a class="custom-link" href="{{ route('web.about') }}"><span
                                        class="side-menu__label">About</span></a>
                            </li>
                            <li class="slide">
                                <a class="custom-link" href="{{ route('web.articles') }}"><span
                                        class="side-menu__label">Articles</span></a>
                            </li>
                            <li class="slide">
                                <a class="custom-link" href="{{ route('web.contact') }}"><span
                                        class="side-menu__label">Contact</span></a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                        <div class="header-nav-right d-none d-lg-block">


                            @guest
                                <a href="{{ route('register') }}"
                                    class="btn ripple btn-min w-sm btn-outline-info me-2 scroll-btn">New User</a>
                                <a href="{{ route('login') }}" class="btn ripple btn-min w-sm btn-primary me-2">Login</a>
                            @else
                                <span class="me-2">Hi, {{ Auth::user()->name }}</span>
                                <a href="#" class="position-relative pe-2 modal-effect"
                                    data-bs-effect="effect-scale" data-bs-toggle="modal" data-bs-target="#modaldemo9">
                                    <i class="fe fe-shopping-cart fa-2x cart_bl" style="font-size: 20px !important"></i>
                                    @php $cartCount = count(session()->get('cart', [])); @endphp
                                    @if ($cartCount > 0)
                                        <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger"
                                            style="font-size: 8px !important">
                                            {{ $cartCount }}
                                        </span>
                                    @endif
                                </a>

                                {{-- <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn ripple btn-min w-sm btn-dark">Logout</button>

                                </form> --}}
                            @endguest
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>
</div>


<div class="modal fade" id="modaldemo9">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Shopping Cart</h6>
                <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (!empty($cart) && count($cart) > 0)
                    @php $total = 0; @endphp

                    <div class="list-group">
                        @foreach ($cart as $id => $item)
                            @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;
                            @endphp

                            <div class="list-group-item d-flex align-items-center mb-3">
                                <!-- صورة المنتج -->
                                <img src="{{ isset($item['image']) && $item['image'] != '' ? asset($item['image']) : asset('images/no-image.png') }}"
                                    alt="{{ $item['name'] }}" width="80" height="80" class="me-3">


                                <!-- تفاصيل المنتج -->
                                <div class="flex-grow-1">
                                    <h5>{{ $item['name'] }}</h5>
                                    <p class="mb-1">Price: ${{ $item['price'] }}</p>
                                    <form action="{{ route('cart.update') }}" method="POST"
                                        class="d-flex align-items-center">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                            min="1" class="form-control me-2" style="width:70px;">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </form>
                                </div>

                                <!-- المجموع الجزئي وحذف المنتج -->
                                <div class="text-end ms-3">
                                    <p class="mb-2"><strong>${{ $subtotal }}</strong></p>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- التوتال الكلي -->
                    <div class="d-flex justify-content-between mt-3">
                        <h5>Total:</h5>
                        <h5>${{ $total }}</h5>
                    </div>
                @else
                    <p class="text-center">Your cart is empty.</p>
                @endif
            </div>

            <div class="modal-footer justify-content-between">
                <!-- زر الدفع -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('checkout') }}" class="btn btn-dark">Shop</a>
                    <a href="{{ route('cart.index') }}" class="btn btn-secondary-gradient btn-block">CheckOut</a>
                </div>
                <div>
                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
