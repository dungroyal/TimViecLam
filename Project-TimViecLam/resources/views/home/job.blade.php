@extends('layouts.home')

@section('content')

<div class="container container-max">
    <div class="container container-max main-search-bar">
        <div class="w-100 text-center text-white pt-2"> Tìm kiếm <strong>409</strong> việc làm mới trong
            <strong>6,509</strong> việc đang tuyển dụng
        </div>
        <div class="forms-container">
            <form method="POST" action="" class="sign-in-form">
                <div class="row d-flex justify-content-around">
                    <div class="col-sm-12 col-lg-4 pr-lg-1">
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
                    <div class="col-sm-12 col-lg-2 w-100 pl-lg-1">
                        <button type="submit" class="search-custom__btn"><i
                                class="fas fa-search mr-1 font-weight-bold"></i> Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
    <!-- Vị trí -->
    <section>
        <div class="container container-max">
            <div class="box__tittle-job">
                <div class="row">
                    <div class="title-location-job box__tittle-job-ml">
                        <h1 class="bold">Tìm việc làm mới nhất tại Hồ Chí Minh</h1>
                    </div>
                    <div class="text-col-2 text-center">
                        <span class="big-number bold">7,576</span> việc phù hợp
                    </div>
                    <div class="text-col-2 text-center">
                        <span class="big-number bold">0</span> việc đã lưu
                    </div>
                    <div class="icon-option font-icon">
                        <span class="mr ml"><i class="fa fa-th-large" aria-hidden="true"></i></span>
                        <span><i class="fa fa-th" aria-hidden="true"></i></span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container container-max">
        <hr>
    </div>

    <!-- Việc làm -->
    <div class="container container-max">
        <div class="row">
            <div class="col-lg-5 col-xl-5">
                <div class="side-wrapper">
                    <div class="job-found">
                        <div class="job-found-amout ml-1">
                            <p>17,961 việc làm</p>
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
                <section class="jobs-side-list">
                    <div class="jobs-list" id="jobs-list">
                        <!-- job 1 -->
                        <div class="job-item active" id="job-item-35B4B2E2">
                            <div class="figure">
                                <div class="image">
                                    <a href="#" target="_blank" title="CÔNG TY TNHH NATURE ORIGIN">
                                        <img class="lazy-img" src="images/job2.png" alt="CÔNG TY TNHH NATURE ORIGIN">
                                    </a>
                                </div>
                                <div class="figcaption">
                                    <div class="timeago"> <span class="new">
                                            <font color="FF0000">(Mới)</font>
                                        </span> </div>
                                    <div class="title ">
                                        <a class="job_link" data-id="35B4B2E2" href="detail.html" target="_blank"
                                            title="Trưởng nhóm Telesales">
                                            Trưởng nhóm Telesales
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <a class="company-name" target="_blank" href="detail.html"
                                            title="CÔNG TY TNHH NATURE ORIGIN">CÔNG TY TNHH NATURE ORIGIN</a>
                                        <div class="salary">
                                            <span><i class="icon-job fas fa-dollar-sign"></i></i>Lương: Cạnh
                                                tranh</span>
                                        </div>
                                        <div class="location">
                                            <span><i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</span>
                                        </div>
                                        <div class="time"><time>13/09/2020</time></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- job 2 -->

                        <div class="job-item">

                            <div class="figure">
                                <div class="image">
                                    <a href="detail.html" target="_blank" title="Hanoi Branch - Reeracoen Vietnam Co., Ltd">
                                        <img class="lazy-img" src="images/job1.png"
                                            alt="Hanoi Branch - Reeracoen Vietnam Co., Ltd" style="">
                                    </a>
                                </div>
                                <div class="figcaption">
                                    <div class="timeago"> <span class="new">
                                            <font color="FF0000">(Mới)</font>
                                        </span> </div>
                                    <div class="title ">
                                        <a class="job_link" data-id="35B4B2DE" href="detail.html" target="_blank"
                                            title="[HOT] SALES MANAGER KHÍ GAS CÔNG NGHIỆP (17743)">
                                            [HOT] SALES MANAGER KHÍ GAS CÔNG NGHIỆP (17743)
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <a class="company-name" target="_blank" href="detail.html"
                                            title="Hanoi Branch - Reeracoen Vietnam Co., Ltd">Hanoi Branch - Reeracoen
                                            Vietnam Co., Ltd</a>
                                        <div class="salary">
                                            <span><i class="icon-job fas fa-dollar-sign"></i></i>Lương: Cạnh
                                                tranh</span>
                                        </div>
                                        <div class="location">
                                            <span><i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</span>
                                        </div>
                                        <div class="time"><time>13/09/2020</time></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- job 3 -->
                        <div class="job-item active" id="job-item-35B4B2E2">
                            <div class="figure">
                                <div class="image">
                                    <a href="#" target="_blank" title="CÔNG TY TNHH NATURE ORIGIN">
                                        <img class="lazy-img" src="images/job3.jpg" alt="CÔNG TY TNHH NATURE ORIGIN">
                                    </a>
                                </div>
                                <div class="figcaption">
                                    <div class="timeago"> <span class="new">
                                            <font color="FF0000">(Mới)</font>
                                        </span> </div>
                                    <div class="title ">
                                        <a class="job_link" data-id="35B4B2E2" href="#" target="_blank"
                                            title="Trưởng nhóm Telesales">
                                            [HOT] SALES MANAGER KHÍ GAS CÔNG NGHIỆP (17743)
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <a class="company-name" target="_blank" href="#"
                                            title="CÔNG TY TNHH NATURE ORIGIN">CÔNG TY TNHH NATURE ORIGIN</a>
                                        <div class="salary">
                                            <span><i class="icon-job fas fa-dollar-sign"></i></i>Lương: Cạnh
                                                tranh</span>
                                        </div>
                                        <div class="location">
                                            <span><i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</span>
                                        </div>
                                        <div class="time"><time>13/09/2020</time></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- job 4 -->
                        <div class="job-item active" id="job-item-35B4B2E4">

                            <div class="figure">
                                <div class="image">
                                    <a href="#" target="_blank" title="Dalat Hasfarm">
                                        <img class="lazy-img" src="images/job4.gif" alt="Dalat Hasfarm" style="">
                                    </a>
                                </div>
                                <div class="figcaption">
                                    <div class="timeago"> <span class="new">
                                            <font color="FF0000">(Mới)</font>
                                        </span> </div>
                                    <div class="title ">
                                        <a class="job_link" data-id="35B4B2E4" href="#" target="_blank"
                                            title="[ HCM] Nhân Viên Bán Hàng"> [ HCM] Nhân Viên Bán Hàng</a>
                                    </div>
                                    <div class="caption">
                                        <a class="company-name" target="_blank" href="#" title="Dalat Hasfarm">Dalat
                                            Hasfarm</a>
                                        <div class="salary">
                                            <span><i class="icon-job fas fa-dollar-sign"></i></i>Lương: Cạnh
                                                tranh</span>
                                        </div>
                                        <div class="location">
                                            <span><i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</span>
                                        </div>
                                        <div class="time"><time>13/09/2020</time></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-7 col-xl-7">
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
                                <div class="icon-button">
                                    <span><i class="far fa-heart mr-3"></i></span>
                                    <span><i class="fas fa-share-alt"></i></span>
                                </div>

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
                                                            <p> <a href="#"> Tiếp thị / Marketing </a>,
                                                                <a href="#"> Mỹ thuật / Nghệ thuật / Thiết kế
                                                                </a>,
                                                                <a href="#"> Dệt may / Da giày / Thời trang</a>
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
                                                        <li><strong><i class="fas fa-user icon-detail"></i></i>Cấp
                                                                bậc</strong>
                                                            <p>Nhân viên</p>
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
                                                        <li><strong><i class="fa fa-birthday-cake icon-detail"
                                                                    aria-hidden="true"></i>Độ tuổi</strong>
                                                            <p>20 - 35</p>
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

                                    <!-- Phúc Lợi
                                    <div class="detail-row">
                                        <h3 class="detail-title">Phúc lợi </h3>
                                        <ul class="welfare-list">
                                            <li><span class="fa fa-medkit"></span> Chế độ bảo hiểm</li>
                                            <li><span class="fa fa-plane"></span> Du Lịch</li>
                                            <li><span class="fas fa-dollar-sign"></span> Chế độ thưởng</li>
                                            <li><span class="fa fa-chart-line"></span> Tăng lương</li>
                                            <li><span class="fas fa-briefcase"></span> Nghỉ phép năm</li>
                                        </ul>
                                    </div> -->
                                    <!-- Mô tả công việc -->
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
                                        <ul>
                                            <li>
                                                <p>Đề xuất và báo cáo ngân sách, tiến độ triển khai cho marketing team
                                                    leader.</p>
                                            </li>
                                            <li>
                                                <p>Đề xuất kế hoạch và triển khai nghiên cứu/ điều tra/ social listening
                                                    và phân tích thị trường, đối thủ, khách hàng, sản phẩm.</p>
                                            </li>
                                            <li>
                                                <p>Đề xuất ý tưởng marketing và chiến lược marketing</p>
                                            </li>
                                        </ul>
                                        <p><strong>Triển khai marketing:</strong></p>
                                        <ul>
                                            <li>
                                                <p>Phát triển các chiến dịch marketing cho thương hiệu theo từng giai
                                                    đoạn</p>
                                            </li>
                                            <li>
                                                <p>Giám sát triển khai các hoạt động marketing online: Truyền thông trên
                                                    mạng xã hội Facebook, Google Ads, PR trang tin và báo điện tử, các
                                                    kênh khác.</p>
                                            </li>
                                            <li>
                                                <p>Phối hợp với các phòng ban khác trong hoạt động marketing nội bộ.</p>
                                            </li>
                                            <li>
                                                <p>Điều phối công việc với các nhà cung cấp, agency, đối tác marketing.
                                                </p>
                                            </li>
                                            <li>
                                                <p>Trợ lý công việc cho marketing team leader</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <p>Và các công việc liên quan khác theo sự phân công của quản lý trực
                                                    tiếp.</p>
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
                                        <ul>
                                            <li>
                                                <p>Đề xuất và báo cáo ngân sách, tiến độ triển khai cho marketing team
                                                    leader.</p>
                                            </li>
                                            <li>
                                                <p>Đề xuất kế hoạch và triển khai nghiên cứu/ điều tra/ social listening
                                                    và phân tích thị trường, đối thủ, khách hàng, sản phẩm.</p>
                                            </li>
                                            <li>
                                                <p>Đề xuất ý tưởng marketing và chiến lược marketing</p>
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
                                        <ul>
                                            <li>
                                                <p>Tốt nghiệp đại học trở lên ngành Marketing, hoặc Báo chí, kinh doanh,
                                                    nghiên cứu, các ngành khác liên quan.</p>
                                            </li>
                                            <li>
                                                <p>Có trách nhiệm cao trong công việc, làm việc tích cực</p>
                                            </li>
                                            <li>
                                                <p>Có khả năng nhạy bén, cập nhật xu hướng nhanh</p>
                                            </li>
                                            <li>
                                                <p>Sẵn sàng đi công tác tỉnh nếu được phân công</p>
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
                                    <div class="job-detail-bottom sticky">
                                        <div class="job-detail-bottom-wrapper">
                                            <div class="apply-now-content">
                                                <div class="job-desc">
                                                    <a href="#"><i class="far fa-envelope-open icon-detail"></i><span
                                                            class="text">Gửi tôi việc làm tương tự</span></a>
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
                                                        <div class="title-company"><a class="name"
                                                                title="CÔNG TY CỔ PHẦN TMORE" href="#">CÔNG TY CỔ PHẦN
                                                                TMORE</a></div>
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
    <div class="container" style="display: block;">
        <div class="row">
            <div class="col-lg-9 col-custom-xxl-12">
                <div class="job-found">
                    <div class="job-found-amout">
                        <p>18,334 việc làm</p>
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
                <div class="main-slide">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="jobs-side-list">
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image-company">
                                                <a href="#" target="_blank" title="Cty CP Dược Phẩm Vĩnh Phúc">
                                                    <img class="lazy-img" src="images/cty2.png"
                                                        alt="Cty CP Dược Phẩm Vĩnh Phúc">
                                                </a>
                                            </div>
                                            <div class="figcaption-company">
                                                <div class="title">
                                                    <a class="job_link" href="#" target="_blank"
                                                        title="Trưởng ca xưởng sản xuất"> Trưởng ca xưởng sản xuất
                                                        <span class="new">
                                                            <font color="ff0000">
                                                                <font color="FF0000">(Mới)</font>
                                                            </font>
                                                        </span> </a>
                                                </div>
                                                <div class="caption">
                                                    <a class="company-name" target="_blank" href="#"
                                                        title="Cty CP Dược Phẩm Vĩnh Phúc">Cty CP Dược Phẩm Vĩnh
                                                        Phúc</a>
                                                    <div class="salary">
                                                        <p><em class="fas fa-dollar-sign icon-caption"></em>Lương: Cạnh
                                                            tranh</p>
                                                    </div>
                                                    <div class="location">
                                                        <p><em class="fa fa-map-marker icon-caption"></em>Vĩnh Phúc </p>

                                                    </div>

                                                </div>
                                                <div class="bottom-right-icon">
                                                    <ul>
                                                        <li><a class="toollips save-job chk_save_35B4B9E9 " href="#">
                                                                <i class="far fa-heart icon-caption"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="time"> <em class="fas fa-calendar-alt icon-caption"></em>
                                                        <time>16/09/2020</time>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- job 2 -->
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image-company">
                                                <a href="#" target="_blank" title="Cty CP Dược Phẩm Vĩnh Phúc">
                                                    <img class="lazy-img" src="images/cty2.png"
                                                        alt="Cty CP Dược Phẩm Vĩnh Phúc">
                                                </a>
                                            </div>
                                            <div class="figcaption-company">
                                                <div class="title">
                                                    <a class="job_link" href="#" target="_blank"
                                                        title="Trưởng ca xưởng sản xuất"> Trưởng ca xưởng sản xuất
                                                        <span class="new">
                                                            <font color="ff0000">
                                                                <font color="FF0000">(Mới)</font>
                                                            </font>
                                                        </span> </a>
                                                </div>
                                                <div class="caption">
                                                    <a class="company-name" target="_blank" href="#"
                                                        title="Cty CP Dược Phẩm Vĩnh Phúc">Cty CP Dược Phẩm Vĩnh
                                                        Phúc</a>
                                                    <div class="salary">
                                                        <p><em class="fas fa-dollar-sign icon-caption"></em>Lương: Cạnh
                                                            tranh</p>
                                                    </div>
                                                    <div class="location">
                                                        <p><em class="fa fa-map-marker icon-caption"></em>Vĩnh Phúc </p>

                                                    </div>
                                                    <ul class="welfare">
                                                        <li><span class="fa fa-medkit icon-caption"></span>Chế độ bảo
                                                            hiểm</li>
                                                        <li><span class="fa fa-plane icon-caption"></span>Du Lịch</li>
                                                        <li><span class="fas fa-dollar-sign icon-caption"></span>Chế độ
                                                            thưởng</li>
                                                    </ul>
                                                </div>
                                                <div class="bottom-right-icon">
                                                    <ul>
                                                        <li><a class="toollips save-job chk_save_35B4B9E9 " href="#">
                                                                <i class="far fa-heart icon-caption"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="time"> <em class="fas fa-calendar-alt icon-caption"></em>
                                                        <time>16/09/2020</time>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- job 3 -->
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image-company">
                                                <a href="#" target="_blank" title="Cty CP Dược Phẩm Vĩnh Phúc">
                                                    <img class="lazy-img" src="images/cty2.png"
                                                        alt="Cty CP Dược Phẩm Vĩnh Phúc">
                                                </a>
                                            </div>
                                            <div class="figcaption-company">
                                                <div class="title">
                                                    <a class="job_link" href="#" target="_blank"
                                                        title="Trưởng ca xưởng sản xuất"> Trưởng ca xưởng sản xuất
                                                        <span class="new">
                                                            <font color="ff0000">
                                                                <font color="FF0000">(Mới)</font>
                                                            </font>
                                                        </span> </a>
                                                </div>
                                                <div class="caption">
                                                    <a class="company-name" target="_blank" href="#"
                                                        title="Cty CP Dược Phẩm Vĩnh Phúc">Cty CP Dược Phẩm Vĩnh
                                                        Phúc</a>
                                                    <div class="salary">
                                                        <p><em class="fas fa-dollar-sign icon-caption"></em>Lương: Cạnh
                                                            tranh</p>
                                                    </div>
                                                    <div class="location">
                                                        <p><em class="fa fa-map-marker icon-caption"></em>Vĩnh Phúc </p>

                                                    </div>
                                                    <ul class="welfare">
                                                        <li><span class="fa fa-medkit icon-caption"></span>Chế độ bảo
                                                            hiểm</li>
                                                        <li><span class="fa fa-plane icon-caption"></span>Du Lịch</li>
                                                        <li><span class="fas fa-dollar-sign icon-caption"></span>Chế độ
                                                            thưởng</li>
                                                    </ul>
                                                </div>
                                                <div class="bottom-right-icon">
                                                    <ul>
                                                        <li><a class="toollips save-job chk_save_35B4B9E9 " href="#">
                                                                <i class="far fa-heart icon-caption"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="time"> <em class="fas fa-calendar-alt icon-caption"></em>
                                                        <time>16/09/2020</time>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- job4 -->
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image-company">
                                                <a href="#" target="_blank" title="Cty CP Dược Phẩm Vĩnh Phúc">
                                                    <img class="lazy-img" src="images/cty2.png"
                                                        alt="Cty CP Dược Phẩm Vĩnh Phúc">
                                                </a>
                                            </div>
                                            <div class="figcaption-company">
                                                <div class="title">
                                                    <a class="job_link" href="#" target="_blank"
                                                        title="Trưởng ca xưởng sản xuất"> Trưởng ca xưởng sản xuất
                                                        <span class="new">
                                                            <font color="ff0000">
                                                                <font color="FF0000">(Mới)</font>
                                                            </font>
                                                        </span> </a>
                                                </div>
                                                <div class="caption">
                                                    <a class="company-name" target="_blank" href="#"
                                                        title="Cty CP Dược Phẩm Vĩnh Phúc">Cty CP Dược Phẩm Vĩnh
                                                        Phúc</a>
                                                    <div class="salary">
                                                        <p><em class="fas fa-dollar-sign icon-caption"></em>Lương: Cạnh
                                                            tranh</p>
                                                    </div>
                                                    <div class="location">
                                                        <p><em class="fa fa-map-marker icon-caption"></em>Vĩnh Phúc </p>

                                                    </div>
                                                    <ul class="welfare">
                                                        <li><span class="fa fa-medkit icon-caption"></span>Chế độ bảo
                                                            hiểm</li>
                                                        <li><span class="fa fa-plane icon-caption"></span>Du Lịch</li>
                                                        <li><span class="fas fa-dollar-sign icon-caption"></span>Chế độ
                                                            thưởng</li>
                                                    </ul>
                                                </div>
                                                <div class="bottom-right-icon">
                                                    <ul>
                                                        <li><a class="toollips save-job chk_save_35B4B9E9 " href="#">
                                                                <i class="far fa-heart icon-caption"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="time"> <em class="fas fa-calendar-alt icon-caption"></em>
                                                        <time>16/09/2020</time>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- job5 -->
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image-company">
                                                <a href="#" target="_blank" title="Cty CP Dược Phẩm Vĩnh Phúc">
                                                    <img class="lazy-img" src="images/cty2.png"
                                                        alt="Cty CP Dược Phẩm Vĩnh Phúc">
                                                </a>
                                            </div>
                                            <div class="figcaption-company">
                                                <div class="title">
                                                    <a class="job_link" href="#" target="_blank"
                                                        title="Trưởng ca xưởng sản xuất"> Trưởng ca xưởng sản xuất
                                                        <span class="new">
                                                            <font color="ff0000">
                                                                <font color="FF0000">(Mới)</font>
                                                            </font>
                                                        </span> </a>
                                                </div>
                                                <div class="caption">
                                                    <a class="company-name" target="_blank" href="#"
                                                        title="Cty CP Dược Phẩm Vĩnh Phúc">Cty CP Dược Phẩm Vĩnh
                                                        Phúc</a>
                                                    <div class="salary">
                                                        <p><em class="fas fa-dollar-sign icon-caption"></em>Lương: Cạnh
                                                            tranh</p>
                                                    </div>
                                                    <div class="location">
                                                        <p><em class="fa fa-map-marker icon-caption"></em>Vĩnh Phúc </p>

                                                    </div>
                                                    <ul class="welfare">
                                                        <li><span class="fa fa-medkit icon-caption"></span>Chế độ bảo
                                                            hiểm</li>
                                                        <li><span class="fa fa-plane icon-caption"></span>Du Lịch</li>
                                                        <li><span class="fas fa-dollar-sign icon-caption"></span>Chế độ
                                                            thưởng</li>
                                                    </ul>
                                                </div>
                                                <div class="bottom-right-icon">
                                                    <ul>
                                                        <li><a class="toollips save-job chk_save_35B4B9E9 " href="#">
                                                                <i class="far fa-heart icon-caption"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="time"> <em class="fas fa-calendar-alt icon-caption"></em>
                                                        <time>16/09/2020</time>
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
        </div>
    </div>

@endsection
