<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL); 



  include "assets/database.php";


  if (isset($_POST['submit'])){
    $sql_string = "INSERT INTO rooms (id, room_type, room_number, adults, children, beds, price, description) VALUES ('$_POST[id]','$_POST[room_type]','$_POST[room_number]','$_POST[adults]','$_POST[children]','$_POST[beds]','$_POST[price]','$_POST[description]')";
    $result = mysqli_query($conn, $sql_string);
  }


  else if(isset($_POST['update'])){
    $sql_string = "UPDATE rooms SET room_type =". $_POST['room_type'].
    ", room_number=" . $_POST['room_number'].
    ", adults=" . $_POST['adults'].
    ", children=" . $_POST['children'].
    ", beds=" . $_POST['beds'].
    ", price=" . $_POST['price'].
    ", description=" . $_POST['description'].
    " where id = ". $_POST['id'];
    $result = mysqli_query($conn, $sql_string);
  }
  
  else if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_string =  "DELETE FROM rooms WHERE id = '$id' ";
    mysqli_query($conn, $sql_string);
  }


  $sql_string = "SELECT * FROM rooms";
  $roomData = mysqli_query($conn, $sql_string);


  $conn->close();
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
  <li><a href="#set">Settings</a></li>
</ul>

<div id="content">
  <h2>Welkom op het Admin Dashboard</h2>
  
  <table>
  <tr>
    <th> Roomtype </th>
    <th> Roomnumber </th>
    <th> Adults </th>
    <th> Children </th>
    <th> Beds </th>
    <th> Price </th>
    <th> Description </th>
  </tr>
  <?php     

      while ($record = mysqli_fetch_array($roomData)) {
      echo "<tr>";
      echo "<td>" . $record['room_type'] . "</td>"; 
      echo "<td>" . $record['room_number'] . "</td>";
      echo "<td>" . $record['adults'] . "</td>";
      echo "<td>" . $record['children'] . "</td>";
      echo "<td>" . $record['beds'] . "</td>";
      echo "<td>" . $record['price'] . "</td>";
      echo "<td>" . $record['description'] . "</td>";
      echo "<td>" . "<a href='rooms.php?id=" . $record['id'] . " ' name='delete'> delete </a></td>";
      echo "<td>" . "<a href='update.php?id=" . $record['id'] . " ' name='update'> edit </a></td>";
      echo "</tr>";
    }   
    ?>

</table>


</div>

</body>
</html>
