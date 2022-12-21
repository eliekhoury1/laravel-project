@extends('layouts.index')
@include('layouts.nav1')


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
                                <th>permission</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $notans= App\Http\Controllers\OrderController::notansweredorders();
                            @endphp
                            @foreach($data as $item)
                            @php
                            $list= App\Http\Controllers\OrderController::getrestoname($item['id']);
                            
                            @endphp
                                <tr>
                                  <tr>

                                    <td>{{$list['name']}}</td>
                                    <td>{{$item['code']}}</td>
                                    <td>{{$item['total']}}</td>
                                    <td>
                                    <form method="post" action="{{url('acceptorder',['id'=>$item['id']])}}" id="form" class="validate" enctype="multipart/form-data" >
                                    @csrf 
                                    @method("PUT")

                                    <button type="submit" class="food-btn"><span>accept order</span></button>
                                    </form>
                                    
                                    <form method="post" action="{{url('rejectorder',['id'=>$item['id']])}}" id="form" class="validate" enctype="multipart/form-data" >
                                    @csrf 
                                    @method("PUT")

                                    <button type="submit" class="food-btn"><span>reject order</span></button>
                                    </form>
                                  </td>
                                  
                                  
                                  




                                </tr>
                              @endforeach   
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-danger" onclick="window.location.href='{{route('Foods.index')}}';">Back</button>
                    
                      
                          
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