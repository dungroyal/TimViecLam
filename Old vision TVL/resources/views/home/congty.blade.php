@extends('home.main')
@section('content')
    <section class="listing-hero set-bg" data-setbg="{{ asset('home') }}/img/listing/details/listing-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="listing__hero__option">
                        <div class="listing__hero__icon">
                            <img src="{{ asset('images') }}/{{$info_cty[0]->logoCty}}" alt="" width="150px">
                        </div>
                        <div class="listing__hero__text">
                            <h2>{{$info_cty[0]->tenCty}}</h2>
                            <p><i class="fa fa-users" aria-hidden="true"></i> <strong>Quy mô:</strong> {{$info_cty[0]->quyMo}}</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Địa chỉ:</strong> {{$info_cty[0]->diaChi}}</p>
                            <p><i class="fa fa-link" aria-hidden="true"></i> <strong>Webstie:</strong> <a href="{{$info_cty[0]->website}}">{{$info_cty[0]->website}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing__hero__btns">
                        <div class="listing__hero__btns__sl">
                                <?php $count=0;?>
                            @foreach ($list_job as $item)
                                <?php $count+=1;?>
                            @endforeach
                            <h4><?=$count;?></h4>
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
                            <p>{{$info_cty[0]->soLuocCty}}</p>
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
                                @foreach ($list_job as $item)
                                    <div class="list-items job-item">
                                        <div class="list-items__img">
                                            <img src="{{ asset('images') }}/{{ $item->logoCty }}" alt="Avatar">
                                        </div>
                                        <div class="list-items-content">
                                            <div class="list-items-content__title text_ellipsis"><a href="/job/{{{ $item->id }}}" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> {{ $item->tenCongViec }}</a></div>
                                            <div class="list-items-content__cty"><a href="/cong-ty/{{{ $item->idNTD }}}"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">{{ $item->tenCty }}</a></div>
                                            <div class="list-items-content-subinfo">
                                                <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> {{ $item->mucLuong }} triệu</div>
                                                <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $item->deadline }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                    <li><span class="icon_pin_alt"></span> {{$info_cty[0]->diaChi}}, {{$info_cty[0]->tinh}}</li>
                                    <li><span class="icon_phone"></span> {{$info_cty[0]->soDienThoai}}</li>
                                    <li><span class="icon_mail_alt"></span> {{$info_cty[0]->email}}</li>
                                    <li><span class="icon_globe-2"></span> {{$info_cty[0]->website}} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
