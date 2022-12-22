@extends('layouts.index')
@include('layouts.nav')
@section('cartpage')




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
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $sum1=0;
                                @endphp


                            @foreach($data as $item)
                            <form action="{{url('Carte',['id'=>$item['pivot']['carts_id'],'id2'=>$item['pivot']['foods_id']])}}" method="post">
                            @csrf
                            @method('PUT')
                                        @php
                                        $f= App\Http\Controllers\FoodsController::getnewprice($item['id']);
                                        
                                        @endphp 
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{ asset('storage'.$item->photo)}}" alt="product"></a>
                                        </div>
                                        <div class="p-content">
                                            <a href="#">{{$item['name']}}</a>
                                        </div>
                                    </td>
                                    <td>{{$f}}</td>
                                    
                                    @php
                                    $r=$item['pivot']['carts_id'];
                                        $q = App\Http\Controllers\CartController::getquantity($item['pivot']['foods_id'],$item['pivot']['carts_id']);
                                        $temp=$q*$f;
                                        $sum1=$sum1+$temp;
                                        @endphp
                                        <td><input type="number" id="quantity" name="quantity" min="1" max="5" value='{{$q}}'>
                                        
                                    </td>
                                    <td>${{$f*$q}}</td>
                                    
                                    
                                    <td>
                                    <a href="{{url('Cartdel',['id'=>$item['pivot']['carts_id'],'id2'=>$item['pivot']['foods_id']])}}">delete</a>
									
									<button class="btn btn-danger" type="submit">update</button>
							         
                                    </td>
                                </tr>
                                </form>
                                @endforeach
                                
                    
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-bottom">
                        <div class="cart-checkout-box">
                                        @php
                                        $total= App\Http\Controllers\CartController::getTotal($r);
                                        @endphp
                        <form action="{{url('CreateOrder',['id'=>$r])}}" method="post">
                            @csrf
                            <div class="cart-checkout">
                                
                                <button type="submit" class="food-btn"><span>Order</span></button>
                            </div>
                        </form>
                            <div class="cart-checkout">
                            <form action="{{route('Cart.destroy',['Cart'=>$r])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                
                                <button type="submit" class="food-btn"><span>Delete</span></button>
                                </form>
                            </div>
                        </div>
                        <button class="btn btn-danger" onclick="window.location.href='/signin';">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Cart Page Section ending here -->
    

        <!-- Newsletter Section Start Here -->
       
        </div>
        <!-- Newsletter Section Ending Here -->

        
        <!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


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
@endsection