@extends('layouts.home')
@section('title', 'Tạo tài khoản - ')

@section('content')
<div class="bg_login-uv margin-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5 card-title--uv mt-5 text-white">
                <h1 class="card-title">Đăng ký <br> nhà tuyển dụng</h1>
                <br>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Tiếp cận hàng triệu công việc hoàn toàn miễn
                    phí</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Ứng tuyển nhanh chóng, dễ dàng</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Nhận bản tin công việc phù hợp định kỳ</p>
                <p class="card-text mb-2"><i class="far fa-check-circle"></i> Nâng cao cơ hội tìm việc với chương trình ứng
                    viên năng động</p>
            </div>

            <div class="col-sm-12 col-lg-7 my-5">
                <div class="card  px-1">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="30%" class="my-2">
                        </div>

                        <form method="POST" action="{{ route('employer.register.submit') }}">
                            @csrf
                            <fieldset class="fieldset_custom">
                                <legend>Thông tin tài khoản</legend>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="email" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Tài khoản email</label>
                                    <div class="col-sm-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autocomplete="email"
                                            placeholder="Nhập tài khoản email"
                                            autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Mật khẩu</label>
                                    <div class="col-sm-8">
                                        <input id="password"
                                            type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            placeholder="Nhập mật khẩu"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Xác nhận mật khẩu</label>
                                    <div class="col-sm-8">
                                        <input id="password-confirm"
                                        type="password"
                                        class="form-control"
                                        name="password_confirmation"
                                        required
                                        placeholder="Nhập lại mật khẩu"
                                        autocomplete="new-password" />
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="fieldset_custom">
                                <legend>Thông tin công ty</legend>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="name_contact" class="col-sm-4 col-form-label"> <span class="text-danger">*</span> Tên người liên hệ</label>
                                    <div class="col-sm-8">
                                        <input id="name_contact" type="text"
                                            class="form-control @error('name_contact') is-invalid @enderror"
                                            name="name_contact"
                                            value="{{ old('name_contact') }}"
                                            required
                                            placeholder="Nhập tên người liên hệ"
                                            autocomplete="name_contact">

                                        @error('name_contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="phone" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Số điện thoại liên hệ
                                    </label>
                                    <div class="col-sm-8">
                                        <input id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            name="phone"
                                            value="{{ old('phone') }}"
                                            required
                                            placeholder="Nhập số điện thoại người liên hệ"
                                            autocomplete="phone">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-sm-left text-lg-right">
                                    <label for="name_company" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Tên công ty</label>
                                    <div class="col-sm-8">
                                        <input id="name_company" type="text"
                                            class="form-control @error('name_company') is-invalid @enderror"
                                            name="name_company"
                                            value="{{ old('name_company') }}"
                                            required
                                            placeholder="Nhập tên đầy đủ theo GPKD của công ty"
                                            autocomplete="name_company" >

                                        @error('name_company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-sm-left text-lg-right">
                                    <label for="personnel_size" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Quy mô nhân sự</label>
                                    <div class="col-sm-8">
                                        <select name="personnel_size" id="personnel_size" class="form-control selectpicker @error('personnel_size') is-invalid @enderror">
                                            <option>Chọn quy mô nhân sự</option>
                                            <option value="0">Dưới 20 người</option>
                                            <option value="1">20 - 150 người </option>
                                            <option value="2">150 - 300 người </option>
                                            <option value="3">Trên 300 người</option>
                                        </select>
                                        @error('personnel_size')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label class="col-sm-4 col-form-label"><span class="text-danger">*</span> Lĩnh vực hoạt động</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select-career w-100  @error('career[]') is-invalid @enderror"
                                            name="career[]"
                                            data-size="7" 
                                            data-live-search="true"
                                            title="Chọn lĩnh vực hoạt động"
                                            >
                                            @foreach (App\Models\Career::all() as $item)
                                                <option class="py-2" value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('career[]')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="address" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Địa chỉ công ty</label>
                                    <div class="col-sm-8">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror"
                                            name="address"
                                            value="{{ old('address') }}"
                                            required
                                            placeholder="Nhập địa chỉ công ty"
                                            autocomplete="address">
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-sm-left text-lg-right">
                                    <label for="city" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Tỉnh/thành phố</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select-city w-100  @error('city') is-invalid @enderror" 
                                        name="city"
                                        id="city"
                                        data-size="7" data-live-search="true"
                                        title="Địa điểm làm việc">
                                            @foreach (App\Models\City::all()  as $item)
                                                <option class="py-2" value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-n3">
                                    <label for="email" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input  @error('confirm') is-invalid @enderror" 
                                                    type="checkbox" value="1"
                                                    id="confirm" name="confirm" required>
                                                <label class="form-check-label" for="confirm"> Đồng ý với các 
                                                    <a href=""><strong>Quy định bảo mật</strong></a> & 
                                                    <a href=""><strong>Thỏa thuận sử dụng</strong></a> của <strong>Tìm Việc Làm</strong>
                                                </label>
                                                @error('confirm')
                                                    <div class="invalid-feedback">
                                                        Bạn phải đồng ý trước khi gửi.
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group text-center">
                                <button type="submit" class="btn float-right login_btn text-uppercase font-weight-bold">Đăng ký nhà tuyển dụng</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center text__login-uv--bottom">
                            Bạn đã có tài khoản? <a href="{{ Route('employer.login')}}">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
