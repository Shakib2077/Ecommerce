@extends('master')
@section('content')


<div class="container">
<div class="custom-product">
    <div class="col-sm-4">
    <a class="btn btn-success" href="/">Go Back</a><br><br>
    </div>
    <div>
    <div class="trending-wrapper">
            <h3>All Product</h3>
            <div class="carousel-inner">
                @foreach($products as $item)
                <div class="searched-item cart-list-devider">
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                            <h3>Name: {{$item['name']}}</h3>
                            <h4>Description: {{$item['description']}}</h4>
                            <h4>Price: {{$item['price']}}</h4>
                        </div>
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
</div>
</div>
@endsection 

