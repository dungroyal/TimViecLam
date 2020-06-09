<header class="header header--normal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('home') }}/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{request()->path() == '/'? 'active':''}}"><a href="/">Trang chủ</a></li>
                            <li class="{{request()->path() == 'job'? 'active':''}}"><a href="/job">Tuyển dụng</a></li>
                            <li class="{{request()->path() == 'blog'? 'active':''}}"><a href="/blog">Góc nghề nghiệp</a></li>
                            <li class="{{request()->path() == 'contact'? 'active':''}}"><a href="/contact">Liên hệ</a></li>
                            <li class="{{request()->path() == 'about'? 'active':''}}"><a href="/about">Giới thiệu</a></li>
                        </ul>
                    </nav>
                    <div class="header__menu__right">
                        <a href="#" class="primary-btn btn-hover color-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Tài khoản</a>
                        <a href="dang-nhap" class="primary-btn display_none" id="login-btn-employer">Đăng nhập</a>
                        <a href="dang-ky" class="primary-btn display_none" id="login-btn-job_seeker">Đăng ký</a>
                        
                        <!-- <a href="#" class="login-btn"><i class="fa fa-user"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>