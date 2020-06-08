@extends('home.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{ asset('home/img/') }}/Banner3.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="{{ asset('home/img/') }}/Banner1.png" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="{{ asset('home/img/') }}/Banner1.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="row">

    @foreach ($list_products as $pro)
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ asset('images') }}/{{$pro->images}}" alt="" style="height: 300px;"></a>
            <div class="card-body">
                <h6 class="card-title">
                    <a href="#">{{$pro->nameProduct}}</a>
                </h6>
                <h6>{{ number_format($pro->priceProduct)}} ₫</h6>
                <p class="card-text">{{$pro->authorProduct}}</p>
            </div>
            <div class="card-footer">
            <center><a href="/product/{{{$pro->idProduct}}}">Chi tiết</a></center>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$list_products->links()}}
@endsection
