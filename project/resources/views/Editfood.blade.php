@extends('layouts.index')
@include('layouts.nav1')
    <style>* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-image: url(/libraries/assets/css/bg-image/apps-bg.jpg);
  
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
<form method="post" action="{{route('Foods.update',['Food'=>$addfood])}}" id="form" class="validate" enctype="multipart/form-data" >
@csrf 
@method("PUT")
<div class="form-field">
<input type="hidden"  name="id" value=1>
    <label for="username">name</label>
    <input type="text" name="name"  placeholder="food name"  value="{{$addfood->name}}" />
  </div>
  
 
  <div class="form-field">
    <label for="price">price</label>
    <input type="text" name="price"  placeholder="price" value="{{$addfood->price}}" />
  </div>
   
  <div class="form-field">
    <label for="cuisine">cuisine</label>
    <select class="selection" id="cuisine" name="cuisine" >
    <option value="Italian" {{($addfood->cuisine=="Italian")? "selected":""}} >Italian</option>
    <option value="Japanese" {{($addfood->cuisine=="Japanese")? "selected":""}}>Japanese</option>
    <option value="Mexican" {{($addfood->cuisine=="Mexican")? "selected":""}}>Mexican</option>
    <option value="Chinese" {{($addfood->cuisine=="Chinese")? "selected":""}}>Chinese</option>
    <option value="Turkish" {{($addfood->cuisine=="Turkish")? "selected":""}}>Turkish</option>
    <option value="Thai"    {{($addfood->cuisine=="Thai")? "selected":""}}>Thai</option>
    <option value="French"  {{($addfood->cuisine=="French")? "selected":""}}French></option>
  </select>
  </div>
  <div class="form-field">
  <label for="diet">diet</label>
  <select class="selection" id="diet" name="diet" value="{{$addfood->cuisine}}">
    <option value="vegan" {{($addfood->diet=="vegan")? "selected":""}}>vegan</option>
    <option value="keto" {{($addfood->diet=="keto")? "selected":""}}>keto</option>
  </select>
</div> 
<div class="form-field">
<label for="picture">Product image</label>
<input type="file" name="photo"  value="{{asset('storage'.$addfood->photo)}}" >
</div>


  <div class="form-field">
    <label for=""></label>
    <input style="background-color:red;color:white;" type="submit" value="Update food" />
  </div>
</form>
<button class="btn btn-danger" onclick="window.location.href='/Foods';">Back</button>


</div>
</body>

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


		
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
</html>