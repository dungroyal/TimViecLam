@extends('layouts.home')

@section('content')
<div class="banner-ntd margin-header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 hidden-xs col-sm-8 mt-4">
        <h1 class="txc text-white text-center">
          <b>Tuyển dụng nhanh chóng, dễ dàng và hiệu quả hơn cùng</b>
          <h2 class="text-center text-white font-weight-bold">Tìm Việc Làm</h2>
        </h1>
        <div class="row">
          <div class="col-xs-12 col-sm-4 txc text-white">
            <div class="cycle-white">
              <i class="icon-hs-ntd"></i>
            </div>
            <h3>
              <div class="title-note-banner-ntd text-white">300.000 +</div>
              <div class="note-banner-ntd">Hồ sơ ứng tuyển</div>
            </h3>
          </div>
          <div class="col-xs-12 col-sm-4 txc text-white">
            <div class="cycle-white">
              <i class="icon-ntv-ntd"></i>
            </div>
            <h3>
              <div class="title-note-banner-ntd text-white">100.000 +</div>
              <div class="note-banner-ntd">Người tìm việc</div>
            </h3>
          </div>

          <div class="col-xs-12 col-sm-4 txc text-white">
            <div class="cycle-white">
              <i class="icon-num-ut"></i>
            </div>
            <h3>
              <div class="title-note-banner-ntd text-white">12.000.000 +</div>
              <div class="note-banner-ntd">Lượt ứng tuyển</div>
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txr">
        <a href="{{ Route('employer.dashboard') }}">
          <button type="button" class="el-button btn-block mb-n mt-10 post-news">
            <span>Đăng Tin tuyển dụng</span></button></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <a href="{{ Route('all-profile') }}"><button type="button"
            class="el-button btn-block mb-n mt-10 el-button--primary selective-uv">
            <span>Lọc hồ sơ ứng viên</span></button></a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="page-wrapper">
    <div class="post-slider">
      <h1 class="slider-title">Khách Hàng Của Chúng Tôi</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>
      <div class="post-wrapper">
        <div class="post">
          <img src="images/ct1.png" class="slider-image" alt="">
        </div>
        <div class="post">
          <img src="images/ct2.jpg" class="slider-image" alt="">
        </div>
        <div class="post">
          <img src="images/ct3.png" class="slider-image" alt="">
        </div>
        <div class="post">
          <img src="images/ct4.png" class="slider-image" alt="">
        </div>
        <div class="post">
          <img src="images/ct5.png" class="slider-image" alt="">
        </div>
        <div class="post">
          <img src="images/ct4.png" class="slider-image" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<div class="row-list-pr bgGray">
  <div class="container">
    <div class="row relative">
      <div class="col-xs-12 col-sm-5">
        <h2 class="section-title-ntd">Đăng tin tuyển dụng Miễn phí</h2>

        <ul class="note-list-char list-char-pr">
          <li>
            <span class="cycle-green">1</span>
            <span class="text-note-char">Nhiều ứng viên xem tin</span>
          </li>
          <li>
            <span class="cycle-green marginTop0">2</span>
            <span class="text-note-char">Đăng tin nhanh chóng và nhận được nhiều hồ sơ ứng tuyển</span>
          </li>
          <li>
            <span class="cycle-green">3</span>
            <span class="text-note-char">Quản lý hồ sơ ứng viên thuận tiện</span>
          </li>
        </ul>
        <div>
          <a target="_blank" href="#" class="btn btn-orange-48">ĐĂNG TUYỂN NGAY <i
              class="fas fa-arrow-right icon-sprite-new icon-next-white"></i></a>
        </div>

      </div>

      <div class="col-xs-12 col-sm-7">
        <h4><img src="images/home-offer.png" class="pst-img-big"></h4>
      </div>
    </div>
  </div>
</div>
<div class="box-number-system-candidate bg-white mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="col-section3-data">
          <div class="cycle-white"><i class="icon-hs-ntd"></i></div>
          <div class="col-section3-title"><strong class="col-section3-font">1.000.000+</strong><br><span>Hồ sơ ứng
              tuyển</span></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-section3-data">
          <div class="cycle-white"><i class="icon-ntv-ntd"></i></div>
          <div class="col-section3-title"><strong class="col-section3-font">500.000+</strong><br><span>Ứng viên tiềm
              năng</span></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-section3-data">
          <div class="cycle-white"><i class="icon-num-ut"></i></div>
          <div class="col-section3-title"><strong class="col-section3-font">12.000.000+</strong><br><span>Lượt ứng
              tuyển</span></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-list-pr bgGray">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7">
        <h4><img src="images/home-offer-2.png" class="mar-img"></h4>
      </div>

      <div class="col-xs-12 col-sm-5">
        <h2 class="section-title-ntd">Lọc hồ sơ</h2>

        <ul class="list-char-pr mt-5">
          <li>
            <span class="cycle-green">1</span>
            <span class="text-note-char">Tìm ứng viên tốt nhất trong thời gian ngắn nhất</span>
          </li>
          <li>
            <span class="cycle-green">2</span>
            <span class="text-note-char">Truy cập không giới hạn, dữ liệu hồ sơ người tìm việc chi tiết, chất lượng</span>
          </li>
          <li>
            <span class="cycle-green">3</span>
            <span class="text-note-char">Chủ động tìm ứng viên ngay hôm nay</span>
          </li>
        </ul>
        <div class="paddingTop10">
          <a target="_blank" href="#" class="btn btn-orange-48">LỌC HỒ SƠ ỨNG VIÊN NGAY <i
              class="fas fa-arrow-right icon-sprite-new icon-next-white"></i></a>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="row-list-pr-hotline mt-4">
  <div class="container">
    <div class="row relative">
      <div class="div-dky-tv">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <a href="#" class="btn btn-orange-52">ĐĂNG KÝ TƯ VẤN NGAY</a>
          </div>

          <div class="col-xs-12 col-sm-8">
            <div class="fontSize16 txt-36 txc-mb ">hoặc vui lòng liên hệ với chúng tôi qua Hotline Hỗ
              trợ:</div>
            <div class="fontSize24 text-red txc-mb">(028) 7109 1111 <span
                class="hidden-xs">|</span> <br class="visible-xs">(024) 7308 3879 </div>
          </div>
          <div class="icon-telephone-ntd div-icon-gd">
            <i class="icon-goi-dien"></i>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
@endsection
