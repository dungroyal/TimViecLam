@extends('layouts.home')
@section('title', 'Đặt Lại Mật Khẩu - ')

@section('content')

<div class="bg_login-uv margin-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-7 card-title--uv text-white mt-5 mr-5 pl-5">
                <h1 class="card-title">Đặt Lại Mật Khẩu</h1>
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
                        <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="input-group form-group mb-3 mt-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                </div>
                                <input id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                                required
                                placeholder="Vui lòng nhập email của bạn "
                                autocomplete="email"
                                autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn float-right login_btn">Khôi phục mật khẩu</button>
                            </div>
                        </form>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success mx-4 text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center text__login-uv--bottom">
                            Bạn đã nhớ tài khoản? <a href="{{ Route('login')}}">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
