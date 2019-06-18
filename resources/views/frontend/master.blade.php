<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from specthemes.com/redbiz/redbiz-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 06:14:48 GMT -->

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="{{asset('frontend/img/logos/logo-shortcut.png')}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/icomoon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/switcher.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/styles.css')}}" id="colors">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body>
	<div id="preloader">
		<div class="row loader">
			<div class="loader-icon"></div>
		</div>
	</div>
	@include('frontend.includes.header')

	<header>
	@include('frontend.includes.menubar')
	</header>

	@yield('maincontent')

	<footer>
    @include('frontend.includes.footer')
	</footer>
    
	<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
	<script src="{{asset('frontend/js/navigation.js')}}"></script>
	<script src="{{asset('frontend/js/navigation.fixed.js')}}"></script>
	<script src="{{asset('frontend/js/wow.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/js/tabs.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
	<script src="{{asset('frontend/js/swiper.min.js')}}"></script>
	<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/js/switcher.js')}}"></script>
	<script src="{{asset('frontend/js/modernizr.js')}}"></script>
	<script src="{{asset('frontend/js/map.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
<!-- Mirrored from specthemes.com/redbiz/redbiz-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 06:18:29 GMT -->

</html>