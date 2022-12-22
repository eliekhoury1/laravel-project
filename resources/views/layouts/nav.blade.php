
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
                                <a  href="#0">Home</a>
                                <ul>
                                    <li><a  href="index.html">Home Page One</a></li>
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
                                <a href="{{route('signin.index')}}">Home</a>
                            </li>
							
							@if(session('user')!='')
							@php
							$carte=App\Http\Controllers\CartController::checkifcartexist();
							@endphp
								@if($carte!='')
								
								<li><a href="{{url('toCart',['id'=>$carte])}}">Cart</a></li>
								@else
								
								<li><a href="{{route('signin.index')}}">Cart</a></li>
							@endif	
							@else
							
								<li><a href="{{route('signin.index')}}">Cart</a></li>
							@endif
                         
                            <li>
                                <a href="#0">Stores</a>
                                <ul>

								@php 
								
								$q = App\Http\Controllers\LoginController::fetmenus();
								@endphp
						
                                    <li>
                                        <a href="#0">Chef</a>
                                        <ul>
										@foreach($q as $temp)
										@if(session('user')=='')
							<li><a href="{{route('signin.create')}}">{{$temp['name']}}</a></li>

							@endif
							@if(session('user')!='')
							<li><a href="{{url('getchefmenu',['id'=>$temp['id']])}}">{{$temp['name']}}</a></li>
							@endif
                                            
											@endforeach
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            						
                           
                        </ul>
					</div>
					<div class="author-option">
						<div class="author-area">
							<div class="city-lang">
								<img src="{{asset('libraries/assets/images/header/01.png')}}" alt="city-lang">
								
									<option >LEB</option>
								
							</div>
							@if(session('user')!='')
							<div class="cart-option">
								<a href="{{route('Order.index')}}"><img src="{{asset('libraries/assets/images/header/cart.png')}}" alt="shop-cart"></a>
								
								<div class="cart-content">
									
									
								</div>
							</div>
@endif




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