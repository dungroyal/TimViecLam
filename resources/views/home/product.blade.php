@extends('home.main')
@section('content')

<div class="container">
<h5 id="title-categories"><i class="fa fa-list-alt" aria-hidden="true"></i> 
    @if (isset($nameCategory))
        Thể loại: {{$nameCategory->nameCategory}} </h5>
        @else
        Tất cả thể loại</h5>
    @endif
    @if (isset($keyword)) {{$keyword}} @endif
<div class="row mt-4">

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
</div>
    {{$list_products->links()}}
@endsection
