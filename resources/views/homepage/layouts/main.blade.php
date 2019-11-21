<!DOCTYPE html>
<html lang="en">
<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('homepage/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('homepage/styles/responsive.css')}}">
    @yield('css')
</head>

<body>

<div class="super_container">


    @include('homepage.layouts.header')


    @yield('content')



    @include('homepage.layouts.footer')
    @include('homepage.layouts.copyright')

</div>

<script src="{{asset('js/homepage/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('homepage/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('homepage/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('homepage/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('homepage/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('homepage/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('homepage/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('homepage/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('homepage/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('homepage/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('homepage/plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/homepage/custom.js')}}"></script>
</body>

</html>
