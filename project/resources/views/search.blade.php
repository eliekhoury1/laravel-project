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


        


        <!-- Shop Cart Page Section start here -->		            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                        <table>
                            <thead>
                                <tr>
                                 <th>Photo</th>   
                                <th>Foodname</th>
                                <th>Storename</th>
                                <th>price</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                            @php
                            $f= App\Http\Controllers\FoodsController::getnewprice($item['id']);
                            $store= App\Http\Controllers\FoodsController::getfoodname($item['id']); 
                            @endphp    
                            <tr>
                                <form action="{{url('Cart',['id'=>$item['id']])}}" method="post">
                                @csrf
                                  <tr>
                                  <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{ asset('storage'.$item->photo)}}" alt="product"></a>
                                        </div>
                                       
                                    </td>
                                    <td>{{$item['name']}}</td>
                                    <td>{{$store}}</td>
                                    <td>{{$f}}</td>
                                    <td>
                                          <button class="btn btn-danger" type=submit>Add to cart</button>
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