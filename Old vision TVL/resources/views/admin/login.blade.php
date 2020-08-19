<!DOCTYPE html>
<html lang="en">

    @include('admin.element.head')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="/">
                                <img src="{{ asset('home') }}/img/logo.png" alt="Super Admin" width="60%">
                            </a>
                        </div>
                        <h4 style='text-align:center' class="mb-3">Đăng nhập trang quảng trị TimViecLam</h4>
                        <div class="login-form">
                            <form action="/admin/admin_login" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                {{-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> --}}
                                <input class="au-btn au-btn--block au-btn--green m-b-20" type="submit" value="Đăng nhập">
                                {{-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> --}}
                            </form>
                            <div class="register-link">
                                <p>Liên hệ Admin để có tài khoản quản trị</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('admin.element.script')
</body>

</html>