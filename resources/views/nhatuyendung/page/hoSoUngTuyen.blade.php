@extends('nhatuyendung.main')
@section('content')

<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hồ sơ ứng tuyển công viêc: <span style="color:rgb(0, 61, 194);font-weight:600">{{ $congviec->tenCongViec }}</span> tại <span style="color:rgb(0, 61, 194);font-weight:600;">{{ $congviec->diaDiem }}</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="show">
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">Tất cả hồ sơ</option>
                        <option value="">Hồ sơ mới</option>
                        <option value="">Hồ sơ đã xem</option>
                        <option value="">Hồ sơ chưa sử lý</option>
                        <option value="">Hồ sơ đã xử lý</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr class="text-center">
                        <th>Stt</th>
                        <th>Ảnh đại diện</th>
                        <th>họ và tên</th>
                        <th>Năm sinh</th>
                        <th>Quốc tịch</th>
                        <th>Giới tính</th>
                        <th>Thời gian</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=0 ?>
                    @foreach ($listUngTuyen as $ut)
                    <?php $stt+=1 ?>
                        <tr class="tr-shadow text-center">
                            <td>{{ $stt }}</td>
                            <td class="desc text-center"  width="130px"><img src="{{ asset('images') }}/{{ $ut->avata }}" alt="avatar" width="100%"></td>
                            <td>{{ $ut->hoTen }}</td>
                            <td>{{ $ut->birthdate }}</td>
                            <td>{{ $ut->quocTich }}</td>
                            <td>{{ $ut->gioiTinh }}</td>
                            <td>{{ $ut->date }}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="/nha-tuyen-dung/ung-tuyen/" class="item" data-toggle="tooltip" title="Xem chi tiết">
                                        <i class="zmdi zmdi-square-right"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
</section>
@endsection
