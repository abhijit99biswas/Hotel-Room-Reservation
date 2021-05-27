<?php
	require_once "dbconnect.php"; //student table
	if(isset($_POST['roomno']) && isset($_POST['roomtype']) && isset($_POST['roomstatus']))
	{
	$roomno=get_post($conn,'roomno');
	$roomtype=get_post($conn,'roomtype');
	$roomstatus=get_post($conn,'roomstatus');
	$query="insert into rooms values"."('$roomno','$roomtype','$roomstatus')";
	$result=$conn->query($query);
	if (!$result) echo"failed".$conn->error."<br><br>";
	}
?>
<?php
	require_once "dbconnect.php"; //student table
	if(isset($_POST['droomno']))
	{
	$roomno=get_post($conn,'droomno');
	$query="delete from rooms where roomno='$roomno'";
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://kit.fontawesome.com/2f35579f7c.js" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>Grand Hotel</title>
	<link rel = "icon" href = "Images/logoicon.png" 
        type = "image/x-icon">
	<style>
*{
	padding: 0;
	margin: 0;
}
		.container
		{
			overflow: hidden;
			background: #FFCCFF;
			opacity: 0.8;
			padding: 10px;
		}
		.tab
		{
			float: left;
		}
		.tab-2
		{
			margin-left: 50px;
		}
		.tab-2 input
		{
			display: block;
			margin-bottom: 10px;
		}
		
		button
		{
			width: 100%;
			background: transparent;
			border: 2px solid #f33446;
			border-radius: none;
			background: #fff;
			color: #f33446;
			padding: 15px;
			font-size: 16px;
			transition: all 0.35s ease;
		}
		button:hover
		{
			cursor: pointer;
			color: white;
			background: #f44336;
		}
	
		.divmg
		{
			background-image: url("29.jpg");
			width: 100%;
			padding: 20px auto;
			background-repeat: no-repeat;
		}
		.back{
			   width: 100%;
			   position: absolute;
		}
		.Containers
		{
			background-color: #EFF0F0;
			opacity: 0.8;
			width: 60%;
			padding: 25px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
			margin: 0 auto;
		}
		.divmgs
		{
			width: 100%;
			padding: 60px;
			background-repeat: no-repeat;
		}
		label,input
		{
			display: block;
			width: 100%;
			font-family: Georgia;
			font-size: 20px;
		}
		.container-fluid
		{
		    padding-left: 0;
		    padding-right: 0;
		}
		.my-class
		{
		    background:#F5F5DC;
		}
		hr
		{
			background-color: black;
			height:1px;
		}
		h1
		{
			color: #997300;
			text-align: center;
		}
	</style>
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
		      <a class="nav-link" href="home.php">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="Admin.php">Room operations</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="service.php">Management</a>
		    </li>
		     <li class="nav-item">
		      <a class="nav-link" href="logout.php">Log Out</a>
		    </li>
		 </ul>
		</div>
	</nav>
	<div class="container-fluid my-class bg-dark">
		<div class="divmgs">
				<div class="Containers">
					<h1>Room Entry</h1>
						<hr>
						<form action="Admin.php" method="POST"><br>
						    <label for="name">Roomno</label>
						    <input type="text" name="roomno" id="roomno" placeholder="Enter room no" required>
						    <label for="name">Room Type</label>
						    <input type="text" name="roomtype" id="roomtype" placeholder="Enter room type" required><br>
						    <label for="name">Room Status</label>
						    <input type="text" name="roomstatus" id="roomstatus" placeholder="Enter status" required><br>
						    <button class="button" type="submit">Submit</button><br><br>
						</form><br>
							<?php
								$que ="SELECT * FROM rooms";
								$res=$conn->query($que);
								if(!$res) die($conn->error);
								$recs=$res->num_rows;
								echo <<<_end
								<table class="table table-primary text-center table-striped table-hover text-dark">
								<thead>
								<th>Room Number</th>
								<th>Room Type</th>
								<th>Status</th>
								</thead>
								<tbody>
								_end;
								for( $i=0;$i<$recs;++$i)
								{ 
								    $res->data_seek($i);
								    $recrd=$res->fetch_array(MYSQLI_ASSOC);
								    echo "<tr>";
								    echo "<td>".$recrd['roomno']."</td>";
								    echo "<td>".$recrd['roomtype']."</td>";
								    echo "<td>".$recrd['roomstatus']."</td></tr>";
								}
								echo "</tbody></table>";
							?>
				</div>
		</div>
		<br><br>
    	<div class="Containers">
				<h1>Manage Room</h1>
				<hr>
				<form action="Admin.php" method="POST"><br>
					    <label for="name">Roomno</label>
					    <input type="text" name="droomno" id="roomno" placeholder="Enter room no" required><br>
					    <button class="button" type="submit">Submit</button><br><br>
				</form><br>
					<?php
						$que ="SELECT * FROM rooms";
						$res=$conn->query($que);
						if(!$res) die($conn->error);
						$recs=$res->num_rows;
						echo <<<_end
						<table class="table table-primary text-center table-striped table-hover text-dark">
						<thead>
						<th>Room Number</th>
						<th>Room Type</th>
						<th>Status</th>
						</thead>
						</tbody>
						_end;
						for( $i=0;$i<$recs;++$i)
						{ 
						    $res->data_seek($i);
						    $recrd=$res->fetch_array(MYSQLI_ASSOC);
						    echo "<tr>";
						    echo "<td>".$recrd['roomno']."</td>";
						    echo "<td>".$recrd['roomtype']."</td>";
						    echo "<td>".$recrd['roomstatus']."</td></tr>";
						}
						echo "</tbody></table>";
					?>
			</div>
	</div>
    <br><br>
</body>
</html>