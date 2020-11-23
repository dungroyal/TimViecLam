<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <div class="navbar-brand-box">
                <a href="{{ Route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../images/logo/icon_white.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="../images/logo/logo_white.png" alt="" height="25">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="bx bxs-dock-left font-weight-bold"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('images\house-icon.png') }}" alt="Trang chủ">
                                    <span>Trang chủ</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('images\recruitment-icon.png') }}" alt="Tuyển dụng">
                                    <span>Tuyển dụng</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('images\support-icon.png') }}" alt="Hỗ trợ">
                                    <span>Hổ trợ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Thông báo </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar="" style="max-height: 230px;">
                        <div class="text-center py-3">Không có thông báo mới!</div>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> Xem thêm..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&bold=true&name={{ Auth::guard('job_seeker')->user()->name}}" alt="{{ Auth::guard('job_seeker')->user()->name}}">
                    <span class="d-none d-xl-inline-block ml-1">{{ Auth::guard('job_seeker')->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Hồ sơ</a>
                    <a class="dropdown-item d-block" href="#"><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Cài đặt</a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Khóa màn hình</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST"action="{{route('logout')}}">
                        @csrf
                        <button class="dropdown-item text-danger" type="submit"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Đăng xuất</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
