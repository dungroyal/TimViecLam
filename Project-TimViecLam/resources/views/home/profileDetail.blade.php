@extends('layouts.home')

@section('content')
<div class="container-fluid my-5">
    <hr class="mt-n2">
</div>
<div class="container">
    <section class="candidate-detail">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-left">
                <div id="detail-el" class="box-general-detail pb-15">
                    <div class="mw-box-item detail-header">
                        <div class="info">
                            <div class="info-candidate">
                                <div class="picture">
                                    <div class="image-cover">
                                        <img class="lazy-load image-pro-emp" src="{{asset('images/logo/timvieclam-placeholder.png')}}"/>
                                    </div>
                                </div>
                                <div class="info-basic">
                                    <div class="white">
                                        <h2 class="title capitalize text-uppercase">{{$JobSeeker->name}}</h2>
                                        <h1 class="sub-title capitalize cv-title text-white">{{$Profile->position}}</h1>
                                    </div>
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p class="font-pro-emp">
                                                    <span class="icon">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                    {{Carbon\Carbon::parse($Profile->birthday)->format('d/m/Y') }}
                                                </p>
                                                <p class="font-pro-emp">
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                {{$Profile->address}}
                                            </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="font-pro-emp"><span class="icon">
                                                    <i class="fas fa-mars"></i></span>
                                                    {{$Profile->gender == 0 ? 'Nam':'Nữ'}}
                                                </p>
                                                <p class="font-pro-emp">
                                                    <span class="icon"><i class="fas fa-ribbon"></i></span>
                                                    {{$Profile->marital_status == 0 ? 'Độc thân':'Đã kết hôn'}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-half"></div>
                    </div>
                    {{-- <div class="alert alert-warning alert-service">
                        <span> Bạn đang xem hồ sơ ứng viên đã được phân loại trên TimViecLam. Hồ sơ có giá trị
                            <span class="text-danger">3</span> điểm.
                        </span>
                        <span>Đồng ý xem
                            <a href="#">bấm vào đây</a>. Hoặc
                            <a href="#" target="_blank" class=""> bấm vào đây </a>để đăng
                            ký dịch vụ.
                        </span>
                    </div> --}}
                    <div class="common-info item-info mt-0 pt-0">
                        <h3 class="head-title "><span class="bg"><span class="icon"><i
                                        class="far fa-user icon-pro-emp"></i></span> Thông tin hồ sơ </span>
                        </h3>
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-7">
                                    <ul class="list-unstyled properties">
                                        <li><strong>Ngành nghề: </strong>
                                            <span class="el-tag candidate-tag el-tag--primary">
                                                <a href="#" class="text-dark font-weight-bold">
                                                    {{ App\Models\Career::findOrFail($Profile->career_id)->name}}
                                                </a>
                                            </span>
                                        </li>
                                        <li class="font-pro-emp"><strong>Trình độ học vấn:</strong> {{ App\Models\Degree::findOrFail($Profile->degree_id)->name}}</li>
                                        <li  class="font-pro-emp"><strong>Loại hình công việc: </strong>
                                            <span>{{ App\Models\TypeJob::findOrFail($Profile->type_job_id)->name}}</span></li>
                                       
                                        <li  class="font-pro-emp"><strong>Mức lương mong muốn:</strong>
                                            <span class="text-danger">{{ App\Models\Salary::findOrFail($Profile->salary_id)->name}}</span></li>
                                        <li  class="font-pro-emp"><strong>Số năm kinh nghiệm:</strong><span class="text-danger">
                                            {{ App\Models\Experience::findOrFail($Profile->experience_id)->name}}
                                        </span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-5">
                                    <ul class="list-unstyled properties">
                                        <li  class="font-pro-emp"><strong>Cấp bậc mong muốn: </strong>
                                            {{ App\Models\Grade::findOrFail($Profile->grade_id)->name}}
                                        </li>
                                        <li  class="font-pro-emp"><strong>Nơi làm việc: </strong>
                                            <span class="el-tag candidate-tag el-tag--primary font-weight-bold" >
                                                <a href="#" class=" text-dark">{{ App\Models\City::findOrFail($Profile->work_location)->name}}</a>
                                            </span>
                                        </li>
                                        <li class="font-pro-emp"><strong>Số lượt xem:</strong> {{ $Profile->view}}</li>
                                        <li class="font-pro-emp"><strong>Ngày cập nhật: </strong>{{Carbon\Carbon::parse($Profile->updated_at)->format('d/m/Y') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title"><span class="bg"><span class="icon"><i class="fas fa-trophy"></i></span>
                                    Mục tiêu nghề nghiệp
                                </span></h3>
                            <div class="content">
                                <div class="ort-description">
                                    <article class="pre-line font-pro-emp">{{$Profile->career_goals}}</article>
                                </div>
                            </div>
                        </div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title"><span class="bg"><span class="icon"><i class="fas fa-magic"></i></span>
                                <?php $skill_detail = DB::table('skill_detail')->where('id_profile', $Profile->id)->get(); ?>
                                    Kỹ năng bản thân
                                </span>
                            </h3>
                            @if(count($skill_detail)>0)
                            <div class="content">
                                <div>
                                    <article class="pre-line font-pro-emp">{{$skill_detail[0]->professional_skills}}</article>
                                </div>
                                <?php $otherSkill = explode(",",$skill_detail[0]->other_skill)?>
                                <div>
                                    <ul class="properties list-unstyled mt-2"></ul>
                                    <ul class="properties list-unstyled font-pro-emp mb-0">
                                        @foreach ($otherSkill as $item)
                                            <li><i class="fas fa-check-circle icon-pro-color"></i> {{$item}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                        
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title mb-0 pb-0"><span class="bg"><span class="icon"><i class="fas fa-graduation-cap"></i></span>
                                    Học vấn / bằng cấp
                                </span></h3>
                                <?php $degree_details = DB::table('degree_details')->where('id_profile', $Profile->id)->orderBy('graduation_year', 'desc')->get(); ?>
                            <div class="content">
                                @foreach ($degree_details as $item)
                                    <div class="timeline">
                                        <div class="item">
                                            <div class="time"><span>
                                                Từ {{$item->month_start}}/{{$item->year_start}} <br>
                                                - {{$item->graduation_month}}/{{$item->graduation_year}}
                                            </span>
                                        </div>
                                            <div class="info">
                                                <h4>{{$item->certificate ?? 'Đang cập nhật'}}</h4>
                                                <p><strong class="text-pro-emp">Trường / nơi đào tạo: </strong>{{$item->university ?? 'Đang cập nhật'}}</p>
                                                <p><strong class="text-pro-emp">Ngành:</strong> {{$item->faculty ?? 'Đang cập nhật'}}</p>
                                                <p><strong class="text-pro-emp">Xếp loại:</strong> {{$item->ranked ?? 'Đang cập nhật'}}</p>
                                                <div class="cert-info"><strong>Mô tả: {{$item->detail ?? 'Đang cập nhật'}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="common-info item-info pt-0">
                            <h3 class="head-title mb-0 pb-0"><span class="bg"><span class="icon"><i class="fas fa-briefcase"></i></span>
                                    Kinh nghiệm làm việc <span class="text-danger">({{ App\Models\Experience::findOrFail($Profile->experience_id)->name}})</span></span></h3>
                            <div class="content">
                                <?php $experience_detail = DB::table('experience_detail')->where('id_profile', $Profile->id)->orderBy('year_end', 'desc')->get(); ?>
                                @foreach ($experience_detail as $item)
                                <div class="timeline">
                                    <div class="item">
                                        <div class="item">
                                            <div class="time"><span>
                                                Từ {{$item->month_start}}/{{$item->year_start}} <br>
                                                - {{$item->month_end}}/{{$item->year_end}}
                                            </span>
                                        </div>
                                        <div class="info">
                                            <h4>{{$item->position}}</h4>
                                            <p><strong class="text-pro-emp">Công ty:</strong> {{$item->company}}</p>
                                            <div class="cert-info">
                                                <strong>Mô tả: Đang cập nhật!</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box-contact" class="box_general mb-3">
                    <h3 class="title-h2">Thông tin liên hệ</h3>
                    <div class="mw-box-item box-contact">
                        <div class="row pt-3">
                            <div class="col-md-6 col-lg-3 label-contact"><strong>Họ tên:</strong></div>
                            <div class="col-md-6 col-lg-9 item font-pro-emp"><span class="capitalize">{{$JobSeeker->name}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 label-contact"><strong>Địa chỉ:</strong></div>
                            <div class="col-md-6 col-lg-9 item font-pro-emp">{{$Profile->address}}</div>
                        </div>
                        @if (Auth::guard('employer')->user())
                            @if (App\Models\Company::where('employer_id',Auth::guard('employer')->user()->id)->first()->status == 1)
                            <div class="row">
                                <div class="col-md-6 col-lg-3 label-contact"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-6 col-lg-9 item font-pro-emp"> <a href="tel:{{$JobSeeker->phone}}"><i class="fas fa-phone-square-alt"></i> {{$JobSeeker->phone}}</a></div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-3 label-contact"><strong>Email:</strong></div>
                                <div class="col-md-6 col-lg-9 item font-pro-emp"><a href="mailto:{{$JobSeeker->email}}" target="_blank"><i class="fas fa-envelope-open-text"></i> {{$JobSeeker->email}}</a><br></div>
                            </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 item pt-15">
                                        <div class="box-function text-center">
                                            <button type="button" class="el-button el-button--info is-plain">
                                                <span class="font-pro-emp"><i class="far fa-heart mr-2"></i>Lưu hồ sơ</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 item pt-15">
                                        <div class="box-function text-center">
                                            <button type="button" class="el-button el-button--info is-plain">
                                                <span class="font-pro-emp"><i class="far fa-heart mr-2"></i>Lưu hồ sơ</span>
                                            </button>
                                            <button type="button" class="el-button btn-call-action el-button--warning" data-toggle="tooltip" title="Trở thành nhà tuyển dụng để có thểm xem được thông tin liên hệ của ứng viên">
                                                <span class="font-pro-emp-limit"><i class="far fa-eye mr-2"></i>Xem liên hệ </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @else
                        <div class="row">
                            <div class="col-md-12 col-lg-12 item pt-15">
                                <div class="box-function text-center">
                                    <a href="{{ Route('employer.login')}}" class="el-button btn-call-action el-button--warning py-2"  data-toggle="tooltip" title="Trở thành nhà tuyển dụng để có thểm xem được thông tin liên hệ của ứng viên">
                                        <span class="font-pro-emp-limit"><i class="far fa-eye mr-2"></i>Xem liên hệ </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            </div>
            {{-- <div class="col-md-4 col-lg-4 col-right">
                <div class="row-left">
                    <div class="box_right">
                        <div class="candidate_right pt-2 pb-2"><span>
                            </span>
                            <div class="box-rp-function row text-center pr-2">
                                
                                <div class="col-md-6">
                                    <div class="box-func save-pdf el-tooltip">
                                        <p><i class="far fa-file-alt"></i></p>
                                        <p class="font-pro-emp">Lưu PDF</p><span class="badge">COMING SOON</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={!!url()->current()!!}" target="_blank" class="box-func el-tooltip">
                                        <p><i class="fas fa-share-alt"></i></p>
                                        <p class="font-pro-emp">Chia sẻ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box_right">
                        <h3 class="title_right title-font-right">Tìm kiếm nâng cao</h3>
                        <div class="candidate_right pd-15 bg-white">
                            <div>
                                <form action="{{Route('all-profile')}}" method="get">
                                    <div class="box-search-relate">
                                        <div class="box_search box_search_pro pt-0">
                                            <div class="form-group m-0 p-0">
                                                <span class="profile-select__icon"><i class="fas fa-tools"></i></span>
                                                    <select name="career" class="profile-select w-100" data-size="7"
                                                        data-live-search="true" title="Tất cả ngành nghề">
                                                        @foreach (App\Models\Career::all() as $items)
                                                            <option class="py-2" value="{{ $items->id }}"> {{ $items->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="box_search box_search_pro pt-0">
                                            <div class="form-group m-0 p-0">
                                                <span class="profile-select__icon"><i class="fas fa-location-arrow"></i></span>
                                                    <select name="city" class="profile-select w-100" data-size="7"
                                                        data-live-search="true" title="Tất cả tỉnh thành">
                                                        @foreach (App\Models\City::all() as $items)
                                                            <option class="py-2" value="{{ $items->id }}"> {{ $items->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="box_search box_search_pro pt-0">
                                            <div class="form-group m-0 p-0">
                                                <span class="profile-select__icon"><i class="far fa-money-bill-alt"></i></span>
                                                    <select name="salary" class="profile-select w-100" data-size="7"
                                                        data-live-search="true" title="Tất cả mức lương">
                                                        @foreach (App\Models\Salary::all() as $items)
                                                            <option class="py-2" value="{{ $items->id }}"> {{ $items->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="box_search box_search_pro pt-0">
                                            <div class="form-group m-0 p-0">
                                                <span class="profile-select__icon"><i class="fas fa-briefcase"></i></span>
                                                    <select name="experience" class="profile-select w-100" data-size="7"
                                                        data-live-search="true" title="Tất cả kinh nghiệm">
                                                        @foreach (App\Models\Experience::all() as $items)
                                                            <option class="py-2" value="{{ $items->id }}"> {{ $items->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="box_search box_search_pro pt-0">
                                            <div class="form-group m-0 p-0">
                                                <span class="profile-select__icon"><i class="fas fa-graduation-cap"></i></span>
                                                    <select name="degree" class="profile-select w-100" data-size="7"
                                                        data-live-search="true" title="Tất cả trình độ">
                                                        @foreach (App\Models\Degree::all() as $items)
                                                            <option class="py-2" value="{{ $items->id }}"> {{ $items->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="el-button btn-block mt-10 mb-0 el-button--primary" value="Tìm kiếm">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#app').addClass("bgGray");
    })
</script>
@endpush
