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
                                <th>Storename</th>
                                <th>code</th>
                                <th>total</th>
                                <th>timestamp</th>
                                <th>more info</th>
                                </tr>
                            </thead>
                            <tbody>
							@php
 $notans= App\Http\Controllers\OrderController::notansweredorders();
 @endphp
 @foreach($data as $item)
  @php
 $list= App\Http\Controllers\OrderController::getrestoname($item['id']);
 $cur=\Carbon\Carbon::now();
 
 $list1= App\Http\Controllers\OrderController::gettimeremaining($item['id']);
 
 @endphp
  <form action="{{Route('Order.show',['Order'=>$item['id']])}}" method="get">
 @csrf
  <tr>
    <td>{{$list['name']}}</td>
    <td>{{$item['code']}}</td>
    <td>{{$item['total']}}</td>
    <td>{{$list1}}</td>
    
    <td>
        
         
          <button class="btn btn-danger" type=submit>More Info</button>

  </td>
  </form>
  </tr>
  @endforeach 
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-danger" onclick="window.location.href='signin';">Back</button>
                    
                      
                          
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