<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz </title>

        <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Fontawesome 4.7 -->
        <link href="{{ asset('plugin/fontawesome/css/all.min.css') }}" rel="stylesheet">
        <!-- Plugin -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
        <!-- Style -->
        <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    </head>
</head>

<body>
    <header>
        <nav class="container-fluid navbar navbar-expand-xl navbar-light px-3">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo/logo.png') }}" width="250" alt="Logo Tìm Việc Làm">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @if (Auth::guard('employer')->user() !== null)
                @include('home.element.nav.employer')
            @elseif (Auth::guard('job_seeker')->user() !== null)
                @include('home.element.nav.job_seeker')
            @else
                @include('home.element.nav.guest')
            @endif

        </nav>
    </header>
    
    @yield('content')
    @include('home.element.footer')

    <a id="back-to-top" href="#" class="btn back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    <script src="{{ asset('plugin/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>
</body>

</html>
