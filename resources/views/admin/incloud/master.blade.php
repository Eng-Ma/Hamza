<!doctype html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">


    <!-- Title -->
    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('adminassets/assets/img/brand/Luma.jpg') }}" type="image/x-icon">

    <!-- Icons css -->
    <link href="{{ asset('adminassets/assets/css/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link id="style" href="{{ asset('adminassets/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('adminassets/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/assets/css/plugins.css') }}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{ asset('adminassets/assets/css/animate.css') }}" rel="stylesheet">
    @yield('style')

</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('adminassets/assets/img/svgicons/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">
        <div>
            <!-- main-header -->
            @include('admin.incloud.header')
            <!-- /main-header -->

            <!-- main-sidebar -->
            @include('admin.incloud.sidebar')
            <!-- main-sidebar -->
        </div>

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">

                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <h4 class="page-title">@yield('header')</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@yield('header_link')</li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('content-header')</li>
                        </ol>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center">
                        <div class="pe-1 mb-xl-0">
                        </div>
                        <div class="pe-1 mb-xl-0">
                        </div>
                        <div class="pe-1 mb-xl-0">
                        </div>
                        <div class="mb-xl-0">

                        </div>
                    </div>
                </div>
                <!-- breadcrumb -->

                <!-- row -->
                <div class="row">
                    @include('admin.alert.success')
                    @include('admin.alert.error')
                    @yield('content')
                </div>
                <!-- row closed -->
            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->

        <!-- sidebar-right-->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 box-shadow">
                <div class="tab-menu-heading border-0 p-3">
                    <div class="card-title mb-0">Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="sidebar-remove"><i class="fe fe-x"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                        class="fe fe-message-circle tx-15 me-2"></i> Chat</a></li>
                            <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-bell tx-15 me-2"></i>
                                    Notifications</a></li>
                            <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-users tx-15 me-2"></i>
                                    Friends</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active " id="side1">
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-primary brround avatar-md">CH</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>New Websites is Created</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">30 mins ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-danger brround avatar-md">N</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare For the Next Project</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">2 hours ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-info brround avatar-md">S</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Decide the live Discussion</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">3 hours ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-warning brround avatar-md">K</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Meeting at 3:00 pm</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">4 hours ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-success brround avatar-md">R</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">1 day ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-pink brround avatar-md">MS</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">1 day ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center border-bottom p-3">
                                <div class="">
                                    <span class="avatar bg-purple brround avatar-md">L</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">45 minutes ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list d-flex align-items-center p-3">
                                <div class="">
                                    <span class="avatar bg-blue brround avatar-md">U</span>
                                </div>
                                <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                                    <p class="mb-0 d-flex ">
                                        <b>Prepare for Presentation</b>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-clock text-muted me-1"></i>
                                            <small class="text-muted ms-auto">2 days ago</small>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane  " id="side2">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/12.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/1.jpg') }}"></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/2.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 minutes ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/8.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/11.jpg') }}"></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/6.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 minutes ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-lg brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/9.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-3">
                                        <strong>Olivia</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            12 minutes ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " id="side3">
                            <div class="list-group list-group-flush ">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/9.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Mozelle Belt</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/11.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Florinda Carasco</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/10.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Alina Bernier</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/2.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Zula Mclaughin</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/13.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Isidro Heide</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/12.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Mozelle Belt</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/4.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Florinda Carasco</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/7.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Alina Bernier</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/2.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Zula Mclaughin</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/14.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Isidro Heide</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/11.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Florinda Carasco</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/9.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Alina Bernier</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/15.jpg') }}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Zula Mclaughin</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div>
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{ asset('adminassets/assets/img/users/4.jpg') }}"></span>
                                    </div>
                                    <div class="ms-2">
                                        <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">
                                            Isidro Heide</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-light"
                                            data-bs-toggle="modal" data-bs-target="#chatmodel"><i
                                                class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

        <!-- Message Modal -->
        <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right chatbox" role="document">
                <div class="modal-content chat border-0">
                    <div class="card overflow-hidden mb-0 border-0">
                        <!-- action-header -->
                        <div class="action-header clearfix">
                            <div class="float-start hidden-xs d-flex ms-2">
                                <div class="img_cont me-3">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img" alt="img">
                                </div>
                                <div class="align-items-center mt-2">
                                    <h4 class="text-white mb-0 fw-semibold">Daneil Scott</h4>
                                    <span class="dot-label bg-success"></span><span
                                        class="me-3 text-white">online</span>
                                </div>
                            </div>
                            <ul class="ah-actions actions align-items-center">
                                <li class="call-icon">
                                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal"
                                        data-bs-target="#audiomodal">
                                        <i class="si si-phone"></i>
                                    </a>
                                </li>
                                <li class="video-icon">
                                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal"
                                        data-bs-target="#videomodal">
                                        <i class="si si-camrecorder"></i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="si si-options-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><i class="fa fa-user-circle"></i> View profile</li>
                                        <li><i class="fa fa-users"></i>Add friends</li>
                                        <li><i class="fa fa-plus"></i> Add to group</li>
                                        <li><i class="fa fa-ban"></i> Block</li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="si si-close text-white"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- action-header end -->

                        <!-- msg_card_body -->
                        <div class="card-body msg_card_body">
                            <div class="chat-box-single-line">
                                <abbr class="timestamp">February 1st, 2019</abbr>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you Jenna Side?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="msg_cotainer_send">
                                    Hi Connor Paige i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/9.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="msg_cotainer_send">
                                    You welcome Connor Paige
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/9.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/9.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/9.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start ">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Yo, Can you update Views?
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    But I must explain to you how all this mistaken born and I will give
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/9.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="img_cont_msg">
                                    <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                                        class="rounded-circle user_img_msg" alt="img">
                                </div>
                                <div class="msg_cotainer">
                                    Okay Bye, text you later..
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <!-- msg_card_body end -->
                        <!-- card-footer -->
                        <div class="card-footer">
                            <div class="msb-reply d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control " placeholder="Typing....">
                                    <div class="input-group-text bg-transparent border-0 p-0">
                                        <button type="button" class="btn btn-primary ">
                                            <i class="far fa-paper-plane" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- card-footer end -->
                    </div>
                </div>
            </div>
        </div>

        <!--Video Modal -->
        <div id="videomodal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark border-0 text-white">
                    <div class="modal-body mx-auto text-center p-5">
                        <h5>Valex Video call</h5>
                        <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                            class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                        <h4 class="mb-1 fw-semibold">Daneil Scott</h4>
                        <h6 class="loading">Calling...</h6>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-video-slash"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle text-white mb-0"
                                        href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-phone bg-danger text-white"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-microphone-slash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Audio Modal -->
        <div id="audiomodal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content border-0">
                    <div class="modal-body mx-auto text-center p-5">
                        <h5>Valex Voice call</h5>
                        <img src="{{ asset('adminassets/assets/img/users/6.jpg') }}"
                            class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                        <h4 class="mb-1  fw-semibold">Daneil Scott</h4>
                        <h6 class="loading">Calling...</h6>
                        <div class="mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-volume-up bg-light text-dark"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle text-white mb-0"
                                        href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-phone text-white bg-success"></i>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                        <i class="fas fa-microphone-slash bg-light text-dark"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- modal-body -->
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- Footer opened -->
        @include('admin.incloud.footer')
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('adminassets/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('adminassets/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('adminassets/assets/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('adminassets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('adminassets/assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ asset('adminassets/assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('adminassets/assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('adminassets/assets/js/sticky.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('adminassets/assets/js/eva-icons.min.js') }}"></script>

    <!--themecolor js-->
    <script src="{{ asset('adminassets/assets/js/themecolor.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('adminassets/assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- switcher-styles js -->
    <script src="{{ asset('adminassets/assets/js/swither-styles.js') }}"></script>
    @yield('script')
</body>

</html>
