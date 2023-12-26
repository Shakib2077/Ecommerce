@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>
                <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
                <div class="carousel-inner">
                    @foreach($products as $item)
                    <div class="row searched-item cart-list-devider">

                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}">
                            </a>
                        </div>

                        <div class="col-sm-3">
                                    <div class="">
                                            <h3>{{$item->name}}</h3>
                                            <h4>{{$item->description}}</h4>
                                    </div>
                        </div>

                            <div class="col-sm-3">
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                            </div>
                    </div>

                    @endforeach
                    <a href="/ordernow" class="btn btn-success">Order Now</a>
                </div>
        </div>
    </div>
</div>
@endsection 

