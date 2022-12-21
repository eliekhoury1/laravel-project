<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

       <title>How to install Botman Chatbot in Laravel 5? – devtechnosys.ae</title>

       <link href='https://fonts.googleapis.com/css?family=Nunito:200,600' rel="stylesheet">
    <title>Document</title>



	<style>

html, body {

	background-color: #fff;

	color: #636b6f;

	font-family: ‘Nunito’, sans-serif;

	font-weight: 200;

	height: 100vh;

	margin: 0;

}

</style>

</head>
<body>
<div class='col-md-6'>
@php
    $count1 = App\Http\Controllers\LoginController::usercount();
    $count2 = App\Http\Controllers\LoginController::storecount();
    $count3 = App\Http\Controllers\FoodsController::foodcount();
    $count4 = App\Http\Controllers\StoreController::perm();
     @endphp		
					<div class='list-group list-group-alternate'> 
						<a href="{{url('/userstable')}}" class='list-group-item'><span class='badge'     style='background-color: #ff9b05'></span>{{$count1}} <i class='ti ti-email'></i>  Users </a> 
						<a href="{{url('/storestable')}}" class='list-group-item'><span class='badge' style='background-color: #ff9b05'></span>{{$count2}} <i class='ti ti-email'></i> stores </a> 
						<a href="{{url('/foodstable')}}" class='list-group-item'><span class='badge' style='background-color: #ff9b05'></span> {{$count3}}<i class='ti ti-email'></i> foods </a> 
						<a href="{{Route('store.index')}}" class='list-group-item'><span class='badge'   style='background-color: #ff9b05'></span> {{$count4}}<i class='ti ti-email'></i> permissions </a>
						
					</div>
				</div>
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


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

<script>

 var botmanWidget = {

	 aboutText: 'ssdsd',

	 introMessage: "✋ Hi! I’m form Devtechnosys.ae"

 };

</script>

 <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>