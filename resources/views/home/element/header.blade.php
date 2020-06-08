<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Royal Book</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link active" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Sản phẩm</a>
                </li>
            </ul>

            <form method="post" action="/search" class="form-inline my-2 my-lg-0">
                @csrf
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="keyword" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder= @if ($errors->has('keyword')) "Chưa nhập từ khóa" @else "Tìm kiếm ..." @endif>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-number">
                          <i class="fa fa-search"></i>
                      </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>