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
                                        <p class="text-muted font-weight-bold">Số lượng công ty</p>
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
                                        <p class="text-muted font-weight-bold">Tài khoản</p>
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
                                        <p class="text-muted font-weight-bold">Công việc</p>
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
                                        <p class="text-muted font-weight-bold">Hồ sơ ứng viên</p>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Hồ sơ ứng viên</h4>
                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0" id="profileWaitingAccept">{{App\Models\Profiles::where('status',0)->count()}}</h5>
                                <p class="text-muted text-truncate">Chời duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0" id="profileAccepted">2{{App\Models\Profiles::where('status',1)->count()}}</h5>
                                <p class="text-muted text-truncate">Đã duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0" id="profileNotAccept">{{App\Models\Profiles::where('status',2)->count()}}</h5>
                                <p class="text-muted text-truncate">Không được duyệt</p>
                            </div>
                        </div>
                        <canvas id="lineChart" height="150"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Hồ sơ công ty</h4>
                        <div class="row text-center">
                            <div class="col-4">
                                <h5 class="mb-0" id="companyWaitingAccept">{{App\Models\Company::where('status',0)->count()}}</h5>
                                <p class="text-muted text-truncate">Chời duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0" id="companyAccepted">{{App\Models\Company::where('status',1)->count()}}</h5>
                                <p class="text-muted text-truncate">Đã duyệt</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0" id="companyNotAccept">{{App\Models\Company::where('status',2)->count()}}</h5>
                                <p class="text-muted text-truncate">Không được duyệt</p>
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
    var ctx = document.getElementById('lineChart');
        var profileAccepted = $('#profileAccepted').html();
        var profileWaitingAccept = $('#profileWaitingAccept').html();
        var profileNotAccept = $('#profileNotAccept').html();
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Chời duyệt', 'Đã duyệt', 'Không được duyệt'],
                datasets: [{
                    label: 'Tổng quan',
                    data: [profileWaitingAccept, profileAccepted, profileNotAccept],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var Pie = document.getElementById('Pie');
        var companyAccepted = $('#companyAccepted').html();
        var companyWaitingAccept = $('#companyWaitingAccept').html();
        var companyNotAccept = $('#companyNotAccept').html();
        var myDoughnutChart = new Chart(Pie, {
            type: 'doughnut',
            data: {
                labels: [ "Chời duyệt", "Đã duyệt","Không được duyệt"],
                datasets: [{
                data: [companyWaitingAccept, companyAccepted, companyNotAccept],
                backgroundColor: ["#556ee6", "#ebeff2"],
                hoverBackgroundColor: ["#556ee6", "#ebeff2"],
                hoverBorderColor: "#fff"
            }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endpush
