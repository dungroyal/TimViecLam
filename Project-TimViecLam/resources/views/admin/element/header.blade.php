<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ Route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/images/logo/icon_white.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="/images/logo/logo_white.png" alt="" height="25">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                id="vertical-menu-btn">
                <i class="bx bxs-dock-left font-weight-bold"></i>
            </button>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>
            <?php
                $countCompany = App\Models\Company::where('status',0)->count();
                $countProfile = App\Models\Profiles::where('status',0)->count();
                $countJob = App\Models\Job::where('status',0)->count();
            ?>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge badge-danger badge-pill">
                        {{$countCompany+$countProfile+$countJob}}
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Thông báo </h6>
                            </div>
                        </div>
                    </div>
                    @if($countCompany>0)
                    <div data-simplebar="" style="max-height: 230px;">
                        <a href="{{ Route('admin.new.company')}}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="fas fa-hotel"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1 font-weight-bold">Công ty chờ duyệt</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Có <strong>{{$countCompany}}</strong> công ty đang chờ duyệt</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    
                    @if($countProfile>0)
                    <div data-simplebar="" style="max-height: 230px;">
                        <a href="{{ Route('admin.new.job_seeker')}}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="far fa-address-card"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1  font-weight-bold">Hồ sơ chờ duyệt</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Có <strong>{{$countProfile}}</strong> hồ sơ đang chờ duyệt</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    
                    @if($countJob>0)
                    <div data-simplebar="" style="max-height: 230px;">
                        <a href="{{ Route('admin.new.job_post')}}" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="fas fa-blog"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1  font-weight-bold">Tin tuyển dụng chờ duyệt</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Có <strong>{{$countJob}}</strong> tin tuyển dụng chờ duyệt</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                        src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&bold=true&name={{Auth::guard('admin')->user()->name}}"
                        alt="{{Auth::guard('admin')->user()->name}}">
                    
                    <span class="d-none d-xl-inline-block ml-1"> {{Auth::guard('admin')->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ Route('employer.company_info') }}"><i class="bx bx-user font-size-16 align-middle mr-1"></i>
                        Hồ sơ công ty</a>
                    {{-- <a class="dropdown-item d-block" href="#"><span
                            class="badge badge-success float-right">5</span><i
                            class="bx bx-wrench font-size-16 align-middle mr-1"></i> Cài đặt</a> --}}
                    {{-- <a class="dropdown-item" href="#"><i
                            class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Khóa màn hình</a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                            class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Đăng
                        xuất</a>
                </div>
            </div>
        </div>
    </div>
</header>
