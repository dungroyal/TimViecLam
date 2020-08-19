@extends('home.main')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-area set-bg" data-setbg="{{ asset('home') }}/img/breadcrumb/breadcrumb-normal.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giới thiệu về "TimViecLam.xyz"</h2>
                        <div class="breadcrumb__option">
                            <a href="/"><i class="fa fa-home"></i> Trang chủ</a>
                            <span>Giới thiệu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="about__title">
                        <h2>Chào mừng bạn đến<br /> Danh sách chỉ đạo</h2>
                        <a href="/contact" class="primary-btn">Liên hệ với chúng tôi</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="about__text">
                        <h5>Metasurfaces thường được thiết kế bằng cách đặt các bộ phân tán trong các lưới định kỳ hoặc giả định kỳ.</h5>
                        <p>
Bạn đã hoàn thành việc xây dựng trang web của riêng bạn. Bạn đã giới thiệu công ty của bạn và trình bày các sản phẩm và dịch vụ của bạn. Bạn đã thêm các đề xuất và khuyến mãi để thu hút sự chú ý của đối tượng mục tiêu của bạn. Bạn nghĩ rằng bạn đang làm mọi thứ ngay lập tức, nhưng tất cả các chương trình khuyến mãi của bạn đã thất bại trong việc tạo ra sự tăng trưởng trong kinh doanh internet mới của bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Video Begin -->
    <div class="about-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__video set-bg" data-setbg="{{ asset('home') }}/img/about-video.jpg">
                        <a href="https://www.youtube.com/watch?v=8EJ3zbKTWQ8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Video End -->

    <!-- Work Section Begin -->
    <section class="work work-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Làm thế nào nó hoạt động</h2>
                        <p>EDT trao quyền cho khách du lịch đang trả lại chuyến đi của họ theo cách lớn và nhỏ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">01.</div>
                        <img src="{{ asset('home') }}/img/work/work-1.png" alt="">
                        <h5>Địa điểm & danh mục</h5>
                        <p>Các địa điểm và danh mục được sắp xếp với nhau theo trình tự nhất định đễ có thể hoạt động dễ dàng hơn.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">02.</div>
                        <img src="{{ asset('home') }}/img/work/work-2.png" alt="">
                        <h5>Khám phá</h5>
                        <p>Cùng nhau khám phá những điều mới mẻ hơn trong cuộc sống và công việc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">03.</div>
                        <img src="{{ asset('home') }}/img/work/work-3.png" alt="">
                        <h5>Đăng ký cuộc hẹn</h5>
                        <p>Hãy liên hệ với chúng tôi ngay bạn nhé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="{{ asset('home') }}/img/testimonial/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>
Được tin cậy bởi hơn 5000 người dùng</h2>
                        <p>
Mọi người nói gì về chúng tôi</p>
                    </div>
                    <div class="testimonial__slider owl-carousel">
                        <div class="testimonial__item" data-hash="review-1">
                            <p>" Chúng tôi đã làm việc với Tư vấn. Đại diện của chúng tôi rất hiểu biết và hữu ích.
                                Tư vấn đã đưa ra một số gợi ý để giúp cải thiện hệ thống của chúng tôi. Tư vấn
                                giải thích cách mọi thứ hoạt động và tại sao nó sẽ giúp."</p>
                            
                            <div class="testimonial__item__author__text">
                                <h5>Đoàn Quốc Dũng -</h5>
                                
                            </div>
                            <span>CEO Lê Nhật Hào</span>
                        </div>
                        <div class="testimonial__item" data-hash="review-2">
                            <p>" Chúng tôi đã làm việc với Tư vấn. Đại diện của chúng tôi rất hiểu biết và hữu ích.
                                Tư vấn đã đưa ra một số gợi ý để giúp cải thiện hệ thống của chúng tôi. Tư vấn
                                giải thích cách mọi thứ hoạt động và tại sao nó sẽ giúp."</p>
                            
                            <div class="testimonial__item__author__text">
                                <h5>Đoàn Quốc Dũng -</h5>
                                <div class="testimonial__item__author__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <span>CEO Lê Nhật Hào</span>
                        </div>
                        <div class="testimonial__item" data-hash="review-3">
                            <p>" Chúng tôi đã làm việc với Tư vấn. Đại diện của chúng tôi rất hiểu biết và hữu ích.
                                Tư vấn đã đưa ra một số gợi ý để giúp cải thiện hệ thống của chúng tôi. Tư vấn
                                giải thích cách mọi thứ hoạt động và tại sao nó sẽ giúp."</p>
                            
                            <div class="testimonial__item__author__text">
                                <h5>Đoàn Quốc Dũng -</h5>
                                <div class="testimonial__item__author__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <span>CEO Lê Nhật Hào</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Specialist Team</h2>
                        <p>Travelocity empowers travelers who are giving back on their trips in ways big and small</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <img src="{{ asset('home') }}/img/team/team-1.jpg" alt="">
                        <span>DEVELOPER</span>
                        <h5>John Smith</h5>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <img src="{{ asset('home') }}/img/team/team-2.jpg" alt="">
                        <span>DEVELOPER</span>
                        <h5>Garry Toth</h5>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <img src="{{ asset('home') }}/img/team/team-3.jpg" alt="">
                        <span>DEVELOPER</span>
                        <h5>Mary Jean</h5>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <img src="{{ asset('home') }}/img/team/team-4.jpg" alt="">
                        <span>DEVELOPER</span>
                        <h5>Adam Smith</h5>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
