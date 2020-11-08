<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz</title>

    <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fontawesome 4.7 -->
    <link href="{{ asset('plugin/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- Style -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
  </head>
</head>
<body>
    <header>
        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo/logo.png') }}" width="250" alt="Logo Tìm Việc Làm">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline ml-auto">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="form-inline my-2 my-lg-0 navbar-nav font-weight-normal font-header">
                            <li class="nav-item">
                                <a class="nav-link" href="job.html"><i class="fas fa-blog mr-2 icon-menu"></i> GÓC NGHỀ NGHIỆP
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-lock mr-2 icon-menu"></i> ĐĂNG NHẬP </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user mr-2 icon-menu"></i> ĐĂNG KÝ </a>
                            </li>
                            <div class="dropdown-menu-top">
                                <li class="nav-item dropdown btn btn-bd-submit mb-3 mb-md-0 ml-md-3">
                                    <a class="text-white p-2" href="#">NHÀ TUYỂN DỤNG</a>
                                </li>
                            </div>
                        </div>
                </form>
            </div>
        </nav>
    </header>
    <div class="background-color-container">
        <div class="home-header bg-white">
            <div class="container w-100">
                <div class="content text-center pt-4">
                    <h1>Tìm Việc Khó? Đã Có Timvieclam.xyz</h1>
                    <p>Hơn +100.000 việc làm hấp dẫn đang tuyển dụng hôm nay.</p>
                </div>
            </div>
            <div class="w-100">
                <img src="images/All_Job.png" alt="65x12" class="w-100">
            </div>
            <div class="container my-0 search_group_header pb-5">
                <form>
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <div class="icon-wrap">
                                <i class="fab fa-searchengin"></i>
                            </div>
                            <input id="search" type="text" placeholder="Tiêu đề công việc, vị trí công việc, ... " />
                        </div>
                        <div class="input-field second-wrap">
                            <div class="icon-wrap">
                                <i class="fas fa-list mr-2"></i>
                            </div>
                            <select name="" title="Select a number">
                                <option >Ngành nghề</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                        <div class="input-field third-wrap">
                            <div class="icon-wrap">
                                <i class="fas fa-map-marked-alt mr-2"></i>
                            </div>
                            <select name="" title="Select a number">
                                <option>Địa điểm</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                                <option value="1">Option 1</option>
                            </select>
                        </div>
                        <div class="input-field fifth-wrap">
                            <button class="btn-search" type="button">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-5 title-catalog-top ">
                    <h3 class="font-weight-bold"><i class="fas fa-city"></i> TOP NGÀNH NGHỀ PHỔ BIẾN</h3>
                </div>
            </div>
            <div class="wp-slider mt-3">
                <div class="owl-carousel owl-theme">
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">Bán Hàng</p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Hành chính - Văn phòng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">Dịch vụ</p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">Nhân viên kinh doanh</p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">Lao động phổ thông</p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item-top-field">
                        <div class="box_shadow_slider">
                            <a href="#" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" src="{{ asset('images/catalog.png') }}" />
                                </div>
                                <div class="top-field-name">
                                    <span class="text_bold">
                                        <p class="el-tooltip item">
                                            Tư vấn/ Chăm sóc khách hàng
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic">
                                        (3038 việc làm đang tuyển)
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <!-- việc làm tuyển gấp -->
            <div class="box_general mt-5">
                <h2 data-v-ebebb8de="" class="text_ellipsis uppercase"><i class="fas fa-briefcase"></i> &nbsp;Việc làm
                    tuyển
                    gấp
                </h2>
                <!-- wp slider list job -->
                <div class="col-lg-12 col-md-12 mt-3">
                    <!--  -->
                    <div class="row">
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div data-v-ebebb8de="" class="col-md-6 col-lg-6 job-over-item">
                            <div data-v-0e092c0b="" data-v-ebebb8de="" class="row job-item">
                                <div data-v-0e092c0b="" class="col-md-12 col-lg-12 job_info">
                                    <div data-v-0e092c0b="" class="company_logo"><a data-v-0e092c0b="" href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div data-v-0e092c0b="" class="logo_box"><img data-v-0e092c0b=""

                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                   ></div>
                                        </a></div>
                                    <div data-v-0e092c0b="" class="company_name">
                                        <p data-v-0e092c0b="" class="j_title text_ellipsis"><a data-v-0e092c0b=""
                                                href="#" class="el-tooltip item" id="vieclamtuyengap"
                                                title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                                <!---->
                                                <!----><span data-v-0e092c0b=""><strong data-v-0e092c0b="">Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span></a></p>
                                        <div data-v-0e092c0b="" class="j_company">
                                            <div data-v-0e092c0b="" class="name"><a data-v-0e092c0b="" href="#"
                                                    target="_blank" title="Cali-land, Inc tuyển dụng"><span
                                                        data-v-0e092c0b="">Cali-land, Inc</span></a></div>
                                            <div data-v-0e092c0b="" class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div data-v-0e092c0b="" class="table-item">
                                            <div data-v-0e092c0b="" class="dollar"><i
                                                    class="far fa-money-bill-alt"></i>&nbsp;11 triệu -
                                                24 triệu</div>
                                            <div data-v-0e092c0b="" title="Hồ Chí Minh, Bình Dương"
                                                class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>&nbsp;Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header mt-5">


                <!-- việc làm hấp dẫn -->



                <!-- DOANH NGHIỆP TUYỂN DỤNG -->
                <h1 class="font-weight-light text-center mt-5 font-weight-bold" style="font-size: 26px">
                    DOANH NGHIỆP TUYỂN DỤNG
                </h1>
                <p class="text-center">
                    Hàng nghìn doanh nghiệp uy tín đang tìm kiếm ứng viên trên
                    Timvieclam.xyz
                </p>

                <!-- <hr class="mt-2 mb-5"> -->
                <div class="col-lg-12 col-sm-6">
                    <div class="row row-business--top">
                        <div class="col-lg-2">
                            <a href="#lightbox"><img src="https://static.mservice.io/img/logo-momo.png" class="my-3" /></a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <a href="#lightbox"><img
                                    src="https://brasol.vn/public/uploads/1521190718-brasol.vn-he-thong-nhan-dien-thuong-hieu-bitis-bestplus-vn-logo-bitis.jpg"
                                    class="my-3" /></a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <a href="#lightbox"><img
                                    src="https://upload.wikimedia.org/wikipedia/vi/thumb/e/e8/Logo_Viettel.svg/1200px-Logo_Viettel.svg.png"
                                    class="my-3" /></a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <a href="#lightbox"><img src="https://www.freepnglogos.com/uploads/samsung-logo-text-png-1.png"
                                    class="my-3" /></a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <a href="#lightbox"><img
                                    src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png"
                                    class="my-3" /></a>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <a href="#lightbox"><img
                                    src="https://brasol.vn/public/ckeditor/uploads/thiet-ke-logo-tin-tuc/logo-tiki-png.png"
                                    class="my-3" /></a>
                        </div>
                    </div>
                </div>


                <div class="row row-business--between">
                    <div class="col-lg-2 col-md-4">
                        <a href="#lightbox"><img src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png" class="my-3" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="#lightbox"><img
                                src="https://brasol.vn/public/uploads/1521190718-brasol.vn-he-thong-nhan-dien-thuong-hieu-bitis-bestplus-vn-logo-bitis.jpg"
                                class="my-3" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="#lightbox"><img
                                src="https://upload.wikimedia.org/wikipedia/vi/thumb/e/e8/Logo_Viettel.svg/1200px-Logo_Viettel.svg.png"
                                class="my-3" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="#lightbox"><img src="https://www.freepnglogos.com/uploads/samsung-logo-text-png-1.png"
                                class="my-3" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="#lightbox"><img
                                src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png"
                                class="my-3" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="#lightbox"><img
                                src="https://brasol.vn/public/ckeditor/uploads/thiet-ke-logo-tin-tuc/logo-tiki-png.png"
                                class="my-3" /></a>
                    </div>
                </div>

                <h1 class="font-weight-light text-center mt-5 font-weight-bold" style="font-size: 26px">
                    Our Latest Blog
                </h1>
                <hr class="mt-2 mb-1" />
                <section class="blog">
                    <div id="cards_landscape_wrap-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="">
                                        <div class="card-flyer">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="https://cdn.tgdd.vn/Files/2020/09/14/1290013/unpacked-for-fan_800x450-600x400.gif"
                                                        alt="" />
                                                </div>
                                                <div class="text-title">
                                                    <h6>AORUS | Enthusiasts' Choice for PC gaming</h6>
                                                    <div class="card__content">
                                                        <img src="https://avatarfiles.alphacoders.com/118/thumb-118867.jpg"
                                                            alt="" class="card__image-avt" />
                                                        <a href="#" class="btn btn--primary">Quốc Thịnh</a>
                                                        <a href="#" class="btn btn--secondary">Đọc Tiếp <i
                                                                class="fa fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="">
                                        <div class="card-flyer">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="https://cdn.tgdd.vn/Files/2020/04/22/1251114/ip12._640x320-600x400.gif"
                                                        alt="" />
                                                </div>
                                                <div class="text-title">
                                                    <h6>AORUS | Enthusiasts' Choice for PC gaming</h6>
                                                    <div class="card__content">
                                                        <img src="https://avatarfiles.alphacoders.com/118/thumb-118867.jpg"
                                                            alt="" class="card__image-avt" />
                                                        <a href="#" class="btn btn--primary">Quốc Thịnh</a>
                                                        <a href="#" class="btn btn--secondary">Đọc Tiếp <i
                                                                class="fa fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <a href="">
                                        <div class="card-flyer">
                                            <div class="text-box">
                                                <div class="image-box">
                                                    <img src="https://cdn.tgdd.vn/Files/2020/09/14/1289973/3615291-xbox-series-x-main-1_800x450-300x200.jpg"
                                                        alt="" />
                                                </div>
                                                <div class="text-title">
                                                    <h6>AORUS | Enthusiasts' Choice for PC gaming</h6>
                                                    <div class="card__content">
                                                        <img src="https://avatarfiles.alphacoders.com/118/thumb-118867.jpg"
                                                            alt="" class="card__image-avt" />
                                                        <a href="#" class="btn btn--primary">Quốc Thịnh</a>
                                                        <a href="#" class="btn btn--secondary">Đọc Tiếp <i
                                                                class="fa fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <!-- Tim viec theo tinh -->
            <div class="col-lg-12 col-md-12">
                <div class="search-job-city">
                    <div class="box_general mt-5">
                        <h2 data-v-ebebb8de="" class="text_ellipsis uppercase text-center"> &nbsp;TÌM VIỆC LÀM THEO TỈNH
                            THÀNH </h2>
                        <div class="box-body" data-v-0aaecb84="">
                            <div class="row" data-v-0aaecb84="">
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Hà Nội
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Hồ Chí Minh
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại An Giang
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bạc Liêu
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bà Rịa - Vũng Tàu
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bắc Cạn
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bắc Giang
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bắc Ninh
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bến Tre
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bình Dương
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bình Định
                                    </a></div>
                                <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                        class="item" data-v-0aaecb84="">
                                        Việc làm tại Bình Phước
                                    </a></div>
                            </div>
                            <!-- read more -->
                            <span class="moreText">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><span
                                            class="more-location"><a href="#" class="item" data-v-0aaecb84="">
                                                Việc làm tại Bình Thuận
                                            </a></div>

                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Cao Bằng
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Cà Mau
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Cần Thơ
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Đà Nẵng
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Đắc Lắc
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Đắc Nông
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Điện Biên
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Đồng Nai
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Đồng Tháp
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Gia Lai
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hà Giang
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hà Nam
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hà Tây
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hà Tĩnh
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href=#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hải Dương
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hải Phòng
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hậu Giang
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hòa Bình
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Hưng Yên
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Khánh Hòa
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Kiên Giang
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Kon Tum
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Lai Châu
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Lạng Sơn
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Lào Cai
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Lâm Đồng
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Long An
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Nam Định
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Nghệ An
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Ninh Bình
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Ninh Thuận
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Phú Thọ
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Phú Yên
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Quảng Bình
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Quảng Nam
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Quảng Ngãi
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Quảng Ninh
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Quảng Trị
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Sóc Trăng
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Sơn La
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Tây Ninh
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Thái Bình
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Thái Nguyên
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Thanh Hóa
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Thừa Thiên Huê
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Tiền Giang
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Trà Vinh
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Tuyên Quang
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Vĩnh Long
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Vĩnh Phúc
                                        </a></div>
                                    <div class="col-lg-3 col-md-3 item location_rut_gon" data-v-0aaecb84=""><a href="#"
                                            class="item" data-v-0aaecb84="">
                                            Việc làm tại Yên Bái
                                        </a></div>

                                </div>
                            </span>
                            <div class="read-more-btn">Xem thêm <i class="fas fa-angle-down"></i></div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tim viec theo nghanh nghe -->
            <br> <br>
            <!--  -->


        </div>
    </div>

    <footer class="page-footer font-small mdb-color pt-4">
        <div class="container page-footer__bottom text-center text-md-left text-primary">
            <div class="row text-center text-md-left mt-3 pb-3">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="images/Logo_White.png" alt="" class="footer-img" />
                </div>

                <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        VỀ CHÚNG TÔI
                    </h6>
                    <div class="text__info--title">
                        <p>
                            <a href="intro.html">Về Timvieclam.xyz</a>
                        </p>
                        <!-- <p>
              <a href="#!">Quy Chế</a>
            </p> -->
                        <p>
                            <a href="security.html">Quy Định Bảo Mật</a>
                        </p>
                        <p>
                            <a href="use.html">Thỏa Thuận Sử Dụng</a>
                        </p>
                        <p>
                            <a href="bvtt.html">Chính Sách BV Thông Tin Cá Nhân</a>
                        </p>
                    </div>
                </div>

                <hr class="w-100 clearfix d-md-none" />

                <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        CÔNG CỤ
                    </h6>
                    <div class="text__info--title">
                        <p>
                            <a href="#!">Quản Lý Tuyển Dụng</a>
                        </p>
                        <p>
                            <a href="#!">Quản Lý Hồ Sơ</a>
                        </p>
                        <p>
                            <a href="#!">Báo Giá</a>
                        </p>
                        <p>
                            <a href="#!">Liên Hệ Tài Trợ Sự Kiện</a>
                        </p>
                    </div>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        Liên Hệ
                    </h6>
                    <div class="text__info--address">
                        <p>
                            <i class="fas fa-home mr-3"></i> Tô Ký, Phường Tân Chánh Hiệp,
                            Q12
                        </p>
                        <p><i class="fas fa-envelope mr-3"></i> huynq156@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </div>
            <hr class="w-100 clearfix d-md-none" />

            <div class="row page_footer--category">
                <div class="col-md-3 text__info col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        Việc Làm Theo Ngành Nghề
                    </h6>
                    <div class="text__info--title">
                        <p>
                            <a href="#!">Việc Làm Kinh Doanh</a>
                        </p>
                        <p>
                            <a href="#!">Việc Làm Bán Hàng</a>
                        </p>
                        <p>
                            <a href="#!">Việc Làm Kế Toán</a>
                        </p>
                        <p>
                            <a href="#!">Chăm Sóc Khách Hàng</a>
                        </p>
                        <div class="text__info--all">
                            <p>
                                <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                    class="fa fa-angle-double-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-2 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        Việc Làm Công Ty
                    </h6>
                    <div class="text__info--title">
                        <p>
                            <a href="#!">VinFast Tuyển Dụng</a>
                        </p>
                        <p>
                            <a href="#!">Timvieclam.xyz Tuyển Dụng</a>
                        </p>
                        <p>
                            <a href="#!">Family Tuyển Dụng</a>
                        </p>
                        <p>
                            <a href="#!">Nhà Tao Tuyển Dụng</a>
                        </p>
                        <div class="text__info--all">
                            <p>
                                <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                    class="fa fa-angle-double-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-3 text__info col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        VIỆC LÀM THEO TỈNH
                    </h6>
                    <div class="text__info--title">
                        <p>
                            <a href="#!">Việc Làm TPHCM</a>
                        </p>
                        <p>
                            <a href="#!">Việc Làm Hà Nội</a>
                        </p>
                        <p>
                            <a href="#!">Việc Làm Quảng Ngãi</a>
                        </p>
                        <p>
                            <a href="#!">Việc Làm Vũng Tàu</a>
                        </p>
                        <div class="text__info--all">
                            <p>
                                <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                    class="fa fa-angle-double-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <div class="col-md-4 text__info col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold text-white">
                        Việc Làm Hấp Dẫn
                    </h6>

                    <div class="text__info--title">
                        <p>
                            <a href="#!">Tìm Việc Làm</a>
                        </p>
                        <p>
                            <a href="#!">Việc Làm Thêm</a>
                        </p>
                        <p>
                            <a href="#!">Lao Động Phổ Thong</a>
                        </p>
                        <p>
                            <a href="#!">Thực Tập Sinh</a>
                        </p>
                        <div class="text__info--all">
                            <p>
                                <a class="text-primary" href="#!">Xem Tất Cả</a>&nbsp;<i
                                    class="fa fa-angle-double-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row d-flex align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p class="text-center text-md-left">
                        © 2020 Copyright:
                        <a href="timvieclam.xyz">
                            <strong> Timvieclam.xyz</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4 ml-lg-0">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating--fb btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating--tw btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating--gg btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating--link btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a id="back-to-top" href="#" class="btn back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

  <script src="{{ asset('plugin/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('home/js/main.js') }}"></script>
</body>
</html>
