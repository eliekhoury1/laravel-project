@extends('layouts.index')
@include('layouts.nav1')

    
    <title>Add food</title>
    <style>* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
   background-image: url(/libraries/assets/css/bg-image/apps-bg.jpg);
  
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
@section('addfood')
<body  background="/libraries/assets/css/bg-image/bg.jpg">
<div class="container">
<form method="post" action="{{route('Foods.store')}}" id="form" class="validate" enctype="multipart/form-data">
@csrf 
<div class="form-field">
    <label for="username">name</label>
    <input type="text" name="name"  placeholder="food name"  />
  </div>
  
 
  <div class="form-field">
    <label for="price">price</label>
    <input type="text" name="price"  placeholder="price"  />
  </div>
   
  <div class="form-field">
    <label for="cuisine">cuisine</label>
    <select class="selection" id="cuisine" name="cuisine">
    <option value="Italian">Italian</option>
    <option value="Japanese">Japanese</option>
    <option value="Mexican">Mexican</option>
    <option value="Chinese">Chinese</option>
    <option value="Turkish">Turkish</option>
    <option value="Thai">Thai</option>
    <option value="French">French</option>
  </select>
  </div>
  <div class="form-field">
  <label for="diet">diet</label>
  <select class="selection" id="diet" name="diet">
    <option value="vegan">vegan</option>
    <option value="keto">keto</option>
  </select>
</div>

<div class="form-field">
<label for="picture">Product image</label>
<input type="file" name="photo" required>
</div>


  <div class="form-field">
    <label for=""></label>
    <input type="submit" style="background-color:#dc3545;" value="Create food" />
</div>

</div>
<button class="btn btn-danger" style="border-radius:50px;" onclick="window.location.href='/Foods';">Back</button>
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

  @endsection
</html>