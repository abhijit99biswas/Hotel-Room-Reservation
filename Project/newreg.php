<?php 
session_start();
$log=$_SESSION['login_user'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK YOUR ROOMS</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="newreg.js"></script>
    <link src="newreg.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style >
        @import "//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css";
 .section {
	position: relative;
	height: 100vh;
}

.section .section-center {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family:  'Raleway', sans-serif;
}

.booking-form {
	position: relative;
	max-width: 642px;
	width: 100%;
	margin: auto;
	padding: 40px;
	overflow: hidden;
	background-size: cover;
	border-radius: 5px;
	z-index: 20;
}

.booking-form::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	background: rgba(0, 0, 0, 0.7);
	z-index: -1;
}

.booking-form .form-header {
	text-align: center;
	position: relative;
	margin-bottom: 30px;

}

.booking-form .form-header h1 {
	font-weight: 700;
	text-transform: capitalize;
	font-size: 42px;
	margin: 0px auto;
	color: #fff;
    text-align: center;
    position: absolute;
    z-index: 100;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 30px;
}

.booking-form .form-control {
	background-color: rgba(255, 255, 255, 0.2);
	height: 60px;
	padding: 0px 25px;
	border: none;
	border-radius: 0px;
	color: #fff;
	-webkit-box-shadow: 0px 0px 0px 2px transparent;
	box-shadow: 0px 0px 0px 2px transparent;
	-webkit-transition: 0.2s;
	transition: 0.2s;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(255, 255, 255, 0.5);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(255, 255, 255, 0.5);
}

.booking-form .form-control::placeholder {
	color: rgba(255, 255, 255, 0.5);
    text-align: justify;
}

.booking-form .form-control:focus {
	-webkit-box-shadow: 0px 0px 0px 2px #f44336;
	box-shadow: 0px 0px 0px 2px #f44336;
}


.booking-form input[type="date"].form-control {
	padding-top: 16px;
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(255, 255, 255, 0.5);
}

