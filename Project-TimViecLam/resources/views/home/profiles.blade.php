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
                                    <select name="career" class="profile-select w-100" data-size="7"
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
                                    <select name="career" class="profile-select w-100" data-size="7"
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
                                    <select name="career" class="profile-select w-100" data-size="7"
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
                                    <select name="career" class="profile-select w-100" data-size="7"
                                        data-live-search="true" title="Tất cả trình độ">
                                        @foreach (App\Models\Degree::all() as $items)
                                            <option class="py-2" value="{{ $items->id }}"> {{ $items->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <button type="button" class="el-button btn-block mt-10 mb-0 el-button--primary">
                            <span>Tìm kiếm</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-lg-9">
            <div class="box_general grid-items">
                <p style="font-weight: 700;padding: 14px;font-size: 16px;margin-bottom: 0">
                    Tìm thấy 1,058,155 kết quả ứng viên.
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
                                    <tr class="border-emp-search" >
                                        <td scope="row" class="pt-2 pl-4">
                                            <p class="item-title text_ellipsis text_ellipsis-emp" >
                                                <a href="{{ Route('profile-detail',['id' => 1]) }}"title="Trưởng Phòng Nhân Sự" target="_blank" class="capitalize fontsize-search-emp">
                                                    Trưởng Phòng Nhân Sự 
                                                </a>
                                            </p>
                                            <p class="user_name text_ellipsis capitalize mb-2">
                                                <i class="far fa-user mr-2"></i>Lê Ngọc Thảo
                                            </p>
                                        </td>
                                        <td class="pt-2">
                                            <p title="25-30 triệu" class="year_exp text_ellipsis" >
                                                25-30 triệu
                                            </p>
                                        </td>
                                        <td class="pt-2">
                                            <p title="Hồ Chí Minh" class="year_exp text_ellipsis">
                                                Hồ Chí Minh
                                            </p>
                                        </td>
                                        <td class="pt-2">
                                            <p class="year_exp text_ellipsis">
                                                3 năm
                                            </p>
                                        </td>
                                        <td class="pt-2">
                                            <p class="text-muted year_exp text_ellipsis">
                                                02/12
                                            </p>
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
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('#app').addClass("bgGray");
    })
</script>
@endpush
