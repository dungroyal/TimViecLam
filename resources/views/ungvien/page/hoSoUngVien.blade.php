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
<section class="col-lg-12">
    <div class="col-lg-6 mt-4  float-left">
        <div class="card">
            <div class="card-header">
                <strong>Thông tin hồ sơ</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quận huyện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quận huyện</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Tỉnh, thành phố</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn tỉnh, thành phố</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quốc tịch</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quốc tịch</option>
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Độc thân
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Đã kết hôn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-4  float-left">
        <div class="card">
            <div class="card-header">
                <strong>Thông tin cá nhân</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quận huyện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quận huyện</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Tỉnh, thành phố</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn tỉnh, thành phố</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quốc tịch</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quốc tịch</option>
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Độc thân
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Đã kết hôn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-4  float-left">
        <div class="card">
            <div class="card-header">
                <strong>Thông tin hồ sơ</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quận huyện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quận huyện</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Tỉnh, thành phố</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn tỉnh, thành phố</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quốc tịch</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quốc tịch</option>
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Độc thân
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Đã kết hôn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-4  float-left">
        <div class="card">
            <div class="card-header">
                <strong>Thông tin cá nhân</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Họ và tên</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quận huyện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quận huyện</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Tỉnh, thành phố</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn tỉnh, thành phố</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quốc tịch</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="select" id="select" class="form-control">
                                <option value="0">Chọn quốc tịch</option>
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
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
                        <div class="col col-md-9">
                            <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Độc thân
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Đã kết hôn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Ảnh đại diện</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="file-input" class="form-control-file">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
