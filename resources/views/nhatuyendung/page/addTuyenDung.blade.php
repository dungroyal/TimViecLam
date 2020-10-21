@extends('nhatuyendung.main')
@section('content')
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Thêm tin tuyển dụng</h2>
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
                        <a class="nav-link active" id="ttcn-tab" data-toggle="tab" href="#ttcn" role="tab" aria-controls="ttcn" aria-selected="true">Thôn tin công việc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tths-tab" data-toggle="tab" href="#tths" role="tab" aria-controls="tths" aria-selected="false">Yêu cầu công việc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hvbc-tab" data-toggle="tab" href="#hvbc" role="tab" aria-controls="hvbc" aria-selected="false">Thông tin liên hệ</a>
                    </li>
                </ul>
            </div>
                <div class="col-9">
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ttcn" role="tabpanel" aria-labelledby="ttcn-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong>Thông tin công việc</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Tên công việc</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="text" id="text-input" name="text-input" placeholder="Tên công việc" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Số lượng</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="number" id="text-input" name="text-input" placeholder="Số lượng" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Cấp bậc</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="email" id="email-input" name="email-input" placeholder="Cấp bậc" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Loại công việc</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="email" id="email-input" name="email-input" placeholder="Cấp bậc" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Mức lương</label>
                                        </div>
                                        <div class="col-12 col col-md-9">
                                            <input type="email" id="email-input" name="email-input" placeholder="Cấp bậc" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Mô tả công việc</label>
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

                    <div class="tab-pane fade" id="tths" role="tabpanel" aria-labelledby="tths-tab">
                        <div class="card">
                            <div class="card-header">
                                <strong>Yêu cầu công việc</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                    

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
                                <strong>Thông tin liên hệ</strong>
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
            </div>
            <!-- /.col-md-8 -->
        </div>
</div>
</section>

@endsection
