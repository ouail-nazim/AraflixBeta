<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Araflix  @yield('title')</title>
    <!-- font style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style -->
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon"/>
    <link href="{{ asset('css/styles/main.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <!-- nav bar -->
    @include('items.navbar')
    {{-- content of page--}}
    @yield('content');
    <!-- footer -->
    <div style="padding-bottom:0%;margin-bottom: 0%" >
        @yield('footer')
    </div>


    <script src="{{asset('js/scripts/navbar.js')}}" defer></script>
    <script src="{{asset('js/scripts/boxhover.js')}}" defer></script>

</body>
</html>
