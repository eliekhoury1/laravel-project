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

                                <th>Foods Name</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                
                                <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($listdata as $item)

                                        @php
                                        $f= App\Http\Controllers\FoodsController::getfood($item->foods_id);
                                        $s=App\Http\Controllers\OfferController::getoffertime($item->id);
                                        @endphp
                                <tr>
                                    
                                    <td>
                                    <div class="p-content">
                                            <a href="#">{{$f->name}}</a>
                                        </div>
                                </td>

                                <td>
                                        <div class="p-content">
                                            <a href="#">{{$item->percentage}}%</a>
                                        </div>
                                    </td>
                                   

                                 <td>
                                        <div class="p-content">
                                            <a href="#">{{$s}}</a>
                                        </div>
                                    </td>
                                      
                            
    <td>
      <form action="{{route('offers.destroy',['offer'=>$item['id']])}}" method="post">
        @csrf
        @method('Delete')
        <button class="btn btn-danger" type="submit">DELETE</button>
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