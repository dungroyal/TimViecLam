@extends('nhatuyendung.main')
@section('content')
<section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Tuyển dụng</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Đăng tuyển mới</button>
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
                                <form>
 
                                    <div class="form-group"> <!-- Full Name -->
                                    <label for="full_name_id" class="control-label">Vị trí cần tuyển</label>
                                    <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Quản trị kinh doanh">
                                    </div>
                                    
                                    <div class="form-group"> <!-- Street 1 -->
                                    <label for="street1_id" class="control-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Phần mềm Quang Trung">
                                    </div>
                                    
                                    <div class="form-group"> <!-- Street 2 -->
                                    <label for="street2_id" class="control-label">Tên công ty</label>
                                    <input type="text" class="form-control" id="street2_id" name="street2" placeholder="FPT Software">
                                    </div>

                                    <div class="form-group"> <!-- Street 2 -->
                                    <label for="street2_id" class="control-label">Ngày đăng</label>
                                    <input type="date" class="form-control" id="street3_id" name="street3" placeholder="">
                                    </div>

                                    <div class="form-group"> <!-- Street 2 -->
                                    <label for="street2_id" class="control-label">Mức lương</label>
                                    <input type="text" class="form-control" id="street4_id" name="stree4" placeholder="100,000,000 triệu">
                                    </div>

                                    <div class="form-group"> <!-- Street 2 -->
                                    <label for="street2_id" class="control-label">Hình ảnh công ty</label>
                                    <input type="file" class="form-control" id="street5_id" name="street5" placeholder="">
                                    </div>
                                    
                                    
                                    <div class="form-group"> <!-- State Button -->
                                    <label for="state_id" class="control-label">Thành phố</label>
                                    <select class="form-control" id="state_id">
                                    <option value="AL">Hồ Chí Minh</option>
                                    <option value="AK">Hà Nội</option>
                                    <option value="AZ">Cần Thơ</option>
                                    <option value="AR">Đà Nẵng</option>
                                    <option value="CA">Cà Mau</option>

                                    </select>
                                    </div>
                                    
                                    <div class="form-group"> <!-- Zip Code-->
                                    <label for="zip_id" class="control-label">Mô tả công việc</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Việc nhẹ lương cao bao ăn ở. Được ngủ chung với sếp" rows="7"></textarea>
                                    </div>
                                    
                                    <div class="form-group"> <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary">Đăng tin</button>
                                    </div> 
  
 </form>
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
