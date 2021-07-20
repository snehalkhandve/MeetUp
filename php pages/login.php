<html>
<title>Loginpage</title>
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
	
	<script type="text/javascript">
	$(document).ready(function(){
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
	});
</script>
	
</head>
<body>
	<h4>Meeting room booking application</h4>
	<header>
			<div class="icon-bar">
			  <a class="active" href="home.html">Home</a> 
			  <a class="active" href="faq.xml">FAQs</a>
			  <a class="active" href="aboutus_jugaad.html">AboutUs</a>
			  <a class="active" href="signup.php" style="float: right;">SignUp</a>
			</div>	
	</header>	

<div class="login">
  <h1>Login</h1>
  <form method="post" action="validation.php">

    <div>
    	<p><input id="user_name" type="text" name="username" placeholder="Enter Username"></p>
    	<span class="error_msg hidden">Please enter a valid username</span>
    </div>
    	<p><input type="password" name="pswd" placeholder="Enter Password"></p>
     <p class="tnc"> 
    <label>
    <input type="checkbox" name="tnc_box" id="tnc_box">
  By logging in you accept our <a href="tnc.html">Terms & Conditions</a></p>
   </label>
</p>
    <p class="submit"><input type="submit" name="commit" value="Login"></p>
  </form>
</div>
</body>
<footer  style="text-align: center;" >
	Copyright &#9400; 2020 MeetUp
</footer>
</html>