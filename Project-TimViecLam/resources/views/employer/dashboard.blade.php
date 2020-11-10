@extends('layouts.admin')

@section('title', 'Nhà tuyển dụng | ')

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

        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">Việc làm phù hợp</p>
                                        <h4 class="mb-0">5</h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="bx bx-briefcase font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">Lượt xem hồ sơ</p>
                                        <h4 class="mb-0">360</h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-search-alt font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">NTD xem hồ sơ</p>
                                        <h4 class="mb-0">5</h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="dripicons-preview font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-bold">NTD lưu hồ sơ</p>
                                        <h4 class="mb-0">5</h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-save font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Việc làm đã lưu mới nhất</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Billing Name</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Payment Status</th>
                                        <th>Payment Method</th>
                                        <th>View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a> </td>
                                        <td>Neal Matthews</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $400
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2541</a> </td>
                                        <td>Jamal Burnett</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $380
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-visa mr-1"></i> Visa
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2542</a> </td>
                                        <td>Juan Mitchell</td>
                                        <td>
                                            06 Oct, 2019
                                        </td>
                                        <td>
                                            $384
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2545</a> </td>
                                        <td>Jacob Hunter</td>
                                        <td>
                                            04 Oct, 2019
                                        </td>
                                        <td>
                                            $392
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Việc làm đã ứng tuyển mới nhất</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Billing Name</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Payment Status</th>
                                        <th>Payment Method</th>
                                        <th>View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a> </td>
                                        <td>Neal Matthews</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $400
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2541</a> </td>
                                        <td>Jamal Burnett</td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            $380
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-visa mr-1"></i> Visa
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2542</a> </td>
                                        <td>Juan Mitchell</td>
                                        <td>
                                            06 Oct, 2019
                                        </td>
                                        <td>
                                            $384
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2545</a> </td>
                                        <td>Jacob Hunter</td>
                                        <td>
                                            04 Oct, 2019
                                        </td>
                                        <td>
                                            $392
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".exampleModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
