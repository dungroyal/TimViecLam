    <section class="apply-now-banner">
        <div class="image"><img src="/images/banner-job.jpg" alt=""></div>
        <div class="apply-now-content">
            <div class="job-desc">
                <p class="title">{{ $jobs_detail->name_job }}</p>
            <a class="employer job-company-name" href="#">{{$company->name_company}}</a>
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
                                            <li> <strong>
                                                <i class="fas fa-calendar-day icon-detail">
                                                </i>Ngày
                                                    cập nhật</strong>
                                                <p>05/12/2020</p>
                                            </li>
                                            <li> <strong><i class="fas fa-briefcase icon-detail"></i>Ngành
                                                    nghề</strong>
                                                <p> <a href="#"> {{App\Models\Career::findOrFail($jobs_detail->salary_id)->name}} </a>
                                                </p>
                                            </li>
                                            <li> <strong><i class="fas fa-business-time icon-detail">
                                                </i>Hình thức</strong>
                                                <p> {{App\Models\Grade::findOrFail($jobs_detail->grade_id)->name}}</p>
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
                                                <p>{{App\Models\Experience::findOrFail($jobs_detail->experience_id)->name}}</p>
                                            </li>
                                            <li><strong><i class="fas fa-calendar-check icon-detail">
                                                </i>Hết hạn nộp</strong>
                                                <p>{{\Carbon\Carbon::parse($jobs_detail->deadline)->format('d/m/Y')}}</p>
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
                                                <p>{{App\Models\Degree::findOrFail($jobs_detail->degree_id)->name}}</p>
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
                        <div class="bg-company">
                            <div class="cover-company detail_company bg-white">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-1">
                                    @if ($company->logo != null)
                                    <img src="{{ asset('images/') }}/{{$company->logo}}" alt="TVL"/>
                                    @else
                                    <img src="/images/logo/timvieclam-placeholder.png" alt="{{$jobs_detail->name_job}}" alt="TVL"/>
                                    @endif
                                    </div>
                                  <div class="j_company col-md-8">
                                    <div class="pl-2">
                                        <h1 class="text_ellipsis text-back">{{$company->name_company}}</h1>
                                        <div class="text_ellipsis">
                                          <span><i class="fas fa-map-marker-alt icon-company-detail mr-1"></i>
                                            <strong>Địa chỉ:</strong> {{$company->address}}</span></div>
                                        <div class="text_ellipsis space-company">
                                          <span><i class="fas fa-link icon-company-detail mr-1"></i>
                                            <strong>Website:</strong> {{$company->website}}</span>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="row">
                                      <div class="col mt-3"><a href="#"><i class="icofont icon-radius fab fa-facebook"></i></a>
                                      </div>
                                      <div class="col mt-3"><a href="#"><i class="icofont icon-radius fab fa-instagram"></i></i></a>
                                      </div>
                                      <div class="col mt-3"><a href="#"><i class="icofont icon-radius fab fa-twitter"></i></a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="company-container">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-12 col-lg-12">
                                    <div id="job-list" class="box-company-detail mb-0 pt-2">
                                      <h2 class="heading-title heading-bold-company-detail font-bold mt-1">VIỆC LÀM ĐANG TUYỂN DỤNG</h2>
                                      <div class="desc" style="line-height: 20px;">
                                        <div class="mt-3 px-3">
                                            @foreach($listJob as $job)
                                                <div class="job-item-company-detail">
                                                    <div class="row">
                                                    <div class="col-sm-9">
                                                        <p class="j_title text_ellipsis"><a href="#" data-toggle="tooltip" target="_blank"
                                                            class="el-tooltip item">
                                                        <strong class="fs-15">{{$job->name_job}}</strong></a></p>
                                                        <p class="company mb-2 mt-2">{{App\Models\Company::findOrFail($job->company_id)->name_company}}</p>
                                                    </div>
                                                    <div class="col-sm-3 text-right pt-1">
                                                        <a href="/job-detail/{{$job->id}}" target="_blank" class="btn btn-default"><i
                                                            class="icofont fas fa-paper-plane mr-1"></i> 
                                                            <span class="font-button-company">Xem chi tiết</span> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="location text_ellipsis">
                                                        <div class="row">
                                                            <div class="col-sm-3"><span class="dollar"><i class="fas fa-money-bill">
                                                                </i> {{App\Models\Salary::findOrFail($job->salary_id)->name}}</span></div>
                                                            <div class="col-sm-3">
                                                                <i class="icofont far fa-clock"></i> {{\Carbon\Carbon::parse($job->deadline)->format('d/m/Y')}}
                                                            </div>
                                                            <div class="col-sm-6"><i class="icofont-company fas fa-map-marker-alt"></i>
                                                                {{App\Models\City::findOrFail($job->city)->name}}
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            @endforeach       
                                          <div class="view-more-company"><a href="#">Xem thêm<i
                                                class="fas fa-arrow-right ml-1"></i></a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                  <div class="box-company-detail mt-3">
                                    <h2 class="heading-title heading-bold-company-detail text-uppercase">GIỚI THIỆU VỀ CÔNG TY {{$company->name_company}}</h2>
                        
                                      <div class="col-lg-12">
                                        <div class="row">
                                        <div class="content">
                                          <p>{{$company->name_company}} chúng tôi cung cấp các dịch vụ sau :</p>
                                          <p>1-Thiết kế, Quản lý xây dựng, và Xây dựng công trình với thương hiệu <strong>FOSUP Design &amp;
                                              Build&nbsp;</strong> &nbsp;&nbsp;,</p>
                                          <p>2-Giáo dục Song ngữ quốc tế từ bậc Mầm non đến Trung học với thương hiệu <strong>TESLA&nbsp;
                                            </strong>&nbsp;,&nbsp;</p>
                                          <p>3-Đầu tư xây dựng và Cho thuê văn phòng làm việc hạng B&nbsp; cho khách hàng đối tác doanh nghiệp
                                            với thương hiệu<strong> SOHO Biz</strong>&nbsp;&nbsp; .</p>
                                          <p>Thực hiện dịch vụ Design &amp; Build, chúng tôi thực hiện công việc các công việc như sau</p>
                                          <p>1. Phác thảo nắm bắt ý tưởng mong muốn của chủ đầu tư, thu thập thông tin cần thiết.</p>
                                          <p>2. Tìm đưa phương án thiết kế thích dụng, và đạt thẩm mỹ cao, phù hợp nhu cầu chủ đầu tư .</p>
                                          <p>Tìm những ý tốt nhất từ những team tốt nhất để đáp ứng mong muốn của khách hàng 1 cách tốt nhất.
                                          </p>
                                          <p>3. Trên Phương án concept tốt, chúng tôi thực hiện việc Triển khai thiết kế kỹ thuật từ lập Quy
                                            hoạch Phân khu/TMB đến Thiết kế Kiến trúc, Kết cấu, M/E/P và Nội thất công trình đảm bảo Ý tưởng
                                            thiết kế, và Giải quyết các vấn đề kĩ thuật thiết kế theo Tiêu chuẩn Thiết kế và Tiêu chuẩn công
                                            trình Xanh (như LEED, Edge, Lotus, Greenmark).</p>
                                          <p>4. Chúng tôi thực hiện xây dựng Công trình trên Máy tính bằng Revit &amp; các Phần mềm chuyên dụng
                                            khác. Ứng dụng công nghệ BIM trong quá trình thiết kế kĩ thuật và quản lý thi công xây dựng để xử lý
                                            các vướn mắc kĩ thuật, các va chạm kĩ thật giữa các hệ thống khác nhau (Kết cấu, M/E/P), xây dựng
                                            biện pháp thi công, lập tiến độ thi công, và mô phỏng quá trình thi công trên máy tính.</p>
                                        </div>
                                      </div>
                                      </div>
                                 
                                  </div>
                                </div>
                        
                              </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>