@extends('layouts.home')

@section('content')
<div class="background-search-job">
    <div class="container">
        <div class="row search-job ml-1">
            <div class="col-4 mt-3 my-0 px-1">
                <span class="ctn-icon1"> <i class="fa fa-briefcase" aria-hidden="true"></i></span>
                <input class="form-control search-job__input-name ui-autocomplete-input" value=""
                    placeholder="Tên công việc, vị trí bạn muốn..." id="keyword" autocomplete="off">
            </div>
            <div class="col-3 mt-3 px-1">
                <span class="ctn-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>

                <select class="form-control search-job__input-location" id="select-state">
                    <option value="">Tất cả địa điểm</option>
                    <option value="1">Hà Nội</option>
                    <option value="2">Hồ Chí Minh</option>
                    <option value="3">Bình Dương</option>
                    <option value="4">Bắc Ninh</option>
                    <option value="5">Đồng Nai</option>
                    <option value="6">Hưng Yên</option>
                    <option value="7">Hải Dương</option>
                    <option value="8">Đà Nẵng</option>
                    <option value="9">Hải Phòng</option>
                    <option value="10">An Giang</option>
                    <option value="11">Bà Rịa-Vũng Tàu</option>
                    <option value="12">Bắc Giang</option>
                    <option value="13">Bắc Kạn</option>
                    <option value="14">Bạc Liêu</option>
                    <option value="15">Bến Tre</option>
                    <option value="16">Bình Định</option>
                    <option value="17">Bình Phước</option>
                    <option value="18">Bình Thuận</option>
                    <option value="19">Cà Mau</option>
                    <option value="20">Cần Thơ</option>
                    <option value="21">Cao Bằng</option>
                    <option value="22">Cửu Long</option>
                    <option value="23">Đắc Lắc</option>
                    <option value="24">Đắc Nông</option>
                    <option value="25">Điện Biên</option>
                    <option value="26">Đồng Tháp</option>
                    <option value="27">Gia Lai</option>
                    <option value="28">Hà Giang</option>
                    <option value="29">Hà Nam</option>
                    <option value="30">Hà Tĩnh</option>
                    <option value="31">Hậu Giang</option>
                    <option value="32">Hoà Bình</option>
                    <option value="33">Khánh Hoà</option>
                    <option value="34">Kiên Giang</option>
                    <option value="35">Kon Tum</option>
                    <option value="36">Lai Châu</option>
                    <option value="37">Lâm Đồng</option>
                    <option value="38">Lạng Sơn</option>
                    <option value="39">Lào Cai</option>
                    <option value="40">Long An</option>
                    <option value="41">Miền Bắc</option>
                    <option value="42">Miền Nam</option>
                    <option value="43">Miền Trung</option>
                    <option value="44">Nam Định</option>
                    <option value="45">Nghệ An</option>
                    <option value="46">Ninh Bình</option>
                    <option value="47">Ninh Thuận</option>
                    <option value="48">Phú Thọ</option>
                    <option value="49">Phú Yên</option>
                    <option value="50">Quảng Bình</option>
                    <option value="51">Quảng Nam</option>
                    <option value="52">Quảng Ngãi</option>
                    <option value="53">Quảng Ninh</option>
                    <option value="54">Quảng Trị</option>
                    <option value="55">Sóc Trăng</option>
                    <option value="56">Sơn La</option>
                    <option value="57">Tây Ninh</option>
                    <option value="58">Thái Bình</option>
                    <option value="59">Thái Nguyên</option>
                    <option value="60">Thanh Hoá</option>
                    <option value="61">Thừa Thiên Huế</option>
                    <option value="62">Tiền Giang</option>
                    <option value="63">Toàn Quốc</option>
                    <option value="64">Trà Vinh</option>
                    <option value="65">Tuyên Quang</option>
                    <option value="66">Vĩnh Long</option>
                    <option value="67">Vĩnh Phúc</option>
                    <option value="68">Yên Bái</option>
                    <option value="100">Nước Ngoài</option>
                </select>
            </div>
            <div class="col-3 mt-3 px-1">
                <span class="ctn-icon"><i class="fa fa-wrench" aria-hidden="true"></i></span>
                <select class="form-control search-job__input-categories">
                    <option value="">Tất cả ngành nghề</option>
                    <option value="10101">An toàn lao động</option>
                    <option value="10102">Bán hàng kỹ thuật</option>
                    <option value="10103">Bán lẻ / bán sỉ</option>
                    <option value="10004">Báo chí / Truyền hình</option>
                </select>
            </div>
            <div class="col-2 mt-3 px-1">
                <span class="ctn-icon text-white pl-2 search-job--input"><i class="fa fa-search"
                        aria-hidden="true"></i></span>
                <button type="submit" class="form-control search-job__input-submit btn btn-block btn-warning">Tìm
                    Kiếm</button>
            </div>
        </div>
    </div>

    <!-- Tìm Kiếm Nâng Cao -->
    <div class="tittle-search">
        <span id="btn-show-advanced-search" data-toggle="collapse" data-target="#emoji">
            <i class="fa fa-angle-down"></i>
            Chọn tìm kiếm nâng cao
        </span>
    </div>
    <div class="box collapse container" id="emoji">
        <div class="row search-job ml-1">
            <div class="col-3 mt-2 mb-3 px-1">
                <span class="ctn-icon"><i class="fas fa-money-bill"></i></span>
                <select class="form-control search-job__input-location">
                    <option value="">Tất cả mức lương</option>
                    <option value="1">Dưới 3 triệu</option>
                    <option value="2">3 - 5 triệu</option>
                    <option value="3">5 - 7 Triệu</option>
                    <option value="4">7 - 10 Triệu</option>
                    <option value="5">12 - 15 Triệu</option>
                    <option value="6">15 - 20 Triệu</option>
                    <option value="7">20 - 30 Triệu</option>
                    <option value="8">Trên 30 Triệu</option>
                    <option value="9">Thỏa thuận</option>
                </select>
            </div>
            <div class="col-3 mt-2 mb-3 px-1">
                <span class="ctn-icon"><i class="far fa-chart-bar"></i></span>
                <select class="form-control search-job__input-location">
                    <option value="">Tất cả kinh nghiệm</option>
                    <option value="1">Chưa có</option>
                    <option value="2">Dưới 1 năm</option>
                    <option value="3"> 1 năm </option>
                    <option value="4"> 2 năm </option>
                    <option value="5"> 3 năm </option>
                    <option value="6"> 4 năm </option>
                    <option value="7"> 5 năm </option>
                    <option value="8"> Trên 5 năm </option>
                </select>
            </div>
            <div class="col-3 mt-2 mb-3 px-1">
                <span class="ctn-icon"><i class="fas fa-user-clock"></i></span>
                <select class="form-control search-job__input-categories">
                    <option value="">Hình thức làm việc</option>
                    <option value="10101"> Toàn thời gian </option>
                    <option value="10102"> Bán thời gian </option>
                    <option value="10103"> Thực tập sinh </option>
                    <option value="10004"> Remote - Làm việc từ xa </option>
                </select>
            </div>
            <div class="col-3 mt-2 mb-3 px-1">
                <span class="ctn-icon"><i class="fas fa-city"></i></span>
                <select class="form-control search-job__input-categories">
                    <option value="">Tất cả lĩnh vực</option>
                    <option value="10101"> Agency (Design/Development) </option>
                    <option value="10102"> Agency (Marketing/Advertising) </option>
                    <option value="10103"> Bán lẻ - Hàng tiêu dùng - FMCG </option>
                    <option value="10004"> Bât động sản </option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- Vị trí -->
