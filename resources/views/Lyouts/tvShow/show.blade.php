@extends('items.App')
@section('title')
    | Tv Show | {{$show->title}}
@endsection
@section('head')
    <link href="{{ asset('css/styles/show.css') }}" rel="stylesheet">
    <style>
        header .banner .rated  .info{

            color: #fff;

            padding: 1% 1%;
        }
        header .banner .rated .info a{
            color: #E7511A;
            text-decoration: none;
        }
    </style>
@endsection
@section('content')
    <!-- header -->
    <header>
        <img src="https://i.ytimg.com/vi/BH2j1Tu6RBU/maxresdefault.jpg" alt="">
        <div class="banner">
            <h1>{{$show->title}}</h1>
            <div class="rated">
                <p>{{$show->rating}}</p>
                <span> {{$show->seasons}} Seasons</span>
                <div class="info">
                    <h3> | categorys &nbsp; : &nbsp;

                        @forelse($show->categories as $Category)
                            <a href="/tvShow?Category={{$Category->name}}">{{$Category->name}}</a>
                        @empty
                            <a>this show does not belong to any category</a>
                        @endforelse
                    </h3>
                </div>
            </div>
            <br><br>
            <div class="story">
                <p>
                    {{$show->story}} .
                </p>
            </div>
            <br><br>
            <div class="buttons">
                <a class="btn" href="#Episodes">Watch now &nbsp; <i class="fa fa-play"></i></a>
                <a onclick="window.open('https://www.youtube.com/embed/TZE9gVF1QbA');">Official Trailer <i class="fa fa-youtube"></i> </a>
            </div>
            <ul style="margin-top: 1%;">
                <li class="dropdown-btn" onclick="showlist(this)" >
                    Seasons &nbsp; <i class="fa fa-chevron-down"></i>
                    <ul class="dropdown-box hide">
                        @for($i=1;$i<= $show->seasons;$i++)
                             <a href="/tvShow/{{$show->title}}/season{{$i}}/episode1">Season {{$i}} </a>
                        @endfor
                    </ul>
                </li>
            </ul>

        </div>

    </header>
    <!-- main content -->
    <main>
        <!-- trending -->
        <div class="box" id="Episodes">
            <header>
                <h3>Season 1 </h3>
            </header>
            <div class="content" >

               @forelse($episodes as $show)
                    <div>
                        <img src="{{$show->show->cover}}" alt="cover" class="show-cover" >
                        <div class="hide" >
                            <h1>{{$show->show->title}}</h1>
                            <strong>Seasons {{$show->season}} Episode <b>{{$show->number}}</b></strong>
                            <br><br><br>
                            <a href="/tvShow/{{$show->show->title}}/season{{$show->season}}/episode{{$show->number}}"><i class="fa fa-play"></i></a>
                        </div>
                    </div>

                   @empty
                    <p style="color: #C4C4C4;font-size: 2em;">the season don't have any épisode yet </p>
                   @endforelse

            </div>

            <ul class="pagination"style="margin-bottom: -2%">
                @include('items.footer')
            </ul>
        </div>

    </main>

@endsection






