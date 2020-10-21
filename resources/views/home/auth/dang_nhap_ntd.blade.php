@extends('home.main')
@section('content')
<div class="margin_top_custom"></div>
<div class="wrapper" style="margin: 100px auto;">
    <div class="title">
     Đăng nhập nhà tuyển dụng
    </div>
    <div class="form">
      <form method="POST" action="/ntd_login">
        @csrf
        <div class="inputfield">
          <label>Tài Khoản Email *</label>
          <input type="text" name="email" class="input" placeholder="Nhập Email">
      </div>
      @if($errors->has('email'))
          <p  class="error-login"><i class="fa fa-times-circle" aria-hidden="true"></i> Chưa nhập mật khẩu</p>
      @endif
      
        <div class="inputfield">
            <label>Mật Khẩu *</label>
            <input type="password" name="password" class="input" placeholder="Nhập Mật Khẩu">
        </div>  
        @if($errors->has('password'))
            <p  class="error-login"><i class="fa fa-times-circle" aria-hidden="true"></i> Chưa nhập mật khẩu</p>
        @endif
        <div class="inputfield">
          <input type="submit" value="Đăng Nhập" class="btn">
        </div>
    </form>
    </div>    
</div>
@endsection