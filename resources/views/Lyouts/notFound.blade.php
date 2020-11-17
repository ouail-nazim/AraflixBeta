@extends('items.App')
@section('title')
    | not found
@endsection
@section('head')
    <link href="{{ asset('css/styles/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/search.css') }}" rel="stylesheet">
@endsection

@section('content')
    <header>
        <div class="banner">
            <h1>Sorry this show or this episode is not added yet</h1>
            <br><br>
            <a href="/"> GO Back To Home</a>
        </div>
    </header>
@endsection

@section('footer')
    <footer>
        <div class="links">
            <ul>
                <li><a href="#">About US</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">Tv Shows</a></li>
                <li><a href="#">Coporate Information</a></li>
            </ul>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Cotact Us</a></li>
                <li><a href="#">Legal Notice</a></li>
            </ul>
            <div>
                <p>
                    Araflix <span>.com</span>
                </p>
            </div>
        </div>
        <div class="Rights">
            <p><a href="#">Araflix.com </a>- 2020 All Rights Reserved</p>
        </div>

    </footer>
@endsection


