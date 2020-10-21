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
                        <h2>Welcome to<br /> Directing Listing</h2>
                        <a href="/contact" class="primary-btn">Liên hệ với chúng tôi</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="about__text">
                        <h5>Metasurfaces are generally designed by placing scatterers in periodic or pseudo-periodic
                            grids.</h5>
                        <p>You have finished building your own website. You have introduced your company and presented
                            your products and services. You have added propositions and promos to catch your target
                            audience’s attention. You think you are doing everything “right”, but all your promotions
                            have failed to produce growth in your new internet business.</p>
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
                        <h2>How Does It Work</h2>
                        <p>Travelocity empowers travelers who are giving back on their trips in ways big and small</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">01.</div>
                        <img src="{{ asset('home') }}/img/work/work-1.png" alt="">
                        <h5>Location & Categories</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">02.</div>
                        <img src="{{ asset('home') }}/img/work/work-2.png" alt="">
                        <h5>Explore Listting</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work__item">
                        <div class="work__item__number">03.</div>
                        <img src="{{ asset('home') }}/img/work/work-3.png" alt="">
                        <h5>Making Appointments</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
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
                        <h2>Trusted By Over 5000+ User</h2>
                        <p>What people say about us</p>
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
