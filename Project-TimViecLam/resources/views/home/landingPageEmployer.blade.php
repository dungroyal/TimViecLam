@extends('layouts.home')

@section('content')
<div class="banner-ntd py-5">
    <div class="container">
      <div class="row margin0-mb justify-content-center">
        <div class="col-xs-12 hidden-xs col-sm-8 paddingRight0 paddingLeft5 bgWhite-mb  pl12mb pr12mb">
          <h2 class="text-white text-center pb-2">
            <b>Tuyển dụng nhanh chóng, dễ dàng và hiệu quả hơn cùng Tìm Việc Làm </b>
          </h2>
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-white">
              <div class="cycle-white">
                <i class="icon-hs-ntd"></i>
              </div>
              <h3 class="text-center">
                <div class="">300.000 +</div>
                <div class="">Hồ sơ ứng tuyển</div>
              </h3>
            </div>

            <div class="col-xs-12 col-sm-4 text-white">
              <div class="cycle-white">
                <i class="icon-ntv-ntd"></i>
              </div>
              <h3 class="text-center">
                <div class="">100.000 +</div>
                <div class="">Người tìm việc</div>
              </h3>
            </div>

            <div class="col-xs-12 col-sm-4 text-white">
              <div class="cycle-white">
                <i class="icon-num-ut"></i>
              </div>
              <h3 class="text-center">
                <div class="">12.000.000 +</div>
                <div class="">Lượt ứng tuyển</div>
              </h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txr">
          <a href="{{ Route('employer.dashboard') }}" class="">
            <button type="button" class="el-button btn-block post-news">
              <span>Đăng Tin tuyển dụng</span></button></a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <a href="#" class=""><button type="button"
              class="el-button btn-block el-button--primary selective-uv">
              <span>Lọc hồ sơ ứng viên</span></button></a>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="container">
    <div class="page-wrapper">
      <div class="post-slider">
        <h1 class="slider-title">Khách Hàng Của Chúng Tôi</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
        <div class="post-wrapper">
          <div class="post">
            <img src="images/ct1.png" class="slider-image" alt=""/>
          </div>
          <div class="post">
            <img src="images/ct2.jpg" class="slider-image" alt=""/>
          </div>
          <div class="post">
            <img src="images/ct3.png" class="slider-image" alt=""/>
          </div>
          <div class="post">
            <img src="images/ct4.png" class="slider-image" alt=""/>
          </div>
          <div class="post">
            <img src="images/ct5.png" class="slider-image" alt=""/>
          </div>
          <div class="post">
            <img src="images/ct4.png" class="slider-image" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="hidden-sm hidden-md row-list-pr my-5">
    <div class="container">
      <div class="row relative dflex-mb flex-col margin0-mb">
        <div class="col-xs-12 col-sm-5 paddingRight0">
          <h2 class="fontSize40 txt-36 font300 fontSize30-mb marginTop30-mb">Đăng tin tuyển dụng Miễn phí</h2>
          <ul class="list-char-pr padding0 marginTop45 marginTop30-mb">
            <li>
              <span class="cycle-green">1</span>
              <span class="txt-in-70">Nhiều ứng viên xem tin</span>
            </li>
            <li>
              <span class="cycle-green marginTop0">2</span>
              <span class="txt-in-70">Đăng tin nhanh chóng và nhận được nhiều hồ sơ ứng tuyển</span>
            </li>
            <li>
              <span class="cycle-green">3</span>
              <span class="txt-in-70">Quản lý hồ sơ ứng viên thuận tiện</span>
            </li>
          </ul>
          <div class="paddingTop10">
            <a target="_blank" href="#" class="btn btn-orange-48 w220 ">ĐĂNG TUYỂN NGAY 
                <i class="fas fa-arrow-right icon-sprite-new icon-next-white"></i></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-7">
          <h4><img src="images/home-offer.png" class="pst-img-big"/></h4>
        </div>
      </div>
    </div>
  </div>

  <div class="box-number-system-candidate bg-dark my-5 text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="col-section3-data">
            <div class="cycle-white"><i class="icon-hs-ntd"></i></div>
            <div class="col-section3-title">
                <strong class="col-section3-font">1.000.000+</strong>
                <br>
                <span>Hồ sơ ứng tuyển</span></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-section3-data">
            <div class="cycle-white"><i class="icon-ntv-ntd"></i></div>
            <div class="col-section3-title">
                <strong class="col-section3-font">500.000+</strong>
                <br>
                <span>Ứng viên tiềm năng</span></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-section3-data">
            <div class="cycle-white"><i class="icon-num-ut"></i></div>
            <div class="col-section3-title">
                <strong class="col-section3-font">12.000.000+</strong><br>
                <span>Lượt ứng tuyển</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row-list-pr my-5">
    <div class="container">
      <div class="row margin0-mb">
        <div class="col-xs-12 col-sm-7">
          <h4><img src="images/home-offer-2.png" class="mar-img"></h4>
        </div>
        <div class="col-xs-12 col-sm-5">
          <h2 class="">Lọc hồ sơ</h2>

          <ul class="list-char-pr">
            <li>
              <span class="cycle-green">1</span>
              <span class="txt-in-70">Tìm ứng viên tốt nhất trong thời gian ngắn nhất</span>
            </li>
            <li>
              <span class="cycle-green">2</span>
              <span class="txt-in-70">Truy cập không giới hạn, dữ liệu hồ sơ người tìm việc chi tiết, chất lượng</span>
            </li>
            <li>
              <span class="cycle-green">3</span>
              <span class="txt-in-70">Chủ động tìm ứng viên ngay hôm nay</span>
            </li>
          </ul>
          <div class="paddingTop10">
            <a target="_blank" href="#" class="btn btn-orange-48 ">LỌC HỒ SƠ ỨNG VIÊN NGAY <i
                class="fas fa-arrow-right icon-sprite-new icon-next-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="hidden-sm row-list-pr bgWhite paddingTop0 paddingBottom0">
    <div class="container">
      <div class="row margin0 relative dflex-mb flex-col">
        <div class="div-dky-tv">
          <div class="row margin0">
            <div class="col-xs-12 col-sm-4 padding0">
              <a href="#" class="btn btn-orange-52">ĐĂNG KÝ TƯ VẤN NGAY</a>
            </div>
            <div class="col-xs-12 col-sm-8">
              <div class="fontSize16 txt-36 txc-mb">
                  Hoặc vui lòng liên hệ với chúng tôi qua Hotline Hỗ trợ:
            </div>
              <div class="">(028) 7109 1111 <span
                  class="hidden-xs">|</span> <br class="visible-xs">(024) 7308 3879 </div>
            </div>
            <div class="w195 floatLeft div-icon-gd">
              <i class="icon-goi-dien"></i>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div> --}}
@endsection
