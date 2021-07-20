<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');

	$name = $_POST['rname'];
	$datechosen = $_POST['datechosen'];
	$timing = $_POST['timing'];
	$hours = $_POST['hours'];

	$query = "select * from slotsbooked where name = '$name' && datebooked = '$datechosen' && 	slotname ='$timing'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	//echo $num;

	$_SESSION['rname'] = $name;
	$_SESSION['datechosen'] = $datechosen;
	$_SESSION['timing'] = $timing;
	$_SESSION['hours'] = $hours;

	if($num==1){
		echo '<script type="text/javascript">
			alert("This slot is already booked......Please choose another slot");
			window.location.href = "showdetails.php";
		</script>';
	}
	else
	{
		$reg = "insert into slotsbooked (name,datebooked,slotname) values ('$name','$datechosen','$timing')";
		mysqli_query($con,$reg);
		echo '<script type="text/javascript">
			alert("Successfully Booked !!");
			window.location.href = "receipt.php";
		</script>';
	}
?>