@extends('home.main')
@section('content')
<div class="margin_top_custom"></div>
<div class="wrapper" style="margin: 100px auto;">
    <div class="title">
      Đăng Nhập Nhà Tuyển Dụng
    </div>
    <div class="form">
       <div class="inputfield">
        <label>Tài Khoản Email *</label>
        <input type="text" class="input" placeholder="Nhập Email">
     </div>
       <div class="inputfield">
          <label>Mật Khẩu *</label>
          <input type="password" class="input" placeholder="Nhập Mật Khẩu">
       </div>  
      <div class="inputfield">
        <input type="submit" value="Đăng Nhập" class="btn">
      </div>
    </div>    
</div>
@endsection


