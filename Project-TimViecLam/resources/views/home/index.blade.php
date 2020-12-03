@extends('layouts.home')

@section('content')
<div class="background-color-container mt-5">
    <div class="home-header bg-white">
        <div class="container w-100">
            <div class="content text-center pt-4">
                <h1>Tìm Việc Khó? Đã Có Timvieclam.xyz</h1>
                <p>Hơn +100.000 việc làm hấp dẫn đang tuyển dụng hôm nay.</p>
            </div>
        </div>
        <div class="w-100 progressive-image">
            <img src="/images/logo/index.webp" class="w-100"  alt="Timvieclam.xyz"/>
        </div>
        <div class="container pb-5">
            <div class="container main-search-bar">
                <div class="w-100 text-center text-white pt-2"> Tìm kiếm kiếm công việc phù hợp với bạn trong số
                <strong>{{App\Models\Job::all()->count()}}</strong> việc đang tuyển dụng
                </div>
                <div class="forms-container">
                    <form method="GET" action="/job" class="sign-in-form">
                        <div class="row d-flex justify-content-around">
                            <div class="col-sm-12 col-lg-4 pr-lg-1">
                                <div class="input-field  mb-sm-0">
                                    <i class="fas fa-briefcase"></i>
                                    <input type="text" name="keyword" class="bootstrap-select-city__custom"
                                        placeholder="Tiêu đề công việc, vị trí, ..." autocomplete="off" spellcheck="false">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3 px-lg-1">
                                <div class="form-group m-0 p-0">
                                    <span class="bootstrap-select__icon"><i class="fas fa-tools"></i></span>
                                    <select name="career" class="bootstrap-select-city__custom w-100" data-size="7"
                                        data-live-search="true" title="Tất cả ngành nghề">
                                        @foreach (App\Models\Career::all() as $career)
                                            <option class="py-2" value="{{ $career->id }}"> {{ $career->name }}</option>
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
                                        @foreach (App\Models\City::all()  as $item)
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
                @foreach (App\Models\Career::all() as $career)
                <div class="item-top-field">
                    <div class="box_shadow_slider">
                        <a href="#" target="_blank">
                            <div class="row">
                                <div class="col-3 icon-top-field p-0 pl-1">
                                    <img alt="item" class="w-100" src="images/catalog.png" alt="Carrers"/>
                                </div>
                                <div class="col-9 top-field-name pl-0">
                                    <span class="text_bold">
                                        <p class="el-tooltip ml-3 font-weight-medium">
                                            {{$career->name}}
                                        </p>
                                    </span>
                                    <p class="text_ellipsis text_italic text-center">
                                        <small>(15 việc làm đang tuyển)</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <!-- việc làm tuyển gấp -->
        <div class="box_general mt-5">
            <h2 class="text_ellipsis text-uppercase font-weight-bold p-3"><i class="fas fa-briefcase"></i>
                Việc làm tuyển gấp
            </h2>
            <!-- wp slider list job -->
            <div class="col-lg-12 col-md-12 mt-3">
                <!--  -->
                <div class="row d-flex justify-content-around">
                    @foreach ($jobs_urgently as $job)
                    <div class="col-md-6 col-lg-6 job-over-item">
                        <div class="row job-item-show">
                            <a href="{{ Route('job-detail',['id' => $job->id]) }}" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                @if ($job->logo != null)
                                    <img src="{{ asset('images/') }}{{$job->logo}}" alt="{{$job->name_job}}"/>
                                @else
                                <img src="/images/logo/timvieclam-placeholder.png" alt="{{$job->name_job}}"/>
                                @endif
                            </a>
                            <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                <p class="job_title text_ellipsis mt-1">
                                    <a href="{{ Route('job-detail',['id' => $job->id]) }}" data-toggle="tooltip" title="{{$job->name_job}}"
                                        target="_blank">
                                        <span>
                                            <strong>{{$job->name_job}}</strong>
                                        </span>
                                    </a></p>
                                <div class="job_company">
                                    <div class="name">
                                        <a href="/job-detail" target="_blank" title="Cali-land, Inc tuyển dụng" data-toggle="tooltip">
                                            <span>{{$job->name_company}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mb-1 job_info">
                                    <div class="col-5 text_ellipsis">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack mb-1"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
                                            <path fill-rule="evenodd"
                                                d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
                                            <path
                                                d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                        </svg>
                                        {{$job->salary}}
                                    </div>
                                    <div title="{{$job->city}}" class="col-7 text_ellipsis">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                                        </svg>
                                        {{$job->city}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        {{ $jobs_urgently->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-100 bg-white">
            <div class="container pt-2">
                <div class="page-wrapper">
                    <div class="post-slider">
                        <h1 class="slider-title text-uppercase">NHÀ TUYỂN DỤNG HÀNG ĐẦU</h1>
                        <i class="fas fa-chevron-left prev"></i>
                        <i class="fas fa-chevron-right next"></i>
                        <div class="post-wrapper">
                            <div class="post">
                                <img src="images/ct1.png" class="slider-image" alt="">
                            </div>
                            <div class="post">
                                <img src="images/ct2.jpg" class="slider-image" alt="">
                            </div>
                            <div class="post">
                                <img src="images/ct3.png" class="slider-image" alt="">
                            </div>
                            <div class="post">
                                <img src="images/ct4.png" class="slider-image" alt="">
                            </div>
                            <div class="post">
                                <img src="images/ct5.png" class="slider-image" alt="">
                            </div>
                            <div class="post">
                                <img src="images/ct4.png" class="slider-image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <!-- việc làm tuyển gấp -->
            <div class="box_general mt-4">
                <h2 class="text_ellipsis text-uppercase font-weight-bold p-3"><i class="fas fa-briefcase"></i>
                    Việc làm nỗi bật
                </h2>
                <!-- wp slider list job -->
                <div class="col-lg-12 col-md-12 mt-3">
                    <!--  -->
                    <div class="row d-flex justify-content-around">
                        @foreach ($jobs_hot as $job)
                    <div class="col-md-6 col-lg-6 job-over-item">
                        <div class="row job-item-show">
                            <a href="/job-detail/{{$job->id}}" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                                @if ($job->logo != null)
                                    <img src="{{ asset('images/') }}{{$job->logo}}" alt="{{$job->name_job}}"/>
                                @else
                                <img src="/images/logo/timvieclam-placeholder.png" 
                                        alt="{{$job->name_job}}"/>
                                @endif
                                
                            </a>
                            <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                                <p class="job_title text_ellipsis mt-1">
                                    <a href="/job-detail" data-toggle="tooltip" title="{{$job->name_job}}"
                                        target="_blank">
                                        <span>
                                            <strong>{{$job->name_job}}</strong>
                                        </span>
                                    </a></p>
                                <div class="job_company">
                                    <div class="name">
                                        <a href="/job-detail" target="_blank" title="Cali-land, Inc tuyển dụng" data-toggle="tooltip">
                                            <span>{{$job->name_company}}</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mb-1 job_info">
                                    <div class="col-5 text_ellipsis">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack mb-1"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
                                            <path fill-rule="evenodd"
                                                d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
                                            <path
                                                d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                        </svg>
                                        {{$job->salary}}
                                    </div>
                                    <div title="{{$job->city}}" class="col-7 text_ellipsis">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                                        </svg>
                                        {{$job->city}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        {{ $jobs_hot->links() }}
                </div>
            </div>
        </div>
        </div>


        <section class="blog py-3 mt-2 bg-white">
            <h3 class="font-weight-semibold text-center text-uppercase pt-2">Cẩm nang nghề nghiệp</h3>
            <div id="cards_landscape_wrap-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <a href="">
                                <div class="card-flyer bg-white">
                                    <div class="text-box">
                                        <div class="image-box">
                                            <img src="images/asdadasd.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-title">
                                            <h6 class="text-left">Dự phỏng vấn, gặp đúng ... người quen</h6>
                                            <div class="card__content  pb-3">
                                                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=AD" alt=""
                                                    class="card__image-avt" />
                                                <a href="#" class="btn btn--primary">Admin</a>
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
                                            <img src="images/tro-cap-thoi-viec-min-15654822999091489850067.jpg" alt="" />
                                        </div>
                                        <div class="text-title">
                                            <h6 class="text-left">Phân biệt giữa trợ cấp mất việc và trợ cấp thôi việc</h6>
                                            <div class="card__content  pb-3">
                                                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=AD" alt=""
                                                    class="card__image-avt" />
                                                <a href="#" class="btn btn--primary">Admin</a>
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
                                            <img src="images/Advices.jpg"
                                                alt="" />
                                        </div>
                                        <div class="text-title">
                                            <h6 class="text-left">Những yếu tố khiến cuộc đàm phán nhận việc có nguy cơ “lạc trôi”</h6>
                                            <div class="card__content  pb-3">
                                                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=AD" alt=""
                                                    class="card__image-avt" />
                                                <a href="#" class="btn btn--primary">Admin</a>
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

        <div class="container mb-3 pb-3">
            <div class="box_general mt-4">
                <h2 class="text_ellipsis text-uppercase font-weight-bold p-3"><i class="fas fa-briefcase"></i>
                    Việc làm theo ngành nghề
                </h2>
                <div class="col-lg-12 col-md-12 expander">
                    <div class="row d-flex justify-content-around p-3 inner-bit">
                        @foreach (App\Models\Career::all() as $item)
                        <div class="col-md-4 col-lg-3 mb-2 font-weight-medium inner-bit_title">
                            <a href="{{URL('/job?career=')}}{{$item->id}}" data-toggle="tooltip"
                                        title="{{$item->name}}" 
                                        target="_blank" class="p-2 text-dark">Việc làm <strong class="text-blue">{{$item->name}}</strong>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center expand-toggle_btn font-weight-bold">Xem thêm</div>
            </div>
        </div>

        <div class="container mb-3 pb-3">
            <div class="box_general mt-4">
                <h2 class="text_ellipsis text-uppercase font-weight-bold p-3"><i class="fas fa-briefcase"></i>
                    Việc làm theo tỉnh thành
                </h2>
                <div class="col-lg-12 col-md-12 expander">
                    <div class="row d-flex justify-content-around p-3 inner-bit">
                        @foreach (App\Models\City::all() as $item)
                        <div class="col-md-4 col-lg-3 mb-2 font-weight-medium inner-bit_title">
                            <a href="{{URL('/job?city=')}}{{$item->id}}" data-toggle="tooltip"
                                        title="{{$item->name}}" 
                                        target="_blank" class="p-2 text-dark">Việc làm <strong class="text-blue">{{$item->name}}</strong>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center expand-toggle_btn font-weight-bold">Xem thêm</div>
            </div>
        </div>
    </div>
</div>
@endsection