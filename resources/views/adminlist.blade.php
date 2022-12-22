@extends('layouts.index')
@include('layouts.nav2')
    @php
    $count1 = App\Http\Controllers\LoginController::usercount();
    $count2 = App\Http\Controllers\LoginController::storecount();
    $count3 = App\Http\Controllers\FoodsController::foodcount();
    $count4 = App\Http\Controllers\StoreController::perm();
     @endphp
	

        <!-- Shop Cart Page Section start here -->
        <br>
        <h4 style="color:red;">Pending requests</h4>
                    <br> 	            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                       
                    <table>
                            <thead>
                            
                                <tr>
                                <th>FULLNAME</th>
                                <th>EMAIL</th>
                                <th>NUMBER</th>
                                <th>ADMIN REPLY</th>
                                <th>ACCEPT</th>
                                <th>REJECT</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($listdata as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->number}}</td>
    <td>{{$item->Admin_reply}}</td>
    <td>
      <form action="{{route('store.update',['store'=>$item])}}" method="POST">
        @csrf
        @method('PUT')
        <button class="btn btn-danger" type="submit">Accept</button>
</form>
    </td>
    <td>
      <form action="{{route('store.destroy',['store'=>$item])}}" method="post">
        @csrf
        @method('Delete')
        <button class="btn btn-danger" type="submit">Reject</button>
</form>
    </td>
</td>
  </tr>
  @endforeach
</table>



                    </div>
                    
                      
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<button style="color:white;background-color:#dc3545;border-radius:20px;width:100px;border-color:#dc3545;" onclick="window.location.href='{{Route('store.index')}}';">Back</button>
<br><br> 
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