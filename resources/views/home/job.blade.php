<!DOCTYPE html>
<html lang="en">
    @include('home.element.head')
<body class="ov-hid">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('home') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/">Trang chủ</a></li>
                                <li><a href="/job">Tuyển dụng</a></li>
                                <li><a href="/blog">Góc nghề nghiệp</a></li>
                                <li><a href="/Contact">Liên hệ</a></li>
                                <li><a href="/about">Giới thiệu</a></li>
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a href="#" class="primary-btn"><i class="fa fa-user-circle" aria-hidden="true"></i>Tài khoản</a>
                            <a href="#" class="primary-btn" id="login-btn-employer">Nhà tuyển dụng</a>
                            <a href="#" class="primary-btn" id="login-btn-job_seeker">Ứng viên</a>
                            
                            <!-- <a href="#" class="login-btn"><i class="fa fa-user"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <div class="filter nice-scroll">
        <div class="filter__title">
            <h5><i class="fa fa-filter"></i> Filter</h5>
        </div>
        <div class="filter__search">
            <input type="text">
        </div>
        <div class="filter__select">
            <select>
                <option value="">All Categories</option>
            </select>
        </div>
        <div class="filter__location">
            <input type="text" placeholder="Location">
            <i class="fa fa-map-marker"></i>
        </div>
        <div class="filter__radius">
            <p>Radius:</p>
            <div class="price-range-wrap">
                <div class="price-range-radius ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                </div>
                <div class="range-slider">
                    <div class="price-input">
                        <input type="text" id="radius">
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__price">
            <p>Price:</p>
            <div class="price-range-wrap">
                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                </div>
                <div class="range-slider">
                    <div class="price-input">
                        <input type="text" id="minamount">
                        <input type="text" id="maxamount" value="$80">
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__tags">
            <h6>Tag</h6>
            <label for="coupon">
                Coupons
                <input type="checkbox" id="coupon">
                <span class="checkmark"></span>
            </label>
            <label for="sa">
                Smoking Allowed
                <input type="checkbox" id="sa">
                <span class="checkmark"></span>
            </label>
            <label for="camping">
                Camping
                <input type="checkbox" id="camping">
                <span class="checkmark"></span>
            </label>
            <label for="hot-spots">
                Hot Spots
                <input type="checkbox" id="hot-spots">
                <span class="checkmark"></span>
            </label>
            <label for="internet">
                Internet
                <input type="checkbox" id="internet">
                <span class="checkmark"></span>
            </label>
            <label for="tr">
                Top Rated
                <input type="checkbox" id="tr">
                <span class="checkmark"></span>
            </label>
            <label for="hd">
                Hot Deal
                <input type="checkbox" id="hd">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="filter__btns">
            <button type="submit">Filter Results</button>
            <button type="submit" class="filter__reset">Reset All</button>
        </div>
    </div>
    <section class="listing nice-scroll">
        <div class="listing__text__top">
            <div class="listing__text__top__left">
                <h5>Danh Sách Việc Làm</h5>
                <span>18 Công việc được tìm thấy</span>
            </div>
            <div class="listing__text__top__right">Nearby <i class="fa fa-sort-amount-asc"></i></div>
        </div>
        <div class="listing__list">
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="{{ asset('home') }}/img/listing/list-1.jpg">
                    <img src="{{ asset('home') }}/img/listing/list_icon-1.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Chinese Sausage Restaurant</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 236 Littleton St. New Philadelphia, Ohio, United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="{{ asset('home') }}/img/listing/list_small_icon-1.png" alt="">
                            <span>Restaurant</span>
                        </div>
                        <div class="listing__item__text__info__right">Chi Tiết</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="{{ asset('home') }}/img/listing/list-2.jpg">
                    <img src="{{ asset('home') }}/img/listing/list_icon-2.png" alt="">
                    <div class="listing__item__pic__tag top_rate">Top Rate</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Shrimp floured and fried</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 1012 Vesper Dr. Columbus, Georgia(GA), United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="{{ asset('home') }}/img/listing/list_small_icon-2.png" alt="">
                            <span>Food & Drink</span>
                        </div>
                        <div class="listing__item__text__info__right">Chi Tiết</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="{{ asset('home') }}/img/listing/list-4.jpg">
                    <img src="{{ asset('home') }}/img/listing/list_icon-4.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Crab fried with tamarind</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 14320 Keenes Mill Rd. Cottondale, Alabama(AL), United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="{{ asset('home') }}/img/listing/list_small_icon-3.png" alt="">
                            <span>Hotel</span>
                        </div>
                        <div class="listing__item__text__info__right">Chi Tiết</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="{{ asset('home') }}/img/listing/list-3.jpg">
                    <img src="{{ asset('home') }}/img/listing/list_icon-3.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Sweet and sour pork ribs</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 251 Wiley St. Forks, Washington(WA), United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="{{ asset('home') }}/img/listing/list_small_icon-1.png" alt="">
                            <span>Restaurant</span>
                        </div>
                        <div class="listing__item__text__info__right">Chi Tiết</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="{{ asset('home') }}/img/listing/list-5.jpg">
                    <img src="{{ asset('home') }}/img/listing/list_icon-5.png" alt="">
                    <div class="listing__item__pic__tag hot_deal">Hot Deal</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Tortoise grilled on salt</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 236 Littleton St. New Philadelphia, Ohio, United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="{{ asset('home') }}/img/listing/list_small_icon-4.png" alt="">
                            <span>Shopping</span>
                        </div>
                        <div class="listing__item__text__info__right">Chi Tiết</div>
                    </div>
                </div>
            </div>
            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="{{ asset('home') }}/img/listing/list-6.jpg">
                    <img src="{{ asset('home') }}/img/listing/list_icon-6.png" alt="">
                    <div class="listing__item__pic__tag">Popular</div>
                    <div class="listing__item__pic__btns">
                        <a href="#"><span class="icon_zoom-in_alt"></span></a>
                        <a href="#"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5>Fish cooked with fishsauce</h5>
                        <div class="listing__item__text__rating">
                            <div class="listing__item__rating__star">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <h6>$40 - $70</h6>
                        </div>
                        <ul>
                            <li><span class="icon_pin_alt"></span> 2604 E Drachman St. Tucson, Arizona, United States
                            </li>
                            <li><span class="icon_phone"></span> (+12) 345-678-910</li>
                        </ul>
                    </div>
                    <div class="listing__item__text__info">
                        <div class="listing__item__text__info__left">
                            <img src="{{ asset('home') }}/img/listing/list_small_icon-3.png" alt="">
                            <span>Hotel</span>
                        </div>
                        <div class="listing__item__text__info__right">Chi Tiết</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home.element.script')
</body>

</html>