<section>
    <div class="container">
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

<div class="container">
    <hr>
</div>

<!-- Việc làm -->
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-xl-4">
            <div class="side-wrapper">
                <div class="job-found">
                    <div class="job-found-amout ml-1">
                        <p>17,961 việc làm</p>
                    </div>
                    <div class="job-found-sort"><span class="sort-title dropdown" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Sắp xếp theo<em class="fa fa-chevron-down font-job2"></em>
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

                    <div class="job-item" id="job-item-35B4B2DE">

                        <div class="figure">
                            <div class="image">
                                <a href="detail.html" target="_blank"
                                    title="Hanoi Branch - Reeracoen Vietnam Co., Ltd">
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
        <div class="col-lg-7 col-xl-8">
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
                                <a href="" data-target="#company" data-toggle="tab"
                                    class="nav-link text-botton">Tổng quan công ty</a>
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
                                                    <li> <strong><i
                                                                class="fas fa-business-time icon-detail"></i>Hình
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
                                                            <a href="#" data-toggle="tooltip" target="_blank"
                                                                class="el-tooltip item">
                                                                <!---->
                                                                <strong class="fs-15">Nhân Viên Kinh Doanh Ngành
                                                                    Hàng Gạch</strong>
                                                            </a>
                                                        </p>
                                                        <p class="company mb-8">Công Ty Cổ Phần Tập Đoàn Hoa Sen</p>
                                                    </div>
                                                    <div class="col-sm-3 text-right mt-2"><a href="#"
                                                            target="_blank" class="btn btn-default"><i class="fas fa-paper-plane fa-xs fa-flip-horizontal"></i> Ứng tuyển ngay</a></div>
                                                    <div class="col-md-12">
                                                        <div class="location text_ellipsis mb-1">
                                                            <div class="row">
                                                                <div class="col-sm-3"><span class="dollar"><i class="li-cash-dollar"></i>15 triệu - 20 triệu</span></div>
                                                                <div class="col-sm-3"><i class="li-clock fs-12 mr-5"></i>&nbsp;21/10/2020
                                                                </div>
                                                                <div class="col-sm-3"> <i class="li-map-marker mr-5"></i>&nbsp;Hồ Chí Minh </div>
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
                                                            <a href="#" data-toggle="tooltip" target="_blank"
                                                                class="el-tooltip item">
                                                                <!---->
                                                                <strong class="fs-15">Nhân Viên Kinh Doanh Ngành
                                                                    Hàng Gạch</strong>
                                                            </a>
                                                        </p>
                                                        <p class="company mb-8">Công Ty Cổ Phần Tập Đoàn Hoa Sen</p>
                                                    </div>
                                                    <div class="col-sm-3 text-right"><a href="#"
                                                            target="_blank" class="btn btn-default"><i
                                                                class="fas fa-paper-plane fa-xs fa-flip-horizontal"></i> Ứng tuyển ngay</a></div>
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
                                                                        class="li-map-marker mr-5"></i>&nbsp;Hồ Chí
                                                                    Minh </div>
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
<div class="container" style="display: none;">
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
                                                <div class="time"> <em
                                                        class="fas fa-calendar-alt icon-caption"></em>
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
                                                <div class="time"> <em
                                                        class="fas fa-calendar-alt icon-caption"></em>
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
                                                <div class="time"> <em
                                                        class="fas fa-calendar-alt icon-caption"></em>
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
                                                <div class="time"> <em
                                                        class="fas fa-calendar-alt icon-caption"></em>
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
                                                <div class="time"> <em
                                                        class="fas fa-calendar-alt icon-caption"></em>
                                                    <time>16/09/2020</time>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Phân trang -->
                        </div>
                    </div>  
                </div>
            </div>

            <div class="job-bottom-banner" style="text-align:center;">
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>

@endsection