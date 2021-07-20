<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');
?>

<html>
<head>
<title>Booking Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
	</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  padding-top: 40px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 16px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
 	float: left;
  	width: 33.33%;
}
.container {
	padding-right: 70px; 
}

.card{
	background-color: rgb(204, 230, 255);
}

</style>
</head>
<body>
	<h4>Meeting room booking application</h4>
	<header>
			<div class="icon-bar">
			  <a class="active" href="home.html">Home</a> 
			  <a class="active" href="faq.html">FAQs</a>
			  <a class="active" href="aboutus_jugaad.html">AboutUs</a>
			  <a class="active" href="home.html" style="float: right;">Log Out</a>
			</div>	
			
			<div class="container">
				<div class="row">
					<div class="column">
					 	<div class="card">
						  <br>
						  <h1>Pune</h1>
						  <hr>
						  <form action="details.php" method="post">
						  <?php

								$query = "select * from rooms where location= 'Pune' ";
								$result = mysqli_query($con,$query);
								$num = mysqli_num_rows($result);

								//echo $num;
								
								while($rows = mysqli_fetch_assoc($result))
								{
									echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
								}
						  ?>
						  <p><button>Check Details</button></p>
						</form>
						</div>
					 </div>
					 <div class="column">
					 	<div class="card">
					 		<br>
					 	<h1>Mumbai</h1>
						  <hr>
						  <form action="details.php" method="post">
						  <?php

								$query = "select * from rooms where location= 'Mumbai' ";
								$result = mysqli_query($con,$query);
								$num = mysqli_num_rows($result);

								//echo $num;
								
								while($rows = mysqli_fetch_assoc($result))
								{
									echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
								}
						  ?>
						  <p><button>Check Details</button></p>
						</form>
						 </div>
					 </div>
					 <div class="column">
					 	<div class="card">
					 		<br>
					 	<h1>Goa</h1>
						  <hr>
						  <form action="details.php" method="post">
						  <?php

								$query = "select * from rooms where location= 'Goa' ";
								$result = mysqli_query($con,$query);
								$num = mysqli_num_rows($result);

								//echo $num;
								
								while($rows = mysqli_fetch_assoc($result))
								{
									echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
								}
						  ?>
						  <p><button>Check Details</button></p>
						</form>
					 </div>
					</div>
				</div>
				<br>
				<br>
				<hr>
				<br>
				<br>
				<div class="row">
					<div class="column">
					 	<div class="card">
					 		<br>
						  <h1>Nashik</h1>
						  <hr>
						  <form action="details.php" method="post">
						  <?php

								$query = "select * from rooms where location= 'Nashik' ";
								$result = mysqli_query($con,$query);
								$num = mysqli_num_rows($result);

								//echo $num;
								
								while($rows = mysqli_fetch_assoc($result))
								{
									echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
								}
						  ?>
						  <p><button>Check Details</button></p>
						</form>
						</div>
					 </div>
					 <div class="column">
					 	<div class="card">
					 		<br>
					 	<h1>Aurangabad</h1>
						  <hr>
						  <form action="details.php" method="post">
						  <?php

								$query = "select * from rooms where location= 'Aurangabad' ";
								$result = mysqli_query($con,$query);
								$num = mysqli_num_rows($result);

								//echo $num;
								
								while($rows = mysqli_fetch_assoc($result))
								{
									echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
								}
						  ?>
						  <p><button>Check Details</button></p>
						</form>
						 </div>
					 </div>
					 <div class="column">
					 	<div class="card">
					 	<br>
					 	<h1>Nagpur</h1>
						  <hr>
						  <form action="details.php" method="post">
						  <?php

								$query = "select * from rooms where location= 'Nagpur' ";
								$result = mysqli_query($con,$query);
								$num = mysqli_num_rows($result);

								//echo $num;
								
								while($rows = mysqli_fetch_assoc($result))
								{
									echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
								}
						  ?>
						  <p><button>Check Details</button></p>
						</form>
					 </div>
					</div>
				</div>

			</div>			
	</header>
	
</body>
</html>

