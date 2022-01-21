<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ config('page_description') }}">
    <meta name="keywords" content="{{ config('page_keyword') }}">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="googlebot" content="index,follow">
    <meta name="googlebot" content="noodp">
    <meta name="robots" content="index,follow">
    <meta name="robots" content="noodp">
    <meta name="Revisit" content="1 days">
    <meta name="Revisit-after" content="1 days">

    <link rel="shortcut icon" href="{{ \App\SiteConfig::config('logo') }}">

    <title>{{ \App\SiteConfig::config('name') }} @yield('title')</title>


    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}">

    {{-- #custom --}}
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">

    @yield('custom-style')
</head>

<body class="app">
    <a href="#" id="scroll" style="display: none;"><span></span></a>
    @include('customer.layouts.header')
    @yield('content')
    @include('customer.layouts.footer')

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/font-awesome.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/aos.js') }}"></script>
    <script src="{{ url('assets/js/customer.js') }}"></script>
</body>

</html>
