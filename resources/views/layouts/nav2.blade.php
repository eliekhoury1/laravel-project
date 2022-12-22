


<!DOCTYPE html>





<html lang="en">
	<head>

    @if(session('id'))
     @if(session('role')=='Role1')
     <script>window.location = "{{route('signin.index')}}";</script>
    
    
     @elseif(session('role')=='Role2')
     <script>window.location = "{{route('Foods.index')}}";</script>
    
     @elseif(session('role')=='Role3')
    
     @endif
  @else 
  <script>window.location = "/signin/create";</script> 
@endif

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
                                <a class="active" href="#0">Pending requests</a>
                                <ul>
                                    <li><a class="active" href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    <li><a href="index-3.html">Home Page Three</a></li>
                                    <li><a href="index-4.html">Home Page Four</a></li>
                                </ul>
                            </li>
                           
                            <li>
                                <a href="#0">Pages</a>
								@php 
								
                                        $q = App\Http\Controllers\LoginController::fetmenus();
                                        @endphp
                                <ul>
                                    @foreach($q as $temp)
                                    <li><a href="recepi-single.html">{{$temp['name']}}</a></li>
									@endforeach
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
    @php
    $count1 = App\Http\Controllers\LoginController::usercount();
    $count2 = App\Http\Controllers\LoginController::storecount();
    $count3 = App\Http\Controllers\FoodsController::foodcount();
    $count4 = App\Http\Controllers\StoreController::perm();
     @endphp
		<!-- header section start -->
		<header class="header-section d-xl-block d-none">
			<div class="container-fluid">
				<div class="header-area">
					<div class="logo">
						<a href="index.html"><img src="{{asset('libraries/assets/images/logo/01.png')}}" alt="logo"></a>
					</div>
					<div class="main-menu">
						<ul>
                            
                            <li><a href="{{url('/userstable')}}">Users<span>({{$count1}})</span></a></li>		
                            <li><a href="{{url('/storestable')}}">Stores<span>({{$count2}})</span></a></li>
                            <li><a href="{{url('/foodstable')}}">Foods<span>({{$count3}})</span></a></li>
                            <li><a href="{{Route('store.index')}}">Permissions<span>({{$count4}})</span></a></li>
                        </ul>
					</div>
					<div class="author-option">
						<div class="author-area">
							<div class="city-lang">
								<img src="{{asset('libraries/assets/images/header/01.png')}}" alt="city-lang">
								
									<option >LEB</option>
								
							</div>
						




							<div class="author-account">
							@if(session('user')!='')
								
								<div class="author-icon">
									<img src="{{ asset('storage'.session('photo'))}}" alt="author">
								</div>

                                
								
								<div class="author-select">
								<select name="author-select" id="author-select" onchange="location = this.value;">
										<option value="signin">{{session('user')}}</option>
										<option value="{{route('signin.edit',['signin'=>session('id')])}}">UPDATE</option>
										<option value="{{('/logout')}}">Logout</option>
									</select>

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