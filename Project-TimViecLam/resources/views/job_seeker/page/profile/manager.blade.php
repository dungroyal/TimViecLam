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
                <h4 class="mb-0 font-size-18">Quản lý hồ sơ</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang cá nhân</a></li>
                        <li class="breadcrumb-item active">Quản lý hồ sơ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">Hồ sơ online</h4>
                <hr>
                <div class="row px-2">      
                    <div class="col-sm-12 col-lg-8">
                        Phù hợp với các hồ sơ không có file đính kèm, muốn nhập chi tiết thông tin hồ sơ của mình để hiển thị trên Timvieclam.xyz
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-person-lines-fill text-black-50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                    </div>
                    
                </div>
                <hr>
                <div class="row mt-3">
                    <a name="" class="btn btn-primary ml-2 m-auto" href="{{ route('job-seeker.profile.step1') }}" >
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square mb-0 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                        Cập nhật hồ sơ</a>
                </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title text-center">Hồ sơ đính kèm</h4>
                <hr>
                <div class="row px-2">      
                    <div class="col-sm-12 col-lg-8">
                        Phù hợp với các ứng viên đã có hồ sơ đính kèm, muốn tạo hồ sơ để ứng tuyển nhanh vào các công việc trên Timvieclam.xyz
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <svg width="100%" height="auto" viewBox="0 0 16 16" class="bi bi-file-earmark-person text-black-50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                            <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path d="M8 12c4 0 5 1.755 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12z"/>
                          </svg>
                    </div>
                    
                </div>
                <hr>
                <div class="row mt-3">
                    <a name="" class="btn btn-primary ml-2 m-auto" href="{{ route('job-seeker.profile_attached') }}" >
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square mb-0 mr-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                        Cập nhật hồ sơ</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
