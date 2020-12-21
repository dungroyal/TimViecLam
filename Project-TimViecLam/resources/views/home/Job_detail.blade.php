@extends('layouts.home')

@section('content')

<div class="container-fluid  main-search-bar__job">
    <div class="container-fluid">
        <div class="forms-container">
            <form method="GET" action="/job" class="sign-in-form">
                <div class="row d-flex justify-content-around">
                    <div class="col-sm-12 col-lg-3 pr-lg-1">
                        <div class="input-field  mb-sm-0">
                            <i class="fas fa-briefcase"></i>
                            <input 
                            type="text" 
                            name="keyword" 
                            value="{{ old('keyword') }}" 
                            placeholder="Tiêu đề công việc, vị trí, ...">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 px-lg-1">
                        <div class="form-group m-0 p-0">
                            <span class="bootstrap-select__icon"><i class="fas fa-tools"></i></span>
                            <select  
                                name="career"
                                class="bootstrap-select-city__custom w-100" 
                                data-size="7" 
                                data-live-search="true"
                                title="Tất cả ngành nghề">
                                @foreach (App\Models\Career::all() as $item)
                                    <option class="py-2" value="{{ $item->id }}"> {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-3 px-lg-1">
                        <div class="form-group m-0 p-0">
                            <span class="bootstrap-select__icon"><i class="fas fa-map-marker-alt"></i></span>
                            <select 
                                name="city"
                                class="bootstrap-select-city__custom w-100" 
                                data-selected-text-format="count > 5"
                                data-size="7" 
                                data-live-search="true"
                                title="Địa điểm làm việc">
                                @foreach (App\Models\City::all() as $item)
                                    <option class="py-2" value="{{ $item->id }}"> {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-1 w-100 pl-lg-1">
                        <button type="submit" class="search-custom__btn text-white">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-lg-1 w-100 pl-lg-1">
                        <button type="button" class="search-custom__btn text-white">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-lg-1 w-100 pl-lg-1 mt-2">
                        <a href="" class="text-white" title="Chế độ xem danh sách" data-toggle="tooltip">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="ml-3 mt-3 mr-2 bi bi-grid-1x2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                              </svg>
                        </a>
                        <a href="" class="text-white" title="Chế độ xem lưới" data-toggle="tooltip">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="mt-3 bi bi-grid-3x3-gap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
                              </svg>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="container-fluid my-5">
        <hr class="mt-n2">
    </div>
    <!-- Việc làm -->
    <div class="container px-5 mt-5">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <section class="apply-now-banner">
                    <div class="image"><img src="{{ asset('images/banner-job.jpg')}}" alt=""></div>
                    <div class="apply-now-content">
                        <div class="job-desc">
                            <p class="title">{{ $jobs_detail->name_job }}</p>
                            <a class="employer job-company-name" href="#">{{ $company->name_company }}</a>
                        </div>
                        @if (Auth::guard('job_seeker')->user() != null)
                            @if(DB::table('apply')->where([['job_id', $jobs_detail->id],['job_seeker_id', Auth::guard('job_seeker')->user()->id]])->count() > 0)
                                <div class="apply-now-btn ">
                                    <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob--active"><i class="far fa-check-circle mr-2"></i> Đã ứng tuyển</a>
                                </div>
                            @else
                                <div class="apply-now-btn ">
                                    <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob" data-job="{{ $jobs_detail->id }}" data-jsk="{{Auth::guard('job_seeker')->user()->id}}">Nộp Đơn Ứng Tuyển </a>
                                </div>
                            @endif
                        @else
                            <div class="apply-now-btn ">
                                <a href="{{ Route('login') }}" class="btn-gradient btnApplyClick">Đăng nhập ngay</a>
                            </div>
                        @endif
                    </div>
                </section>
                <section>
                    <div class="row my-2">
                        <div class="col-lg-12 order-lg-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#profile" data-toggle="tab"
                                        class="nav-link active text-botton">Chi tiết công việc</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#company" data-toggle="tab" class="nav-link text-botton">Tổng
                                        quan công ty</a>
                                </li>
                                <li class="ml-auto">
                                    @if (Auth::guard('job_seeker')->user() != null)
                                        @if(DB::table('save_job')->where([['job_id', $jobs_detail->id],['job_seeker_id', Auth::guard('job_seeker')->user()->id]])->count() > 0)
                                            <a data-toggle="tooltip" title="Đã lưu công việc">
                                                <i class="fas fa-heart fa-lg mr-3 mt-2 text-danger"></i>
                                            </a>
                                        @else
                                            <a href="#" data-toggle="tooltip" data-id="{{$jobs_detail->id}}" class="saveJob" title="Lưu công việc">
                                                <i class="far fa-heart fa-lg mr-3 mt-2 saveJob"></i>
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ Route('login') }}" data-toggle="tooltip" title="Đăng nhập để lưu lại công việc">
                                            <i class="far fa-heart fa-lg mr-3 mt-2"></i>
                                        </a>
                                    @endif
                                    <a href="#" data-toggle="tooltip" title="Chia sẻ công việc">
                                        <i class="fas fa-share-alt fa-lg mr-3"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane active" id="profile">
                                    <div class="bg-blue">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li> <strong><i class="fas fa-calendar-day icon-detail"></i>Ngày
                                                                cập nhật</strong>
                                                            <p> {{date_format( $jobs_detail->updated_at,"d/m/Y")}}</p>
                                                        </li>
                                                        <li> 
                                                            <strong>
                                                                <i class="fas fa-briefcase icon-detail"></i>
                                                                Ngành nghề</strong>
                                                            <p> 
                                                                <a> {{App\Models\Career::find($jobs_detail->career_id)->name}}</a>
                                                            </p>
                                                        </li>
                                                        <li> 
                                                            <strong>
                                                                <i class="fas fa-business-time icon-detail"></i>Hìnhthức
                                                            </strong>
                                                            <p>{{App\Models\TypeJob::find($jobs_detail->type_job_id)->name}}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li>
                                                            <strong><i
                                                                    class="fas fa-dollar-sign icon-detail ml-1"></i>Lương</strong>
                                                            <p>{{App\Models\Salary::find($jobs_detail->salary_id)->name}}</p>
                                                        </li>
                                                        <li>
                                                            <strong><i class="fas fa-chart-bar icon-detail"></i>Kinh nghiệm</strong>
                                                            <p>{{App\Models\Experience::find($jobs_detail->experience_id)->name}}</p>
                                                        </li>
                                                        <li><strong>
                                                            <i class="fas fa-calendar-check icon-detail"></i>
                                                            Hết nộp hồ sơ</strong>
                                                            <p>{{$jobs_detail->deadline}}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li>
                                                            <strong><i class="fas fa-graduation-cap icon-detail"></i>
                                                                Yêu cầu bằng cấp</strong>
                                                            <p>{{App\Models\Degree::find($jobs_detail->degree_id)->name}}</p>
                                                        </li>
                                                        <li>
                                                            <strong>
                                                                <i class="fa fa-transgender icon-detail" aria-hidden="true"></i>
                                                                Giới tính
                                                            </strong>
                                                            <p>{{$jobs_detail->sex_requirements =1 ?"Nam":"Nữ"}}</p>
                                                        </li>
                                                        <li>
                                                            <strong>
                                                                <i class="fa fa-map-marker icon-detail" aria-hidden="true"></i>
                                                                Địa điểm làm việc
                                                                </strong>
                                                            <p>{{App\Models\City::find($jobs_detail->city)->name}}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-row mt-3">
                                        <h3 class="detail-title">Mô tả Công việc</h3>
                                        {{ $jobs_detail->description }}
                                       
                                    </div>
                                    <!-- Quyền lợi -->
                                    <div class="detail-row mt-3">
                                        <h3 class="detail-title">Quyền lợi</h3>
                                        {{ $jobs_detail->benefits }}
                                    </div>
                                    <!-- yêu cầu CV -->
                                    <div class="detail-row">
                                        <h3 class="detail-title">Yêu Cầu Công Việc</h3>
                                        {{ $jobs_detail->job_requirements }}
                                    </div>
                                    <!-- share -->
                                    <!-- Nộp ứng tuyển -->
                                    <div class="job-detail-bottom mb-0">
                                        <div class="job-detail-bottom-wrapper">
                                            <div class="apply-now-content text-center">
                                                <div class="apply-now-right">
                                                    @if (Auth::guard('job_seeker')->user() != null)
                                                        @if(DB::table('apply')->where([['job_id', $jobs_detail->id],['job_seeker_id', Auth::guard('job_seeker')->user()->id]])->count() > 0)
                                                            <div class="apply-now-btn ">
                                                                <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob--active"><i class="far fa-check-circle mr-2"></i> Đã ứng tuyển</a>
                                                            </div>
                                                        @else
                                                            <div class="apply-now-btn ">
                                                                <a href="javascript:void(0)" class="btn-gradient btnApplyClick btnApplyJob" data-job="{{ $jobs_detail->id }}" data-jsk="{{Auth::guard('job_seeker')->user()->id}}">Nộp Đơn Ứng Tuyển </a>
                                                            </div>
                                                        @endif
                                                    @else
                                                        <div class="apply-now-btn ">
                                                            <a href="{{ Route('login') }}" class="btn-gradient btnApplyClick">Đăng nhập ngay</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="company">
                                    <div>
                                        <div class="cover-company detail_company bg-white">
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-md-1">
                                                @if ($company->logo != null)
                                                <img src="{{ asset('/') }}{{$company->logo}}" alt="TVL"/>
                                                @else
                                                <img src="{{ asset('/images/logo/timvieclam-placeholder.png') }}" alt="TVL"/>
                                                @endif
                                                </div>
                                              <div class="j_company col-md-8">
                                                <div class="pl-2">
                                                    <h1 class="text_ellipsis text-back">{{$company->name_company}}</h1>
                                                    <div class="text_ellipsis">
                                                      <span><i class="fas fa-map-marker-alt icon-company-detail mr-1"></i>
                                                        <strong>Địa chỉ:</strong> {{$company->address}}</span></div>
                                                    <div class="text_ellipsis space-company">
                                                      <span><i class="fas fa-link icon-company-detail mr-1"></i>
                                                        <strong>Website:</strong> {{$company->website}}</span>
                                                    </div>
                                                </div>
                                              </div>
                                              {{-- <div class="col-md-3">
                                                <div class="row">
                                                  <div class="col mt-3"><a href="#"><i class="icofont icon-radius fab fa-facebook"></i></a>
                                                  </div>
                                                  <div class="col mt-3"><a href="#"><i class="icofont icon-radius fab fa-instagram"></i></i></a>
                                                  </div>
                                                  <div class="col mt-3"><a href="#"><i class="icofont icon-radius fab fa-twitter"></i></a></div>
                                                </div>
                                              </div> --}}
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="company-container">
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-md-12 col-lg-12">
                                                <div id="job-list" class="box-company-detail mb-0 pt-2">
                                                  <h2 class="heading-title heading-bold-company-detail font-bold mt-1">VIỆC LÀM ĐANG TUYỂN DỤNG</h2>
                                                  <div class="desc" style="line-height: 20px;">
                                                    <div class="mt-3 px-3">
                                                        @foreach($listJob as $job)
                                                            <div class="job-item-company-detail">
                                                                <div class="row">
                                                                <div class="col-sm-9">
                                                                    <p class="j_title text_ellipsis"><a href="#" data-toggle="tooltip" target="_blank"
                                                                        class="el-tooltip item">
                                                                    <strong class="fs-15">{{$job->name_job}}</strong></a></p>
                                                                    <p class="company mb-2 mt-2">{{App\Models\Company::findOrFail($job->company_id)->name_company}}</p>
                                                                </div>
                                                                <div class="col-sm-3 text-right pt-1">
                                                                    <a href="/job-detail/{{$job->id}}" target="_blank" class="btn btn-default"><i
                                                                        class="icofont fas fa-paper-plane mr-1"></i> 
                                                                        <span class="font-button-company">Xem chi tiết</span> 
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="location text_ellipsis">
                                                                    <div class="row">
                                                                        <div class="col-sm-3"><span class="dollar"><i class="fas fa-money-bill">
                                                                            </i> {{App\Models\Salary::findOrFail($job->salary_id)->name}}</span></div>
                                                                        <div class="col-sm-3">
                                                                            <i class="icofont far fa-clock"></i> {{\Carbon\Carbon::parse($job->deadline)->format('d/m/Y')}}
                                                                        </div>
                                                                        <div class="col-sm-6"><i class="icofont-company fas fa-map-marker-alt"></i>
                                                                            {{App\Models\City::findOrFail($job->city)->name}}
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        @endforeach       
                                                      <div class="view-more-company"><a href="#">Xem thêm<i
                                                            class="fas fa-arrow-right ml-1"></i></a></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                              <div class="box-company-detail mt-3">
                                                <h2 class="heading-title heading-bold-company-detail text-uppercase">GIỚI THIỆU VỀ CÔNG TY {{$company->name_company}}</h2>
                                    
                                                  <div class="col-lg-12">
                                                    <div class="row">
                                                    <div class="content">
                                                      <p>{{$company->description}}</p>
                                                    </div>
                                                  </div>
                                                  </div>
                                             
                                              </div>
                                            </div>
                                    
                                          </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $(".btnApplyJob").click(function(){
            if ($(this).hasClass('btnApplyJob--active')) {
                return;
            }
            $(".btnApplyJob").html('<i class="fas fa-spinner text-white fa-spin"></i>');
            var idJob = this.getAttribute("data-job");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                dataType: 'html',
                url: '/job-seeker/applications/'+idJob,
                success:function(response){
                    setTimeout(function() {
                        $(".btnApplyJob").html('<i class="far fa-check-circle mr-2"></i> Đã ứng tuyển');
                        $(".btnApplyJob").addClass("btnApplyJob--active");
                    }, 500);
                }, 
                error: function(e){
                    console.log(e);
                    alert("Thất bại!");
                }
            });
        });

        $(".saveJob").click(function(e){
            e.preventDefault();
            var idJob = $(this).data("id");        
            window.location.href = "/job-seeker/saveJob/"+idJob;
        });
    });

</script>
@endpush
