@extends('items.App')
@section('head')
    <link href="{{ asset('css/styles/movies.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- header -->
    @include('items.movies_header')

    <!-- main content -->
    <main>
        <!-- trending -->
        <div class="box">
            <header>
                <h3>Trending</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($popular_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- new movies -->
        <div class="box">
            <header>
                <h3>New movies</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Latest Movies Added -->
        <div class="box">
            <header>
                <h3>Latest Movies Added</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_movies_added as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Family Movies -->
        <div class="box">
            <header>
                <h3>Family Movies </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Family_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Action Movies -->
        <div class="box">
            <header>
                <h3>Action Movies </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Action_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Comedy Movies -->
        <div class="box">
            <header>
                <h3>Comedy Movies </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Comedy_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Horror Movies -->
        <div class="box">
            <header>
                <h3>Horror Movies </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Horror_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
    </main>
@endsection


