@extends('home.main')
@section('content')
<div class="margin_top_custom"></div>
<div class="wrapper" style="margin: 100px auto;">
    <div class="title">
      Đăng Ký Ứng Viên
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Tên Người Liên Hệ *</label>
          <input type="text" class="input" placeholder="Nhập Họ và Tên">          
       </div>
       <div class="inputfield">
        <label>Tài Khoản Email *</label>
        <input type="text" class="input" placeholder="Nhập Email">
     </div>
       <div class="inputfield">
          <label>Mật Khẩu *</label>
          <input type="password" class="input" placeholder="Nhập Mật Khẩu">
       </div>  
      <div class="inputfield">
          <label>Nhập Lại Mật Khẩu *</label>
          <input type="password" class="input" placeholder="Nhập lại Mật Khẩu">
       </div>
      <div class="inputfield">
          <label>Số Điện Thoại *</label>
          <input type="text" class="input" placeholder="Nhập Số Điện Thoại">
       </div>         
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Đồng ý với các điều khoản và điều kiện</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>    
</div>
@endsection


