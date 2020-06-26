@extends('ungvien.main')
@section('content')
<section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">QUẢN LÝ VIỆC LÀM</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        VIỆC LÀM</button>
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
                                <div class="card">
                                <h3 class="card-header">
                                    DANH SÁCH CÁC VIỆC LÀM ĐÃ LƯU
                                    </h3>
                                    <div class="card-body">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tên ứng viên</th>
                                                <th>Vị trí ứng tuyển</th>
                                                <th>Địa chỉ</th>
                                                <th>Hình ảnh</th>
                                                <th>Cv ứng viên</th>
                                                
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Lê Nhật Hào</td>
                                            <td>Thiết kế website</td>
                                            <td>Cà Mau</td>
                                            <td><img src="../images/L123123ogo.jpg" alt="" style="height:100px"> </td>
                                            <td>...</td>
                                            
                                            <td>lenhathao3112@gmail.com</td>
                                            <td>
                                            
                                            <a href="#" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lê Nhật Hào</td>
                                            <td>Kê toán</td>
                                            <td>Cần thơ</td>
                                            <td><img src="../images/L123123ogo.jpg" alt="" style="height:100px"> </td>
                                            <td>...</td>
                                            
                                            <td>lenhathao3112@gmail.com</td>
                                            <td>
                                            
                                            <a href="#" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>

                                        </tbody>
                                        </table>
                                    </div>
                                </div><!--end card-->
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
