<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="w-100 float-left px-3">
                        <div class="wizard-progress-with-circle">
                            <div class="wizard-progress-bar background-progress-bar w-100"></div>
                        </div>
                        <div class="row">
                            <ul class="col-10 wizard-nav wizard-nav-pills w-100 float-left">
                                <li @if(Route::current()->getName() == 'job-seeker.profile.step1') class="step-active" @endif >
                                    <a href="{{ Route('job-seeker.profile.step1') }}">
                                        <div class="wizard-icon-circle md checked border-color">
                                            <div class="wizard-icon-container">
                                                <svg width="100%" viewBox="0 0 16 16"
                                                    class="bi bi-person-fill p-3" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="stepTitle mb-0 pb-0">Thông tin cá nhân</p>
                                    </a>
                                </li>
                                <li @if(Route::current()->getName() == 'job-seeker.profile.step2') class="step-active" @endif >
                                    <a href="{{ Route('job-seeker.profile.step2') }}">
                                        <div class="wizard-icon-circle md checked border-color">
                                            <div class="wizard-icon-container">
                                                <svg width="100%" viewBox="0 0 16 16"
                                                    class="bi bi-info p-2" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                    <circle cx="8" cy="4.5" r="1" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="stepTitle mb-0 pb-0">Thông tin hồ sơ</p>
                                    </a>
                                </li>
                                <li @if(Route::current()->getName() == 'job-seeker.profile.step3') class="step-active" @endif >
                                    <a href="{{ Route('job-seeker.profile.step3') }}">
                                        <div class="wizard-icon-circle md checked border-color">
                                            <div class="wizard-icon-container">
                                                <svg width="100%" viewBox="0 0 16 16"
                                                    class="bi bi-book-half p-3" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="stepTitle mb-0 pb-0">Học vấn bằng cấp</p>
                                        @if (DB::table('degree_details')->where('id_profile',$Profile->id)->count() == 0)
                                            <span class="m-0 p-0 text-danger small">(Chưa hoàn thiện)</span>
                                        @endif
                                    </a>
                                </li>
                                <li  @if(Route::current()->getName() == 'job-seeker.profile.step4') class="step-active" @endif >
                                    <a href="{{ Route('job-seeker.profile.step4') }}">
                                        <div class="wizard-icon-circle md checked border-color">
                                            <div class="wizard-icon-container">
                                                <svg width="100%" viewBox="0 0 16 16"
                                                    class="bi bi-building p-3" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                                    <path
                                                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="stepTitle mb-0 pb-0">Kinh nghiệm</p>
                                        @if (DB::table('experience_detail')->where('id_profile',$Profile->id)->count() == 0)
                                            <span class="m-0 p-0 text-danger small">(Chưa hoàn thiện)</span>
                                        @endif
                                    </a>
                                </li>
                                <li @if(Route::current()->getName() == 'job-seeker.profile.step5') class="step-active" @endif >
                                    <a href="{{ Route('job-seeker.profile.step5') }}">
                                        <div class="wizard-icon-circle md checked border-color">
                                            <div class="wizard-icon-container">
                                                <svg width="100%" viewBox="0 0 16 16"
                                                    class="bi bi-tools p-3" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                                                    <path fill-rule="evenodd"
                                                        d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="stepTitle mb-0 pb-0">Kỹ năng</p>
                                        @if (DB::table('skill_detail')->where('id_profile',$Profile->id)->count() == 0)
                                            <span class="m-0 p-0 text-danger small">(Chưa hoàn thiện)</span>
                                        @endif
                                    </a>
                                </li>
                            </ul>
                            <div class="col-2 float-left text-right mt-3">
                                @if (
                                    DB::table('skill_detail')->where('id_profile',$Profile->id)->count() == 0 ||
                                    DB::table('experience_detail')->where('id_profile',$Profile->id)->count() == 0 ||
                                    DB::table('degree_details')->where('id_profile',$Profile->id)->count() == 0
                                )
                                    <a href="#" class="button_public no-copys button_public__disable" style="pointer-events: none;">
                                        <span> ĐĂNG HỒ SƠ </span>
                                    </a>
                                @else
                                <a href="{{ Route('job-seeker.profile.public')}}" class="button_public no-copys">
                                    <span> ĐĂNG HỒ SƠ </span>
                                </a>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>