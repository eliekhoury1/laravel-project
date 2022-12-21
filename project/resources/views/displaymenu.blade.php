@extends('layouts.index')

@include('layouts.nav1')

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
                                <th>PHOTO</th>
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>CUISINE</th>
                                <th>DIET</th>
                                
                                <th>UPDATE</th>
                                <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($listdata as $item)
                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="{{ asset('storage'.$item->photo)}}" alt="product"></a>
                                        </div>   
                                    </td>
                                    
                                    <td>
                                    <div class="p-content">
                                            <a href="#">{{$item->name}}</a>
                                        </div>
</td>

                                    <td>{{$item->price}}</td>

                                 <td>
                                        <div class="p-content">
                                            <a href="#">{{$item->cuisine}}</a>
                                        </div>
                                    </td>
                                       <td class="product-item">
                                       
                                        <div class="p-content">
                                            <a href="#">{{$item->diet}}</a>
                                        </div>
                                    </td>
                                    <td>
      <form action="{{route('Foods.edit',['Food'=>$item->id])}}" method="GET">
        @csrf
        @method('GET')
        <button class="btn btn-danger" type="submit">UPDATE</button>
</form>
    </td>
    <td>
      <form action="{{route('Foods.destroy',['Food'=>$item->id])}}" method="post">
        @csrf
        @method('Delete')
        <button class="btn btn-danger" type="submit">DELETE</button>
</form>
    </td>


                                    
                                </tr>
                              @endforeach    
                            </tbody>
                        </table>

                        <form action="{{url('editmenuinfo')}}" method="GET">
                        @csrf
                        @method('GET')
                        <button class="btn btn-danger" type="submit">Add Info</button>
                        </form>
                        <br><br>
                        <a class="btn btn-danger" href="{{url('/checkpendingorders')}}">Check Received orders</a>





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