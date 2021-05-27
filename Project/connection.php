<?php 
$host="localhost";
$db="demo";
$user="root";
$pass="";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error) die($conn->connect_error);
echo "logged in  db sucessfully"."<br>";
?>