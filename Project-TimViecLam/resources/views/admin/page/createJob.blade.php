@extends('layouts.admin')

@section('title', 'Thêm mới tin | ')

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
                    <form method="POST" action="{{ route('employer.createJobPost')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name_job">Chức danh</label>
                                    <input name="name_job" value="{{ old('name_job') }}"
                                        type="text" 
                                        class="form-control  @error('name_job') is-invalid @enderror"
                                        placeholder="VD: Nhân viên kinh doanh, nhân viên bán hàng" />
                                       
                                        @error('name_job')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="job_code">Mã số</label>
                                        <input name="job_code" 
                                            value="{{ old('job_code') }}" 
                                            type="text"
                                            class="form-control  @error('job_code') is-invalid @enderror">

                                            @error('job_code')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="amount">Số lượng tuyển</label>
                                        <input id="amount" name="amount" value="{{ old('amount') }}"  type="number"
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
                                        <label for="grade_id">Cấp bậc</label>
                                        <select class="selectpicker form-control  @error('grade_id') is-invalid @enderror"  
                                            data-size="8" name="grade_id"
                                            title="Chọn cấp bậc">
                                            @foreach ($grade as $item)
                                                <option value="{{ $item->id }}" {{ old('grade_id')== $item->id ? "Selected" :""}}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('grade_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="type_job_id">Loại hình công việc</label>
                                        <select class="selectpicker form-control @error('type_job_id') is-invalid @enderror" 
                                            name="type_job_id" data-size="8" 
                                            title="Chọn loại công việc">
                                            @foreach ($type_job as $item)
                                                <option value="{{ $item->id }}" {{ old('type_job_id')== $item->id ? "Selected" :""}}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_job_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="salary_id">Mức lương</label>
                                        <select class="selectpicker form-control @error('salary_id') is-invalid @enderror"
                                            name="salary_id" 
                                            data-size="8"
                                            value="" title="Chọn mức lương">
                                            @foreach ($salary as $item)
                                                <option value="{{ $item->id }}" {{ old('salary_id') == $item->id ? 'Selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('salary_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="career_id">Nghành nghề</label>
                                        <select class="selectpicker form-control @error('career_id') is-invalid @enderror" 
                                            name="career_id"
                                            data-live-search="true" 
                                            data-size="8" 
                                            value=""
                                            title="Chọn loại công việc">
                                            @foreach ($careers as $item)
                                                <option value="{{ $item->id }}" {{ old('career_id') == $item->id ? 'Selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('career_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa điểm làm việc <span class="text-danger">*</span></label>
                                    <input id="address" 
                                        name="address" 
                                        value="{{ (old('address')!= null) ? old('address') : $info_company['address'] }}" 
                                        type="text"
                                        class="form-control @error('address') is-invalid @enderror"/>
                                        @error('address')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="city">Tỉnh/thành phố<span class="text-danger">*</span></label>
                                        <select class="selectpicker form-control  @error('city') is-invalid @enderror" 
                                            name="city"
                                            data-live-search="true" 
                                            data-size="8" 
                                            value="{{ $info_company['city'] }}"
                                            title="Chọn tỉnh/thành phố.">
                                            @foreach ($city as $item)
                                                <option value="{{ $item->id }}" {{ old('city') == $item->id ? 'Selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="description">Mô tả công việc <span class="text-danger"><i class="bx bx-message-square-error" data-toggle="tooltip" data-placement="top" title="Mô tả công việc"></i></span></label>
                                    <textarea class="form-control  @error('description') is-invalid @enderror" 
                                        name="description"
                                        rows="7">{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="benefits">Quyền lợi được hưởng <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control  @error('benefits') is-invalid @enderror" 
                                        name="benefits" 
                                        rows="8">{{ old('benefits') }}</textarea>
                                        @error('benefits')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                            <div class="card-title">YÊU CẦU CÔNG VIỆC</div>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="experience_id">Kinh nghiệm</label>
                                        <select class="selectpicker form-control  @error('experience_id') is-invalid @enderror" 
                                            name="experience_id" 
                                            data-size="5"
                                            title="Chọn cấp bậc">
                                            @foreach ($experience as $item)
                                                <option value="{{ $item->id }}"  {{ old('experience_id') == $item->id ? 'Selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('experience_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="degree_id">Bằng cấp</label>
                                        <select class="selectpicker form-control @error('degree_id') is-invalid @enderror" 
                                            name="degree_id" data-size="5"
                                            value="{{ $info_company['city'] }}" 
                                            title="Chọn bằng cấp">
                                            @foreach ($degree as $item)
                                                <option value="{{ $item->id }}" {{ old('degree_id') == $item->id ? 'Selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('degree_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="deadline">Hạn nộp hồ sơ (Tối đa 90 ngày)</label> 
                                        <input class="form-control datepicker @error('deadline') is-invalid @enderror"  
                                        name="deadline"
                                        value="{{ old('deadline') }}"
                                        data-date-start-date="+1d" 
                                        data-date-end-date="+3m"
                                        data-date-title="Hạn nộp tối đa 90 ngày"
                                        placeholder="Tối đa 90 ngày">
                                        @error('deadline')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-3">
                                        <label for="sex_requirements">Giới tính</label>
                                        <select class="selectpicker form-control @error('sex_requirements') is-invalid @enderror" 
                                            name="sex_requirements" 
                                            data-size="5" title="Chọn cấp bậc">
                                            <option value="0" {{old('sex_requirements') == 0 ? "Selected" :""}}>Không yêu cầu</option>
                                            <option value="1" {{old('sex_requirements') == 1 ? "Selected" :""}}>Nam</option>
                                            <option value="2" {{old('sex_requirements') == 2 ? "Selected" :""}}>Nữ</option>
                                        </select>
                                        @error('sex_requirements')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mt-2 col-sm-12 col-lg-6">
                                        <label for="job_requirements">Yêu cầu công việc <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('job_requirements') is-invalid @enderror" 
                                            name="job_requirements" id="job_requirements"
                                            rows="5">{{ old('job_requirements') }}</textarea>
                                        @error('job_requirements')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2 col-sm-12 col-lg-6">
                                        <label for="profile_request">Yêu cầu hồ sơ <span class="text-danger">*</span></label>
                                        <textarea class="form-control  @error('profile_request') is-invalid @enderror" 
                                            name="profile_request"
                                            rows="5">
{{ old('profile_request')!=null ? old('profile_request') :'- Đơn xin việc.
- Sơ yếu lý lịch.
- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.
- Các bằng cấp có liên quan.' }}</textarea>
                                        @error('profile_request')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                            <label for="name_contact">Người liên hệ</label>
                                            <input name="name_contact" 
                                                value="{{ (old('name_contact')!= null) ? old('name_contact') : $info_company['name_contact'] }}" 
                                                type="text"
                                                class="form-control @error('name_contact') is-invalid @enderror">
                                                @error('name_contact')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="phone_contact">Số điện thoại liên hệ</label>
                                            <input  name="phone_contact" 
                                                value="{{ (old('phone_contact')!= null) ? old('phone_contact') : $info_company['phone_contact'] }}" 
                                                type="text"
                                                class="form-control  @error('phone_contact') is-invalid @enderror">
                                                @error('phone_contact')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="address_contact">Địa chỉ người liên hệ</label>
                                            <input name="address_contact" value="{{ (old('address_contact')!= null) ? old('address_contact') : $info_company['address_contact'] }}"
                                                type="text" class="form-control  @error('address_contact') is-invalid @enderror">
                                                @error('address_contact')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="email_contact">Email liên hệ</label>
                                            <input name="email_contact" value="{{ (old('email_contact')!= null) ? old('email_contact') : $info_company['email_contact'] }}" type="text"
                                                class="form-control @error('email_contact') is-invalid @enderror">
                                                @error('email_contact')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">GÓI DỊCH VỤ</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="personnel_size">Dịch vụ cho tin đăng</label>
                                            <input value="" type="text"
                                                class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4 class="card-title">GÓI DỊCH VỤ</h4>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="personnel_size">Dịch vụ cho tin đăng</label>
                                            <input value="" type="text"
                                                class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('employer.dashboard') }}" class="btn btn-danger mt-3 waves-effect waves-light m-auto">Hủy bỏ</a>
                        <button type="submit" class="btn btn-primary mt-3 waves-effect waves-light m-auto">Đăng tuyển dụng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection