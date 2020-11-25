<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz</title>
    <meta content="Tìm việc làm nhanh" name="description">
    <meta content="Royal Team" name="author">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugin/bootstrap-datepicker-1.9.0/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css">
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

        <div class="page-content">
            @yield('content')
        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('plugin/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('plugin/simplebar/simplebar.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('plugin/bootstrap-datepicker-1.9.0/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-datepicker-1.9.0/locales/bootstrap-datepicker.vi.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('admin/js/admin.js') }}"></script>
    @stack('scripts')
</body>

</html>
