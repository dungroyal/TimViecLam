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
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Book</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="container">
    <form method="post" action="/book/">
      <div class="form-group">
        <label>Chọn chuyến bay</label>
        <select class="form-control" name="flight">
          <option value="" selected>---Chọn chọn chuyến---</option>
          <option value="">VietName to Paris</option>
        </select>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary" name="btnListBook">List Custommer</button>
      </div>
    </form>
    <div class="card">
      <div class="card-header">
        Danh sách hành khách đã đăng ký bay
      </div>
      <div class="card-body">
          <table class="table">
            <thead>
                <tr>
                  <th>Mã khach</th>
                  <th>Tên hành khách</th>
                  <th>Xuất phát</th>
                  <th>Điểm đến</th>
                  <th>Thời lượng</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                      <td>01</td>
                      <td>Trần Công Mua</td>
                      <td>Tp.Hồ Chí Minh</td>
                      <td>Đà Nẵng</td>
                      <td>1h</td>
                    </tr>
            </tbody>
        </table>
      </div>
    </div>
</div>
  
 
</body>
</html>