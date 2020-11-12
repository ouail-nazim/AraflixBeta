@extends('items.App')
@section('content')
    <!-- header -->
    <header>
        <img src="/images/1.jpg" alt="">
        {{--<img src="{{$trending->cover}}" alt="">--}}
        <div class="banner">

            <h1>{{$trending->title}}</h1>
            <div class="rated">
                <p>{{$trending->rating}}</p>
                <span> {{$trending->watched}} &nbsp; watching</span>
            </div>
            <br><br>
            <div class="story">
                <p>
                    {{$trending->story}}
                </p>
            </div>
            <br><br>
            <div class="buttons">
                <a class="btn" href="#">Watch now &nbsp; <i class="fa fa-play"></i></a>
                <a href="#">More details + </a>
            </div>
        </div>
    </header>
    <!-- main content -->
    <main>
        <!-- Most popular movies -->
        <div class="box">
            <header>
                <h3>Most popular movies</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($popular_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Most popular TV Show -->
        <div class="box">
            <header>
                <h3>Most popular TV Show </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($popular_tvShow as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- new movies -->
        <div class="box">

            <header>
                <h3>New Movies</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_movies as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- new tvShow -->
        <div class="box">
            <header>
                <h3>New tv Show</h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_tvShow as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Latest movies add  -->
        <div class="box">
            <header>
                <h3>Latest Movies Add </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_movies_added as $show)
                    @include('items.show_box')
                @endforeach
            </div>
        </div>
        <!-- Latest tv show add  -->
        <div class="box">
            <header>
                <h3>Latest Tv Shows Add </h3>
                <a href="#" class="more">view all ></a>
            </header>
            <div class="content">
                @foreach($new_tvShow_added as $show)
                    @include('items.show_box')
                @endforeach
            </div>

        </div>
    </main>


@endsection




