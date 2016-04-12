<?php
include 'database.php';

$user_check= $_SESSION['username'];
 
$sql= "SELECT username FROM user WHERE username='$user_check' ";
$result= mysqli_query($conn, $sql);
 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
$login_user=$row['username'];
 
if(!isset($user_check))
{
header("Location: login.php");
}
?>