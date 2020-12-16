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
                    <h4 class="card-title">Kỹ năng</h4>
                    <div class="print-error-msg alert alert-warning alert-dismissible fade show" style="display:none" role="alert">
                        <div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form id="form_skill">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kỹ năng chuyên môn</label>
                                    <?php $skill = DB::table('skill_detail')->where('id_profile',$Profile->id)->first() ?>
                                    <textarea 
                                    class="form-control" 
                                    id="professional_skills" 
                                    name="professional_skills" 
                                    placeholder="Nêu rõ các kỹ năng chuyên môn trong công việc của bạn. Ví dụ: Kỹ năng bán hàng, design web, biên tập, tổ chức sự kiện..." 
                                    rows="4">{{$skill != null ? $skill->professional_skills : ""}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pl-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Kỹ năng tổ chức"  class="custom-control-input" id="ortherSkill1">
                                        <label class="custom-control-label" for="ortherSkill1">Kỹ năng tổ chức</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Kỹ năng giao tiếp" class="custom-control-input" id="ortherSkill2">
                                        <label class="custom-control-label"  for="ortherSkill2">Kỹ năng giao tiếp</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value='Kỹ năng giao tiếp'  class="custom-control-input" id="ortherSkill3">
                                        <label class="custom-control-label" for="ortherSkill3">Kỹ năng giao tiếp</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Kỹ năng lãnh đạo" class="custom-control-input" id="ortherSkill4">
                                        <label class="custom-control-label"  for="ortherSkill4">Kỹ năng lãnh đạo</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Kỹ năng thuyết trình" class="custom-control-input" id="ortherSkill5">
                                        <label class="custom-control-label" value="Kỹ năng thuyết trình" for="ortherSkill5">Kỹ năng thuyết trình</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Lập kế hoạch" class="custom-control-input" id="ortherSkill6">
                                        <label class="custom-control-label"  for="ortherSkill6">Lập kế hoạch</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Quản lý thời gian hiệu quả" class="custom-control-input" id="ortherSkill7">
                                        <label class="custom-control-label"  for="ortherSkill7">Quản lý thời gian hiệu quả</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Dễ dàng thích nghi với môi trường mới" class="custom-control-input" id="ortherSkill8">
                                        <label class="custom-control-label" for="ortherSkill8">Dễ dàng thích nghi với môi trường mới</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Tư duy sáng tạo" class="custom-control-input" id="ortherSkill9">
                                        <label class="custom-control-label" for="ortherSkill9">Tư duy sáng tạo</label>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <hr>
                        <div class="row mt-3 float-right">
                            <button type="submit" class="btn btn-primary mr-3" href="#" >Cập nhật</button>
                        </div>
                    </form>
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
            $("#form_skill").on("submit", function(e){
                e.preventDefault();    
                $(".btn-submit-profile_add").html('Cập nhật <i class="fas fa-spinner text-white fa-spin ml-2"></i>');
                
                var ortherSkill = [];
                var professional_skills = $('#professional_skills').val();
                $(".custom-control-input").each(function(){
                    if ($(this).is(":checked")) {
                        ortherSkill.push($(this).val());
                    }
                });
                other_skill = ortherSkill.toString();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.profile.step5') !!}',
                    data: {professional_skills:professional_skills,other_skill:other_skill},
                    success:function(res){
                        if($.isEmptyObject(res.error)){
                            setTimeout(function() {
                                $(".print-error-msg").css('display','none');
                                $(".list-profile-item").html(res);
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Cập nhật kỹ năng thành công!'
                                });
                            }, 100);
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        }else{
                            printErrorMsg(res.error);
                            $(".btn-submit-profile_add").append('Cập nhật <i class="far fa-times-circle ml-2"></i>');
                        }
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