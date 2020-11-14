<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz</title>

    <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fontawesome 4.7 -->
    <link href="{{ asset('plugin/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
    <!-- Style -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
  </head>
</head>
<body>
    <header>
    <nav class="container-fluid navbar navbar-expand-lg navbar-light px-3">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo/logo.png') }}" width="250" alt="Logo Tìm Việc Làm">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline ml-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="form-inline my-2 my-lg-0 navbar-nav font-weight-bold font-header">
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/job"><i class="fas fa-tools mr-2 icon-menu"></i> TẤT CẢ VIỆC LÀM
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/blog"><i class="fas fa-blog mr-2 icon-menu"></i> GÓC NGHỀ NGHIỆP
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="{{ Route('login')}}"><i class="fas fa-lock mr-2 icon-menu"></i> ĐĂNG NHẬP </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="{{ Route('register')}}"><i class="fas fa-user mr-2 icon-menu"></i> ĐĂNG KÝ </a>
                        </li>
                        <li class="nav-item ml-3 bg-primary btn mb-3 mb-md-0 ml-md-3">
                            <a class="text-white p-2" href="/employer">NHÀ TUYỂN DỤNG</a>
                        </li>
                    </div>
            </form>
        </div>
    </nav>
</header>
@yield('content')

<footer class="page-footer font-small mdb-color pt-4">
    <div class="container page-footer__bottom text-center text-md-left text-primary">
        <div class="row text-center text-md-left mt-3 pb-3">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <img src="images/logo/Logo_White.png" alt="" class="footer-img" />
            </div>

            <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    VỀ CHÚNG TÔI
                </h6>
                <div class="text__info--title">
                    <p>
                        <a href="intro.html">Về Timvieclam.xyz</a>
                    </p>
                    <p>
                        <a href="security.html">Quy Định Bảo Mật</a>
                    </p>
                    <p>
                        <a href="use.html">Thỏa Thuận Sử Dụng</a>
                    </p>
                    <p>
                        <a href="bvtt.html">Chính Sách BV Thông Tin Cá Nhân</a>
                    </p>
                </div>
            </div>

            <hr class="w-100 clearfix d-md-none" />

            <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    CÔNG CỤ
                </h6>
                <div class="text__info--title">
                    <p>
                        <a href="#!">Quản Lý Tuyển Dụng</a>
                    </p>
                    <p>
                        <a href="#!">Quản Lý Hồ Sơ</a>
                    </p>
                    <p>
                        <a href="#!">Báo Giá</a>
                    </p>
                    <p>
                        <a href="#!">Liên Hệ Tài Trợ Sự Kiện</a>
                    </p>
                </div>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    Liên Hệ
                </h6>
                <div class="text__info--address">
                    <p>
                        <i class="fas fa-home mr-3"></i> Tô Ký, Phường Tân Chánh Hiệp,
                        Q12
                    </p>
                    <p><i class="fas fa-envelope mr-3"></i> huynq156@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
            </div>
        </div>
        <hr class="w-100 clearfix d-md-none" />

        <div class="row page_footer--category">
            <div class="col-md-3 text__info col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    Việc Làm Theo Ngành Nghề
                </h6>
                <div class="text__info--title">
                    <p>
                        <a href="#!">Việc Làm Kinh Doanh</a>
                    </p>
                    <p>
                        <a href="#!">Việc Làm Bán Hàng</a>
                    </p>
                    <p>
                        <a href="#!">Việc Làm Kế Toán</a>
                    </p>
                    <p>
                        <a href="#!">Chăm Sóc Khách Hàng</a>
                    </p>
                    <div class="text__info--all">
                        <p>
                            <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                class="fa fa-angle-double-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    Việc Làm Công Ty
                </h6>
                <div class="text__info--title">
                    <p>
                        <a href="#!">VinFast Tuyển Dụng</a>
                    </p>
                    <p>
                        <a href="#!">Timvieclam.xyz Tuyển Dụng</a>
                    </p>
                    <p>
                        <a href="#!">Family Tuyển Dụng</a>
                    </p>
                    <p>
                        <a href="#!">Nhà Tao Tuyển Dụng</a>
                    </p>
                    <div class="text__info--all">
                        <p>
                            <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                class="fa fa-angle-double-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    VIỆC LÀM THEO TỈNH
                </h6>
                <div class="text__info--title">
                    <p>
                        <a href="#!">Việc Làm TPHCM</a>
                    </p>
                    <p>
                        <a href="#!">Việc Làm Hà Nội</a>
                    </p>
                    <p>
                        <a href="#!">Việc Làm Quảng Ngãi</a>
                    </p>
                    <p>
                        <a href="#!">Việc Làm Vũng Tàu</a>
                    </p>
                    <div class="text__info--all">
                        <p>
                            <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                class="fa fa-angle-double-right"></i>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-4 text__info col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                    Việc Làm Hấp Dẫn
                </h6>

                <div class="text__info--title">
                    <p>
                        <a href="#!">Tìm Việc Làm</a>
                    </p>
                    <p>
                        <a href="#!">Việc Làm Thêm</a>
                    </p>
                    <p>
                        <a href="#!">Lao Động Phổ Thong</a>
                    </p>
                    <p>
                        <a href="#!">Thực Tập Sinh</a>
                    </p>
                    <div class="text__info--all">
                        <p>
                            <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                class="fa fa-angle-double-right"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-center text-md-left">
                    © 2020 Copyright:
                    <a href="timvieclam.xyz">
                        <strong> Timvieclam.xyz</strong>
                    </a>
                </p>
            </div>
            <div class="col-md-5 col-lg-4 ml-lg-0">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating--fb btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating--tw btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating--gg btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating--link btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="back-to-top" href="#" class="btn back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

  <script src="{{ asset('plugin/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <script src="{{ asset('home/js/main.js') }}"></script>
</body>
</html>
