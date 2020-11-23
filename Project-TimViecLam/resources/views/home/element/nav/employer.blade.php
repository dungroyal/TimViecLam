<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="ml-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="form-inline my-2 my-lg-0 navbar-nav font-weight-bold font-header">
                <li class="nav-item nav-item__cusstom ml-3">
                    <a class="nav-link text-dark" href="#">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-square-text mb-1 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        GÓC NGHỀ NGHIỆP 
                    </a>
                </li>

                <li class="nav-item nav-item__cusstom ml-3 mb-1">
                        |
                </li>

                <li class="nav-item nav-item__cusstom ml-3">
                    <a class="nav-link text-blue" href="{{ Route('login') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-funnel-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                          </svg>
                        LỌC HỒ SƠ
                    </a>
                </li>

                <li class="nav-item nav-item__cusstom ml-3">
                    <a class="nav-link text-blue" href="{{ Route('register') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket3-fill mb-1 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172z"/>
                            <path d="M2.468 15.426L.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>
                          </svg>
                        BẢNG GIÁ DICH VỤ
                    </a>
                </li>

                <li class="nav-item ml-2 btn mb-3 mb-md-0 ml-md-3">
                    <div class="dropdown-btn-custom">
                        <div class="dropdown-btn-custom__select">
                            <img src="https://ui-avatars.com/api/?background=fffff&name={{ Auth::guard('employer')->user()->email }}" alt="" width="10px" class="mr-2 rounded rounded-circle-20">
                            <p class="dropdown-btn-custom__selected text_ellipsis max-w-300">{{ Auth::guard('employer')->user()->email }}</p>
                            <i class="fa fa-caret-down dropdown-btn-custom__caret ml-2"></i>
                        </div>
                        <ul class="dropdown-btn-custom__list">
                            <li onclick="location.href='{{route('employer.dashboard')}}';" class="dropdown-btn-custom__item text-white">
                                <span class="dropdown-btn-custom__text">Trang quản lý</span>
                                <i class="fas fa-tachometer-alt dropdown-btn-custom__icon"></i>
                            </li>
                            <li  onclick="location.href='{{route('employer.showCreateJobPostForm')}}';"  class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Đăng tin mới</span>
                                <i class="fa fa-plus-circle dropdown-btn-custom__icon"></i>
                            </li>
                            <li onclick="location.href='{{route('employer.showCreateJobPostForm')}}';" class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Tin đã đăng</span>
                                <i class="fa fa-cog dropdown-btn-custom__icon"></i>
                            </li>
                            <li onclick="location.href='{{route('employer.company_info')}}';" class="dropdown-btn-custom__item">
                                <span class="dropdown-btn-custom__text">Thông tin công ty</span>
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
