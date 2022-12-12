<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="csrf-token" content="{{csrf_token()}}">
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
		<!-- custom scss -->
		<link rel="stylesheet" href="{{asset('libraries/assets/css/style.css')}}">

		<title>Mezban  - Food & Resturent HTML Template</title>
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
                                <a class="active" href="#0">Home</a>
                                <ul>
                                    <li><a class="active" href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a href="food-menu.html">Food Category</a></li>
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
                                <a class="active">Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul>
                                    <li>
                                        <a href="#0">Category</a>
                                        <ul>
                                            <li><a href="food-menu.html">Food Category</a></li>
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
			                    <a href="{{route('Order.index')}}">Order</a>
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
							@if(session('user')!='')
								
								<div class="author-icon">
									<img src="{{ asset('storage'.session('photo'))}}" alt="author">
								</div>

                                
								
								<div class="author-select">
									{{session('user')}}
									<form action="{{('/logout')}}" method="get">
									@csrf
									<button class="btn btn-danger" type="submit">Logout</button>
							        </form>
									</div>
								@endif	

								@if(session('user')=='')
								    <div class="author-select">
									<div class="author-icon">
									<img src="{{asset('storage/images/unknown.jpg')}}" alt="author">
								    </div>
                                    
									<li><a href="{{route('signin.create')}}">Signin</a></li>
                                    </div>
								@endif
								


							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section ending -->

		<!-- Banner Section Start Here -->
		<section class="banner">
			<div class="shape-1">
				<img src="{{asset('libraries/assets/images/banner/shape/01.png')}}" alt="banner">
			</div>
			<div class="shape-2">
				<img src="{{asset('libraries/assets/images/banner/shape/02.png')}}" alt="banner">
			</div>
			<div class="banner-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-12">
							<div class="banner-content">
								<h2>Unique Food Network...</h2>
								<form method="get" action="{{url('search')}}" id="form" class="validate">
									@csrf 
									<div class="codexcoder-selectoption">
										
									</div>
									<input type="text" name="type" placeholder="Enter your food name">
									<button type="submit"><i class="icofont-search-2"></i></button>
								</form>
								<ul>
									<li><span>700+</span>Restaurant</li>
									<li><span>6900+</span>People Served</li>
									<li><span>6900+</span>Registered Users</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section Ending Here -->


		<!-- Food Catagory Section Start here -->
		<section class="food-category padding-tb" style="background-image: url(libraries/assets/css/bg-image/category-bg.jpg); background-size: cover;">
			<div class="container">
				<div class="food-box">
					<div class="section-header">
						<h3>Browse Food Category</h3>
						<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
					</div>
					<div class="section-wrapper">
						<div class="food-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="food-item">
										<div class="food-thumb">
											<a href="#"><img src="{{asset('libraries/assets/images/food/01.png')}}" alt="food"></a>
										</div>
										<div class="food-content">
											<a href="#">Breakfast</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="food-item">
										<div class="food-thumb">
											<a href="#"><img src="{{asset('libraries/assets/images/food/02.png')}}" alt="food"></a>
										</div>
										<div class="food-content">
											<a href="#">Lunch</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="food-item">
										<div class="food-thumb">
											<a href="#"><img src="{{asset('libraries/assets/images/food/03.png')}}" alt="food"></a>
										</div>
										<div class="food-content">
											<a href="#">Dinner</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="food-item">
										<div class="food-thumb">
											<a href="#"><img src="{{asset('libraries/assets/images/food/04.png')}}" alt="food"></a>
										</div>
										<div class="food-content">
											<a href="#">Drink</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="food-item">
										<div class="food-thumb">
											<a href="#"><img src="{{asset('libraries/assets/images/food/05.png')}}" alt="food"></a>
										</div>
										<div class="food-content">
											<a href="#">Juice</a>
										</div>
									</div>
								</div>
							
								
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Food Catagory Section Ending here -->

		<!-- Food Services Section Start here -->
		<section class="food-services padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>How it Works</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="{{asset('libraries/assets/images/service/01.jpg')}}" alt="food-service">
								<span>01 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">Choose Your Favorite</a></h6>
							</div>
						</div>
					</div>
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="{{asset('libraries/assets/images/service/02.jpg')}}" alt="food-service">
								<span>02 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">We Deliver Your Meals</a></h6>
							</div>
						</div>
					</div>
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="{{asset('libraries/assets/images/service/03.jpg')}}" alt="food-service">
								<span>03 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">Cash on Delivery</a></h6>
							</div>
						</div>
					</div>
					<div class="service-item">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="{{asset('libraries/assets/images/service/04.jpg')}}" alt="food-service">
								<span>04 step</span>
							</div>
							<div class="service-content">
								<h6><a href="#">Eat And Enjoy</a></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Food Services Section Ending here -->




		
		<!-- Popular Food Section Start Here -->
		<section class="popular-foods padding-tb" style="background-color: #fafeff;">
			<div class="container">
				<div class="section-header">
					<h3>Most Popular Foods</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row">

					@foreach($data as $item)
					<div class="col-xl-4 col-md-6 col-12">
							<div class="p-food-item">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{ asset('storage'.$item->photo)}}" alt="p-food">
										<span>20.99</span>
									</div>
									<div class="p-food-content">
										<div class="p-food-author">
										@foreach($data3 as $item3)
										
										@if($item->user_id==$item3->id)
											<a href="homechef-single.html"><img src="{{ asset('storage'.$item3->photo)}}" alt="food-author"></a>
										@break
										@endif
										@endforeach   
										</div>
										<h6><a href="#">{{$item->name}}</a></h6>
										<p>Available on <a href="#">Everyday</a></p>
										<div class="p-food-group">
											<a href="#" class="food-btn"><span>ADD TO CART</span></a>
											
										</div>
										<div class="p-food-footer">
											<div class="left"><i class="icofont-focus"></i>Servings 1.1</div>
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
										<img src="{{asset('storage/images/rBbgV9UhCwXJMb5nQgIEExgCx7Jtk7riIi079dxJ.jpg')}}" alt="p-food">
										

										@if( Carbon\Carbon::now()<Carbon\Carbon::parse('2022-12-10 00:00:00') && Carbon\Carbon::now() > Carbon\Carbon::parse('2022-12-7 00:00:00' ))
										<span>$20 OFFER</span>
									@endif
									</div>
									<div class="p-food-content">
										<div class="p-food-author">
											<a href="#"><img src="{{asset('libraries/assets/images/chef/author/01.jpg')}}" alt="food-author"></a>
										</div>
										<h6><a href="#">Dragon Express</a></h6>
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
											<span>Offer ends in</span>
											</div>
											<div class="right">{{Carbon\Carbon::parse('2022-12-10 08:00:00')}}</div>
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

		<!-- Food Apps Section Start here -->
		<section class="food-apps">
			<div class="bg-shape-style"></div>
			<div class="container">
				<div class="row align-items-center flex-row-reverse">
					<div class="col-lg-6 col-12">
						<div class="apps-content padding-tb">
							<div class="section-header">
								<h3>Mezban FoodBakery In Your Mobile! Get Our App</h3>
								<p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery & Takeout App.</p>
								<div class="food-btn-group">
									<a href="#">
										<img src="{{asset('libraries/assets/images/apps/icon/01.png')}}" alt="food-apps">
										<div class="app-download">
											<p>Download it from</p>
											<span>Play Store</span>
										</div>
									</a>
									<a href="#">
										<img src="{{asset('libraries/assets/images/apps/icon/02.png')}}" alt="food-apps">
										<div class="app-download">
											<p>Download it from</p>
											<span>App Store</span>
										</div>
									</a>
								</div>
								<form>
									<div class="field-holder">
										<input class="field-input" type="email" placeholder="Enter your area (Dhaka Bangladesh)">
										<button type="submit" class="field-label-btn">Send Link</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="apps-thumb">
							<img src="{{asset('libraries/assets/images/apps/01.png')}}" alt="food-apps">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Food Apps Section Ending here -->

		<!-- Popular Food Section Style 2 Start Here -->
		<section class="popular-foods padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>Popular Weekly Foods</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('libraries/assets/images/popular-food/style-2/01.jpg')}}" alt="p-food">
										<span>$20.99</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">Dragon Express</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li><a href="#"><img src="{{asset('libraries/assets/images/chef/author/01.jpg')}}" alt="food-author"></a></li>
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
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('storageimages//rBbgV9UhCwXJMb5nQgIEExgCx7Jtk7riIi079dxJ.jpg')}}" alt="p-food">
										<span>$20.99</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">Meat Lovers</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li><a href="#"><img src="{{asset('libraries/assets/images/chef/author/03.jpg')}}" alt="food-author"></a></li>
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
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('libraries/assets/images/popular-food//style-2/03.jpg')}}" alt="p-food">
										<span>$20.99</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">Subway</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li><a href="#"><img src="{{asset('libraries/assets/images/chef/author/04.jpg')}}" alt="food-author"></a></li>
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
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('libraries/assets/images/popular-food//style-2/04.jpg')}}" alt="p-food">
										<span>$20.99</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">Nando’s</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li><a href="#"><img src="{{asset('libraries/assets/images/chef/author/05.jpg')}}" alt="food-author"></a></li>
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
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('libraries/assets/images/popular-food//style-2/06.jpg')}}" alt="p-food">
										<span>$20.99</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">Pizza Hut</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li><a href="#"><img src="{{asset('libraries/assets/images/chef/author/05.jpg')}}" alt="food-author"></a></li>
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
						<div class="col-lg-6 col-12">
							<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{asset('libraries/assets/images/popular-food//style-2/06.jpg')}}" alt="p-food">
										<span>$20.99</span>
									</div>
									<div class="p-food-content">
										<h6><a href="#">Misimisu Chinese Food</a></h6>
										<div class="p-food-group">
											<span>Type of food :</span>
											<a href="#">Beef Roast</a>
											<a href="#">Pizza</a>
											<a href="#">Stakes</a>
										</div>
										<ul class="del-time">
											<li><a href="#"><img src="{{asset('libraries/assets/images/chef/author/06.jpg')}}" alt="food-author"></a></li>
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
		<!-- Popular Food Section Style 2 Ending Here -->


		<!-- top Restaurants section start here -->
		<section class="restaurant-section padding-tb">
			<div class="container">
				<div class="section-header">
					<h3>Top Restaurants</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="top-restaurant">

					    @foreach ($data2 as $item2)
						<div class="restaurant-item">
							<div class="restaurant-inner">
								<div class="restaurant-thumb">
									<a href="#"><img src="{{ asset('storage'.$item2->photo)}}" alt="restaurant"></a>
								</div>
							</div>
						</div>
					
                        @endforeach









						
						<div class="restaurant-item">
							<div class="restaurant-inner">
								<div class="restaurant-thumb">
									<a href="#"><img src="{{asset('libraries/assets/images/restaurant/07.jpg')}}" alt="restaurant"></a>
								</div>
							</div>
						</div>
						<div class="restaurant-item">
							<div class="restaurant-inner">
								<div class="restaurant-thumb">
									<a href="#"><img src="{{asset('libraries/assets/images/restaurant/08.jpg')}}" alt="restaurant"></a>
								</div>
							</div>
						</div>
						<div class="restaurant-item">
							<div class="restaurant-inner">
								<div class="restaurant-thumb">
									<a href="#"><img src="{{asset('libraries/assets/images/restaurant/09.jpg')}}" alt="restaurant"></a>
								</div>
							</div>
						</div>
						<div class="restaurant-item">
							<div class="restaurant-inner">
								<div class="restaurant-thumb">
									<a href="#"><img src="{{asset('libraries/assets/images/restaurant/10.jpg')}}" alt="restaurant"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- top Restaurants section ending here -->

