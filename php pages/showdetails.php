<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'wtl');
?>

<!DOCTYPE html>
<html>
<title>Loginpage</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 12;
  overflow-x: hidden;
}

.left {
  left: 0;
}

.right {
  right: 0;
  background-color: #cce6ff;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 300px;
  height: 300px;
}
</style>
	
</head>
<body class="w3-container">
	<header>
			<div class="icon-bar">
			  <a class="active" href="home.html">Home</a> 
			  <a class="active" href="faq.html">FAQs</a>
			  <a class="active" href="aboutus_jugaad.html">AboutUs</a>
			  <a class="active" href="signup.html" style="float: right;">SignUp</a>
			</div>	
	</header>

	<div class="split left">
			<?php
				$roomname = $_SESSION['roomname'];
				$location = $_SESSION['location'];

				$query = "select * from details where name = '$roomname'";
				$result = mysqli_query($con,$query);

				$rows = mysqli_fetch_assoc($result);
				$num = mysqli_num_rows($result);
				//echo $num;

				echo '<div class="centered">
				    <img src="'.$rows['imgurl'].'" alt="Room Image">
					<h2>Name : '.$roomname.'</h2>
					<h2>Location : '.$location.'</h2>
				    <p>'.$rows['description'].'</p>
				  <br>Pricing Details :<br><h4>Morning : Rs.'.$rows['slota'].'<br><h4>Afternoon : Rs.'.$rows['slotb'].'<br><h4>Evening : Rs.'.$rows['slotc'].'<br><h4>Night : Rs.'.$rows['slotd'].'</div>';
			?>
			</div>
	
				<div class="split right">
					<div class="centered">
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book Now</button>
					</div>
				</div>

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book a Slot !!</h4>
        </div>
        <div class="modal-body">
        <div style="align-content: center;">
        		<form action="bookslot.php" method="post">
          <?php
				$roomname = $_SESSION['roomname'];
				$location = $_SESSION['location'];

				echo '<div style="align-content: center;">Choose a Date :<br> <input type="date" name="datechosen"></div><br><br>';

				echo 'Name : <input type="text" name="rname" value="'.$roomname.'" readonly><br><br>
				Location : <input type="text" name="loc" value="'.$location.'" readonly><br><br>No of hours : <input type="number" name="hours" min="1" max="6"><br><br>Morning <input type="radio" name="timing" value="slota"><br><br>Afternoon <input type="radio" name="timing" value="slotb"><br><br>Evening <input type="radio" name="timing" value="slotc"><br><br>Night <input type="radio" name="timing" value="slotd">';

				/*$query = "select * from details where name= '$roomname' ";
				$result = mysqli_query($con,$query);
				$num = mysqli_num_rows($result);

				//echo $num;
				
				while($rows = mysqli_fetch_assoc($result))
				{
					echo '<p>'.$rows['name'].'<input type="radio" name="room" value="'.$rows['name'].'"></p>';
				}*/
			?>
        </div> 
        <div class="modal-footer">
          <button type="submit" class="button button-block">Done</button>
        </div>
        </form>
        </div>
      </div>
      
    </div>
  </div>


</body>
</html>