@extends('items.App')
@section('head')
    <link href="{{ asset('css/styles/movies.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/category.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- header -->
    @include('items.movies_header')

    <!-- main content -->
    <main>
        <!-- trending -->
        <div class="box">
            <header>
                <h3>Categorys | {{$categorysName}} </h3>
            </header>
            <div class="content">
                @foreach($movies as $show)
                    @include('items.show_box')
                @endforeach



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


