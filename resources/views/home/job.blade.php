<!DOCTYPE html>
<html lang="en">
@include('home.element.head')

<body class="ov-hid">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('home.element.header')
    @include('home.element.sitebar')

    <section class="listing nice-scroll">
        <div class="listing__text__top">
            <div class="listing__text__top__left">
                <h5>Danh Sách Việc Làm</h5>
                <span>125 Công việc được tìm thấy</span>
            </div>
            <div class="listing__text__top__right">Nearby <i class="fa fa-sort-amount-asc"></i></div>
        </div>


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
        </div>
    </section>
    @include('home.element.script')
</body>
</html>