@if(session('user')!='')
		<!-- Contact From Section Start Here -->
		<section class="contact-us">
			<div class="bg-shape-style"></div>
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-4 col-lg-6 col-12">
						<div class="contact-from">
							<h5>Register Now</h5>
							<form action="{{route('store.store')}}" method="POST">
							@csrf
								<input type="text" name="name" placeholder="Full Name*" value="{{session('user')}}">
								<input type="email" name="email" placeholder="Your Email*" value="{{session('email')}}">
								<input type="text" name="number" placeholder="Phone Number" value="{{session('number')}}">
								<input type="submit" value="Free Registration">
							</form>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-12">
						<div class="contact-home-chef">
							<div class="section-header">
								<h3>Become A HomeChef.</h3>
								<p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use</p>
								<p>If you are interested please click on register and wait for admin reply</p>
							</div>
							<div class="section-wrapper">
								<div class="contact-count-item">
									<div class="contact-count-inner">
										<div class="contact-count-thumb">
											<img src="{{asset('libraries/assets/images/contac/icon/01.png')}}" alt="food-contact">
										</div>
										<div class="contact-count-content">
											<h5><span class="counter">24896</span>+</h5>
											<p>Food</p>
										</div>
									</div>
								</div>
								<div class="contact-count-item">
									<div class="contact-count-inner">
										<div class="contact-count-thumb">
											<img src="{{asset('libraries/assets/images/contac/icon/02.png')}}" alt="food-contact">
										</div>
										<div class="contact-count-content">
											<h5><span class="counter">2.5</span>K</h5>
											<p>Clints</p>
										</div>
									</div>
								</div>
								<div class="contact-count-item">
									<div class="contact-count-inner">
										<div class="contact-count-thumb">
											<img src="{{asset('libraries/assets/images/contac/icon/03.png')}}" alt="food-contact">
										</div>
										<div class="contact-count-content">
											<h5><span class="counter">250</span>+</h5>
											<p>Chef</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12">
						<div class="contact-thumb">
							<img src="{{asset('libraries/assets/images/contac/01.png')}}" alt="food-contact">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact From Section Ending Here -->
		@endif

		
		<!-- Popular Home Chef Section Start Here -->
		<section class="popular-chef padding-tb" style="background-color: #fafeff;">
			<div class="container">
				<div class="section-header">
					<h3>Popular HomeChef</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-md-6 col-12">
							<div class="chef-item">
								<div class="chef-inner">
									<div class="chef-thumb">
										<img src="{{asset('libraries/assets/images/chef/01.jpg')}}" alt="food-chef">
									</div>
									<div class="chef-content">
										<div class="chef-author">
											<a href="#">
												<img src="{{asset('libraries/assets/images/chef/author/07.jpg')}}" alt="chef-author">
											</a>
										</div>
										<h5><a href="#">Sanzida laila Trisha</a></h5>
										<p>Month Top Homechef</p>
										<div class="scocial-share">
											<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
										</div>
										<div class="chef-footer">
											<div class="chef-earn chef-con">
												<h6>$290.00</h6>
												<a href="#">Earned</a>
											</div>
											<div class="chef-menu chef-con">
												<h6>96</h6>
												<a href="#">Food Menu</a>
											</div>
											<div class="chef-recipe chef-con">
												<h6>33</h6>
												<a href="#">Recipe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="chef-item">
								<div class="chef-inner">
									<div class="chef-thumb">
										<img src="{{asset('libraries/assets/images/chef/02.jpg')}}" alt="food-chef">
									</div>
									<div class="chef-content">
										<div class="chef-author">
											<a href="#">
												<img src="{{asset('libraries/assets/images/chef/author/08.jpg')}}" alt="chef-author">
											</a>
										</div>
										<h5><a href="#">Jinnat Raihun Sumi</a></h5>
										<p>Month Top Homechef</p>
										<div class="scocial-share">
											<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
										</div>
										<div class="chef-footer">
											<div class="chef-earn chef-con">
												<h6>$290.00</h6>
												<a href="#">Earned</a>
											</div>
											<div class="chef-menu chef-con">
												<h6>96</h6>
												<a href="#">Food Menu</a>
											</div>
											<div class="chef-recipe chef-con">
												<h6>33</h6>
												<a href="#">Recipe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12">
							<div class="chef-item">
								<div class="chef-inner">
									<div class="chef-thumb">
										<img src="{{asset('libraries/assets/images/chef/03.jpg')}}" alt="food-chef">
									</div>
									<div class="chef-content">
										<div class="chef-author">
											<a href="#">
												<img src="{{asset('libraries/assets/images/chef/author/09.jpg')}}" alt="chef-author">
											</a>
										</div>
										<h5><a href="#">Shahana Anam Khan</a></h5>
										<p>Month Top Homechef</p>
										<div class="scocial-share">
											<a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
										</div>
										<div class="chef-footer">
											<div class="chef-earn chef-con">
												<h6>$290.00</h6>
												<a href="#">Earned</a>
											</div>
											<div class="chef-menu chef-con">
												<h6>96</h6>
												<a href="#">Food Menu</a>
											</div>
											<div class="chef-recipe chef-con">
												<h6>33</h6>
												<a href="#">Recipe</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Popular Home Chef Section Ending Here -->



		<!-- Testimonial Section Start Here -->
		<section class="testimonial padding-tb" style="background-image: url(assets/css/bg-image/category-bg.jpg); background-size: cover;">
			<div class="container">
				<div class="section-wrapper">
					<div class="quete-thumb">
						<img src="{{asset('libraries/assets/images/testimonial/icon/01.jpg')}}" alt="food-quete">
					</div>
					<div id="demo" class="carousel slide vert">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="testi-item">
									<p>Extend Accurate Services  Long Term High Impact Experiences Interactiv Streamline Team Compelingly Simplify Solutions Before Technicaly Sound Leadership Skills Creative Holstic Process Improvements Proactively Streamline Alternative Niche Markets Forwor Resource Conveniently cultivate pandemic technology and corporate.</p>
									<h6>Somrat Islam <span>(UI Designer)</span></h6>
									<div class="rating">
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testi-item">
									<p>Extend Accurate Services  Long Term High Impact Experiences Interactiv Streamline Team Compelingly Simplify Solutions Before Technicaly Sound Leadership Skills Creative Holstic Process Improvements Proactively Streamline Alternative Niche Markets Forwor Resource Conveniently cultivate pandemic technology and corporate.</p>
									<h6>Somrat Islam <span>(UI Designer)</span></h6>
									<div class="rating">
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testi-item">
									<p>Extend Accurate Services  Long Term High Impact Experiences Interactiv Streamline Team Compelingly Simplify Solutions Before Technicaly Sound Leadership Skills Creative Holstic Process Improvements Proactively Streamline Alternative Niche Markets Forwor Resource Conveniently cultivate pandemic technology and corporate.</p>
									<h6>Somrat Islam <span>(UI Designer)</span></h6>
									<div class="rating">
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
										<i class="icofont-star"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-indicators">
							<div data-target="#demo" data-slide-to="0" class="item active">
								<img src="{{asset('libraries/assets/images/testimonial/01.jpg')}}" alt="">
							</div>
							<div data-target="#demo" data-slide-to="1" class="item">
								<img src="{{asset('libraries/assets/images/testimonial/02.jpg')}}" alt="">
							</div>
							<div data-target="#demo" data-slide-to="2" class="item">
								<img src="{{asset('libraries/assets/images/testimonial/03.jpg')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonial Section Ending Here -->


		

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