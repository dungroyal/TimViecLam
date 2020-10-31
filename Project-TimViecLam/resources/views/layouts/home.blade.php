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
    <!-- Style -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/t_style.css') }}" rel="stylesheet">
  </head>
</head>
<body>
  <header class="container">
    <a href="/"><img class="logo" src="{{ asset('home/images/Logo.png') }}" alt=""></a>
    <nav>
        <ul>
            <li>
                <a href="/job">Việc Làm</a>
            </li>
            {{-- <li>
              <a href="/blog">Góc Nghề Nghiệp</a>
            </li> --}}
            <li>
              <a href="/login"class="menu-button--dk">Đăng nhập</a>
            </li>
            <li>
              <a href="/register"class="menu-button--dk">Đăng kí</a>
            </li>
            <li>
                <a href="#" class="menu-button--ntd">Nhà tuyển dụng</a>
            </li>
        </ul>
    </nav>
</header>

<main class="py-4">
  @yield('content')
</main>
  <footer class="page-footer font-small mdb-color pt-4 ">

    
    <div class="container page-footer__bottom text-center text-md-left text-primary">
      <div class="row text-center text-md-left mt-3 pb-3">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <img src="{{ asset('home/images/Logo_White.png') }}" alt="" class="footer-img">    
        </div>

        <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-white">VỀ CHÚNG TÔI</h6>
            <div class="text__info--title">
              <p>
                <a href="#!">Về Timvieclam.xyz</a>
              </p>
              <p>
                <a href="#!">Quy Chế</a>
              </p>
              <p>
                <a href="#!">Quy Định Bảo Mật</a>
              </p>
              <p>
                <a href="#!">Điều Khoản Sử Dụng</a>
              </p>
           
          </div>
        </div>
  
        <hr class="w-100 clearfix d-md-none">

        <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-white">CÔNG CỤ</h6>
            <div class="text__info--title">
              <p>
                <a href="#!">Cổng Tra Cứu Lương</a>
              </p>
              <p>
                <a href="#!">Góc Nghề Nghiệp</a>
              </p>
              <p>
                <a href="#!">Báo Giá</a>
              </p>
              <p>
                <a href="#!">Liên Hệ Tài Trợ Sự Kiện</a>
              </p>
          </div>
        </div>
        <hr class="w-100 clearfix d-md-none">
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-white">Liên Hệ</h6>
            <div class="text__info--address">
              <p>
                <i class="fas fa-home mr-3"></i> Tô Ký, Phường Tân Chánh Hiệp, Q12
              </p>
              <p>
                <i class="fas fa-envelope mr-3"></i> huynq156@gmail.com
              </p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 01 234 567 88
              </p>
              <p>
                <i class="fas fa-print mr-3"></i> + 01 234 567 89
              </p>
          </div>
        </div>
      </div>
      <hr class="w-100 clearfix d-md-none">
      
      <div class="row page_footer--category">
        <div class="col-md-3 text__info col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold text-white">Việc Làm Theo Ngành Nghề</h6>
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
                  <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i class="fa fa-angle-double-right"></i>
                </p>
              </div>
          </div> 
        </div>
        <hr class="w-100 clearfix d-md-none">
        <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-white">Việc Làm Công Ty</h6>
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
                  <a class="text-primary"  href="#!">Xem Tất Cả</a>&nbsp;<i class="fa fa-angle-double-right"></i>
                </p>
              </div>
          </div>
        </div>
        <hr class="w-100 clearfix d-md-none">
        <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-white">VIỆC LÀM THEO TỈNH</h6>
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
                  <a class="text-primary"  href="#!">Xem Tất Cả</a>&nbsp;<i class="fa fa-angle-double-right"></i>
                </p>
              </div>
          </div>
        </div>
        <hr class="w-100 clearfix d-md-none">
        <div class="col-md-4 text__info col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-white"> Việc Làm Hấp Dẫn</h6>
          
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
                <a class="text-primary"  href="#!">Xem Tất Cả</a>&nbsp;<i class="fa fa-angle-double-right"></i>
              </p>
            </div>
        </div>
        </div>
      </div>
      <hr>
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-8">
          <p class="text-center text-md-left">© 2020 Copyright:
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

  <script src="plugin/jquery/jquery-3.5.1.min.js"></script>
  <script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="js/main.js"></script> --}}
</body>
</html>
