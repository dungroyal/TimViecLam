@extends('ungvien.main')
@section('content')
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Hồ sơ ứng viên</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container b-t-30 b-r-30 b-l-30 bg-white">
        <div class="row">
            <div class="col-3 mb-5">
                <ul class=" nav nav-pills flex-column b-5" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="ttcn-tab" data-toggle="tab" href="#ttcn" role="tab" aria-controls="ttcn" aria-selected="true"><i class="fa fa-user" aria-hidden="true"></i> Thông tin cá nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tths-tab" data-toggle="tab" href="#tths" role="tab" aria-controls="tths" aria-selected="false"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin hồ sơ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hvbc-tab" data-toggle="tab" href="#hvbc" role="tab" aria-controls="hvbc" aria-selected="false"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Học vấn bằng cấp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="knlv-tab" data-toggle="tab" href="#knlv" role="tab" aria-controls="knlv" aria-selected="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Kinh nghiệm làm việc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kn-tab" data-toggle="tab" href="#kn" role="tab" aria-controls="kn" aria-selected="false"><i class="fa fa-hand-rock-o" aria-hidden="true"></i> Kỹ năng</a>
                    </li>
                </ul>
            </div>
                <div class="col-9">
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ttcn" role="tabpanel" aria-labelledby="ttcn-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-user" aria-hidden="true"></i> Thông tin cá nhân</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Họ và tên" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Số điện thoại</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Số điện thoại" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Ngày sinh</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="date" id="text-input" name="text-input" placeholder="Số điện thoại" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Địa chỉ Email</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="email" id="email-input" name="email-input" placeholder="Email" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Địa chỉ</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="email" id="email-input" name="email-input" placeholder="Địa chỉ" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Quận, huyện</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Tỉnh, thành phố</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Quốc tịch</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Giới tính</label>
                                        </div>
                                        <div class="col col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label m-r-10">
                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Nam  
                                                </label>
                                                <label for="inline-radio2" class="form-check-label ">
                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Nữ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Tình trạng hôn nhân</label>
                                        </div>
                                        <div class="col col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio3" class="form-check-label m-r-10">
                                                    <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Độc thân  
                                                </label>
                                                <label for="inline-radio4" class="form-check-label ">
                                                    <input type="radio" id="inline-radio5" name="inline-radios" value="option4" class="form-check-input">Đã kết hôn
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tths" role="tabpanel" aria-labelledby="tths-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin hồ sơ</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Vị trí ứng tuyển</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="VD: Nhân viên kinh doanh" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Trình độ học vấn</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Trình độ học vấn</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Số năm kinh nghiệm</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Số năm kinh nghiệm</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Cấp bậc</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Cấp bậc</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Mục tiêu nghề nghiệp</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                                </button>
                            </div>
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="hvbc" role="tabpanel" aria-labelledby="hvbc-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Học vấn bằng cấp</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Trường, trung tâm đào tạo</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Trường, cơ sở, trung tâm đào tạo" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Khoa đào tạo</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Khoa đào tạo" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Chuyên ngành đào tạo</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Chuyên ngành đào tạo" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Xếp loại</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <select name="select" id="select" class="form-control">
                                                <option value="0">Xếp loại</option>
                                                <option value="1">Yếu</option>
                                                <option value="2">Trung bình</option>
                                                <option value="3">Khá</option>
                                                <option value="3">Giỏi</option>
                                                <option value="3">Xuất sắc</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Thông tin bổ sung</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Thông tin bổ sung" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                                </button>
                            </div>
                        </div>    
                    </div>

                    <div class="tab-pane fade" id="knlv" role="tabpanel" aria-labelledby="knlv-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-briefcase" aria-hidden="true"></i> Kinh nghiệm làm việc</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Chức danh / vị trí</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Chức danh / vị trí" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Công ty</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Công ty" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Mô tả công việc</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Thông tin bổ sung" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                                </button>
                            </div>
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="kn" role="tabpanel" aria-labelledby="kn-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="fa fa-briefcase" aria-hidden="true"></i> Kinh nghiệm làm việc</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Kỹ năng chuyên môn</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Kỹ năng chuyên môn" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                                </button>
                            </div>
                        </div>    
                    </div>

                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>
</div>
</section>

@endsection
