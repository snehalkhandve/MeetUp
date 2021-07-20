<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');

	$roomname = $_POST['room'];

	$query = "select * from rooms where name = '$roomname'";
	$result = mysqli_query($con,$query);
	$rows = mysqli_fetch_assoc($result);

	$_SESSION['roomname'] = $roomname;
	$_SESSION['location'] = $rows['location'];

	//echo $rows['location'];
	header('location:showdetails.php');
?>