<div>
    <img src="/images/1.jpg" alt="" class="show-cover" >
    {{--<img src="{{$show->cover}}" alt="" class="show-cover" >--}}
    <div class="hide" onmouseover="show(this)" onmouseout="hide(this)">
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
        <a href="#">Watch now &nbsp; <i class="fa fa-play"></i></a>
    </div>
</div>
