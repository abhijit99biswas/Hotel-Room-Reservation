<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
  }
  .pic
        {
            background-image: url("md.jpg");
            height:700px;
            width: 100%;
            padding:auto ;
            background-repeat:no-repeat;
            background-size: cover;
            
        }

 .icon
    {
    
  background-color:rgba(83, 77, 77, 0.849);
  border: none;
  color: white;
  padding: 12px 16px;
  font-size:30px;
  cursor: pointer;
}

.icon:hover {
  background-color: #46474bd8;
  box-shadow: 0 2px 10px #323335e3;
}
.column {
  float: left;
  width: 25%;
  margin-bottom:0 auto;
  padding: 0 8px;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
  
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  opacity:1.0;
}

.title {
  color: grey;
}

</style>
</head>
<body>
    <div class="pic">
        <div class="topright"><a href="service.html"></a><button  onclick="history.back()" class="icon" style="widows:20px;"><i class="fa fa-hand-o-left"></i></button></div>
        
<h2 style="text-align:center;">MEMBER DETAILS</h2>
<p></p>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="rachana.jpeg" alt="Rachana" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">Analyst</p>
        <p>
            I'm from Bangalore Karnataka,known as garden city/silicon valley of asia.
            Loves to tarvel and explore . Interested in solving puzzles and analysing .
        </p>
        <p>rachana@gmail.com</p>        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="abhi.jpeg" alt="Abhijit" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">Web-Developer</p>
        <p>
            I'm from Kharagpur West Bengal,known as the mini India and mouth watering sweets.
            Loves programming and Web-Developement and his world revolves around code and photography.
        </p>
        <p>abhijit@gmail.com</p>        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="sru.jpeg" alt="Sruthy" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">Manager</p>
        <p>
            I'm from Kerala, the god's own state known for beauty of nature which lies with in .
            Loves to go shopping and finding new innovate way to to solve problem in life. 
        </p>
        <p>sruthy@gmail.com</p>        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="avi.jpeg" alt="Avinash" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">Web-Designer</p>
        <p>I'm from Ranchi Jharkhand ,the city of waterfalls known ethnic handicrafts and metal work.
            Loves to code and interested in finding new solution for old problems
        </p>
        <p>avinash@gmail.com</p>        
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>
