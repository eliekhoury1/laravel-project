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
<form method="post" action="{{route('Foods.store')}}" id="form" class="validate" enctype="multipart/form-data">
@csrf 
<div class="form-field">
<input type="hidden"  name="id" value=1>
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
    <input type="submit" value="Create food" />
  </div>
</form>

</div>
</body>
</html>