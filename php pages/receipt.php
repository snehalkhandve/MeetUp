<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');

	$name = $_SESSION['rname'];
	$datechosen = $_SESSION['datechosen'];
	$timing = $_SESSION['timing'];
	$hours = $_SESSION['hours'];

	$query = "select $timing from details where name = '$name'";
	$result = mysqli_query($con,$query);
	$rows = mysqli_fetch_assoc($result);

	$price = $rows[$timing];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
</head>
<style>
table {
	
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

  table.center {
    margin-left:auto; 
    margin-right:auto;
  }

td, th {
  border: 1px solid #a9a9a9;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

	<h2 style="text-align: center;">PAYMENT RECEIPT</h2>
	<table class="center">
		<tr>
			<th>Hotel Name</th>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<th>Booking date</th>
			<td><?php echo $datechosen ?></td>
		</tr>
		<tr>
			<th>Slot</th>
			<td><?php echo $timing ?></td>
		</tr>
		<tr>
			<th>Per hour prices </th>
			<td><?php echo $price ?></td>
		</tr>
		<tr>
			<th>No of hours booked</th>
			<td><?php echo $hours ?></td>
		</tr>
		<tr>
			<th>Booking amount</th>
			<td><?php echo $price * $hours ?></td>
		</tr>
	</table>


</body>
</html>