@extends('items.App')
@section('title')
    | movies | {{$movie->show->title}}
@endsection
@section('head')
    <link href="{{ asset('css/styles/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/watch.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- header -->
    <header>
        <!-- <img src="../../1.jpg" alt=""> -->
        <div class="banner">
            <div class="top">
                <h1>{{$movie->show->title}}</h1>

            </div>
            <!-- https://f3-bab.allviid.com/zagyavismz4ftzu2nqwa4lygmsywsbxlhmpztreuqneionvkqea6jnv557tq/v.mp4 -->
            <div class="vid">
                <video controls  autoplay
                       src="{{$movie->link}}">
                </video>
            </div>

        </div>
    </header>
    <!-- main content -->
    <main>
        <div class="info">
            <h1>{{$movie->show->title}} </h1>
            <p><b>Story &nbsp; :</b>  {{$movie->show->story}}.</p>
            <h3>Rating &nbsp; : &nbsp; {{$movie->show->rating}}</h3>
            <h3>Duration &nbsp; : &nbsp;{{$movie->duration}} </h3>
            <h3>year of production &nbsp; : &nbsp;{{$movie->show->year}} </h3>
            <h3>categorys &nbsp; : &nbsp;
                @forelse($movie->show->categories as $categorie)
                    <a href="/movies?Category={{$categorie->name}}">{{$categorie->name}}</a> &nbsp;
                @empty
                        <a>this show does not belong to any category</a>
                @endforelse
            </h3>
        </div>



        <!-- trending -->
        <div class="box">
            <header>
                <h3>Similar movies</h3>
            </header>
            <div class="content">
                @forelse($similarMovies as $show)
                    @include('items.episode_box')
                    @empty
                        <p style="color: #C4C4C4;font-size: 2em;">the season don't have any épisode yet </p>
                    @endforelse


            </div>

            <ul class="pagination" style="margin-bottom: -2%">
                @include('items.footer')
            </ul>
        </div>
    </main>

@endsection






