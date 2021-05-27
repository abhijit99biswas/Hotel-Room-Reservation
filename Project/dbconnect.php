<?php 
$host="localhost";
$db="project";
$user="root";
$pass="";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error) die($conn->connect_error);
?>