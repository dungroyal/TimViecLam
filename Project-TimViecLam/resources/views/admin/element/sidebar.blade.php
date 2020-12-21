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
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase"></i>
                        <span>QL Công ty</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('admin.new.company')}}">Công ty chờ duyệt</a></li>
                        <li><a href="{{ Route('admin.all.company')}}">Tất cả công ty</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span>QL Hồ sơ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('admin.new.job_seeker')}}">Hồ sơ chờ duyệt</a></li>
                        <li><a href="{{ Route('admin.all.job_seeker')}}">Tất cả hồ sơ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-pin"></i>
                        <span>QL Tin tuyển dụng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('admin.new.job_post')}}">Tin chờ duyệt</a></li>
                        <li><a href="{{ Route('admin.all.job_post')}}">Tất cả tin</a></li>
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
                        <i class="bx bx-grid-alt"></i>
                        <span>Quản lý danh mục</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ Route('admin.category.career')}}">Ngành nghề</a></li>
                        <li><a href="{{ Route('admin.category.type_job')}}">Loại công việc</a></li>
                    </ul>
                </li>
                <li>
                    <a data-pjax href="{{ Route('admin.system')}}" class="waves-effect">
                        <i class="bx bx-slider"></i>
                        <span>Cấu hình hệ thống</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
