<?php //connection
require_once "dbconnect.php";
?>
<?php 
session_start();
$log = $_SESSION['login_user'];
$pay = $_SESSION['payment'];
$times = $_SESSION['time'];
$roomnum = $_SESSION['roomnum'];
$roomtype = $_SESSION['roomtype'];
$nam = $_SESSION['uname'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body
		{
			background-color: #23272b;
			font-family: Arial,Helvetica,sans-serif;	
		}

		.wrapper        /* Container */
		{
			background-color: #ffef;
			width: 500px;
			padding: 25px;
			margin: 25px auto 0;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
		}
		.wrapper h2{	/* for design Payment title*/
			background-color: #fcfcfc;
			color: #f33446;
			font-size: 24px;					
			padding: 10px;
			margin-bottom: 20px;
			text-align: center;
			border: 1px dotted #333;
		}
		h4
		{		/* for Account,DOB,Gender,Payment Details title*/			
			padding-bottom: 5px;
			color: #f33446;
		}
		.input-group /* Formatting input group*/
		{
			margin-bottom: 8px;
			width: 100%;
			position: relative;
			display: flex;
			flex-direction: row;
			padding: 5px 0;
		}
		.input-box
		{
			width: 100%;
			margin-right: 12px;
			position: relative;
		}
		.input-box:last-child/*Formatting space between DOB and Gender*/
		{
			margin-right:0;
		}
		.name
		{
		 padding: 14px 10px 14px 50px;
		 width: 100%;
		 background-color: #fcfcfc;
		 border: 1px solid #00000033;
		 outline: none;	
		 letter-spacing: 1px;
		 transition: 0.3s;
		 border-radius: 3px;
		 color: #333;
		}
		.name:focus,.dob:focus
		{
			box-shadow: 0 0 2px 1px #7ed32180;
			border: 1px solid #f33446;
		}
		.input-box .icon
		{
			width: 48px;
			display: flex;
			justify-content: center;
			align-items: center;
			position: absolute;
			top: 0px;
			left: 0px;
			bottom: 0px;
			color: #333;
			background-color: #f1f1f1;
			border-radius: 2px 0 0 2px;
			transition: 0.3s;
			font-size: 20px;
			pointer-events: none;
			border: 1px solid #00000033;
			border-right: none;
		}
		.name:focus + .icon
		{
			background-color: #f33446;
			color: #fff;
			border-right: 1px solid #f33446;
			border: none;
			transition: 1s;
		}
		.dob{
			width: 70px;
			padding: 14px;
			text-align: center;
			background-color: #fcfcfc;
			transition: 0.3s;
			outline: none;
			border: 1px solid #c0bfbf;
			border-radius: 3px;
		}
		.radio
		{
			display: none;
		}
		.input-box label
		{
			width: 50%;
			padding: 13px;
			background-color: #fcfcfc;
			display: inline-block;
			float: left;
			text-align: center;
			border: 1px solid #c0bfbf;
		}
		.input-box label:first-of-type
		{
			border-top-left-radius: 3px;
			border-bottom-left-radius: 3px;
			border-right: none;
		}
		.input-box label:last-of-type
		{
			border-top-right-radius: 3px;
			border-bottom-right-radius: 3px;
		}
		.radio:checked + label
		{
			background-color: #f33446;
			color: #fff;
			transition: 0.5s;
		}
		.input-box select{
			display: inline-block;
			width: 50%;
			padding: 12px;
			background-color: #fcfcfc;
			float: left;
			text-align: center;
			font-size: 16px;
			outline: none;
			border: 1px solid #c0bfbf;
			cursor: pointer;
			transition: all 0.2s ease;
		}
		.input-box select:focus{
			background-color: #f33446;
			color: #fff;
			text-align: center;
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
	</style>
</head>
<body>
	 <div class="wrapper">
	 	<h2 class="text-dark">Payment Form</h2>
	 	<h3>Amount Payable: <span style="color:#f44336;">&#8377;
	 	<?php 
	 		echo $pay;
	 	 ?></span></h3>
	 	<form action="payment.php" method="POST">
	 		<div class="input-group">
	 			<div class="input-box">
					 <h3>Please Use <span class="fa fa-credit-card" style="color:#f44336;">&nbsp;Master Card</span> or <span class="fa fa-cc-visa" style="color:#f44336;">&nbsp;Visa Card</span></h3>
					 
	 			</div>
	 		</div>
	 		<h4>Card Number</h4>
	 		<div class="input-group">
	 			<div class="input-box">
	 				<input type="tel" placeholder="CARD NUMBER" required name="num" class="name" id="cn"  pattern="^[5]{1}[0-9]{3}[\s][0-9]{4}[\s][0-9]{4}[\s][0-9]{4}$|^[4]{1}[0-9]{3}[\s][0-9]{4}[\s][0-9]{4}[\s][0-9]{4}$">
					<i class="fa fa-credit-card icon"></i>
	 			</div>
	 		</div>
	 		<div class="input-group">
	 			<div class="input-box">
	 				<input type="tel" name="cvv" placeholder="CARD CVV" required class="name" pattern="^[1-9]{3}$">
	 				<i class="fa fa-user icon"></i>
	 			</div>
	 		</div>
	 		<h4>Expiry Date</h4>
	 		<div class="input-group">
	 				<div class="input-box">
						<select>
							<option>JAN</option>
                            <option>FEB</option>
                            <option>MAR</option>
                            <option>APR</option>
                            <option>MAY</option>
                            <option>JUNE</option>
                            <option>JULY</option>
                            <option>AUG</option>
                            <option>SEPT</option>
                            <option>OCT</option>
                            <option>NOV</option>
                            <option>DEC</option>
						</select>
						<select>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
							<option>2026</option>
							<option>2027</option>
							<option>2028</option>
							<option>2029</option>
							<option>2030</option>
						</select>
					</div>
	 			</div>
	 		<h4>Card Holder Name</h4>
	 		<div class="input-group">
	 			<div class="input-box">
	 				<input type="text" placeholder="ENTER YOUR NAME" required class="name"  id="nm" pattern="^[A-Za-z][\s]+{3,30}$" onkeyup="chk_nm()">
	 				<i class="fa fa-user icon"></i>
	 			</div>
	 		</div>
	 		<div class="input-group">
	 			<div class="input-box">
	 				<button type="submit" >PAY NOW</button>
	 			</div>
	 		</div>
	 	</form>
	 </div>
	 <?php 

	 if(isset($_POST['num']) && isset($_POST['cvv']))
	 {
	 	$que ="SELECT roomno FROM rooms where roomtype='$roomtype' and roomstatus='Free'";
		$res=$conn->query($que);
		if(!$res) die($conn->error);
		$recs=$res->num_rows;
		$r = array();
		$rm1='';
		$rm2='';
		$rm3='';
		if($roomnum>$recs)
		{
			echo '<script>alert("No that many rooms available. Sorry!")</script>'; 
		}
		else
		{
			$rms='';
			for( $i=0;$i<$roomnum;++$i)
			{ 
			    $res->data_seek($i);
			    $recrd=$res->fetch_array(MYSQLI_ASSOC);
			   	
			   	$rn=$recrd['roomno'];
			   	$rms.=$rn." ";
			   	$quer ="update rooms set roomstatus='Reserved' where roomno='$rn'";
				$resu=$conn->query($quer);
				if(!$resu) die($conn->error);
			}
			// $rm1=$r[0];
			// $rm2=$r[1];
			// $rm3=$r[2];
			// echo $rm1;
			// echo $rm2;
			// echo $rm3;

			//$quer ="update rooms set roomstatus='Reserved' where roomno=$rm1 or roomno=$rm2 or roomno=$rm3";
			//$resu=$conn->query($quer);
			//if(!$resu) die($conn->error);

			$regid=rand(10000,99999);
			$_SESSION['regid']= $regid;	
			$_SESSION['roomss']= $rms;	
			$queri ="update newreg set rm1='$rms',regid='$regid' where timest='$times'";
			$resul=$conn->query($queri);
			if(!$resul) die($conn->error);
			echo "<script> location.href='booksuccessfull.php'; </script>";


		}
}

	  ?>
	 <script>
			function chk_nm()
			{
				var x = document.getElementById("nm");
  				x.value = x.value.toUpperCase();
			}

	 </script>
</body>
</html>