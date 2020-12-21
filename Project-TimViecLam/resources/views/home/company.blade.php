@extends('layouts.home')

@section('content')
<div class="cover-company banner-detail-company">
    <div class="images-company">
    </div>
  </div>
  <div class="bg-company">
    <div class="cover-company detail_company" style="background-color: #ffffff;">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            @if ($company->logo != null)
            <img src="{{ asset('/')}}{{$company->logo}}"></div>
            @else
              <img src="{{ asset('/images/logo/timvieclam-placeholder.png')}}"></div>
            @endif
            
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
                                <p class="j_title text_ellipsis">
                                  <a href="{{ Route('job-detail',['id' => $job->id]) }}" data-toggle="tooltip" target="_blank" class="el-tooltip item">
                                <strong class="fs-15">{{$job->name_job}}</strong></a></p>
                                <p class="company mb-2 mt-2">{{App\Models\Company::findOrFail($job->company_id)->name_company}}</p>
                            </div>
                            <div class="col-sm-3 text-right pt-1">
                                <a href="{{ Route('job-detail',['id' => $job->id]) }}" target="_blank" class="btn btn-default"><i
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
                                        <i class="icofont far fa-clock"></i>  {{\Carbon\Carbon::parse($job->deadline)->format('d/m/Y')}}
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
                  {{-- <div class="view-more-company"><a href="#">Xem thêm<i
                        class="fas fa-arrow-right ml-1"></i></a></div> --}}
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
@endsection

@push('scripts')
<script>
  $( document ).ready(function() {
      console.log( "ready!" );
  });
</script>
@endpush
