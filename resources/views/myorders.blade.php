@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>My Orders</h2><br>
            <a class="btn btn-danger" href="/">Go Back</a><br><br>
                <div class="carousel-inner">
                    @foreach($orders as $order)
                    <div class="row searched-item cart-list-devider">

                        <div class="col-sm-3">
                            <a href="detail/{{$order->id}}">
                                <img class="trending-img" src="{{$order->gallery}}">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <div class="row">
                                <h3>Name: {{$order->name}}</h3>
                                <h4>Delivery Status: {{$order->status}}</h4>
                                <h4>Address: {{$order->address}}</h4>
                                <h4>Payment Status: {{$order->payment_status}}</h4>
                                <h4>Payment Method: {{$order->payment_method}}</h4>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection 

