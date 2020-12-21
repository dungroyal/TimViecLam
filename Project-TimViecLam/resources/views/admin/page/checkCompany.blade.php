@extends('layouts.admin')

@section('title', 'Kiểm duyệt công ty | ')

@section('header')
@include('admin.element.header')
@endsection

@section('sidebar')
@include('admin.element.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Kiểm duyệt công ty</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Kiểm duyệt công ty</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{$Company->name_company}} 
                        @if ($Company->status == 0)
                            <i class="fas fa-exclamation-circle text-warning"></i>
                        @elseif($Company->status == 1)
                            <i class="fas fa-check-circle text-success"></i>
                        @else
                            <i class="fas fa-times-circle text-danger"></i>
                        @endif
                    </h4>

                    <p class="text-muted mb-4">
                        @if ($Company->description == null)
                            <span class='badge badge-pill badge-warning'>Thiếu mô tả công ty</span>
                        @else
                            {{$Company->description}}
                        @endif
                    </p>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" width="10%">Tên công ty :</th>
                                    <td>{{$Company->name_company}}</td>
                                    <th scope="row" width="10%">Nhành nghề :</th>
                                    <td>
                                        <span class="badge badge-pill badge-primary">{{App\Models\Career::findOrFail($Company->career_id)->name}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Website:</th>
                                    <td>
                                        {!! $Company->website ?? "<span class='badge badge-pill badge-warning'>Thiếu Website</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Số điện thoại :</th>
                                    <td>
                                        {!! $Company->phone ?? "<span class='badge badge-pill badge-warning'>Thiếu Số điện thoại</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Tên liên hệ:</th>
                                    <td>
                                        {!! $Company->name_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu tên liên hệ</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Địa chỉ liên hệ :</th>
                                    <td>
                                        {!! $Company->address_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu địa chỉ liên hệ</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Email liên hệ:</th>
                                    <td>
                                        {!! $Company->email_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu Email liên hệ</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Số điện thoại liên hệ:</th>
                                    <td>
                                        {!! $Company->phone_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu số điện thoại liên hệ</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Địa chỉ:</th>
                                    <td>
                                    @if ($Company->address == null)
                                        <span class='badge badge-pill badge-warning'>Thiếu địa chỉ công ty</span>
                                    @else
                                        {{$Company->address}},  {{App\Models\City::findOrFail($Company->city)->name}}
                                    @endif
                                    </td>
                                    <th scope="row" width="10%">Giấy phép kinh doanh :</th>
                                    <td>
                                        @if ($Company->business_license != null)
                                        GPKD.pdf 
                                            <a class="btn btn-success btn-sm ml-2" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-eye"></i></a>
                                        @else
                                            <span class='badge badge-pill badge-warning'>Thiếu giấy phép kinh doanh</span>
                                        @endif
                                    </td>
                                </tr>
                                 <!-- Modal -->
                                 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h6 class="modal-title" id="staticBackdropLabel">Giấy phép kinh doanh {{$Company->name_company}}</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe type="application/pdf" src="{{url('/')}}/{{$Company->business_license}}" width="100%" height="685" style="border: none;"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <tr>
                                    <td colspan="4" class="text-center">
                                    @if ($Company->status == 0)
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.accept.company', ['id' => $Company->id])}}" role="button">Duyệt</a>
                                        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#staticBackdrop">Từ chối</button>
                                    @elseif($Company->status == 1)
                                        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#staticBackdrop">Từ chối</button>
                                    @else
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.accept.company', ['id' => $Company->id])}}" role="button">Duyệt</a>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>         
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Từ chối công ty</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <form method="POST" action="{{route('admin.notAccept.company')}}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="idCom" value="{{$Company->id}}">
                          <label for="exampleFormControlTextarea1">Lý do từ chối</label>
                          <textarea class="form-control" name="note" rows="5"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Quay lại</button>
                    <button type="submit" class="btn btn-primary btn-sm">Từ chối</button>
                </form>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Danh sách công việc</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên công việc</th>
                                    <th scope="col">Ngành nghề</th>
                                    <th scope="col">Tỉnh thành</th>
                                    <th scope="col">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($listJobByCompany as $job)
                                    <tr>
                                        <th scope="row">{{ $loop->index +1 }}</th>
                                        <td>{{$job->name_job}}</td>
                                        <td>{{App\Models\Career::findOrFail($job->career_id)->name}}</td>
                                        <td>{{App\Models\City::findOrFail($job->city)->name}}</td>
                                        <td>
                                            @if ($job->status==0)
                                            <span class='badge badge-pill badge-warning'>Chờ duyệt</span>
                                            @elseif($job->status==1)
                                            <span class='badge badge-pill badge-success'>Đã duyệt</span>
                                            @elseif($job->status==2)
                                            <span class='badge badge-pill badge-danger'>Không được duyệt</span>
                                            @else
                                            <span class='badge badge-pill badge-dark'>Tạm dừng</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="4" >Chưa đăng bất kì công việc nào!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
