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
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['feedback']))
{
$name=get_post($conn,'name');
$email=get_post($conn,'email');
$feedback=get_post($conn,'feedback');
$query="insert into feedback values"."('$name','$email','$feedback')";
$result=$conn->query($query);
if (!$result) echo"failed".$conn->error."<br><br>";
echo "<script> location.href='home.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE US YOUR FEEDBACK</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style >

.container legend
 {
	margin-top: 55px;
	margin-left: auto;
	margin-right: auto;
	color: #355c7d;
}
*{
  font-family: Arial, Helvetica, sans-serif;
}
body
{ 
  font-family: Arial, Helvetica, sans-serif;
	background-color: #2a9c9d;
  font-size: 20px;
}
.bg1 {
  background-color: #fecea8;
  
}
label
{
  color:#f44336;
}
form
{ 
  padding-left: 20PX;
  margin:0 auto;
}
.form-horizontal {
	width: 120%;
	margin: 0 auto 0 auto;
	padding: 10px 40px;
}
.bg1 .submit-btn {
	color:#f44336;
	background-color: rgba(255, 255, 255, 0.3);
	font-weight: 700;
	height: 60px;
	padding: 10px 40px;
	width: 80.5%;
	border-radius: 0px;
	border: 2px solid  #f44336 ;
	text-transform: uppercase;
	font-size: 30px;
	letter-spacing: 1.3px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
  margin-left: 17.5px;
  font-family: Helvetica, sans-serif;
   
}

.bg1 .submit-btn:hover,
.bg1 .submit-btn:focus {
	opacity: 0.9;
    color: white;
    background-color: #f44336;
}
	
</style>
</head>
<body>
  <div class="container bg1">
    <legend class="h1 text-center bg1"><br>FEEDBACK FORM</legend>
        <div class="container wrapper">
          <form class="form-horizontal" role="form" method="post" action="">
            <!--name-->
            <div class="form-group"><br>
              <label class="control-label col-sm-2" for="name">NAME</label>
              <div class="col-sm-10 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input name="name" type="text" class="form-control" id="name"  required></span>
                </div>
              </div>
            </div>
            <!--Email Address-->
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">EMAIL</label>
              <div class="col-sm-10 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input name="email" type="email" class="form-control" id="email"  required></span>
                </div>
              </div>
            </div>
            <!--Text Area-->
            <div class="form-group">
              <label class="control-label col-sm-2" for="FEEDBACK"><span class="required"></span>FEEDBACK</label>
              <div class="col-sm-10 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"></span>
                  <textarea class="form-control" name="feedback" rows="4" required></textarea>
                </div>
              </div>
            </div><br>
            <!--SEND Button-->
            <div class="form-group">
              <div class="form-btn">
                <button class="submit-btn btn-lg">SEND</button><br>
              </div>
            </div>
          </form>
        </div>
  </body>
</html>
