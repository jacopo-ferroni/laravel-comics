@extends('layouts.struct1')

@section('comic')
    <div class="comic">
        <div class="imgbgr">
            <img src="{{asset('images/jumbotron.jpg')}}" alt="" srcset="">
        </div>
        <div class="container">
            <h1>{{$comic['title']}}</h1>
            <div class="green">
                <div class="price">
                    <div class="price1">
                        <span>U.S Price: </span>
                        <span class="real-price">{{$comic['price']}}</span>
                    </div>
                    <span>AVAILABLE</span>
                </div>
                <div class="dropdown">
                    <span>Check Availability <i class="fas fa-sort-down"></i></span>
                </div>
            </div>
            <div class="description">
                {{$comic['description']}}
            </div>
        </div>

        <div class="poster">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
@endsection