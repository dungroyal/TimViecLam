@extends('layouts.home')

@section('content')

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
                                @foreach ($careers as $item)
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
                                @foreach ($city as $item)
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
                        <a href="" class="text-white" title="Chế độ xem danh sách" data-toggle="tooltip">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="ml-3 mt-3 mr-2 bi bi-grid-1x2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                              </svg>
                        </a>
                        <a href="" class="text-white" title="Chế độ xem lưới" data-toggle="tooltip">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="mt-3 bi bi-grid-3x3-gap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
                              </svg>
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

    <!-- Việc làm -->
    <div class="container-fluid px-5">
        <div class="row no-gutters">
            <div class="col-lg-4 col-xl-4">
                <div class="side-wrapper">
                    <div class="job-found">
                        <div class="job-found-amout ml-1">
                            <p>10 việc làm</p>
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
                        @for ($i = 0; $i < 10; $i++)
                        <div class="col job-over-item px-0">
                            <div class="row job-item-show">
                                    <a href="#" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                        <img src="{{ asset('images/job1.png') }}" />
                                    </a>
                                    <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                        <p class="job_title text_ellipsis mt-1">
                                            <a href="/job-detail" data-toggle="tooltip" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <span>
                                                    <strong>Trưởng nhóm Telesales</strong>
                                                </span>
                                            </a></p>
                                        <div class="job_company">
                                            <div class="name">
                                                <a href="/job-detail" target="_blank" title="Cali-land, Inc tuyển dụng" data-toggle="tooltip">
                                                    <span>Cali-land, Inc</span>
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
                                                11 triệu - 24 triệu
                                            </div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="col-7 text_ellipsis">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                                  </svg>
                                                Hồ Chí Minh, Bình Dương
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endfor

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
            <div class="col-lg-8 col-xl-8 column-list-job-detail-scoll">
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

    <!-- Việc làm 2  -->
    <div class="container-fluid px-5 mt-5" style="display: block;">
        <div class="row">
            <div class="col-lg-12 col-custom-xxl-12">
                <div class="job-found">
                    <div class="job-found-amout text-uppercase">
                        <p>Việc làm tương tự</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 mt-3 mb-5">
                    <!--  -->
                    <div class="row d-flex justify-content-around">
                        @for ($i = 0; $i < 3; $i++)
                        <div class="col-md-6 col-lg-4 job-over-item">
                            <div class="row job-item-show">
                                    <a href="#" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                        <img src="{{ asset('images/job1.png') }}" />
                                    </a>
                                    <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                        <p class="job_title text_ellipsis mt-1">
                                            <a href="/job-detail" data-toggle="tooltip" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <span>
                                                    <strong>Loan Processor (hỗ Trợ Cho Vay Tiền Mua Nhà)</strong>
                                                </span>
                                            </a></p>
                                        <div class="job_company">
                                            <div class="name">
                                                <a href="/job-detail" target="_blank" title="Cali-land, Inc tuyển dụng" data-toggle="tooltip">
                                                    <span>Cali-land, Inc</span>
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
                                                11 triệu - 24 triệu
                                            </div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="col-7 text_ellipsis">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                                  </svg>
                                                Hồ Chí Minh, Bình Dương
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 job-over-item">
                            <div class="row job-item-show">
                                    <a href="#" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                        <img src="{{ asset('images/job1.png') }}" />
                                    </a>
                                    <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                        <p class="job_title text_ellipsis mt-1">
                                            <a href="#" data-toggle="tooltip" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <span>
                                                    <strong>Loan Processor (hỗ Trợ Cho Vay Tiền Mua Nhà)</strong>
                                                </span>
                                            </a></p>
                                        <div class="job_company">
                                            <div class="name">
                                                <a href="#" target="_blank" title="Cali-land, Inc tuyển dụng" data-toggle="tooltip">
                                                    <span>Cali-land, Inc</span>
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
                                                11 triệu - 24 triệu
                                            </div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="col-7 text_ellipsis">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                                  </svg>
                                                Hồ Chí Minh, Bình Dương
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <div class="col job-over-item px-0 text-center">
                            <a class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="mt-n1 mr-1 bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg>
                                Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

@endsection
