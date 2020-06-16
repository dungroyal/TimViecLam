@extends('home.main')
@section('content')
<div class="breadcrumb-area set-bg" data-setbg="{{ asset('home') }}/img/breadcrumb/breadcrumb-normal.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>ĐĂNG NHẬP</h2>
                    <div class="breadcrumb__option">
                        <a href="/"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>ĐĂNG NHẬP</span>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <html>
<head>
</head>
    <div id="login-box">
      <div class="left-box">
        <h1>Nhà Tuyển Dụng</h1>
        <p>✔ Ứng viên sẵn sàng tiếp cận thông tin tuyển dụng</p>
        <p>✔ Không giới hạn tương tác với ứng viên qua hệ thống nhắn tin nội bộ MIỄN PHÍ</p>
        <p>✔ Quảng cáo thông minh</p>
        <p>✔ Nhận bản tin công việc phù hợp định kỳ</p>
        <button onclick="location.href='/dang-nhap/ntd'" class="social google">Đăng Nhập Nhà Tuyển Dụng</button>          
        </div>
        <div class="right-box">
          <h1 style="text-align:center;">Ứng Viên</h1>
          <p>✔ Công việc được cập nhật thường xuyên</p>
          <p>✔ Ứng tuyển công việc yêu thích HOÀN TOÀN MIỄN PHÍ</p>
          <p>✔ Hiển thị thông tin hồ sơ với nhà tuyển dụng hàng đầu</p>
          <p>✔ Hiển thị thông tin hồ sơ với nhà tuyển dụng hàng đầu</p>
        <button onclick="location.href='/dang-nhap/uv'" class="social facebook">Đăng Nhập Ứng Viên</button>    
      
        </div>
        <div class="or">OR</div>
    </div>
</div>

@endsection
