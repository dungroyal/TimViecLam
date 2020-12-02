    <?php $compamy = App\Models\Company::findOrFail($jobs_detail->company_id) ?>
    <section class="apply-now-banner">
        <div class="image"><img src="images/banner-job.jpg" alt=""></div>
        <div class="apply-now-content">
            <div class="job-desc">
                <p class="title">{{ $jobs_detail->name_job }}</p>
            <a class="employer job-company-name" href="#">{{$compamy->name_company}}</a>
            </div>
            @if (Auth::guard('job_seeker')->user() != null)
                @if(DB::table('apply')->where([['job_id', $jobs_detail->id],['job_seeker_id', Auth::guard('job_seeker')->user()->id]])->count() > 0)
                    <div class="apply-now-btn ">
                        <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob--active"><i class="far fa-check-circle mr-2"></i> Đã ứng tuyển</a>
                    </div>
                @else
                    <div class="apply-now-btn ">
                        <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob" data-job="{{ $jobs_detail->id }}" data-jsk="{{Auth::guard('job_seeker')->user()->id}}">Nộp Đơn Ứng Tuyển </a>
                    </div>
                @endif
            @else
                <div class="apply-now-btn ">
                    <a href="{{ Route('login') }}" class="btn-gradient btnApplyClick">Đăng nhập ngay</a>
                </div>
            @endif
        </div>
    </section>
    <section>
        <div class="row my-2">
            <div class="col-lg-12 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab"
                            class="nav-link active text-botton">Chi tiết công việc</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#company" data-toggle="tab" class="nav-link text-botton">Tổng
                            quan công ty</a>
                    </li>
                    <li class="ml-auto">
                        <a href="#" data-toggle="tooltip" title="Lưu công việc">
                            <i class="far fa-heart fa-lg mr-3 mt-2"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" title="Chia sẻ công việc">
                            <i class="fas fa-share-alt fa-lg mr-3"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane active" id="profile">
                        <div class="bg-blue">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 item-blue">
                                    <div class="detail-box has-background">
                                        <ul>
                                            <li> <strong><i class="fas fa-calendar-day icon-detail"></i>Ngày
                                                    cập nhật</strong>
                                                <p>15/09/2020</p>
                                            </li>
                                            <li> <strong><i class="fas fa-briefcase icon-detail"></i>Ngành
                                                    nghề</strong>
                                                <p> <a href="#"> Tiếp thị / Marketing </a>
                                                </p>
                                            </li>
                                            <li> <strong><i class="fas fa-business-time icon-detail"></i>Hình
                                                    thức</strong>
                                                <p>Nhân viên chính thức</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 item-blue">
                                    <div class="detail-box has-background">
                                        <ul>
                                            <li>
                                                <strong><i
                                                        class="fas fa-dollar-sign icon-detail ml-1"></i>Lương</strong>
                                                <p>7 - 10 Triệu</p>
                                            </li>
                                            <li>
                                                <strong><i class="fas fa-chart-bar icon-detail"></i>Kinh
                                                    nghiệm</strong>
                                                <p>2 - 3 Năm</p>
                                            </li>
                                            <li><strong><i class="fas fa-calendar-check icon-detail"></i>Hết
                                                    hạn nộp</strong>
                                                <p>31/10/2020</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 item-blue">
                                    <div class="detail-box has-background">
                                        <ul>
                                            <li>
                                                <strong><i class="fas fa-graduation-cap icon-detail"></i>Yêu
                                                    cầu bằng cấp</strong>
                                                <p>Cao Đẳng</p>
                                            </li>
                                            <li>
                                                <strong><i class="fa fa-transgender icon-detail"
                                                        aria-hidden="true"></i>Giới tính</strong>
                                                <p>Không</p>
                                            </li>
                                            <li>
                                                <strong><i class="fa fa-map-marker icon-detail"></i>Địa điểm</strong>
                                                <p>{{App\Models\City::findOrFail($jobs_detail->city)->name}}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-row mt-3">
                            <h3 class="detail-title">Mô tả Công việc</h3>
                            <p>Kế hoạch Marketing:</p>
                            <ul>
                                <li>
                                    <p>Phụ trách hoạt động marketing của thương hiệu ngành thực phẩm và dịch
                                        vụ ăn uống</p>
                                </li>
                                <li>
                                    <p>Lập kế hoạch triển khai các hoạt động marketing sản phẩm online,
                                        offline (Media planning, Digital activities, Event, PR, Promotion,
                                        POSM)</p>
                                </li>
                            </ul>
                           
                        </div>
                        <!-- Quyền lợi -->
                        <div class="detail-row mt-3">
                            <h3 class="detail-title">Quyền lợi</h3>
                            <ul>
                                <li>
                                    <p>Phụ trách hoạt động marketing của thương hiệu ngành thực phẩm và dịch
                                        vụ ăn uống</p>
                                </li>
                                <li>
                                    <p>Lập kế hoạch triển khai các hoạt động marketing sản phẩm online,
                                        offline (Media planning, Digital activities, Event, PR, Promotion,
                                        POSM)</p>
                                </li>
                            </ul>
                        </div>
                        <!-- yêu cầu CV -->
                        <div class="detail-row">
                            <h3 class="detail-title">Yêu Cầu Công Việc</h3>
                            <ul>
                                <li>
                                    <p>Ít nhất 3 năm kinh nghiệm ở vị trí tương đương hoặc công việc liên
                                        quan trực tiếp.</p>
                                </li>
                                <li>
                                    <p>Ưu tiên kinh nghiệm trong ngành F&amp;B, FMCG, hoặc làm ở các agency
                                        marketing</p>
                                </li>
                            </ul>
                        </div>
                        <!-- Thông tin khác -->
                        <div class="detail-row">
                            <h3 class="detail-title">Thông tin khác</h3>
                            <div class="content_fck">
                                <ul>
                                    <li> Bằng cấp:
                                        Đại học
                                    </li>
                                    <li> Độ tuổi:
                                        18 - 35
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- share -->
                        <!-- Nộp ứng tuyển -->
                        <div class="job-detail-bottom mb-0">
                            <div class="job-detail-bottom-wrapper">
                                <div class="apply-now-content text-center">
                                    @if (Auth::guard('job_seeker')->user() != null)
                                        @if(DB::table('apply')->where([['job_id', $jobs_detail->id],['job_seeker_id', Auth::guard('job_seeker')->user()->id]])->count() > 0)
                                            <div class="apply-now-btn ">
                                                <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob--active"><i class="far fa-check-circle mr-2"></i> Đã ứng tuyển</a>
                                            </div>
                                        @else
                                            <div class="apply-now-btn ">
                                                <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob" data-job="{{ $jobs_detail->id }}" data-jsk="{{Auth::guard('job_seeker')->user()->id}}">Nộp Đơn Ứng Tuyển </a>
                                            </div>
                                        @endif
                                    @else
                                        <div class="apply-now-btn ">
                                            <a href="{{ Route('login') }}" class="btn-gradient btnApplyClick">Đăng nhập ngay</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="company">
                        <section class="company-overview">
                            <div class="company-introduction">
                                <div class="company-info">
                                    <div class="info">
                                        <div class="img"><a class="logo-company" href="#"
                                                title="CÔNG TY CỔ PHẦN TMORE"><img src="images/cty1.png"
                                                    alt="CÔNG TY CỔ PHẦN TMORE"></a>
                                            <div class="title-company"><a class="name mb-2" title="CÔNG TY CỔ PHẦN TMORE" href="#">CÔNG TY TNHH NATURE ORIGIN</a></div>
                                        </div>
                                        <div class="content">
                                            <strong>Địa điểm</strong>đường Trần Đại Nghĩa, quận Hai Bà
                                            Trưng, TP Hà Nội
                                            <hr>
                                            <strong>Thông tin công ty</strong>
                                            <ul>
                                                <li> <span class="fas fa-user icon-company"></span> Người
                                                    liên hệ: Phòng Nhân sự</li>
                                                <li> <span class="fas fa-gavel icon-company"></span> Loại
                                                    hình hoạt động: Cổ phần </li>
                                            </ul>

                                            <div class="company-follow">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Việc làm đang tuyển dụng -->
                            <h2 class="heading-title mt-3">Việc làm đang tuyển dụng</h2>
                            <div class="desc">
                                <div class="mt-15">
                                    <div class="job-item-list">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <p class="j_title text_ellipsis mb-2">
                                                    <a href="job-detail.html" data-toggle="tooltip"
                                                        target="_blank" class="el-tooltip item">
                                                        <!---->
                                                        <strong class="fs-15">Nhân Viên Kinh Doanh Ngành Hàng
                                                            Gạch</strong>
                                                    </a>
                                                </p>
                                                <p class="company mb-8">Công Ty Cổ Phần Tập Đoàn Hoa Sen</p>
                                            </div>
                                            <div class="col-sm-3 text-right mt-2"><a href="#" target="_blank"
                                                    class="btn btn-default"><i
                                                        class="fas fa-paper-plane fa-xs fa-flip-horizontal"></i>
                                                    Ứng tuyển ngay</a></div>
                                            <div class="col-md-12">
                                                <div class="location text_ellipsis mb-1">
                                                    <div class="row">
                                                        <div class="col-sm-3"><span class="dollar"><i
                                                                    class="li-cash-dollar"></i>15 triệu - 20
                                                                triệu</span></div>
                                                        <div class="col-sm-3"><i
                                                                class="li-clock fs-12 mr-5"></i>&nbsp;21/10/2020
                                                        </div>
                                                        <div class="col-sm-3"> <i
                                                                class="li-map-marker mr-5"></i>&nbsp;Hồ Chí Minh
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-15">
                                    <div class="job-item-list">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <p class="j_title text_ellipsis mb-2">
                                                    <a href="job-detail.html" data-toggle="tooltip"
                                                        target="_blank" class="el-tooltip item">
                                                        <!---->
                                                        <strong class="fs-15">Nhân Viên Kinh Doanh Ngành Hàng
                                                            Gạch</strong>
                                                    </a>
                                                </p>
                                                <p class="company mb-8">Công Ty Cổ Phần Tập Đoàn Hoa Sen</p>
                                            </div>
                                            <div class="col-sm-3 text-right mt-2"><a href="#" target="_blank"
                                                    class="btn btn-default"><i
                                                        class="fas fa-paper-plane fa-xs fa-flip-horizontal"></i>
                                                    Ứng tuyển ngay</a></div>
                                            <div class="col-md-12">
                                                <div class="location text_ellipsis mb-1">
                                                    <div class="row">
                                                        <div class="col-sm-3"><span class="dollar"><i
                                                                    class="li-cash-dollar"></i>15 triệu - 20
                                                                triệu</span></div>
                                                        <div class="col-sm-3"><i
                                                                class="li-clock fs-12 mr-5"></i>&nbsp;21/10/2020
                                                        </div>
                                                        <div class="col-sm-3"> <i
                                                                class="li-map-marker mr-5"></i>&nbsp;Hồ Chí Minh
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END -->
                                <div class="company-content">
                                    <h3 class="company-heading-title">Giới thiệu về công ty</h3>
                                    <p>Tmore - Tiệm Trà Chanh \"Mỗi người sẽ có một Tmore gần nhà\" - Đó
                                        chính
                                        là \"phương châm\" để Tiệm Trà Chanh không ngừng nỗ lực mang thương
                                        hiệu
                                        của mình phủ sóng khắp cả nước. - Tính tới thời điểm hiện tại, Tmore
                                        đã
                                        đạt tới con số hơn 175 cơ sở trên toàn quốc, trải dài từ Bắc vào
                                        Nam,
                                        với những tỉnh, thành phố lớn: Hà Nội, Hải Phòng, Sài Gòn, Huế, Nha
                                        Trang, Hội An, Đà Nẵng...</p>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>