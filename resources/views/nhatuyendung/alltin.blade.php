@extends('nhatuyendung.main')
@section('content')
<section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">TUYỂN DỤNG</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        TẤT CẢ TIN TUYỂN DỤNG</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- RECENT REPORT 2-->
                                <div class="recent-report2">
                                    
                                    <a href="/dangtuyendung" class="btn btn-primary">Thêm mới</a>
                                    <div class="card">
                                    <h3 class="card-header">
                                    DANH SÁCH CÁC TIN TUYỂN DỤNG
                                    </h3>
                                    <div class="card-body">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tên công ty</th>
                                                <th>Vị trí đang tuyển</th>
                                                <th>Địa chỉ</th>
                                                <th>Hình ảnh</th>
                                                <th>Mô tả công việc</th>
                                                <th>Mức lương</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>FPT</td>
                                            <td>Thiết kế website</td>
                                            <td>Cà Mau</td>
                                            <td><img src="../images/L123123ogo.jpg" alt="" style="height:100px"> </td>
                                            <td>việc nhẹ lương cao bao ăn ở</td>
                                            <td>500,000,000 triệu</td>
                                            <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Vietel</td>
                                            <td>Kê toán</td>
                                            <td>Cần thơ</td>
                                            <td><img src="../images/L123123ogo.jpg" alt="" style="height:100px"> </td>
                                            <td>việc nhẹ lương cao bao ăn ở</td>
                                            <td>500,000,000 triệu</td>
                                            <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                        </tbody>
                                        </table>
                                    </div>
                                </div><!--end card-->

                                </div>
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
