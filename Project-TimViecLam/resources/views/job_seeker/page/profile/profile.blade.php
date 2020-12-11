@extends('layouts.admin')

@section('title', 'Quản lý hồ sơ| ')

@section('header')
@include('job_seeker.element.header')
@endsection

@section('sidebar')
@include('job_seeker.element.sidebar')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Cập nhật hồ sơ</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý hồ sơ</a></li>
                            <li class="breadcrumb-item active">Cập nhật hồ sơ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('job_seeker.element.headerProfile')
        <div class="row">
               
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Thông hồ sơ</h4>
                        <div class="print-error-msg alert alert-warning alert-dismissible fade show" style="display:none" role="alert">
                            <div>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">  
                                <div class="col-sm-12 col-lg-2">
                                    <form id="formUploadAvatar" enctype="multipart/form-data">
                                        <div class="avatar-upload-jsk py-2">
                                            <div class="avatar-edit">
                                                <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            </div>
                                            <div class="avatar-preview-jsk">
                                                <label for="imageUpload" class="imageUpload"> <i class="bx bxs-cloud-upload"></i></label>
                                                <div id="imagePreview" style="background-image: url('https://ui-avatars.com/api/?size=250&bold=true&background=0091cf&color=fffff&name=DoanQuocDung');"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 col-lg-10">
                                    <form id="form-complete_profile2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vị trí/việc làm cần ứng tuyển:</label>
                                                <input type="text" name="position" value="{{$Profile->position}}" class="form-control" autocomplete="false">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Trình độ học vấn:</label>
                                                    <select class="selectpicker select_degree form-control" 
                                                        name="degree_id" 
                                                        title="Chọn trình độ học vấn.">
                                                        @foreach (App\Models\Degree::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Số năm kinh nghiệm:</label>
                                                    <select class="selectpicker select_experience form-control" 
                                                        name="experience_id" 
                                                        title="Chọn số năm kinh nghiệm.">
                                                        @foreach (App\Models\Experience::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nơi làm việc</label>
                                                    <select class="selectpicker select_work_location form-control  @error('city') is-invalid @enderror" 
                                                        name="work_location"
                                                        data-live-search="true" 
                                                        data-size="6" 
                                                        title="Chọn nơi làm việc.">
                                                        @foreach (App\Models\City::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Ngành nghề</label>
                                                    <select class="selectpicker select_career_id form-control  @error('city') is-invalid @enderror" 
                                                        name="career_id"
                                                        data-live-search="true" 
                                                        data-size="6" 
                                                        title="Chọn ngành nghề.">
                                                        @foreach (App\Models\Career::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Loại hình công việc</label>
                                                    <select class="selectpicker select_type_job_id form-control  @error('city') is-invalid @enderror" 
                                                        name="type_job_id"
                                                        data-size="6" 
                                                        title="Chọn loại hình công việc.">
                                                        @foreach (App\Models\TypeJob::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Cấp bậc</label>
                                                    <select class="selectpicker select_grade_id form-control  @error('city') is-invalid @enderror" 
                                                        name="grade_id"
                                                        data-size="6" 
                                                        title="Chọn cấp bậc.">
                                                        @foreach (App\Models\Grade::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mức lương</label>
                                                    <select class="selectpicker select_salary_id form-control  @error('city') is-invalid @enderror" 
                                                        name="salary_id"
                                                        data-size="6" 
                                                        title="Chọn mức lương.">
                                                        @foreach (App\Models\Salary::all() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Mô tả mục tiêu nghề nghiệp</label>
                                                    <textarea class="form-control" name="career_description" placeholder="Mô tả, giới thiệu về định hướng công việc của bản thân trong tương lai ngắn hạn hoặc dài hạn." rows="3">{{$Profile->career_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3 float-right">
                                <button type="submit" class="btn btn-primary mr-3 btn-submit-profile">Cập nhật</button>
                            </div>
                        </div>
                    </form>   
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
            $('.select_degree').selectpicker('val', '<?=$Profile->degree_id?>');
            $('.select_experience').selectpicker('val', '<?=$Profile->experience_id?>');
            $('.select_work_location').selectpicker('val', '<?=$Profile->work_location?>');
            $('.select_career_id').selectpicker('val', '<?=$Profile->career_id?>');
            $('.select_type_job_id').selectpicker('val', '<?=$Profile->type_job_id?>');
            $('.select_grade_id').selectpicker('val', '<?=$Profile->grade_id?>');
            $('.select_salary_id').selectpicker('val', '<?=$Profile->salary_id?>');
            
            $("#form-complete_profile2").on("submit", function(e){
                e.preventDefault();                
                $(".btn-submit-profile").html('Cập nhật <i class="fas fa-spinner text-white fa-spin ml-2"></i>');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.profile.step2') !!}',
                    data: $('#form-complete_profile2').serialize(),
                    success:function(res){
                        if($.isEmptyObject(res.error)){
                            setTimeout(function() {
                                $(".print-error-msg").css('display','none');
                                $(".btn-submit-profile").html('Cập nhật <i class="far fa-check-circle ml-2"></i>');
                            }, 500);
                        }else{
                            printErrorMsg(res.error);
                            $(".btn-submit-profile").html('Cập nhật <i class="far fa-times-circle ml-2"></i>');
                        }
                    }, 
                    error: function(e){
                        console.log(e);
                        alert("Thất bại!");
                    }
                });
            });
            
                        
            $("#imageUpload").change(function () {
                readURL(this);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $('#formUploadAvatar').trigger('submit');
                }
            }

            $("#formUploadAvatar").on("submit", function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.profile.uploadAvatars') !!}',
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success:function(res){
                        console.log(res);
                        
                    }, 
                    error: function(e){
                        console.log(e);
                        alert("Thất bại!");
                    }
                });
            });

            function printErrorMsg (msg) {
                $(".print-error-msg").find("div").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("div").append('<span><i class="fas fa-exclamation-circle mr-2"></i>'+value+'</span><br>');
                });
            }
        });
    </script>
@endpush