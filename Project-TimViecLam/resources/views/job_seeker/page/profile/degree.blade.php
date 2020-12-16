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
        @if (DB::table('degree_details')->where('id_profile', $Profile->id)->count() == 0)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Học vấn - Bằng cấp</h4>
                    <div class="print-error-msg alert alert-warning alert-dismissible fade show" style="display:none" role="alert">
                        <div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form method="POST" action="{{route('job-seeker.profile.step3')}}">
                        @csrf
                        <input type="hidden" id="idDegree" name="idDegree" value="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Trường, cơ sở, trung tâm đào tạo</label>
                                    <input type="text" name="university" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Khoa đào tạo</label>
                                    <input type="text" name="faculty" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên bằng cấp chứng chỉ</label>
                                    <input type="text" name="certificate" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chuyên ngành đào tạo</label>
                                    <input type="text" name="major" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Xếp loại</label>
                                    <select class="custom-select" name="ranked">
                                        <option selected>Chọn xếp loại</option>
                                        <option value="Yếu">Yếu</option>
                                        <option value="Trung bình">Trung bình</option>
                                        <option value="Khá">Khá</option>
                                        <option value="Giỏi">Giỏi</option>
                                        <option value="Xuất sắc">Xuất sắc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Thời gian bắt đầu</label>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <select class="custom-select" name="month_start">
                                            <option value="0" selected>Tháng bắc đầu</option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{$i}}">Tháng {{$i}}</option>
                                            @endfor
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                        <select class="custom-select" name="year_start">
                                            <option value="0" selected>Năm bắc đầu</option>
                                            @for ($i = 2000; $i <= 2020; $i++)
                                                <option value="{{$i}}">Năm {{$i}}</option>
                                            @endfor
                                          </select>
                                      </div>
                                  </div>
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Thời gian kết thúc</label>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <select class="custom-select" name="graduation_month">
                                            <option value="0" selected>Tháng kết thúc</option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{$i}}">Tháng {{$i}}</option>
                                            @endfor
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                        <select class="custom-select" name="graduation_year">
                                            <option value="0" selected>Năm kết thúc</option>
                                            @for ($i = 2000; $i <= 2020; $i++)
                                                <option value="{{$i}}">Năm {{$i}}</option>
                                            @endfor
                                          </select>
                                      </div>
                                  </div>
                                  
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin bổ sung</label>
                                    <textarea class="form-control" name="detail" placeholder="Mô tả, giới thiệu về định hướng công việc của bản thân trong tương lai ngắn hạn hoặc dài hạn." rows="5"></textarea>
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
    @else
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">HỌC VẤN - BẰNG CẤP</h4>
                <hr>
                @foreach (DB::table('degree_details')->where('id_profile', $Profile->id)->orderBy('graduation_year', 'asc')->get() as $degree)
                <div class="list-profile-item row mx-1 mb-3" data-item="{{$degree->id}}">
                    <div class="float-left">
                        <svg width="3rem" height="4rem" viewBox="0 0 16 16"
                            class="bi bi-book-half p-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                        
                    </div>
                    <div class="col-8">
                        <div class="mb-1">
                            <strong>{{$degree->university}}</strong> 
                            (Từ {{$degree->month_start}}/{{$degree->year_start}} - {{$degree->graduation_month}}/{{$degree->graduation_year}})
                        </div>
                        <div class="row font-size-14">
                            <div class="col-md-6 mb-1">
                                <strong>Tên chứng chỉ:</strong> {{$degree->certificate}}
                            </div>
                            <div class="col-md-6 mb-1">
                                <strong>Khoa:</strong> {{$degree->faculty}}
                            </div>
                            <div class="col-md-6">
                                <strong>Ngành:</strong> {{$degree->major}}
                            </div>
                            <div class="col-md-6">
                                <strong>Xếp loại:</strong> {{$degree->ranked}}
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="updateDegree" data-item="{{$degree->id}}" data-toggle="tooltip" title="Chỉnh sửa">
                            <svg width="1.4rem" height="2.5rem" viewBox="0 0 16 16" class="bi mt-3 bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                        <a href="#" class="deleteDegree" data-item="{{$degree->id}}" data-toggle="tooltip" title="Xóa">
                            <svg width="1.4rem" height="1.4rem" viewBox="0 0 16 16" class="bi text-danger ml-2 mr-3 mt-3 bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
                
                <div class="list-profile-item row mx-1 mb-3 text-center" type="button" data-toggle="modal" data-target="#modal-add-exp">
                    <div class="m-auto">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="my-1 bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="modal-add-exp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title mt-0" id="myExtraLargeModalLabel">Thêm học vấn, bằng cấp</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-4">
                                <form id="form-complete_profile3">
                                    @csrf
                                    <input type="hidden" id="idDegree" name="idDegree" value="0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trường, cơ sở, trung tâm đào tạo</label>
                                                <input type="text" id="university" name="university" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Khoa đào tạo</label>
                                                <input type="text" id="faculty" name="faculty" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên bằng cấp chứng chỉ</label>
                                                <input type="text" id="certificate" name="certificate" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Chuyên ngành đào tạo</label>
                                                <input type="text" id="major" name="major" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Xếp loại</label>
                                                <select class="custom-select" name="ranked">
                                                    <option selected>Chọn xếp loại</option>
                                                    <option value="Yếu">Yếu</option>
                                                    <option value="Trung bình">Trung bình</option>
                                                    <option value="Khá">Khá</option>
                                                    <option value="Giỏi">Giỏi</option>
                                                    <option value="Xuất sắc">Xuất sắc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="">Thời gian bắt đầu</label>
                                              <div class="row">
                                                  <div class="col-md-6">
                                                    <select class="custom-select" name="month_start">
                                                        <option value="0" selected>Tháng kết thúc</option>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{$i}}">Tháng {{$i}}</option>
                                                        @endfor
                                                      </select>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <select class="custom-select" name="year_start">
                                                        <option value="0" selected>Năm kết thúc</option>
                                                        @for ($i = 2000; $i <= 2020; $i++)
                                                            <option value="{{$i}}">Năm {{$i}}</option>
                                                        @endfor
                                                      </select>
                                                  </div>
                                              </div>
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="">Thời gian kết thúc</label>
                                              <div class="row">
                                                  <div class="col-md-6">
                                                    <select class="custom-select" name="graduation_month">
                                                        <option value="0" selected>Tháng kết thúc</option>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{$i}}">Tháng {{$i}}</option>
                                                        @endfor
                                                      </select>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <select class="custom-select" name="graduation_year">
                                                        <option value="0" selected>Năm kết thúc</option>
                                                        @for ($i = 2000; $i <= 2020; $i++)
                                                            <option value="{{$i}}">Năm {{$i}}</option>
                                                        @endfor
                                                      </select>
                                                  </div>
                                              </div>
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Thông tin bổ sung</label>
                                                <textarea class="form-control" id="detail" name="detail" placeholder="Mô tả, giới thiệu về định hướng công việc của bản thân trong tương lai ngắn hạn hoặc dài hạn." rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                                <button type="submit" class="btn btn-sm btn-primary btn-submit-profile_add">Thêm mới</button>
                            </div>
                            
                        </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>
