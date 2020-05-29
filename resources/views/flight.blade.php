<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/flight">Danh sách chuyến bay</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="container">
    <div class="row" style=" margin-top: 12px;">
      <div class="col-8">
        <div class="card">
        <div class="card-header">
          Danh sách chuyến bay
        </div>
        <div class="card-body">
            <table class="table">
              <thead>
                  <tr>
                    <th>Mã chuyến</th>
                    <th>Xuất phát</th>
                    <th>Điểm đến</th>
                    <th>Thời lượng</th>
                    <th></th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($flight ?? '' as $fli)
                  <tr>
                    <td>{{$fli -> id}}</td>
                    <td>{{$fli -> origin}}</td>
                    <td>{{$fli -> destination}}</td>
                    <td>{{$fli -> duration}} phút</td>
                  <td><a href="/flight/{{{$fli -> id}}}">DS khách hàng</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="col-4">
      @isset($passengers)
      <div class="card">
        <div class="card-header">
          Danh sách khách hàng - Chuyến bay từ <strong>{{$infoF->origin}}</strong> đến <strong>{{$infoF->destination}}</strong>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
                <tr>
                  <th>Mã KH</th>
                  <th>Họ và tên</th>
                  <th></th>
                </tr>
            </thead>
            <tbody>
              @foreach ($passengers as $pass)
                <tr>
                  <td>{{$pass -> id}}</td>
                  <td>{{$pass -> name}}</td>
                  <td><a href="/flight/del/{{{$pass -> id}}}">Xóa</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endisset
      
  
    </div>
  </div>
    
</div>
  
 
</body>
</html>