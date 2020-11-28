<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') Tìm Việc Làm - Tuyển dụng, tìm việc nhanh và hiệu quả với TimViecLam.xyz</title>
        <meta name="title" content="Tìm Việc Làm - Tuyển dụng, tìm việc nhanh và hiệu quả với TimViecLam.xyz">
        <meta name="description" content="Tìm Việc Làm - Trang Tìm Việc Làm Hiệu Quả và Uy Tín, Cập Nhật Hàng Nghìn Việc Làm Mới Mỗi Ngày. Website Tin Cậy Của Ứng Viên và Nhà Tuyển Dụng. Tạo Hồ Sơ Miễn Phí.">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://timvieclam.xyz/">
        <meta property="og:title" content="Tìm Việc Làm - Tuyển dụng, tìm việc nhanh và hiệu quả với TimViecLam.xyz">
        <meta property="og:description" content="Tìm Việc Làm - Trang Tìm Việc Làm Hiệu Quả và Uy Tín, Cập Nhật Hàng Nghìn Việc Làm Mới Mỗi Ngày. Website Tin Cậy Của Ứng Viên và Nhà Tuyển Dụng. Tạo Hồ Sơ Miễn Phí.">
        <meta property="og:image" content="{{ asset('images/Meta_TVL.png') }}">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Fontawesome 4.7 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <!-- Plugin -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
            <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
        <!-- Style -->
        <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    </head>
</head>

<body>
    <div id="app">
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


    <div id="sy-whatshelp">
        <div class="sywh-services">
          <a href="" class="messenger" data-tooltip="Livechat" data-placement="left" target="_blank">
            <i class="fa fa-comments"></i>
          </a>
          <a href="" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
            <i class="fa fa-whatsapp"></i>
          </a>
          <a href="" class="call" data-tooltip="Call" data-placement="left">
            <i class="fa fa-phone"></i>
          </a>
        </div>
        <a class="sywh-open-services" data-tooltip="HOTLINE TƯ VẤN" data-placement="left">
                      <i class="fa fa-comments"></i>
          <i class="fa fa-times"></i>
        </a>
      </div>
    <a id="back-to-top" href="#" class="btn back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    @if(Auth::guard('admin')->user() != null )
    <a href="{{Route('admin.dashboard')}}" class="btn admin-btn" ><i class="fas fa-cog fa-spin"></i></a>
    @endif
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>

</body>

</html>
