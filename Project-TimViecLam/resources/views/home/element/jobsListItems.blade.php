@forelse ($jobs as $job)
<?php $company =  App\Models\Company::find($job->company_id) ?>
<div class="col job-over-item px-0" data-job="{{$job->id}}">
    <div class="row job-item-show">
            <a href="" class="col-sm-2 col-lg-2 col-xl-2 job-item-show__logo">
                @if ($company->logo != null)
                    <img src="{{ asset('/') }}{{$company->logo}}" alt="TVL"/>
                @else
                <img src="{{ asset('/images/logo/timvieclam-placeholder.png') }}" alt="{{$job->name_job}}" alt="TVL"/>
                @endif
            </a>
            <div class="col-sm-10 col-lg-10 col-xl-10 company_name">
                <p class="job_title text_ellipsis mt-1">
                    <a href="{{ Route('job-detail',['id' => $job->id]) }}" data-toggle="tooltip" title="{{$job->name_job}}" target="_blank">
                        <span>
                        <strong>{{$job->name_job}}</strong>
                        </span>
                    </a>
                </p>
                <div class="job_company">
                    <div class="name">
                        <a href="/job-detail" target="_blank" title="{{$company->name_company}}" data-toggle="tooltip">
                        <span>{{$company->name_company}}</span>
                        </a>
                    </div>
                </div>
                <div class="row mb-1 job_info" >
                    <div class="col-5 text_ellipsis">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash-stack mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                            <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                            <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                            </svg> 
                            {{App\Models\Salary::find($job->salary_id)->name}}
                    </div>
                    <div class="col-7 text_ellipsis" id="jobs-list">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                            </svg>
                            {{-- {{App\Models\City::find($job->city)->name}} --}}
                            Hồ Chí Minh
                    </div>
                </div>
        </div>
    </div>
</div>
@empty
    <h5 class="text-center mb-4">Không có kết quả</h5>
@endforelse