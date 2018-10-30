<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Labs</title>

    <!-- Favicon -->
    <link href="{{url('css/img/favicon.ico')}}" rel="shortcut icon"/>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    {{--
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> --}}

    {{-- StyleSheet --}}
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	{{-- <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}"> --}}
    <link rel="stylesheet" href="{{url('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">


</head>

<body>
<section>
    @yield('preloader')
</section>

<section>
    @yield('header')
</section>

<section>
    @yield('subject')
</section>

<section>
    @yield('contact')
</section>

<section>
    @yield('footer')
</section>

    {{-- Javascript & Jquery --}}
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
    <script src="js/app.js"></script>
    
</body>

</html>
