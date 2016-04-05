<!doctype html>
<html>
<head>
<meta charset="utf-8">
   
   <head>
      <title>HotelBooker</title>
          <style>
body{
	background-image:url(Fotos/22.jpg);
	
	
	}
  .register-form{
	width: 500px;
	margin: 0 auto;
	text-align: center;
	padding: 10px;
	color: #fff;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	
}

.register-form form input{padding: 5px;}
.register-form .btn{background: #726E6E;
padding: 7px;
border-radius: 5px;
text-decoration: none;
width: 50px;
display: inline-block;
color: #FFF;}

.register-form .btn:hover{
	background-color:#8C8C8C;
	
	
	}
.register-form .register{
border: 0;
width: 60px;
padding: 8px;
}
      </style>
      
   </head>
<title>Naamloos document</title>
</head>

<body>
<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <body>
 
      
      <div class = "container">
      
     <div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Login</h1>
<form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
 
     <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>

			
         
         
      </div> 
      
   </body>
</html>



</body>
</html>
