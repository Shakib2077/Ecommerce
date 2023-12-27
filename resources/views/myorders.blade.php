@extends('master')
<!-- @section('content') -->

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>My Orders</h2>
                <div class="carousel-inner">
                    @foreach($orders as $item)
                    <div class="row searched-item cart-list-devider">

                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <div class="row">
                                <h3>Name: {{$item->name}}</h3>
                                <h4>Delivery Status: {{$item->status}}</h4>
                                <h4>Address: {{$item->address}}</h4>
                                <h4>Payment Status: {{$item->payment_status}}</h4>
                                <h4>Payment Method: {{$item->payment_method}}</h4>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
        </div>
    </div>
</div>
<!-- @endsection  -->

