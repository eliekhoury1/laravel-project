@extends('layouts.index')
@include('layouts.nav')




@if(session('role')=='Role1')
     
    
     @elseif(session('role')=='Role2')
     <script>window.location = "{{route('Foods.index')}}";</script>
    
     @elseif(session('role')=='Role3')
     <script>window.location = "{{route('store.index')}}";</script>
  @endif
	<body>
		<!-- preloader -->
		<div class="preloader"><div class="load loade"><hr/><hr/><hr/><hr/></div></div>
		<!-- preloader -->



        <!-- Shop Cart Page Section start here -->		            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                        <table>
                            <thead>
                                <tr>
                                <th>Foodname</th>
                                <th>price</th>
                                <th>quantity</th>
								
                                </tr>
                            </thead>
                            
                            @foreach($data as $item)
  
                            @csrf
                            @php
                            $list= App\Http\Controllers\FoodsController::getfood($item['foods_id']);
                            @endphp
                            <tbody>
                            <tr>
                              <td>{{$list['name']}}</td>
                              <td>{{$list['price']}}</td>
                              <td>{{$item['quantity']}}</td>
								
                            </tr>
                            </tbody>
                            @endforeach 
                            
                        </table>
                    </div>
                    <a href="{{ url()->previous() }}" ><button class="btn btn-danger">Back</button></a>
                    
                      
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Cart Page Section ending here -->
    

        

        
  

		
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