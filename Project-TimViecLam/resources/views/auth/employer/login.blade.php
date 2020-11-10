@extends('layouts.home')
@section('title', 'Đăng nhập nhà tuyển dụng - ')

@section('content')

<div class="bg_login-uv">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-7 card-title--uv text-white mt-5 mr-5 pl-5">
                <h1 class="card-title">Đăng nhập nhà tuyển dụng</h1>
                <br>
                <p class="card-text"><i class="far fa-check-circle"></i> Tiếp cận hàng triệu công việc hoàn toàn miễn
                    phí</p>
                <p class="card-text"><i class="far fa-check-circle"></i> Ứng tuyển nhanh chóng, dễ dàng</p>
                <p class="card-text"><i class="far fa-check-circle"></i> Nhận bản tin công việc phù hợp định kỳ</p>
                <p class="card-text"><i class="far fa-check-circle"></i> Nâng cao cơ hội tìm việc với chương trình ứng
                    viên năng động</p>

            </div>
            <div class="col-sm-12 col-lg-4 my-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="60%" class="lazy mb-3 mt-2" data-original="images/logo/logo-low-quality.png">
                        </div>
                        <!-- <div class="text-center">
                            <h6 class="mb-3 font-weight-bold">Đăng nhập nhà tuyển dụng</h6>
                        </div> -->
                        <form method="POST" action="{{ route('employer.login.submit') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="small font-weight-bold">Email <span class="text-danger">*</span></label>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="small font-weight-bold">Mật khẩu <span class="text-danger">*</span></label>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input id="password"
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password"
                                        required
                                        autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                              </div>
                            <div class="form-group row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Nhớ đăng nhập</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn float-right login_btn mb-3">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="text-center forgotpassword__login-uv">
                                <a href="{{ route('password.request') }}" class=>Quên Mật Khẩu?</a>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center text__login-uv--bottom">
                            Bạn chưa có tài khoản? <a href="{{ Route('employer.register')}}">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
