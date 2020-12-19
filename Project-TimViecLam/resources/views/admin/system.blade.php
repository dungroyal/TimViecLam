@extends('layouts.admin')

@section('title', 'Quản trị TVL | ')

@section('header')
    @include('admin.element.header')
@endsection

@section('sidebar')
    @include('admin.element.sidebar')
@endsection

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Cấu hình hệ thống</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Cấu hình hệ thống</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Hệ thống</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Tên trang Website</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Copyright © 2020 Timvieclam.xyz." id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Slogan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Tìm việc khó đã có TìmViệcLàm.xyz" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Mô tả Website:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Website tìm việc làm" id="example-email-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Keyword SEO:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Tìm việc nhanh, Tìm việc Hồ Chí Minh" id="example-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="example-url-input" class="col-md-2 col-form-label">Footer Copyright:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Copyright © 2020 Timvieclam.xyz." id="example-url-input">
                            </div>
                        </div>

                        <h4 class="card-title mb-3">Hệ thống</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="doanquocdung55@gmail.com" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Số điện thoại</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="0398 05 05 20" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Địa chỉ:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="Gò Vấp, Hồ Chí Minh" id="example-email-input">
                            </div>
                        </div>


                        <h4 class="card-title mb-3">Mạng xã hội</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">URL Facebook</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="https://www.facebook.com/me" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">URL Google+</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="https://www.google.com.vn/?hl=vi." id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">URL Twitter</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="https://twitter.com/QuocDungRoyal" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary btn-sm mr-3 mt-3 ml-auto">Lưu thay đổi</button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
