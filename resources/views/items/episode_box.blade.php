
<div>
    {{--<img src="https://static.hitek.fr/img/actualite/i_breaking-bad.png" alt="" class="show-cover" >--}}
    <img src="{{$show->cover}}" alt="" class="show-cover" >
    <div class="hide" >
        <h2>{{$show->title}}</h2>
        <p>
            <span>{{$show->rating}}</span>
            @if($show->type == 'movie')
                {{$show->watched}} &nbsp; watching
            @else
                {{$show->seasons}} Seasons
            @endif
        </p>
        <br>
        <br>
        @if($show->type == 'movie')
            <a href="/movies/{{$show->title}}"><i class="fa fa-play"></i></a>
        @else
            <a href="/tvShow/{{$show->title}}"><i class="fa fa-play"></i></a>
        @endif
    </div>
</div>
