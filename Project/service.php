<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Service Page</title>
    <style>
    
    .word{
        color: rgba(255, 51, 0, 0.918);  
        text-align:center;
        font:70px Arial,sans-serif;
    }
    .icon
    {
    
  background-color:rgba(255,255,255,0.5);
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.icon:hover {
  background-color: #f44336;
  box-shadow: 0 2px 10px #f44336;
}
        
.btn{
        height: 200px;
        width: 200px;
        display: inline-block;
        margin: 30px;
    }
    .middle{
      width: 35%;
      padding: 0 auto;
      margin: 0 auto;
      margin-top: 10%;

    }
button
 {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-color: rgba(255,255,255,0.5);
        font-size:30px;
        border: none;
        color: #f44336;
        box-shadow: 0 1px 5px black;
        cursor: pointer;
        outline: none;
        border: 2px solid #f44336;
        transition: .5s;
        float: left;

        
 }
button:hover{
        background-color: #f44336;
        box-shadow: 0 2px 10px black;
        color: white;
        transition: .5s;
    }
.img
 {
            background-image: url("img1.jpg");
            height:700px;
            width: 100%;
            padding:100px auto;
            background-repeat: no-repeat;
            background-size: cover;
 }
.footer {
  text-align: center;
  padding: 3px;
  background-color: #f44336;
  color: white;
  bottom: 0;
  font:15px,Arial,sans-serif;
  padding-top:auto;
  padding-bottom:auto;
  position: fixed;
  width: 100%;
}

    </style>
</head>

<body>
    <div class="img" > 
        <div style="float: right;"><a href="Admin.php"><button class="icon" style="widows:5px;"><i class="fa fa-home"></i></button></a>
        </div>
        
        <div class="word"><span class="text">WELCOME TO SERVICE MANAGEMENT</span></div>
        <p> </p>
    <div class="middle">
      <div >
        <a href="sd.php"><button class="btn">Staff<br>Details</button></a>      
    </div>
    <div >
        <a href="md.php"><button class="btn">Member<br>Details</button></a>  
    </div>
    </div>
    <div class="footer">
       <footer>
            <p><i class="fa fa-phone"></i>Contact Us for : Electrician-099 | Plumber-092 | Reception-091 | Other-095</p>
        </footer> 
    </div>
    </div>
    
</body>

</html>