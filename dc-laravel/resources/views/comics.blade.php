@extends('layouts.struct1')

@section('site-title', 'DC | Comics')

@section('content')
    <div class="comics">
        <div class="container">
            <h1>COMICS POSTER</h1>
            <div class="poster">
                @foreach ($comics as $comic)
                <div class="card">
                    <div class="box">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <p>{{$comic['title']}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('specific-content-js')
    <script src="{{asset('js/app.js')}}"></script>
@endsection