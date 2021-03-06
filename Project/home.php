
<?php 
require_once "dbconnect.php";
session_start();
$log=$_SESSION['login_user'];
echo $log;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://kit.fontawesome.com/2f35579f7c.js" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>Grand Hotel</title>
	<link rel = "icon" href = "Images/logoicon.png" 
        type = "image/x-icon">
</head>
<body class="bg-dark">
	<nav class="navbar  navbar-expand-md navbar-dark bg-dark">
		<a href="#" class="navbar-brand">
			<img src="Images/grandhotellogowhite.png" alt="brandlogo" style="width: 120px;">
		</a>
		<button class="navbar-toggler" style="outline: none;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		 <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#home">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#search">Search Rooms</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#chooseroom">Choose Rooms</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#gallery">Gallery</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#aboutus">About Us</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#contactus">Contact Us</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="logout.php">Log Out</a>
		    </li>
		 </ul>
		</div>
	</nav>
	<div class="row " id="home">
		<div class="col-md-12">
			<img src="Images/hotelroom3atithi.jpg" alt="hotelimage" style="width: 100%">
		</div>
	</div>
	<div class="container-fluid searchroom" id="search">
		<div class="heads">Search Rooms</div>
		<hr>
		<div class="container-fluid bgeffect">
			<p>Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</p>
			<form action="\IWP Practice\Project\showroom.php" method="post">
				<div class="searchcontainer">
					<label><i class="fa fa-calendar-o"></i> Check In</label>
      				<input type="date" id="datefrom" required="" onblur ="checktodaydate()">
      				<label ><i class="fa fa-calendar-o"></i> Check Out</label>
      				<input type="date" id="dateto" required="" onblur ="checkdate()">
      				
      				<label ><i class="fa fa-male"></i> Number Of Person</label>
      				<input type="number" id="person" value="1" onblur ="checkperson()">
      			
      				<button class="btn" type="submit"> <i class="fa fa-search"></i> Search</button>
				</div>
			</form>
		</div>
		<script>
		function checktodaydate()
		{
			var todate=document.getElementById("dateto").value;
			var fromdate=document.getElementById("datefrom").value;
			var frmdate=new Date(fromdate);
			if(new Date(frmdate).getTime() <= new Date().getTime())
			{
				alert("Shuld no Today's Date");
			}
		}
		function checkdate()
		{
			var todate=document.getElementById("dateto").value;
			var fromdate=document.getElementById("datefrom").value;
			var frmdate=new Date(fromdate);
			
			if(todate<=fromdate)
			{
				alert("Greater Than Check In Date");
			}
		}
		function checkperson()
		{
			var personnum = document.getElementById("person").value;
			if (personnum<1) 
			{
				alert("Minimum One Person Needed");
			}
		}
	</script>
		<br>
		<br>
		<br>
		<hr>
	</div>
	<div class="container-fluid " id="chooseroom">
		<div class="heads">Choose Rooms</div>
		<hr>
		<div class="row">
		<div class="col-sm-4">
			<div class="card text-mycolor" style="width:100%">
			  <img class="card-img-top" src="Images/hotelroom4.jpg" alt="Card image">
			  <div class="card-body"> 
			    <h4 class="card-title">Single Room</h4>
			    <p class="card-text" style="font-size: 14px;">&#8377;1299/24Hr</p>
			    <p style="font-size: 14px;">Single Bed</p>
			    <p ><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
			    <a href="newreg.php" class="btn mybtn">Book Now</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-mycolor" style="width:100%">
			  <img class="card-img-top" src="Images/hotelroom6.jpg" alt="Card image">
			  <div class="card-body">
			    <h4 class="card-title">Double Room</h4>
			    <p class="card-text" style="font-size: 14px;">&#8377;1999/24Hr</p>
				<p style="font-size: 14px;">Double Bed</p>
			    <p ><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fas fa-dumbbell"></i></p>
			    <a href="newreg.php" class="btn mybtn">Book Now</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-mycolor" style="width:100%">
			  <img class="card-img-top" src="Images/hotelroom7.jpg" alt="Card image">
			  <div class="card-body">
			    <h4 class="card-title">Suite Room</h4>
			    <p class="card-text" style="font-size: 14px;">&#8377;2999/24Hr</p>
			    <p style="font-size: 14px;">1 Single &amp; 1 Double Bed</p>
				 <p ><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i> <i class="fas fa-dumbbell"></i></p>
			    <a href="newreg.php" class="btn mybtn">Book Now</a>
			  </div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<hr>
	</div>
	<div class="container-fluid" id="gallery">
		<div class="heads">Gallery</div>
		<hr>
		<div class="row">
			<div class="col-md-3">
				
			</div><div class="col-md-8">
				<img src="Images/hotelbanquet.jpg" alt="banquet" class="imagecls1">
			</div>
			<div class="col-md-3">
				<img src="Images/hotelpool.jpg" alt="pool" class="imagecls">
			</div>
			<div class="col-md-3">
				<img src="Images/hotelgym.jpg" alt="gym" class="imagecls">
			</div>
			<div class="col-md-3">
				<img src="Images/hotelresturant.jpg" alt="resturant" class="imagecls">
			</div>
			<div class="col-md-3">
				<img src="Images/hotelbar.jpg" alt="bar" class="imagecls">
			</div>
		</div>
	<hr>
	</div>
	<div class="container-fluid" id="aboutus">
		<div class="heads">About Us</div>
		<hr>
		<img src="Images/hotelview.jpg" alt="Hotel Room" style="width: 50%;" class="float-left p-3 rounded" id="1stimage">
	  <p class="text-white bg-dark text-justify p-3">Our hotel is one of a kind. It is truely amazing.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
	  <p  class="text-white">We accept: <i class="fa fa-credit-card fa-2x"></i> <i class="fa fa-cc-mastercard fa-2x"></i> <i class="fab fa-cc-visa fa-2x"></i> <i class="fa fa-cc-paypal fa-2x"></i> <i class="fab fa-cc-amazon-pay fa-2x"></i> <i class="fab fa-google-pay fa-2x"></i></p>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	</div>
	<div class="container-fluid p3 joinus">
	  	<h2>Register Your Complaint Here</h2>
	  	<p>Don't hasitate to tell us your problem</p>
	  	<form action="home.php" method="POST">
	  		<label for="newsemail"><i class="far fa-envelope"></i> Email ID</label>
	  		<input type="email" name="qemail" required>
	  		<label for=""><i class="fas fa-home"></i> Room Number</label>
	  		<input type="text" name="qroomno" required maxlength="4" minlength="3" pattern="[1-3]{1}[0]{1}[1-5]{1}">
	  		<label for=""><i class="far fa-clipboard"></i> Complaint</label>
	  		<textarea name="qquery"  rows="5" required></textarea>
	  		<input type="submit" value="Send">
	  	</form>
	  	<?php 
	  		if(isset($_POST['qemail']) && isset($_POST['qroomno']) && isset($_POST['qquery']))
	  		{
	  			$qemail=get_post($conn,'qemail');
				$qroomno=get_post($conn,'qroomno');
				$qquery=get_post($conn,'qquery');
				mail($qemail, 'Grand Hotel Complaint Zone' , 'Thanks For Sending your Complaint/Query, We are trying to solve your problem with in 1Hr. Thanks for being with us!','From: abhijitbiswas1999@gmail.com');
					$query="insert into query values"."('$qemail','$qroomno','$qquery')";
					$result=$conn->query($query);
					if (!$result) echo"failed".$conn->error."<br><br>";
			
			}

	  	?>
		<?php 
			 function get_post($conn,$var)
			 {
			     return $conn->real_escape_string($_POST[$var]);
			 }
		?>
	</div>
	<br>
	<br>
	<div class="container-fluid text-white" id="contactus">
		<div class="heads">Contact Us</div>
		<hr>
   		<p>If you have any questions, do not hesitate to ask them.</p>
   		<div class="row text-center">
   			<div class="col-md-4"><i class="fa fa-map-marker " style="width:30px"></i> Chennai, India</div>
   			<div class="col-md-4"><i class="fa fa-phone " style="width:30px"></i> Phone: +91 9123654475</div>
   			<div class="col-md-4"><i class="fa fa-envelope " style="width:30px"> </i> Email: grandhoteldesk@gh.com</div>
   		</div>
		<br>
    	<br>
		<div id="map-container-google-1" class=" container z-depth-1-half map-container" >
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2222716373262!2d80.21325391443467!3d13.085094990781514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526426ad4f7e81%3A0x3300c1335d316109!2sGrand%20Hotel!5e0!3m2!1sen!2sin!4v1595450604953!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	</div>
	<hr>
	<footer class="text-center text-white bg-dark" >
  <h3>Find Us On</h3>
  <div class="fa-2x bg-dark ">
    <i class="fa fa-facebook-official myhover "></i>
    <i class="fa fa-instagram myhover"></i>
    <i class="fa fa-snapchat myhover"></i>
    <i class="fa fa-pinterest-p myhover"></i>
    <i class="fa fa-twitter myhover"></i>
    <i class="fa fa-linkedin myhover"></i>

  </div>
  <p>All rights &copy; reserved by Grand Hotel</p>
</body>
</html>