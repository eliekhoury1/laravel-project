<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <option value="French"  {{($addfood->cuisine=="French")? "selected":""}}></option>
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
<input type="file" name="photo" required value="{{asset('storage'.$addfood->photo)}}" >
</div>


  <div class="form-field">
    <label for=""></label>
    <input type="submit" value="Create food" />
  </div>
</form>

</div>
</body>
</html>