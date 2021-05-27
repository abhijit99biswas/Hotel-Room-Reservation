<?php 
require_once "dbconnect.php";

if(isset($_POST['username']) && isset($_POST['password']))
      {
    	$username=get_post($conn,'username');
		$password=get_post($conn,'password');
		$query="select * from loginform where id='$username' and password='$password'";
		$result=$conn->query($query);
		$recs=$result->num_rows;
		if($recs==1)
		{
			echo '<script>alert("Welcome to Grand Hotel")</script>'; 
			session_start();
			$_SESSION['login_user']= $username;
			if ($username=='admin' && $password=='admin') {
				header("Location: Admin.php");
			}
			else
			{

				header("Location: home.php");
			}
		}
		else {
			echo '<script>alert("You Have entered Wrong ID or PASSWORD")</script>'; 
		} 
	  }

if(isset($_POST['rusername']) && isset($_POST['remail']) && isset($_POST['rpassword']))
{
    	$rusername=get_post($conn,'rusername');
    	$remail=get_post($conn,'remail');
		$rpassword=get_post($conn,'rpassword');
		$query = "insert into loginform values"."('$rusername','$remail','$rpassword')";
		$result = $conn->query($query);
		if(!$result)
		{

			echo "Insert failed: $query<br>".$conn->error."<br><br>";
		} 
		else
		{
			session_start();
			$_SESSION['login_user']= $rusername;
			header("Location: home.php");

		}
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
	<title>Login</title>
	<link rel = "icon" href = "Images/logoicon.png" 
        type = "image/x-icon">
	<script src="https://kit.fontawesome.com/2f35579f7c.js" crossorigin="anonymous"></script>
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		.main
		{
			height: 100%;
			width: 100%;
			background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.3)),url(Images/f.jpg);
			background-position: center;
			background-size: cover;
			position: absolute;
			font-style: courier;
		}
		.heading{
			position: absolute;
			width: 100%;
			background-color: rgba(0,0,0,0.4);
			color: white;
			text-align: center;
			font-size: 20px;
			font-family: sans-serif;			


		}
		.heading img{
			width: 10%;
			margin: 0 auto;
			padding: 4px 10px;
			display: inline;
		}
		.container
		{
		
			width: 380px;
			height: 550px;
			position: relative;
			margin: 6% auto;
			background: #fff;
			padding: 5px;
			opacity: 0.7;
			overflow: hidden;
			box-shadow: 5px 5px 30px black;
		}
		.button-box
		{
			width: 220px;
			margin: 35px auto;
			position: relative;
			box-shadow: 0 0 5px #f44336;
			border-radius: none;
			border: 2px solid #f44336;

		}
		.toggle-btn
		{
			padding: 10px 30px;
			cursor: pointer;
			background: transparent;
			border: 0;
			outline: none;
			position: relative;
			font-weight: bold;
		}
		#btn
		{
			top: 0;
			left: 0;
			position: absolute;
			width: 110px;
			height: 100%;
			background-color: #f44336;
			border-radius: none;
			transition: .5s;
		}
		.social-icons
		{
			margin: 30px auto;
			text-align: center;
			color: #f44336;
			cursor: pointer;
		}
		
		.input-group
		{
			top: 180px;
			position: absolute;
			width: 280px;
			transition: .5s;
		}
		.input-field
		{
			width: 100%;
			padding: 10px 0;
			margin: 10px 0;
			border-left: 0;
			border-top: 0;
			border-right: 0;
			border-bottom: 1px solid #f44336;
			outline: none;
			background: transparent;
			color: #228b22;
			font-size: 15px;
			font-weight: bold;
		}
		.submit-btn
		{ 
			width: 100%;
			padding: 10px 30px;
			cursor: pointer;
			color: white;
			display: block;
			margin: auto;
			background-color: #f44336;
			border: 0;
			border-radius:none;
			font-size: 18px;
			outline: none;
		}
		.submit-btn:hover{
			background-color: #f21c0d;
		}
		.check-box
		{
			margin: 20px 10px 30px 0;
			cursor:pointer;
		}
		span
		{
			color: #777;
			font-size: 12px;
			bottom: 68px;
			position: absolute;
		}
		#login{
			left: 50px;
		}
		#register
		{
			left: 500px;
		}
		.input-group span{
			font-size: 15px;
			color: #f44336;
		}
		.myhover:hover{
	transform: scale(1.5);
	color: #f44336;
	transition: .5s;
	cursor: pointer;

}
.myhover{
	transition: .5s;
	margin: 0 8px;
}
	</style>
</head>
<body>
	<div class = "main">

		<div class="heading">
			<img src="Images/grandhotellogowhite.png" alt="">

		</div>
		<div class = "container">
			<div class="button-box">
				<div id='btn'></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
		<div class="social-icons ">
			<a href="https://www.facebook.com
"><i class="fab fa-facebook fa-2x myhover"></i></a>
			<a href="https://myaccount.google.com/"><i class="fab fa-google-plus fa-2x myhover"></i></a>
		</div>
		<form id="login" class="input-group" action="index.php" method="POST">
			<input type="text" name="username" class="input-field" placeholder="User Id" required>
			<input type="Password" name="password" class="input-field" placeholder="Enter Password" required>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<button type="submit" class="submit-btn">Log In</button>
		</form>
		<form id="register" class="input-group" action="index.php" method="POST" name="myform">
			<input type="text" name="rusername" class="input-field" placeholder="User Id" required>
			<input type="email" name="remail" class="input-field" placeholder="Email id" required>
			<input type="Password" name="rpassword" class="input-field" placeholder="Enter Password" required>
			<input type="Password" minlength="5" maxlength="20" name="cpass" class="input-field" placeholder="Re-enter Password" required>
			<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
			<button type="submit" class="submit-btn" onclick="chkcpass()">Register</button>
		</form>
		</div>
	</div>
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register()
		{
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		function login()
		{
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
		}
		var normalpass="";
		function chkcpass()
		{
			var normalpass=document.forms["myform"]["password"].value;;
			var confirmpass = document.forms["myform"]["cpass"].value;
			if(normalpass!=confirmpass)
			{
				alert("Password not match");
			}
		}

	</script>
</body>
</html>