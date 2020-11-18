<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline ml-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="form-inline my-2 my-lg-0 navbar-nav font-weight-bold font-header">
                <li class="nav-item ml-3">
                    <a class="nav-link" href="/job"><i class="fas fa-tools mr-2 icon-menu"></i> 
                        TẤT CẢ VIỆC LÀM
                    </a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="/blog"><i class="fas fa-blog mr-2 icon-menu"></i> 
                        GÓC NGHỀ NGHIỆP
                    </a>
                </li>

                <li class="nav-item ml-3">
                    <a class="nav-link" href="{{ Route('login') }}"><i class="fas fa-lock mr-2 icon-menu"></i> 
                        {{ Auth::guard('job_seeker')->user()->name }}
                    </a>
                </li>

                <li class="nav-item ml-3 bg-primary btn mb-3 mb-md-0 ml-md-3">
                    <a class="text-white p-2" href="{{ route('employer.landingPage') }}">NHÀ TUYỂN DỤNG</a>
                </li>
            </div>
    </form>
</div>
