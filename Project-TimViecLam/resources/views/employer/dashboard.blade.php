@extends('layouts.admin')

@section('title', 'Trang nhà tuyển dụng | ')

@section('header')
    @include('employer.element.header')
@endsection

@section('sidebar')
    @include('employer.element.sidebar')
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
        @if ($info_company->status==0)
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-circle text-warning mr-1"></i> {{ $info_company->name_company }}!</strong> Đang chờ duyệt!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                </div>
            </div>
        @elseif($info_company->status==2)
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-danger" role="alert">
                        <h6 class="alert-heading"><i class="fas fa-times-circle text-danger mr-1"></i><strong>{{ $info_company->name_company }}!</strong> của bạn không được duyệt!</h6>
                        <hr>
                        <p class="mb-0"><strong>Lý do: </strong> {{ $info_company->note }}.</p>
                        <a class="btn btn-primary btn-sm mt-3 bg-primary text-white" href="{{route('employer.company_info')}}" role="button">Cập nhật ngay</a>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <a href="" class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">VIỆC LÀM ĐÃ ĐĂNG</p>
                                        <h5 class="mb-0">
                                            {{App\Models\Job::where('employer_id',Auth::guard('employer')->user()->id)->count()}}
                                        </h5>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="fas fa-clone font-size-24"></i>
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
                                        <p class="text-muted font-weight-bold">HỒ SƠ ỨNG TUYỂN</p>
                                        <h5 class="mb-0">
                                            <i class="fas fa-user-tie mr-2" title="Nhà tuyển dụng"></i>{{DB::table('apply')->where('employer_id',Auth::guard('employer')->user()->id)->count()}}
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
                                        <p class="text-muted font-weight-bold">HỒ SƠ ĐÃ LƯU</p>
                                        <h5 class="mb-0">0</h5>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="fas fa-address-card font-size-24"></i>
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
                                        <p class="text-muted font-weight-bold">LƯỢT XEM VIỆC LÀM</p>
                                        <h5 class="mb-0">{{App\JobSeeker::all()->count()}}</h5>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="far fa-eye font-size-24"></i>
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
                        <h4 class="card-title mb-4">Tin tuyển dụng</h4>
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

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Hồ sơ công ty</h4>
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
    var ctx = document.getElementById('lineChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Không được duyệt', 'Chời duyệt', 'Đã duyệt'],
                datasets: [{
                    label: 'Tổng quan',
                    data: [2, 5, 1],
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
        var myDoughnutChart = new Chart(Pie, {
            type: 'doughnut',
            data: {
                labels: ["Không được duyệt", "Chời duyệt", "Đã duyệt"],
                datasets: [{
                data: [2, 5, 1],
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

        var line = document.getElementById('line');
        var myLineChart = new Chart(line, {
            type: 'line',
            data: {
                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                datasets: [{
                data: [2, 5, 1, 1, 1, 15, 15, 10, 15, 17, 10, 20],
                backgroundColor: ["#fff", "#333"],
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
