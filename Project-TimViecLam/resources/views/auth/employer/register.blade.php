@extends('layouts.home')
@section('title', 'Tạo tài khoản - ')

@section('content')


<div class="bg_login-uv">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5 card-title--uv mt-5 text-white">
                <h1 class="card-title">Đăng ký <br> nhà tuyển dụng</h1>
                <br>
                <p class="card-text"><i class="far fa-check-circle"></i> Tiếp cận hàng triệu công việc hoàn toàn miễn
                    phí</p>
                <p class="card-text"><i class="far fa-check-circle"></i> Ứng tuyển nhanh chóng, dễ dàng</p>
                <p class="card-text"><i class="far fa-check-circle"></i> Nhận bản tin công việc phù hợp định kỳ</p>
                <p class="card-text"><i class="far fa-check-circle"></i> Nâng cao cơ hội tìm việc với chương trình ứng
                    viên năng động</p>

            </div>

            <div class="col-sm-12 col-lg-7 my-5">
                <div class="card  px-1">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="30%" class="my-2">
                        </div>

                        <form method="POST" action="{{ route('register') }}">
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
                                    <label for="email" class="col-sm-4 col-form-label"> <span class="text-danger">*</span> Tên người liên hệ</label>
                                    <div class="col-sm-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            placeholder="Nhập tên người liên hệ"
                                            autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="email" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Số điện thoại liên hệ
                                    </label>
                                    <div class="col-sm-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            placeholder="Nhập số điện thoại người liên hệ"
                                            autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="email" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Tên công ty</label>
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
                                <div class="form-group row">
                                    <label for="city" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Quy mô nhân sự</label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="AK">Chọn quy mô nhân sự</option>
                                            <option value="AK">10 người </option>
                                            <option value="AK">20 người </option>
                                            <option value="AK">30 người </option>
                                            <option value="AK">40 người </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="email" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Lĩnh vực hoạt động</label>
                                    <div class="col-sm-8">
                                        <select class="select2 form-control select2-multiple" name="operation"
                                        id="operation" multiple="multiple" data-placeholder="Choose ...">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                        </optgroup>
                                        <optgroup>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        </optgroup>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row text-lg-left text-lg-right">
                                    <label for="email" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Địa chỉ công ty</label>
                                    <div class="col-sm-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            placeholder="Nhập địa chỉ công ty"
                                            autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-sm-4 col-form-label"><span class="text-danger">*</span> Tỉnh/thành phố</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2">
                                            <optgroup>
                                            <option value="AK">Chọn tỉnh thành phố</option>
                                            <option value="AK">Hồ Chí Minh </option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                        </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-n3">
                                    <label for="email" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input is-invalid" type="checkbox" value=""
                                                    id="invalidCheck3" required>
                                                <label class="form-check-label" for="invalidCheck3">
                                                    Đồng ý với các <a href=""><strong>Quy định bảo mật</strong></a> & <a
                                                        href=""><strong>Thỏa thuận sử dụng</strong></a> của <strong>Tìm
                                                        Việc Làm</strong>
                                                </label>
                                                {{-- <div class="invalid-feedback">
                                                    Bạn phải đồng ý trước khi gửi.
                                                  </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group text-center">
                                <button type="submit"
                                    class="btn float-right login_btn text-uppercase font-weight-bold">Đăng ký nhà tuyển
                                    dụng</button>
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
