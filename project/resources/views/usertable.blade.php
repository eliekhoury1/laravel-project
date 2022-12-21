@extends('layouts.index')
@include('layouts.nav2')





        @php
    $count1 = App\Http\Controllers\LoginController::usercount();
    $count2 = App\Http\Controllers\LoginController::storecount();
    $count3 = App\Http\Controllers\FoodsController::foodcount();
    $count4 = App\Http\Controllers\StoreController::perm();
     @endphp
		

        <!-- Shop Cart Page Section start here -->		            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                        <table>
                            <thead>
                                <tr>
                                <th>image</th>
                                <th>username</th>
                                <th>phonenumber</th>                             
                                <th>Update User</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)

  <form action="{{Route('signin.edit',['signin'=>$item['id']])}}" method="get">
 @csrf
 
  <tr>
    <td>
				<img width="100px" src="{{ asset('storage'.$item['photo'])}}" alt="p-food">
									</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['number']}}</td>
    
    
    <td>
        
         
          <button class="btn btn-danger" type=submit>Update User</button>

  </td>
  </form>
  </tr>
  @endforeach 
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-danger" onclick="window.location.href='{{route('store.index')}}';">Back</button>
                    
                   

                    </div>
                    
                      
                          
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