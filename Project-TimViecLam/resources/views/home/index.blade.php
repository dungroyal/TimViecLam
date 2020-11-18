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
            <div class="mt-3">
                <div class="owl-carousel owl-theme">
                    @foreach ($careers as $item)
                        <div class="item-top-field">
                            <div class="box_shadow_slider">
                                <a href="/tuyen-dung/63/tu-van-cham-soc-khach-hang.html" target="_blank">
                                <div class="row">
                                    <div class="col-3 icon-top-field p-0 pl-1">
                                        <img alt="item" class="w-100" src="images/catalog.png" lazy="loaded" />
                                    </div>
                                    <div class="col-9 top-field-name pl-0">
                                        <span class="text_bold">
                                            <p class="el-tooltip ml-3 font-weight-medium">
                                                {{$item->name}}
                                            </p>
                                        </span>
                                        <p class="text_ellipsis text_italic text-center">
                                            (15 việc làm đang tuyển)
                                        </p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- việc làm tuyển gấp -->
            <div class="box_general mt-5">
                <h2 class="text_ellipsis uppercase"><i class="fas fa-briefcase"></i> 
                    Việc làm tuyển gấp
                </h2>
                <!-- wp slider list job -->
                <div class="col-lg-12 col-md-12 mt-3">
                    <!--  -->
                    <div class="row d-flex justify-content-around">
                        @foreach ($careers as $item)
                        <div class="col-md-6 col-lg-6 job-over-item">
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
                        @endforeach
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
