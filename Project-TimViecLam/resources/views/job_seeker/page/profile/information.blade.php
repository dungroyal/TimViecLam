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
                    <h4 class="card-title">Thông tin cá nhân</h4>
                        <div class="print-error-msg alert alert-warning alert-dismissible fade show" style="display:none" role="alert">
                            <div>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="form-complete_profile1">
                            <div class="row">         
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input type="text" name="name" value="{{$JobSeeker->name}}" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Địa chỉ email</label>
                                        <input type="email" value="{{$JobSeeker->email}}" name="email" class="form-control">
                                      
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="formrow-password-input">Số điện thoại</label>
                                        <input type="text" value="{{$JobSeeker->phone}}" name="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">         
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input type="date" value="{{$Profile->birthday}}" name="birthday" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" value="{{$Profile->address}}" name="address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tỉnh/thành phố</label>
                                        <select class="selectpicker selectpicker_city form-control" 
                                            name="city"
                                            data-live-search="true" 
                                            data-size="5" 
                                            title="Chọn tỉnh/thành phố.">
                                            @foreach (App\Models\City::all() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">         
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="d-block mb-3">Giới tính:</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" value="0" id="Male" name="sex" class="custom-control-input">
                                            <label class="custom-control-label" for="Male">Nam</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" value="1" id="Female" name="sex" class="custom-control-input">
                                            <label class="custom-control-label" for="Female">Nữ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="d-block mb-3">Tình trạng hôn nhân:</label>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" value="0" id="alone" name="marriage" class="custom-control-input">
                                            <label class="custom-control-label" for="alone">Độc thân</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" value="1" id="married" name="marriage" class="custom-control-input">
                                            <label class="custom-control-label" for="married">Đã kết hôn</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3 float-right">
                                <button type="submit" class="btn btn-submit-info btn-primary mr-3">Cập nhật</button>
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
            $('.selectpicker_city').selectpicker('val', '<?=$Profile->work_location?>');
            $('input:radio[name="marriage"]').filter('[value="<?=$Profile->marital_status?>"]').attr('checked', true);
            $('input:radio[name="sex"]').filter('[value="<?=$Profile->gender?>"]').attr('checked', true);
            $("#form-complete_profile1").on("submit", function(e){
                e.preventDefault();                
                $(".btn-submit-info").html('Cập nhật <i class="fas fa-spinner text-white fa-spin ml-2"></i>');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '{!! route('job-seeker.profile.step1') !!}',
                    data: $('#form-complete_profile1').serialize(),
                    success:function(res){
                        if($.isEmptyObject(res.error)){
                            setTimeout(function() {
                                $(".print-error-msg").css('display','none');
                                $(".btn-submit-info").html('Cập nhật <i class="far fa-check-circle ml-2"></i>');
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Cập nhật thông tin cá nhân thành công!'
                                });
                            }, 500);
                        }else{
                            printErrorMsg(res.error);
                            $(".btn-submit-info").html('Cập nhật <i class="far fa-times-circle ml-2"></i>');
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