@extends('layouts.admin')

@section('title', 'Thêm công việc | ')

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
                <h4 class="mb-0 font-size-18">Thêm công việc</h4>
                <div class="page-title-right d-none d-lg-block">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Thêm công việc</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Thông tin công việc</div>
                    <form method="POST">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name_job">Chức danh</label>
                                    <input id="nameJob" value="" 
                                        type="text" 
                                        class="form-control  @error('nameJob') is-invalid @enderror"
                                        placeholder="VD: Nhân viên kinh doanh, nhân viên bán hàng" />
                                       
                                        @error('nameJob')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="idJob">Mã số</label>
                                        <input id="idJob" name="idJob" value="" type="text"
                                            class="form-control  @error('idJob') is-invalid @enderror">

                                            @error('idJob')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="amount">Số lượng tuyển</label>
                                        <input id="amount" name="amount" value="" type="number"
                                            class="form-control @error('amount') is-invalid @enderror">
                                        @error('amount')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="name-company">Cấp bậc</label>
                                        <select class="selectpicker form-control" name="operation"
                                            data-live-search="true" data-size="5" value="{{ $company->city }}"
                                            title="Chọn cấp bậc">
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
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="name-company">Loại hình công việc</label>
                                        <select class="selectpicker form-control" name="operation"
                                            data-live-search="true" data-size="5" value="{{ $company->city }}"
                                            title="Chọn loại công việc">
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
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="name-company">Mức lương</label>
                                        <select class="selectpicker form-control" name="operation" data-size="5"
                                            value="{{ $company->city }}" title="Chọn cấp bậc">
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
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="name-company">Nghành nghề</label>
                                        <select class="selectpicker form-control" name="operation"
                                            data-live-search="true" data-size="5" value="{{ $company->city }}"
                                            title="Chọn loại công việc" multiple>
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
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa điểm làm việc <span class="text-danger">*</span></label>
                                    <input id="address" name="address" value="{{ $company->address }}" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="city">Tỉnh/thành phố<span class="text-danger">*</span></label>
                                        <select class="selectpicker form-control" name="operation"
                                            data-live-search="true" data-size="5" value="{{ $company->city }}"
                                            title="Chọn tỉnh/thành phố.">
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
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="productdesc">Mô tả công việc <span class="text-danger">*</span></label>
                                    <textarea class="form-control" value="{{ $company->description }}" id="productdesc"
                                        rows="7"></textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="productdesc">Quyền lợi được hưởng <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" value="{{ $company->description }}" id="productdesc"
                                        rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                            <div class="card-title">YÊU CẦU CÔNG VIỆC</div>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="name-company">Kinh nghiệm</label>
                                        <select class="selectpicker form-control" name="operation" data-size="5"
                                            value="{{ $company->city }}" title="Chọn cấp bậc">
                                            <option value="CA">Không cần kinh nghiệm</option>
                                            <option value="NV">1 Năm</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="name-company">Bằng cấp</label>
                                        <select class="selectpicker form-control" name="operation" data-size="5"
                                            value="{{ $company->city }}" title="Chọn cấp bậc">
                                            <option value="CA">Thực tập sinh</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="name-company">Hạn nộp hồ sơ (Tối đa 90 ngày)</label> 
                                        <input class="form-control datepicker"  
                                        value=""
                                        data-date-start-date="+1d" 
                                        data-date-end-date="+3m"
                                        data-date-title="Hạn nộp tối đa 90 ngày"
                                        placeholder="Tối đa 90 ngày">
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="name-company">Giới tính</label>
                                        <select class="selectpicker form-control" name="operation" data-size="5"
                                            value="{{ $company->city }}" title="Chọn cấp bậc">
                                            <option value="0">Không yêu cầu</option>
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mt-2 col-sm-12 col-lg-6">
                                        <label for="productdesc">Yêu cầu công việc <span class="text-danger">*</span></label>
                                        <textarea class="form-control" value="{{ $company->description }}" id="productdesc"
                                            rows="5"></textarea>
                                    </div>
                                    <div class="form-group mt-2 col-sm-12 col-lg-6">
                                        <label for="productdesc">Yêu cầu hồ sơ <span class="text-danger">*</span></label>
                                        <textarea class="form-control" value="{{ $company->description }}" id="productdesc"
                                            rows="5">
- Đơn xin việc.
- Sơ yếu lý lịch.
- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.
- Các bằng cấp có liên quan.
                                        
                                        </textarea>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title">Thông tin liên hệ</h4>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="personnel_size">Người liên hệ</label>
                                            <input id="personnel_size" value="{{ $company->name_contact }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="personnel_size">Số điện thoại liên hệ</label>
                                            <input id="personnel_size" value="{{ $company->phone_contact }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="personnel_size">Địa chỉ người liên hệ</label>
                                            <input id="personnel_size" value="{{ $company->address_contact }}"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="personnel_size">Email liên hệ</label>
                                            <input id="personnel_size" value="{{ $company->email_contact }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title">GÓI DỊCH VỤ</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="personnel_size">Dịch vụ cho tin đăng</label>
                                            <input id="personnel_size" value="" type="text"
                                                class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="reset" class="btn btn-danger mt-3 waves-effect waves-light m-auto">Hủy bỏ</button>
                        <button type="submit" class="btn btn-primary mt-3 waves-effect waves-light m-auto">Đăng tuyển dụng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection