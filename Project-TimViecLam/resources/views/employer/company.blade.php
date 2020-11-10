@extends('layouts.admin')

@section('title', 'Nhà tuyển dụng | ')

@section('header')
@include('employer.element.header')
@endsection

@section('sidebar')
@include('employer.element.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Cập nhật thông tin</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Cập nhật thông tin chung</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Thông tin tài khoản</h4>
                    <form>
                        <div class="row">
                            <div class="col-sm-6 col-lg-8">
                                <div class="form-group">
                                    <label for="email">Địa chỉ email</label>
                                    <input id="email" value="doanquocdung55@gmail.com" type="text" class="form-control"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <a href="" class="font-weight-bold"> <i class="bx bx-lock-open-alt"></i> Đổi mật
                                        khẩu</a>
                                </div>


                                <hr>
                                <h4 class="card-title">Thông tin công ty</h4>
                                <div class="form-group">
                                    <label for="name-company">Tên công ty</label>
                                    <input id="name-company" name="name-company"
                                        value="Công ty TNHH TM-DV Công Nghệ Thành Nhân" type="text" class="form-control"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ công ty <span class="text-danger">*</span></label>
                                    <input id="address" name="address" value="34D, Đường số 12" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="city">Tỉnh/thành phố<span class="text-danger">*</span></label>
                                        <select class="form-control select2">
                                            <option value="AK">Hồ Chí Minh </option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="personnel_size">Quy mô nhân sự</label>
                                    <input id="personnel_size" value="50 Người" type="text" class="form-control"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-center">
                                <h4 class="card-title mb-3">Logo công ty</h4>
                                    <div class="fallback mb-5">
                                        <input name="file" type="file" multiple="">
                                    </div>
                                <h4 class="card-title mb-3">Giấy phép kinh doanh</h4>
                                    <div class="fallback mb-5">
                                        <input name="file" type="file" multiple="">
                                    </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="operation">Lĩnh vực hoạt động <span class="text-danger">*</span></label>
                                    <select class="select2 form-control select2-multiple" name="operation"
                                        id="operation" multiple="multiple" data-placeholder="Choose ...">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>

                                    <div class="form-group mt-2">
                                        <label for="productdesc">Mô tả sơ lược về công ty <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Website</label>
                                                        <input id="personnel_size" value="" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Số điện thoại công ty</label>
                                                        <input id="personnel_size" value="" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Fax công ty</label>
                                                        <input id="personnel_size" value="" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-12">

                                        <h4 class="card-title">Thông tin liên hệ</h4>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="personnel_size">Quy mô nhân sự</label>
                                                    <input id="personnel_size" value="50 Người" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="personnel_size">Quy mô nhân sự</label>
                                                    <input id="personnel_size" value="50 Người" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="personnel_size">Quy mô nhân sự</label>
                                                    <input id="personnel_size" value="50 Người" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="card-title">Thông tin liên hệ</h4>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Người liên hệ</label>
                                                    <input id="personnel_size" value="" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Số điện thoại liên hệ</label>
                                                    <input id="personnel_size" value="" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Địa chỉ người liên hệ</label>
                                                    <input id="personnel_size" value="" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Email liên hệ</label>
                                                    <input id="personnel_size" value="" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 waves-effect waves-light m-auto">Cập
                                    nhật thông tin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
