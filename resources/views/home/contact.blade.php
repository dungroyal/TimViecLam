@extends('home.main')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-area set-bg" data-setbg="{{ asset('home') }}/img/breadcrumb/breadcrumb-normal.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Liên hệ với chúng tôi</h2>
                        <div class="breadcrumb__option">
                            <a href="/"><i class="fa fa-home"></i> Trang chủ</a>
                            <span>Liên hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1478.395546339389!2d106.62751157827506!3d10.853503852373715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a20be133a37%3A0x2222564f53ae228d!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1591629436778!5m2!1svi!2s"
                            height="550" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__widget">
                        <div class="contact__widget__address">
                            <h4>Contact Us</h4>
                            <ul>
                                <li><i class="fa fa-send"></i> Công viên phần mềm Quang, QTSC Building 1, Trung P, Quận 12, Hồ Chí Minh, Việt Nam</li>
                                <li><i class="fa fa-envelope"></i> contact@timvieclam.xyz</li>
                                <li><i class="fa fa-phone"></i> +84 398 022 720</li>
                            </ul>
                        </div>
                        <div class="contact__widget__time">
                            <h4>Opening Hours</h4>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Mon - Fri: 6:30am - 07:45pm</li>
                                <li><i class="fa fa-clock-o"></i> Sat - Sun: 8:30am - 05:45pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <form action="#" class="contact__form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
