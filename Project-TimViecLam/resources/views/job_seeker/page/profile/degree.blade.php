@extends('layouts.admin')

@section('title', 'Quản lý hồ sơ| ')

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
                    <h4 class="mb-0 font-size-18">Cập nhật hồ sơ</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý hồ sơ</a></li>
                            <li class="breadcrumb-item active">Cập nhật hồ sơ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        @include('job_seeker.element.headerProfile')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Học vấn - Bằng cấp</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Trường, cơ sở, trung tâm đào tạo</label>
                                <input type="text" class="form-control" id="formrow-email-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Khoa đào tạo</label>
                                <input type="text" class="form-control" id="formrow-password-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="formrow-password-input">Tên bằng cấp chứng chỉ</label>
                                <input type="text" class="form-control" id="formrow-password-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Chuyên ngành đào tạo</label>
                                <input type="text" class="form-control" id="formrow-password-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-password-input">Xếp loại</label>
                                <input type="text" class="form-control" id="formrow-password-input">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="formrow-password-input">Thông tin bổ sung</label>
                                <textarea class="form-control" id="productdesc" placeholder="Mô tả, giới thiệu về định hướng công việc của bản thân trong tương lai ngắn hạn hoặc dài hạn." rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3 float-right">
                        <a name="" class="btn btn-primary mr-3" href="#" >Cập nhật</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection