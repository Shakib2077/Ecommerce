@extends('master')
@section('content')

<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            
            <div class="carousel-inner">
                @foreach($products as $item)
                    <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{$item['id']}}">
                        <img class="slider-img" src="{{$item['gallery']}}">
                        <div class="carousel-caption slider-text">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
   
        <div class="trending-wrapper">
            <h1>Trending Product</h1>
            <div class="carousel-inner">
                @foreach($products as $item)
                    <div class="trending-item">
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <h4>{{$item['price']}}TK</h4>
                            <h4>{{$item['description']}}</h4>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection 

