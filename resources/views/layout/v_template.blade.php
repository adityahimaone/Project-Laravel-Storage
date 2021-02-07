<!DOCTYPE html>
<html>
<head>
    <title>LaravelKu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl/owl.theme.green.css')}}">
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl/owl.carousel.js')}}"></script>
</head>
<body>
@include('layout.v_navbar')
@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/script.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>

