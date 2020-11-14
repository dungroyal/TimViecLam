<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="ml-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="form-inline my-2 my-lg-0 navbar-nav font-weight-bold font-header">
                <li class="nav-item ml-3 text-uppercase">
                    <a class="nav-link" href="/job"><i class="fas fa-search-plus icon-menu mr-1"></i></i> 
                        Lọc hồ sơ
                    </a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="/blog"><i class="fas fa-blog mr-1 icon-menu"></i> 
                        GÓC NGHỀ NGHIỆP
                    </a>
                </li>

                <li class="nav-item ml-2 btn mb-3 mb-md-0 ml-md-3">
                    <div class="dropdown-btn-custom">
                        <div class="dropdown-btn-custom__select">
                            <img src="https://ui-avatars.com/api/?background=fffff&name={{ Auth::guard('employer')->user()->name_company }}" alt="" width="10px" class="mr-2 rounded rounded-circle-20">
                            <p class="dropdown-btn-custom__selected text_ellipsis max-w-300">{{ Auth::guard('employer')->user()->name_company }}</p>
                            <i class="fa fa-caret-down dropdown-btn-custom__caret ml-2"></i>
                        </div>
                        <ul class="dropdown-btn-custom__list">
                            <li class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Trang quản lý</span>
                                <i class="fas fa-tachometer-alt dropdown-btn-custom__icon"></i>
                            </li>
                            <li class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Đăng tin mới</span>
                                <i class="fa fa-plus-circle dropdown-btn-custom__icon"></i>
                            </li>
                            <li class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Tin đã đăng</span>
                                <i class="fa fa-cog dropdown-btn-custom__icon"></i>
                            </li>
                            <li class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Hồ sơ ứng tuyển</span>
                                <i class="fa fa-cog dropdown-btn-custom__icon"></i>
                            </li>
                            <li class="dropdown-btn-custom__item" onclick="location.href='{{route('employer.logout')}}';">
                                <span class="dropdown-btn-custom__text">Thoát</span>
                                <i class="fas fa-sign-out-alt dropdown-btn-custom__icon"></i>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
    </form>
</div>
