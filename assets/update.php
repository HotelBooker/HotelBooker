<html>
<head>
<title>Hotel Booker Rooms</title>
</head>
<body>

<h1>Edit your room:</h1> 
  <form action="rooms.php" method="post">

   <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <p>
        Floor:<br>
        <input type="number" name="floor" placeholder="<?php echo $_GET['floor']; ?>">
    </p>

    <p>
        Room number:<br>
        <input type="number" name="room_number" placeholder="<?php echo $_GET['room_number']; ?>">
    </p>

    <p>
        Adults:<br>
        <input type="number" name="adults" placeholder="<?php echo $_GET['adults']; ?>">
    </p>

    <p>
        Children:<br>
        <input type="number" name="children" placeholder="<?php echo $_GET['children']; ?>">
    </p>

    <p>
        Beds:<br>
        <input type="number" name="beds" placeholder="<?php echo $_GET['beds']; ?>">
    </p>

    <input type="submit" name="update" value="update">
  </form>

<?php

  include "database.php";

/*
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_string =  "DELETE FROM rooms WHERE id = '$id' ";
    mysql_query($sql_string);
  }
*/

?>
</body>
</html>