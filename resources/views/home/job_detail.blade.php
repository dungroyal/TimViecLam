@extends('home.main')
@section('content')
    <section class="listing-hero set-bg" data-setbg="{{ asset('home') }}/img/listing/details/listing-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing__hero__option">
                        <div class="listing__hero__icon">
                            <img src="{{ asset('images') }}/{{ $hoSoCty->logoCty }}" alt="" width="150px">
                        </div>
                        <div class="listing__hero__text">
                            <h2>{{ $jobById->tenCongViec }}</h2>
                            <p><i class="fa fa-users" aria-hidden="true"></i> <strong>Công ty:</strong> {{ $ctyById->tenCty }}</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Địa điểm làm việc:</strong> {{ $jobById->diaDiem }}</p>
                            <p><i class="fa fa-link" aria-hidden="true"></i> <strong>Webstie:</strong> <a href="//www.{{ $hoSoCty->website }}"> {{ $hoSoCty->website }}</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="btn-group-lg">
                        @if (session()->has('ungvien'))
                            <a href="/job/save/{{{$ctyById->id}}}" class="btn btn-info"><i class="fa fa-bookmark" aria-hidden="true"></i> Lưu việc làm </a>
                            <a href="/ung-vien/ung-tuyen/{{{$ctyById->id}}}" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i> Ứng tuyển </a>
                        @elseif(session()->has('nhatuyendung'))
                        @else
                            <a href="/dang-nhap" class="btn btn-info"><i class="fa fa-bookmark" aria-hidden="true"></i> Lưu việc làm </a>
                            <a href="/dang-nhap" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i> Ứng tuyển </a>
                        @endif
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
                            <h4>Thông tin tuyển dụng nhanh</h4>
                            <p>Kinh nghiệm: <strong>{{ $jobById->kinhNghiem }}</strong></p>
                            <p>Yêu cầu bằng cấp:<strong> {{ $jobById->trinhDo }}</strong></p>
                            <p>Số lượng cần tuyển:<strong>{{ $jobById->soluong }}</strong></p>
                            {{-- <p>Hình thức làm việc: <strong>{{ $jobById->soluong }}</strong></p> --}}
                            {{-- <p>Chức vụ:<strong>{{ $jobById->soluong }}</strong></p> --}}
                            <p>Yêu cầu giới tính: <strong>{{ $jobById->gioiTinh }}</strong></p>
                            <p>Hạn nộp hồ sơ: <strong>{{ $jobById->deadline }}</strong></p>
                        </div>
                        <div class="listing__details__about">
                            <h4>Yêu cầu công việc</h4>
                            <p> {{ $jobById->yeuCau }}</p>
                        </div>
                        <div class="listing__details__about">
                            <h4>Mô tả công việc</h4>
                            <p> {{ $jobById->moTa }}</p>
                        </div>
                        <div class="listing__details__gallery">
                            <h4>Hình ảnh công ty</h4>
                            <div class="listing__details__gallery__pic">
                                <div class="listing__details__gallery__slider owl-carousel">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-1.jpg" alt="">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-2.jpg" alt="">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-3.jpg" alt="">
                                    <img data-imgbigurl="{{ asset('home') }}/img/listing/details/listing-details-1.jpg" src="{{ asset('home') }}/img/listing/details/thumb-4.jpg" alt="">
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
                                    <li><span class="icon_pin_alt"></span> {{ $hoSoCty->diaChi }}</li>
                                    <li><span class="icon_phone"></span> {{ $hoSoCty->phoneNguoiLH }}</li>
                                    <li><span class="icon_mail_alt"></span> {{ $hoSoCty->emailNLH }}</li>
                                    <li><span class="icon_globe-2"></span> {{ $hoSoCty->website }}</li>
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
