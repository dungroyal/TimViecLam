<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>
  .carousel-item img{
      width : 100%;
  }

  .card-header h3{
    text-align: center;
  }
</style>
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
  <div class="card">
      <div class="card-header">
              <h3>Welcome to "VIỆT NAM ELINE"</h3>
      </div>
      <div class="card-body"  >
          <div class="row">
          <div class="col-12">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                                  <img src="{{asset('images')}}/nature/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                  <img src="{{asset('images')}}/nature/2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                  <img src="{{asset('images')}}/nature/3.jpg" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
            
          </div>
        </div>
      </div>
  </div>
</body>
</html>
