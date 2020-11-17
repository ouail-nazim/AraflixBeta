
    @extends('items.App')
    @section('title')
        | TV Show|{{$show->title}}-S{{$episodeWatche->season}}-E{{$episodeWatche->number}}
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
                    <h1>{{$show->title}}</h1>
                    <ul>
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
                <!-- https://f3-bab.allviid.com/zagyavismz4ftzu2nqwa4lygmsywsbxlhmpztreuqneionvkqea6jnv557tq/v.mp4 -->
                <div class="vid">
                    <video controls
                           src="{{$episodeWatche->link}}">
                    </video>
                </div>
                <div class="title">
                    <p> Season {{$episodeWatche->season}} episode {{$episodeWatche->number}}</p>
                    @if(! $isLast)
                        <a href="/tvShow/{{$show->title}}/season{{$episodeWatche->season}}/episode{{$episodeWatche->number +1}} ">Next episode &nbsp; <i class="fa fa-play"></i></a>
                    @else
                        @if($show->seasons != $episodeWatche->season)
                             <a href="/tvShow/{{$show->title}}/season{{$episodeWatche->season +1}}/episode1 ">Next season &nbsp; <i class="fa fa-play"></i></a>
                        @endif
                    @endif

                </div>
            </div>
        </header>
        <!-- main content -->
        <main>
            <div class="info">
                <h1>{{$show->title}}</h1>
                <p><b>Story &nbsp; :</b>  {{$show->story}}.</p>
                <h3>Rating &nbsp; : &nbsp; {{$show->rating}}</h3>
                <h3> Seasons &nbsp; : &nbsp; {{$show->seasons}}</h3>
                <h3>year of production &nbsp; : &nbsp;{{$show->year}} </h3>
                <h3>categorys &nbsp; : &nbsp;
                    @forelse($show->categories as $Category)
                        <a href="/tvShow?Category={{$Category->name}}">{{$Category->name}} &nbsp;</a>
                    @empty
                        <a>this show does not belong to any category</a>
                    @endforelse
                </h3>
            </div>
            <!-- trending -->
            <div class="box">
                <header>
                    <h3>Season {{$episodeWatche->season}} </h3>
                </header>
                <div class="content">
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






