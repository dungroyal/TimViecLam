@extends('layouts.home')

@section('content')

<?php 
    if (Cookie::get('searchJobView')=== null) {
        Cookie::queue('searchJobView', 'detail', 100000);
    }
?>

<div class="container-fluid  main-search-bar__job">
    <div class="container-fluid">
        <!-- <div class="w-100 text-center text-white pt-2"> Tìm kiếm <strong>409</strong> việc làm mới trong
            <strong>6,509</strong> việc đang tuyển dụng
        </div> -->
        <div class="forms-container">
            <form method="GET" action="" class="sign-in-form">
                <div class="row d-flex justify-content-around">
                    <div class="col-sm-12 col-lg-3 pr-lg-1">
                        <div class="input-field  mb-sm-0">
                            <i class="fas fa-briefcase"></i>
                            <input 
                            type="text" 
                            name="keyword" 
                            value="{{ old('keyword') }}" 
                            placeholder="Tiêu đề công việc, vị trí, ...">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 px-lg-1">
                        <div class="form-group m-0 p-0">
                            <span class="bootstrap-select__icon"><i class="fas fa-tools"></i></span>
                            <select  
                                name="career"
                                class="bootstrap-select-city__custom w-100" 
                                data-size="7" 
                                data-live-search="true"
                                title="Tất cả ngành nghề">
                                @foreach (App\Models\Career::all() as $item)
                                    <option class="py-2" value="{{ $item->id }}"> {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-3 px-lg-1">
                        <div class="form-group m-0 p-0">
                            <span class="bootstrap-select__icon"><i class="fas fa-map-marker-alt"></i></span>
                            <select 
                                name="city"
                                class="bootstrap-select-city__custom w-100" 
                                data-selected-text-format="count > 5"
                                data-size="7" 
                                data-live-search="true"
                                title="Địa điểm làm việc">
                                @foreach (App\Models\City::all() as $item)
                                    <option class="py-2" value="{{ $item->id }}"> {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-1 w-100 pl-lg-1">
                        <button type="submit" class="search-custom__btn text-white">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-lg-1 w-100 pl-lg-1">
                        <button type="button" class="search-custom__btn text-white">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-lg-1 w-100 pl-lg-1 mt-2">
                        <a href="{{Route('searchJobView','detail')}}" class="searchJobView text-white {{(Cookie::get('searchJobView')== "detail")?"searchJobView--active":""}}" data-value="detail" title="Chế độ xem chi tiết" data-toggle="tooltip">
                            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-grid-1x2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                              </svg>
                        </a>
                        <a href="{{Route('searchJobView','list')}}" class="searchJobView text-white {{(Cookie::get('searchJobView')== "list")?"searchJobView--active":""}}" data-value="list" title="Chế độ xem danh sách" data-toggle="tooltip">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="container-fluid my-5">
        <hr class="mt-n2">
    </div>
    @if(Cookie::get('searchJobView')== "detail")
    <div class="container-fluid px-5 mb-5">
        <div class="row no-gutters">
            <div class="col-lg-4 col-xl-4">
                <div class="side-wrapper">
                    <div class="job-found">
                        <div class="job-found-amout ml-1">
                            <p>{{count($jobs)}} việc làm</p>
                        </div>
                        <div class="job-found-sort"><span class="sort-title dropdown" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sắp xếp theo<em
                                    class="fa fa-chevron-down font-job2"></em>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <ul>
                                        <li> <a title="Cập nhật" class="active" href="#">Cập nhật</a></li>
                                        <li><a title="Mức lương" href="#">Mức lương</a></li>
                                    </ul>
                                </div>
                            </span></div>
                    </div>
                </div>
                <!-- List job -->
                <section class="jobs-side-list column-list-job-scoll">
                    <div class="jobs-list" id="jobs-list">
                        <!-- job 1 -->
                        <div id="jobData">
                        @forelse ($jobs as $job)
                        <?php $company =  App\Models\Company::find($job->company_id) ?>
                        <div class="col job-over-item px-0" data-job="{{$job->company_id}}">
                            <div class="row job-item-show">
                                    <div class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                        @if ($company->logo != null)
                                            <img src="{{ asset('images/') }}{{$company->logo}}" alt="{{$job->name_job}}"/>
                                        @else
                                        <img src="data:image/png;base64,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" 
                                                alt="{{$job->name_job}}"/>
                                        @endif
                                    </div>
                                    <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                        <p class="job_title text_ellipsis mt-1">
                                            <a href="{{ Route('job-detail',['id' => $job->id]) }}" data-toggle="tooltip" title="{{$job->name_job}}" target="_blank">
                                                <span>
                                                <strong>{{$job->name_job}}</strong>
                                                </span>
                                            </a>
                                        </p>
                                        <div class="job_company">
                                            <div class="name">
                                                <a href="/job-detail" target="_blank" title="{{$company->name_company}}" data-toggle="tooltip">
                                                <span>{{$company->name_company}}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mb-1 job_info" >
                                            <div class="col-5 text_ellipsis">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                                                    <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                                                    <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                                  </svg> 
                                                {{App\Models\Salary::find($job->salary_id)->name}}
                                            </div>
                                            <div class="col-7 text_ellipsis" id="jobs-list">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                                  </svg>
                                                  {{App\Models\City::find($job->city)->name}}
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h5 class="text-center mb-4">Không có kết quả</h5>
                        @endforelse
                    </div>
                        
                        <div class="col job-over-item px-0 text-center mb-3">
                            <a class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="mt-n1 mr-1 bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg>
                                Xem thêm</a>
                        </div>
                    </div>
                </section>
            </div>
            <div id="jobDetailData" class="col-lg-8 col-xl-8 column-list-job-detail-scoll">
                <section class="apply-now-banner">
                    <div class="image"><img src="images/banner-job.jpg" alt=""></div>
                    <div class="apply-now-content">
                        <div class="job-desc">
                            <p class="title">Trưởng nhóm Telesales</p>
                            <a class="employer job-company-name" href="#">CÔNG TY TNHH NATURE ORIGIN</a>
                        </div>
                        <div class="apply-now-btn "><a href="#" class="btn-gradient btnApplyClick"> Nộp Đơn Ứng
                                Tuyển </a></div>
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
                                                        <li><strong><i class="fa fa-map-marker icon-detail"
                                                                    aria-hidden="true"></i>Địa điểm</strong>
                                                            <p>TP. Hồ Chí Minh</p>
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
                                                <div class="apply-now-right ml-auto mr-3">
                                                    <div class="apply-now-btn">
                                                        <a href="/job-detail" class="btn-gradient k">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                                <div class="apply-now-right">
                                                    <div class="apply-now-btn"> <a href="#" class="btn-gradient k"> Nộp
                                                            Đơn Ứng Tuyển </a>
                                                    </div>
                                                </div>
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
            </div>
        </div>
    </div>
    
    @else
    <!-- Việc làm 2  -->
    <div class="container-fluid px-5 mt-5" style="display: block;">
        <div class="row">
            <div class="col-lg-12 col-custom-xxl-12">
                <div class="side-wrapper">
                    <div class="job-found">
                        <div class="job-found-amout ml-1">
                            <p>{{count($jobs)}} việc làm</p>
                        </div>
                        <div class="job-found-sort"><span class="sort-title dropdown" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sắp xếp theo<em
                                    class="fa fa-chevron-down font-job2"></em>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <ul>
                                        <li> <a title="Cập nhật" class="active" href="#">Cập nhật</a></li>
                                        <li><a title="Mức lương" href="#">Mức lương</a></li>
                                    </ul>
                                </div>
                            </span></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 mt-3 mb-5 job-view-list">
                    <!--  -->
                    <div class="row d-flex justify-content-around">
                        @forelse ($jobs as $job)
                        <?php $company =  App\Models\Company::find($job->company_id) ?>
                        <div class="col-md-6 col-lg-4 job-over-item">
                            <div class="row job-item-show">
                                    <div href="#" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                        @if ($company->logo != null)
                                            <img src="{{ asset('images/') }}{{$company->logo}}" alt="{{$job->name_job}}"/>
                                        @else
                                        <img src="data:image/png;base64,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" 
                                                alt="{{$job->name_job}}"/>
                                        @endif
                                    </div>
                                    <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                        <p class="job_title text_ellipsis mt-1">
                                            <a href="{{ Route('job-detail',['id' => $job->id]) }}" data-toggle="tooltip" title="{{$job->name_job}}" target="_blank">
                                                <span>
                                                <strong>{{$job->name_job}}</strong>
                                                </span>
                                            </a>
                                        </p>
                                        <div class="job_company">
                                            <div class="name">
                                                <a href="/job-detail" target="_blank" title="Cali-land, Inc tuyển dụng" data-toggle="tooltip">
                                                    <span>{{$company->name_company}}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row mb-1 job_info" >
                                            <div class="col-5 text_ellipsis">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                                                    <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                                                    <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                                  </svg> 
                                                  {{App\Models\Salary::find($job->salary_id)->name}}
                                            </div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="col-7 text_ellipsis">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                                  </svg>
                                                  {{App\Models\City::find($job->city)->name}}
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="container-fluid text-center pt-1 pb-5 mb-5">
                                <h3>Không có kết quả nào phù hợp!</h3>
                            </div>
                        @endforelse
                        @if (count($jobs) > 12)
                        <div class="col job-over-item px-0 text-center">
                            <a class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="mt-n1 mr-1 bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg>
                                Xem thêm</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $("#findBtn").click(function(){
            $.ajax({
                type: 'get',
                dataType: 'html',
                url: '{{Route('job-data')}}',
                // data: 'cat_id=' + cat + '&price=' + price,
                success:function(response){
                    console.log(response);
                    $("#jobData").html(response);
                }
            });
        });

        $(".job-over-item").click(function(){
            if ($(this).hasClass('active-job-item')) {
                return;
            }
            $(".job-over-item").removeClass('active-job-item');
            $(this).addClass("active-job-item");
            
            var idJob = this.getAttribute("data-job");
            $JobView = "<?php echo Cookie::get('searchJobView') ?>";
            if($JobView == "detail"){
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '/job-detail-ajax/'+idJob,
                    success:function(response){
                        console.log(response);
                        $("#jobDetailData").html(response);
                    }
                });
            }else{
                return;
            }
        });
    });
</script>
@endpush
