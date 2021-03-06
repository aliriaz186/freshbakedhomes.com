<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="Fresh baked homes is an independent steel home manufacturer using
    mainly virgin ocean shipping containers to
    make homes for every style, taste, and financial capability." name="description">
    <meta
        content="New Homes, Container Homes, Ocean Container Homes,  Shipping Container Homes, Modular Homes, Green Homes, Off Grid Homes, Solar Homes, Solar Houses, Fresh Baked Homes, Disaster Relief Housing, Disaster Relief Home, LED Grow Home, Grow Light Home, Affordable Home"
        name="keywords">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">



    @yield('extra-css')

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">



</head>

<body>

    @include('website.layout.navbar')

    @yield('content')

    @include('website.layout.footer')








    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src=" {{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src=" {{ asset('assets/js/main.js') }}"></script>



    @yield('extra-js')

</body>