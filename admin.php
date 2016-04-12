<?php
	session_start();
	include("assets/checklogin.php");
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/stylebackend.css">
<title>HotelBooker Back-end</title>
</head>

<body>

<ul>
  <li><br></li>
  <li><img src='img/logo2.png' width="90%" ></li>
  <li><br></li>
  <li><a class="active" href="#dash">Dashboard</a></li>
  <li><a href="#rooms">Add Rooms</a></li>
  <li><a href="#pay">Payment</a></li>
  <li><br></li>
  <li><br></li>
  <li><br></li>
  <li><a class="out" href="assets/logout.php">Log out</a></li>
  
</ul>

<div id="content">
  <h2>Welkom op het Admin Dashboard</h2>
  
  <table>
  <tr>
    <th>Rooms</th>
    <th>Person</th>		
    <th>Payment</th>
  </tr>
  <tr>
    <td>101</td>
    <td>Jelly</td>		
    <td>completed</td>
  </tr>
  <tr>
    <td>102</td>
    <td>Jackson</td>		
    <td>pending</td>
  </tr>
  <tr>
    <td>103</td>
    <td>Doe</td>		
    <td>pending</td>
  </tr>
</table>


</div>

</body>
</html>
