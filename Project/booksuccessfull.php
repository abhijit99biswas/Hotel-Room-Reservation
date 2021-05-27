<?php 
session_start();
$pay = $_SESSION['payment'];
$reg = $_SESSION['regid'];	
$roomtype = $_SESSION['roomtype'];
$nam = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking Successful</title>
	<link rel = "icon" href = "Images/logoicon.png" 
        type = "image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/2f35579f7c.js" crossorigin="anonymous"></script>
        <style>
        	*{
        		margin: 0;
        		padding: 0;
        	}
			.main{
				width: 100%;
				height: 500px;

			}
			.output{
				width: 50%;
				padding:50px;
				background-color: rgba(255,255,255,0.3);
				margin:200px auto -200px auto;
				text-align: center;
				color: white;
			}
			button{
				padding: 10px;
				font-size: 20px;
				color: #f44336;
			}
        </style>
</head>
<body class="bg-dark">
	<div class="main">
		<div class="output">
			<h1>Your Booking Id</h1>
			<h2><?php echo $reg ?></h2>
			<h3>Congratulations <?php echo $nam ?></h3>
			<h3>You have booked <?php echo $roomtype ?> room</h3>
			<h3>You have paid &#8377;<?php echo $pay ?></h3>
			<p>Please print this number, and carry the number and Aadhaar card at the time of check in</p>
			<form action="feedback.php">
				<button type="submit" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
			</form>
			
		</div>
	</div>
</body>
</html>