	<!DOCTYPE html>
<html lang="en">
	<head>





	
    <meta name="csrf-token" content="{{csrf_token()}}">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Signin and Signup</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('libraries/assets/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('libraries/assets/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('libraries/assets/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('libraries/assets/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('libraries/assets/css/jquery-ui.css')}}">				
			<link rel="stylesheet" href="{{asset('libraries/assets/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('libraries/assets/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('libraries/assets/css/owl.carousel.css')}}">				
			<link rel="stylesheet" href="{{asset('libraries/assets/css/main.css')}}">

			<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('libraries/assets/https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css')}}">

<!-- Compiled and minified JavaScript -->
<script src="{{asset('libraries/assets/https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js')}}"></script>



            <style>

body{
    margin: 0;
    padding: 0;
    background-image: url(/libraries/assets/css/bg-image/apps-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    font-family : Verdana,Tahoma, sans-serif;
}

.box{
    width: 380px;
    height: 600px;
    background-color:white;
    padding: 20px;
    margin: 8% auto 0;
    text-align: left;
    box-sizing: border-box;
    flex-direction: column;
	border-radius: 10px;
}

.box img{
	width:50px;
    margin-top:-50px ;
}

.header {
	width: 300px;
    height: 50px;
    text-transform: uppercase;
	display: inline-flex;
    padding-top: 20px;
    padding-bottom: 0;
	justify-content: space-between;
}

.header a {
    font-size: 20px;
    text-decoration: none;
    color: #ee4343;
	display: inline-flex;
    padding-left: 25px;
    padding-right: 25px;
	justify-content: center;
    cursor:pointer;
}

.header .active {
    color:#fb524f;
	font-weight: bold;
	position: relative;
}

.header .active:after {
	position: absolute;
    border: none;
	content: "";
}

#errorMsg{
    color:red;
    text-align: center;
    font-size: 12px;
    padding-bottom: 20px;

}

.content{
    display: inline-flex;
    overflow: hidden;
}

form {
    position: relative;
    display: inline-flex;
    width: 100%;
    height: 100%;
	flex-shrink: 0;
	flex-direction: column;
	transition: right 0.5s;
}

.login a{
    text-decoration: none;
    color: black;
    font-size: 15px;
    text-align: center;
    cursor: pointer;

}

.extend form {
	right: 100%;
}

input[type=text], input[type=password], input[type=email]{
	display:block;
    position: relative;
	
	border-radius:10px;
	box-shadow:0 0 10px rgb(129 72 17 / 10%);
	padding: 12px;
    margin-bottom: 15px;
    width: 100%;
 	box-sizing: border-box;
    font-size: 17px;
    outline: none;
}



input[type=submit]{
    display:block;
    position: relative;
    border: 3px solid #fb524f;
    padding: 12px;
    margin-bottom: 20px;
    width: 100%;
    border-radius: 10px;
    background-color:#fb524f ;
    text-align:center;
    font-size: 20px;
    color: #ffffff;
	cursor:pointer;
    outline: none;
}
	
input[type=submit]:hover{
	 background-color:#ffffff;
     color: #000000;
     font-weight: bold;
}
input[type=checkbox]{
    background-color:#f8b600;
}
#check{
    margin-top: 10px;
    text-align: left;
}


</style>
		</head>
		<body>	
		
	  
						  


    <div class="box">


        <h3  style= "color:red;">REGISTER NOW</h3>
		
			
        <div class="page">
            <div class="header">
                <a id="login" class="active" href="#login">Signin</a>
                <a id="signup" href="#signup">signup</a>
            </div>
            <div id="errorMsg"></div>
            <div class="content">
			        
                    
					
                <form class="login" name="loginForm" action="{{route('login')}}" method="GET">
                  @csrf
				    <input type="text" name="email" id="logName" placeholder="Email">
					@error('email')
					<p>{{$message}}</p>
					@enderror
                    <input type="password" name="password" id="logPassword" placeholder="Password"><br>
					@error('confirmpassword')
					<p>{{$message}}</p>
					@enderror
			
					<input type="submit" value="Login">
				    <div class="class=login center-align">
    <a class="oauth-container btn darken-4 white black-text" href="{{ route('auth.google') }}" style="text-transform:none">
        <div class="left">
            <img width="20px"  style="margin-top:20px; margin-right:8px" alt="Google sign-in" 
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
				</div>
				<div class="right">
				Login with Google
                 </div>
    </a>
</div>
			

                </form>
				
		
		
                <form  name="signupForm" action="{{route('signin.store')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                    <input type="text" name="name" placeholder="Full Name*">
                    <input type="email" name="email" placeholder="Your Email*">
					
                    <input type="text" name="number" placeholder="Phone Number">
					<select name="role" id="role">
					<option value="Role1">User</option>
                    </select><br>
                    <!--<label for="picture">Product image</label>-->
                     <!--<input type="file" name="photo" required><br>-->
                    <input type="password" name="password" placeholder="Password">
					
                    <input type="password" name="confirmpassword" placeholder="Confirm password">
                    <input type="submit" value="Free Registration">
                </form>
            </div>
        </div>
    </div>




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









    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
	
	
					
					
					
	<script>
	
	$(window).on("hashchange", function () {
	if (location.hash.slice(1) == "signup") {
		$(".page").addClass("extend");
		$("#login").removeClass("active");
		$("#signup").addClass("active");
	} else {
		$(".page").removeClass("extend");
		$("#login").addClass("active");
		$("#signup").removeClass("active");
	}
});
$(window).trigger("hashchange");

function validateLoginForm() {
	var name = document.getElementById("logName").value;
	var password = document.getElementById("logPassword").value;

	if (name == "" || password == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 8) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 8 characters"
		return false;
	}
	else {
		alert("Successfully logged in");
		return true;
	}
}
function validateSignupForm() {
	var mail = document.getElementById("signEmail").value;
	var name = document.getElementById("signName").value;
	var password = document.getElementById("signPassword").value;

	if (mail == "" || name == "" || password == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 8) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 8 characters"
		return false;
	}
	else {
		alert("Successfully signed up");
		return true;
	}
}
	
	</script>
	
	<br><br>
	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
	
		</body>
	</html>