@extends('master')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}">
            </div>
            <div class="col-sm-6">
                <h2>Name : {{$product['name']}}</h2>
                <h3>Price : {{$product['price']}}</h3>
                <h4>Category : {{$product['category']}}</h4>
                <h4>Description : {{$product['description']}}</h4>
                <br></br>
                <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-success">Add to Cart</button>
                </form>
                <br></br>
                <a class="btn btn-danger" href="/">Go Back</a>
            </div>
        </div>
    </div>
@endsection 



