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
                            <i class="fas fa-exclamation-circle text-warning fa-sm"></i>
                        @elseif($Profile->status == 1)
                            <i class="fas fa-check-circle text-success fa-sm"></i>
                        @else
                            <i class="fas fa-times-circle text-danger fa-sm"></i>
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
                                    <th scope="row" width="10%">Giới tính:</th>
                                    <td>
                                        {{ $JobSeeker->gender ==0 ? "Nam":"Nữ"}}
                                    </td>
                                    <th scope="row" width="10%">Số điện thoại :</th>
                                    <td>
                                        {{ $JobSeeker->marital_status ==0 ? "Độc thân":"Đã kết hôn"}}
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
                    <iframe data-v-7b8bd654="" type="application/pdf" id="cv-pdf" src="{{url('/')}}/{{$Profile->attached_profile}}" width="100%" height="685" style="border: none;"></iframe>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal -->
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <?php $degree_details = DB::table('degree_details')->where('id_profile',$Profile->id)->get() ?>
                    <h4 class="card-title mb-4">
                        Học vấn / Bằng cấp
                        {!! count($degree_details) ==0 ? "<span class='badge badge-pill badge-warning'>Thiếu học vấn bằng cấp</span>":"<i class='fas fa-check-circle text-success'></i>" !!}
                    
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Trường</th>
                                <th scope="col">Tên chứng chỉ</th>
                                <th scope="col">Nghành</th>
                                <th scope="col">Xếp loại</th>
                                <th scope="col">Thời gian</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($degree_details as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$item->university}}</td>
                                        <td>{{$item->certificate}}</td>
                                        <td>{{$item->major}}</td>
                                        <td>{{$item->ranked}}</td>
                                        <td>Từ {{$item->month_start}}/{{$item->year_start}} đến {{$item->graduation_month}}/{{$item->graduation_year}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Chưa có học vấn / bằng cấp</td>
                                    </tr>
                                @endforelse
                            </tbody>
                          </table>                          
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <?php $experience_detail = DB::table('experience_detail')->where('id_profile',$Profile->id)->get() ?>
                    <h4 class="card-title mb-4">
                        Kinh ngiệm làm việc
                        {!! count($experience_detail) == 0 ? "<span class='badge badge-pill badge-warning'>Thiếu kinh nghiệm làm việc</span>":"<i class='fas fa-check-circle text-success'></i>" !!}
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Vị trí công việc</th>
                                <th scope="col">Công ty</th>
                                <th scope="col">Thời gian</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($experience_detail as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$item->position}}</td>
                                        <td>{{$item->company}}</td>
                                        <td>Từ {{$item->month_start}}/{{$item->year_start}} 
                                            đến {{$item->month_end}}/{{$item->year_start}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Chưa có kinh nghiệm làm việc</td>
                                    </tr>
                                @endforelse
                            </tbody>
                          </table>                          
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <?php $skill_detail = DB::table('skill_detail')->where('id_profile',$Profile->id)->first() ?>
                    <h4 class="card-title mb-4">
                        Kỹ năng
                        {!! $skill_detail==null ? "<span class='badge badge-pill badge-warning'>Thiếu kỹ năng</span>":"<i class='fas fa-check-circle text-success'></i>" !!}
                    </h4>
                    Mô tả: {!!$skill_detail->professional_skills ?? "<span class='badge badge-pill badge-warning'>Thiếu mô tả kỹ năng</span>"!!}
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kỹ năng</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $otherSkill = explode(",",$skill_detail->other_skill)?>
                                @forelse ($otherSkill as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{$item}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Chưa có kỹ năng</td>
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
