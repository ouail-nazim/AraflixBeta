@extends('items.App')
@section('title')
    | Tv Shows | {{$categorysName}}
@endsection
@section('head')
    <link href="{{ asset('css/styles/movies.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/category.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- header -->
    @include('items.tvShow_header')

    <!-- main content -->
    <main>
        <!-- trending -->
        <div class="box">
            <header>
                <h3>Categorys | {{$categorysName}} </h3>
            </header>
            <div class="content">
                @forelse($tvShows as $show)
                    @include('items.show_box')
                @empty
                    <p style="color: #C4C4C4;font-size: 2em;">this Category don't have any show  </p>
                @endforelse



            </div>

            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item">page 1 of 50</li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
@endsection
@section('footer')
    @include('items.footer')
@endsection





