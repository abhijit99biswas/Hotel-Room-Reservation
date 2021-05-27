<?php 

?>
<!DOCTYPE html>
<html>
<head>
<meta name="
viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Staff Details</title>
<style>
  .topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
  }
  .icon
    {
    
  background-color:rgba(255,255,255,0.5);
  border: none;
  color: white;
  padding: 12px 16px;
  font-size:30px;
  cursor: pointer;
}

.icon:hover {
  background-color: #213ac7;
  box-shadow: 0 2px 10px #0d5fac;
}
    body{
        background:url("sd.jpg") no-repeat center fixed;
        background-size: cover;
        
    }
    * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width:20%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-left:10%;

}

#myTable {
  border-collapse: collapse;
  width: 80%;
  margin:0 auto;
  border: 1px solid lightseagreen;
  text-align: center;
  font-size: 20px;
  table-layout: fixed;
  background:lightseagreen;
  opacity:0.9;
  color: rgb(255, 255, 255);
 
}

#myTable th, #myTable td {
  border-collapse: collapse;
  margin:auto;
  width: 80%;
  font-size: 20px;
  opacity: 0.9;
  text-align:center;
  padding: 12px;
  
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #4c66db; 
}
</style>
</head>
<body>
    <div class="topright"><a href="service.html"></a><button  onclick="history.back()" class="icon" style="widows:5px;"><i class="fa fa-hand-o-left"></i></button></div>
<h1 style="text-align:center;" >STAFF DETAILS</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search......." title="Type in a name">

<table id="myTable" >
    <tr class="header">
        
      <th style="width:30%;">Name</th>
      <th style="width:10%;">ID</th>
      <th style="width:20%;">Designation</th>
      <th style="width:20%;">Salary</th>
      <th style="width:40%;">Date of join</th>
    </tr>
    <tr>
      
      <td>Alfreds Futterkiste</td>
      <td>101</td>
      <td>Pastry chef</td>
      <td>40,000</td>
      <td>23-07-1990</td>
    </tr>
    <tr>
      
      <td>Vikas Khanna </td>
      <td>102</td>
      <td>Master chef</td>
      <td>50,000</td>
      <td>02-03-2001</td>

    </tr>
    <tr>
      
      <td>Steve</td>
      <td>103</td>
      <td>Manager</td>
      <td>70,000</td>
      <td>05-06-2007</td>
    </tr>
    <tr>
      
      <td>Preethi</td>
      <td>104</td>
      <td>Receptionist</td>
      <td>20,000</td>
      <td>04-05-2012</td>
    </tr>
    <tr>
        
      <td>Satish</td>
      <td>105</td>
      <td>Service maintenance</td>
      <td>20,000</td>
      <td>23-02-2002</td>
    </tr>
    <tr>
        
      <td>Ram</td>
      <td>106</td>
      <td>Service maintenance</td>
      <td>20,000</td>
      <td>09-09-2008</td>
    </tr>
    <tr>
        
      <td>Maria</td>
      <td>107</td>
      <td>Waitress/Home keeping(head)</td>
      <td>30,000</td>
      <td>28-04-2003</td>
    </tr>
    <tr>
        
      <td>Harpreet</td>
      <td>108</td>
      <td>Waitress/Home keeping(head)</td>
      <td>30,000</td>
      <td>01-08-2010</td>
    </tr>
  </table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
