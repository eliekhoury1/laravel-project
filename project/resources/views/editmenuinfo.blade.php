@extends('layouts.index')
@include('layouts.nav1')





    <style>* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #eee;
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
  
}

#form {
  max-width: 700px;
  padding: 2rem;
  box-sizing: border-box;
}

.form-field {
  display: flex;
  margin: 0 0 1rem 0;
}
label, input {
  width: 70%;
  padding: 0.5rem;
  box-sizing: border-box;
  justify-content: space-between;
  font-size: 1.1rem;
}
label {
  text-align: right;
  width: 30%;
}
input {
  border: 2px solid red;
  border-radius: 20px;
  
}

.selection{
border-radius: 20px;
 border: 2px solid red;
}


</style>
</head>
<body  background="libraries/assets/css/bg-image/bg.jpg">
<div class="container">

<form method="post" action="{{url('/updatemenuinfo',['id'=>$data2['id']])}}" id="form" class="validate" enctype="multipart/form-data" >
@csrf 
@method("PUT")
<div class="form-field">
<input type="hidden"  name="id" value=1>
    <label for="username">Nutritional fact</label>
    <input type="text" name="nut"  placeholder="fact"  value="{{$data2['nutritional_facts']}}" />
  </div>

  <div class="form-field">
    <label for="cuisine">Plat du jour</label>
    <select class="selection" id="cuisine" name="foods" >
        @foreach($listdata1 as $item )
    <option value="{{$item->id}}" {{($item->id==$data2->foods_id)? "selected":""}} >{{$item->name}}</option>
        @endforeach
  </select>
  </div>
  
  <div class="form-field">
    <label for=""></label>
    <input type="submit" style="color:white;background-color:#dc3545;" value="Nutritional fact and plat du jour" />
  </div>
</form>
<button style="color:white;background-color:#dc3545;border-radius:20px;width:100px;border-color:#dc3545;" onclick="window.location.href='{{ url()->previous() }}';">Back</button>
<br><br>
</div>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
		
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