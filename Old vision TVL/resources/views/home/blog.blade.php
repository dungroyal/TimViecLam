@extends('home.main')
@section('content')
 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-area set-bg" data-setbg="{{ asset('home') }}/img/breadcrumb/breadcrumb-blog.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Góc nghề nghiệp</h2>
                    <div class="breadcrumb__option">
                        <a href="/"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Góc nghề nghiệp</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog__item__large">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/1.jpg">
                        
                    </div>
                    <div class="blog__item__text">
                        <ul class="blog__item__tags">
                            <li><i class="fa fa-tags"></i> Cơ hội việc làm</li>
                            <li>Tin tức</li>
                        </ul>
                        <h3><a href="/blogdetail">Môi trường làm việc lý tưởng tại VIFON</a></h3>
                        <ul class="blog__item__widget">
                            <li><i class="fa fa-clock-o"></i> 21th June, 2020</li>
                            <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh </li>
                        </ul>
                        <p>Công ty Cổ phần VIFON là một trong những thương hiệu quen thuộc, gắn bó với người tiêu dùng thông qua nhiều sản phẩm mì sợi ăn liền và gia vị. Thành lập từ năm 1963, VIFON đã xây dựng được chỗ đứng vững chắc trong ngành, có mặt khắp 64 tỉnh thành trong nước và hơn 100 nước trên thế giới bao gồm các thị trường với yêu cầu rất khắt khe về chất lượng hàng hóa như Mỹ, Úc, Nhật, Hàn Quốc và Liên minh châu Âu.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/details/3.jpg"></div>
                            <div class="blog__item__text">
                                <ul class="blog__item__tags">
                                    <li><i class="fa fa-tags"></i> Cơ hội việc làm</li>
                                    <li>Tin tức</li>
                                </ul>
                                <h5><a href="#">Cơ hội phát triển nghề nghiệp tại ngân hàng ABBANK</a></h5>
                                <ul class="blog__item__widget">
                                    <li><i class="fa fa-clock-o"></i> 21th June, 2020</li>
                                    <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/details/2.jpg">
                               
                            </div>
                            <div class="blog__item__text">
                                <ul class="blog__item__tags">
                                    <li><i class="fa fa-tags"></i> Cơ hội việc làm</li>
                                    <li>Tin tức</li>
                                </ul>
                                <h5><a href="#">Bạn đã biết cách tạo động lực giúp nhân viên làm việc hiệu quả hơn?</a></h5>
                                <ul class="blog__item__widget">
                                    <li><i class="fa fa-clock-o"></i> 21th June, 2020</li>
                                    <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/details/4.jpg"></div>
                            <div class="blog__item__text">
                                <ul class="blog__item__tags">
                                    <li><i class="fa fa-tags"></i> Cơ hội việc làm</li>
                                </ul>
                                <h5><a href="#">Abbott Việt Nam – Nơi truyền cảm hứng cho nhân viên</a></h5>
                                <ul class="blog__item__widget">
                                    <li><i class="fa fa-clock-o"></i>  21th June, 2020</li>
                                    <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/details/5.jpg">
                              
                            </div>
                            <div class="blog__item__text">
                                <ul class="blog__item__tags">
                                    <li><i class="fa fa-tags"></i> Góc chia sẽ</li>
                                </ul>
                                <h5><a href="#">Làm thế nào khi vướng phải tin đồn nơi công sở?</a></h5>
                                <ul class="blog__item__widget">
                                    <li><i class="fa fa-clock-o"></i> 21th June, 2020</li>
                                    <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/details/6.jpg"></div>
                            <div class="blog__item__text">
                                <ul class="blog__item__tags">
                                    <li><i class="fa fa-tags"></i> Videos</li>
                                </ul>
                                <h5><a href="#">Khám phá bản thân và tự do sáng tạo cùng Diana Unicharm</a></h5>
                                <ul class="blog__item__widget">
                                    <li><i class="fa fa-clock-o"></i> 28th June, 2020</li>
                                    <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ asset('images') }}/blog/details/7.jpg"></div>
                            <div class="blog__item__text">
                                <ul class="blog__item__tags">
                                    <li><i class="fa fa-tags"></i> Travel</li>
                                </ul>
                                <h5><a href="#">5 dấu hiệu chứng tỏ bạn đang làm việc quá sức</a></h5>
                                <ul class="blog__item__widget">
                                    <li><i class="fa fa-clock-o"></i> 28th June, 2020</li>
                                    <li><i class="fa fa-user"></i> Nguyễn Quốc Thịnh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__pagination">
                    <a href="#"><i class="fa fa-long-arrow-left"></i> Pre</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Searching...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__recent">
                        <h5>Recent Post</h5>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="{{ asset('home') }}/img/blog/recent-1.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Cơ hội việc làm</span>
                                <h6>Môi trường làm việc lý tưởng tại VIFON</h6>
                                <p><i class="fa fa-clock-o"></i> 21th June, 2020</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="{{ asset('home') }}/img/blog/recent-2.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Tin Tức</span>
                                <h6>Cơ hội phát triển nghề nghiệp tại ngân hàng ABBANK</h6>
                                <p><i class="fa fa-clock-o"></i> 21th June, 2020</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="{{ asset('home') }}/img/blog/recent-3.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Tin tức</span>
                                <h6>Bạn đã biết cách tạo động lực giúp nhân viên làm việc hiệu quả hơn?</h6>
                                <p><i class="fa fa-clock-o"></i> 21th June, 2020</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="{{ asset('home') }}/img/blog/recent-4.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> CƠ HỘI VIỆC LÀM</span>
                                <h6>Abbott Việt Nam – Nơi truyền cảm hứng cho nhân viên</h6>
                                <p><i class="fa fa-clock-o"></i> 21th June, 2020</p>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="{{ asset('home') }}/img/blog/recent-5.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <span><i class="fa fa-tags"></i> Travel</span>
                                <h6>Làm thế nào khi vướng phải tin đồn nơi công sở?</h6>
                                <p><i class="fa fa-clock-o"></i> 21th June, 2020 </p>
                            </div>
                        </a>
                    </div>
                    <div class="blog__sidebar__categories">
                        <h5>Categories</h5>
                        <ul>
                            <li><a href="#">Finance <span>18</span></a></li>
                            <li><a href="#">Business <span>20</span></a></li>
                            <li><a href="#">Loan <span>07</span></a></li>
                            <li><a href="#">Consulting <span>22</span></a></li>
                            <li><a href="#">Credit <span>19</span></a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__tags">
                        <h5>Popular Tag</h5>
                        <a href="#">Business</a>
                        <a href="#">Marketing</a>
                        <a href="#">Payment</a>
                        <a href="#">Travel</a>
                        <a href="#">Finance</a>
                        <a href="#">Videos</a>
                        <a href="#">Ideas</a>
                        <a href="#">Unique</a>
                        <a href="#">Music</a>
                        <a href="#">Key</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
