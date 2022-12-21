@extends('layouts.index')
@include('layouts.nav')
@section('cart')


@if(session('role')=='Role1')
     
    
     @elseif(session('role')=='Role2')
     <script>window.location = "{{route('Foods.index')}}";</script>
    
     @elseif(session('role')=='Role3')
     <script>window.location = "{{route('store.index')}}";</script>
  @endif
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
                                <th>more info</th>
                                </tr>
                            </thead>
                            @csrf
                            @php
                            $sum=0;
                            @endphp
                            @foreach($data as $item)
                            @php
                            $list= App\Http\Controllers\OrderController::getrestoname($item['id']);
                            $time= App\Http\Controllers\OrderController::gettime();
                            $sum=$sum+$item['total'];
                            @endphp
                            <tbody>
                            <tr>
                            <td>{{$list['name']}}</td>
                            <td>{{$item['code']}}</td>
                            <td>{{$item['total']}}</td>
							
                            <td>     
                                  <a href="{{route('Order.show',['Order'=>$item['id']])}}"><button class="btn btn-danger" type=submit>More Info</button>
                            </td>
                            </form>
                            </tr>
                            </tbody>
                            @endforeach 
                            
                        </table>
                        </div>


                        <br><br><br>
                        <h4>TOTAL: ${{$sum}}</h4>
  
  <form action="{{url('updateOrder')}}" method="post">
                              @csrf
                              @method('PUT')
                              <div class="cart-checkout">
                                  <label for="appt">Select a time:</label>
								  <input type="hidden" id="custId" name="total" value="{{$sum}}">
                                  <input type="time" id="appt" name="timer" value="{{$time}}">
                                  <button type="submit" class="food-btn"><span>Order</span></button>
                              </div>
                          </form>
                      
  <button class="btn btn-danger" onclick="window.location.href='{{url('Orderdel')}}';">Back</button>
                    


                   
                    
                      
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Cart Page Section ending here -->
    

        
@endsection
        
  

		
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