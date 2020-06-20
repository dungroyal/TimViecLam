@extends('home.main')
@section('content')
    <section class="listing-hero set-bg" data-setbg="{{ asset('home') }}/img/listing/details/listing-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing__hero__option">
                        <div class="listing__hero__icon">
                            <img src="{{ asset('images') }}/L123123ogo.jpg" alt="" width="150px">
                        </div>
                        <div class="listing__hero__text">
                            <h2>Liên Hiệp HTX Thương Mại TP. Hồ Chí Minh</h2>
                            <p><i class="fa fa-users" aria-hidden="true"></i> <strong>Quy mô:</strong> 1200 nhân viên</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Địa chỉ:</strong> 199 - 205 Nguyễn Thái Học, P.Phạm Ngũ Lão, Quận 1, TP. HCM</p>
                            <p><i class="fa fa-link" aria-hidden="true"></i> <strong>Webstie:</strong> <a href="https://mant.vn/">https://mant.vn/</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing__hero__btns">
                        <div class="listing__hero__btns__sl">
                            <h4>8</h4>
                            <p>Công việc</p>
                        </div>
                        {{-- <div class="listing__hero__btns__save"><i class="fa fa-mail-reply"></i> Lưu công việc</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Listing Section End -->

    <!-- Listing Details Section Begin -->
    <section class="listing-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing__details__text">
                        <div class="listing__details__about">
                            <h4>Giới thiệu về công ty</h4>
                            <p>* Tầm nhìn: Phấn đấu duy trì vị trí Nhà bán lẻ hàng đầu Việt Nam trên cơ sở phát triển nhanh và bền vững chuỗi siêu thị Co.opmart, nỗ lực đa dạng hóa các mô hình bán lẻ văn minh, hiện đại. Đồng thời không ngừng tăng cường mối quan hệ gắn kết chặt chẽ với người tiêu dùng và cộng đồng.
                                * Sứ mệnh:
                                - Đáp ứng nhu cầu tiêu dùng hàng ngày của khách hàng mục tiêu.
                                - Luôn đem lại cho khách hàng sự tiện lợi, an toàn và các giá trị tăng thêm.
                                - Góp phần nâng cao đời sống người dân và phát triển ngành bán lẻ Việt Nam.</p>
                        </div>
                        <div class="listing__details__gallery">
                            <h4>Hình ảnh</h4>
                            <div class="listing__details__gallery__pic">
                                <div class="listing__details__gallery__item">
                                    <img class="listing__details__gallery__item__large" src="img/listing/details/listing-details-1.jpg" alt="">
                                    {{-- <span><i class="fa fa-camera"></i> 170 Image</span> --}}
                                </div>
                                <div class="listing__details__gallery__slider owl-carousel">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-1.jpg" alt="">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-2.jpg" alt="">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-3.jpg" alt="">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="listing__details__amenities">
                            <h4>Danh sách tuyển dụng</h4>
                            <div class="row">
                                <div class="col-lg-12">
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
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing__sidebar">
                        <div class="listing__sidebar__contact">
                            <div class="listing__sidebar__contact__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24168.833995532765!2d-74.79633710628465!3d40.78172222265886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c384de7a5300b9%3A0x8afc61979217d49d!2sLong%20Valley%2C%20NJ%2007853%2C%20USA!5e0!3m2!1sen!2sbd!4v1586852528126!5m2!1sen!2sbd"
                                    height="200" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <img src="img/listing/details/map-icon.png" alt="">
                            </div>
                            <div class="listing__sidebar__contact__text">
                                <h4>Liên hệ</h4>
                                <ul>
                                    <li><span class="icon_pin_alt"></span> 199 - 205 Nguyễn Thái Học, P.Phạm Ngũ Lão, Quận 1, TP. HCM</li>
                                    <li><span class="icon_phone"></span> 0398 022 720</li>
                                    <li><span class="icon_mail_alt"></span> Info.saigon@gmail.com</li>
                                    <li><span class="icon_globe-2"></span> https://mant.vn/ </li>
                                </ul>
                                {{-- <div class="listing__sidebar__contact__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="listing__sidebar__working__hours">
                            <h4>Working Hours</h4>
                            <ul>
                                <li>Monday <span>09:00 AM - 20:00 PM</span></li>
                                <li>Tuesday <span>09:00 AM - 20:00 PM</span></li>
                                <li>Wednesday <span>09:00 AM - 20:00 PM</span></li>
                                <li>Thursday <span>09:00 AM - 20:00 PM</span></li>
                                <li>Friday <span class="opening">Opening</span></li>
                                <li>Saturday <span>09:00 AM - 20:00 PM</span></li>
                                <li>Saturday <span class="closed">Closed</span></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
