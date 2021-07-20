<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');

	$name = $_POST['username'];
	$pass = $_POST['pswd'];

	$query = "select * from Users where UserName = '$name' && Password = '$pass'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	if($num==1){
		header('location:Rooms.php');
	}
	else
	{
		echo '<script type="text/javascript">
			alert("Login failed.");
			window.location.href = "login.php";
		</script>';
	}
?>