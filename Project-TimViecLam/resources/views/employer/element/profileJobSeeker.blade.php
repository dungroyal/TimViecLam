<div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title mt-0" id="myExtraLargeModalLabel">Thông tin ứng viên</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body mt-0 pt-0">
          <div class="container">
              <div class="row profile">
                <div class="col-md-3">
                  <div class="profile-sidebar position-fixed mt-0 pt-0">
                    <div class="profile-userpic">
                      <img src="https://media.rockstargames.com/chinatownwars/global/downloads/avatars/zhou_256x256.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                      <div class="profile-usertitle-name">
                          {{$jobSeekerById->name}}
                      </div>
                      <div class="profile-usertitle-job">
                        {{-- {{$profile->id}} --}}
                      </div>
                    </div>
                    {{-- <div class="profile-userbuttons">
                      <button type="button" class="btn btn-success btn-sm">Follow</button>
                      <button type="button" class="btn btn-danger btn-sm">Message</button>
                    </div> --}}
                    <div class="profile-usermenu sidebar-sticky">
                      <ul class="nav flex-column">
                        <li class="active nav-item">
                          <a href="#" class="nav-link active"><i class="fa fa-home"></i>{{$jobSeekerById->address}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://codepen.io/jasondavis/pen/jVRwaG?editors=1000">
                                <i class="fa fa-user"></i>
                                {{$jobSeekerById->email}}
                            </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" target="_blank">
                                      <i class="fa fa-check"></i>
                                      {{$jobSeekerById->phone}} </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link pr-5" href="#">
                                      <i class="fa fa-flag"></i>
                                      {{\App\Models\City::findOrFail($profile->work_location)->name}} </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="profile-content">
                      <div class="row">
                          <h6 class="font-weight-bold"> Thông tin hồ sơ</h6>
                          <div class="row mb-3">
                              <div class="col-md-6">
                                  <ul>
                                      <li><strong>Ngành nghề:</strong> Hành chính - Văn phòngNhân sự</li>
                                      <li><strong>Trình độ học vấn:</strong> Cao đẳng</li>
                                      <li><strong>Loại hình công việc:</strong> Toàn thời gian cố định, </li>
                                      <li><strong>Cấp bậc mong muốn:</strong> Nhân viên</li>
                                      <li><strong>Mức lương mong muốn:</strong> 5 triệu - 7 triệu</li>
                                      <li><strong>Số năm kinh nghiệm:</strong> Chưa có kinh nghiệm</li>
                                  </ul>
                              </div>
                              <div class="col-md-6">
                                <ul>
                                    <li><strong>Ngành nghề:</strong> Hành chính - Văn phòngNhân sự</li>
                                    <li><strong>Trình độ học vấn:</strong> Cao đẳng</li>
                                    <li><strong>Loại hình công việc:</strong> Toàn thời gian cố định, </li>
                                    <li><strong>Cấp bậc mong muốn:</strong> Nhân viên</li>
                                    <li><strong>Mức lương mong muốn:</strong> 5 triệu - 7 triệu</li>
                                    <li><strong>Số năm kinh nghiệm:</strong> Chưa có kinh nghiệm</li>
                                </ul>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                            <h6 class="font-weight-bold">Mục tiêu nghề nghiệp</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- {{$profile->career_goals}} --}}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <h6 class="font-weight-bold">Học vấn / bằng cấp</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    Mong muốn được học hỏi, tích lũy thêm nhiều kiến thức, kỹ năng để nâng cao sự hiểu biết của bản thân.
                                    Nâng cao trình độ chuyên môn trong lĩnh vực Kinh doanh, Chăm sóc khách hàng, các kỹ năng cần thiết để xử lý công việc đạt hiệu quả cao.
                                    Mong muốn tìm được chỗ làm ổn định lâu dài
                                    Mong muốn tìm được chỗ làm có cơ hội thăng tiến tốt
                                    Mong muốn tìm được chỗ làm có mức lương tốt
                                    Mong muốn tìm được nơi có cơ hội cống hiến bản thân tốt
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <h6 class="font-weight-bold">Kinh nghiệm làm việc</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- {{$profile->work_exp}} --}}
                                    Thực Tập Sinh
                                    Công ty: Cty Thành Nhân Computer

                                    Mô tả:
                                    Thực tập tại các khoa huyết học, sinh hoá, vi sinh, phòng khám, truyền máu.
                                    Thực hiện các công việc cơ bản ( lấy mẫu, xử lý mẫu, chạy các máy sinh hoá, miễn dịch, nước tiểu, điện giải đồ, nuôi cấy vi khuẩn, chạy công thức máu,...)
                                    các công việc khác
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <h6 class="font-weight-bold">Kỹ năng</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- {{$profile->describe_skill}} --}}
                                    - Cẩn thận trong công việc
                                    - Tham gia làm việc nhóm tốt
                                    - Làm việc có trách nhiệm và hết mình trong công việc
                                    - Kỹ năng tổ chức
                                </div>
                            </div>
                        </div>
                        
                  </div>
                </div>
              </div>
            </div>
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-sm btn-secondary mr-0" >In</button>
        <button type="button" class="btn btn-sm btn-success" >Xác nhận</button>
        <button type="button" class="btn btn-sm btn-primary">Xem hồ sơ chi tiết</button>
    </div>
</div>