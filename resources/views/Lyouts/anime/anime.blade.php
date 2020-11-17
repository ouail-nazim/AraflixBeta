@extends('items.App')
@section('content')
    <!-- header -->
    <header>
        <img src="https://i.ytimg.com/vi/BH2j1Tu6RBU/maxresdefault.jpg" alt="">
        {{--<img src="{{$trending->cover}}" alt="">--}}
        <div class="banner" style="width: 90%">

            <h1>Animes Section &nbsp; (Coming soon)</h1>
            <h1> </h1>

            <div class="buttons" align="center">
                <a href="/">GO Home &nbsp;  <i class="fa fa-home"></i> </a>
            </div>
        </div>
    </header>
@endsection

@section('footer')
    @include('items.footer')
@endsection



