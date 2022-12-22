@extends('layouts.index')


     @if(session('role')=='Role1')
     @include('layouts.nav')
    
     @elseif(session('role')=='Role2')
     @include('layouts.nav1')
    
     @elseif(session('role')=='Role3')
     @include('layouts.nav2')
     @endif





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
.button {
  background-color: red;
  border-radius:50px;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body  background="libraries/assets/css/bg-image/bg.jpg">
<div class="container">
<form method="post" action="{{route('signin.update',['signin'=>$listdata->id])}}" id="form" class="validate" enctype="multipart/form-data" >
@csrf 
@method("PUT")
<div class="form-field">
<input type="hidden"  name="id" value=1>
    <label for="username">Name</label>
    <input type="text" name="name"  placeholder="name"  value="{{$listdata->name}}" />
  </div>
  
 
  <div class="form-field">
    <label for="number">Number</label>
    <input type="text" name="number"  placeholder="number" value="{{$listdata->number}}" />
  </div>

<div class="form-field">
<label for="picture">Image</label>
<input type="file" name="photo" required value="{{asset('storage'.$listdata->photo)}}" >
</div>


  <div class="form-field">
    <label for=""></label>
    <input style="background-color:red;color:white;" type="submit" value="Update profile" />
  </div>
</form>

<button class="button button1" onclick="window.location.href='{{ url()->previous() }}';">Back</button>                 
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