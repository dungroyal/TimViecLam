@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="content">
            <h1>Tìm Việc Khó?<br>
                Đã Có Timvieclam.xyz</h1>
            <p>Hơn +100.000 việc làm hấp dẫn đang tuyển dụng hôm nay.</p>
        </div>

        <div class="search_jobs search_jobs_top">
            <div class="search_box">
                <input type="text" class="input input__searchjobs-top" placeholder="Nhập công việc bạn đang tìm...">
                <button class="btn">Tìm Kiếm</button>
            </div>
        </div>
        <div class="form-group--option">
            <select name="careers" id="careers" class="form-control--left">
                <option value="0">Chọn nghành nghề</option>
                @foreach ($careers as $career)
                    <option value="{{$career->id}}">{{$career->name}}</option>
                @endforeach
            </select>

            <select class="form-control--right">
                <option  value="0">Vị Trí</option>
                @foreach ($db_city as $db_city)
                    <option value="{{$db_city->matp}}">{{$db_city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="search-dvanced">
            <a href="">Tìm kiếm nâng cao.</a>
        </div>
        <img src="https://www.openthenews.com/wp-content/uploads/2020/07/AI-aggregator.png" class="feature-img">
    </div>
    <div class="bg-light mt-2 py-5">
        <h4 class="mb-4" style="text-align: center;"><i class="fas fa-city">&nbsp; TOP NGÀNH NGHỀ PHỔ BIẾN</i></h4>
        <div class="container container-catalog--top">
            @foreach ($careers as $careers)
            @continue($loop->index == 0)
            <div class="card promoting-card mr-3">
                <div class="card-body d-flex">
                    <img src="{{ asset('home/images/catalog.png') }}" class="rounded-circle mr-3" alt="avatar">
                    <div>
                        <a href="">{{$careers->name}}</a>
                        <p class="card-text card-text--catalog ">(1111 việc đang tuyển)</p>
                    </div>
                </div>
            </div>
            @break($loop->index == 3)
            @endforeach
            <div class="card promoting-card-bottom mr-2">
                <div class="card-body d-flex">
                    <a href="">
                        <img src="{{ asset('home/images/plus.png') }}" class="rounded-circle--bottom" alt="avatar">
                    </a>
                </div>
            </div>
        </div>
    </div>


        <div class="container header header-bottom">
            <!-- việc làm tuyển gấp -->
            <br><br><br>
            <div class="box box-title">
                <h4><i class="fas fa-briefcase">&nbsp; VIỆC LÀM TUYỂN GẤP</i></h4>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://static.wixstatic.com/media/9d8ed5_847c5475fe8c43f899c98fea24fd4ca1~mv2.png/v1/fit/w_500,h_500,q_90/file.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/vi/d/dc/Vinfast-logo.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://upload.wikimedia.org/wikipedia/commons/1/1e/RPC-JP_Logo.png"
                                alt="Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>



                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://image.freepik.com/free-vector/camera-photography-logo-badges_32991-120.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://thaitrien.com/wp-content/uploads/2020/05/logo-hoi-sinh-vien-vn.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/ITunes_12.2_logo.png/768px-ITunes_12.2_logo.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>
            </div><br> <br>
            <div class="box box_title--bottom">
                <a href=""><i class="fas fa-plus">&nbsp; Xem thêm</i></a>
            </div>

            <!-- việc làm hấp dẫn -->

            <br><br>

            <div class="box box-title">
                <h4><i class="fas fa-briefcase">&nbsp; VIỆC LÀM HẤP DẪN</i></h4>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://static.wixstatic.com/media/9d8ed5_847c5475fe8c43f899c98fea24fd4ca1~mv2.png/v1/fit/w_500,h_500,q_90/file.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/vi/d/dc/Vinfast-logo.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://upload.wikimedia.org/wikipedia/commons/1/1e/RPC-JP_Logo.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>



                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://image.freepik.com/free-vector/camera-photography-logo-badges_32991-120.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://thaitrien.com/wp-content/uploads/2020/05/logo-hoi-sinh-vien-vn.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-12 col-sm-12 mb-1 ">
                    <div class="card card-jobs-uv">
                        <div class="logo-doanh_nghiep">
                            <img class="card-img-top"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/ITunes_12.2_logo.png/768px-ITunes_12.2_logo.png"
                                alt="Card image cap">
                        </div>
                        <div class="card-body card-body--uv">
                            <a href="">Nhân Viên Kinh Doanh Lĩnh Vực Thức Ăn Thủy Sản</a>
                            <br>
                            <a href="">Công Ty TNHH Công Nghệ Cao 3D Việt Nam </a>
                            <p><i class="fas fa-dollar-sign"></i> 15 triệu - 20 triệu
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-map-marker-alt"></i> Hồ
                                Chí Minh </p>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            <div class="box box_title--bottom">
                <a href=""><i class="fas fa-plus">&nbsp; Xem thêm</i></a>
            </div>


            <!-- DOANH NGHIỆP TUYỂN DỤNG -->
            <h1 class="font-weight-light text-center mt-5 font-weight-bold" style="font-size: 26px;">DOANH NGHIỆP TUYỂN DỤNG
            </h1>
            <p class="text-center">Hàng nghìn doanh nghiệp uy tín đang tìm kiếm ứng viên trên Timvieclam.xyz</p>

            <!-- <hr class="mt-2 mb-5"> -->

            <div class="row row-business--top">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img src="https://static.mservice.io/img/logo-momo.png" class="my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://brasol.vn/public/uploads/1521190718-brasol.vn-he-thong-nhan-dien-thuong-hieu-bitis-bestplus-vn-logo-bitis.jpg"
                            class="my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://upload.wikimedia.org/wikipedia/vi/thumb/e/e8/Logo_Viettel.svg/1200px-Logo_Viettel.svg.png"
                            class="my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img src="https://www.freepnglogos.com/uploads/samsung-logo-text-png-1.png"
                            class=" my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png"
                            class=" my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://brasol.vn/public/ckeditor/uploads/thiet-ke-logo-tin-tuc/logo-tiki-png.png"
                            class="my-3"></a>
                </div>
            </div>



            <div class="row row-business--between">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png"
                            class="my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://brasol.vn/public/uploads/1521190718-brasol.vn-he-thong-nhan-dien-thuong-hieu-bitis-bestplus-vn-logo-bitis.jpg"
                            class="my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://upload.wikimedia.org/wikipedia/vi/thumb/e/e8/Logo_Viettel.svg/1200px-Logo_Viettel.svg.png"
                            class="my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img src="https://www.freepnglogos.com/uploads/samsung-logo-text-png-1.png"
                            class=" my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://upload.wikimedia.org/wikipedia/vi/thumb/8/80/FPT_New_Logo.png/1200px-FPT_New_Logo.png"
                            class=" my-3"></a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#lightbox"><img
                            src="https://brasol.vn/public/ckeditor/uploads/thiet-ke-logo-tin-tuc/logo-tiki-png.png"
                            class="my-3"></a>
                </div>
            </div>

            <h1 class="font-weight-light text-center mt-5 font-weight-bold" style="font-size: 26px;">Our Latest Blog</h1>
            <hr class="mt-2 mb-1">
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
                                                        alt="" class="card__image-avt">
                                                    <a href="#" class="btn btn--primary">Huy Nguyễn</a>
                                                    <a href="#" class="btn btn--secondary">Đọc Tiếp <i class="fa fa-angle-double-right"></i></a>
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
                                                        alt="" class="card__image-avt">
                                                    <a href="#" class="btn btn--primary">Huy Nguyễn</a>
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
                                                        alt="" class="card__image-avt">
                                                    <a href="#" class="btn btn--primary">Huy Nguyễn</a>
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
            <div class="box box_title--bottom">
                <a href=""><i class="fas fa-plus">&nbsp; Xem thêm</i></a>
            </div>
            <br> <br> <br> <br>
        </div>
    </div>

@endsection
