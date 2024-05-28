<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/plugin/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/plugin/owl.transitions.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/frontend/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/frontend/css/toastr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/themify-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/seo.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/theme-color/default.css') }}" rel="stylesheet" id="theme-color" type="text/css">

    @yield('css')
</head>

<body>

    @include('frontend.include.header')

    @yield('content')

    @include('frontend.include.footer')


    <!-- Site Wraper End -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>

    <!-- Easing Effect Js -->
    <script src="{{ asset('assets/frontend/js/plugin/jquery.easing.js') }}" type="text/javascript"></script>
    <!-- bootstrap Js -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- carousel Js -->
    <script src="{{ asset('assets/frontend/js/plugin/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- revolution Js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/frontend/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.revolution.js') }}"></script>
    <!-- masonry Js -->
    <script src="{{ asset('assets/frontend/js/plugin/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/frontend/js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/js/mixitup.min.js') }}" type="text/javascript"></script>

    <!-- custom Js -->
    <script src="{{ asset('assets/frontend/js/custom.js') }}" type="text/javascript"></script>

    @yield('js')

</body>


</html>
