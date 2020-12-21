@extends('layouts.home')

@section('content')
<div class="my-5"></div>
<br>
<section class="cb-banner-about">
    <div class="image"><img src="{{asset('/')}}images/banner-about.png" alt=""></div>
    <div class="content">
        <div class="title-about">
            <h1>VỀ TimViecLam.XYZ</h1>
        </div>
        <div class="text-about">
            <p>TimViecLam luôn đi đầu trong đổi mới khi sử dụng dữ liệu và công nghệ để phát triển không gian
                quản lý nguồn nhân lực, với các giải pháp giúp nhà tuyển dụng tìm, tuyển dụng và quản lý những người
                tuyệt vời.</p>
        </div>
    </div>
</section>
<!--  -->
<section class="cb-empowering cb-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image">
                    <img alt="" src="{{asset('/')}}images/image-about-1.png"></div>
            </div>
            <div class="col-lg-6 align-item-center">
                <div class="content">
                    <div class="title-section">
                        <h2>
                            Cung Cấp Giải Pháp Tuyển Dụng Khắp Toàn Cầu</h2>
                    </div>
                    <div class="text-section">
                        <p>
                            TimViecLam.vn, sở hữu bởi TimViecLam Mỹ - Mạng Việc làm &amp; Tuyển dụng lớn nhất thế giới. Với công nghệ tiên tiến, mạng lưới đối tác toàn cầu và dịch vụ khách hàng chuyên nghiệp, chúng tôi kết nối nhân tài với công việc mơ ước và giúp doanh nghiệp xây dựng đội ngũ nhân sự tài năng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--  -->
    <section class="cb-about-icon cb-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="figure">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-5.png"></div>
                        <div class="figcaption">
                            <div class="content">
                                <p>
                                    TimViecLam hiện đang hoạt động tại Mỹ, Châu Âu, Canada, Châu Á, Nam Mỹ và có mặt tại hơn&nbsp;<span class="col_link">70 thị trường quốc tế</span></p>
                                <p>
                                    <span class="col_link"><span class="col_link">Hơn 49 triệu người</span>&nbsp;sử dụng dịch vụ TimViecLam để được tư vấn nghề nghiệp và tìm kiếm cơ hội việc làm mỗi tháng</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="figure">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-6.png"></div>
                        <div class="figcaption">
                            <div class="content">
                                <p>
                                    Hơn 2 triệu việc làm đăng tuyển</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="figure">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-7.png"></div>
                        <div class="figcaption">
                            <div class="content">
                                <p>
                                    <span class="col_link">Hơn 200 triệu ứng viên</span>&nbsp;trên toàn thế giới tham gia TimViecLam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="figure">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-8.png"></div>
                        <div class="figcaption">
                            <div class="content">
                                <p>
                                    <span class="col_link">300,000 tập đoàn</span>&nbsp;trên toàn cầu sử dụng dịch vụ tìm kiếm nhân sự mỗi ngày, chiếm 92% trong danh sách 1000 doanh nghiệp lớn nhất ở Mỹ (Fortune 1000)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!--  -->
    <section class="cb-about-our-values cb-section">
        <div class="container">
            <div class="cb-title cb-title-center">
                <h2>
                    Giá Trị Cốt Lõi</h2>
            </div>
            <div class="row row-values justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3 col-values">
                    <div class="figure bg-trends">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h4>
                                    Thẳng thắn</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Minh bạch, trung thực và tôn trọng trong mọi mối quan hệ.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-values">
                    <div class="figure bg-tips">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-1.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h4>
                                    Chủ Động Đi Kèm Tinh Thần Kỷ Luật</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Chúng tôi quan tâm phát triển năng lực lãnh đạo trong mỗi nhân viên. Vì thế, mỗi thành viên của công ty được phép chủ động thực thi dự án của mình đi kèm với tinh thần kỷ luật cao. Tại TimViecLam.vn, mỗi thành công của bạn đều được tưởng thưởng xứng đáng.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-values">
                    <div class="figure bg-trends">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-2.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h4>
                                    Đam Mê Công Việc</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Chúng tôi giúp người tìm việc và nhà tuyển dụng đạt được mục tiêu của mình bằng tất cả niềm say mê. Qua đó, TimViecLam.vn giúp cộng đồng nâng cao chất lượng cuộc sống và kiến tạo nên môi trường làm việc nơi mỗi cá nhân với tính cách và nền tảng phát triển riêng đều có thể vươn đến thành công. Chúng tôi khuyến khích nhân viên sẵn sàng đón nhận thử thách và cảm nhận ý nghĩa cuộc sống khi biến ý tưởng của mình thành hiện thực và đóng góp tích cực cho cộng đồng. Không chỉ đem đến cho nhân viên mức thu nhập hấp dẫn, chúng tôi còn cùng họ xây dựng cuộc sống hạnh phúc.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-values">
                    <div class="figure bg-self">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-3.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h4>
                                    Năng Động</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Để tiến lên phía trước, chúng tôi không ngừng học hỏi và áp dụng kiến thức thực tiễn vào hành động. Đầu tư phát triển chất lượng nhân viên và khuyến khích áp dụng kỹ năng phản biện cho mọi quyết định của công ty là nền tảng cơ bản. Chúng tôi tin đây cũng chính là lợi thế cạnh tranh duy nhất để phát triển bền vững.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 col-values">
                    <div class="figure bg-trends">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/about-us-4.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h4>
                                    Tích Cực Hợp Tác</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Giữ thái độ tích cực trong mọi tình huống và biến điều dường như không thể thành hiện thực. Khi đương đầu thách thức, chúng tôi chủ động mang đến những giải pháp hiệu quả hơn cả mong đợi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!--  -->
    <section class="cb-about-our cb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="figure">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/image-about-2.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h3>
                                    Sứ Mệnh</h3>
                            </div>
                            <div class="content">
                                <p>
                                    Chúng tôi kết nối nhân tài với công việc lý tưởng, qua đó giúp bạn tìm thấy sự trọn vẹn và cân bằng cuộc sống. Với TimViecLam.vn, tìm kiếm việc làm sẽ dễ dàng hơn!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="figure">
                        <div class="image">
                            <img alt="" src="{{asset('/')}}images/image-about-3.png"></div>
                        <div class="figcaption">
                            <div class="title">
                                <h3>
                                    Tầm nhìn</h3>
                            </div>
                            <div class="content">
                                <p>
                                    TimViecLam.vn là website tuyển dụng hàng đầu đem đến giá trị tối ưu cho người sử dụng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
@endsection