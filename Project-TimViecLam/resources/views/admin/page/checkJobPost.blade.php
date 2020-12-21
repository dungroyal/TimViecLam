@extends('layouts.admin')

@section('title', 'Kiểm duyệt tin tuyển dụng | ')

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
                <h4 class="mb-0 font-size-18">Kiểm duyệt tin tuyển dụng</h4>
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
                    <h4 class="card-title mb-4">{{$JobDetail->name_job}} 
                        @if ($JobDetail->status == 0)
                            <i class="fas fa-exclamation-circle text-warning fa-sm"></i>
                        @elseif($JobDetail->status == 1)
                            <i class="fas fa-check-circle text-success fa-sm"></i>
                        @else
                            <i class="fas fa-times-circle text-danger fa-sm"></i>
                        @endif
                    </h4>

                    <p class="text-muted mb-4">
                        {!! $JobDetail->description ?? "<span class='badge badge-pill badge-warning'>Thiếu mô tả công việc</span>" !!}
                    </p>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" width="10%">Công ty:</th>
                                    <td>
                                        {{$Company->name_company}}
                                        @if ($Company->status == 0)
                                            <i class="fas fa-exclamation-circle text-warning fa-sm"></i>
                                        @elseif($Company->status == 1)
                                            <i class="fas fa-check-circle text-success fa-sm"></i>
                                        @else
                                            <i class="fas fa-times-circle text-danger fa-sm"></i>
                                        @endif
                                    </td>
                                    <th scope="row" width="10%">Nghành nghề :</th>
                                    <td>
                                        @if($JobDetail->career_id != null)
                                            {{App\Models\Career::findOrFail($JobDetail->career_id)->name}}
                                        @else
                                            <span class='badge badge-pill badge-warning'>Thiếu Số điện thoại</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Mã tin :</th>
                                    <td>
                                        {!! $JobDetail->job_code ?? "<span class='badge badge-pill badge-warning'>Thiếu số lượng</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Ngày kết thúc:</th>
                                    <td>
                                        {!! $JobDetail->deadline ?? "<span class='badge badge-pill badge-warning'>Thiếu số lượng</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Loại công việc :</th>
                                    <td>{{App\Models\TypeJob::findOrFail($JobDetail->type_job_id)->name}}</td>
                                    <th scope="row" width="10%">Số lượng:</th>
                                    <td>
                                        {!! $JobDetail->amount ?? "<span class='badge badge-pill badge-warning'>Thiếu số lượng</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Mức lương:</th>
                                    <td>
                                        @if($JobDetail->salary_id != null)
                                            {{App\Models\Salary::findOrFail($JobDetail->salary_id)->name}}
                                        @else
                                            <span class='badge badge-pill badge-warning'>Thiếu mức lương</span>
                                        @endif
                                    </td>
                                    <th scope="row" width="10%">Bằng cấp :</th>
                                    <td>
                                        @if($JobDetail->degree_id != null)
                                            {{App\Models\Degree::findOrFail($JobDetail->degree_id)->name}}
                                        @else
                                            <span class='badge badge-pill badge-warning'>Thiếu bằng cấp</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Kinh nghiệm:</th>
                                    <td>
                                        @if($JobDetail->experience_id != null)
                                            {{App\Models\Experience::findOrFail($JobDetail->experience_id)->name}}
                                        @else
                                            <span class='badge badge-pill badge-warning'>Thiếu kinh ngiệm</span>
                                        @endif
                                    </td>
                                    <th scope="row" width="10%">Địa chỉ làm việc:</th>
                                    <td>
                                        {{$JobDetail->address}}, {{App\Models\City::findOrFail($JobDetail->city)->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Tên liên hệ:</th>
                                    <td>
                                        {!! $JobDetail->name_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu tên liên hệ</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Số điện thoại liên hệ:</th>
                                    <td>
                                        {!! $JobDetail->phone_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu số điện thoại liên hệ</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" width="10%">Đại chỉ liên hệ:</th>
                                    <td>
                                        {!! $JobDetail->address_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu địa chỉ liên hệ</span>" !!}
                                    </td>
                                    <th scope="row" width="10%">Số điện thoại liên hệ:</th>
                                    <td>
                                        {!! $JobDetail->email_contact ?? "<span class='badge badge-pill badge-warning'>Thiếu email liên hệ</span>" !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">
                                    @if ($JobDetail->status == 0)
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.accept.job_post', ['id' => $JobDetail->id])}}" role="button">Duyệt</a>
                                        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#staticBackdrop">Từ chối</button>
                                    @elseif($JobDetail->status == 1)
                                        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#staticBackdrop">Từ chối</button>
                                    @else
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.accept.job_post', ['id' => $JobDetail->id])}}" role="button">Duyệt</a>
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
                    <h6 class="modal-title" id="staticBackdropLabel">Từ chối tin tuyển dụng: <strong>{{$JobDetail->name_job}}</strong> </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <form method="POST" action="{{route('admin.notAccept.job_post')}}">
                        @csrf
                        <div class="form-group">
                           <input type="hidden" name="idJobPost" value="{{$JobDetail->id}}">
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
    </div>
</div>
</div>
</div>
@endsection

@push('scripts')
<script>
</script>
@endpush