</div>

</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#form-complete_profile3").on("submit", function(e){
                e.preventDefault();    
                $(".btn-submit-profile_add").html('Cập nhật <i class="fas fa-spinner text-white fa-spin ml-2"></i>');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.profile.step3') !!}',
                    data: $('#form-complete_profile3').serialize(),
                    success:function(res){
                        if($.isEmptyObject(res.error)){
                            setTimeout(function() {
                                $(".print-error-msg").css('display','none');
                                
                                $(".list-profile-item").html(res);
                                $('#modal-add-exp').modal('hide')
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Thêm mới học vấn, bằng cấp thành công!'
                                });
                            }, 500);
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

            $(".updateDegree").click(function(event) {
                event.preventDefault()
                var idDegree = this.getAttribute("data-item")
                $('#modal-add-exp').modal('show')
                $('#idDegree').val(idDegree);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.getProfileById') !!}',
                    data: {idDegree:idDegree},
                    success:function(res){
                        var degree_details = res.degree_details;
                        $('#myExtraLargeModalLabel').html("Chỉnh sửa: <strong>" + degree_details.university + "</strong>")
                        $('.btn-submit-profile_add').html("Lưu thay đổi")
                        $('.btn-submit-profile_add').addClass("btn_update")
                        $('#university').val(degree_details.university);
                        $('#faculty').val(degree_details.faculty);
                        $('#certificate').val(degree_details.certificate);
                        $('#major').val(degree_details.major);
                        $('#detail').val(degree_details.detail);
                    }, 
                    error: function(e){
                        console.log(e);
                        alert("Thất bại!");
                    }
                });
            });

            $(".btn_update").click(function() {
                setTimeout(() => {
                    location.reload();
                }, 500);
            })

            $(".deleteDegree").click(function(event) {
                event.preventDefault();
                var idDegree = this.getAttribute("data-item");
                Swal.fire({
                    icon:'warning',
                    title: 'Bạn có chắc chắn muốn xóa học vấn / bằng cấp này?',
                    showCancelButton: true,
                    confirmButtonText: `Đồng ý`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'post',
                            url: '{!! route('job-seeker.profile.step3.delete') !!}',
                            data: {idDegree:idDegree},
                            success:function(res){
                                if($.isEmptyObject(res.error)){
                                    $('.list-profile-item[data-item="'+idDegree+'"]').remove();
                                    setTimeout(function() {
                                        Toast.fire({
                                            icon: 'success',
                                            title: 'Xóa học vấn, bằng cấp thành công!'
                                        });
                                    }, 500);
                                }
                            }, 
                            error: function(e){
                                console.log(e);
                                alert("Thất bại!");
                            }
                        });
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