@extends('nhatuyendung.main')
@section('content')

<section class="au-breadcrumb m-t-15">
</section>
<section class="show">
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="{{ asset('images') }}/{{ $UngVien->avata }}" alt="" />
                <h1 class="name">{{ $UngVien->hoTen }}</h1>
                <h3 class="tagline">Full Stack Developer</h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com">{{ $UngVien->email }}</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="tel:0123 456 789">{{ $UngVien->phone }}</a></li>
                    <li class="twitter"><i class="fas fa-venus-mars"></i>{{ $UngVien->gioiTinh }}</li>
                    <li class="website"><i class="fas fa-birthday-cake"></i>{{ $UngVien->birthdate }}</li>
                    <li class="linkedin"><i class="fas fa-map-marker-alt"></i> Tp. Hồ Chí Minh</li>
                    <li class="github"><i class="fab fa-facebook-square"></i>BoiLanhLung</li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Học vấn</h2>
                <div class="item">
                    <h4 class="degree">FPT Polytechnic HCM</h4>
                    <h5 class="meta">Thiết kế Website</h5>
	                    <div class="time">2018 - 2021</div>
                </div><!--//item-->
            </div>
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Ngôn ngữ</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                </ul>
            </div>
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Sở thích</h2>
                <ul class="list-unstyled interests-list">
                    <li>Chơi thể thao</li>
                    <li>Đọc sách</li>
                    <li>Nấu ăn</li>
                </ul>
            </div>
            
        </div>
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Giới thiệu bản thân</h2>
                <div class="summary">
                    <p> &nbsp;&nbsp;&nbsp;&nbsp; Xin chào, tôi là <strong>{{ $UngVien->hoTen }}</strong> là một người trẻ đầy đam mê và nhieeth huyết. Với những kiến thức tôi được học và cùng với sự sáng tạo, kinh nghiệm, cùng với tinh thần trách nhiệm cao trong công việc tôi hy vọng có thể góp 1 phần nhỏ của mình vào sự phát triển của công ty.</p>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-bullseye"></i></span>Mục tiêu nghề nghiệp</h2>
                <div class="summary">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;Áp dụng những kinh nghiệm cũng như
                        những kỹ năng về ngôn ngữ php, html,
                        css.... được học trong nhà trường để
                        trở thành một Web Developer mang
                        đến những giá trị thiết thực. Góp phần
                        giúp công ty ngày càng phát triển.</p>
                </div><!--//summary-->
            </section><!--//section-->


            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Kinh nghiệm</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Website Manager</h3>
                            <div class="time">2019 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Cty Thành Nhân Computer</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>- Quản lý sản phẩm, blog. Giới thiệu, tư vấn sản phẩm, giải đáp các vấn đề thắc mắc của khách hàng qua điện thoại và
                            email.</p>  
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa fa-trophy" aria-hidden="true"></i></span>Giải thưởng</h2>
                <div class="intro">
                    <p>Sinh viên giỏi trong tất cả các học kì theo học trường CAO ĐẲNG THỰC HÀNH FPT POLYTECHNIC HCM</p>
                </div><!--//intro-->
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>KỸ NĂNG</h2>
                <div class="skillset">        
                    
                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 80%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                              
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Laravel</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="progress level-bar">
							    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 90%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Tin học văn phòng</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                  
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Adobe illustration &amp; Photoshop</h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                                 
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
        
    </div>
</section>

<a href="/nha-tuyen-dung/ho-so-cong-viec" class="btn btn-primary m-t-20 m-l-30">Danh sách ứng viên</a>
@endsection
