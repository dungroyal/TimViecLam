@extends('layouts.home')

@section('content')
    <div class="background-color-container">
        <div class="home-header bg-white">
            <div class="container w-100">
                <div class="content text-center pt-4">
                <h1>Tìm Việc Khó? Đã Có Timvieclam.xyz</h1>
                    <p>Hơn +100.000 việc làm hấp dẫn đang tuyển dụng hôm nay.</p>
                </div>
            </div>
            <div class="w-100 progressive-image">
                <img alt="65x12" class="w-100" src="{{ asset('images/All_Job.png') }}" />
            </div>
            <div class="container pb-5">
                <div class="container main-search-bar">
                    <div class="w-100 text-center text-white pt-2"> Tìm kiếm <strong>409</strong> việc làm mới trong
                        <strong>6,509</strong> việc đang tuyển dụng
                    </div>
                    <div class="forms-container">
                        <form method="GET" action="/job" class="sign-in-form">
                            <div class="row d-flex justify-content-around">
                                <div class="col-sm-12 col-lg-4 pr-lg-1">
                                    <div class="input-field  mb-sm-0">
                                        <i class="fas fa-briefcase"></i>
                                        <input type="text" name="keyword" class="bootstrap-select-city__custom"
                                            placeholder="Tiêu đề công việc, vị trí, ...">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-3 px-lg-1">
                                    <div class="form-group m-0 p-0">
                                        <span class="bootstrap-select__icon"><i class="fas fa-tools"></i></span>
                                        <select name="career" class="bootstrap-select-city__custom w-100" data-size="7"
                                            data-live-search="true" title="Tất cả ngành nghề">
                                            @foreach ($careers as $item)
                                                <option class="py-2" value="{{ $item->id }}"> {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-lg-3 px-lg-1">
                                    <div class="form-group m-0 p-0">
                                        <span class="bootstrap-select__icon"><i class="fas fa-map-marker-alt"></i></span>
                                        <select name="city" class="bootstrap-select-city__custom w-100"
                                            data-selected-text-format="count > 5" data-size="7" data-live-search="true"
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                            <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                                <div class="icon-top-field">
                                    <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                <h2 class="text_ellipsis uppercase"><i class="fas fa-briefcase"></i> Việc làm
                    tuyển
                    gấp
                </h2>
                <!-- wp slider list job -->
                <div class="col-lg-12 col-md-12 mt-3">
                    <!--  -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
                                                Minh, Bình Dương
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-md-6 col-lg-6 job-over-item">
                            <div class="row job-item-show">
                                <div class="col-md-12 col-lg-12 job_info">
                                    <div class="company_logo"><a href="#" class=""
                                            title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)" target="_blank">
                                            <div class="logo_box"><img class="lazy-load"
                                                    src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                    lazy="loaded"></div>
                                        </a></div>
                                    <div class="company_name">
                                        <p class="j_title text_ellipsis"><a href="#" class="el-tooltip item"
                                                id="vieclamtuyengap" title="Loan Processor (hỗ Trợ Cho Vay Tiền  Mua Nhà)"
                                                target="_blank">
                                                <!---->
                                                <!----><span><strong>Loan
                                                        Processor
                                                        (hỗ Trợ Cho Vay
                                                        Tiền Mua Nhà)</strong></span>
                                            </a></p>
                                        <div class="j_company">
                                            <div class="name"><a href="#" target="_blank"
                                                    title="Cali-land, Inc tuyển dụng"><span>Cali-land, Inc</span></a></div>
                                            <div class="viewed">
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="table-item">
                                            <div class="dollar"><i class="far fa-money-bill-alt"></i>11 triệu -
                                                24 triệu</div>
                                            <div title="Hồ Chí Minh, Bình Dương" class="location text_ellipsis pd-map"><i
                                                    class="fas fa-map-marker-alt"></i>Hồ Chí
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
                        <a href="#lightbox"><img
                                src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png"
                                class="my-3" /></a>
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
            <div class="col-lg-12 col-md-12 my-5">
                <div class="box_general my-1">
                    <h2 class="text_ellipsis uppercase text-center my-3"> TÌM VIỆC LÀM THEO NGHÀNH NGHỀ </h2>
                    <div class="box-body">
                        <div class="row">
                            @foreach ($careers as $item)
                                <div class="col-lg-3 col-md-3 item location_rut_gon">
                                    <a href="job/keyword=&career=&city={{ $item->id }}" class="item">
                                        Việc làm tại {{ $item->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 my-5">
                <div class="box_general my-1">
                    <h2 class="text_ellipsis uppercase text-center my-3"> TÌM VIỆC LÀM THEO TỈNH
                        THÀNH </h2>
                    <div class="box-body">
                        <div class="row">
                            @foreach ($city as $item)
                                <div class="col-lg-3 col-md-3 item location_rut_gon">
                                    <a href="job/keyword=&career=&city={{ $item->id }}" class="item">
                                        Việc làm theo {{ $item->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
