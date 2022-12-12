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
        
        
		<title>Mezban Shop</title>
	</head>

	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
        <!-- preloader -->
        
        
        <!-- search area -->
        <div class="search-area">
            <div class="search-input">
                <div class="search-close">
                    <span></span>
                    <span></span>
                </div>
                <form>
                    <input type="text" name="text" placeholder="*Search Here.......">
                </form>
            </div>
        </div>
        <!-- search area -->

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
					<div class="mobile-menu-area-inner" id="scrollbar">
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
                                <a class="active" href="#0">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single style-1</a></li>
                                    <li><a href="shop-single-2.html">Shop Single style-2</a></li>
                                    <li><a class="active" href="cart-page.html">Cart Page</a></li>
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
		<header class="header-section header-2 d-xl-block d-none">
            <div class="container">
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
                                <a class="active" href="#0">Shop</a>
                                <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single style-1</a></li>
                                    <li><a href="shop-single-2.html">Shop Single style-2</a></li>
                                    <li><a class="active" href="cart-page.html">Cart Page</a></li>
                                </ul>
                            </li>						
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="author-option">
                        <div class="author-area">
                            <div class="author-account">
                                <i class="icofont-ui-user"></i>
                                <div class="author-select">
                                    <select name="author-select" id="author-select">
                                        <option value="1">My Account </option>
                                        <option value="2">Log Out </option>
                                    </select>
                                </div>
                            </div>
                            <div class="cart-option">
                                <div class="cart-icon">
                                    <img src="{{asset('libraries/assets/images/header/cart-2.png')}}" alt="shop-cart">
                                </div>
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
                                                            <a href="#"></a>
                                                        </div>
                                                        <div class="remove-btn">
                                                            <a href="#"><i class="icofont-close"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart-bottom">
                                                        <div class="sing-price"></div>
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
                            <div class="search-start">
                                <i class="icofont-search-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- header section ending -->
        
        <!-- Page Header Section Start Here -->
        <section class="page-header style-2">
            <div class="container">
                <div class="page-title text-center">
                    <h3>Cart Page</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li>Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->

        <!-- Shop Cart Page Section start here -->		            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                            <form action="{{url('Carte',['id'=>$item['pivot']['carts_id'],'id2'=>$item['pivot']['foods_id']])}}" method="post">
                            @csrf
                            @method('PUT')
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{asset('libraries/assets/images/popular-food/01.jpg')}}" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">{{$item['name']}}</a>
                                        </div>
                                    </td>
                                    <td>{{$item['price']}}</td>
                                    
                                    @php
                                    $r=$item['pivot']['carts_id'];
                                        $q = App\Http\Controllers\CartController::getquantity($item['pivot']['foods_id'],$item['pivot']['carts_id']);
                                        @endphp
                                        <td><input type="number" id="quantity" name="quantity" min="1" max="5" value='{{$q}}'>
                                        
                                    </td>
                                    <td>${{$item['price']*$q}}</td>
                                    
                                    
                                    <td>
                                    <a href="{{url('Cartdel',['id'=>$item['pivot']['carts_id'],'id2'=>$item['pivot']['foods_id']])}}">delete</a>
									
									<button class="btn btn-danger" type="submit">update</button>
							         
                                    </td>
                                </tr>
                                </form>
                                @endforeach
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{asset('libraries/assets/images/popular-food/02.jpg')}}" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$250</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$500</td>
                                    <td>
                                        <a href="#"><img src="{{asset('libraries/assets/images/shop/del.png')}}" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{asset('libraries/assets/images/popular-food/03.jpg')}}" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$100</td>
                                    <td>
                                        <a href="#"><img src="{{asset('libraries/assets/images/shop/del.png')}}" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{asset('libraries/assets/images/popular-food/04.jpg')}}" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$100</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$200</td>
                                    <td>
                                        <a href="#"><img src="{{asset('libraries/assets/images/shop/del.png')}}" alt="product"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{asset('libraries/assets/images/popular-food/05.jpg')}}" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">Product Text Here</a>
                                        </div>
                                    </td>
                                    <td>$200</td>
                                    <td>
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </td>
                                    <td>$400</td>
                                    <td>
                                        <a href="#"><img src="{{asset('libraries/assets/images/shop/del.png')}}" alt="product"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-bottom">
                        <div class="cart-checkout-box">
                        @php
                                        $total= App\Http\Controllers\CartController::getTotal($r);
                                        @endphp
                        <form action="{{url('CreateOrder',['total'=>$total,'id'=>$r])}}" method="post">
                            @csrf
                            <div class="cart-checkout">
                                <label for="appt">Select a time:</label>
                                <input type="time" id="appt" name="timer">
                                <button type="submit" class="food-btn"><span>Order</span></button>
                            </div>
                        </form>
                            <div class="cart-checkout">
                                <input type="submit" value="Update Cart">
                                <input type="submit" value="Proceed to Checkout">
                            </div>
                        </div>
                        <div class="shiping-box">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="calculate-shiping">
                                        <h4>Calculate Shipping</h4>
                                        <div class="outline-select">
                                            <select>
                                                <option value="volvo">United Kingdom (UK)</option>
                                                <option value="saab">Bangladesh</option>
                                                <option value="saab">Pakisthan</option>
                                                <option value="saab">India</option>
                                                <option value="saab">Nepal</option>
                                            </select>
                                            <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                        </div>
                                        <div class="outline-select shipping-select">
                                            <select>
                                                <option value="volvo">State/Country</option>
                                                <option value="saab">Dhaka</option>
                                                <option value="saab">Benkok</option>
                                                <option value="saab">Kolkata</option>
                                                <option value="saab">Kapasia</option>
                                            </select>
                                            <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                        </div>
                                        <input type="text" name="coupon" placeholder="Postcode/ZIP" class="cart-page-input-text"/>	
                                        <button type="submit" class="food-btn"><span>Update Total</span></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="cart-overview">
                                        <h4>Cart Totals</h4>
                                        <ul>
                                        
                                            <li>
                                                <span class="pull-left">Cart Subtotal</span>
                                                <p class="pull-right">$ {{$total}}</p>
                                            </li>
                                            <li>
                                                <span class="pull-left">Shipping and Handling</span>
                                                <p class="pull-right">Free Shipping</p>
                                            </li>
                                            <li>
                                                <span class="pull-left">Order Total</span>
                                                <p class="pull-right">$ 2940.00</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Cart Page Section ending here -->
    

        <!-- Newsletter Section Start Here -->
        <div class="news-letter">
            <div class="container">
                <div class="section-wrapper">
                    <div class="news-title">
                        <h3>For Newsletter</h3>
                    </div>
                    <div class="news-form">
                        <form action="/">
                            <label>
                                <input type="email" name="email" placeholder="Enter Your Email">
                            </label>
                            <input type="submit" name="submit" value="Subscribe now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section Ending Here -->

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

        {{asset('libraries/assets/js/jquery.js')}}
		
		<script src="{{asset('libraries/assets/js/jquery.js')}}"></script>
		<script src="{{asset('libraries/assets/js/min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/swiper.min.js')}}"></script>
		<script src="{{asset('libraries/assets/js/lightcase.js')}}"></script>
		<script src="{{asset('libraries/assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('libraries/assets/js/functions.js')}}"></script>
	</body>
</html>