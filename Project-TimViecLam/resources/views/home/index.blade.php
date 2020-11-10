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
            <img alt="65x12" class="w-100" src="{{ asset('images/All_Job.png') }}"/>
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
                        <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                            <div class="icon-top-field">
                                <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                        <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                            <div class="icon-top-field">
                                <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                        <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                            <div class="icon-top-field">
                                <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                        <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank" class="">
                            <div class="icon-top-field">
                                <img alt="item" class="lazy-load" src="images/catalog.png" lazy="loaded" />
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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
                                                class="lazy-load"
                                                src="https://cdn1.mywork.com.vn/company-logo-small/102020/MOO49WsEi8by2e0nudVlI6XBpHdtZhjP1Y7ONaWp.png"
                                                lazy="loaded"></div>
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

            <div class="row row-business--top">
                <div class="col-lg-2 col-md-4 col-sm-6">
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

            <div class="row row-business--between">
                <div class="col-lg-2 col-md-4 col-sm-6">
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
                    </div>
                </div>
            </div>
        </div>
        <br> <br>
    </div>
</div>
@endsection
