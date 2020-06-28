@extends('home.main')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="{{ asset('home') }}/img/hero/hero-bg.jpg">
        <div class="container search-bar-home">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>Tìm việc khó? Đã có TimViecLam.xyz</h2>
                            <p>1.118.940.376 Công việc đang chờ đón bạn!</p>
                        </div>
                        <ul class="hero__categories__tags">
                            <li><a href="#" id="active-search"><i class="fa fa-briefcase" aria-hidden="true"></i> Tìm việc làm</a></li>
                            <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Tìm ứng viên</a></li>
                            <li><a href="#"><i class="fa fa-building-o" aria-hidden="true"></i> Tìm công ty</a></li>
                            </ul>
                        <div class="hero__search__form">
                            <form action="/search_CongViec" method="POST">
                                @csrf
                                <input type="text" name="keyword" placeholder="Tìm kiếm việc làm..." required>
                                <div class="select__option">
                                    <select name="nhanhNghe">
                                        <option value="">Chọn Ngành nghề</option>
                                        @foreach ($Nghanhnghe as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select  name="noiLamViec">
                                        <option value="">Chọn nơi làm việc</option>
                                        @foreach ($tinhThanhPho as $item)
                                            <option value="{{ $item->matp }}">{{ $item->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <button type="submit">Tìm kiếm ngay</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Các ngành cần nguồn nhân lực cao</h2>
                        <p>Giúp cho bạn dễ dàng tìm kiếm công việc phù hợp hơn!</p>
                    </div>
                    <div class="categories__item__list">
                        <div class="categories__item">
                            <img src="{{ asset('images') }}/official_staff.png" alt="">
                            <h5>Nhân viên chính thức</h5>
                            <span>78 công việc</span>
                        </div>
                        <div class="categories__item">
                            <img src="{{ asset('images') }}/thoi-vu.png" alt="">
                            <h5>Nhân viên thời vụ</h5>
                            <span>32 công việc</span>
                        </div>
                        <div class="categories__item">
                            <img src="{{ asset('images') }}/part-time-employee.png" alt="">
                            <h5>Bán thời gian</h5>
                            <span>56 công việc</span>
                        </div>
                        <div class="categories__item">
                            <img src="{{ asset('images') }}/work-extra-overtime.png" alt="">
                            <h5>Làm thêm ngoài giờ</h5>
                            <span>58 công việc</span>
                        </div>
                        <div class="categories__item">
                            <img src="{{ asset('images') }}/thuc-tap-sinh.png" alt="">
                            <h5>Thực tập và dự án</h5>
                            <span>62 công việc</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Most Search Section Begin -->
    <section class="most-search spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Việc làm mới</h2>
                        <p>Nhanh chân ứng tuyển vào vị trí công việc phù hợp với mình nào! go go go ....</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12  show-job__index" id="style-scrollbar">
                    <div class="listing__list">

                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/Thiết-kế-logo-công-ty-xnk.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/thiet-ke-logo-ha-noi-nhat-son-1.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/logo (1).png" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/cong-ty-xay-dung-an-thinh_1317354554.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/L123123ogo.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/01-thiet-ke-logo-song-hong-construction.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/logo-cong-ty-phan-mem.png" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/9269162-logo-cong-ty-xay-dung-an-sinh.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/mau-thiet-ke-logo-cong-ty-xay-dung-anh-duc_logo_1318318276.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/thiet-ke-logo-cong-ty-thang-long-1.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/Logo-Japan_Airlines-1110x740.png" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/logo-gia-thinh-02.png" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/01-thiet-ke-logo-song-hong-construction.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/logo-cong-ty-phan-mem.png" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/9269162-logo-cong-ty-xay-dung-an-sinh.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-items job-item">
                            <div class="list-items__img">
                                <img src="{{ asset('images') }}/mau-thiet-ke-logo-cong-ty-xay-dung-anh-duc_logo_1318318276.jpg" alt="Avatar">
                            </div>
                            <div class="list-items-content">
                                <div class="list-items-content__title text_ellipsis"><a href="#" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)</a></div>
                                <div class="list-items-content__cty"><a href="#"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">Công Ty Cổ Phần Đầu Tư Hai Lúa</a></div>
                                <div class="list-items-content-subinfo">
                                    <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> 5 Triệu - 7 triệu</div>
                                    <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> 30/06/2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Most Search Section End -->

    <!-- Feature Location Section Begin -->
    <section class="feature-location spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Công việc gần nhà</h2>
                        <p>Công việc ở gần sẻ giúp bạn dễ dàng trong việc di chuyển hơn.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#" class="feature__location__item large-item set-bg"
                        data-setbg="{{ asset('home') }}/img/feature-location/fl-1.jpg">
                        <div class="feature__location__item__text">
                            <h5>TP. Hồ Chí Minh</h5>
                            <ul>
                                <li>2045 Job</li>
                                <li>3648 Users</li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="feature__location__item set-bg" data-setbg="{{ asset('home') }}/img/feature-location/fl-4.jpg">
                        <div class="feature__location__item__text">
                            <h5>Thủ đô Hà Nội</h5>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="{{ asset('home') }}/img/feature-location/fl-2.jpg">
                                <div class="feature__location__item__text">
                                    <h5>TP. Đà Nẵng</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="{{ asset('home') }}/img/feature-location/fl-3.jpg">
                                <div class="feature__location__item__text">
                                    <h5>XEM THÊM</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Location Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="{{ asset('home') }}/img/testimonial/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Được tin cậy bởi hơn 5000+ doanh nghiệp</h2>
                        <p>Họ nói gì về "TimViecLam.xyz"</p>
                    </div>
                    <div class="testimonial__slider owl-carousel">
                        <div class="testimonial__item" data-hash="review-1">
                            <p>" We worked with Consultant. Our representative was very knowledgeable and helpful.
                                Consultant made a number of suggestions to help improve our systems. Consultant
                                explained how things work and why it would help."</p>
                            <div class="testimonial__item__author">
                                <a href="#review-3"><img src="{{ asset('home') }}/img/testimonial/author-3.png" alt=""></a>
                                <a href="#review-1" class="active"><img src="{{ asset('home') }}/img/testimonial/author-1.png" alt=""></a>
                                <a href="#review-2"><img src="{{ asset('home') }}/img/testimonial/author-2.png" alt=""></a>
                            </div>
                            <div class="testimonial__item__author__text">
                                <h5>John Smith -</h5>
                                <div class="testimonial__item__author__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <span>CEO Colorlib</span>
                        </div>
                        <div class="testimonial__item" data-hash="review-2">
                            <p>" We worked with Consultant. Our representative was very knowledgeable and helpful.
                                Consultant made a number of suggestions to help improve our systems. Consultant
                                explained how things work and why it would help."</p>
                            <div class="testimonial__item__author">
                                <a href="#review-1"><img src="{{ asset('home') }}/img/testimonial/author-1.png" alt=""></a>
                                <a href="#review-2" class="active"><img src="{{ asset('home') }}/img/testimonial/author-2.png" alt=""></a>
                                <a href="#review-3"><img src="{{ asset('home') }}/img/testimonial/author-3.png" alt=""></a>
                            </div>
                            <div class="testimonial__item__author__text">
                                <h5>John Smith -</h5>
                                <div class="testimonial__item__author__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <span>CEO Colorlib</span>
                        </div>
                        <div class="testimonial__item" data-hash="review-3">
                            <p>" We worked with Consultant. Our representative was very knowledgeable and helpful.
                                Consultant made a number of suggestions to help improve our systems. Consultant
                                explained how things work and why it would help."</p>
                            <div class="testimonial__item__author">
                                <a href="#review-2"><img src="{{ asset('home') }}/img/testimonial/author-2.png" alt=""></a>
                                <a href="#review-3" class="active"><img src="{{ asset('home') }}/img/testimonial/author-3.png" alt=""></a>
                                <a href="#review-1"><img src="{{ asset('home') }}/img/testimonial/author-1.png" alt=""></a>
                            </div>
                            <div class="testimonial__item__author__text">
                                <h5>John Smith -</h5>
                                <div class="testimonial__item__author__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <span>CEO Colorlib</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section class="news-post spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Góc nghề nghiệp</h2>
                        <p>Nhữ tin tức mới về công việc hiện hay.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('home') }}/img/blog/blog-1.jpg">
                            <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="blog__item__text">
                            <ul class="blog__item__tags">
                                <li><i class="fa fa-tags"></i>Việc làm</li>
                                <li>Videos</li>
                            </ul>
                            <h5><a href="#">Nhân sự mùa Covid-19: Ngành sản xuất và CNTT có nhu cầu tuyển dụng cao nhất</a></h5>
                            <ul class="blog__item__widget">
                                <li><i class="fa fa-clock-o"></i> 1 tháng 6, 2020</li>
                                <li><i class="fa fa-user"></i> DungRoyal</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('home') }}/img/blog/blog-1.jpg">
                            <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="blog__item__text">
                            <ul class="blog__item__tags">
                                <li><i class="fa fa-tags"></i>Việc làm</li>
                                <li>Videos</li>
                            </ul>
                            <h5><a href="#">Nhân sự mùa Covid-19: Ngành sản xuất và CNTT có nhu cầu tuyển dụng cao nhất</a></h5>
                            <ul class="blog__item__widget">
                                <li><i class="fa fa-clock-o"></i> 1 tháng 6, 2020</li>
                                <li><i class="fa fa-user"></i> DungRoyal</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('home') }}/img/blog/blog-1.jpg">
                            <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="blog__item__text">
                            <ul class="blog__item__tags">
                                <li><i class="fa fa-tags"></i>Việc làm</li>
                                <li>Videos</li>
                            </ul>
                            <h5><a href="#">Nhân sự mùa Covid-19: Ngành sản xuất và CNTT có nhu cầu tuyển dụng cao nhất</a></h5>
                            <ul class="blog__item__widget">
                                <li><i class="fa fa-clock-o"></i> 1 tháng 6, 2020</li>
                                <li><i class="fa fa-user"></i> DungRoyal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </d>
    </section>
    <!-- Blog Section End -->

@endsection
