@extends('layouts.home')

@section('content')
<div class="container-fluid my-5">
    <hr class="mt-n2">
</div>
<div class="container">
    <div class="row box-candidate">
        <div class="col-lg-3 col-md-3 mb-5">
            <div class="candidate_right pd-15 bg-white">
                <div>
                    <form action="{{Route('all-profile')}}" method="get">
                        <div class="box-search-relate">
                            <div class="box_search box_search_pro pt-0">
                                <div class="form-group m-0 p-0">
                                    <span class="profile-select__icon"><i class="fas fa-tools"></i></span>
                                        <select name="career" id="career" class="profile-select w-100" data-size="7"
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
                                        <select name="city" id="city" class="profile-select w-100" data-size="7"
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
                                        <select name="salary" id="salary"  class="profile-select w-100" data-size="7"
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
                                        <select name="experience" id="experience" class="profile-select w-100" data-size="7"
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
                                        <select name="degree" id="degree" class="profile-select w-100" data-size="7"
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
        <div class="col-md-9 col-lg-9">
            <div class="box_general grid-items">
                <p style="font-weight: 700;padding: 14px;font-size: 16px;margin-bottom: 0">
                    @if (count($profiles) === 1)
                        Tìm thấy 1 kết quả ứng viên.
                    @elseif (count($profiles) > 1)
                        Tìm thấy {{count($profiles)}} quả ứng viên.
                    @else
                        Không tìm thấy kết quả ứng viên nào.
                    @endif
                </p>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr style="background-color: #f9eba4">
                                        <th scope="col" class="pl-4">Hồ sơ</th>
                                        <th scope="col">Mức lương</th>
                                        <th scope="col">Khu vực</th>
                                        <th scope="col">Kinh nghiệm</th>
                                        <th scope="col">Cập nhật</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($profiles as $profile)
                                        <tr class="border-emp-search" >
                                            <td scope="row" class="pt-2 pl-4">
                                                <p class="item-title text_ellipsis text_ellipsis-emp" >
                                                    <a href="{{ Route('profile-detail',['id' => $profile->id]) }}"title="Trưởng Phòng Nhân Sự" target="_blank" class="capitalize fontsize-search-emp">
                                                        {{$profile->position}}
                                                    </a>
                                                </p>
                                                <p class="user_name text_ellipsis capitalize mb-2">
                                                    <i class="far fa-user mr-2"></i>
                                                    {{ App\JobSeeker::findOrFail($profile->job_seeker_id)->name}}
                                                </p>
                                            </td>
                                            <td class="pt-2">
                                                <p title="25-30 triệu" class="year_exp text_ellipsis" >
                                                    {{App\Models\Salary::findOrFail($profile->salary_id)->name}}
                                                </p>
                                            </td>
                                            <td class="pt-2">
                                                <p title="Hồ Chí Minh" class="year_exp text_ellipsis">
                                                    {{App\Models\City::findOrFail($profile->work_location)->name}}
                                                </p>
                                            </td>
                                            <td class="pt-2">
                                                <p class="year_exp text_ellipsis">
                                                    {{App\Models\Experience::findOrFail($profile->experience_id)->name}}
                                                </p>
                                            </td>
                                            <td class="pt-2">
                                                <p class="text-muted year_exp text_ellipsis">
                                                    {{date_format($profile->updated_at,"d/m/Y")}}
                                                </p>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="border-emp-search" >
                                            <td scope="row" colspan="5" class="pt-3 text-center">
                                                Không tìm thấy hồ sơ nào phù hợp!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                {{ $profiles->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#app').addClass("bgGray");
        $('#career').selectpicker('val', '<?=$request->career?>');        
        $('#city').selectpicker('val', '<?=$request->city?>');        
        $('#salary').selectpicker('val', '<?=$request->salary?>');        
        $('#experience').selectpicker('val', '<?=$request->experience?>');        
        $('#degree').selectpicker('val', '<?=$request->degree?>');        
    })
</script>
@endpush
