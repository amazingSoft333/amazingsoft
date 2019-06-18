<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from specthemes.com/redbiz/redbiz-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 06:14:48 GMT -->

<head>
	<title>Login and Registration Form with HTML5 and CSS3</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="{{asset('frontend/img/logos/logo-shortcut.png')}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
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

    <style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom:1rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-title-sign {
  margin-bottom:10px;
  font-weight:600;
  font-size:14px;
}

.card-signin .card-title-sign a:hover {
    color:blue;
}
.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
    </style>
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

    <div class="section-block">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">User Register</h5>
            <p class="card-title-sign text-center">Already a member?<a href="{{route('userLogin')}}"> Go and Log in</a></p>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
            <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" name="name" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>
            
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>


              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
             
              </form>
          </div>
        </div>

                
				</div>
			</div>
		</div>
	</div>
	
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