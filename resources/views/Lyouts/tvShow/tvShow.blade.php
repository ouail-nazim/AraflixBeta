@extends('items.App')
@section('title')
    | Tv Shows
@endsection

@section('head')
    <link href="{{ asset('css/styles/movies.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- header -->
    @include('items.tvShow_header')

    <!-- main content -->
    <main>
        <!-- trending -->
        <div class="box">
            <header>
                <h3>Trending</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($popular_tvShows as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- new Tv Shows -->
        <div class="box">
            <header>
                <h3>New Tv Shows</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_tvShows as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Latest Tv Shows Added -->
        <div class="box">
            <header>
                <h3>Latest Tv Shows Added</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_tvShows_added as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Family Tv Shows -->
        <div class="box">
            <header>
                <h3>Family Tv Shows </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Family_tvShows as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Action Tv Shows -->
        <div class="box">
            <header>
                <h3>Action Tv Shows </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Action_tvShows as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Comedy Tv Shows -->
        <div class="box">
            <header>
                <h3>Comedy Tv Shows </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Comedy_tvShows as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Horror Tv Shows -->
        <div class="box">
            <header>
                <h3>Horror Tv Shows </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($Horror_tvShows as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('items.footer')
@endsection



