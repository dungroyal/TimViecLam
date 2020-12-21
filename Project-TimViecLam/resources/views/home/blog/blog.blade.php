@extends('layouts.home')

@section('content')
<div class="my-5"></div>
<section class="ftco-section ftco-degree-bg mt-5 pt-5">
    <div class="container">
        <div class="container-blog-header">
            <div class="blog-text-header mt-3">
                <h3> GÓC NGHỀ NGHIỆP</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 ftco">
                <table class="table table-bordered table-hover">
                    <div class="td-block-title-wrap">
                        <h4 class="td-block-title">
                            <a  class="td-pulldown-size">TIN CẬP NHẬT </a>
                        </h4>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-6   d-flex ftco">
                            <div class="entry align-self-stretch">
                                <a href="{{ Route('blog.detail')}}" class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/image_7.jpg'); " title="Những nghề “hot” nhất trong kỷ nguyên 4.0">
                                </a>
                                <div class="text mt-3 ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="Những nghề “hot” nhất trong kỷ nguyên 4.0 ">Những nghề “hot” nhất trong kỷ nguyên 4.0? </a></h3>
                                </div>
                                <div class="content">
                                    Với tốc độ phát triển chóng mặt của mạng xã hội, sự kiện Trí thông minh nhân tạo AlphaGo của Google chiến thắng nhà vô địch thế giới trong bộ môn cờ...
                                </div>
                                <div class="view-more">
                                    <a href="{{ Route('blog.detail')}} ">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6   d-flex ftco ">
                            <div class="entry align-self-stretch ">
                                <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/thiet-ke.png'); " title="5 điều các doanh nghiệp thành công làm để giữ chân nhân tài ">
                                </a>
                                <div class="text mt-3 ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="5 điều các doanh nghiệp thành công làm để giữ chân nhân tài ">5 điều các doanh nghiệp thành công làm để giữ chân nhân tài</a></h3>
                                </div>
                                <div class="content">
                                    Sau khi bạn đã bỏ thời gian, công sức và đầu tư để thuê những nhân viên giỏi nhất về làm việc, bạn luôn có suy nghĩ làm thế nào để giữ họ lại để tiếp tục cống hiến cho công ty phát triển? Hãy cùng tìm hiểu xem có những cách làm hay ho nào nhé</div>
                                <div class="view-more">
                                    <a href="{{ Route('blog.detail')}}">Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ftco ">
                            <div class="entry align-self-stretch ">
                                <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/thong-ke.png'); " title="Làm thế nào để tìm việc dễ dàng vào thời điểm Covid-19? ">
                                </a>
                                <div class="text mt-3 ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="Làm thế nào để tìm việc dễ dàng vào thời điểm Covid-19? ">Làm thế nào để tìm việc dễ dàng vào thời điểm Covid-19?</a></h3>
                                </div>
                                <div class="content">
                                    Thị trường việc làm đang có nhiều biến động do ảnh hưởng của dịch Covid-19, một số ngành nghề, vị trí bị cắt giảm lao động. Do đó, số lượng người tìm việc gia tăng đáng kể, đồng thời, số lượng vị trí tuyển dụng lại có sự hạn chế, thậm chí, một số công
                                    ty còn cắt giảm lao động hoặc tối ưu hóa nhân sự của mình nhằm tiết kiệm chi phí vận hành hơn. Vậy ứng viên làm thế nào để tìm việc dễ dàng hơn trong thời điểm khó khăn này? Việc Làm 24h sẽ gợi ý cho bạn một vài
                                    mẹo để quá trình tìm việc trong thời gian này trở nên “dễ thở” hơn nhé!</div>
                                <div class="view-more">
                                    <a href="{{ Route('blog.detail')}}">Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ftco ">
                            <div class="entry align-self-stretch ">
                                <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/tk.png');" title="5 bước để doanh nghiệp phát triển chiến lược nội dung nhân sự. ">
                                </a>
                                <div class=" text mt-3 ">

                                    <h3 class="heading ">
                                        <a href="{{ Route('blog.detail')}} " title="5 bước để doanh nghiệp phát triển chiến lược nội dung nhân sự. ">
                                            5 bước để doanh nghiệp bạn phát triển nội dung chiến lược nhân sự</a></h3>
                                </div>
                                <div class="content">
                                    Theo như các báo cáo cho thấy, chỉ có 1/10 giám đốc nhân sự tin rằng phần lớn lực lượng lao động hiểu rõ về giá trị cốt lõi của doanh nghiệp, chính vì thế chúng ta cần phải thiết lập lại mục tiêu cho nhân viên với sứ mệnh mới. Và để thực hiện điều đó
                                    thì nội dung là một phần mạnh mẽ để xác định tiếng nói của thương hiệu, điều này có sức ảnh hưởng lớn bởi nó có thể giúp không chỉ xây dựng tiếng nói thương hiệu mà còn thực sự truyền tải thông điệp thương hiệu
                                    này đến toàn bộ lực lượng lao động. Vì vậy đây là một việc làm vô cùng cần thiết cho các doanh nghiệp định hướng phát triển trong tương lai.</div>
                                <div class="view-more">
                                    <a href="{{ Route('blog.detail')}}">Xem thêm
                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ftco ">
                            <div class="entry align-self-stretch ">
                                <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/quan-li.png'); " title="5 kỹ năng cần có để trở thành một nhà quản lý thành công ">
                                </a>
                                <div class="text mt-3 ">

                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="5 kỹ năng cần có để trở thành một nhà quản lý thành công ">5 kỹ năng cần có để trở thành một nhà quản lý thành công</a></h3>
                                </div>
                                <div class="content">
                                    Trong con đường sự nghiệp của mình, mỗi chúng ta đều mong muốn thăng tiến và đạt được vị trí cao hơn trong</div>
                                <div class="view-more">
                                    <a href="{{ Route('blog.detail')}}">Xem thêm
                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex ftco ">
                            <div class="entry align-self-stretch ">
                                <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/ng.png');" title="5 mẹo xin việc dành cho ứng viên mới tốt nghiệp ">
                                </a>
                                <div class="text mt-3 ">

                                    <h3 class="heading ">
                                        <a href="{{ Route('blog.detail')}} " title="5 mẹo xin việc dành cho ứng viên mới tốt nghiệp ">5 mẹo xin việc dành cho ứng viên mới tốt nghiệp.</a>
                                    </h3>
                                </div>
                                <div class="content">
                                    Sự thật là khi đã làm trong những ngành nghề liên quan đến sáng tạo, điều không bao giờ được phép nhàm chán</div>
                                <div class="view-more">
                                    <a href="{{ Route('blog.detail')}}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="td-block-title-wrap">
                        <h4 class="td-block-title">
                            <a  class="td-pulldown-size">BÀI VIẾT ĐƯỢC QUAN TÂM</a>
                        </h4>
                    </div>
                    <div class="boder-radius">
                        <div class="row d-flex">
                            <div class=" col-md-6 d-flex ftco ">
                                <div class="entry align-self-stretch ">
                                    <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/vin-tuyen.jpg'); " title=" Công ty VINFAST tuyển dụng – Cơ hội việc làm hấp dẫn năm 2020 ">
                                    </a>
                                    <div class="text mt-3 ">
                                        <h3 class="heading ">
                                            <a href="{{ Route('blog.detail')}} " title=" Công ty VINFAST tuyển dụng – Cơ hội việc làm hấp dẫn năm 2020 ">
                                            Công ty VINFAST tuyển dụng – Cơ hội việc làm hấp dẫn năm 2020
                                        </a>
                                        </h3>
                                    </div>
                                    <div class="content">
                                        VINFAST là doanh nghiệp được nhiều người biết đến bởi trực thuộc Tập đoàn VinGroup. Đây là công ty chuyên về sản xuất ô tô mang thương hiệu Việt Nam. Vậy quy trình Công ty VINFAST tuyển dụng ra sao? là điều rất nhiều người băn khoăn. Cùng theo dõi bài
                                        viết để được giải đáp nhé!
                                    </div>
                                    <div class="view-more">
                                        <a href="{{ Route('blog.detail')}}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6 d-flex ftco ">
                                <div class="entry align-self-stretch ">
                                    <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/van-hoa.jpg'); " title="Phỏng vấn tuyển dụng: 3 câu hỏi NTD muốn nghe nhưng ứng viên không hỏi ">
                                    </a>
                                    <div class="text mt-3 ">

                                        <h3 class="heading ">
                                            <a href="{{ Route('blog.detail')}} " title="Phỏng vấn tuyển dụng: 3 câu hỏi NTD muốn nghe nhưng ứng viên không hỏi ">
                                        Phỏng vấn tuyển dụng: 3 câu hỏi NTD muốn nghe nhưng ứng viên không hỏi</a>
                                        </h3>
                                    </div>
                                    <div class="content">Những phẩm chất của một người cần có để thành công trong văn hóa công ty của anh- về cá nhân cũng như là một nhân viên là gì? “Văn hóa của công ty, nó là gì? Với một số công ty dễ dàng sử dụng những cụm từ nhất
                                        định để nói về văn hóa của họ như “cứng nhắc”, “đề cao sáng tạo”, hay “cởi mở”. Thông thường những từ này được dùng để mô tả về các nhà lãnh đạo công ty hoặc những điều họ theo đuổi</div>
                                    <div class="view-more">
                                        <a href="{{ Route('blog.detail')}}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex ftco ">
                                <div class="entry align-self-stretch ">
                                    <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/qc.jpg'); " title="Bạn có thực sự hiểu đúng về ngành quảng cáo? ">
                                    </a>
                                    <div class="text mt-3 ">

                                        <h3 class="heading ">
                                            <a href="{{ Route('blog.detail')}} " title="Bạn có thực sự hiểu đúng về ngành quảng cáo? "> Bạn có thực sự hiểu đúng về ngành quảng cáo?</a>
                                        </h3>
                                    </div>
                                    <div class="content">Những phẩm chất của một người cần có để thành công trong văn hóa công ty của anh- về cá nhân cũng như là một nhân viên là gì? “Văn hóa của công ty, nó là gì? Với một số công ty dễ dàng sử dụng những cụm từ nhất
                                        định để nói về văn hóa của họ như “cứng nhắc”, “đề cao sáng tạo”, hay “cởi mở”. Thông thường những từ này được dùng để mô tả về các nhà lãnh đạo công ty hoặc những điều họ theo đuổi, nhưng không phải lúc nào
                                        chúng cũng dễ dàng chuyển tải thành thông điệp rõ ràng.”

                                    </div>
                                    <div class="view-more">
                                        <a href="{{ Route('blog.detail')}}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6 d-flex ftco ">
                                <div class="entry align-self-stretch ">
                                    <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/la-mang.jpg');" title="Tôi bị “ kẹt cứng” giữa bè phái nơi công sở. ">
                                    </a>
                                    <div class="text mt-3 ">

                                        <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="Tôi bị “ kẹt cứng” giữa bè phái nơi công sở. ">Tôi bị “ kẹt cứng” giữa bè phái nơi công sở.</a></h3>
                                    </div>
                                    <div class="content">Đối với tôi, một môi trường làm việc luôn có sự cạnh tranh là điều kiện để tôi có thể học hỏi nhiều điều, phát triển thêm những kỹ năng, chuyên môn nghiệp vụ. Có cạnh tranh thì mới có phát triển. Tuy nhiên, nếu
                                        không may rơi vào những cuộc tranh giành hơn thua, chia bè kết phái thì sẽ khiến bạn vô cùng mệt mỏi, không biết ứng xử như thế nào. Và tôi đang bị “ kẹt cứng” giữa bè phái ngay tại nơi làm việc của mình.
                                    </div>
                                    <div class="view-more">
                                        <a href="{{ Route('blog.detail')}}">Xem thêm</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex ftco ">
                                <div class="entry align-self-stretch ">
                                    <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/truon-dinh-anh.jpg'); " title="Trương Đình Anh: Từ anh lập trình viên trở thành CEO FPT. ">
                                    </a>
                                    <div class="text mt-3 ">

                                        <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="Trương Đình Anh: Từ anh lập trình viên trở thành CEO FPT. ">Trương Đình Anh: Từ anh lập trình viên trở thành CEO FPT</a></h3>
                                    </div>
                                    <div class="content">
                                        “Lúc chưa có tiền, tôi nghĩ mình sẽ tậu nhà to, sẽ chơi “siêu xe”, sẽ ăn tiêu thỏa thích. Từ khi tay trắng đến khi có tiền, cách sống của tôi rất ít thay đổi. Khi bạn tự tay kiếm ra từng đồng tiền, bạn
                                        sẽ ít khi tiêu chúng một cách hoang phí. Tôi cũng không định dành cho các con mình một sự khởi đầu “xa xỉ”. Tôi mong muốn các con mình được học hành đầy đủ và rồi tự
                                        tìm cho mình một con đường.
                                    </div>
                                    <div class="view-more">
                                        <a href="{{ Route('blog.detail')}}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex ftco ">
                                <div class="entry align-self-stretch ">
                                    <a href="{{ Route('blog.detail')}} " class="block-20 " style="background-image: url( '{{asset('/')}}images/blog/chuyen-nghiep.png'); " title=" Phải làm sao khi làm việc tại một công ty kém chuyên nghiệp? ">
                                    </a>
                                    <div class="text mt-3 ">

                                        <h3 class="heading "><a href="{{ Route('blog.detail')}} " title=" Phải làm sao khi làm việc tại một công ty kém chuyên nghiệp? ">Phải làm sao khi làm việc tại một công ty kém chuyên nghiệp?</a></h3>
                                    </div>
                                    <div class="content">
                                        Là người đi trước, tôi biết rằng việc tìm một môi trường chuyên nghiệp thật sự rất khó. Dù ở đó có chuyên nghiệp hay không, thì trước hết bạn phải chuyên nghiệp. Ở môi trường nào cũng cho bạn những kiến thức, trải nghiệm và cơ hội phát triển. Quan trọng
                                        là bạn phải làm thế nào để thích nghi và làm việc thật hiệu quả. Bằng những kinh nghiệm của mình, tôi đưa ra một vài lời chia sẻ như sau hy vọng có thể giúp ích cho các bạn.
                                    </div>

                                    <div class="view-more">
                                        <a href="{{ Route('blog.detail')}}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </table>
                <div class="row mt-2 mb-3 ">
                    <div class="col text-center ">
                        <div class="block-27 ">
                            <ul>
                                <li><a href="# ">&lt;</a></li>
                                <li><a href="Blog.html">1</a></li>
                                <li><a href="Blog_2.html">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="# ">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-3 -->
            <div class="col-md-3 pl-md-9 sidebar ftco ">
                <div class="sidebar-box ftco ">
                    <div class="categories ">
                        <div class="slide-bar-header">
                            <h3 class="heading-3 card-header">CẨM NANG </h3>
                        </div>
                        <div class="categories-detail">
                            <li><a href="{{ Route('blog.detail')}}">Phỏng vấn thành công <span>(3)</span></a></li>
                            <li><a href="{{ Route('blog.detail')}}">Thị trường lao động <span>(5)</span></a></li>
                            <li><a href="{{ Route('blog.detail')}}">Báo cáo - Khảo sát<span>(3)</span></a></li>
                            <li><a href="{{ Route('blog.detail')}}">Con đường sự nghiệp<span>(7)</span></a></li>
                            <li><a href="{{ Route('blog.detail')}}">Phát triển bản thân  <span>(9)</span></a></li>
                            <li><a href="{{ Route('blog.detail')}}">Thư giản  <span>(9)</span></a></li>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco ">
                    <div class="categories ">
                        <h3 class="heading-3 card-header ">BÀI MỚI CẬP NHẬT</h3>
                        <div class="categories-detail">
                            <div class="block-21 mb-3 d-flex ">
                                <a class="img mr-3 " style="background-image: url({{asset('/')}}images/blog/qc.jpg); "></a>
                                <div class="text ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="5 bước để doanh nghiệp phát triển chiến lược nội dung. ">5 bước để doanh nghiệp phát triển chiến lược nội dung.</a></h3>
                                    <div class="meta ">
                                        <div>
                                            <i class="fa fa-calendar"></i> 10/10/2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="block-21 mb-3 d-flex ">
                                <a class="img mr-3 " style="background-image: url({{asset('/')}}images/blog/dau-dau.png); "></a>
                                <div class="text ">
                                    <h3 class="heading "><a href="lam-the-nao-de-tim-viec-vao-mua-covid.html " title="Làm thế nào để tìm việc dễ dàng vào thời điểm Covid-19? ">Làm thế nào để tìm việc dễ dàng vào thời điểm Covid-19?</a></h3>
                                    <div class="meta ">
                                        <div>
                                            <i class="fa fa-calendar"></i> 1/10/2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="block-21 mb-3 d-flex ">
                                <a class="img mr-3 " style="background-image: url({{asset('/')}}images/blog/quan-li.png); "></a>
                                <div class="text ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="5 kỹ năng cần có để trở thành một nhà quản lý thành công. ">5 kỹ năng cần có để trở thành một nhà quản lý thành công</a></h3>
                                    <div class="meta ">
                                        <div>
                                            <i class="fa fa-calendar"></i> 14/10/2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="block-21 mb-3 d-flex ">
                                <a class="img mr-3 " style="background-image: url({{asset('/')}}images/blog/vin-tuyen.jpg); "></a>
                                <div class="text ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="Công ty VINFAST tuyển dụng – Cơ hội việc làm hấp dẫn năm 2020">Công ty VINFAST tuyển dụng – Cơ hội việc làm hấp dẫn năm 2020</a></h3>
                                    <div class="meta ">
                                        <div>
                                            <i class="fa fa-calendar"></i> 15/10/2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="block-21 mb-3 d-flex ">
                                <a class="img mr-3 " style="background-image: url({{asset('/')}}images/blog/thiet-ke.png); "></a>
                                <div class="text ">
                                    <h3 class="heading "><a href="{{ Route('blog.detail')}} " title="5 điều các doanh nghiệp thành công làm để giữ chân nhân tài">5 điều các doanh nghiệp thành công làm để giữ chân nhân tài</a></h3>
                                    <div class="meta ">
                                        <div>
                                            <i class="fa fa-calendar"></i> 15/10/2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection