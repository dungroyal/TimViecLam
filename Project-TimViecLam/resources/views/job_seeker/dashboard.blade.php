@extends('layouts.admin')

@section('title', 'Trang nhà tuyển dụng | ')

@section('header')
    @include('job_seeker.element.header')
@endsection

@section('sidebar')
    @include('job_seeker.element.sidebar')
@endsection

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản lý chung</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                            <li class="breadcrumb-item active">Quản lý chung</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <a href="" class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">Việc làm phù hợp</p>
                                        <h5 class="mb-0">
                                            {{App\Models\Company::all()->count()}}
                                        </h5>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="bx bxs-store-alt font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">Lượt xem hồ sơ</p>
                                        <h5 class="mb-0">
                                            <i class="fas fa-user-tie mr-2" title="Nhà tuyển dụng"></i>{{App\Employer::all()->count()}} |
                                             <i class="fas fa-user mr-2" title="Người tìm việc"></i> {{App\JobSeeker::all()->count()}}
                                        </h5>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="fas fa-users font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href=""class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">Việc làm đã lưu</p>
                                        <h5 class="mb-0">{{App\Models\Job::all()->count()}}</h5>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="fas fa-briefcase font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href=""class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">Việc làm ứng tuyển</p>
                                        <h5 class="mb-0">{{App\JobSeeker::all()->count()}}</h5>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="fas fa-id-card font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end row -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Việc làm đã ứng tuyển mới nhất</h4>
                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">2</h5>
                                <p class="text-muted text-truncate">Không được duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">5</h5>
                                <p class="text-muted text-truncate">Chời duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">1</h5>
                                <p class="text-muted text-truncate">Đã duyệt</p>
                            </div>
                        </div>
                        <canvas id="lineChart" height="150"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Việc làm đã lưu mới nhất</h4>
                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0">2</h5>
                                <p class="text-muted text-truncate">Không được duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">5</h5>
                                <p class="text-muted text-truncate">Chời duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">1</h5>
                                <p class="text-muted text-truncate">Đã duyệt</p>
                            </div>
                        </div>
                        <canvas id="Pie" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
