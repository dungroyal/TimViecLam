@extends('layouts.home')
@section('title', 'Đăng nhập - ')

@section('content')
<div class="bg_login-uv margin-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-7 card-title--uv text-white mt-5 mr-5 pl-5">
                <h1 class="card-title">Đăng nhập ứng viên</h1>
                <br>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Tiếp cận hàng triệu công việc hoàn toàn miễn
                    phí</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Ứng tuyển nhanh chóng, dễ dàng</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Nhận bản tin công việc phù hợp định kỳ</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Nâng cao cơ hội tìm việc với chương trình ứng
                    viên năng động</p>

            </div>
            <div class="col-sm-12 col-lg-4 my-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="60%" class="mb-4 mt-2">
                        </div>
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"> </i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required placeholder="Mật khẩu" autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                <button type="submit" class="btn float-right login_btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                <div class="border-bottom w-100 ml-5 mt-3"></div>
                                <span class="px-2 small text-muted font-weight-bold text-muted mt-3">Hoặc</span>
                                <div class="border-bottom w-100 mr-5 mt-3"></div>
                            </div>

                            <div class="text-center text-md">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a class="btn-floating--fb btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating--tw btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center forgotpassword__login-uv">
                                <a href="{{ route('password.request') }}" class=>Quên Mật Khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center text__login-uv--bottom">
                            Bạn chưa có tài khoản? <a href="{{ Route('register')}}">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
