<div class="vertical-menu">
    <div data-simplebar="" class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title text-center text-white-50">Trang cá nhân</li>
                <li>
                    <a data-pjax href="{{ Route('job-seeker.dashboard') }}" class="waves-effect">
                        <i class="bx bxs-dashboard"></i>
                        <span>Quản lý chung</span>
                    </a>
                </li>
                <li>
                    <a data-pjax href="{{ Route('job-seeker.profile_manager') }}" class="waves-effect ">
                        <i class="bx bx-user-pin"></i>
                        <span>Quản lý hồ sơ</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase"></i>
                        <span>Quản lý việc làm</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Việc làm đã ứng tuyển</a></li>
                        <li><a href="#">Việc làm đã lưu</a></li>
                        <li><a href="#">Công việc phù hợp</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span>Quản lý tài khoản</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a data-pjax href="{{ Route('job-seeker.account')}}">Cập nhật thông tin</a></li>
                        <li><a href="#">Đổi mật khẩu</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
