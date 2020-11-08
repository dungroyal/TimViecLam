<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tìm việc làm nhanh" name="description">
    <meta content="Royal Team" name="author">

    <!-- BootStrap 4 -->
    <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        @section('header') @show
        @section('sidebar') @show
        <div class="main-content">
            <div id="preloader">
                <div id="status">
                    <div class="spinner-chase">
                        <img src="../images/logo/favicon.png" id="preloader-logo__spinder" alt="Logo" height="30">
                        <div class="chase-dot"></div>
                        <div class="chase-dot"></div>
                        <div class="chase-dot"></div>
                        <div class="chase-dot"></div>
                        <div class="chase-dot"></div>
                    </div>
                </div>
            </div>

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> © TimViecLam.xyz
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by <a href="https://www.facebook.com/Quocdungroyal/"> Royal Team.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="rightbar-overlay"></div>

    <script src="{{ asset('plugin/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugin/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('plugin/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
