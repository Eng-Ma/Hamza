<!doctype html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4">

    <!-- Title -->
    <title>Login In </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('webassets/assets/img/brand/favicon.png') }}')}}" type="image/x-icon">

    <!-- Icons css -->
    <link href="{{asset('webassets/assets/css/icons.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link id="style" href="{{asset('webassets/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- style css -->
    <link href="{{asset('webassets/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('webassets/assets/css/plugins.css')}}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{asset('webassets/assets/css/animate.css')}}" rel="stylesheet">

</head>

<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('webassets/assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{asset('webassets/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('webassets/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Moment js -->
    <script src="{{asset('webassets/assets/plugins/moment/moment.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{asset('webassets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- eva-icons js -->
    <script src="{{asset('webassets/assets/js/eva-icons.min.js')}}"></script>

    <!--themecolor js-->

    <script src="{{asset('webassets/assets/js/themecolor.js')}}"></script>

    <!-- custom js -->
    <script src="{{asset('webassets/assets/js/custom.js')}}"></script>

    <!-- switcher-styles js -->
    <script src="{{asset('webassets/assets/js/swither-styles.js')}}"></script>
</body>

</html>
