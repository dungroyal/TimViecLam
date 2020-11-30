@extends('layouts.admin')

@section('title', 'Tài khoản| ')

@section('header')
@include('job_seeker.element.header')
@endsection

@section('sidebar')
@include('job_seeker.element.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Cập nhật thông tin</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang cá nhân</a></li>
                        <li class="breadcrumb-item active">Thông tin cá nhân</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Thông tin cá nhân</h4>
                <div class="row">         
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-email-input">Họ tên</label>
                            <input type="text" class="form-control" id="formrow-email-input">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-email-input">Địa chỉ email</label>
                            <input type="email" class="form-control" id="formrow-email-input">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Số điện thoại</label>
                            <input type="text" class="form-control" id="formrow-password-input">
                        </div>
                    </div>
                </div>
                <div class="row">         
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-email-input">Ngày sinh</label>
                            <input type="date" class="form-control" id="formrow-email-input">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-email-input">Địa chỉ</label>
                            <input type="email" class="form-control" id="formrow-email-input">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="formrow-password-input">Tỉnh/thành phố</label>
                            <select class="selectpicker form-control  @error('city') is-invalid @enderror" 
                                name="city"
                                data-live-search="true" 
                                data-size="5" 
                                title="Chọn tỉnh/thành phố.">
                                @foreach (App\Models\City::all() as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">         
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="d-block mb-3">Giới tính:</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Male" name="sex" class="custom-control-input">
                                <label class="custom-control-label" for="Male">Nam</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Female" name="sex" class="custom-control-input">
                                <label class="custom-control-label" for="Female">Nữ</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="d-block mb-3">Tình trạng hôn nhân:</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="alone" name="marriage" class="custom-control-input">
                                <label class="custom-control-label" for="alone">Độc thân</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="married" name="marriage" class="custom-control-input">
                                <label class="custom-control-label" for="married">Đã kết hôn</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <a name="" class="btn btn-info ml-3" href="#" >Hủy bỏ</a>
                    <a name="" class="btn btn-primary ml-2" href="#" >Cập nhật</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
