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
                    <h4 class="card-title mb-4">{{$JobSeeker->name}} 
                        @if ($Profile->status == 0)
                            <i class="fas fa-exclamation-circle text-warning"></i>
                        @elseif($Profile->status == 1)
                            <i class="fas fa-check-circle text-success"></i>
                        @else
                            <i class="fas fa-times-circle text-danger"></i>
                        @endif
                    </h4>

                    <p class="text-muted mb-4">
                        {!! $Profile->description ?? "<span class='badge badge-pill badge-warning'>Thiếu giới thiệu bản thân</span>" !!}
                    </p>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" width="10%">Vị trí :</th>
                                    <td>{{$Profile->position}}</td>
                                    <th scope="row" width="10%">Nhành nghề :</th>
                                    <td>
                                        <span class="badge badge-pill badge-primary">{{App\Models\Career::findOrFail($Profile->career_id)->name}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Email:</th>
                                    <td>
                                        {!! $JobSeeker->email ?? "<span class='badge badge-pill badge-warning'>Thiếu Website</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Số điện thoại :</th>
                                    <td>
                                        {!! $JobSeeker->phone ?? "<span class='badge badge-pill badge-warning'>Thiếu Số điện thoại</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Địa chỉ:</th>
                                    <td>
                                        @if ($Profile->address == null)
                                        <span class='badge badge-pill badge-warning'>Thiếu địa chỉ</span>
                                    @else
                                        {{$Profile->address}},  {{App\Models\City::findOrFail($Profile->work_location)->name}}
                                    @endif
                                    </td>
                                    <th scope="row" width="10%">Hồ sơ đính kèm:</th>
                                    <td>
                                        @if ($Profile->attached_profile)
                                        {{$JobSeeker->name}} - Timvieclam.xyz.{{Str::afterLast($Profile->attached_profile, '.')}}
                                        <a class="badge badge-success" data-toggle="modal" data-target="#viewAttachedProfile"><i class="fas fa-eye fa-1x"></i></a>
                                        @else
                                        <button class='badge badge-pill badge-warning'>Thiếu hồ sơ đính kèm</button>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">
                                    @if ($Profile->status == 0)
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.accept.profile', ['id' => $Profile->id])}}" role="button">Duyệt</a>
                                        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#staticBackdrop">Từ chối</button>
                                    @elseif($Profile->status == 1)
                                        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#staticBackdrop">Từ chối</button>
                                    @else
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.accept.profile', ['id' => $Profile->id])}}" role="button">Duyệt</a>
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
                    <form method="POST" action="{{route('admin.notAccept.profile')}}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="idProfile" value="{{$Profile->id}}">
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
        <!-- Modal -->
        <div class="modal fade" id="viewAttachedProfile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h6 class="modal-title" id="staticBackdropLabel">Hồ sơ {{$JobSeeker->name}} - Tuyển dụng, tìm việc làm nhanh hiệu quả tại Timvieclam.xyz.{{Str::afterLast($Profile->attached_profile, '.')}}</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <iframe data-v-7b8bd654="" type="application/pdf" id="cv-pdf" src="http://127.0.0.1:8000/{{$Profile->attached_profile}}" width="100%" height="685" style="border: none;"></iframe>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal -->
    </div>
</div>
</div>
</div>
@endsection

@push('scripts')
<script>
</script>
@endpush
