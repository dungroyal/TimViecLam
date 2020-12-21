@extends('layouts.admin')

@section('title', 'Hồ sơ công ty| ')

@section('header')
@include('employer.element.header')
@endsection

@section('sidebar')
@include('employer.element.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Cập nhật thông tin</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Cập nhật thông tin chung</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @if ($info_company->status==0)
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-circle text-warning mr-1"></i> {{ $info_company->name_company }}!</strong> Đang chờ duyệt!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>
            </div>
        @elseif($info_company->status==2)
            <div class="row">
                <div class="col-xl-12">
                    <div class="alert alert-danger" role="alert">
                        <h6 class="alert-heading"><i class="fas fa-check-circle text-danger mr-1"></i><strong>{{ $info_company->name_company }}!</strong> của bạn không được duyệt!</h6>
                        <hr>
                        <p class="mb-0"><strong>Lý do: </strong> {{ $info_company->note }}.</p>
                    </div>
                </div>
            </div>
        @elseif($info_company->status==1)
        <div class="row">
            <div class="col-xl-12">
                <div class="alert alert-success" role="alert">
                    <h6 class="alert-heading"><i class="fas fa-check-circle text-success mr-1"></i>Chúc mừng! <strong>{{ $info_company->name_company }}!</strong> của bạn đã được duyệt!</h6>
                </div>
            </div>
        </div>
        @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Thông tin tài khoản</h4>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 text-center order-2">
                                <h4 class="card-title">Logo công ty</h4>
                                    <form id="formUploadLogo" method="POST" action="{{Route('employer.uploadLogo')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="avatar-upload-jsk py-2">
                                            <div class="avatar-edit">
                                                <input type='file' name="logo" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            </div>
                                            <div class="avatar-preview-jsk">
                                                <label for="imageUpload" class="imageUpload"> <i class="bx bxs-cloud-upload"></i></label>
                                                @if ($info_company->logo != null)
                                                    <div id="imagePreview" style="background-image: url('{{asset('/')}}{{$info_company->logo}}');" ></div>
                                                @else
                                                    <div id="imagePreview" style="background-image: url('{{asset('/images/logo/timvieclam-placeholder.png')}}');" ></div>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                <h4 class="card-title mt-4">Giấy phép kinh doanh</h4>
                                @if ($info_company->business_license == null)
                                    <div class="box-upload mt-3">
                                        <form id="formUploadBusinessLicense" method="POST" action="{{Route('employer.UploadBusinessLicense')}}" enctype="multipart/form-data">
                                            @csrf
                                            <th colspan="2" class="text-center">
                                                <p class="text-danger mb-0 mt-4">Chưa có giấy phép kinh doanh</p>
                                                <label for="business_license" class="btn btn-primary btn-sm mt-2"><i class="fas fa-file-upload mr-1"></i> Tải lêm GPKD</label>
                                                <input type="file" name="business_license" accept=".pdf" id="business_license" style="display: none;">
                                                <div class="text-note small">
                                                    <strong>GPKD</strong> phải có định dạng <strong>.pdf</strong>. <br> Dung lượng file tải lên không được vượt quá <strong>3Mb</strong>.
                                                </div>
                                            </th>
                                        </form>
                                    </div>
                                @else
                                    <div class="box-upload mt-4">
                                        <th colspan="2" class="text-center mt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-file-earmark-text text-success" viewBox="0 0 16 16">
                                                    <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                                    <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                </svg><br>
                                            <a  class="text-note">
                                                <strong>GPKD</strong><strong>.pdf</strong>
                                            </a>
                                            <div class="mt-2">
                                                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-eye"></i></a>
                                                <a href="{{Route('employer.downloadBusinessLicense')}}" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i></a>
                                                <button class="btn btn-danger btn-sm deleteBusinessLicense"><i class="far fa-trash-alt"></i></button>        
                                            </div>
                                        </th>
                                    </div>
                                @endif
                            </div>
                             <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h6 class="modal-title" id="staticBackdropLabel">Giấy phép kinh doanh {{$info_company->name_company}}</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe type="application/pdf" src="{{url('/')}}/{{$info_company->business_license}}" width="100%" height="685" style="border: none;"></iframe>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            
                            <div class="col-sm-6 col-lg-8 order-1">
                            <form method="POST" action="{{ route('employer.company_info')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Địa chỉ email</label>
                                    <input value="{{ $info_employer->email }}" type="text" class="form-control"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <a href="" class="font-weight-bold"> <i class="bx bx-lock-open-alt"></i> Đổi mật
                                        khẩu</a>
                                </div>
                                <hr>
                                <h4 class="card-title">Thông tin công ty</h4>
                                <div class="form-group">
                                    <label for="name-company">Tên công ty</label>
                                    <input id="name-company" name="name-company"
                                        value="{{ $info_company->name_company }}" type="text" class="form-control"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ công ty <span class="text-danger">*</span></label>
                                    <input id="address" name="address" value="{{ $info_company->address }}" type="text"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="city">Tỉnh/thành phố<span class="text-danger">*</span></label>
                                        <select class="selectpicker selectpicker_city form-control" 
                                            name="city"
                                            data-live-search="true" 
                                            data-size="5"
                                            title="Chọn tỉnh thành phố">
                                            @foreach (App\Models\City::all() as $item)
                                                <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                            @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="personnel_size">Quy mô nhân sự</label>
                                    <input  value="Dưới 10 người" type="text" class="form-control"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="career">Lĩnh vực hoạt động <span class="text-danger">*</span></label>
                                    <select class="selectpicker selectpicker_career form-control" 
                                            name="career"
                                            data-live-search="true" 
                                            data-size="5"
                                            title="Chọn lĩnh vực hoạt động">
                                            @foreach (\App\Models\Career::all() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                    </select>

                                    <div class="form-group mt-2">
                                        <label for="productdesc">Mô tả sơ lược về công ty <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control"  name="description" rows="5">{{ $info_company->description }}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Website</label>
                                                        <input  name="website" value="{{ $info_company->website }}" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Số điện thoại công ty</label>
                                                        <input name="phone" value="{{ $info_company->phone }}" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="personnel_size">Fax công ty</label>
                                                        <input name="fax"  value="{{ $info_company->fax }}" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="card-title">Thông tin liên hệ</h4>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Người liên hệ</label>
                                                    <input  name="name_contact" value="{{ $info_company->name_contact }}" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Số điện thoại liên hệ</label>
                                                    <input name="phone_contact"  value="{{ $info_company->phone_contact }}" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Địa chỉ người liên hệ</label>
                                                    <input name="address_contact"  value="{{ $info_company->address_contact }}" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="personnel_size">Email liên hệ</label>
                                                    <input name="email_contact" value="{{ $info_company->email_contact }}" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 btn-sm m-auto">Cập nhật thông tin</button>
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
        $( document ).ready(function() {
            $('.selectpicker_city').selectpicker('val', '<?=$info_company->city?>');
            $('.selectpicker_career').selectpicker('val', '<?=$info_company->career_id?>');
        
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
                    $('#formUploadLogo').trigger('submit');
                }
            }

            $("#business_license").change(function () {
                $('#formUploadBusinessLicense').trigger('submit');
            });

            $('.deleteBusinessLicense').on('click', function (e) {
            Swal.fire({
                icon: 'warning',
                title: 'Bạn muốn xóa giấy phép kinh doanh?',
                showCancelButton: true,
                confirmButtonText: `Đồng ý`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ Route('employer.deleteBusinessLicense')}}";
                }
            })
        });

            if('<?=session('success')?>'){
                Toast.fire({
                    icon: 'success',
                    title: '<?=session('success')?>'
                });
            }

            if('<?=session('error')?>'){
                Toast.fire({
                    icon: 'error',
                    title: '<?=session('error')?>'
                });
            }
        });
    </script>
@endpush
