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
                    <h4 class="card-title">Thông hồ sơ</h4>
                    <div class="row">         
                        <div class="col-sm-12 col-lg-2">
                            <div class="avatar-upload-jsk py-2">
                                <div class="avatar-edit">
                                    <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                </div>
                                <div class="avatar-preview-jsk">
                                    <label for="imageUpload" class="imageUpload"> <i class="bx bxs-cloud-upload"></i></label>
                                    <div id="imagePreview" style="background-image: url('https://ui-avatars.com/api/?size=250&bold=true&background=0091cf&color=fffff&name=DoanQuocDung');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-email-input">Vị trí/việc làm cần ứng tuyển:</label>
                                        <input type="email" class="form-control" id="formrow-email-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Trình độ học vấn:</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Số năm kinh nghiệm:</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Nơi làm việc</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Ngành nghề</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Loại hình công việc</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Cấp bậc</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Mức lương</label>
                                        <input type="text" class="form-control" id="formrow-password-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Mô tả mục tiêu nghề nghiệp</label>
                                        <textarea class="form-control" id="productdesc" placeholder="Mô tả, giới thiệu về định hướng công việc của bản thân trong tương lai ngắn hạn hoặc dài hạn." rows="5"></textarea>
                                    </div>
                                </div>
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