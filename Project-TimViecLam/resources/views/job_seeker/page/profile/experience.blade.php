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
        @if (DB::table('experience_detail')->where('id_profile', $Profile->id)->count() == 0)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Kinh nghiệm làm việc</h4>
                    <div class="print-error-msg alert alert-warning alert-dismissible fade show" style="display:none" role="alert">
                        <div>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form method="POST" action="{{route('job-seeker.profile.step4')}}">
                        @csrf
                        <input type="hidden" name="idExperience" value="0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chức danh / vị trí</label>
                                    <input type="text" name="position" value="{{ old('position') }}" class="form-control  @error('position') is-invalid @enderror">
                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Công ty</label>
                                    <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}">
                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Thời gian bắt đầu</label>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <select class="custom-select @error('month_start') is-invalid @enderror" name="month_start">
                                            <option value="0" selected>Tháng bắc đầu</option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{$i}}">Tháng {{$i}}</option>
                                            @endfor
                                          </select>
                                          @error('month_start')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                        <select class="custom-select" name="month_end">
                                            <option value="0" selected>Tháng kết thúc</option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{$i}}">Tháng {{$i}}</option>
                                            @endfor
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                        <select class="custom-select" name="year_end">
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
                                    <textarea class="form-control @error('month_start') is-invalid @enderror" name="note" placeholder="Mô tả về các nhiệm vụ, trách nhiệm trong quá trình làm việc tại công ty. Các kỹ năng bạn học hỏi được hoặc các thành tựu đã đạt được (Ví dụ: Nhân viên xuất sắc tháng/năm...)" rows="3"></textarea>
                                    @error('note')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                <h4 class="card-title">Kinh nghiệm làm việc</h4>
                <hr>
                @foreach (DB::table('experience_detail')->where('id_profile', $Profile->id)->orderBy('year_end', 'asc')->get() as $experience)
                <div class="list-profile-item row mx-1  mb-3">
                    <div class="float-left">
                        <svg width="3rem" height="3rem" viewBox="0 0 16 16"
                            class="bi bi-building p-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                            <path
                                d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                        </svg>
                    </div>
                    <div class="col-8">
                        <div class="mb-1">
                            <strong>{{$experience->company}}</strong> 
                            (Từ {{$experience->month_start}}/{{$experience->year_start}} - {{$experience->month_end}}/{{$experience->year_end}})
                        </div>
                        <div class="row font-size-14">
                            <div class="col-md-12 mb-1">
                                <strong>Vị trí:</strong> {{$experience->position}}
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <a href="" class="updateExperience" data-item="{{$experience->id}}">
                            <svg width="1.4rem" height="2.5rem" viewBox="0 0 16 16" class="bi mt-3 bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg>
                        </a>
                        <a href="" data-toggle="tooltip" title="Xóa" class="deleteExperience" data-item="{{$experience->id}}">
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
                                <h6 class="modal-title mt-0" id="myExtraLargeModalLabel">Thêm kinh nghiệm làm việc</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-4">
                                <form method="POST" action="{{route('job-seeker.profile.step4')}}">
                                    @csrf
                                    <input type="hidden" name="idExperience" id="idExperience" value="0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Chức danh / vị trí</label>
                                                <input type="text" name="position" id="position" value="{{ old('position') }}" class="form-control  @error('position') is-invalid @enderror">
                                                @error('position')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Công ty</label>
                                                <input type="text" name="company" id="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}">
                                                @error('company')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="">Thời gian bắt đầu</label>
                                              <div class="row">
                                                  <div class="col-md-6">
                                                    <select class="custom-select @error('month_start') is-invalid @enderror" name="month_start">
                                                        <option>Tháng bắc đầu</option>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{$i}}">Tháng {{$i}}</option>
                                                        @endfor
                                                      </select>
                                                      @error('month_start')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
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
                                                    <select class="custom-select" name="month_end">
                                                        <option value="0" selected>Tháng kết thúc</option>
                                                        @for ($i = 1; $i <= 12; $i++)
                                                            <option value="{{$i}}">Tháng {{$i}}</option>
                                                        @endfor
                                                      </select>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <select class="custom-select" name="year_end">
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
                                                <textarea class="form-control @error('month_start') is-invalid @enderror" name="note" id="note" placeholder="Mô tả về các nhiệm vụ, trách nhiệm trong quá trình làm việc tại công ty. Các kỹ năng bạn học hỏi được hoặc các thành tựu đã đạt được (Ví dụ: Nhân viên xuất sắc tháng/năm...)" rows="3"></textarea>
                                                @error('note')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
            $(".updateExperience").click(function(event) {
                event.preventDefault()
                var idExperience = this.getAttribute("data-item")
                $('#modal-add-exp').modal('show')
                $('#idExperience').val(idExperience);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.getExperienceById') !!}',
                    data: {idExperience:idExperience},
                    success:function(res){
                        var experience_detail = res.experience_detail;
                        $('#myExtraLargeModalLabel').html("Chỉnh sửa: <strong>" + experience_detail.company + "</strong>")
                        $('.btn-submit-profile_add').html("Lưu thay đổi")
                        $('.btn-submit-profile_add').addClass("btn_update")
                        $('#position').val(experience_detail.position)
                        $('#company').val(experience_detail.company)
                        $('#note').html(experience_detail.note)
                    }, 
                    error: function(e){
                        console.log(e);
                        alert("Thất bại!");
                    }
                });
            });

            $(".deleteExperience").click(function(event) {
                event.preventDefault();
                var idExperience = this.getAttribute("data-item");
                Swal.fire({
                    icon:'warning',
                    title: 'Bạn có chắc chắn muốn xóa kinh nghiệm này?',
                    showCancelButton: true,
                    confirmButtonText: `Đồng ý`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'post',
                            url: '{!! route('job-seeker.profile.step4.delete') !!}',
                            data: {idExperience:idExperience},
                            success:function(res){
                                if($.isEmptyObject(res.error)){
                                    $('.list-profile-item[data-item="'+idExperience+'"]').remove();
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