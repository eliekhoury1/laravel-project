@extends('layouts.index')
@include('layouts.nav2')






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
                                <th>Change role</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)

  <form action="{{url('/backtouser',['id'=>$item['id']])}}" method="post">
 @csrf
 @method("PUT")
  <tr>
    <td>
				<img width="100px" src="{{ asset('storage'.$item['photo'])}}" alt="p-food">
									</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['number']}}</td>
    
    
    <td>
        
         
          <button class="btn btn-danger" type=submit>Change role</button>

  </td>
  </form>
  </tr>
  @endforeach 
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-danger" onclick="window.location.href='{{ url()->previous() }}';">Back</button>
                    
                      
                          
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