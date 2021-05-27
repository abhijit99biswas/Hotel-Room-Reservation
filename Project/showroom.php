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
	<title></title>
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
        <style>
        	.miniheading{
        		color: white;
        		font-size: 30px;
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
		      <a class="nav-link" href="home.php">Back</a>
		    </li>
		 </ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="heads">Availabe Rooms</div>
		<hr>
		<div class="container">
			
		<h1 class="miniheading">Single Bed Rooms</h1>
		<br>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-primary text-center table-striped table-hover">
					<thead>
						<td>Room Number</td>
						<td>Status</td>
					</thead>
					<?php
					$que ="SELECT * FROM rooms where roomtype='Single' and roomstatus='Free'";
					$res=$conn->query($que);
					if(!$res) die($conn->error);
					$recs=$res->num_rows;
					echo <<<_end
					_end;
					for( $i=0;$i<$recs;++$i)
					{ 
					    $res->data_seek($i);
					    $recrd=$res->fetch_array(MYSQLI_ASSOC);
					    echo "<tr>";
					    echo "<td>".$recrd['roomno']."</td>";
					    echo "<td>".$recrd['roomstatus']."</td></tr>";
					}
					?>
				</table>
				<br>
			</div>
			<br> <br>
			
			<div class="col-md-12">
				<h1 class="miniheading">Double Bed Rooms</h1>
			<br>
				<table class="table table-primary text-center table-striped table-hover">
					<thead>
						<td>Room Number</td>
						<td>Status</td>
					</thead>
					<?php
					$que ="SELECT * FROM rooms where roomtype='Double' and roomstatus='Free'";
					$res=$conn->query($que);
					if(!$res) die($conn->error);
					$recs=$res->num_rows;
					echo <<<_end
					_end;
					for( $i=0;$i<$recs;++$i)
					{ 
					    $res->data_seek($i);
					    $recrd=$res->fetch_array(MYSQLI_ASSOC);
					    echo "<tr>";
					    echo "<td>".$recrd['roomno']."</td>";
					    echo "<td>".$recrd['roomstatus']."</td></tr>";
					}
					?>
				</table>
				<br>
			</div>
			
			<div class="col-md-12">
				<h1 class="miniheading">Suite Bed Rooms</h1>
		<br>
				<table class="table table-primary text-center table-striped table-hover">
					<thead>
						<td>Room Number</td>
						<td>Status</td>
					</thead>
					<?php
					$que ="SELECT * FROM rooms where roomtype='Suite' and roomstatus='Free'";
					$res=$conn->query($que);
					if(!$res) die($conn->error);
					$recs=$res->num_rows;
					echo <<<_end
					_end;
					for( $i=0;$i<$recs;++$i)
					{ 
					    $res->data_seek($i);
					    $recrd=$res->fetch_array(MYSQLI_ASSOC);
					    echo "<tr>";
					    echo "<td>".$recrd['roomno']."</td>";
					    echo "<td>".$recrd['roomstatus']."</td></tr>";
					}
					?>
				</table>
			</div>
		</div>
		</div>
	</div>
</body>
</html>