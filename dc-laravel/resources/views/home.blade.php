@extends('layouts.struct1')

@section('content')
    <div class="home">
        <div class="container">
            <div class="card-box">
                <a href="{{asset('comics')}}">
                    <div class="card">COMICS <i class="fas fa-dragon"></i></div>
                </a>

                <a href="{{asset('contact')}}">
                    <div class="card">CONTACT US <i class="fas fa-file-signature"></i></div>
                </a>

                <a href="{{asset('privacy')}}">
                    <div class="card">PRIVACY&POLICY <i class="fas fa-user-secret"></i></div>
                </a>
            </div>
        </div>
    </div>
@endsection