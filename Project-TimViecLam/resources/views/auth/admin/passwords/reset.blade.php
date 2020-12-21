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
                                        <p>Khôi phục mật khẩu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div class="p-2">
                                <div class="alert alert-success text-center mb-4 d-none" role="alert">
                                    Enter your Email and instructions will be sent to you!
                                </div>
                                <form class="form-horizontal" action="#">
        
                                    <div class="form-group">
                                        <label for="useremail">Địa chỉ Email</label>
                                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                    </div>
                
                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                        </div>
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
