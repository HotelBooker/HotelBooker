<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL); 


  include "database.php";


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


  echo "<table>
        <tr>
        <th> room type </th>
        <th> room number </th>
        <th> adults </th>
        <th> children </th>
        <th> beds </th>
        <th> price </th>
        <th> description </th>
        </tr>";

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

  echo "</table>";

  $conn->close();
?>

<html>
<head>
<title>Hotel Booker Rooms</title>
</head>
<body>

<h1>Add a room:</h1> 
  <form action="rooms.php" method="post">
    <p>
        Room type:<br>
        <input type="text" name="room_type">
    </p>

    <p>
        Room number:<br>
        <input type="number" name="room_number">
    </p>

    <p>
        Adults:<br>
        <input type="number" name="adults">
    </p>

    <p>
        Children:<br>
        <input type="number" name="children">
    </p>

    <p>
        Beds:<br>
        <input type="number" name="beds">
    </p>

    <p>
        Price:<br>
        <input type="number" name="price">
    </p>
    
    <p>
        Description:<br>
        <input type="text" name="description">
    </p>

    <input type="submit" name="submit">
  </form>

</body>
</html>