	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="csrf-token" content="{{csrf_token()}}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href='https://fonts.googleapis.com/css?family=Nunito:200,600' rel="stylesheet">
		<!-- favicon -->
		<link rel="shortcut icon" href="{{asset('libraries/assets/images/favicon.png')}}" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/animate.css')}}">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/bootstrap.min.css')}}">
		<!-- icofont -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/icofont.min.css')}}">
		<!-- lightcase css -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/lightcase.css')}}">
		<!-- swiper css -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/swiper.min.css')}}">
		<!-- custom scss -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/style.css')}}">

		<title>Mezban  - Food & Resturent HTML Template</title>
	</head>

	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
		<!-- preloader -->

@yield('body')
@yield('usermenu')
@yield('cart')
@yield('addfood')
@yield('cartpage')



























<!-- Footer Section Start Here -->
		<footer class="footer">
			<div class="bg-shape-style"></div>
			<div class="container">
				<div class="footer-top">
					<div class="footer-area text-center">
						<div class="footer-logo">
							<a href="index.html"><img src="{{asset('libraries/assets/images/header/footer/01.png')}}" alt="footer-logo"></a>
						</div>
						<div class="scocial-media">
							<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
							<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
							<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
							<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
						</div>
						<div class="footer-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">How it works?</a></li>
								<li><a href="#">Menus</a></li>
								<li><a href="#">Chefs</a></li>
								<li><a href="#">Recipes</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom text-center">
					<p>&copy; 2019 <a href="#"><span>Mezban</span></a> Design by <a href="#"><span>FoxCoders</span></a>.</p>
				</div>
			</div>
		</footer>
		<!-- Footer Section Ending Here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


		
