<!doctype html>
<html>
<head>
<meta charset="utf-8">
   
   <head>
    <?  function fnlogout($field)
{
    $t = time();
    if (!isset($_SESSION[$field]))
        $_SESSION[$field] = time();
    $t0 = $_SESSION[$field];
    $diff = $t - $t0;
    if ($diff > 60)
    {        
        return true;
    }enter code here
    else
    {
        return false;
    }
}
function fnheader()
{
    if(fnlogout("user_time"))
    {
        session_unset();
        session_destroy();
        header("location:login.php?action=expired");
        exit;
    }
}

?>
      <title>HotelBooker</title>
        
        <link rel="stylesheet" type="text/css" href="style/style-Inlog.css">
      
   <title>HotelBooker back-end</title>
</head>

<body>
<?php
   include 'assets/database.php';
    session_start();
?>

<?php
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $query) or die(mysql_error());
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
header("location:admin.php");
}else{
echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
}
}
 ?>
<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <body>
 
      
      <div class = "container">

      
     <div class="register-form">

<div id="logohead"><img src="/img/logo2.png" alt="logo" width="350"></div>
<form action="" method="POST">
    <p><label> </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
 
     <p><label> </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>

			
         
         
      </div> 

      
   </body>
</html>



</body>
</html>