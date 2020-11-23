<div class="vertical-menu">
    <div data-simplebar="" class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title text-center text-white-50">Trang quản lý</li>
                <li>
                    <a href="{{ Route('employer.dashboard') }}" class="waves-effect">
                        <i class="bx bxs-dashboard"></i>
                        <span>Quản lý chung</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-search-alt"></i>
                        <span>Tìm kiếm ứng viên</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase"></i>
                        <span>Tuyển dụng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('employer.showCreateJobPostForm')}}">Đăng tuyển dụng mới</a></li>
                        <li><a href="#">Tất cả tin tuyển dụng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span>Quản lý hồ sơ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Hồ sơ đã lưu</a></li>
                        <li><a href="#">Hồ sơ đã xem</a></li>
                        <li><a href="#">Hồ sơ ứng tuyển</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-info-circle"></i>
                        <span>Thông tin công ty</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ Route('employer.company_info') }}">Cập nhật thông tin</a></li>
                        <li><a href="#">Đổi mật khẩu</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