.booking-form input[type="date"].form-control+.form-label {
	opacity: 1;
	top: 10px;
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control:invalid {
	color: rgba(255, 255, 255, 0.5);
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 15px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(255, 255, 255, 0.5);
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form select.form-control option {
	color: #f44336;
}
.booking-form select.form-control option:hover
{
	color: #fff;

	
}

.booking-form .form-label {
	position: absolute;
	top: -10px;
	left: 25px;
	opacity: 0;
	color: #f44336;
	font-size: 11px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1.3px;
	height: 15px;
	line-height: 15px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.booking-form .form-group.input-not-empty .form-control {
	padding-top: 16px;
}

.booking-form .form-group.input-not-empty .form-label {
	opacity: 1;
	top: 10px;

}
.booking-form .custom-control 
{
    color: #fff;
    font-size: 18px;
}

.booking-form .submit-btn {
	color:#fff;
	background-color: rgba(255, 255, 255, 0.3);
	font-weight: 700;
	height: 60px;
	padding: 10px 30px;
	width: 100%;
	border-radius: 0px;
	border: 2px solid  #f44336 ;
	text-transform: uppercase;
	font-size: 16px;
	letter-spacing: 1.3px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
   
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
	opacity: 0.9;
    color: white;
    background-color: #f44336;
}
        body {
                background:url(Images/e.jpg) no-repeat;
                padding-top:100px;
                background-size:cover;
            }
    </style>
    
</head>
<body  >
    <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            
                            <div class="form-header"> 
                                <!--<br><br><br>--><br><br><br><br>
                                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book your Rooms</h1>

                                <br>
                    
                                <hr>
                            </div>
                            <form action="newreg.php"  method="POST" name="Chk_form">
                                 <div class="form-group">
                                    <input class="form-control" type="text" id="name" name="name" pattern="^[a-zA-Z][\s]+{3,30}$" placeholder="Enter your name" required>
                                    <span class="form-label">Name</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email"  name="email" type="email" placeholder="Enter your Email" required>
                                            <span class="form-label">Email</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="tel"  id="mob" name="mob" pattern="^[6-9][0-9]{9}$" placeholder="Enter you Phone" required>
                                            <span class="form-label">Phone</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="address" name="address"  placeholder="Enter you Address here" required></textarea>
                                    <span class="form-label">Address</span>
                                </div>
                                <div class="form-group">
                                    <select id="country" name="country" class="form-control" required>
                                        <option value="nil" selected hidden>Enter the Country</option>
                                        <option value="india">India</option>
                                        <option value="srilanka">Srilanka</option>
                                        <option value="nepal">Nepal</option>
                                        <option value="others">Others</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Country</span>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="proof" name="proof" required>
                                        <option value="nil" selected hidden>Enter the Proof</option>
                                        <option value="aadhaar">Aadhaar Card</option>
                                        <option value="passport">Passport</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">PROOF</span>
                                </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text"  name="prf1" id="prf1" placeholder="Enter the Proof no:"  onblur="chk_proof()" required> 
                                        <span class="form-label">aadhaar</span>
                                    </div>
                                
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" id="checkin" name="checkin"  onblur="chk_in()" required>
                                            <span class="form-label">Check In</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" id="checkout" name="checkout" onblur="chk_out()" required>
                                            <span class="form-label">Check out</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" id="room" name="room" required>
                                                <option value="nil" selected hidden>No of rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Rooms</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" id="rtype" name="rtype" required>
                                                <option value="nil" selected hidden>Select type of Room</option>
                                                <option value="Single">Single Room</option>
                                                <option value="Double">Double Room</option>
                                                <option value="Suite">Suite Room</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Rooms</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" id="adults" name="adults" required>
                                                <option value="nil" selected hidden>No of adults</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Adults</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="children" id="children"required>
                                                <option value="nil" selected hidden>No of children</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Children</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn btn-lg" onclick="chk_nil()">Book & Pay Now</button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
    </body>
</html>
<?php //connection
require_once "dbconnect.php";


?>
<?php  //global
function get_post($conn,$var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>
<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mob'])&& isset($_POST['address'])
&& isset($_POST['country'])&& isset($_POST['proof'])&& isset($_POST['prf1'])&& isset($_POST['checkin'])
&& isset($_POST['checkout'])&& isset($_POST['room'])&& isset($_POST['rtype'])&& isset($_POST['adults'])
&& isset($_POST['children']))
{
$name=get_post($conn,'name');
$email=get_post($conn,'email');
$mob=get_post($conn,'mob');
$address=get_post($conn,'address');
$country=get_post($conn,'country');
$proof=get_post($conn,'proof');
$prf1=get_post($conn,'prf1');
$checkin=get_post($conn,'checkin');
$checkout=get_post($conn,'checkout');
$room=get_post($conn,'room');
$rtype=get_post($conn,'rtype');
$adults=get_post($conn,'adults');
$children=get_post($conn,'children');

if($rtype=="single")
{
    if($room=="1")
    {
        $rend=1299;
    }
    else if($room=="2")
    {
        $rend=1299*2;
    }
    else
    {
        $rend=1299*3;
    }
}
else if($rtype=="double")
{
    if($room=="1")
    {
        $rend=1999;
    }
    else if($room=="2")
    {
        $rend=1999*2;
    }
    else
    {
        $rend=1999*3;
    }
 
}
else
{
    if($room=="1")
    {
        $rend=2999;
    }
    else if($room=="2")
    {
        $rend=2999*2;
    }
    else
    {
        $rend=2999*3;
    }
    
}
//echo $rend;
date_default_timezone_set('Asia/Kolkata');
$times = date( 'h:i:s', time () );

$query="insert into newreg values"."('$log','$name','$email','$mob','$address','$country','$proof','$prf1','$checkin','$checkout','$room','$rtype','$adults','$children','$rend','','$times','')";

$result=$conn->query($query);
if (!$result) echo"failed".$conn->error."<br><br>";
$_SESSION['payment']= $rend;
$_SESSION['chkindate']= $chechin;
$_SESSION['chkoutdate']= $checkout;
$_SESSION['roomnum']= $room;
$_SESSION['roomtype']= $rtype;
$_SESSION['time']= $times;
$_SESSION['uname']= $name;
echo "<script> location.href='payment.php'; </script>";

}
?>
