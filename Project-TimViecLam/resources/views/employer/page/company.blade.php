@extends('layouts.admin')

@section('title', 'Hồ sơ | ')

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
                                    <input id="email" value="{{ $employer->email }}" type="text" class="form-control"
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
                                        value="{{ $company->name_company }}" type="text" class="form-control"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ công ty <span class="text-danger">*</span></label>
                                    <input id="address" name="address" value="{{ $company->address }}" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="city">Tỉnh/thành phố<span class="text-danger">*</span></label>
                                        <select class="selectpicker form-control" 
                                            name="operation"
                                            data-live-search="true" 
                                            data-size="5"
                                            value="{{ $company->city }}"
                                            title="Chọn tỉnh thành phố">
                                            @foreach ($city as $item)
                                                <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                            @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="personnel_size">Quy mô nhân sự</label>
                                    <input id="personnel_size" value="{{ $company->personnel_size }}" type="text" class="form-control"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 text-center">
                                <h4 class="card-title">Logo công ty</h4>
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload" class="imageUpload"> <i class="bx bxs-cloud-upload"></i></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                @if ($company->logo != null)
                                                    style="background-image: url({{ asset('images/'.$company->logo) }});"
                                                @else
                                                    style="background-image: url('https://ui-avatars.com/api/?size=250&bold=true&background=0091cf&color=fffff&name={{ $company->name_company }}');"
                                                @endif
                                            ></div>
                                        </div>
                                    </div>
                                    <hr>
                                <h4 class="card-title mt-4">Giấy phép kinh doanh</h4>
                                {{-- <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"> <i class="bx bxs-cloud-upload"></i></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="operation">Lĩnh vực hoạt động <span class="text-danger">*</span></label>
                                    <select class="selectpicker form-control" 
                                            name="operation"
                                            multiple 
                                            data-live-search="true" 
                                            data-size="5"
                                            value="{{ $company->career }}"
                                            title="Chọn lĩnh vực hoạt động">

                                            @foreach ($careers as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                    </select>

                                    <div class="form-group mt-2">
                                        <label for="productdesc">Mô tả sơ lược về công ty <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" value="{{ $company->description }}" id="productdesc" rows="5"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Website</label>
                                                        <input id="personnel_size" value="{{ $company->website }}" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Số điện thoại công ty</label>
                                                        <input id="personnel_size" value="{{ $company->phone }}" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Fax công ty</label>
                                                        <input id="personnel_size" value="{{ $company->fax }}" type="text"
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
                                                    <input id="personnel_size" value="{{ $company->address_contact }}" type="text"
                                                        class="form-control">
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
                                <button type="submit" class="btn btn-primary mt-3 waves-effect waves-light m-auto">Cập nhật thông tin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
