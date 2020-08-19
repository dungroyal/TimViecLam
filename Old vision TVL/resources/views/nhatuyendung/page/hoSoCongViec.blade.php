@extends('nhatuyendung.main')
@section('content')

<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hồ sơ ứng tuyển theo công việc</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="show">
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
                        <th>Công việc</th>
                        <th>Số lượng</th>
                        <th>Địa điểm</th>
                        <th>ngày hết hạn</th>
                        <th>Đơn ứng tuyển</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt=0 ?>
                    @foreach ($listCongViec as $cv)
                    <?php $stt+=1 ?>
                        <tr class="tr-shadow text-center">
                            <td>{{ $stt }}</td>
                            <td class="desc text-left">{{ $cv->tenCongViec }}</td>
                            <td>{{ $cv->soluong }}</td>
                            <td>{{ $cv->name }}</td>
                            <td>{{ $cv->deadline }}</td>
                            <td>
                                <span class="btn btn-outline-danger" data-toggle="tooltip" title="Chưa có đơn ứng tuyển">0</span>
                            </td>
                            <td>
                                <span class="status--process">Đang chạy</span>
                            </td>
                            <td>
                                <div class="table-data-feature">
                                    <a href="/nha-tuyen-dung/ung-tuyen/{{{ $cv->id}}}" class="item" data-toggle="tooltip" title="Xem chi tiết">
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
