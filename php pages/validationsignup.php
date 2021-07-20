<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');

	$email = $_POST['email'];
	$name = $_POST['username'];
	$pass = $_POST['pswd'];

	$query = "select * from Users where email = '$email'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	//echo $num;

	if($num==1){
		echo '<script type="text/javascript">
			alert("Email ID already exists");
			window.location.href = "signup.php";
		</script>';
	}
	else
	{
		$reg = "insert into Users (UserName,Password,email) values ('$name','$pass','$email')";
		mysqli_query($con,$reg);
		echo '<script type="text/javascript">
			alert("Successfully account created !!");
			window.location.href = "login.php";
		</script>';
	}
?>