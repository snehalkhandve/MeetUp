<html>
<title>Signuppage</title>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
	</script>
	
	<script>

$(document).ready(function () {
	$('#uname').keyup(()=>{
	var regex = /(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])/; 
	//no _ or . at the end, no __ or _. or ._ or .. inside,no _ or . at the beginning, username is 8-20 characters long
	if(!regex.test($('#uname').val())){
		//$('#uname').parent().css('border-bottom','2px solid red');
		$('.error_msgu').removeClass('hidden');
	                 $('.error_msgu').show();
	}
	else{
		//$('#uname').parent().css('border-bottom','');
		 $('.error_msgu').addClass('hidden');
	}
});
});

$(document).ready(function() {
	$('#umail').keyup(()=>{
	var regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{1,4}$/;
	//no _ or . at the end, no __ or _. or ._ or .. inside,no _ or . at the beginning, username is 8-20 characters long
	if(!regex.test($('#umail').val())){
		$('.error_msge').removeClass('hidden');
	                 $('.error_msge').show();
	}
	else{
		$('.error_msge').addClass('hidden');
	}
});
});


$(document).ready(function() {
	$('#psw').keyup(()=>{
	var regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20}/;
	//no _ or . at the end, no __ or _. or ._ or .. inside,no _ or . at the beginning, username is 8-20 characters long
	if(!regex.test($('#psw').val())){
		$('.error_msgp').removeClass('hidden');
	                 $('.error_msgp').show();
	}
	else{
		$('.error_msgp').addClass('hidden');
	}
});
});




	/*$(document).ready(function(){
	    var $regexname = /^([a-zA-Z ]{3,16})$/;
	    $('.user_name').on('keypress keydown keyup',function(){
	             if (!$(this).val().match($regexname)) {
	                 $('.error_msg').removeClass('hidden');
	                 $('.error_msg').show();
	             }
	           else{
	                $('.error_msg').addClass('hidden');
	               }
	         });
	});*/
</script>
	
</head>
<body>
	<h4>Meeting room booking application</h4>
	<header>
			<div class="icon-bar">
			  <a class="active" href="home.html">Home</a> 
			  <a class="active" href="faq.xml">FAQs</a>
			  <a class="active" href="aboutus_jugaad.html">AboutUs</a>
			  <a class="active" href="login.php" style="float: right;">SignUp</a>
			</div>	
	</header>	

<div class="login">
  <h1>Sign Up</h1>
  <form method="post" action="validationsignup.php">

   <div>
	 	<label><b>Email*</b></label><input id="umail" type="text" name="email" placeholder=" Enter email address" required>
	 	<span class="error_msge hidden">Please Enter a Valid Email</span>
	 </div>
	<div>
		<label><b>Username*</b></label><input id="uname" class="user_name" type="text" name="username" placeholder="Enter username" required>
		<span class="error_msgu hidden">Username cannot start or end with _ or .</span>
	</div>
	<div>
		<label><b>Password* </b></label><input id="psw" type="password" name="pswd" placeholder="Enter password" required>
		<span class="error_msgp hidden">Password should include small letters, one capital letter, one special character and length 6-20</span>
	</div>
     <p class="tnc"> 
    <label>
    <input type="checkbox" name="tnc_box" id="tnc_box">
  By signing up in you accept our <a href="tnc.html">Terms & Conditions</a></p>
   </label>
</p>
    <p class="submit"><input type="submit" name="commit" value="Sign Up"></p>
  </form>
</div>

</body>
<footer  style="text-align: center;" >
	Copyright &#9400; 2020 MeetUp
</footer>
</html>