<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>API Tìm việc làm</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="icon" href="{{ asset('home') }}/img/favicon.png" type="image/gif" sizes="16x16">
</head>
<style>
    .note{
    color: #777;
    font-size: 0.85em;
    }
    .logo{
        width: 100%;
        text-align: center;
    }

    .logo img{
        width: 20%;
        text-align: center;
        margin: 30px 0px;
    }
</style>
<body>
    <div class="logo">
        <img src="{{ asset('home') }}/img/logo.png" alt="Logo">
    </div>
    <div class="bs-example container" data-example-id="striped-table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="4" class="table-success">JOBS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>POST</td>
              <td><a href="http://127.0.0.1:8000/api/jobs">http://127.0.0.1:8000/api/jobs</a></td>
              <td>Danh sách tất cả công việc</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><a href="#"></a></td>
                <td>Search</td>
              </tr>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>

      <hr>

       <div class="bs-example container" data-example-id="striped-table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="4" class="table-success">AUTH</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>POST</td>
              <td><a href="http://127.0.0.1:8000/api/jobs">http://127.0.0.1:8000/api/jobs</a></td>
              <td>Danh sách tất cả công việc</td>
            </tr>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
        
      <hr>

       <div class="bs-example container" data-example-id="striped-table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="4" class="table-success">Nhà tuyển dụng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>POST</td>
              <td><a href="http://127.0.0.1:8000/api/jobs">http://127.0.0.1:8000/api/jobs</a></td>
              <td>Danh sách tất cả công việc</td>
            </tr>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
      <hr>

       <div class="bs-example container" data-example-id="striped-table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="4" class="table-success">Ứng viên</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>POST</td>
              <td><a href="http://127.0.0.1:8000/api/jobs">http://127.0.0.1:8000/api/jobs</a></td>
              <td>Danh sách tất cả công việc</td>
            </tr>
          </tbody>
          <tfoot>
          </tfoot>
        </table>
      </div>
</body>
</html>