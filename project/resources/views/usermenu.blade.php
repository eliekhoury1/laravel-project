@extends('layouts.index')
@include('layouts.nav')




@if(session('id'))
     @if(session('role')=='Role1')
     
    
     @elseif(session('role')=='Role2')
     <script>window.location = "{{route('Foods.index')}}";</script>
    
     @elseif(session('role')=='Role3')
     <script>window.location = "{{route('store.index')}}";</script>
     @endif
  @else 
  <script>window.location = "/signin/create";</script>
@endif



<!DOCTYPE html>
<html lang="en">
	<head>
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <style>
    .h
    {border: 1px solid black;}

    .rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: left;
    }

    .rating > input {
      display: none;
    }

    .rating > label {
      position: relative;
      width: 1.1em;
      font-size:2vw;
      color: #ffd700;
      cursor: pointer;
    }

    .rating > label::before {
      content: "\2605";
      position: absolute;
      opacity: 0;
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before {
      opacity: 1 !important;
    }

    .rating > input:checked ~ label:before {
      opacity: 1;
    }

    .rating:hover > input:checked ~ label:before {
      opacity: 0.4;
    }
    .checked {
        color: orange;
      }
    textarea {
  resize: none;
  min-height: 25px; 
  max-height: 100px; 
  
}
.fa{
	font-size:20px;
	
}

  </style>

	</head>

	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
		<!-- preloader -->



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
                    <h3>Menu</h3>
                    <ul class="breadcrumb">
                        <li><a href="{{route('signin.index')}}">Home</a></li>
                        <li>Menus</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->

		@php
						$f1= App\Http\Controllers\FoodsController::getnewprice($q->id);
						$t1= App\Http\Controllers\OfferController::iforderexist($q->id);
						@endphp

		
		<!-- Popular Food Section Start Here -->
		<section class="popular-foods padding-tb style-2">
            <div class="container">
                <div class="section-wrapper">
					<p style="color:red;text-align: center;font-size:20px;"><strong>Nutritional facts:</strong><p> {{$q->nut}}</p></p>
					<h3 style="color:red;text-align: center;">Plat du jour</h3>
					<br><br><br>
		<div class="col-xl-4 col-md-6 col-12" style="max-width:40%;left: 30%;">
							<div class="p-food-item">
								<div class="p-food-inner">
									<div class="p-food-thumb">
										<img src="{{ asset('storage'.$q->photo)}}" alt="p-food">
										
										@if($t1==1)
										<span>{{$q['price']}} -> {{$f1}}</span>
										@endif
										
									</div>
									<div class="p-food-content">
										
										<h6><a href="#">{{$q->name}}</a></h6>
										<p>Available on <a href="#">Everyday</a></p>
										<div class="p-food-group">
										
											
											<form action="{{url('Cart',['id'=>$q->id])}}" method="post">
											@csrf
											
											<button class="btn btn-danger" type="submit">ADDTO CART</button>
											<br><br>
									</form>
										</div>
										<div class="p-food-footer">
											<div class="left"><i ></i>Price:{{$f1}}$</div>
											<div class="right"><i ></i>Cuisine: {{$q->cuisine}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
						</div>














                        <br><br>
						<h3 style="color:red;text-align: center;">Menu</h3>
						<br><br><br>
						@foreach($d1 as $item)
						@php
						$f= App\Http\Controllers\FoodsController::getnewprice($item['id']);
						$t= App\Http\Controllers\OfferController::iforderexist($item['id']);
						@endphp
						<div class="col-xl-4 col-md-6 col-12  " >
						<div class="p-food-item">
						
						
								<div class="p-food-inner">
								
									<div class="p-food-thumb">
										<img src="{{ asset('storage'.$q->photo)}}" alt="p-food">
										
										@if($t==1)
										<span>{{$item['price']}} -> {{$f}}</span>
										@endif
										
									</div>
									<div class="p-food-content">
										
										<h6><a href="#">{{$item->name}}</a></h6>
										<p>Available on <a href="#">Everyday</a></p>
										<div class="p-food-group">
										
											
											<form action="{{url('Cart',['id'=>$q->id])}}" method="post">
											@csrf
											
											<button class="btn btn-danger" type="submit">ADDTO CART</button>
											<br><br>
									</form>
										</div>
										<div class="p-food-footer">
											<div class="left"><i ></i>Price:{{$f}}$</div>
											<div class="right"><i ></i>Cuisine: {{$item->cuisine}}</div>
											</div>
										</div>
										
										
								
								</div>
								
							</div>
							
						</div>					
                     </div>
					 @endforeach
















						
					



			<form action="{{Route('review.store')}}" method="post">
			@csrf
			@php
			$s=$item->user_id;
			@endphp
			<div class="container">
				<input type="hidden" id="custId" name="resto_id" value="{{$s}}">
				<textarea style="border-radius:10px;" name="text" placeholder="Enter review here..." rows="5" cols="40"></textarea>
				<div class="rating">
				<input type="radio" name="rating" value="5" id="5" /><label for="5">☆</label>
				<input type="radio" name="rating" value="4" id="4" /><label for="4">☆</label>
				<input type="radio" name="rating" value="3" id="3" /><label for="3">☆</label>
				<input type="radio" name="rating" value="2" id="2" /><label for="2">☆</label>
				<input type="radio" name="rating" value="1" id="1" /><label for="1">☆</label>
				
			</div>
</div>
<div class="container">
    <input style="background-color:red;border-radius:20px;color:white;size=20px;font-size: 16px;border: none;padding: 10px 20px;" type="submit" value="Submit Review" />
     
</form>
	  

							
						</div>
					</div>
				</div>
            </div>
			<br>
			<div class="container">
			@foreach($d2 as $item)
    
    @php
    $qwer = App\Http\Controllers\ReviewController::getusername($item->id);
  
    @endphp
	
    <h3>{{$qwer}}<h3>
    @for ($i = 0; $i < $item->stars; $i++)
 
    <span class="fa fa-star checked"></span>
    @endfor
    
    @for ($i = 0; $i < (5 - $item->stars); $i++)
    <span class="fa fa-star"></span>
    @endfor
    <p>{{$item->comments}}</p>
<br>
    @endforeach
</div>
        </section>
        <!-- Popular Food Section Ending Here -->









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