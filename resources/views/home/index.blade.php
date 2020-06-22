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
                        <div class="hero__search__form">
                            <form action="#" method="POST">
                                <input type="text" placeholder="Tìm kiếm...">
                                <div class="select__option">
                                    <select>
                                        <option value="32">Ngành nghề</option>
                                        @foreach ($Nghanhnghe as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select>
                                        <option value="">Chọn nơi làm việc</option>
                                        <option value="1" selected="selected">Hồ Chí Minh</option>
                                        <option value="2">Hà Nội</option>
                                        <option value="3">An Giang</option>
                                        <option value="4">Bạc Liêu</option>
                                        <option value="5">Bà Rịa-Vũng Tàu</option>
                                        <option value="6">Bắc Cạn</option>
                                        <option value="7">Bắc Giang</option>
                                        <option value="8">Bắc Ninh</option>
                                        <option value="9">Bến Tre</option>
                                        <option value="10">Bình Dương</option>
                                        <option value="11">Bình Định</option>
                                        <option value="12">Bình Phước</option>
                                        <option value="13">Bình Thuận</option>
                                        <option value="14">Cao Bằng</option>
                                        <option value="15">Cà Mau</option>
                                        <option value="16">Cần Thơ</option>
                                        <option value="17">Đà Nẵng</option>
                                        <option value="18">Đắk Lắk</option>
                                        <option value="19">Đắk Nông</option>
                                        <option value="20">Điện Biên</option>
                                        <option value="21">Đồng Nai</option>
                                        <option value="22">Đồng Tháp</option>
                                        <option value="23">Gia Lai</option>
                                        <option value="24">Hà Giang</option>
                                        <option value="25">Hà Nam</option>
                                        <option value="27">Hà Tĩnh</option>
                                        <option value="28">Hải Dương</option>
                                        <option value="29">Hải Phòng</option>
                                        <option value="30">Hậu Giang</option>
                                        <option value="31">Hòa Bình</option>
                                        <option value="32">Hưng Yên</option>
                                        <option value="33">Khánh Hòa</option>
                                        <option value="34">Kiên Giang</option>
                                        <option value="35">Kon Tum</option>
                                        <option value="36">Lai Châu</option>
                                        <option value="37">Lạng Sơn</option>
                                        <option value="38">Lào Cai</option>
                                        <option value="39">Lâm Đồng</option>
                                        <option value="40">Long An</option>
                                        <option value="41">Nam Định</option>
                                        <option value="42">Nghệ An</option>
                                        <option value="43">Ninh Bình</option>
                                        <option value="44">Ninh Thuận</option>
                                        <option value="45">Phú Thọ</option>
                                        <option value="46">Phú Yên</option>
                                        <option value="47">Quảng Bình</option>
                                        <option value="48">Quảng Nam</option>
                                        <option value="49">Quảng Ngãi</option>
                                        <option value="50">Quảng Ninh</option>
                                        <option value="51">Quảng Trị</option>
                                        <option value="52">Sóc Trăng</option>
                                        <option value="53">Sơn La</option>
                                        <option value="54">Tây Ninh</option>
                                        <option value="55">Thái Bình</option>
                                        <option value="56">Thái Nguyên</option>
                                        <option value="57">Thanh Hóa</option>
                                        <option value="58">Thừa Thiên-Huế</option>
                                        <option value="59">Tiền Giang</option>
                                        <option value="60">Trà Vinh</option>
                                        <option value="61">Tuyên Quang</option>
                                        <option value="62">Vĩnh Long</option>
                                        <option value="63">Vĩnh Phúc</option>
                                        <option value="64">Yên Bái</option>
                                        <option value="65">Toàn quốc</option>
                                        <option value="66">Nước ngoài</option>
                                    </select>
                                </div>
                                <button type="submit">Tìm kiếm ngay</button>
                            </form>
                        </div>
                        <ul class="hero__categories__tags">
                            <li><a href="#"><img src="{{ asset('home') }}/img/hero/cat-1.png" alt=""> Restaurent</a></li>
                            <li><a href="#"><img src="{{ asset('home') }}/img/hero/cat-2.png" alt=""> Food & Drink</a></li>
                            <li><a href="#"><img src="{{ asset('home') }}/img/hero/cat-3.png" alt=""> Shopping</a></li>
                            <li><a href="#"><img src="{{ asset('home') }}/img/hero/cat-4.png" alt=""> Beauty</a></li>
                            <li><a href="#"><img src="{{ asset('home') }}/img/hero/cat-5.png" alt=""> Hotels</a></li>
                            <li><a href="#"><img src="{{ asset('home') }}/img/hero/cat-6.png" alt=""> All Categories</a></li>
                        </ul>
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
