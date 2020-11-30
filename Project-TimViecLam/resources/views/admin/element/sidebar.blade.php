<div class="vertical-menu">
    <div data-simplebar="" class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title text-center text-white-50">Trang Admin TVL</li>
                <li>
                    <a data-pjax href="{{ Route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bxs-dashboard"></i>
                        <span>Quản lý chung</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-search-alt"></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-message-detail"></i>
                        <span>Liên hệ</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase"></i>
                        <span>QL Nhà Tuyển Dụng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('admin.new.company')}}">Công ty mới</a></li>
                        <li><a href="{{ Route('admin.all.company')}}">Tất cả công ty</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span>QL Người tìm việc</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('admin.new.job_seeker')}}">Người tìm việc mới</a></li>
                        <li><a href="{{ Route('admin.all.job_seeker')}}">Tất cả Người tìm việc</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-info-circle"></i>
                        <span>QL tài khoản</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ Route('admin.account.employer')}}">TK Nhà tuyển dụng</a></li>
                    <li><a href="{{ Route('admin.account.job_seeker')}}">TK Người tìm việc</a></li>
                    <li><a href="{{ Route('admin.account.admin')}}">TK Quản trị viên</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span>Quản lý hệ thống</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Hồ sơ đã lưu</a></li>
                        <li><a href="#">Hồ sơ đã xem</a></li>
                        <li><a href="#">Hồ sơ ứng tuyển</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
