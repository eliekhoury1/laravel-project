<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
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
		<!-- cusyom scss -->
        <link rel="stylesheet" href="{{asset('libraries/assets/css/style.css')}}">
        
		<title>Mezban</title>
	</head>

	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
		<!-- preloader -->

		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header d-xl-none">
				<div class="header-logo">
					<a href="index.html" class="logo"><img src="{{asset('libraries/assets/images/logo/01.png')}}" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="menu">
				<div class="mobile-menu-area d-xl-none">
					<div class="mobile-menu-area-inner scrollbar">
						<div class="mobile-search">
							<input type="text" placeholder="Search Here.........">
							<button type="submit"><i class="icofont-search-2"></i></button>
						</div>
						<ul>
                            <li>
                                <a href="#0">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a class="active" href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a class="active" href="#0">Category</a>
                                        <ul>
                                            <li><a class="active" href="food-menu.html">Food Category</a></li>
                                            <li><a href="menu-card.html">Category style 1</a></li>
                                            <li><a href="menu-card-2.html">Category style 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="homechef.html">Home Chef</a></li>
                                            <li><a href="homechef-single.html">Home Chef Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="recepi-single.html">Single Recipe</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>								
                            </li>
                            <li>
                                <a href="#0">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single style-1</a></li>
                                    <li><a href="shop-single-2.html">Shop Single style-2</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li>						
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
						<div class="scocial-media">
							<a href="#" class="facebook"><i class="icofont-facebook"></i></a>
							<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
							<a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
							<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->

		<!-- header section start -->
		<header class="header-section d-xl-block d-none">
			<div class="container-fluid">
				<div class="header-area">
					<div class="logo">
						<a href="index.html"><img src="{{asset('libraries/assets/images/logo/01.png')}}" alt="logo"></a>
					</div>
					<div class="main-menu">
						<ul>
                            <li>
                                <a href="#0">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a class="active" href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a class="active" href="#0">Category</a>
                                        <ul>
                                            <li><a class="active" href="food-menu.html">Food Category</a></li>
                                            <li><a href="menu-card.html">Category style 1</a></li>
                                            <li><a href="menu-card-2.html">Category style 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
                                            <li><a href="homechef.html">Home Chef</a></li>
                                            <li><a href="homechef-single.html">Home Chef Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="recepi-single.html">Single Recipe</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>								
                            </li>
                            <li>
                                <a href="#0">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single style-1</a></li>
                                    <li><a href="shop-single-2.html">Shop Single style-2</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li>						
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
					</div>
					<div class="author-option">
						<div class="author-area">
							<div class="city-lang">
								<img src="{{asset('libraries/assets/images/header/01.png')}}" alt="city-lang">
								<select name="lang" id="lang">
									<option value="1">ENG</option>
									<option value="2">BAN</option>
									<option value="3">ESP</option>
								</select>
							</div>
							<div class="cart-option">
								<img src="{{asset('libraries/assets/images/header/cart.png')}}" alt="shop-cart">
								<div class="count-item">04</div>
								<div class="cart-content">
									<div class="cart-title">
										<div class="add-item">4 Items Added</div>
										<div class="list-close"><a href="#">Close</a></div>
									</div>
									<div class="cart-scr scrollbar">
										<div class="cart-con-item">
											<div class="cart-item">
												<div class="cart-inner">
													<div class="cart-top">
														<div class="thumb">
															<a href="#"><img src="{{asset('libraries/assets/images/popular-food/01.jpg')}}" alt=""></a>
														</div>
														<div class="content">
															<a href="#">Split Remedy Split End Shampoo</a>
														</div>
														<div class="remove-btn">
															<a href="#"><i class="icofont-close"></i></a>
														</div>
													</div>
													<div class="cart-bottom">
														<div class="sing-price">Tk. 140</div>
														<div class="cart-plus-minus"><div class="dec qtybutton">-</div>
															<div class="dec qtybutton">-</div>
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
															<div class="inc qtybutton">+</div>
														<div class="inc qtybutton">+</div></div>
														<div class="total-price">Tk. 280.00</div>
													</div>
												</div>
											</div>
											<div class="cart-item">
												<div class="cart-inner">
													<div class="cart-top">
														<div class="thumb">
															<a href="#"><img src="{{asset('libraries/assets/images/popular-food/02.jpg')}}" alt=""></a>
														</div>
														<div class="content">
															<a href="#">Split Remedy Split End Shampoo</a>
														</div>
														<div class="remove-btn">
															<a href="#"><i class="icofont-close"></i></a>
														</div>
													</div>
													<div class="cart-bottom">
														<div class="sing-price">Tk. 140</div>
														<div class="cart-plus-minus"><div class="dec qtybutton">-</div>
															<div class="dec qtybutton">-</div>
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
															<div class="inc qtybutton">+</div>
														<div class="inc qtybutton">+</div></div>
														<div class="total-price">Tk. 280.00</div>
													</div>
												</div>
											</div>
											<div class="cart-item">
												<div class="cart-inner">
													<div class="cart-top">
														<div class="thumb">
															<a href="#"><img src="{{asset('libraries/assets/images/popular-food/03.jpg')}}" alt=""></a>
														</div>
														<div class="content">
															<a href="#">Split Remedy Split End Shampoo</a>
														</div>
														<div class="remove-btn">
															<a href="#"><i class="icofont-close"></i></a>
														</div>
													</div>
													<div class="cart-bottom">
														<div class="sing-price">Tk. 140</div>
														<div class="cart-plus-minus"><div class="dec qtybutton">-</div>
															<div class="dec qtybutton">-</div>
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
															<div class="inc qtybutton">+</div>
														<div class="inc qtybutton">+</div></div>
														<div class="total-price">Tk. 280.00</div>
													</div>
												</div>
											</div>
											<div class="cart-item">
												<div class="cart-inner">
													<div class="cart-top">
														<div class="thumb">
															<a href="#"><img src="{{asset('libraries/assets/images/popular-food/04.jpg')}}" alt=""></a>
														</div>
														<div class="content">
															<a href="#">Split Remedy Split End Shampoo</a>
														</div>
														<div class="remove-btn">
															<a href="#"><i class="icofont-close"></i></a>
														</div>
													</div>
													<div class="cart-bottom">
														<div class="sing-price">Tk. 140</div>
														<div class="cart-plus-minus"><div class="dec qtybutton">-</div>
															<div class="dec qtybutton">-</div>
															<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
															<div class="inc qtybutton">+</div>
														<div class="inc qtybutton">+</div></div>
														<div class="total-price">Tk. 280.00</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="cart-scr-bottom">
										<ul>
											<li>
												<div class="title">Subtotal</div>
												<div class="price">Tk. 1045.00</div>
											</li>
											<li>
												<div class="title">Shipping</div>
												<div class="price">Tk. 40.00</div>
											</li>
											<li>
												<div class="title">Cart Total</div>
												<div class="price">Tk. 1085.00</div>
											</li>
										</ul>
										<a href="#" class="food-btn"><span>Place Order</span></a>
									</div>
								</div>
							</div>
							<div class="author-account">
								<div class="author-icon">
									<img src="{{asset('libraries/assets/images/chef/author/08.jpg')}}" alt="author">
								</div>
								<div class="author-select">
									<select name="author-select" id="author-select">
										<option value="1">My Account </option>
										<option value="2">Log Out </option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section ending -->

        <!-- Page Header Section Start Here -->
        <section class="page-header">
            <div class="shape-1">
                <img src="{{asset('libraries/assets/images/banner/shape/01.png')}}" alt="banner">
            </div>
            <div class="shape-2">
                <img src="{{asset('libraries/assets/images/banner/shape/02.png')}}" alt="banner">
            </div>
            <div class="container">
                <div class="page-title text-center">
                    <h3>Most Popular Menus</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Menus</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->

		<!-- Popular Food Section Start Here -->
		<section class="popular-foods padding-tb style-2">
            <div class="container">
                <div class="section-wrapper">
					<div class="row">

                    @foreach($listdata as $item)
						<div class="col-xl-3 col-md-6 col-12">
							<div class="p-food-item">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{ asset('storage'.$item->photo)}}" alt="p-food">
										<span>$20 - $30</span>
									</div>
									<div class="p-food-content">
										
										<h6><a href="#">{{$item->name}}</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<br>
										<div>
										<form action="" method="post">
											@csrf
											<button class="btn btn-danger" type="submit">ADDTO CART</button>
									</form>
										</div>
										<br>
										<div class="p-food-footer">
											<div class="left">
												<div class="rating">
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
												</div>
											</div>
											<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
                        @endforeach





						<div class="col-xl-4 col-md-6 col-12">
							<div class="p-food-item">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('libraries/assets/images/popular-food/06.jpg')}}" alt="p-food">
										<span>$20 - $30</span>
									</div>
									<div class="p-food-content">
										<div class="p-food-author">
											<a href="#"><img src="{{asset('libraries/assets/images/chef/author/06.jpg')}}" alt="food-author"></a>
										</div>
										<h6><a href="#">Pizza Hut</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li>
												<i class="icofont-cycling-alt"></i>
												<div class="time-tooltip">
													<div class="time-tooltip-holder">
														<span class="tooltip-label">Delivery time</span>
														<span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
													</div>
												</div>
											</li>
											<li>
												<i class="icofont-stopwatch"></i>
												<div class="time-tooltip">
													<div class="time-tooltip-holder">
														<span class="tooltip-label">Pickup time</span>
														<span class="tooltip-info">You can pickup order in 20 minutes.</span>
													</div>
												</div>
											</li>
										</ul>
										<div class="p-food-footer">
											<div class="left">
												<div class="rating">
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
													<i class="icofont-star"></i>
												</div>
											</div>
											<div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- Popular Food Section Ending Here -->


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


		
		<script src="{{asset('libraries/assets/js/jquery.js')}}"></script>
		<script src="{{asset('libraries/assets/js/waypoints.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/swiper.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/lightcase.js')}}"></script>
		<script src="{{asset('libraries/assets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/functions.js')}}"></script>
	</body>
</html>