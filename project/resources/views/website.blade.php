
@extends('layouts.index')

@include('layouts.nav')
@section('body')
		<!-- Banner Section Start Here -->
	
     @if(session('role')=='Role1')
     
    
     @elseif(session('role')=='Role2')
     <script>window.location = "{{route('Foods.index')}}";</script>
    
     @elseif(session('role')=='Role3')
     <script>window.location = "{{route('store.index')}}";</script>
  @endif

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
									<div>
									<label for="price1"> &nbsp;&nbsp;&nbsp; Price between:</label>
									<input type="number" name="price1" min="1" max="500">
									<label for="price2">and</label>
									<input type="number" name="price2" min="1" max="1000">
									</div>
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
		<section class="popular-foods padding-tb" >
			<div class="container">
				<div class="section-header">
					<h3> Foods</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row">

					@foreach($data as $item)
					@php
					$f= App\Http\Controllers\FoodsController::getnewprice($item['id']);
					$t= App\Http\Controllers\OfferController::iforderexist($item['id']);
					@endphp 

					<div class="col-xl-4 col-md-6 col-12">
							<div class="p-food-item">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{ asset('storage'.$item->photo)}}" alt="p-food">
										@if($t==1)
										<span>{{$item['price']}} -> {{$f}}</span>
										@endif
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
										
										@if(session('user')!='')
											<form action="{{url('Cart',['id'=>$item->id])}}" method="post">
												@else
												<form action="{{route('signin.create')}}" method="get">
													@endif
											@csrf
											
											<button class="btn btn-danger" type="submit">ADDTO CART</button>
											<br><br>
									</form>
										</div>
										<div class="p-food-footer">
											<div class="left"><i ></i>Price: ${{$f}}</div>
											<div class="right"><i ></i>Cuisine: {{$item->cuisine}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @endforeach













						
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
					<h3>Foods</h3>
					<p>Completely network impactful users whereas next-generation applications engage out thinking via tactical action.</p>
				</div>
				<div class="section-wrapper">
					<div class="row">
						@foreach($data as $item)
						@php
					$f1= App\Http\Controllers\FoodsController::getnewprice($item['id']);
					$t1= App\Http\Controllers\OfferController::iforderexist($item['id']);
					@endphp 
						<div class="col-lg-6 col-12">
						<div class="p-food-item style-2">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{ asset('storage'.$item->photo)}}" alt="p-food">
										@if($t1==1)
										<span>{{$item['price']}} -> {{$f1}}</span>
										@endif
									</div>

									<div class="p-food-content">
										<h6><a href="#">{{$item->name}}</a></h6>
										
										<ul class="del-time">
											@foreach($data3 as $item3)
											<li><a href="#"><img src="{{ asset('storage'.$item3->photo)}}" alt="food-author"></a></li>
											@break
											@endforeach
											
										</ul>
										<div class="p-food-footer">
											<div class="left">
											<span>Cuisine:{{$item->cuisine}}</span>	
											</div>
											<div class="right">
											
											<span>Price:{{$f1}}</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
						
						
						
						
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
					<h3>Restaurants</h3>
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
								<input type="text" name="number" placeholder="Phone Number" required>
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

		
		

		<!-- Testimonial Section Start Here -->
		<section class="testimonial padding-tb" >
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

@endsection
		

	
		

<script>

 var botmanWidget = {

	 aboutText: 'ssdsd',

	 introMessage: "✋ Hi! I’m form Mezban"

 };

</script>

 <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
		
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