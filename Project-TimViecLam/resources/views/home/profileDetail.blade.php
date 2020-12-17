@extends('layouts.home')

@section('content')
<div class="container-fluid my-5">
    <hr class="mt-n2">
</div>
<div class="container">
    <section class="candidate-detail">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-left">
                <div id="detail-el" class="box-general-detail pb-15">
                    <div class="mw-box-item detail-header">
                        <div class="info">
                            <div class="info-candidate">
                                <div class="picture">
                                    <div class="image-cover">
                                        <img class="lazy-load image-pro-emp" src="{{asset('images/logo/timvieclam-placeholder.png')}}"/>
                                    </div>
                                </div>
                                <div class="info-basic">
                                    <div class="white">
                                        <h2 class="title capitalize">phạm ngọc chiêu ánh</h2>
                                        <h1 class="sub-title capitalize cv-title">Chuyên Viên Marketing</h1>
                                    </div>
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p class="font-pro-emp">
                                                    <span class="icon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>29/10/1987
                                                </p>
                                                <p class="font-pro-emp">
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Chung Cư 4S Riverside, Kp4, Phường Hiệp Bình Chánh
                                            </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="font-pro-emp"><span class="icon">
                                                    <i class="fas fa-mars"></i></span>Nam
                                                </p>
                                                <p class="font-pro-emp">
                                                    <span class="icon"><i class="fas fa-ribbon"></i></span>
                                                    Đã kết hôn
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-half"></div>
                    </div>
                    <div class="alert alert-warning alert-service">
                        {{-- <span> Bạn đang xem hồ sơ ứng viên đã được phân loại trên TimViecLam. Hồ sơ có giá trị
                            <span class="text-danger">3</span> điểm.
                        </span>
                        <span>Đồng ý xem
                            <a href="#">bấm vào đây</a>. Hoặc
                            <a href="#" target="_blank" class=""> bấm vào đây </a>để đăng
                            ký dịch vụ.
                        </span> --}}
                        <div class="box-function text-center">
                            <button type="button" class="el-button el-button--info is-plain">
                                <span class="font-pro-emp"><i class="far fa-heart mr-2"></i>Lưu hồ sơ</span>
                            </button>
                            <button type="button" class="el-button btn-call-action el-button--warning">
                                <span class="font-pro-emp-limit"><i class="far fa-eye mr-2"></i>Xem liên hệ </span>
                            </button>
                        </div>
                    </div>
                    <div class="common-info item-info mt-0 pt-0">
                        <h3 class="head-title "><span class="bg"><span class="icon"><i
                                        class="far fa-user icon-pro-emp"></i></span> Thông tin hồ sơ </span>
                        </h3>
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-unstyled properties">
                                        <li><strong>Ngành nghề: </strong><span
                                                class="el-tag candidate-tag el-tag--primary"
                                                ><a href="#"
                                                    class="">Marketing -
                                                    PR</a>
                                                </span><span class="el-tag candidate-tag el-tag--primary"
                                                ><a href="#" class="">Tiếp
                                                    thị -
                                                    Quảng cáo</a>
                                                </span><span class="el-tag candidate-tag el-tag--primary"
                                                ><a href="#" class="">Tổ
                                                    chức sự kiện - Quà tặng</a>
                                                </span></li>
                                        <li class="font-pro-emp"><strong>Trình độ học vấn:</strong>Cử nhân</li>
                                        <li  class="font-pro-emp"><strong>Loại hình công việc: </strong><span>Toàn thời gian cố
                                                định,</span></li>
                                        <li  class="font-pro-emp"><strong>Cấp bậc mong muốn: </strong>Nhân viên</li>
                                        <li  class="font-pro-emp"><strong>Mức lương mong muốn:</strong><span
                                                class="text-danger">10
                                                triệu - 12 triệu</span></li>
                                        <li  class="font-pro-emp"><strong>Số năm kinh nghiệm:</strong><span class="text-danger"> 5
                                                năm</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <ul class="list-unstyled properties">
                                        <li  class="font-pro-emp"><strong>Nơi làm việc: </strong><span class="el-tag candidate-tag el-tag--primary" ><a href="#" class="">Hồ Chí
                                                    Minh</a>
                                                </span></li>
                                        <li class="font-pro-emp"><strong>Quận / huyện: </strong>Thủ Đức</li>
                                        <li class="font-pro-emp"><strong>Tỉnh / thành phố: </strong>Hồ Chí Minh</li>
                                        <li class="font-pro-emp"><strong>Mã hồ sơ:</strong> 2120588</li>
                                        <li class="font-pro-emp"><strong>Số lượt xem:</strong> 3114</li>
                                        <li class="font-pro-emp"><strong>Ngày cập nhật: </strong>06/12/2020</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title"><span class="bg"><span class="icon"><i class="fas fa-trophy"></i></span>
                                    Mục tiêu nghề nghiệp
                                </span></h3>
                            <div class="content">
                                <div class="ort-description">
                                    <article class="pre-line font-pro-emp">- Được làm việc trong môi trường hiện đại, năng động, sáng tạo, có điều kiện học hỏi, phát triển kỹ năng và vận dụng hiệu quả kiến thức vào công việc. Mong muốn có nhiều cơ hội thử thách, rèn luyện, nâng cao khả năng làm việc.
                                    </article>
                                </div>
                                <ul class="list-unstyled properties font-pro-emp mt-2">
                                    <li><i class="fas fa-check-circle icon-pro-color"></i> Mong muốn tìm được chỗ làm ổn
                                        định lâu dài</li>
                                    <li><i class="fas fa-check-circle icon-pro-color"></i> Mong muốn tìm được chỗ làm có
                                        cơ
                                        hội thăng tiến tốt</li>
                                    <li><i class="fas fa-check-circle icon-pro-color"></i> Mong muốn tìm được chỗ làm có
                                        mức
                                        lương tốt</li>
                                    <li><i class="fas fa-check-circle icon-pro-color"></i> Mong muốn tìm được nơi có cơ
                                        hội
                                        cống hiến bản thân tốt</li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title"><span class="bg"><span class="icon"><i class="fas fa-magic"></i></span>
                                    Kỹ năng bản thân
                                </span></h3>
                            <div class="content">
                                <div>
                                    <article class="pre-line font-pro-emp">Maketing - Truyền Thông - Event</article>
                                </div>
                                <div>
                                    <ul class="properties list-unstyled mt-2"></ul>
                                    <ul class="properties list-unstyled font-pro-emp mb-0">
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Kỹ năng tổ chức</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Kỹ năng giao tiếp</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Kỹ năng làm việc theo
                                            nhóm
                                        </li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Kỹ năng lãnh đạo</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Kỹ năng thuyết trình</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Giải quyết vấn đề</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Lập kế hoạch</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Quản lý thời gian hiệu
                                            quả
                                        </li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Dễ dàng thích nghi với
                                            môi
                                            trường mới</li>
                                        <li><i class="fas fa-check-circle icon-pro-color"></i> Tư duy sáng tạo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title"><span class="bg"><span class="icon"><i class="fas fa-book-open"></i></span>
                                    Trình độ ngoại ngữ
                                </span></h3>
                            <div class="content">
                                <ul class="list-unstyled properties rate-list mt-2">
                                    <li class="">
                                        <span class="left font-pro-emp">Tiếng Anh</span><span class="star-right">
                                                <i class="fas fa-star on"></i>
                                                <i class="fas fa-star on"></i>
                                                <i class="fas fa-star on"></i>
                                                <i class="far fa-star off"></i>
                                                <i class="far fa-star off"></i>
                                            </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title mb-0 pb-0"><span class="bg"><span class="icon"><i class="fas fa-graduation-cap"></i></span>
                                    Học vấn / bằng cấp
                                </span></h3>
                            <div class="content">
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Đã từng</span></div>
                                        <div class="info">
                                            <h4>Cử nhân </h4>
                                            <p><strong class="text-pro-emp">Trường / nơi đào tạo: </strong>ĐH Khoa Học Tự Nhiên -
                                                TPHCM
                                            </p>
                                            
                                            
                                            <p><strong class="text-pro-emp">Ngành:</strong> Công nghệ thông tin</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <div class="item-desc pre-line font-pro-emp">- Kỹ thuật viên khóa Đồ Họa Đa truyền thông Tại trung tâm Khoa Học Tự Nhiên
                                                    - Ngoại ngữ: Anh văn ( Bằng B), nghe nói đọc viết tốt
                                                    - Bằng Master: Lập trình PHP và ASP.Net tại trung tâm Nhất Nghệ
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title mb-0 pb-0"><span class="bg"><span class="icon"><i class="fas fa-briefcase"></i></span>
                                    Kinh nghiệm làm việc <span class="text-danger">(5 năm)</span></span></h3>
                            <div class="content">
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Đã từng</span></div>
                                        <div class="info">
                                            <h4>Marketing Executive</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 1/ Bất Động Sản Việt Á</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <ul class="list-unstyled font-pro-emp">
                                                    <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                    <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                    </li>
                                                    <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                    <li class="cert-info"><strong>Thành tích:</strong></li>
                                                    <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Từ 09/2019 - 06/2020</span></div>
                                        <div class="info">
                                            <h4>Project Manager</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 2/ Công Ty Ar Việt Nam (agency)</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <ul class="list-unstyled font-pro-emp">
                                                    <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                    <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                    </li>
                                                    <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                    <li class="cert-info"><strong>Thành tích:</strong></li>
                                                    <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Từ 09/2018 - 09/2019</span></div>
                                        <div class="info">
                                            <h4>Operation Manager</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 3/ Công Ty Vinstar Moving (agency)</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <ul class="list-unstyled font-pro-emp">
                                                    <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                    <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                    </li>
                                                    <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                    <li class="cert-info"><strong>Thành tích:</strong></li>
                                                    <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Từ 05/2018 - 09/2018</span></div>
                                        <div class="info">
                                            <h4>Marketing Executive</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 4/ Công Ty Tam Kim (điện Gia Dụng)</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <ul class="list-unstyled font-pro-emp">
                                                    <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                    <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                    </li>
                                                    <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                    <li class="cert-info"><strong>Thành tích:</strong></li>
                                                    <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Từ 08/2015 - 08/2017</span></div>
                                        <div class="info">
                                            <h4>Trợ Lý Giám Sát Thi Công Cụp Rạp Chiếu Phim</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 5/ Rạp Chiếu Phim Bhd Cineplex</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <ul class="list-unstyled font-pro-emp">
                                                    <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                    <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                    </li>
                                                    <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                    <li class="cert-info"><strong>Thành tích:</strong></li>
                                                    <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Từ 09/2012 - 08/2015</span></div>
                                        <div class="info">
                                            <h4>Trợ Lý Hoạ Sĩ Thiết Kế </h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 6/ Công Ty Bhd Media</p>
                                            <div class="cert-info"><strong>Mô tả:</strong><br>
                                                <ul class="list-unstyled font-pro-emp">
                                                    <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                    <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                    </li>
                                                    <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                    <li class="cert-info"><strong>Thành tích:</strong></li>
                                                    <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                  </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="item">
                                        <div class="time"><span>Từ 08/2010 - 08/2012</span></div>
                                        <div class="info">
                                            <h4>Web Developer</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> 7/công Ty Tin Học Đất Lành (goodland
                                                Informatic)</p>
                                                <div class="cert-info"><strong>Mô tả:</strong><br>
                                                    <ul class="list-unstyled font-pro-emp">
                                                        <li> - Lên chiến dịch bán đất nền, khu nghỉ dưỡng thông qua các hoạt động mở bán tại Sài Gòn và Bảo Lộc</li>
                                                        <li> -Lên chiến dịch Digital kiếm khách hàng tiềm năng (Facebook Ads, Viral Video, Podcast, Google Ad), Phát triển kênh Youtube Bất Động Sản, làm Content Marketing cho website và fanpage
                                                        </li>
                                                        <li>-Thiết kế Sale Kit bán hàng cho từng nơi mở bán (mỗi nơi mỗi brief) nhằm vào từng tệp khách hàng.</li>
                                                        <li class="cert-info"><strong>Thành tích:</strong></li>
                                                        <li>- Bán thành công 25 lô đất nền tại Bảo Lộc - Lâm Đồng</li>
                                                      </ul>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box-contact" class="box_general mb-3">
                    <h3 class="title-h2">Thông tin liên hệ</h3>
                    <div class="mw-box-item box-contact">
                        <div class="row pt-3">
                            <div class="col-md-6 col-lg-3 label-contact"><strong>Họ tên:</strong></div>
                            <div class="col-md-6 col-lg-9 item font-pro-emp"><span class="capitalize">phạm ngọc chiêu
                                    ánh</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 label-contact"><strong>Địa chỉ:</strong></div>
                            <div class="col-md-6 col-lg-9 item font-pro-emp">
                                Chung Cư 4S Riverside, Kp4, Phường Hiệp Bình Chánh, Quận Thủ Đức, Hồ Chí Minh
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 label-contact"></div>
                            <div class="col-md-6 col-lg-9 item pt-15 pb-5">
                                <button type="button" class="el-button btn-call-action el-button--warning font-pro-emp">
                                    <span><i class="far fa-eye mr-2"></i>Xem liên hệ</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-right">
                <div class="row-left">
                    
                    
                    <div class="box_right">
                        <div class="candidate_right pt-2 pb-2"><span>
                            </span>
                            <div class="box-rp-function row text-center pr-2">
                                
                                <div class="col-md-6">
                                    <div class="box-func save-pdf el-tooltip">
                                        <p><i class="far fa-file-alt"></i></p>
                                        <p class="font-pro-emp">Lưu PDF</p><span class="badge">NEW</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-func el-tooltip">
                                        <p><i class="fas fa-share-alt"></i></p>
                                        <p class="font-pro-emp">Chia sẻ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box_right">
                        <h3 class="title_right title-font-right">Tìm kiếm nâng cao</h3>
                        <div class="candidate_right pd-15">
                            <div>
                                <div class="box-search-relate">
                                    <div class="box_search pt-0">
                                        <div class="mw_select input_search"><span class="icon-before"><i class="fas fa-tools"></i>
                                        </span><input placeholder="Ngành nghề" readonly="readonly" class="form-control"><span class="icon-after">
                                            <i class="fas fa-angle-down"></i></span>
                                            
                                        </div>
                                    </div>
                                    <div class="box_search">
                                        <div class="mw_select input_search"><span class="icon-before"><i class="fas fa-map-marker-alt"></i></span><input
                                                placeholder="Địa điểm" readonly="readonly"
                                                class="form-control"><span class="icon-after"><i class="fas fa-angle-down"></i></span>
                                            
                                        </div>
                                    </div>
                                    <div class="box_search">
                                        <div class="mw_select input_search"><span class="icon-before"><i class="far fa-clock"></i></span><input placeholder="Kinh nghiệm"
                                                readonly="readonly" class="form-control">
                                            <span class="icon-after">
                                                <i class="fas fa-angle-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="box_search">
                                        <div class="mw_select input_search">
                                            <span class="icon-before">
                                                <i class="far fa-clipboard"></i>
                                            </span>
                                            <input placeholder="Vị trí" readonly="readonly" class="form-control">
                                            <span class="icon-after"><i class="fas fa-angle-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="box_search">
                                        <div class="mw_select input_search">
                                            <span class="icon-before">
                                            <i class="fas fa-store"></i>
                                        </span>
                                        <input placeholder="Trình độ học vấn" readonly="readonly" class="form-control">
                                                <span class="icon-after"><i class="fas fa-angle-down"></i></span>
                                        </div>
                                    </div>
                                    <button type="button" class="el-button btn-block mt-10 mb-0 el-button--primary">
                                        <span>Tìm kiếm</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#app').addClass("bgGray");
    })
</script>
@endpush
