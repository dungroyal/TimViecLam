<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tìm việc làm nhanh" name="description">
    <meta content="Royal Team" name="author">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <!-- CSS -->
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="account-pages my-2 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row ">
                                <div class="col-6">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Quản trị viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            {{-- <div>
                                <a href="{{ Route('home')}}">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('/images/logo/icon.png') }}" alt="" class="rounded-circle" height="55">
                                        </span>
                                    </div>
                                </a>
                            </div> --}}
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf
    
                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    
            
                                    <div class="form-group">
                                        <label for="userpassword">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" placeholder="Nhập mật khẩu">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Lưu đăng nhập</label>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light text-uppercase" type="submit">Đăng nhập quản trị</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="{{Route('admin.forgot_password')}}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Quên mật khẩu?</a>
                                    </div>
                                </form>
                            </div>
        
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        
                        <div>
                            <p>© 2020 TìmViệcLàm.xyz. Developed by <i class="mdi mdi-heart text-danger"></i>  <a href="https://www.facebook.com/Quocdungroyal/">Royal Team</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('plugin/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('plugin/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/js/admin.js') }}"></script>
</body>

</html>
