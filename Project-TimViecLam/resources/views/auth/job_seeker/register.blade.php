@extends('layouts.home')
@section('title', 'Tạo tài khoản - ')

@section('content')
<div class="bg_login-uv margin-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5 card-title--uv mt-5 text-white">
                <h1 class="card-title">Đăng ký ứng viên</h1>
                <br>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Tiếp cận hàng triệu công việc hoàn toàn miễn
                    phí</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Ứng tuyển nhanh chóng, dễ dàng</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Nhận bản tin công việc phù hợp định kỳ</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Nâng cao cơ hội tìm việc với chương trình ứng
                    viên năng động</p>

            </div>
            <div class="col-sm-12 col-lg-7 my-5">
                <div class="card  px-2">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="30%" class="my-2">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                              <label for="name">Họ và tên <span class="text-danger">*</span></label>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                  <label for="email">Địa Chỉ Email <span class="text-danger">*</span></label>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group col">
                                  <label for="phone">Số điện thoại <span class="text-danger">*</span></label>
                                  <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col">
                                <label for="password">Mật khẩu <span class="text-danger">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group col">
                                <label for="name">Xác Nhận Mật Khẩu <span class="text-danger">*</span></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn float-right login_btn">Đăng ký ứng viên</button>
                            </div>
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                <div class="border-bottom w-100 ml-5 mt-4"></div>
                                <span class="px-2 small text-muted font-weight-bold text-muted active  mt-4">Hoặc</span>
                                <div class="border-bottom w-100 mr-5 mt-4"></div>
                            </div>

                            <div class="form-group text-center">
                                <a href="#" type="submit" class="btn float-right login_btn mb-2 bg-primary"><i class="fab fa-facebook-f mr-3"></i> Đăng ký nhanh qua Facebook</a>
                            </div>
                            <div class="form-group text-center">
                                <a href="#" class="btn float-right login_btn  bg-danger">  <i class="fab fa-google mr-3"></i> Đăng ký nhanh qua Google</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center text__login-uv--bottom">
                            Bạn đã có tài khoản? <a href="{{ Route('login')}}">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
