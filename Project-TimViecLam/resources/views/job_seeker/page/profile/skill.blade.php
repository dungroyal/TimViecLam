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
                    <h4 class="card-title">Kỹ năng</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="formrow-password-input">Các kỹ năng chuyên môn</label>
                                <textarea class="form-control" id="productdesc" placeholder="Nêu rõ các kỹ năng chuyên môn trong công việc của bạn. Ví dụ: Kỹ năng bán hàng, design web, biên tập, tổ chức sự kiện..." rows="5"></textarea>
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